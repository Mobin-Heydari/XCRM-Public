# XCRM Forosh — Website Audit

**Project:** XCRM Forosh public marketing website  
**Website:** <https://xcrmforosh.com/>  
**Audit date:** 2026-11-08  
**Primary language:** Persian (fa-IR), RTL  
**Platform:** WordPress child theme of Hello Elementor  
**Status:** Public-content and architecture audit; not a repository-level code audit.

**Update (2026-11-14):** `/features/` is now implemented as the XCRM Product Explorer (12 categories / 48 catalog entries, animated 14-module hero ecosystem, search + category tabs, customer-lifecycle journey, industry use cases) — see `docs/features-directory-implementation-report.md`. Detail pages for all 13 built features are live; `/privacy-policy/` and `/terms/` return HTTP 200 via template routing.

---

## 1. Executive summary

The current website has a useful starting structure: a homepage that routes visitors toward two audience-specific landing pages, `/for-marketers/` and `/for-business/`. The Business page has a relatively complete problem-led narrative and already introduces several practical capabilities, industry scenarios, FAQs and signup calls to action. The Marketers page has a strong conversion-oriented opening and describes analytics, segmentation, automation and the dedicated n8n environment.

However, the website does not yet communicate the full implemented product consistently or reliably. Many product capabilities are summarized in six broad homepage categories, while the actual platform includes more specific capabilities such as browser SDK tracking, event-condition segments, absence-based automation triggers, advanced analytics, per-company n8n instances, Telegram lead registration, custom n8n nodes, role-based permissions and ready-made templates.

The most urgent content issues are:

1. **Broken legal destinations:** the footer links for `/privacy-policy/` and `/terms/` currently return 404.
2. **Zero-valued homepage statistics:** the homepage displays `0` for active users, customer satisfaction and conversion increase. These are not persuasive proof points and should be removed or replaced with verified, contextual information.
3. **Unfinished content on the Marketers page:** the page contains repeated `به‌زودی` placeholders and an unfinished explanation of the claimed “next generation” capability.
4. **Claims that exceed the supplied implementation inventory:** examples include “dozens” of custom n8n nodes and “without limits”, A/B testing, drag-and-drop campaign building, AI recommendations, and certain social messaging capabilities. These must be verified or removed.
5. **Missing dedicated product pages:** the website describes core product areas in landing-page sections but does not provide a discoverable dedicated page for each major capability.
6. **Weak public conversion architecture:** visitors are mainly directed to the dashboard for signup or pricing. A dedicated public pricing experience, demo request journey, and clear sales/contact path should be added or verified.
7. **No clear public resource/developer information architecture:** technical capabilities such as the browser SDK, WordPress plugin, API keys, webhooks and n8n nodes need a structured public entry point.

**Strategic recommendation:** keep the homepage and both audience landing pages as the top-level entry points, correct their claims, and expand the site through a feature directory, dedicated feature pages, industry solution pages, integration/developer pages, conversion pages and trust/resources pages.

---

## 2. Audit scope and evidence

### 2.1 Public pages inspected

The following public pages were inspected through the live website on 2026-11-08:

- Homepage: <https://xcrmforosh.com/>
- For Marketers: <https://xcrmforosh.com/for-marketers/>
- For Business: <https://xcrmforosh.com/for-business/>
- Privacy Policy destination reached from the homepage/footer: <https://xcrmforosh.com/privacy-policy/> — 404 at audit time.
- Terms destination reached from the homepage/footer: <https://xcrmforosh.com/terms/> — 404 at audit time.

The homepage navigation exposes anchors/sections labelled around “Why XCRM”, “Features”, “Getting started” and “Contact”. These should not be treated as dedicated pages until the WordPress routes and page templates have been checked.

The For Business page sends its pricing CTA to the dashboard domain rather than presenting a dedicated public pricing page. Its final CTA also links to dashboard signup/demo destinations. A separate public `/pricing/` or `/demo/` route was not verified during this audit. Inspect WordPress directly before creating routes to avoid duplicating an existing but unlinked page.

The homepage has a “Contact” navigation item, but the text-only public inspection did not establish a complete, dedicated contact page or a functioning contact form. Verify the actual rendered DOM and WordPress page list.

### 2.2 Internal product source of truth

The supplied `xCRM — Features & Business Logic` inventory is the authority for implemented product claims. It describes the backend, frontend, SDK, n8n community nodes and FastAPI services and explicitly excludes roadmap-only functionality.

The supplied `AGENTS.md` is the authority for WordPress theme architecture and styling conventions. It specifies a Hello Elementor child theme, PHP templates, vanilla CSS/JavaScript, Persian RTL, IRANYekan, class-based dark mode and the existing `--x-*` design tokens.

