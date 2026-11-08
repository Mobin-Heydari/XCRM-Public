**#** **xCRM — Features & Business Logic**



_> Inventory of&#x20;_**\*\*implemented\*\***_&#x20;features and business rules across the full stack._

*> Sources: Django backend, Next.js frontend, n8n community nodes, browser SDK, Telegram & public FastAPI services.*

*> Excludes roadmaps, ideas wishlists, and planned-but-unimplemented items.*



**---**



**##** **1. System Overview**



xCRM is a multi-tenant CRM / marketing-automation platform composed of:



\| Component | Location | Role |

\|---|---|---|

\| Django backend | \`Backend/Server\` | Core CRM, auth, billing, permissions, Kafka pipelines |

\| Next.js frontend | \`frontend\` | Dashboard UI (RTL/Persian), permission-gated |

\| n8n automation | per-company Docker container | Self-hosted workflow engine per tenant |

\| n8n community nodes | \`n8n Nodes/\` | 6 custom nodes to call xCRM APIs from n8n |

\| Browser SDK | \`sdk/\` | Analytics/tracking script (\`window\.xcrm\`) |

\| Public FastAPI | \`Backend/public fast api\` (:8002) | SDK event/client ingest → Kafka |

\| Telegram FastAPI | \`Backend/telegram listener FastApi\` (:8003) | Telethon listeners, bots, message ingestion → Kafka |

\| Deployment stack | \`server/\` | Docker Compose: Django, Celery, both FastAPIs, n8n, nginx, Kafka + ClickHouse, frontend |

\| Data contracts | \`contracts/\` | YAML specs for SDK/CRM event payloads |



**---**



**##** **2. Cross-Cutting Business Logic**



**###** **2.1 Multi-tenancy**



\- Business models store \`company_id\` as an integer field (not FK) for microservice-readiness (\`Accounts/models/employee.py\`, \`Subscriptions/models/subscription.py\`, …).

\- Company is resolved from the JWT payload or an API-key's company (\`Core/permissions/\_\_init\_\_.py\`).

\- Object-level checks: every object's \`company_id\` must equal the requester's company (\`HasPermission.has_object_permission\`).

\- API keys: key's company must match; permission must be in the key's \`scopes\`.



**###** **2.2 Permission system (\`Core/permissions/\_\_init\_\_.py\`, \`Core/features/\`)**



\- **\*\*36 features, \~120 atomic permissions, 15 categories.\*\*** Each feature is a \`FEATURE\` dict in \`Core/features/\*\*\` aggregated by \`FeatureRegistry\` (\`Core/features/registry.py\`); permission IDs are 7-digit \`type-category-scope-permission\` numbers with glob matching (e.g. \`\*.client.view\`). Categories: n8ns, companies, clients, segments, campaigns, subscriptions, payments, wallets, crms, reports, infrastructures, public_clients, communications, telegram — plus the newer \`api.\*\` scope (e.g. \`api.campaigns.campaign.\*\`, id \`20501\`).

\- The catalog is the single source for \`TOTAL_PERMISSIONS\`, default role seeding, API-key scopes, and \`GET /auth/me/\` (returns effective permission codenames + a \`permissions_version\` hash so the frontend can react to permission changes).

\- Effective permissions = role permissions ∪ employee extra \`permission_ids\`.

\- **\*\*Subscription-filtered assignment:\*\*** permission IDs requested for roles, employees, and API keys are intersected with the plan-allowed set (\`Core/permissions/subscription.py\` → \`validate_permissions_for_company\`); \`GET /companies/permissions/available/\` and \`GET /companies/api-keys/available-permissions/\` return the filtered tree.

\- Default role bundles: owner/admin get all; manager/employee/viewer/support/marketing/finance get category-scoped sets.

\- CEO/Admin bypass all permission checks (after membership + subscription checks).

\- Denials return \`X-Required-Permission\` headers and emit \`permissions.deny\` telemetry.

\- Frontend mirrors the catalog (\`frontend/src/constants/permissions/index.ts\`) with \`PermissionGuard\`, \`useCan\`, and a route→permission map (\`frontend/src/data/route-permissions.ts\`); sidebar entries are filtered by permission.



**###** **2.3 Subscription gating (\`Core/permissions/\_\_init\_\_.py\` → \`\_check_subscription\`)**



\- Employee must be an active member of the requested company (even CEO/Admin).

\- If the company has an active subscription that is **\*\*expired\*\*** or **\*\*suspended\*\***, ALL permissions are denied except subscription-scoped ones (permission IDs starting \`106\`) so the company can still view plans and renew.

\- No subscription at all = free tier allowed.

\- Check errors fail closed.



**###** **2.4 Feature propagation**



\- \`PricingOption.grant_access\` copies plan \`feature_ids\` onto \`Company.feature_ids\` (\`Companies/models/company.py\` → \`sync_features\`).

\- Cancel/expire/suspend clear company features; reactivate re-syncs them.

\- \`Company.has_feature\` gates feature-specific behavior.

\- \`FeatureRegistry.resolve_features\` merges plan feature IDs with per-company boolean overrides; \`validate_dependencies\` checks feature dependency chains.



**###** **2.5 Soft-delete conventions (system-wide)**



\- Segments, pipelines, campaigns, clients, and event definitions soft-delete: \`is_active=False\` **\*\*and\*\*** rename to \`"{name} حذف شده ({timestamp})"\` (guarded against double-renaming). List/get/membership/stage/reminder queries exclude inactive rows.

\- Duplicate pipeline/segment names return **\*\*HTTP 409\*\*** with a Persian message.



**###** **2.6 Backend demo mode (\`Core/demo/\`)**



\- \`is_demo(request)\` = \`?demo=true\` (GET/DELETE) or \`{"demo": true}\` in body (POST/PUT/PATCH).

\- \`@demo_data(fn)\` serves fake payloads; \`@demo_write()\` blocks mutations with a Persian message — applied across 23 view modules (Accounts, Analytics, Campaigns, Clients, Companies, Groups, n8n, Telegram).



**---**



**##** **3. Backend (Django) — \`Backend/Server\`**



Apps: Accounts, Companies, Subscriptions, Payments, Clients, Groups, Campaigns, Telegram, Instagram, Communications, n8n, Analytics, Core, infrastructure.



**###** **3.1 Accounts — Auth & users**



**\*\*Entities:\*\*** User (phone as \`USERNAME_FIELD\`, Iranian \`09…\` validation; types CEO/Employee/Support/Admin/Investor), Employee (company membership, role, extra permissions, join method), Role (per-company, \`permission_ids\`, \`max_members\`, system roles undeletable), OneTimePassword, UserProfile.



**\*\*Features\*\***



\- Two-step phone OTP registration (pending payload stored in OTP; user created only after verify) → JWT issuance.

\- Login via password, OTP, or password + 2FA (separate phone-SMS and email OTP toggles).

\- OTP security: only newest code valid; 60s server-side resend cooldown (HTTP 429); max 5 attempts; HMAC comparison; SMS via IpPanel (dev prints code when \`DEBUG\`).

\- Password reset via OTP; admin reset revokes all refresh tokens.

\- Protected fields: password/phone/email/verification flags cannot be mass-updated.

\- Profile: \`me\`, \`me/update\`, \`me/completion\` (completion percentage).

\- Change email/phone via OTP-verified flows; 2FA enable/disable.

\- CEO can create employees directly.



**###** **3.2 Companies**



**\*\*Entities:\*\*** Company (public_id, slug, \`feature_ids\`, category), CompanyApiKey (SHA-256 hashed, types standard/n8n/wordpress, scoped permission IDs, system keys Fernet-encrypted for re-delivery), EventDefinition/EventProperty schemas, ClientAttributeDefinition, MainCategory/SubCategory, Suggestion templates.



**\*\*Features\*\***



\- Company CRUD, stats, category tree endpoints (\`GET /companies/categories/\`, current/switch \`GET|PATCH /companies/category/\`).

\- API keys: scoped create, show-once display, OTP-required delete, public \`verify\` endpoint, \`available-permissions\` (filtered by plan features).

  - n8n system keys auto-expand to all company permissions; WordPress keys get a fixed restricted scope set.

\- Roles: CRUD, per-action permission updates, clone.

\- Custom client attribute definitions (types, validation, activate/deactivate).

\- Per-company event schema definitions for analytics.

\- Industry category classification; starter suggestions seeded per sub-category.



**###** **3.3 Subscriptions & plans**



**\*\*Entities:\*\*** Plan (codename, \`feature_ids\`, **\*\*\`price_per_day\`\*\*** IRR + currency, resource limits \`max_segments\`/\`max_pipelines\`/\`max_campaigns_running\`/\`n8n_memory\`/\`n8n_core\`, \`max_MAU\`, \`max_storage_gb\`), PricingOption (duration, discount %, recommended flag; **\*\*\`price\` is derived\*\*** = \`plan.price_per_day × (duration_days or 365)\` — no stored price column), Subscription (statuses active/expired/cancelled/trial/suspended; **\*\*unique active subscription per company\*\***; seats; trial). Seeded by \`manage.py load_subscription_plans\` (free/basic/advanced/pro).



**\*\*Business logic\*\*** (\`Subscriptions/services/subscription_services.py\`)



\- Create/extend/upgrade = \`PricingOption.grant_access\` → upserts the unique active subscription, resets dates, re-syncs company features.

\- Cancel/expire/suspend clear company features; **\*\*cancel refunds the remaining period to the wallet\*\*** (\`wallet_services.refund_subscription_remainder\`): \`daily_price × remaining_days\` as a COMPLETED SYSTEM deposit, idempotent (second call returns the original deposit), no refund for permanent subs (\`end_date=None\`).

\- **\*\*Resource caps:\*\*** \`ensure_can_use_subscription_resource(company, 'segment'|'pipeline'|'campaign', exclude_id)\` raises a Persian error at plan limits (campaigns counted only when running/scheduled; \`limit=None\` = unlimited; no subscription = free tier). Enforced at segment/pipeline create and campaign schedule/launch/resume.

\- \`is_expiring_soon\` (≤7 days), seat use/release, \`Subscription.has_access()\` / \`has_n8n()\` (requires features \`10101/10102/10103\`), feature checks (\`has_company_feature\`, \`company_has_any/all_features\`).

\- Expiry/suspension enforced at the permission layer (§2.3).



**\*\*Plan change with proration\*\*** (\`Payments/services/proration_service.py\`, \`subscription_change_service.py\`)



\- Pure daily-rate math: \`daily_price = effective_price / duration_days\` (permanent options use a 365-day reference), remaining value from real period timestamps; all rounding half-up to whole Rial at the server edge — the frontend never computes money.

\- \`POST /payments/subscriptions/quote/\` → stateless upgrade-cost / downgrade-credit / wallet split; rejects same-plan change; **\*\*one pending change order per company\*\***.

\- \`POST /payments/subscriptions/change/\` → atomic (\`select_for_update\`): **\*\*downgrade applies immediately\*\*** and credits unused value to the wallet; **\*\*upgrade/purchase\*\*** deducts the wallet share immediately, then either grants at once or creates a 2-hour pending Order whose snapshot holds an immutable proration record. \`apply_change_after_payment\` runs only after independent gateway verification (idempotent).

\- \`POST /payments/subscriptions/history/\` → merged audit of wallet debits/credits + change orders.

\- Plan switch preserves the current billing period end and re-syncs \`Company.feature_ids\`.



**\*\*API:\*\*** plans CRUD, pricing per plan, subscriptions list/create/detail, \`current\`, \`cancel\` (refunds remainder), \`reactivate\`, \`upgrade\`, \`features\`, \`check-feature\`, \`seats\`, \`stats\`, \`quote\`, \`change\`, \`history\`.



**###** **3.4 Payments**



**\*\*Entities:\*\*** Wallet (one per company, integer IRR balance, negative = debt allowed), WalletDeposit/WalletWithdraw ledger rows (types incl. \`subscription_change\`, \`subscription_change_refund\`, \`subscription_cancel_refund\`), Order (numeric PK, PAID/UNPAID/CANCELLED, expiry, **\*\*type snapshots\*\*** in \`gateway_response\`: \`wallet_deposit\` / \`subscription_change\`), OrderItem (GenericFK), Transaction (pending → pending_verification → success/failed/refunded), PaymentGateway (zarinpal, idpay, wallet; seeded by \`manage.py load_payment_gateways\` with \`${ENV}\` substitution).



**\*\*Business logic\*\*** (\`Payments/services/\`)



\- **\*\*Gateway payment:\*\*** \`initiate_payment\` → adapter \`create_payment\` → redirect + authority → callback \`handle_callback\` verifies (adapter fixes: Zarinpal **\*\*v4\*\***, IDPay 36-char UUID authority; gateway errors surfaced verbatim) → atomic success + \`Order.mark_as_paid\` → dispatches by snapshot type (\`wallet_deposit\` → finalize deposit; \`subscription_change\` → apply change; else → \`OrderItem.grant_access\`).

\- **\*\*Idempotent callback:\*\*** already-SUCCESS transactions short-circuit (\`already_verified: true\`); browser refresh/duplicate callbacks never re-run side effects.

\- **\*\*Two callback shapes:\*\*** \`GET /payments/payment/callback/\<gateway>/\` verifies then redirects to \`/payments/success?order_id=…&status=…&ref=…&deposit=1\` (JSON with \`?format=json\`); \`POST …/callback/\<gateway>/\` is an \`AllowAny\` server-to-server webhook. Callback base from env \`PAYMENT_CALLBACK_URL\`/\`PAYMENT_PUBLIC_BASE_URL\` (per-gateway \`callback_url\` column removed).

\- **\*\*Wallet payment:\*\*** \`POST /payments/payment/wallet-pay/\` pays an order entirely from wallet (\`select_for_update\`, insufficient → Persian error).

\- **\*\*Wallet top-up via gateway:\*\*** \`POST /payments/wallet/deposit/\` creates a PENDING deposit + unpaid 2-h Order; \`Order.mark_as_paid\` → \`finalize_deposit()\` credits the balance (idempotent via \`metadata.applied_to_wallet\`). \`POST /payments/wallet/deposit/manual/\` = system deposit without gateway. \`GET /payments/checkout/gateways/\` lists active non-wallet gateways for checkout.

\- **\*\*Wallet-funded plan changes:\*\*** \`use_wallet\` on quote/change deducts the wallet share at order creation and **\*\*refunds it\*\*** on verification failure, order cancel, or bulk expiry (\`refund_wallet_for_order\`, idempotent via \`snapshot.wallet_refunded\`).

\- **\*\*Wallet ops:\*\*** pending deposit/withdraw rows completed or rejected; withdraws pre-check funds; deposits/withdrawals applied to balance only when COMPLETED.

\- **\*\*Order lifecycle:\*\*** create with expiry; cancel only if unpaid (returns wallet share); bulk \`expire_pending_orders\`.

\- **\*\*Payments overview:\*\*** \`GET /payments/overview/\` — subscription brief (daily price, remaining value, days left), wallet balance, order/transaction stats, pending plan-change.



**\*\*API:\*\*** orders (+cancel, detail), \`payment/init\`, \`payment/callback/\<gateway>\` (GET+POST), \`payment/wallet-pay\`, gateways CRUD + \`checkout/gateways\`, wallet detail/deposit/deposit.manual/withdraw/lists, transactions list/detail, subscriptions \`quote\`/\`change\`/\`history\` (see §3.3).



*> Frontend payments UI is live: 7 routes under \`/payments/\*\` (overview, orders, order detail, wallet, transactions, subscriptions, success) — see §4.*



**###** **3.5 Clients**



**\*\*Entities:\*\*** PublicClient (global cross-company identity with scores), PrivateClient (company-scoped operational entity; IDs: **\*\*LUID\*\*** local system IDs list, **\*\*CUID\*\*** company external ID, **\*\*PID\*\*** 15-char public ID), Phone/Email/Device/IPHistory/IdentityKey/SocialAccount multi-value contact tables (phone tracks Telegram/WhatsApp availability).



**\*\*Features & rules\*\***



\- Consent flags default **\*\*false\*\*** (Meta rules) for email/sms/push/whatsapp.

\- \`save()\` auto-splits/joins first/last ↔ full_name; appends own LUID on create.

\- Identity resolution order for SDK events: CUID → LUID → get-or-create → anonymous client (\`infrastructure/v1/views/ingest.py\`).

\- Phone ↔ chat-id mapping for Telegram lead attribution.

\- Timeline, search, stats, bulk create + bulk-status polling, sub-resources for phones/emails/social accounts.

\- Custom attribute validation against company definitions in the Kafka client pipeline (invalid values logged to CompanyLog).

\- Frontend: list with filters/stats, create/edit/delete, CSV/Excel/JSON/API-URL import with field mapping, detail tabs (attributes, classification, phones, emails, social, devices, tags, timeline).



**###** **3.6 Groups — pipelines, segments, reminders**



**\*\*Pipeline / Kanban\*\***



\- Pipeline → ordered Stages (unique name + order, \`is_final\`); StageTransition rules (from→to, condition JSON, priority).

\- ContactStage: unique (client, pipeline); \`hidden_until\` snooze removes client from active view; \`visible_q()\` for kanban.

\- Stage change (\`contact_stage_service.change_stage\`): atomic \`select_for_update\`, dedupes, rejects same-stage moves, clears snooze, logs StageAction, emits \`CLIENT_STAGE_CHANGED\` to ClickHouse.

\- Add to pipeline (default first stage, re-activate soft-deleted) emits \`CLIENT_ENTERED_PIPELINE\`; bulk add supported.

\- StageAction activity log: called/no_answer/left_voicemail/sms_sent/meeting_scheduled/note/dismiss_reminder/other.



**\*\*Segments\*\***



\- Static (manual members) vs dynamic (conditions JSON with AND/OR); public/private.

\- **\*\*Event-condition segments (ClickHouse-backed):\*\*** conditions of type \`{type: "event", event_name, operator, value, window}\` evaluated by \`Core/rules/\` (schema/compiler/registry/resolvers/evaluator) + \`Groups/services/segment_evaluation_service\`. Every stored event enqueues \`evaluate_client_event_segments_task\`; a Celery beat \`segment-sweep\` (every 15 min) catches time-window conditions DB triggers can't. Routes: \`POST /groups/segments/preview/\` (match count without touching membership) and \`POST /groups/segments/{id}/evaluate/\` (async recompute).

\- **\*\*Parallel segments:\*\*** M2M with priority — a client may belong to only one parallel segment; join rule auto-leaves higher-priority, rejects lower/equal (\`segment_membership_service.check_and_join\`).

\- Dual-write membership to PostgreSQL + ClickHouse; \`client_joined_segment\` event.

\- Membership sources: manual/auto/api/instagram/telegram.



**\*\*Reminders\*\***



\- Follow-up tasks tied to contact stage/client, assigned to employee; pending/completed/dismissed; reassign; \`my-reminders\`, \`contact-reminders\`; overdue index; Jalali-dated notes.



**###** **3.7 Campaigns (UI: "Automations" on \`/automation\`)**



\- Campaign = run an n8n workflow over an audience (segment and/or pipeline members); statuses draft → scheduled → running → paused → completed/cancelled; schedule types once / daily / per_member / **\*\*triggered\*\***.

\- **\*\*Scheduled pipeline:\*\*** Celery beat checker publishes run jobs to Kafka → campaign worker fans out per-client jobs (audience = active segment members ∪ pipeline stage members; daily re-targets all, one-shot excludes already-executed except failed; max 100 msgs/run) → execution runner triggers the n8n workflow per client.

\- **\*\*Event triggers\*\*** (\`Campaigns/models/campaign_trigger.py\`): three types — \`event\` (entry event + property filters → fire immediately), \`delayed\` (fire at \`now + delay\`, minute/hour/day/month), \`absence\` (entry event fired but absence event did NOT occur within a window — cart-abandon style; checked against ClickHouse). Rules: entry filters \`[{key, operator, value}]\`; \`max_fires_per_client\` cap (0 = unlimited); targeting guard (client must be in the campaign's segment/pipeline/stage); DB invariants — max one pending dispatch per (trigger, client), one execution per dispatch; retries ≤ 3 then FAILED. Evaluation runs in the event pipeline (\`\_trigger_event_campaigns\`) plus a beat job \`check-campaign-trigger-dispatches\` (every minute).

\- **\*\*Trigger API:\*\*** \`GET|POST /campaigns/{id}/triggers/\`, \`GET|PUT|PATCH|DELETE /campaigns/{id}/triggers/{tid}/\`, \`POST …/activate|deactivate/\` (Persian validation errors).

\- CampaignExecution log per client: pending/completed/failed, \`n8n_execution_id\`, retry count; **\*\*DLQ after ≥3 failures\*\***.

\- API actions: schedule, launch, pause, resume, complete, stats, executions, test-workflow, retry.

\- Frontend: automation list + stats, 4-step wizard (identity → run mode → audience → review) with a **\*\*trigger builder\*\*** (type-aware operators, segment/pipeline/stage reference dropdowns, Persian natural-language trigger sentences), lifecycle buttons, executions table with retry, duplicate, reset-executions, webhook sample-payload panel with test button.



**###** **3.8 Telegram (Django side)**



**\*\*Entities:\*\*** TelegramEntity (monitored groups/channels, cursor \`last_message_id\`), CompanyTelegramAccount (customer PV accounts, session, auto-assigned to least-loaded TelegramServer), ScoutTelegramAccount (xCRM's own monitors), monitoring configs, TelegramServer (EU FastAPI servers for rotation), global + company keywords, anonymous chats/messages, login sessions.



**\*\*Features & rules\*\***



\- Two-step login: \`start_login\` (Telethon send code) → \`verify_code\` (persist session); per-company API credentials.

\- Keyword matching: case-insensitive substring against global + company keywords (\`keyword_service\`).

\- Kafka telegram pipeline: known chat → company keyword match → \`telegram_message\` event; unknown chat + global keyword → \`anonymous_message\` (\`is_marketing_valuable\`).

\- Server rotation/load balancing across FastAPI servers to reduce ban risk.

\- FastAPI bridge: start/stop listeners, send messages.

\- API: login, verify, logout, refresh, test-message, send-message, settings.



**###** **3.9 Instagram**



\- Per-company connected Instagram accounts + sessions; collector/auth/event services mirroring the Telegram pattern (data collection into the same event/analytics pipeline); instagrapi adapter.



**###** **3.10 Communications**



\- Per-company channel enable flags + **\*\*allowed send-time windows\*\*** (quiet hours) for SMS, email, push, Telegram (\`CompanyCommunicationSettings\`).

\- Per-company provider credentials (SMS/email/push provider configs); pluggable providers.

\- Unified send service routes to channel services; SMS message log.

\- **\*\*Queued/scheduled SMS:\*\*** \`POST /communications/sms/messages/create/\` accepts optional \`sent_at\` (future = scheduled) and stores status \`queued\`; beat job \`send-queued-sms\` (every 7 min) honors enable flags and send windows (held messages don't consume retries), retries up to \`max_retries\` then permanent \`FAILED\` with a structured Persian error; re-read guard prevents double sends.

\- OTP delivery goes through the SMS service (IpPanel).



**###** **3.11 n8n self-hosted per company**



\- \`N8NInstance\`: **\*\*one Docker container + DB schema per company\*\*** (unique port + subdomain, API key, status machine creating/running/stopped/error).

\- Provisioning via Docker manager + schema manager.

\- REST control of workflows/executions used by Campaigns.

\- Workflow sync (create/update/delete hooks push workflow JSON to Django), backups, login re-delivers the n8n system API key so the container can call back into xCRM.



**###** **3.12 Analytics (ClickHouse)**



\- Read-only dashboards: revenue by source, traffic, products, carts, behavior, event analytics, data readiness; company-scoped via ClickHouse; demo-mode overrides.

\- **\*\*Analysis endpoints\*\*** (\`Analytics/v1/\`): funnels (\`/analytics/funnels/\`, \`/compare/\`, saved), retention, cohorts (+compare), RFM, paths, LTV (+by-channel), session stats/duration, per-segment analytics, **\*\*sales-pipeline analytics\*\*** (\`/analytics/pipeline/funnel|conversion|distribution|removed/\` — stage-to-stage conversion, transition matrix, removed-by-stage).

\- **\*\*Export:\*\*** \`GET /analytics/export/?view=…&format=csv|xlsx&days=…\` (streaming; xlsx needs openpyxl).

\- **\*\*Data readiness:\*\*** \`GET /stats/data-readiness/\` returns **\*\*503\*\*** when ClickHouse is unreachable (outages surfaced, not masked).

\- Company event router extras: users analytics/list/activity/timeline, realtime timeline/activity, event list/query.

\- **\*\*Testing:\*\*** \`Analytics/testing/\*\` + \`manage.py seed_analytics_test\` seeds \`fx-\`prefixed fixture rows for golden checks (\`--record/--check/--clean\`).

\- Frontend pages: explorer (multi-event filters, calculations, chart types), funnel, traffic, revenue, top products (with **\*\*product detail pages\*\***), sales opportunities, abandoned carts, inactive customers, contacts journey, **\*\*sales pipeline analysis\*\*** (funnel, conversions, transition matrix with CSV export); \`/analytics\` redirects to \`/analytics/explorer\`.



**###** **3.13 Infrastructure — Kafka pipelines**



\- Topics registry with schema validation: events ingest, clients ingest, telegram messages/events/commands, campaigns run/jobs.

\- **\*\*event_pipeline:\*\*** ingest → validate → resolve client (CUID→LUID→create) → flatten SDK payload (device/location/utm/commerce/dynamic props) → ClickHouse → confirm.

\- **\*\*client_pipeline:\*\*** validate custom attributes → clients ingest → subscription check (unsubscribed companies rejected) → store.

\- **\*\*telegram_pipeline:\*\*** see §3.8.

\- HTTP ingest endpoint \`POST /api/events/ingest/\` (permission \`\*.infrastructures.events.create\`); SDK link / sync-check / monitoring views.

\- **\*\*Celery beat additions:\*\*** \`check-campaign-trigger-dispatches\` (1 min), \`segment-sweep\` (15 min), \`send-queued-sms\` (7 min).



**###** **3.14 Suggestions (starter templates)**



\- **\*\*Six kinds\*\*** of server-seeded templates: \`event\`, \`attribute\`, \`segment\`, \`pipeline\`, \`campaign\` (automation), \`n8n workflow\` — models extend \`SuggestionBase\` (\`code\` unique, name/display, category codes, \`icon\`, \`sort_order\`, \`is_public\`, \`payload\` JSON) in Companies/Groups/Campaigns/n8n apps.

\- **\*\*Sync commands\*\*** (\`Core/suggestions.SuggestionsSyncCommand\` base): \`sync_event_suggestions\`, \`sync_attribute_suggestions\`, \`sync_segment_suggestions\`, \`sync_pipeline_suggestions\`, \`sync_campaign_suggestions\`, \`sync_workflow_suggestions\`, \`sync_company_categories\` (all support \`--path/--dry-run/--purge\`; source JSON under \`static/data/\*\_suggestions/\`; bulk via \`load_suggestions.sh\`).

\- **\*\*Category-scoped lists:\*\*** \`GET /companies/suggestions/\` (events+attributes), \`GET /groups/suggestions/\`, \`GET /campaigns/suggestions/\`, \`GET /n8n/workflows/suggestions/\` — return \`is_public=True\` **\*\*OR\*\*** exact sub-category match; a company without a category sees only public templates.

\- **\*\*One-click "use" endpoints\*\*** (idempotent — 201 created vs 200 already-exists): \`…/suggestions/events|attributes|segments|pipelines|campaigns|workflows/use/\` (list or \`/{pk}/use/\`). Created resources record \`suggestion_origin = suggestion.code\`; \`demo_write()\` guards demo mode.

\- **\*\*Campaign extras:\*\*** can chain-create segment/pipeline from payload codes first, and resolve the workflow by \`workflow_suggestion_code\` — **\*\*importing the template into the company's n8n instance on the fly\*\*** (create + activate + webhook mirror) when not already imported.

\- Frontend: \`?view=suggested\` template galleries on events/attributes/groups/pipelines/workflows lists with one-click "ایجاد" or "customize" (prefills the create form); the automation wizard's source step is a suggestion gallery; company category cached client-side (\`xcrm:company:{id}:category:v1\`).



**###** **3.15 Webhooks (n8n mirror)**



\- \`N8NWebhook\` model (FK workflow, node_name/type, path, method, webhook_id, full_url) populated by workflow sync hooks and \`manage.py n8n_info --webhooks --sync\`.

\- Workflow list API embeds \`webhooks[]\` per workflow → feeds the frontend \`/automation/webhooks\` page (permission \`dashboard.n8ns.webhook.view\`, feature \`10103\`).

\- Campaign \`test-workflow\` calls the first webhook and returns \`webhook_url\`; workflow-suggestion import mirrors webhooks so campaigns can fire immediately.

\- Separate: payment gateway **\*\*server-to-server\*\*** webhook \`POST /payments/payment/callback/\<gateway>/\` (§3.4).



**---**



**##** **4. Frontend (Next.js) — \`frontend\`**



Stack: App Router, NextAuth (JWT credentials + refresh), TanStack Query, Zustand, Framer Motion, RTL Persian UI. Gating: \`RouteGuard\` + per-page \`PermissionGuard\`; 3 API 403s in 5 minutes → forced sign-out.



\| Area | Features |

\|---|---|

\| **\*\*Home\*\*** (\`/\`) | **\*\*12-step onboarding roadmap\*\*** (\`version2\`): step cards + modal, per-step tips/estimate/action links, progress from \`GET /dashboard/roadmap/\` + localStorage skips, sidebar badge with remaining steps (legacy \`version1\` hero/use-cases/capabilities still in tree but unused); sidebar search |

\| **\*\*Shell / header\*\*** | Global **\*\*command menu\*\*** (\`Cmd/Ctrl+K\` or header button): glass palette over a static page catalog (automation/clients/company/crm/analytics/subscription), grouped results, keyboard nav; **\*\*notifications bell\*\*** (pending-reminders count + list); **\*\*AI Assistant\*\*** button — builds a page-aware Persian prompt (route catalog + per-page hero context + response principles) and deep-links to ChatGPT/Claude/Grok (no backend call) |

\| **\*\*Auth\*\*** | Multi-step login (password / OTP / password+2FA), register with OTP activation, forgot password, phone verify, inactive-account state, resend cooldown |

\| **\*\*Clients\*\*** | List + filters + stats; CRUD; bulk create; CSV/Excel/JSON/API import with mapping; detail with custom attributes, phones, emails, social accounts, devices, tags, activity timeline; **\*\*suggestion template views\*\*** (\`?view=suggested\`) |

\| **\*\*Automations\*\*** (ex-Campaigns, \`/automation\`) | List + stats with resource views; **\*\*4-step wizard\*\*** (identity → run mode → audience → review); **\*\*trigger builder\*\*** (event/delayed/absence, type-aware filters, segment/pipeline/stage dropdowns, Persian trigger sentences); suggestion gallery with one-click create/import; detail tabs (overview/schedule/executions/stats/settings) incl. webhook sample payload + test, duplicate, reset executions; launch/pause/resume/complete; per-execution retry; **\*\*n8n / workflows / webhooks\*\*** sub-pages; workflow **\*\*visual preview modal\*\*** (zoom/pan node graph); \`N8NEnterButton\` with build countdown |

\| **\*\*Payments\*\*** (\`/payments/\*\`) | **\*\*Overview\*\*** (subscription hero, expiring-soon, wallet/pending/paid stats, quick actions, order donut, recent orders/transactions); **\*\*orders\*\*** list + detail (pay via gateway or wallet, cancel, wallet-share refund badge); **\*\*wallet\*\*** (balance, deposit modal → gateway redirect, withdraw modal, ledger with metadata decoding, plan-change credits timeline); **\*\*transactions\*\*** (status donut, filters, search); **\*\*subscriptions\*\*** (hero + seats meter + features modal, plan picker with billing-cycle pills, comparison table, change-plan modal with proration quote + \`use_wallet\` toggle, cancel modal with remainder-refund warning, FAQ/highlights); **\*\*success\*\*** page (order/deposit/plan-change summary) |

\| **\*\*Campaigns\*\*** | *\*(moved to Automations above — no separate \`/campaigns\` route exists)\** |

\| **\*\*n8n\*\*** | Instance status card, connection health, login-to-n8n link; workflow list + sync from n8n |

\| **\*\*Webhooks\*\*** | Webhook list page — **\*\*route live but sidebar entry commented out\*\*** |

\| **\*\*Pipeline kanban\*\*** | Boards, stage CRUD + reorder, add client or whole segment, drag/change stage, transfer, hide-for-later (snooze), notes, overdue-reminders modal, stats |

\| **\*\*Transitions\*\*** | Transition rules management — route exists but **\*\*middleware redirects \`/sales/transitions\` → \`/sales/pipeline\`\*\*** (currently unreachable by URL) |

\| **\*\*Reminders\*\*** | CRUD, complete, dismiss, reassign; list by assignee |

\| **\*\*Groups/Segments\*\*** | List + stats + parallel groups; dynamic AND/OR condition builder (personal, location, engagement, consent, tags, visits, inactivity, **\*\*event conditions\*\***); **\*\*suggestion template view\*\***; manual members; detail tabs |

\| **\*\*Events\*\*** | Events list + **\*\*suggestion template view\*\*** |

\| **\*\*Analytics\*\*** | Explorer (default landing), funnel, traffic, revenue, top products (+ **\*\*product detail\*\***), sales opportunities, abandoned carts, inactive customers, contacts journey, **\*\*sales pipeline analysis\*\*** (funnel, stage conversions, transition matrix); **\*\*CSV export\*\*** on stats pages; overview/events/users/realtime as standalone routes were removed (\`/analytics\` → \`/analytics/explorer\`) |

\| **\*\*Company\*\*** | Tabbed overview: stats, info edit, category, subscription (hero, plan picker, upgrade/cancel/reactivate), logo/cover |

\| **\*\*Employees / Roles / Permissions\*\*** | Employee CRUD (CEO creates); role CRUD + clone; permission tree + role×permission matrix (plan-filtered) |

\| **\*\*API keys\*\*** | Scoped create, show-once modal, revoke (OTP for system keys), code examples (cURL/JS/TS/Python/Go/PHP/Ruby/Java) |

\| **\*\*Attributes / Event definitions\*\*** | Client attribute definition CRUD; event definition CRUD + stats; suggestion templates |

\| **\*\*Communications\*\*** | Channel toggles, provider CRUD + ping/test (SMS/email/push), SMS log |

\| **\*\*Website SDK\*\*** | One-line \`\<script cpid=…>\` install + WordPress plugin guide |

\| **\*\*Telegram\*\*** | Account cards, login modal (phone + code), logout, refresh, settings, test message |

\| **\*\*User settings\*\*** | Profile (avatar, DOB, national code…), account (change email/phone via OTP), security (password, email/phone 2FA) |

\| **\*\*PWA\*\*** | Installable app: service worker (network-first navigations with \`/offline\` fallback, static caching, API/auth never cached), web manifest with Android/iOS/Windows icons, install prompt (Chromium) / iOS Add-to-Home-Screen guide, update prompt, offline indicator; push-notification settings UI is inert until backend VAPID endpoints exist |

\| **\*\*Demo mode\*\*** | Global toggle → \`demo=true\` on every API call (backend serves demo data via \`@demo_data\` / blocks writes via \`@demo_write\`); local fixtures for subscription, groups, conditions |

\| **\*\*Public/legal/errors\*\*** | Privacy, terms, 400/403/500/503 and not-found pages; SEO metadata + sitemap/robots per route; **\*\*legacy URL redirect engine\*\*** in middleware (\~350 aliases incl. misspellings, \`/campaign[s]? → /automation\`, \`/crm/\* → /sales/\*|/clients/\*\`, payments/subscription aliases) |



**---**



**##** **5. n8n Community Nodes — \`n8n Nodes/\`**



Six implemented npm packages (n8n Nodes API v1), deployed into \`server/n8n/volumes/custom-nodes/\`:



\| Node | Capability |

\|---|---|

\| **\*\*XcrmClient\*\*** | Create (\`POST /api2/v1/clients/\`) or update (PATCH, resolved by phone search) CRM clients; dropdowns for pipeline/stage/group loaded from live APIs; free-form JSON client data; Persian errors; \`continueOnFail\` |

\| **\*\*XcrmSendSms\*\*** | Send SMS via company-configured providers; normal or pattern messages (\`pattern_code\` + values) |

\| **\*\*XcrmTelegramAccounts\*\*** | List company Telegram accounts (all/active/inactive); optional first-active-only output |

\| **\*\*XcrmTelegramSendMessage\*\*** | Send Telegram message from a company account (saved messages / @username / chat ID) |

\| **\*\*XcrmTimeCondition\*\*** | Pure logic node: compare elapsed time of a nested date field vs duration; true/false outputs |

\| **\*\*XcrmTriggerCampaign\*\*** | POST webhook trigger for campaigns; validates \`X-API-Key\` against Django (\`/api2/v1/companies/api-keys/n8n/verify/\`, fail-closed with cache) + tenant binding (payload \`company_id\` must match key's company) |



**\*\*Shared business logic\*\***



\- API-key lifecycle: xCRM JWT login → n8n hook verifies via \`auth/n8n/verify\` → creates company n8n-type API key stored only in n8n settings; nodes auto-recreate the key on 401/missing (single-flight, cooldown) via \`recreate\` + \`X-N8N-API-Key\`.

\- Workflow sync hooks push workflow JSON to Django on create/update/delete.

\- All nodes resolve Django via \`N8N_JWT_AUTH_URL\` (default \`http\://host.docker.internal:8000\`).



_> \`n8n Nodes/list.md\` catalogs \~87 planned nodes —&#x20;_**\*\*not implemented\*\***_; excluded here._



**---**



**##** **6. Browser SDK — \`sdk/\`**



Vanilla JS IIFE (\`window\.xcrm\`), built to \`dist/xcrm.min.js\`, also shipped into a WordPress plugin path.



**\*\*Features\*\***



\- **\*\*Init/config:\*\*** required \`cpid\` (company), apiUrl, autoTrack, fingerprint, webVitals, errorTracking, consent, batch interval/size, 30-min session timeout, 365-day cookies; boot-safe config snapshot (defer/CDN friendly); auto-init on DOMContentLoaded.

\- **\*\*Consent:\*\*** optional RTL Persian banner; localStorage state; denials expire after 24 h; SDK inert until granted when required.

\- **\*\*Identity:\*\*** \`identify(client_pid, traits)\`; anonymous LUID (UUID) in cookie + localStorage; auto-identify priority: \`\<meta name="xcrm-page">\` JSON → user API (nonce) → \`window\.xcrmUser\` → anonymous; phone normalized to E.164 client-side.

\- **\*\*Tracking:\*\*** \`event/pageview/custom/outbound\`; auto-tracking of clicks (incl. declarative \`data-xcrm-event\` / \`data-xcrm-prop-\*\`), form submits, copy, outbound links; SPA pageviews via history hooks; catalog: page_view, session_start, product_view, add/remove_to_cart, search, form_submit, click, copy, error, download, video_play, share.

\- **\*\*E-commerce:\*\*** product model + view/share; client-side cart/wishlist/viewed history (last 50, 30 days); product auto-detection from meta / OG / JSON-LD / URL patterns.

\- **\*\*UTM:\*\*** 9 params, first-touch + last-touch (30 min) + history; injected into every event.

\- **\*\*Device:\*\*** fingerprint (screen, TZ, languages, canvas, WebGL, audio…) → device ID cookie; browser/OS detection.

\- **\*\*Web Vitals:\*\*** LCP, CLS, INP, FCP, TTFB with ratings.

\- **\*\*Error tracking:\*\*** onerror + unhandledrejection → error events with stack; 60 s dedupe; immediate flush.

\- **\*\*Web Push:\*\*** VAPID subscribe/unsubscribe via ServiceWorker; max 3 permission prompts ≥7 days apart; push show/click events.

\- **\*\*Delivery:\*\*** queue → batches (50 events / 5 s) → \`POST /events/batch\` (or \`/events/ingest\`); \`sendBeacon\` preferred; flush on page hide; events enriched with session, device, UTM, traits.



**\*\*Rules:\*\*** events always carry \`company_pid\` + \`luid\`; \`client_pid\` once identified; server batch cap 100.



**---**



**##** **7. FastAPI Services — \`Backend/public fast api\` & \`Backend/telegram listener FastApi\`**



**###** **7.1 Public event ingestion API (:8002)**



\- \`POST /events/ingest\` + \`/events/batch\` (max 100) — SDK endpoints; \`POST /clients/ingest\` + \`/clients/batch\`; \`GET /health\`; SDK debug log routes.

\- Server-side enrichment: User-Agent → device.os/browser; GeoLite2 + IP → country/city.

\- Publishes to Kafka \`xcrm.events.ingest\` keyed by \`company_pid\`; optional \`X-API-Key\` auth; ingest-and-forward (no local persistence).



**###** **7.2 Telegram listener (:8003)**



**\*\*Features\*\***



\- **\*\*Health:\*\*** version, Kafka connectivity, debug flags.

\- **\*\*User-account Telethon pool:\*\*** multi-account \`StringSession\` pool; connect/disconnect/send.

\- **\*\*Bot manager + webhook:\*\*** start/stop bots; \`POST /api/v1/bot/webhook/{token}\` accepts Telegram message/callback payloads; status endpoint.

\- **\*\*Entity listener:\*\*** stream group/channel messages from Django's \`last_message_id\` checkpoint → enrich → Kafka \`xcrm.telegram.messages\` → persist new checkpoint to Django.

\- **\*\*PV listener:\*\*** private-chat messages → Kafka **\*\*and\*\*** Django (\`metadata.is_private=true\`).

\- **\*\*Telethon proxy (RPC facade for Django):\*\*** send-code, verify-code (returns session_string), logout, send-message, get-me/contacts/media/dialogs/participants/groups/channels.

\- Shared-secret \`X-API-Key\` middleware; Kafka producer \`acks=all\` (SASL_SSL in prod, PLAINTEXT locally).



**\*\*Bot registration FSM (business logic)\*\***



1\. \`/start\` → ask phone; \`/restart\`, \`/state\`, \`/help\`; deep-link reply "ثبت شد!" without restarting.

2\. Phone normalized to \`+98…\`; found in Django (scoped to bot's company) → link chat to CRM client → greet by name → done.

3\. Not found → collect alternate numbers ("ندارم" button); second number found → attach to that client; none found → **\*\*create client\*\*** with all collected phones + Telegram name.

4\. State per user per bot; cleared on stop.



**\*\*Ingestion rules:\*\*** incremental from Django checkpoints; high-water mark persisted even on partial failure.



**---**



**##** **8. Key End-to-End Flows**



1\. **\*\*Subscription purchase:\*\*** Order(PricingOption) → \`payment/init\` (zarinpal/idpay) or wallet-pay → gateway callback verify (atomic, idempotent; GET redirects to \`/payments/success\`, POST is the S2S webhook) → Order PAID → \`mark_as_paid\` dispatches by snapshot → \`grant_access\` → Subscription upsert (unique active per company) + \`Company.feature_ids\` sync → permission/feature resolution updates immediately.

2\. **\*\*Plan change (proration):\*\*** \`POST /subscriptions/quote/\` (daily-rate math, \`use_wallet\`) → \`POST /subscriptions/change/\` → downgrade applies immediately + wallet credit; upgrade deducts wallet share then pending Order → gateway → \`apply_change_after_payment\` (idempotent); failed/cancelled/expired → \`refund_wallet_for_order\`.

3\. **\*\*Cancel with refund:\*\*** \`POST /subscriptions/{id}/cancel/\` → inside the same atomic block credits \`daily_price × remaining_days\` to the wallet (idempotent SYSTEM deposit, permanent subs excluded) + clears company features.

4\. **\*\*Permission check (every request):\*\*** JWT/API-key → company_id → Employee membership → subscription health (106-scope exception) → CEO/Admin bypass or effective permissions check (plan-filtered for role/employee/API-key assignments).

5\. **\*\*SDK event:\*\*** browser SDK batch → Public FastAPI (UA/geo enrichment) → Kafka \`xcrm.events.ingest\` → Django event pipeline (identity resolution + validation) → ClickHouse; then fan-out: CRM events (entered pipeline, stage changed, joined segment), **\*\*event-trigger campaigns\*\***, and **\*\*event-condition segment evaluation\*\***.

6\. **\*\*Telegram lead capture:\*\*** EU FastAPI (Telethon) → Kafka → pipeline: known chat → company keyword match → marketing event; unknown + global keyword → anonymous message → later mapped via SocialAccount/phone → attributed to company/client. Bot \`/start\` flow matches or creates the CRM client directly.

7\. **\*\*Scheduled campaign execution:\*\*** Campaign (n8n workflow + segment/pipeline audience) → Celery checker → Kafka run job → worker fans out per-member jobs → n8n executes per client → CampaignExecution log (retry ≤3, then DLQ).

8\. **\*\*Triggered automation:\*\*** event stored → \`\_trigger_event_campaigns\` matches entry filters → dispatch row (immediate / delayed \`fire_at\` / absence checked by minute beat job) → targeting guard → CampaignExecution → Kafka \`CAMPAIGN_JOB\` (one pending dispatch per trigger+client, one execution per dispatch).

9\. **\*\*Client kanban:\*\*** add client (first stage) → atomic \`change_stage\` (dedupe, action log, ClickHouse event) → snooze via \`hidden_until\` → reminders assigned per employee.

10\. **\*\*n8n auth loop:\*\*** xCRM login → JWT → n8n hook verifies → company n8n API key stored in n8n → nodes call Django with \`X-API-Key\` (auto-recreate on 401).

11\. **\*\*Suggestion adoption:\*\*** category-scoped template list → \`POST …/suggestions/{kind}/use/\` → idempotent create (or import workflow into the company's n8n instance) → resource records \`suggestion_origin\` for the "created" badge.



**---**



**##** **Appendix — API surface reference**



\- **\*\*Postman:\*\*** \`Postman/xCrm.json\` — folders: public FastApi, Accounts, Auth, Campaigns, Companies, N8N, Payments, Segments, Subscriptions.

\- **\*\*Contracts:\*\*** \`contracts/event_base.yaml\` + \`contracts/events/\*.yaml\` — SDK event schemas (ecommerce, search, CRM pipeline/segment events); keep Django/FastAPI/SDK in sync.

\- **\*\*Management commands (selection):\*\*** \`load_payment_gateways\`, \`load_subscription_plans\`, \`sync_event_template\` / \`propagate_event_templates\` (contract → company EventDefinitions), \`sync_role_permissions\`, \`sync_company_categories\`, \`sync\_\*\_suggestions\` (×6) + \`load_suggestions.sh\`, \`n8n_info --webhooks --sync\`, \`seed_analytics_test\`, \`resync_clients_to_ch\`, \`clear_click_house_data\`, \`demo\` / \`create_test_company\` / \`seed_clients\`.
