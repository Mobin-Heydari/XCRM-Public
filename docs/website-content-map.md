# XCRM Forosh — Website Content Map

**Website:** <https://xcrmforosh.com/>  
**Document purpose:** Canonical information architecture, route plan, page ownership, content requirements and internal-linking map for the public XCRM marketing website.  
**Last reviewed:** 2026-11-08  
**Primary language:** Persian (fa-IR), RTL.  
**Platform:** WordPress Hello Elementor child theme.

---

## 1. Content strategy

The website should explain XCRM as one connected customer data, CRM, analytics and marketing-automation platform. The content architecture must help five visitor types move from problem recognition to product understanding and then to an appropriate next action:

1. **Digital marketers:** understand customer behavior, analyze journeys, create audience segments and activate campaigns/automations.
2. **Business owners and sales leaders:** organize customers, manage pipeline and follow-ups, monitor performance and coordinate teams.
3. **E-commerce teams:** track product and cart behavior, analyze conversion, segment customers and configure follow-up workflows.
4. **Agencies and technical partners:** connect websites and systems, manage customer data and automate workflows.
5. **Developers and implementation teams:** install the browser SDK/WordPress integration, use scoped API keys, work with available APIs and connect n8n.

### Core positioning

Use a clear, evidence-based positioning statement such as:

> XCRM connects customer data, behavior analytics, customer management and marketing automation so businesses can understand customer journeys and act on relevant signals.

Persian copy should be written naturally for the target audience. Do not claim guaranteed revenue/conversion improvements or capabilities that are not verified in the implementation.

### Content principles

- Every route has one primary audience, one search intent and one conversion objective.
- The feature directory explains the product map; feature pages explain one capability in depth.
- Solution pages explain how existing capabilities address an industry's workflow; they are not duplicate feature pages.
- Integration pages document a real connection and its limits.
- Developer pages use actual code/API behavior, not invented samples.
- Resource pages educate; they do not repeat product landing-page copy.
- All pages must connect visitors to related pages and a relevant CTA.
- Product details must be checked against `docs/product/features-business-logic.md` and current code before publication.

---

## 2. Route status legend

| Status | Meaning |
|---|---|
| **EXISTING — KEEP** | Public page verified; preserve and improve it |
| **EXISTING — FIX** | Public destination exists but has a critical defect |
| **EXISTING SECTION** | Content/anchor appears on another page; not a separate page route |
| **VERIFY** | A navigation item or destination was observed, but the dedicated public route/page was not verified; inspect WordPress before creating |
| **PROPOSED — P0** | Critical missing/repair work |
| **PROPOSED — P1** | Core feature, integration or conversion page |
| **PROPOSED — P2** | Secondary adoption or audience page |
| **PROPOSED — P3** | Longer-term education/SEO content |

Never treat a proposed route as an existing page. Update this map whenever implementation changes a route or page status.

---

## 3. Top-level site map

```text
/
├── Product
│   └── /features/
│       ├── /features/customer-management/
│       ├── /features/website-tracking/
│       ├── /features/identity-resolution/
│       ├── /features/event-management/
│       ├── /features/analytics/
│       ├── /features/revenue-attribution/
│       ├── /features/segmentation/
│       ├── /features/sales-pipeline/
│       ├── /features/automation/
│       ├── /features/communication/
│       ├── /features/workflow-automation/
│       ├── /features/templates/
│       └── /features/team-management/
│
├── Solutions
│   ├── /for-marketers/                 [existing]
│   ├── /for-business/                 [existing]
│   └── /solutions/
│       ├── /solutions/ecommerce/
│       ├── /solutions/agencies/
│       ├── /solutions/education/
│       ├── /solutions/b2b-sales/
│       └── /solutions/service-businesses/
│
├── Integrations
│   └── /integrations/
│       ├── /integrations/wordpress/
│       ├── /integrations/telegram/
│       └── /integrations/instagram/
│
├── Developers
│   └── /developers/
│       ├── /developers/sdk/
│       ├── /developers/api/
│       └── /developers/webhooks/
│
├── Conversion
│   ├── /pricing/
│   ├── /demo/
│   ├── /contact/
│   ├── /how-it-works/
│   └── /getting-started/
│
├── Resources
│   ├── /resources/
│   ├── /guides/
│   ├── /faq/
│   ├── /glossary/
│   └── /case-studies/
│
└── Company & Trust
    ├── /about/
    ├── /security/
    ├── /privacy-policy/               [currently 404; fix]
    └── /terms/                        [currently 404; fix]
```

This is the intended information architecture, not a claim that these routes already exist. Verify the WordPress page list, permalink configuration, templates and `functions.php` before creating anything.

---

## 4. Current public pages and existing sections

| Route | Status | Audience | Page purpose | Required next action |
|---|---|---|---|---|
| `/` | EXISTING — KEEP | All visitors | Position XCRM and route visitors to marketer/business journeys | Remove unsupported/zero metrics; reconcile capability claims; link feature cards to detail pages |
| `/for-marketers/` | EXISTING — FIX | Digital marketers | Explain how XCRM supports customer data, analysis, segmentation and marketing automation | Remove unfinished `به‌زودی` copy; correct unsupported claims; add feature links and a stronger demo/signup path |
| `/for-business/` | EXISTING — KEEP | Business owners, sales leaders | Explain lead/customer management, pipeline, reminders, segments, communication and team management | Preserve problem-first narrative; qualify claims; link sections to dedicated feature/solution pages |
| `/privacy-policy/` | EXISTING — FIX | All users | Privacy disclosures | Currently returned 404 from footer link; create legally reviewed content or repair intended route |
| `/terms/` | EXISTING — FIX | All users | Terms of use | Currently returned 404 from footer link; create legally reviewed content or repair intended route |
| Homepage “Why XCRM” | EXISTING SECTION | All visitors | Product positioning | Keep as a concise homepage section; do not create a duplicate page by default |
| Homepage “Features” | EXISTING SECTION | All visitors | Six broad feature summaries | Promote to `/features/` directory and link detail pages |
| Homepage “Getting started” | EXISTING SECTION | New users | Three-step onboarding story | Keep summary; expand into `/how-it-works/` or `/getting-started/` |
| Homepage “Contact” nav item | VERIFY | Prospects/current customers | Contact navigation | Inspect target and form. Create `/contact/` if no functional dedicated destination exists |
| Business pricing CTA | VERIFY | Prospects | Plan/pricing path | Currently sends to dashboard pricing destination; inspect if a public WordPress pricing route exists before creating `/pricing/` |
| Dashboard login/signup | EXISTING EXTERNAL DESTINATION | Existing and new users | Account access and registration | Preserve verified destination; validate free trial wording and signup behavior |

---

## 5. Product feature pages

The feature directory should contain the following pages. They represent implemented product areas documented in the supplied feature inventory. The page content must remain within the verified scope below.

### 5.1 Customer Data & Analytics