This audit does **not** claim to have inspected the actual WordPress repository, PHP templates, browser console, CSS source, analytics property, Search Console, server logs or live dashboard. OpenCode must inspect those before implementation.

---

## 3. Current website inventory

| Route / destination | Current status | Observed purpose and content | Audit decision |
|---|---|---|---|
| `/` | Public page verified | Audience selection, product positioning, six feature summaries, onboarding steps, signup links | Keep and improve; do not replace without a separate redesign decision |
| `/for-marketers/` | Public page verified | CDP/CRM/marketing automation positioning, analytics, segmentation, n8n, channel messaging, signup CTA | Keep; urgent content correction and claim verification required |
| `/for-business/` | Public page verified | Sales problems, customer profiles, pipeline, reminders, segments, analytics, communications, team management, industry summaries, FAQ and CTAs | Keep; correct overclaims and connect its feature summaries to dedicated pages |
| `/privacy-policy/` | Footer destination verified as 404 | Legal destination linked from public footer | P0: create an approved policy page or correct the link |
| `/terms/` | Footer destination verified as 404 | Terms destination linked from public footer | P0: create approved terms or correct the link |
| Homepage `#why` / equivalent “Why XCRM” section | Anchor/section, not verified as standalone route | Product positioning and value proposition | Keep as an on-page section; consider a dedicated page only if content justifies it |
| Homepage `#features` / equivalent “Features” section | Anchor/section, not verified as standalone route | Six broad product categories | Create `/features/` as a dedicated feature directory |
| Homepage `#start` / equivalent “Getting started” section | Anchor/section, not verified as standalone route | Three-step onboarding explanation | Consider a dedicated `/how-it-works/` or `/getting-started/` page |
| Homepage `#contact` / equivalent “Contact” item | Navigation item observed; dedicated destination not verified | Contact navigation | Verify; create `/contact/` if no functional page exists |
| `/pricing/` | Not verified as a public marketing page | Business-page pricing CTA leads to dashboard pricing destination | Inspect WordPress and dashboard. Create a public `/pricing/` only if there is no suitable existing route |
| `/demo/` | Not verified as a public marketing page | Business page refers to a live demo/dashboard destination | Create a dedicated public demo-request/booking page if no existing route supports this job |

### 3.1 Homepage — findings

**What works**

- The opening question directs two clear audiences into separate journeys: digital marketers and business owners.
- The product is positioned around a unified view of customer behavior rather than only contact storage.
- Six broad capability areas are introduced: customer profile, analytics, segmentation, campaigns, automation and channels.
- A simple three-step story—connect, understand customers, grow—provides a useful narrative.
- The page has clear entry points to the two audience landing pages and the dashboard login/signup experience.

**Problems to fix**

- The page displays zero values for active users, customer satisfaction and conversion improvement. Remove these counters or replace them only with verified metrics and sourceable definitions. Do not leave decorative zeroes that look like product-performance claims.
- The “AI for next-best recommendation” claim in the unified profile section is not substantiated by the supplied implemented-feature inventory. Remove or qualify it unless the team verifies a production implementation.
- “Website and app auto-connection” is too broad. The supplied source confirms a browser SDK and event ingestion; it does not establish universal automatic app integration. Describe the actual SDK installation and supported collection instead.
- Campaign claims include drag-and-drop campaign building and A/B tests. These are not confirmed by the supplied feature inventory. Verify the live implementation before retaining them.
- Channel claims include web chat and delivery/open-rate reporting. Those capabilities are not established by the supplied communications implementation. Remove or verify them.
- The heading “Six products” may imply six independent products. Prefer “six connected capability areas” or equivalent if these are modules of one platform.
- The current feature section is a summary, not a complete product explanation. Each capability should link to a dedicated detail page once it exists.
- The header/footer architecture is too shallow for the planned product, solutions, integration, developer and resource content.

**Recommended actions**

1. Keep the audience-selector hero, but make its CTA hierarchy and wording more specific.
2. Replace unsupported metrics with concrete, verified product evidence or remove the metrics block.
3. Reconcile every homepage feature bullet against the implementation inventory.
4. Link the six current summaries to the relevant dedicated pages.
5. Add a compact product navigation and visible pricing/demo paths when those routes exist.

### 3.2 For Marketers — findings

**What works**

- The hero focuses on conversion rather than vanity lead volume.
- The audience is explicit: digital marketers and marketing teams.
- The page introduces customer data, behavioral analytics, cohorts, funnels, segmentation, campaigns and dedicated n8n.
- It identifies a real problem: fragmented customer data across separate tools.
- It has a clear signup CTA and refers to the browser SDK and WordPress plugin.

