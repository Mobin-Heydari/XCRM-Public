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
│       ├── /features/analytics/
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

**Batch note (2026-11-08):** `/features/` and `/features/customer-management/` implemented in the child theme. Routing uses the `xcrm_features_template` `template_include` filter in `functions.php` (same pattern as legal pages), so no WordPress page creation is required. Shared partials added: `template-parts/feature-card.php`, `faq-section.php`, `cta-section.php`; feature registry in `inc/features-data.php`; styles in `assets/css/xcrm-features.css` (prefix `ft-`). Header and footer now link to `/features/`. Non-built feature cards render as static cards (no dead links); they become links automatically when `built` is set to `true` and the detail template exists.

| Route | Status | Content approved | Product claims checked | Design complete | QA passed |
|---|---|---|---|---|---|
| `/` | Existing | Pending review | Pending | Existing | Pending |
| `/for-marketers/` | Existing — fix | No | No | Existing | No |
| `/for-business/` | Existing | Pending review | Pending | Existing | Pending |
| `/features/` | Implemented (2026-11-08) | Yes | Yes | Yes | Static QA passed; live QA pending deploy |
| `/features/customer-management/` | Implemented (2026-11-08) | Yes | Yes | Yes | Static QA passed; live QA pending deploy |
| `/features/website-tracking/` | Proposed P1 | No | No | No | No |
| `/features/analytics/` | Proposed P1 | No | No | No | No |
| `/features/segmentation/` | Proposed P1 | No | No | No | No |
| `/features/sales-pipeline/` | Proposed P1 | No | No | No | No |
| `/features/automation/` | Proposed P1 | No | No | No | No |
| `/features/communication/` | Proposed P1 | No | No | No | No |
| `/features/workflow-automation/` | Proposed P1 | No | No | No | No |
| `/features/templates/` | Proposed P2 | No | No | No | No |
| `/features/team-management/` | Proposed P2 | No | No | No | No |
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