| Route | Page title | Intended audience | User problem / search intent | Required content sections | Primary CTA | Link to |
|---|---|---|---|---|---|---|
| `/features/customer-management/` | Customer Management & Unified Profiles | Business owners, sales, support, marketing | Customer data is fragmented across spreadsheets, phone/email records and tools | Customer records; identity resolution; multiple phones/emails; social accounts; devices/IP history; custom attributes; tags; activity timeline; search/filters; bulk create/import; CSV/Excel/JSON/API URL mapping | Manage customer data / Start free | Segmentation, Sales Pipeline, Analytics, Automation |
| `/features/website-tracking/` | Website Tracking & Browser SDK | Marketers, e-commerce, developers | Website behavior is not connected to identifiable customer records and useful events | SDK installation; `cpid`; anonymous/identified identity; sessions; page/event tracking; clicks/forms/outbound links; e-commerce events; UTM attribution; device/browser; Web Vitals; error tracking; consent; batch delivery; WordPress path | Install the SDK / View developer docs | Customer Management, Analytics, Segmentation, Automation, WordPress integration |
| `/features/analytics/` | Behavioral Analytics & Reporting | Marketers, founders, analysts, sales leaders | Teams cannot see where users drop off, which audiences retain or which sources contribute revenue | Event explorer; traffic; revenue by source; product/cart analytics; funnels and comparisons; retention; cohorts; RFM; paths; LTV/by channel; session analytics; segment analytics; pipeline funnel/conversion/transition matrix; CSV/XLSX export | Explore analytics / Start free | Tracking, Segmentation, Sales Pipeline, Automation |
| `/features/revenue-attribution/` | Revenue & Marketing Attribution | Digital marketers, e-commerce, performance/growth teams, business owners | Teams do not know which sources bring valuable visitors or how acquisition ties to revenue and LTV | Nine-param UTM tracking; first-touch & last-touch (30-min) + history; revenue by source; traffic-source reporting; LTV by acquisition channel; complete data flow; business use cases | Start revenue attribution / View analytics | Tracking, Customer Management, Analytics, Segmentation |
| `/features/identity-resolution/` | Customer Identity Resolution | E-commerce, marketing/analytics teams, product teams, developers, customer-data specialists | Website activity and customer records are disconnected across touchpoints | Identifiers (LUID/CUID/PID); anonymous vs identified; resolution order (CUID → LUID → get-or-create → anonymous, company-scoped, no auto-merge); multi-value phones/emails/devices/IP/identity keys/social; SDK identify(client_pid, traits) + auto-identify chain; data connection to analytics/segmentation; privacy & tenant isolation | Manage customer identity / Start free | Customer Management, Website Tracking, Event Management, Segmentation, Behavioral Analytics, Revenue Attribution |
| `/features/event-management/` | Event Management & Custom Tracking | Digital marketers, product managers, e-commerce teams, developers, data analysts | Meaningful customer actions are not captured as analyzable events | Company event definitions (key/display/description, system vs custom, live stats); event properties (5 types, required/filterable/reportable/indexed flags, validation); 14 built-in SDK events in 5 groups; custom events via xcrm.event + data-xcrm-event/data-xcrm-prop-*; event data flow; server-seeded category suggestions with one-click create; events → profiles/segments/analytics/triggered automation; events vs customer attributes | Define your events / View developer docs | Website Tracking, Identity Resolution, Customer Management, Behavioral Analytics, Segmentation, Marketing Automation, Revenue Attribution |
| `/features/segmentation/` | Customer Segmentation | Marketers, CRM operators, sales teams | One-size-fits-all audiences make outreach less relevant | Static/dynamic segments; AND/OR rules; attribute and event conditions; time windows; preview count; async evaluation; periodic sweep; parallel segment priority; membership sources; campaign audience use | Create customer segments | Tracking, Customer Management, Analytics, Automation |
| `/features/sales-pipeline/` | Sales Pipeline & Follow-ups | Business owners, sales managers, B2B teams | Leads and deals get stuck or missed between stages and follow-ups | Multiple pipelines; ordered stages; final stage; transition rules; Kanban; add individual/segment; stage history; calls/no-answer/voicemail/SMS/meeting/note activities; reminders; assignment/reassignment; snooze; pipeline analytics | Organize sales pipeline | Customer Management, Segmentation, Team Management, Analytics |

### 5.2 Marketing Automation & Communication

| Route | Page title | Intended audience | User problem / search intent | Required content sections | Primary CTA | Link to |
|---|---|---|---|---|---|---|
| `/features/automation/` | Marketing Automation & Campaign Triggers | Marketers, growth teams, CRM operators | Marketing actions are not activated by the actual customer journey | Campaign lifecycle; one-time/daily/per-member schedules; segment/pipeline/stage audiences; immediate event triggers; delayed triggers; absence triggers; property filters; firing limits; n8n workflow execution; per-client execution logs; retries and failed jobs | Build an automation / Start free | Segmentation, Tracking, Workflow Automation, Communication |
| `/features/communication/` | Customer Communication | Marketing and customer operations teams | Supported communication channels are managed separately or without consistent configuration | SMS, email, Push and Telegram where supported; company channel toggles; provider configuration/testing; quiet hours; sending windows; queued/scheduled SMS; logs and retry behavior; integration with segments/automation | Configure communication channels | Automation, Segmentation, Telegram integration, Developers |

### 5.3 Workflow Infrastructure, Integrations & Developers

| Route | Page title | Intended audience | User problem / search intent | Required content sections | Primary CTA | Link to |
|---|---|---|---|---|---|---|
| `/features/workflow-automation/` | Dedicated n8n Workflow Automation | Technical teams, agencies, automation specialists | Teams need a workflow engine connected to CRM data and company automation | One Docker n8n instance and DB schema per company; provisioning/status; workflow CRUD/sync; backups; campaign execution; webhooks; authentication/key flow; six implemented custom nodes and their verified jobs | Explore n8n automation | Automation, Developers, Communication, Telegram |
| `/features/templates/` | Ready-Made Templates & Suggestions | New users, marketers, CRM admins | Setting up events, attributes, segments, pipelines and automations from scratch takes effort | Six template types; event/attribute/segment/pipeline/campaign/workflow suggestions; category-scoped visibility; one-click use; customization; idempotence; workflow import where supported | Explore ready-made templates | Getting Started, Segmentation, Sales Pipeline, Automation, Workflow Automation |
| `/features/team-management/` | Team Management & Permissions | Founders, operations leaders, admins | Employees need access appropriate to their role and plan | Company employees; roles; role CRUD/clone; granular permissions; extra permissions; default role bundles; subscription-filtered access; API-key scopes; seat/resource limits where relevant | Manage team access | Sales Pipeline, Developers, Pricing |
| `/integrations/telegram/` | Telegram Integration | Businesses using Telegram, support/sales teams, community operators | Telegram customer and message data is separate from CRM records | Company Telegram accounts; login/session; monitored groups/channels; keywords; message ingestion; account sending; customer attribution; bot registration and phone matching; data flow into events | Explore Telegram integration | Customer Management, Automation, Communication, Analytics |
| `/integrations/instagram/` | Instagram Data Integration | Marketers and businesses using Instagram | Connected Instagram account data is not available in the same customer/event analysis flow | Per-company accounts/sessions; actual verified collection behavior; event pipeline relationship; account configuration and limitations | Explore Instagram integration | Customer Management, Analytics, Segmentation |
| `/developers/` | XCRM Developer Platform | Developers, implementation partners, agencies | Technical teams need a clear route to connect XCRM to their stack | Browser SDK; WordPress; API keys/scopes; API docs; event/client ingestion; webhooks; six n8n nodes; implementation links | Explore developer resources | SDK, API, WordPress, Workflow Automation |
| `/developers/sdk/` | Browser SDK Documentation | Frontend developers | Developers need accurate installation and tracking instructions | Script install; `cpid`; initialization; identity/traits; events; auto tracking; SPA pageviews; e-commerce; UTM; consent; device/Web Vitals/error tracking; batches; troubleshooting | Install the SDK | Website Tracking, WordPress, API |
| `/developers/api/` | API Documentation | Backend developers and integrators | Developers need accurate API authentication, scope and endpoint references | Current authentication; scoped API keys; verified endpoints; real payloads/responses; error formats; rate limits only if documented; security and tenant scoping | Read API docs / Create API key | Developer Platform, Tracking, Customer Management, n8n |
| `/developers/webhooks/` | Webhook Guide | Automation developers | Teams need to configure and test actual workflow webhook connections | Workflow webhook sync; URL/method/path fields; test-workflow behavior; sample payloads from real code; auth and failure handling | Configure webhooks | Workflow Automation, API, Automation |

**Feature accuracy rules:**

- XCRM campaign/automation triggers are not the same thing as arbitrary visual branching inside n8n.
- The supplied inventory documents six implemented custom n8n nodes. Do not advertise planned nodes or “dozens” unless current code proves the count changed.
- Instagram collection must not be marketed as Instagram DM/comment automation unless those operations are separately verified.
- WhatsApp contact availability data must not be presented as verified WhatsApp outbound messaging.
- Browser SDK Web Push capabilities must be distinguished from dashboard Push management UI if server-side VAPID management is not implemented.
- Do not advertise inSite/inApp or web chat without implementation evidence.
- Do not advertise AI next-best-action/recommendations based only on the AI Assistant button that creates prompts and opens external AI services.

---

## 6. Solutions pages