**Critical content defects**

- The “third generation” explanation contains repeated `به‌زودی` placeholders and incomplete sentences. This is a publish-blocking defect.
- The LLM/LBM section is unexplained and does not provide a verifiable product capability. Remove it or replace it with a clear, substantiated explanation.
- “n8n اختصاصی — بدون واسط، بدون سقف” and “ده‌ها نود اختصاصی” overstate the implementation inventory. The source describes one n8n container and DB schema per company and **six implemented custom nodes**. Avoid “without limits”; actual infrastructure and plan resource limits exist.
- A/B testing and drag-and-drop campaign builder claims are not substantiated by the supplied inventory. Verify or remove.
- Claims around Instagram and Telegram should distinguish data collection/monitoring from message delivery. The feature inventory confirms Instagram account/session collection into the analytics pipeline and Telegram monitoring, account functionality and messaging flows; it does not substantiate every DM/comment automation claim on the page.
- “inSite” and “inApp” channels are not verified in the supplied communication service description.
- Several “real-time” or immediate-result statements require precise definitions. The inventory contains realtime timeline/activity capabilities, ClickHouse analytics and event processing, but every dashboard metric should not automatically be described as real-time.
- The page repeats the same six broad product areas rather than guiding visitors to deeper explanations.

**Recommended actions**

1. Remove all placeholder and unfinished copy before paid traffic is sent to this page.
2. Rewrite the differentiator section around verified strengths: browser SDK, behavioral analytics, event-based segmentation, automation triggers, dedicated n8n and six custom nodes.
3. Build direct links to `/features/website-tracking/`, `/features/analytics/`, `/features/segmentation/`, `/features/automation/` and `/features/workflow-automation/`.
4. Use a marketer-specific example such as product view → cart add → no purchase → event-based segment/trigger, while explaining that configuration and available events determine the journey.
5. Replace “unlimited” and guaranteed uplift language with accurate capability descriptions.

### 3.3 For Business — findings

**What works**

- This is currently the most complete audience-specific page.
- It uses recognizable business problems: lost leads, forgotten follow-ups, fragmented data and lack of sales visibility.
- It includes a concrete Kanban pipeline mockup and explains that stage names are configurable.
- It covers customer profiles, imports, reminders, segmentation, analytics, communication and team permissions.
- It identifies useful audience groups: e-commerce, online education, B2B sales/marketing and service businesses.
- Its FAQ is relatively careful in stating that available conditions and channels depend on data, account settings and connected providers.
- It has several signup CTAs and a pricing destination.

**Problems to fix**

- Some opening statements imply that all Instagram DMs, comments, Telegram messages and website buyers are automatically unified. The feature inventory does not substantiate all of these collection and messaging paths. Narrow the statement to verified integrations and account configurations.
- “هیچ لید هم هدر نرود”, “نظم ۱۰۰ درصدی”, “پاسخگویی بی‌نقص” and similar absolute claims are not defensible guarantees. Reword as intended benefits, not guaranteed outcomes.
- The setup steps imply direct Instagram DM connection and full automatic customer guidance. Confirm each specific operation in the implementation before promising it.
- “گزارش دقیق سود واقعی” is broader than the supplied analytics description. The source confirms revenue-by-source analytics and several product/revenue views, but does not establish that every cost/profit input is automatically available. Use “گزارش‌های درآمد و عملکرد بر اساس داده‌های ثبت‌شده” unless gross/net profit calculation is verified.
- The pricing section is short and directs visitors to dashboard pricing. A public pricing page should explain plans and billing more clearly, while using the backend as the pricing source of truth.
- Several links in the Business page point to `#`-style or generic “learn more” actions in the text extraction. Verify their actual destinations and replace placeholders with functioning feature routes.
- The industry summaries are good starting points but are not sufficient standalone acquisition pages.

**Recommended actions**

1. Preserve the problem-led story and Kanban example.
2. Connect customer management, sales pipeline, reminders, segmentation, analytics, communication and team sections to dedicated pages.
3. Create specific e-commerce, education, B2B and service-business solution pages.
4. Reconcile Instagram, Telegram, communications and revenue claims with the implementation inventory.
5. Create an explicit demo/contact path and a public pricing path.

---

## 4. Product truth and claims audit

The following table reconciles public copy with the supplied implemented-feature inventory. “Not confirmed” does not necessarily mean the feature does not exist anywhere in the product; it means the supplied source does not establish it and it must not be advertised until verified.

| Public claim / subject | Evidence in implemented inventory | Required content decision |
|---|---|---|
| Unified customer profiles | Multi-value phone/email/device/IP history, identity keys, social accounts, custom attributes, tags, timeline and imports | Keep; describe the actual profile fields and identity resolution accurately |
| Browser tracking | Browser SDK, page views, sessions, events, identity, UTM, e-commerce events, Web Vitals, error tracking, consent and batching | Keep; create a dedicated tracking/SDK page |
| Website and app tracking “automatic connection” | Browser SDK and public event ingestion documented; universal app integration is not established | Narrow to supported website/browser SDK installation and verified integration methods |
| AI next-best-action/recommendation | Not established in supplied inventory; frontend AI Assistant creates contextual prompts and deep-links to external AI services | Remove from product promises unless separately verified |
| Dynamic segmentation | Static/dynamic segments; AND/OR; event conditions; preview/evaluate; periodic sweep; parallel membership rules | Keep; explain data-dependent conditions and evaluation behavior |
| Funnels, cohorts, retention, RFM, LTV | Explicitly implemented analytics endpoints and frontend pages | Keep; give each major analysis a visual example |
| Campaigns/automations | Scheduled and triggered runs, event/delayed/absence triggers, audience targeting, execution logs, retries, n8n workflow execution | Keep; call the public feature “Marketing Automation” if it matches current navigation terminology |
| Drag-and-drop campaign builder | Not established in supplied inventory | Verify frontend; otherwise remove |
| Campaign A/B testing | Not established in supplied inventory | Verify frontend/backend; otherwise remove |
| Dedicated n8n per company | One Docker container and DB schema per company, provisioning, workflow sync, backups, login/key flow | Keep; do not say “unlimited” because subscription resource limits exist |
| Custom n8n nodes | Six implemented community nodes are listed | State six only if this number remains accurate at publication time; do not state “dozens” or 87 |
| Telegram | Account login/session, monitored groups/channels, keywords, message ingestion, account sending, bot registration and customer matching | Keep; distinguish monitored account flows, bot registration and outbound messaging |
| Instagram | Per-company connected accounts/sessions and collection services feeding the event/analytics pipeline | Keep only verified connection and collection details; do not infer DM/comment automation |
| SMS, email and Push | Company-level channel settings, providers, unified send service, scheduled/queued SMS and provider testing | Keep with provider/configuration qualifiers |
| WhatsApp outbound messaging | Phone data records may track WhatsApp availability; outbound WhatsApp delivery is not established by the supplied source | Do not advertise without implementation proof |
| Web chat, inSite and inApp | Not established in supplied communication implementation | Verify or remove from channel lists |
| Open rate/delivery analytics across every channel | SMS logs and provider services are described; broad universal delivery/open reporting is not established | State only per-channel metrics that are actually implemented |
| Team permissions | Company roles, granular permissions, extra employee permissions, API scopes and plan filtering | Keep; do not expose internal permission IDs in marketing copy |
| Templates | Six kinds of server-seeded suggestions, category scope, one-click creation and workflow import | Keep; explain that availability depends on company category and published templates |
| Pricing/plan limits | Free/basic/advanced/pro plans, feature entitlements, daily rate, resource caps and pricing options | Keep; public prices/limits must come from verified current plan data |
| Wallet/proration | Backend quote/change flows, half-up Rial rounding, wallet split/credits, upgrade/downgrade logic and payment verification | Keep on pricing/billing pages; do not calculate amounts independently in frontend marketing code |

### 4.1 Required language rules

- Prefer “helps identify”, “makes it possible to analyze” and “supports” over guaranteed outcomes such as “increases sales by X%”.
- Never publish fake customer counts, satisfaction scores, conversion lifts, logos or testimonials.
- Mark examples and screenshots using illustrative/demo data when they are not real customer data.
- Explain provider-dependent and configuration-dependent features.
- Distinguish data collection, analytics, segmentation, automation and outbound messaging. They are connected but not interchangeable capabilities.
- Distinguish the XCRM trigger builder from the n8n workflow editor and execution runtime.
- Do not present planned n8n community nodes as implemented.

---

## 5. Missing pages and content architecture gaps

The current site needs a structured architecture rather than additional repeated marketing sections.

### 5.1 Product feature directory and detail pages

Create a central `/features/` directory and the detail pages below. The list is based on the supplied implemented feature inventory.