Solution pages should translate capabilities into a vertical workflow. They must not simply repeat the feature pages with an industry name swapped into the hero.

| Route | Page | Primary visitor | Core workflow/story | Related product pages | Primary CTA |
|---|---|---|---|---|---|
| `/for-marketers/` | For Marketers — existing | Performance and digital marketers | Track behavior → understand funnels/cohorts → create segments → run campaigns/automations → analyze outcomes | Tracking, Analytics, Segmentation, Automation, Workflow Automation | Start free / Request demo |
| `/for-business/` | For Business — existing | Business owner, sales/operations manager | Capture/organize leads → manage profile → move through pipeline → assign follow-ups → analyze stages and customer activity | Customer Management, Sales Pipeline, Segmentation, Analytics, Team Management | Start free / Request demo |
| `/solutions/` | Solutions directory | All business audiences | Let visitors choose a use case/industry | All solution pages | Select a solution |
| `/solutions/ecommerce/` | E-commerce | Store owner, e-commerce manager | Product view → cart event → checkout/purchase event → identify drop-off → segment relevant audience → configured follow-up → analyze conversion | Tracking, Analytics, Segmentation, Automation, Communication | Analyze my e-commerce journey |
| `/solutions/agencies/` | Marketing Agencies | Agency founder, account/campaign manager | Organize customer records and connected data → segment audiences → analyze campaign/customer behavior → orchestrate supported workflows | Customer Management, Analytics, Segmentation, Automation, Workflow Automation | Explore agency use cases |
| `/solutions/education/` | Online Education | Course/platform owner, enrollment team | Capture interest → manage applicant profile → track follow-up stage → assign reminders → analyze enrollment journey | Customer Management, Sales Pipeline, Reminders, Analytics, Segmentation | Organize enrollment leads |
| `/solutions/b2b-sales/` | B2B Sales | B2B founder, sales director | Capture lead → qualify → contact → schedule meeting → negotiate → close → analyze pipeline | Customer Management, Sales Pipeline, Team Management, Analytics | Improve sales visibility |
| `/solutions/service-businesses/` | Service Businesses | Service business owner, operations team | Organize enquiries → capture customer history → assign follow-ups → track interactions → analyze activity | Customer Management, Sales Pipeline, Reminders, Team Management | Organize customer follow-ups |

Do not invent sector-specific case studies, integration behavior or outcomes. Use illustrative workflows and label them as examples.

---

## 7. Conversion and trust pages

| Route | Page | Audience/job | Required content | CTA / next step | Priority |
|---|---|---|---|---|---|
| `/pricing/` | Pricing & Plans | Prospects evaluating purchase | Current plan names, current prices, durations, actual included features, resource limits, trial conditions, payment methods, upgrade/downgrade, proration and wallet FAQ | Choose plan / Start free | P0/P1 |
| `/demo/` | Request a Demo | Higher-intent prospects | What the demo covers, relevant product workflows, secure lead form or verified scheduling integration, response expectations only if approved, thank-you state | Submit demo request | P1 |
| `/contact/` | Contact | Sales, support and partners | Verified channels, contact form, inquiry types and expected routing | Send inquiry | P0/P1 |
| `/how-it-works/` | How XCRM Works | New prospects | Connect website/data → collect events → resolve customer identity → analyze → segment → automate/communicate → measure | Start free / Request demo | P1 |
| `/getting-started/` | Getting Started | Newly registered users | Create company → configure category → install SDK/import clients → define events/attributes → create segments/pipeline → configure automation | Open dashboard / Read docs | P2 |
| `/faq/` | Frequently Asked Questions | Prospects/current users | Verified answers grouped by plans, data tracking, profiles, segmentation, automation, integrations, communication and security | Relevant feature or contact | P2 |
| `/about/` | About XCRM | Prospects/partners | Verified company story, product purpose, audience and company identity | Contact / Demo | P2 |
| `/security/` | Security & Data Practices | Larger businesses and technical buyers | Verified tenant isolation, permissions, API-key handling, transport/storage/security practices only where verified, operational policies needing disclosure | Contact / Read privacy policy | P1; review needed |

### Pricing page technical contract

- The backend is the pricing source of truth.
- The supplied product inventory describes `price_per_day` and `PricingOption`-derived prices. The frontend must not calculate plan totals or proration independently.
- Fetch current published plans/options from a suitable public API only after inspecting actual endpoint permissions and response schema.
- Display limits exactly as configured; do not assume every plan includes every feature.
- Explain upgrades/downgrades using verified quote behavior.
- Do not expose private company, wallet or subscription data on public pages.
- If a reliable public pricing endpoint does not exist, coordinate with backend/product owners before implementing a static display.

### Legal content contract

- `/privacy-policy/` must match actual data collection, tracking SDK behavior, consent defaults, identifiers, cookies/storage, purposes, recipients/processors, retention, contact and user rights.
- `/terms/` must match real account, subscription, payment, trial, cancellation and service conditions.
- Do not invent the legal company name, address, data controller, retention period, hosting location or contractual guarantees.
- Obtain legal review before publication.

---

## 8. Resources and SEO content map

### 8.1 Resource hub

`/resources/` should be the parent for educational material. Initial categories:

- Customer data and CDP fundamentals.
- CRM and customer profile management.
- Website event tracking and analytics.
- Customer segmentation.
- Conversion funnels and customer journeys.
- Marketing automation and n8n.
- Sales pipeline and follow-up practices.
- E-commerce analytics and cart abandonment.
- Telegram and integration setup.
- Developer implementation guides.

### 8.2 Proposed guide topics

| Proposed URL (slug may be refined) | Topic | Searcher intent | Product links |
|---|---|---|---|
| `/guides/what-is-cdp/` | What is a CDP? | Understand customer data platforms | Customer Management, Tracking |
| `/guides/crm-vs-cdp/` | CRM vs CDP | Compare categories/tools | Customer Management, Analytics |
| `/guides/website-event-tracking/` | Website event tracking | Learn which events to collect | Website Tracking, SDK |
| `/guides/customer-segmentation/` | Customer segmentation | Build useful audience rules | Segmentation |
| `/guides/conversion-funnel-analysis/` | Conversion funnel analysis | Find user drop-offs | Analytics |
| `/guides/cohort-retention-analysis/` | Cohort and retention analysis | Measure repeat behavior | Analytics |
| `/guides/rfm-analysis/` | RFM analysis | Segment customers by value/recency/frequency | Analytics, Segmentation |
| `/guides/customer-lifetime-value/` | Customer lifetime value | Understand LTV | Analytics |
| `/guides/abandoned-cart-analysis/` | Abandoned cart analysis | Analyze cart abandonment and follow-up options | Tracking, Analytics, Segmentation, Automation |
| `/guides/behavior-triggered-automation/` | Behavior-triggered automation | Understand event, delay and absence triggers | Automation, Workflow Automation |
| `/guides/n8n-crm-automation/` | n8n and CRM automation | Connect workflow automation to CRM data | Workflow Automation |
| `/guides/sales-pipeline-management/` | Sales pipeline management | Manage leads and follow-ups | Sales Pipeline |

Do not publish overlapping articles simply to fill the resource hub. Each article needs a distinct question, practical answer and internal links.

### 8.3 Case studies

`/case-studies/` should only contain customer stories with written permission and verifiable context. Every case study should identify:

- Customer/industry (only with approval).
- Situation and initial problem.
- Implemented XCRM workflow.
- Measurement method and time range.
- Verified result, if available.
- Customer quote, if approved.

Never fabricate customer names, logos, quotes, screenshots or outcome percentages.

---

## 9. Recommended main navigation

Keep the header concise; use dropdowns for depth.

| Main item | Dropdown content |
|---|---|
| Product | Features directory; Customer Management; Website Tracking; Analytics; Segmentation; Sales Pipeline; Automation; Communication; n8n |
| Solutions | For Marketers; For Business; E-commerce; Agencies; Education; B2B Sales; Service Businesses |
| Integrations | Integrations directory; WordPress; Telegram; Instagram; Developer Platform |
| Pricing | Pricing page |
| Resources | Guides; FAQ; Glossary; Case Studies (only once populated) |
| About | About; Contact; Security |

Header actions:

- **Login:** verified dashboard login URL.
- **Start free:** verified dashboard registration URL and exact offer/terms.
- **Request demo:** `/demo/` once implemented.

Footer groups:

- Product.
- Solutions.
- Integrations & Developers.
- Resources.
- Company & Legal.

Do not render links to unbuilt or unverified pages. In the WordPress menu/footer, activate new destinations only after route QA.

---

## 10. Internal-linking rules

### Feature pages

Every feature page should link to:

- `/features/` as its parent directory.
- At least two closely related feature pages.
- One appropriate solution page.
- An integration or developer page when relevant.
- Pricing and/or demo/signup as its conversion path.

### Solution pages

Every solution page should link to:

- `/solutions/` as its parent directory.
- The most relevant 3–5 feature pages.
- Relevant integrations.
- A demo or signup CTA.
- One or more educational resources when available.

### Integration/developer pages

Every integration page should link to:

- `/integrations/` or `/developers/` as its parent.
- Installation/documentation route.
- Related features that use the integration.
- Contact/demo or signup where appropriate.

### Resource pages

Every guide should link to:

- Its relevant feature page.
- A related guide if one exists.
- A useful next action such as SDK documentation, demo or signup.

---

## 11. Content and product-claim guardrails

The supplied implemented-feature inventory is authoritative. Use these constraints when writing pages:

1. **n8n nodes:** six custom nodes are documented as implemented. Do not advertise the separate planned list of approximately 87 nodes.
2. **n8n resources:** each company has a dedicated container/schema, but plan resource limits exist. Do not say “unlimited” or “without limits”.
3. **AI:** the dashboard AI Assistant builds page-aware prompts and deep-links to external AI tools. This does not establish an embedded autonomous AI CRM feature or AI next-best-action engine.
4. **Instagram:** the inventory confirms connected account/session and collection services feeding the event/analytics pipeline. Do not claim DM/comment automation without separate proof.
5. **Telegram:** the inventory confirms account/listener flows, monitored entities, keyword matching, message ingestion, message sending and a bot registration flow. Describe only the actual supported operations and account permissions.
6. **WhatsApp:** phone data can track WhatsApp availability, but this does not establish outbound WhatsApp delivery.
7. **Push:** the browser SDK includes Web Push subscription and show/click event support, while dashboard push-notification settings are described as inert pending backend VAPID endpoints. Clearly distinguish these layers.
8. **Communication:** SMS/email/Push provider configuration and Telegram services are documented. Do not infer web chat, inSite/inApp or universal channel analytics.
9. **Campaigns:** scheduled and event/delayed/absence triggers are documented. A/B testing and drag-and-drop campaign building are not substantiated by the supplied inventory.
10. **Analytics:** describe the actual analytics views/endpoints; do not promise automatic profit calculations or conversion improvements without the required data and verification.
11. **Templates:** six kinds of suggestions are implemented; visibility may depend on publication status and company category.
12. **Pricing:** current published plans, feature entitlements and prices must be fetched/verified. Plan prices derive from configured daily rates/options; the frontend must not compute money.
13. **Statistics and testimonials:** publish only sourceable real values and approved customer statements.
14. **Attribution / revenue:** UTM first-touch and last-touch (with history) are implemented; XCRM does **not** provide a complete multi-touch attribution model, ad-spend/cost/ROAS or profitability reporting. Describe only revenue-by-source, traffic-source and LTV-by-channel computed from recorded events; use “گزارش‌های درآمد و عملکرد بر اساس داده‌های ثبت‌شده” framing for anything touching profit.
15. **Identity resolution:** company-scoped matching (client_pid → client_id → CUID → LUID → get-or-create → anonymous record) is implemented; **automatic merge of all customer records is NOT implemented** (ISS-006 open). Do not claim full auto-merge, unrestricted cross-device tracking, cross-company customer visibility, or legal privacy guarantees; customer records and lookups are tenant-scoped.
16. **Events:** event definitions are company-scoped with 5 property types (string/integer/float/boolean/datetime) and required/filterable/reportable/indexed flags; built-in SDK catalog = 14 documented rows (incl. outbound as auto-tracked link type); server-seeded suggestions are category-scoped only (0 public for events). Do **not** claim event versioning/schema evolution, automatic event discovery, or no-code website instrumentation; keep event-property validation (event_pipeline) distinct from client custom-attribute validation (client_pipeline); only `xcrm.event()` and `data-xcrm-event` / `data-xcrm-prop-*` are documented call surfaces.

---

## 12. Tracking and conversion event map

The following are recommended tracking events to instrument if they are not already implemented. They are proposed names, not proof of existing event definitions.

| Event | Trigger | Properties (non-sensitive only) |
|---|---|---|
| `view_feature_page` | User views feature page | `page_slug`, `feature_category`, `audience` |
| `click_feature_cta` | User clicks a CTA on a feature page | `page_slug`, `cta_type`, `cta_location`, `destination` |
| `view_pricing` | Pricing page view | `source_page` |
| `click_pricing_plan` | User clicks a plan CTA | `plan_code` only if public and safe, `billing_period` |
| `click_demo` | User opens demo journey | `source_page`, `cta_location` |
| `submit_demo_form` | Server confirms a successful demo form submission | `form_id`, coarse `business_type` where appropriate |
| `start_registration` | Registration begins | `source_page`, UTM fields |
| `complete_registration` | Registration completion is confirmed | `source_page`, campaign attribution |
| `click_integration` | Integration CTA click | `integration`, `source_page` |
| `click_documentation` | Docs CTA click | `doc_type`, `source_page` |

Never send personal information, phone numbers, email addresses, full form contents, access tokens or API keys as analytics properties. Apply consent and privacy requirements before tracking.

The weekly performance report should distinguish page traffic, CTA interaction, demo submissions, registration starts and confirmed registrations. Do not treat an external signup click as a completed signup.

---

## 13. WordPress implementation conventions

Follow `AGENTS.md` as the engineering contract:

- Hello Elementor child theme.
- PHP templates.
- Vanilla CSS and JavaScript only.
- No build step, npm, Tailwind, React or Next.js.
- RTL/Persian and IRANYekan.
- Class-based dark mode via `html.dark`.
- Existing design system and `--x-*` tokens.
- Enqueue assets only through `functions.php`.
- Respect stylesheet dependencies and JS footer loading order.
- Use unique section prefixes and `.is-*` state classes.
- Use existing shared header, footer, theme toggle, utility classes and `window.XCRM` modules.
- Respect reduced motion and existing animation conventions.

### Recommended shared PHP partials

Create only where a real reuse case exists:

```text
templates/
└── partials/
    ├── page-hero.php
    ├── breadcrumb.php
    ├── feature-card.php
    ├── feature-grid.php
    ├── use-case-card.php
    ├── faq-section.php
    ├── related-links.php
    ├── cta-section.php
    └── integration-card.php
```

Suggested style organization (adapt to the actual repository; do not duplicate existing assets):

```text
assets/css/
├── xcrm-design-system.css       # existing shared tokens/components
├── xcrm-home.css                # existing homepage
├── xcrm-marketers.css           # existing marketers page
├── xcrm-business.css            # existing business page
├── xcrm-features.css            # feature directory / shared feature page layout, if appropriate
├── xcrm-integrations.css        # integration pages, if appropriate
├── xcrm-developers.css          # developer pages, if appropriate
├── xcrm-solutions.css           # industry pages, if appropriate
└── xcrm-conversion.css          # pricing/demo/contact, if appropriate
```

Do not create one CSS file per page automatically. Group styles only when their page structures genuinely share components and visual behavior. Existing section files and naming prefixes take precedence.

---

## 14. Implementation status tracker

Update this table as each page is built and verified.