| Proposed route | Page | Main content focus | Priority |
|---|---|---|---|
| `/features/` | Features directory | Group all verified product capabilities and link to detail pages | P0/P1 |
| `/features/customer-management/` | Customer Management & Profiles | Customer records, multi-value contacts, identities, attributes, devices, social accounts, tags, timeline and imports | P1 |
| `/features/website-tracking/` | Website Tracking & Browser SDK | SDK installation, identities, sessions, event tracking, e-commerce events, UTM, Web Vitals, consent and error tracking | P1 |
| `/features/analytics/` | Behavioral Analytics & Reporting | Funnels, comparisons, retention, cohorts, RFM, customer paths, LTV, traffic, revenue, products and pipeline analysis | P1 |
| `/features/segmentation/` | Customer Segmentation | Static/dynamic segments, AND/OR conditions, event rules, preview/evaluation and parallel segment priority | P1 |
| `/features/sales-pipeline/` | Sales Pipeline & Follow-ups | Pipelines, stages, transition rules, sales activity, reminders, snoozing and pipeline analytics | P1 |
| `/features/automation/` | Marketing Automation & Campaign Triggers | Scheduled runs, audiences, event/delayed/absence triggers, lifecycle, execution logs and retries | P1 |
| `/features/communication/` | Customer Communication | Verified SMS, email, Push and Telegram communication settings, providers, quiet hours and scheduled SMS | P1 |
| `/features/workflow-automation/` | Dedicated n8n Workflow Automation | Per-company n8n instance, workflows, sync, webhooks, backups and six custom nodes | P1 |
| `/features/templates/` | Ready-Made Templates & Suggestions | Six template categories, category-specific suggestions, one-click creation and workflow import | P2 |
| `/features/team-management/` | Team Management & Permissions | Employees, roles, granular permissions, plan-filtered access and API-key scopes | P2 |

### 5.2 Integrations and developer pages

| Proposed route | Page | Main content focus | Priority |
|---|---|---|---|
| `/integrations/` | Integrations directory | Verified integrations and setup status | P1 |
| `/integrations/wordpress/` | WordPress integration | Actual plugin installation, configuration, SDK/event tracking and troubleshooting | P1 |
| `/integrations/telegram/` | Telegram integration | Accounts, sessions, monitoring, keywords, message ingestion, bot registration and customer linking | P1 |
| `/integrations/instagram/` | Instagram integration | Only the account/session and data-collection capabilities verified in the implementation | P2; technical verification required |
| `/developers/` | Developer platform | Entry point to SDK, API, keys, webhooks, WordPress and n8n nodes | P1 |
| `/developers/sdk/` | Browser SDK documentation | Installation, initialization, identity, event tracking, consent, e-commerce and troubleshooting | P1 |
| `/developers/api/` | API documentation | Actual authentication, scopes, endpoints, payloads, responses and errors | P1; source verification required |
| `/developers/webhooks/` | Webhook guide | Actual n8n workflow webhook behavior and setup | P2 |

### 5.3 Industry solution pages

| Proposed route | Page | Core audience/problem | Priority |
|---|---|---|---|
| `/solutions/` | Solutions directory | Route visitors by business model | P2 |
| `/solutions/ecommerce/` | E-commerce | Product events, purchase funnels, cart abandonment, segments, revenue/product analysis | P1 |
| `/solutions/agencies/` | Marketing agencies | Client/customer data, campaign analysis, audience segmentation and automation | P2 |
| `/solutions/education/` | Online education | Enrollment leads, follow-ups, course interest, sales stages and retention | P2 |
| `/solutions/b2b-sales/` | B2B sales | Lead qualification, opportunities, stages, activity history, reminders and teams | P1 |
| `/solutions/service-businesses/` | Service businesses | Customer records, enquiries, follow-ups, custom attributes and interaction history | P2 |

### 5.4 Conversion, trust and education pages

| Proposed route | Page | Main content focus | Priority |
|---|---|---|---|
| `/pricing/` | Pricing | Current plans, limits, billing durations, feature comparison, wallet/proration FAQs and signup | P0/P1 |
| `/demo/` | Request a demo | Demo value proposition, lead form or verified booking path, confirmation and follow-up | P1 |
| `/contact/` | Contact | Sales, support and partnership contact paths; verified contact details | P0/P1 |
| `/how-it-works/` | How it works | Connect → collect → identify → segment/analyze → automate/communicate | P1 |
| `/getting-started/` | Getting started | Practical account setup and first-use checklist | P2 |
| `/faq/` | FAQ | Central, accurate answers grouped by product area | P2 |
| `/about/` | About XCRM | Verified company/product story, positioning and contact details | P2 |
| `/security/` | Security & data practices | Only verified security controls, privacy behavior, access isolation and operational facts | P1; review required |
| `/privacy-policy/` | Privacy policy | Actual data collection, purposes, retention, processors, consent and rights; legal review | P0; currently 404 |
| `/terms/` | Terms of use | Accurate product and subscription terms; legal review | P0; currently 404 |
| `/resources/` | Resource center | Educational hub and content categories | P2 |
| `/guides/` | Guides/tutorials | Setup, tracking, segments, automations and analytics tutorials | P2 |
| `/case-studies/` | Customer stories | Real, approved customer stories and results only | P3; evidence required |
| `/glossary/` | Marketing/analytics glossary | CDP, CRM, event, funnel, cohort, RFM, LTV, attribution and automation terminology | P3 |

---

## 6. Conversion and navigation audit

### 6.1 Current journey

The most visible journey is:

`Homepage → Choose Marketer or Business → Read summary → Click dashboard signup/login or another landing-page anchor.`

This is a reasonable starting path, but it does not yet give every visitor a clear route to:

- Explore all product capabilities in depth.
- Verify technical integration requirements.
- Compare plans and resource limits before signup.
- Request a sales/demo conversation.
- Read security and privacy information.
- Learn through guides and tutorials.

### 6.2 Recommended main navigation

Use a compact navigation system; do not put every route in the top-level header.

1. **Product** — Features directory, selected feature pages, how it works.
2. **Solutions** — For Marketers, For Business, industry pages.
3. **Integrations** — Integrations directory, WordPress, Telegram, Instagram, developer entry.
4. **Pricing** — Public pricing page.
5. **Resources** — Guides, FAQ, glossary, customer stories when available.
6. **About** — About and contact.

Header actions:

- Login → verified dashboard login URL.
- Start free → verified dashboard registration URL and exact trial conditions.
- Request demo → `/demo/` when implemented.

### 6.3 Recommended footer

- Product: features, website tracking, analytics, segmentation, automation, sales pipeline.
- Solutions: marketers, business, e-commerce, agencies, education, B2B.
- Integrations: WordPress, Telegram, Instagram, developer platform.
- Resources: guides, FAQ, glossary.
- Company: about, contact, privacy, terms, security.

Do not expose links to unbuilt routes. Use a staging checklist to activate navigation links only after the destination passes QA.

### 6.4 CTA rules

Every page should have one primary conversion objective and a small number of relevant secondary links.

| Page type | Primary CTA | Secondary CTA |
|---|---|---|
| Feature detail | Start free / explore in dashboard | Request demo / related feature |
| Industry solution | Request demo or start free | Relevant feature details |
| Integration | View setup guide / connect integration | Developer documentation |
| Developer docs | Read documentation / install SDK | Create API key in dashboard |
| Pricing | Choose plan / create account | Ask sales / FAQ |
| Demo | Submit demo request | Start free |
| Resources | Read related guide | View relevant feature |

All CTA targets must be real, tested destinations. Do not create inert buttons or `href="#"` placeholders.

---

## 7. SEO and content requirements

For every indexable public page:

- Unique Persian SEO title and meta description.
- One clear primary H1.
- Logical H2/H3 hierarchy.
- One dominant search intent.
- Useful Persian copy written for the intended audience, not translated keyword stuffing.
- Internal links to parent directory, related feature, solution, integration and conversion pages.
- Canonical URL.
- Descriptive image `alt` text.
- Relevant Open Graph metadata.
- Breadcrumbs where useful.
- XML sitemap inclusion and appropriate robots directives.
- Structured data only when the content qualifies and the implementation is accurate.

Avoid keyword cannibalization. For example:

- `/features/analytics/` explains the product's analytics capabilities.
- `/solutions/ecommerce/` explains how those capabilities address e-commerce problems.
- A future `/guides/abandoned-cart-analysis/` teaches a particular method.

These pages should cross-link but must not duplicate the same article.

---

## 8. Analytics and measurement requirements

The public website should be measurable using the existing XCRM tracking infrastructure where technically appropriate and consent requirements permit it.

Recommended event taxonomy (proposed measurement names, not a claim that these events are already configured):

| Event | When to record | Useful properties |
|---|---|---|
| `view_feature_page` | A feature detail page is viewed | `page_slug`, `feature_category`, `audience` |
| `click_feature_cta` | A primary or secondary feature CTA is clicked | `page_slug`, `cta_type`, `destination` |
| `click_pricing` | Pricing link/CTA is clicked | `source_page`, `cta_location` |
| `click_demo` | Demo CTA is clicked | `source_page`, `cta_location` |
| `submit_demo_form` | Demo form succeeds on the server | `form_id`, `business_type` where consent/legal basis permits |
| `start_registration` | User starts dashboard registration | `source_page`, `campaign/UTM` |
| `complete_registration` | Registration succeeds, ideally confirmed server-side | `source_page`, `campaign/UTM` |
| `click_documentation` | Developer documentation CTA is clicked | `doc_type`, `source_page` |
| `click_integration` | Integration CTA is clicked | `integration`, `source_page` |