**Batch note (2026-11-08):** `/features/`, `/features/customer-management/`, `/features/website-tracking/`, `/features/analytics/`, `/features/segmentation/` and `/features/sales-pipeline/` implemented in the child theme. Routing uses the `xcrm_features_template` `template_include` filter in `functions.php` (same pattern as legal pages), so no WordPress page creation is required. Shared partials added: `template-parts/feature-card.php`, `faq-section.php`, `cta-section.php`; feature registry in `inc/features-data.php`; styles in `assets/css/xcrm-features.css` (prefix `ft-`). Header and footer now link to `/features/`. Non-built feature cards render as static cards (no dead links); they become links automatically when `built` is set to `true` and the detail template exists. Website-tracking code examples were reviewed against the real SDK source (`xcrm.min.js` v1.1.0, loaded from the live site's `xcrm-forosh` WordPress plugin) — method names, tag attributes (`cpid`, `consent`, `user-url`, `api-nonce`, `auto-track`, `fingerprint`, `web-vitals`, `error-tracking`), batch limits (50/5s), session timeout (30 min), UTM window (30 min) and the identify priority chain all match the implementation. Analytics page capabilities (funnels/compare/saved, retention, cohorts, RFM, paths, LTV + by-channel, session stats, segment analytics, pipeline funnel/conversion/matrix/removed, CSV/XLSX export) were checked against `docs/product/features-business-logic.md` §3.12; every sample-data visual is labeled «داده‌های نمونه». Segmentation page fields, operators, logic labels, event-condition structure (count ops + time-window units + property filters), parallel-priority copy and preview wording were verified against the real frontend condition builder (`frontend/src/components/dashboard/clients/groups/conditionMeta.ts`, `GroupConditionBuilder.tsx`, `EventConditionRow.tsx`, `GroupFormModal.tsx` in `C:\Users\Mobin\Documents\xCRM`); the illustrative rule is explicitly labeled as a non-default example, and evaluation is described honestly as event-triggered + periodic sweep + manual (no instant-update claims). Sales-pipeline page UI copy (kanban card controls, TransferMenu, «برای بعدا» presets/notes, reminder statuses/واگذاری, stage reorder arrows, activity-type labels, KPI titles, DEFAULT_STAGES suggestion) was verified against the real dashboard components (`frontend/src/components/dashboard/sales/*`); card movement is described exactly as implemented (prev/next buttons + transfer menu + reorder arrows — the real UI has no card drag-and-drop), the sample journey is labeled non-mandatory, and all sample visuals are labeled «داده‌های نمونه».

**Batch note (2026-11-13):** `/features/automation/` implemented in the child theme (`page-xcrm-feature-automation.php`, route added to `$detail_routes` in `functions.php`, registry `built => true`). Page covers hero, traditional-schedule vs behavior-triggered comparison, five-status lifecycle + lifecycle buttons + four run modes (رویدادی/یکبار/روزانه/هر عضو), the three required visual scenarios (A immediate / B delayed / C absence), audience targeting (segment/pipeline/stage + targeting guard), XCRM-trigger vs n8n-execution two-layer distinction (اکشن = company n8n workflow, «باز کردن اکشن», «تست اکشن», `sample_payload.json` + «تست ورکفلو»), execution monitoring KPIs + executions table (مخاطب/وضعیت/شناسه n8n/زمان/عملیات + تلاش مجدد + ریست تاریخچه اجراها), four realistic examples and 7 FAQ items. All UI copy (statuses, `buildTriggerSentence` sentences, trigger hints/validation messages, wizard steps, targeting and execution labels) was verified against the real dashboard automations components (`AutomationTriggerBuilder.tsx`, `AutomationFormModal.tsx`, `AutomationDetailContent.tsx`, `AutomationExecutionTable.tsx` in the canonical `xCRM` source); «رابطه بین تریگرها: «یا»» and inventory §3.7 behaviors (targeting guard, max-fires cap, retry-then-failed) are reflected; the absence trigger is explicitly described as conditional; no branching/AI claims; every sample visual is labeled «داده‌های نمونه».

**Batch note (2026-11-13):** `/features/communication/` implemented in the child theme (`page-xcrm-feature-communication.php`, route added to `$detail_routes` in `functions.php`, registry `built => true`). Page covers hero (positioning «ارتباط با مشتریان را از یک نقطه مدیریت کنید»), four management problems, channel overview (5 cards with availability/config states incl. Instagram «به‌زودی» disabled), SMS management (compose modal with 4 message types + زمان‌بندی ارسال), email/push provider configuration, Telegram (2-step login accounts, api_id/api_hash, تست پیام), send windows per channel («از ساعت / تا ساعت» + out-of-window note), provider configuration (table with تست/پیش‌فرض, real provider catalog: کاوه نگار/قاصدک/تویلیو/آی‌پی‌پنل/اس‌ام‌اس‌آی‌آر/SendGrid/Mailgun/FCM/APNs), message delivery lifecycle (5 statuses + «تاریخچه پیامک‌ها» table + «تلاش: n/m» + held-messages-don't-count-retries), the required sample scenario (سگمنت → تریگر → کانال → زمان‌بندی → وضعیت تحویل), 8 FAQ items. Boundaries honored: no WhatsApp outbound (explicitly denied in FAQ), Instagram only as «به‌زودی» toggle (no messaging claim), providers-not-identical stated, no channel auto-enable claim («هیچ کانالی به‌صورت خودکار فعال نمی‌شود»). All UI copy verified against real dashboard communications components (`communications/*` in canonical `xCRM` source: SettingsContent, ProvidersContent/ProviderFormModal/ProviderDetailContent, MessagesContent/SendSmsModal, Telegram*Content, channelMeta.ts, types/communications.ts) and business-logic §3.10 (queued/scheduled SMS, send-window enforcement, retry-then-FAILED, OTP via SMS). Note: the UI term is «بازه مجاز ارسال» (not «ساعت سکوت»); every sample visual is labeled «داده‌های نمونه». Also fixed in this batch: automation + communication pages now pass FAQ/CTA variables via the `get_template_part(..., $args)` third parameter (matching the pattern used by all other feature pages — local variables do not reach partials, so FAQ/CTA would otherwise render empty).

**Batch note (2026-11-13):** `/features/workflow-automation/` implemented in the child theme (`page-xcrm-feature-workflow-automation.php`, route added to `$detail_routes` in `functions.php`, registry `built => true`). Positioning verbatim: «قدرت اتوماسیون n8n، در زیرساخت اختصاصی هر کسب‌وکار.»; CTA verbatim: «قدرت اتوماسیون اختصاصی XCRM را تجربه کنید». Page covers why-workflow-automation, the required six-stage architecture visual (رویداد مشتری → خط لولهٔ رویداد XCRM → تریگر کمپین → گردش‌کار n8n → اقدام‌های پشتیبانی‌شده → نتیجهٔ اجرا) plus «معماری اتصال»/«نحوه عملکرد» copy and the campaign≠visual-branching boundary, dedicated instance card (statuses در حال ایجاد/فعال/متوقف/خطا, «امن», «ورود به n8n», «در حال آماده‌سازی», connection error + «تلاش مجدد», 30s polling, plan-based resources), two-way workflow sync (هوک‌ها + «همگام سازی», sync states همگام/در انتظار/خطا, statuses فعال/غیرفعال/بایگانی, backups note), the six documented custom nodes as cards (XcrmClient / XcrmSendSms / XcrmTelegramAccounts / XcrmTelegramSendMessage / XcrmTimeCondition / XcrmTriggerCampaign with verbatim source descriptions and Persian params), CRM-customer connection (XcrmClient fields, X-API-Key header, auto-recreate key, JWT→auth/n8n/verify→key-in-n8n-settings loop), campaign trigger chain (4 schedule modes, validations, 100-msg fan-out, retry ≤3 + DLQ, «تست ورکفلو» + `sample_payload.json`), webhook management (POST/GET table, «کپی آدرس», empty states), execution monitoring (KPIs + table + «زنده»), 4 practical scenarios, 8 FAQ. Guardrails honored: no «87 nodes»/«ده‌ها گره» claims (explicit denial; only six documented as implemented, planned list explicitly not available), no unlimited-resources claims (plan-based limits stated + FAQ denial), no WhatsApp/Instagram mentions, authentic architecture diagrams instead of fake screenshots, all sample visuals labeled «داده‌های نمونه». All UI copy verified against real dashboard automation components (`automations/n8n/*`, `workflow/*`, `webhook/*`, `AutomationsDetailContent`, `config/seo/pages.ts`, `data/dashboard/links.ts` in canonical `xCRM` source), the six node packages (`n8n Nodes/` + `list.md`), business-logic §3.11/§5/§3.15, and content-map guardrails (lines 366–367, 178). FAQ/CTA use the `get_template_part(..., $args)` pattern.

**Batch note (2026-11-13):** `/features/templates/` implemented in the child theme (`page-xcrm-feature-templates.php`, route added to `$detail_routes` in `functions.php`, registry `built => true`). Positioning verbatim: «به‌جای شروع از صفر، با الگوهای آماده XCRM سریع‌تر شروع کنید.» Page covers four start-from-scratch problems, six-type library overview (registry short/description verbatim), gallery sections with polished `ft__tcard` cards (category chip + name + purpose + «مناسب:» scenario + preview + پیش‌نمایش/سفارشی/ایجاد actions) using **only real seeded template names** (segments: مشتریان جدید/VIP/غیرفعال ۹۰ روزه (سراسری) + category مشتریان وفادار; pipelines: قیف فروش استاندارد/قیف پروژه‌ای (سراسری) + فرآیند پیگیری; attributes: نوع مشتری/کد بیمار/سطح هنرجو/کد پروژه/امتیاز وفاداری; events: «ثبت بازخورد — کشاورزی»/«شروع پروژه — ملزومات کشاورزی»; campaigns: سری خوش‌آمدگویی/تبریک تولد/یادآوری سبد خرید رهاشده/یادآوری نوبت/پیشنهاد هفتگی/یادآوری پایان دوره آزمایشی; workflows: جریان خوش‌آمدگویی چندمرحله‌ای/جریان بازیابی سبد خرید/ورکفلوی یادآوری نوبت), one-click adoption section with the required 5-stage flow (انتخاب دسته‌بندی → بررسی پیشنهادها → پیش‌نمایش → سفارشی یا ایجاد → شروع استفاده) + idempotency/customize cards, category-recommendation section (visibility rules, missing-category warning, empty states, dynamic `{N} قالب آماده` placeholder), 4 practical examples, 8 FAQ. Guardrails honored: **no invented template counts** (explicit «عدد ثابتی ادعا نمی‌کنیم» + only «شش نوع» claimed; verified-fixed 12/9 counts deliberately NOT published), explicit «ادعا نمی‌کند همهٔ قالب‌ها برای همهٔ صنایع» boundary, availability = public «ویژه» OR company category stated everywhere, no WhatsApp/Instagram mentions, illustrative mocks labeled. All copy verified against real sources: seed JSON (`static/data/*_suggestions/`, names public-status per report), `Companies/Groups/Campaigns/n8n` suggestion viewsets (201/200 idempotent messages verbatim), frontend suggestion components (buttons/toasts/views/empty states in `frontend/src`), business-logic §3.14, and content-map guardrails (:167, :376). FAQ/CTA use the `get_template_part(..., $args)` pattern.

**Batch note (2026-11-13):** `/features/revenue-attribution/` implemented in the child theme (`page-xcrm-feature-revenue-attribution.php`, route added to `$detail_routes` in `functions.php`, registry `revenue-attribution` added with `built => true` and inserted into the `data` group slugs). SEO title verbatim per brief: «تحلیل منابع درآمد و بازاریابی | Revenue Attribution در XCRM»; H1 positioning verbatim: «بدانید مشتریان از کجا می‌آیند و چه کانال‌هایی به رشد فروش شما کمک می‌کنند.»; hero CTAs «تحلیل منابع درآمد را شروع کنید» + «مشاهده امکانات تحلیل»; final CTA «تصمیم‌های بازاریابی خود را بر اساس داده بگیرید.» / «شروع استفاده از XCRM». Page covers the 11 brief sections: premium hero with a new `ft__attrib` dashboard mock (source cards + UTM code + conversion + revenue foot, all labeled sample), four problems, UTM tracking (9-param claim, `ft__urlbar` illustrative URL, verified named params utm_source/medium/campaign/term/content + honest "+۴ — مجموعاً ۹", `getFirstTouchUTM()`/`getLastTouchUTM()`, attached-to-events, 3-chain), first-vs-last-touch journey (4-step `ft__chain` + real `ft__touch` visual, 30-min window, explicit **no-multi-touch-model** boundary), revenue-by-source (3 `ft__srccard` comparison cards + `ft__hbars` distribution + verified reporting labels: «درآمد بر اساس منبع», «کل درآمد (تومان)», «بهترین منبع درآمد», «حداقل درآمد (تومان)» + hint, table headers, sort options), LTV-by-channel (real calc: first non-empty channel/utm_source per customer → avg of purchase revenue; output users/purchases/revenue/avg_ltv/share; relative-index bars labeled sample + **no invented cohort/multi-touch** boundary), 6-stage data flow (`ft__flow`), 5 use cases, related features (5 + `#events` deep link), 7 FAQ, CTA. **Guardrails honored (QA-enforced):** no ROAS/ad-spend/cost/profit claims except explicit denials in FAQ «آیا XCRM بازگشت سرمایهٔ تبلیغات (ROAS) را محاسبه می‌کند؟ → خیر»; every «چندلمسی» mention carries a negation (no multi-touch model claimed); audit §151 phrasing «داده‌های ثبت‌شده» used; no WhatsApp/Instagram-DM claims; 8 illustrative labels (7× «داده‌های نمونه» + «مثال تصویری»); one H1. All claims verified against real source: business-logic §3.12 + `docs/FEATURES.md:332` (9 UTM params, first/last-touch 30-min + history), `Analytics/v1/services/analytics_service.py` (get_revenue_sources/get_traffic_sources formulas + comparison strings), `Analytics/v1/services/ltv_service.py` (get_ltv_by_channel argMin first-channel + avg_ltv), `StatsRevenueContent.tsx`/`StatsTrafficContent.tsx` (verbatim UI labels/filters/empty states), `contracts/event_base.yaml` + `frontend/src/types/analytics/event.ts` (named UTM params), `types/clients` CLIENT_SOURCES channel enum. FAQ/CTA use the `get_template_part(..., $args)` pattern; FAQ uses surface background (alternation S→B→CTA). No page-specific JS (static visualizations only).

**Batch note (2026-11-13):** `/features/team-management/` implemented in the child theme (`page-xcrm-feature-team-management.php`, route added to `$detail_routes` in `functions.php`, registry `built => true`). Positioning verbatim: «تیم خود را مدیریت کنید و دسترسی هر عضو را متناسب با مسئولیتش تعریف کنید.» Page covers why-structured-permissions, employee management (3-step wizard, روش عضویت, owner-delete/duplicate guards, verification badges, table mock), the required **access illustration with all 8 real seeded roles** (مالک/مدیر/مدیرعامل/عضو/مشاهده‌گر/پشتیبانی/بازاریابی/مالی with verified bundle scopes from `Companies/signals.py` + `DEFAULT_ROLE_PERMISSIONS`, labeled representative + configurable, custom-role examples «فروش»/«مدیر پروژه»), role CRUD/clone/compare + 3-step role wizard, granular permissions (tree/matrix views, catalog «۳۶ قابلیت · حدود ۱۲۰ مجوز · ۱۰ دسته», named-permission examples, PermissionGuard copy), the required **permissions interface mock: 6 modules × مشاهده/ایجاد/ویرایش/حذف** (real verbs from permission phrases; explicitly labeled simplified + illustrative, ticks = user selection not any role's default), role+extras=effective math (`ft__math`, «مجوزهای نقش قفل‌اند»), plan-based access (intersect mechanism, expired→subscription-only, fail-closed), API-key scopes («دامنه دسترسی‌ها», show-once/OTP, best-practice copy), seat management (real plan caps رایگان۵۰/پایه۵۰۰/پیشرفته بدون سقف/حرفه‌ای۵۰۰۰, verbatim product FAQ, honest **no-hard-block statement** since seat counters are display-only in source), 4 practical examples, 8 FAQ. Guardrails honored: **no internal permission codenames or numeric IDs anywhere** (QA-enforced), all-permission claim limited to verified owner/admin only, no seat-enforcement claim, no inflated counts, no WhatsApp/Instagram, all illustrative mocks labeled (5× «داده‌های نمونه», 3× «نمایش تزئینی»). All copy verified against real sources: employee/role/permissions components (`components/dashboard/company/*`), `data/permissions.ts` (Persian labels, never exposes ids), `route-permissions.ts`, seeded roles (`Companies/signals.py`), `DEFAULT_ROLE_PERMISSIONS`, `Core/permissions/subscription.py`, seat UI (`payments/subscription`), `default_plans.json` (max_MAU), API-key UI (`Integrations/apikey`), business-logic §2.2/§2.3/§3.1–3.3, and content-map guardrails. FAQ/CTA use the `get_template_part(..., $args)` pattern; FAQ uses default background (alternation S→B→CTA).

**Batch note (2026-11-13):** `/features/identity-resolution/` implemented in the child theme (`page-xcrm-feature-identity-resolution.php`, route added to `$detail_routes` in `functions.php`, registry `identity-resolution` added with `built => true` and inserted into the `data` group slugs between website-tracking and analytics; §3 site map updated with identity-resolution **and the previously-missing revenue-attribution**). SEO title verbatim per brief: «شناسایی هویت مشتریان | Customer Identity Resolution در XCRM»; H1 = brief hero headline «از بازدیدکنندهٔ ناشناس تا شناخت یکپارچهٔ مشتری»; brief main headline used verbatim as hero lead + supporting message as hero desc; hero CTA «مدیریت هویت مشتریان را شروع کنید»; final CTA «مشتریان خود را فراتر از یک بازدید ساده بشناسید.» / «شروع استفاده از XCRM». Page covers the 12 brief sections: premium hero with new `ft__idvz` identity diagram (4 source nodes → animated converge → focused record card with PID/CUID/LUID, labeled sample), 5 identity problems, anonymous-vs-identified (`ft__compare`) + 3 `ft__iddef` identifier cards (LUID list / 15-char PID via `secrets` / company CUID with real «شناسه مشتری» label), the actual **5-step resolution flow** (`ft__flow`: رویداد ورودی → CUID → LUID → get-or-create → anonymous record — matching `ingest.py` + business-logic §3.5) with company-scoped guards (foreign LUID ignored, wrong CRM id rejected, LUID append on match) and explicit **no-auto-merge boundary** (ISS-006: merge unimplemented), multi-identity profile preview (`ft__prof` with 6 verified rows: phones/E.164+اصلی/تأیید شده/تلگرام, emails, devices+fingerprint, IP history, social accounts, identity keys — noting IP/keys are stored records, no UI claimed), SDK identification (`identify(client_pid, traits)` + verified `xcrm.identify(1042, …)` + verified `xcrm.event(...)` only — no invented fns + auto-identify chain meta/xcrm-page → nonce → xcrmUser → anonymous + E.164), 5-stage data connection (`ft__arch`), 5-step illustrative scenario journey (`ft__chain`, marked نمونه/غیرتضمینی), privacy & tenant isolation (JWT company claim, foreign-LUID rejection, identifier storage, SDK consent gate) + explicit denial box (no auto-merge / no unrestricted cross-device / no cross-company visibility / no legal guarantees), 7 related links (incl. `analytics/#events` deep link + new revenue-attribution), 8 FAQ (incl. «آیا XCRM همهٔ رکوردها را ادغام می‌کند؟ → خیر»), CTA. **Guardrails QA-enforced:** every «ادغام» mention is a negation/denial, cross-device & cross-company phrases only in denial contexts, no PublicClient/cross-company layer marketing, only verified SDK fns (`identify`, `event`), no WhatsApp, Instagram only as stored platform (no messaging), 5 illustrative labels, one H1, H2/H3 hierarchy. All facts verified against source: `ingest.py` resolution order + company guards, `Clients/models/private_client.py` (LUID list append, 15-char PID, CUID), multi-value tables (`phone/email/device/ip_history/identity_key/social_account`), `client_contact_services.py` get-or-create order + normalization, `Core/tools.py` E.164, business-logic §3.5/§657/§677, customer-detail UI strings (`ClientDetailContent/Modal.tsx`), and prior live-SDK verification record (content-map 2026-11-08 batch note). FAQ/CTA use the `get_template_part(..., $args)` pattern; FAQ uses default background (alternation S→B→CTA). No page-specific JS; new `ft-idflow` keyframe disabled under `prefers-reduced-motion`.

**Batch note (2026-11-13):** `/features/event-management/` implemented in the child theme (`page-xcrm-feature-event-management.php`, route added to `$detail_routes` in `functions.php`, registry `event-management` added with `built => true` and inserted into the `data` group slugs after identity-resolution; §3 site map updated). SEO title verbatim per brief: «مدیریت رویداد و ردیابی رفتار مشتری | Event Management در XCRM»; H1 = brief hero headline «هر رفتار مهم مشتری را به یک رویداد قابل اندازه‌گیری تبدیل کنید»; brief main headline as hero lead + supporting message as hero desc; hero CTAs «تعریف رویدادهای کسب‌وکار را شروع کنید» + «مشاهده راهنمای توسعه‌دهندگان» (→ verified `/features/website-tracking/#install` anchor, since `/developers/sdk/` is still Proposed); final CTA «داده‌های رفتاری کسب‌وکار خود را به تصمیم‌های عملی تبدیل کنید.» / «شروع استفاده از XCRM». Page covers the 12 brief sections: premium hero with new `ft__evmock` event interface (4 event rows: form_submit/request_demo/product_view/course_enrolled + 30-day stats side panel, labeled sample), what-is-event-tracking (4 cards + pageview-vs-event note), event definitions (4-step wizard mock with real validation strings + empty states + live-stats table mock «آمار رویدادها» ۷/۳۰/۹۰ روز with real column headers + «تعریف‌های سیستمی قابل ویرایش نیستند»), custom event properties (5-row property table showing all **5 verified types** متن/عدد صحیح/عدد اعشاری/بله/خیر/تاریخ و زمان + الزامی/فیلتر/گزارش/ایندکس flags + naming/duplicate-key validation + explicit **event-props vs client-attributes separation note**), 14-row built-in SDK catalog in **5 groups** (page/session, e-commerce, interactions incl. outbound-as-link-type, search/content, system — Persian labels reused verbatim from the verified website-tracking page) + built-in-vs-custom vs server-side (`purchase`) explanation, custom tracking with SDK (verified declarative + `xcrm.event()` snippets + authentic install snippet with `id/src/cpid/defer`, zero invented fns), 5-stage event data flow (`ft__flow` + honest Kafka/ClickHouse tech note framed as transparency), 4 real suggestion cards (verbatim display_names: «ثبت بازخورد — ملزومات کشاورزی»/«رزرو نوبت — کلینیک»/«سبد خرید رها شده — مارکت‌پلیس»/«آغاز دوره آزمایشی رایگان (Free Trial)» + category-scoped visibility + missing-category warning + idempotent toasts), 5-stage events→actions ecosystem (`ft__arch`) + 4 illustrative use cases (product_view / cart / form_submit / purchase × analysis+segment+trigger), 8 related links (all 7 brief features + hub), 9 FAQ (incl. events-vs-customer-attributes distinction), CTA. **Guardrails QA-enforced:** نسخه‌بندی only in explicit negation («نه یک فرایند نسخه‌بندی»), no کشف خودکار / بدون کدنویسی claims (docblock denials stripped from checks), only `xcrm.event(` call surface (no `xcrm.track`), suggestion names ⊆ verified seed set, no raw seed counts (410/69/263), no inflated counts, no WhatsApp/Instagram, 5 illustrative labels, one H1. All facts verified against source: `Companies/models/events.py` (EventDefinition fields + PropertyType enum + required/filterable/reportable/indexed), `event_serializers.py` (naming regex + Persian error), `Companies/validators.py` (event vs client-attribute validation split), `definitions/EventsList` frontend strings, `EVENTS.md`/business-logic:659 SDK catalog, `contracts/event_base.yaml` + `contracts/events/*.yaml`, `static/data/event_suggestions/` seeds (263 files/410 entries, 0 public), `suggestion_viewset.py` + `useSuggestions.ts` toasts, `event_pipeline.py` fan-out (business-logic:759). FAQ/CTA use `get_template_part(..., $args)`; FAQ default background (alternation S→B→CTA). No page-specific JS. **Implementation limitation recorded:** SDK source folder is absent from this checkout — install/custom-event/declarative snippets were taken from the already-SDK-verified website-tracking page (live `xcrm.min.js` v1.1.0 verification record, content-map 2026-11-08 batch note) and business-logic §6; `xcrm.trackProductView`/`trackAddToCart`/`getAnonymousId` were deliberately NOT used (unverifiable here).

**Batch note (2026-11-13):** `/features/` central directory restructured to the brief's **four categories** in `xcrm_get_feature_groups()` (`inc/features-data.php`): **data** (customer-management, website-tracking, identity-resolution, event-management, analytics, revenue-attribution, segmentation, sales-pipeline), **marketing** (automation, communication), **integrations** (workflow-automation, telegram-integration, instagram-data-integration, developer-platform), **business** (team-management, templates). Three new registry entries added as `built => false` — `telegram-integration`, `instagram-data-integration`, `developer-platform` — sourced from content-map §5 copy (real product capabilities: Telegram §3.8, Instagram collection, SDK docs) whose dedicated landing pages are still `Proposed`; they render via the existing `feature-card` **static-card pattern (`<div>`, no href, no «مشاهده جزئیات»)** so no dead link is ever emitted. Entry-level `group` field aligned to the new keys (field is unused for rendering; groups function is authoritative). Fixed a pre-existing **alternation off-by-one** in `page-xcrm-features.php` (`1 === index % 2` → `0 === index % 2`) so the first group follows the hero correctly — full sequence now alternates B/S through hero→groups→connects→interface→paths→FAQ. Meta description refreshed to name all four categories. Verified with a new `qa-features.mjs`: 16 entries, no missing/duplicate/orphan slugs, all 13 built features present in groups, all four brief categories covered, alternation holds, feature-card never links unbuilt entries, one H1, balanced PHP/HTML. **All 9 feature-page QA suites pass** after fixing a shared QA-script bug (the fragile `'slug'...'built' => true` regex mis-paired slugs once `built=false` entries existed — replaced with an entry-scoped parser in all 8 scripts). Directory page is a feature index (concise cards, no per-feature essays), links every implemented page, and shows no unimplemented feature as a clickable card.

| Route | Status | Content approved | Product claims checked | Design complete | QA passed |
|---|---|---|---|---|---|
| `/` | Existing | Pending review | Pending | Existing | Pending |
| `/for-marketers/` | Existing — fix | No | No | Existing | No |
| `/for-business/` | Existing | Pending review | Pending | Existing | Pending |
| `/features/` | Implemented (2026-11-08; restructured 2026-11-13 to 4 categories) | Yes | Yes | Yes | Static QA passed; live QA pending deploy |
| `/features/customer-management/` | Implemented (2026-11-08) | Yes | Yes | Yes | Static QA passed; live QA pending deploy |
| `/features/website-tracking/` | Implemented (2026-11-08) | Yes | Yes (against real SDK v1.1.0 source) | Yes | Static QA passed; live QA pending deploy |
| `/features/analytics/` | Implemented (2026-11-08) | Yes | Yes | Yes | Static QA passed; live QA pending deploy |
| `/features/segmentation/` | Implemented (2026-11-08) | Yes | Yes (fields/operators against real condition builder source) | Yes | Static QA passed; live QA pending deploy |
| `/features/sales-pipeline/` | Implemented (2026-11-08) | Yes | Yes (UI copy against real dashboard sales components) | Yes | Static QA passed; live QA pending deploy |
| `/features/automation/` | Implemented (2026-11-13) | Yes | Yes (statuses, trigger types/sentences, wizard, schedules, targeting, execution/lifecycle labels against real automations components) | Yes | Static QA passed; live QA pending deploy |
| `/features/communication/` | Implemented (2026-11-13) | Yes | Yes (channel/settings/provider/message-log/telegram labels against real communications components) | Yes | Static QA passed; live QA pending deploy |
| `/features/workflow-automation/` | Implemented (2026-11-13) | Yes | Yes (instance/sync/webhook/execution labels + six node names/descriptions against real sources) | Yes | Static QA passed; live QA pending deploy |
| `/features/templates/` | Implemented (2026-11-13) | Yes | Yes (real seeded template names + UI/toasts against suggestions sources) | Yes | Static QA passed; live QA pending deploy |
| `/features/team-management/` | Implemented (2026-11-13) | Yes | Yes (8 seeded roles, permission tree verbs/modules, employee/role/seat labels against real sources) | Yes | Static QA passed; live QA pending deploy |
| `/features/revenue-attribution/` | Implemented (2026-11-13) | Yes | Yes (UTM first/last-touch, revenue-by-source, traffic, LTV-by-channel against real analytics services) | Yes | Static QA passed; live QA pending deploy |
| `/features/identity-resolution/` | Implemented (2026-11-13) | Yes | Yes (LUID/CUID/PID, resolution order, tenant guards, SDK identify against real backend/models/docs) | Yes | Static QA passed; live QA pending deploy |
| `/features/event-management/` | Implemented (2026-11-13) | Yes | Yes (EventDefinition/EventProperty models, 5 property types, 14 SDK catalog rows, suggestion names against real source) | Yes | Static QA passed; live QA pending deploy |
| `/integrations/` | Proposed P1 | No | No | No | No |
| `/integrations/wordpress/` | Proposed P1 | No | No | No | No |
| `/integrations/telegram/` | Proposed P1 | No | No | No | No |
| `/integrations/instagram/` | Proposed P2 | No | No | No | No |
| `/developers/` | Proposed P1 | No | No | No | No |
| `/developers/sdk/` | Proposed P1 | No | No | No | No |
| `/developers/api/` | Proposed P1 | No | No | No | No |
| `/developers/webhooks/` | Proposed P2 | No | No | No | No |
| `/solutions/` | Proposed P2 | No | No | No | No |
| `/solutions/ecommerce/` | Proposed P1 | No | No | No | No |
| `/solutions/agencies/` | Proposed P2 | No | No | No | No |
| `/solutions/education/` | Proposed P2 | No | No | No | No |
| `/solutions/b2b-sales/` | Proposed P1 | No | No | No | No |
| `/solutions/service-businesses/` | Proposed P2 | No | No | No | No |
| `/pricing/` | Verify / proposed P0-P1 | No | No | No | No |
| `/demo/` | Verify / proposed P1 | No | No | No | No |
| `/contact/` | Verify / proposed P0-P1 | No | No | No | No |
| `/how-it-works/` | Proposed P1 | No | No | No | No |
| `/getting-started/` | Proposed P2 | No | No | No | No |
| `/faq/` | Proposed P2 | No | No | No | No |
| `/about/` | Proposed P2 | No | No | No | No |
| `/security/` | Proposed P1 | No | No | No | No |
| `/privacy-policy/` | Existing — 404, fix | No | No | No | No |
| `/terms/` | Existing — 404, fix | No | No | No | No |
| `/resources/` | Proposed P2 | No | No | No | No |
| `/guides/` | Proposed P2 | No | No | No | No |
| `/glossary/` | Proposed P3 | No | No | No | No |
| `/case-studies/` | Proposed P3 | No | No | No | No |

---

## 15. OpenCode task instructions

When asked to implement a website page:

1. Read `AGENTS.md` fully.
2. Read `docs/website-audit.md` and this content map.
3. Read `docs/product/features-business-logic.md` fully for product claims relevant to the page.
4. Inspect the current WordPress page list, route configuration, matching templates, existing assets and shared header/footer.
5. Confirm whether the proposed route already exists. Reuse or improve it rather than creating duplicates.
6. Confirm the real product behavior in source code when the inventory is ambiguous or the page needs technical examples.
7. Prepare Persian page copy and an outline before implementing complex new content.
8. Use current design tokens and existing reusable components.
9. Implement only the requested page and necessary shared components.
10. Add internal links only to routes that exist or are part of the same implementation batch.
11. Update this document's status tracker and route notes.
12. Run the page-specific QA checklist and record real results.

**Never:** replace the whole site to create a new page, invent product claims, publish legal commitments without review, create dead CTAs, add a new frontend framework, create a second theme system, or mark a page complete without testing it.