Do not send names, phone numbers, email addresses, free-text form contents, API keys or other secrets as event properties.

Recommended reporting:

- Page views and unique visitors by route.
- Acquisition source/medium/campaign.
- CTA click rate by page and CTA position.
- Demo form completion rate.
- Registration starts and completions.
- Feature-page-to-signup conversion.
- Device category and landing-page performance.
- Internal link usage between feature pages.

Define event ownership and consent handling before implementation. A click to the dashboard is not proof of a completed registration. Use server-confirmed outcomes when available.

---

## 9. Prioritized implementation plan

### P0 — Fix trust and accuracy first

1. Create or repair `/privacy-policy/` and `/terms/`; obtain appropriate legal review.
2. Remove or replace zero-valued homepage proof-point counters.
3. Remove all `به‌زودی` placeholders and incomplete statements from `/for-marketers/`.
4. Verify and correct claims about AI, A/B testing, drag-and-drop campaign building, Instagram messaging, web chat, inSite/inApp, unlimited automation and n8n node counts.
5. Test all current navigation, anchor links, signup links, footer links and “learn more” actions.
6. Confirm whether contact and pricing pages already exist in WordPress before creating them.

### P1 — Build the core product and conversion architecture

1. `/features/` directory.
2. Dedicated pages for customer management, website tracking, analytics, segmentation, sales pipeline and automation.
3. `/pricing/`, `/demo/` and `/contact/` (unless equivalent pages already exist and can be improved).
4. Communication and dedicated n8n pages.
5. Integrations and developer entry pages.
6. E-commerce and B2B solution pages.
7. Add internal links from the current audience landing pages to the new pages.

### P2 — Expand adoption and audience depth

1. Ready-made templates page.
2. Team management page.
3. Telegram and Instagram integration detail pages (after technical scope verification).
4. WordPress integration and developer SDK/API documentation.
5. Agency, education and service-business solution pages.
6. How-it-works, getting-started and FAQ pages.
7. Security and resources sections.

### P3 — Long-term organic acquisition

1. Guides and tutorials.
2. Glossary.
3. Approved customer stories/case studies.
4. Topic clusters around CDP, customer behavior, event tracking, segmentation, funnels, retention, RFM, LTV and marketing automation.

---

## 10. WordPress implementation constraints

Follow the supplied `AGENTS.md` without exceptions.

- WordPress child theme of Hello Elementor.
- No build step.
- Vanilla CSS and vanilla JavaScript only.
- No Tailwind, React, Next.js, npm or bundler.
- Persian RTL by default on landing templates.
- IRANYekan typography.
- Class-based dark mode using `html.dark` and the existing `XCRM.darkMode` behavior.
- Enqueue styles/scripts through `functions.php`.
- Preserve documented loading order and dependencies.
- Use PHP templates and shared partials where appropriate.
- Scope section CSS with a unique prefix.
- Reuse existing theme utilities, component classes, animation helpers and shared header/footer.

### Design-token requirements

Use the existing `--x-*` variables from `assets/css/xcrm-design-system.css` rather than inventing a second palette. Important documented variables include:

- Surfaces: `--x-bg`, `--x-base`, `--x-surface`, `--x-surface-hover`.
- Text: `--x-text`, `--x-text-highlight`, `--x-text-muted`.
- Borders and shadows: `--x-border`, `--x-border-subtle`, `--x-shadow-main`, `--x-shadow-card`, `--x-shadow-card-hover`, `--x-shadow-soft`.
- Brand/semantic colors: `--x-primary`, `--x-primary-hover`, `--x-primary-active`, `--x-secondary`, `--x-success`, `--x-info`, `--x-warn`, `--x-error` and their documented variants.
- Gradients: `--x-gradient-primary`, `--x-gradient-ocean`, `--x-gradient-premium`, `--x-gradient-success`, `--x-gradient-sunset`, `--x-gradient-dark`, `--x-gradient-brand-glow`.
- Radius: `--x-radius-xs` through `--x-radius-2xl`.
- Motion: `--x-ease-standard`, `--x-ease-smooth`, `--x-dur-150`, `--x-dur-180`, `--x-dur-220`, `--x-dur-250`.

Reuse existing classes such as `.main-card`, `.primary-card`, `.secondary-card`, `.success-card`, `.info-card`, `.warn-card`, `.error-card`, `.glass-card`, `.hover-card`, `.brand-surface`, `.base-container`, `.container-main`, `.grid-primary`, `.grid-secondary`, `.grid-full`, `.grid-auto`, `.interactive-surface`, `.xcrm-focus`, `.text-gradient-primary`, `.hero-glass`, `.section-contain` and other classes documented in `AGENTS.md`.

Before implementation, inspect the actual token definitions and existing templates. The audit does not substitute for repository inspection.

### Suggested code architecture

- Keep the existing homepage, Marketers and Business templates intact unless a change is explicitly needed.
- Add new route/template logic in the existing routing conventions; do not introduce a second routing system.
- Create reusable PHP partials for repeated elements such as feature cards, breadcrumbs, FAQ sections, page hero, CTA sections and related links.
- Keep content specific to each page; reusable markup must not become repeated generic copy.
- Add page-specific CSS files only when existing shared styles cannot satisfy the design.
- Register new assets through `functions.php` and depend on the design-system stylesheet.
- Do not duplicate global header, footer, theme toggle or shared JavaScript modules.

---

## 11. QA acceptance checklist

A page is not complete merely because its template renders. Before publishing, verify:

### Content and product accuracy

- [ ] No placeholder copy remains.
- [ ] All feature claims are supported by the implementation inventory or separately verified code.
- [ ] No fake metrics, customers, testimonials or guarantees.
- [ ] Channel and integration availability is qualified where provider/configuration dependent.
- [ ] Example scenarios are labelled as examples.
- [ ] Persian copy is proofread.

### Routes and navigation

- [ ] Route resolves with the intended WordPress template.
- [ ] No route collision or duplicate page exists.
- [ ] Breadcrumbs work.
- [ ] Parent/child directory links work.
- [ ] All CTAs have real destinations.
- [ ] Header and footer destinations work.
- [ ] Legal pages no longer return 404.
- [ ] Redirects are intentional and tested.

### Visual and interaction quality

- [ ] RTL is correct at mobile, tablet and desktop widths.
- [ ] Light mode works.
- [ ] Dark mode works with `html.dark`.
- [ ] IRANYekan is used consistently.
- [ ] Existing design tokens are reused.
- [ ] No CSS leaks into the homepage or other pages.
- [ ] Keyboard focus is visible.
- [ ] Forms have labels, validation and clear error/success states.
- [ ] Reduced-motion preferences are respected.
- [ ] No decorative or inert buttons remain.

### Technical and SEO quality

- [ ] CSS/JS enqueues follow `AGENTS.md` dependencies and load order.
- [ ] No frontend framework/build step has been added.
- [ ] Images have appropriate size, format and alt text.
- [ ] No avoidable layout shifts or oversized assets.
- [ ] Unique metadata and canonical are present.
- [ ] Sitemap and robots behavior is correct.
- [ ] Structured data is valid and appropriate.
- [ ] Forms are securely validated, sanitized, escaped and nonce-protected as appropriate.
- [ ] No secrets or personal data are exposed to analytics events.
- [ ] Browser console and network errors are checked.

---

## 12. OpenCode execution instructions

1. Read `AGENTS.md` completely.
2. Read this audit and `website-content-map.md`.
3. Read the complete supplied product inventory at `docs/product/features-business-logic.md`.
4. Inspect the actual WordPress child-theme repository, route registration, existing WordPress pages and page templates.
5. Confirm which proposed routes already exist before creating new templates or pages.
6. Create a page-by-page implementation plan with exact files and dependencies.
7. Execute P0 fixes first, then implement P1 pages in small reviewable groups.
8. Update `website-content-map.md` whenever a route is created, renamed, deferred or removed.
9. Run the QA checklist and record actual test results in a final QA report.

**Do not implement every proposed page in one unreviewed batch. Do not replace the current homepage or audience landing pages wholesale. Do not invent capabilities to fill a page.**

---

## 13. Audit limitations

This document is based on the public pages inspected on 2026-11-08, the supplied `AGENTS.md`, and the supplied implemented-feature inventory. It is not a complete technical, accessibility, SEO crawler, analytics or legal audit.

The following remain to be verified by OpenCode or the site owner:

- Full WordPress page/post inventory and unpublished templates.
- Actual PHP, CSS and JS source and enqueue behavior.
- Actual contact form and anchor target behavior.
- Whether pricing/demo pages exist but are unlinked or hosted in the dashboard.
- Live product screenshots and exact UI labels.
- Search Console, analytics and event instrumentation.
- Actual company legal identity, privacy disclosures, retention periods and processors.
- Exact integrations and provider-level availability at publication time.

When a point is not established, keep it marked **unverified** rather than filling the gap with assumptions.
