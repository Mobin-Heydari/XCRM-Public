<?php
/**
 * Template Name: For Marketers v2
 * Template Post Type: page
 *
 * لندینگ دیجیتال مارکترها — /for-marketers/
 * xCRM به عنوان ابزار افزایش فروش + کاربردها با انیمیشن SVG
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$home_url  = home_url( '/' );
$cta_url   = home_url( '/for-marketers/' );


?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?>برای دیجیتال مارکترها — <?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'fm-page' ); ?>>
<?php wp_body_open(); ?>

<!-- ============ HEADER ============ -->
<?php get_template_part( 'template-parts/site-header' ); ?>

<main class="fm">

	<!-- ============ HERO ============ -->
	<section class="fm__hero" data-spotlight-zone>

		<div class="fm__hero-bg" aria-hidden="true">
			<div class="hp__grid-bg xcrm-grid-bg"></div>
			<div class="hp__blob-wrap hp__blob-wrap--1" data-depth="1.3">
				<div class="hp__blob hp__blob--indigo"></div>
			</div>
			<div class="hp__blob-wrap hp__blob-wrap--2" data-depth="0.9">
				<div class="hp__blob hp__blob--purple"></div>
			</div>
			<div class="hp__blob-wrap hp__blob-wrap--3" data-depth="0.6">
				<div class="hp__blob hp__blob--cyan"></div>
			</div>
			<div class="hp__ring hp__ring--1"></div>
			<div class="hp__ring hp__ring--2"></div>
			<div class="hp__ring hp__ring--3"></div>
			<div class="hero-spotlight" data-spotlight></div>
		</div>

		<div class="fm__hero-inner">

			<div class="fm__hero-copy">
				<div class="hp__badge fm-anim fm-anim--1">
					<span class="hp__badge-dot" aria-hidden="true"></span>
					برای دیجیتال مارکترها
				</div>

				<h1 class="fm__title fm-anim fm-anim--2">
					لید را زیاد نکنید،  <span class="text-gradient-primary">نرخ تبدیل</span> را بالا ببرید
				</h1>

				<p class="fm__hero-kicker fm-anim fm-anim--2">
					نسل جدید CDP , CRM , Marketing automation 
				</p>

				<p class="fm__subtitle fm-anim fm-anim--3">
					ما نسل سوم ابزار دیجیتال مارکتینگ را با عنوان «xCRM فروش» عرضه کردیم.

				</p>

				<div class="fm__hero-cta fm-anim fm-anim--4">
					<a href="https://dashboard.xcrmforosh.com/" class="hp__btn hp__btn--primary" data-magnetic>
						ساخت اکانت رایگان
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
					</a>
					<a href="#gen3" class="hp__btn hp__btn--ghost" data-magnetic>منظور از نسل سوم چیست؟</a>
				</div>

				<ul class="fm__hero-points fm-anim fm-anim--5">
					<li>
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
						فعال‌سازی در کمتر از ۵ دقیقه
					</li>
					<li>
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
						بدون نیاز به پرداخت اولیه
					</li>
					<li>
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
						SDK اختصاصی وب و پلاگین وردپرس
					</li>
				</ul>
			</div>

			<!-- Animated growth dashboard SVG -->
			<div class="fm__hero-visual fm-anim fm-anim--3" aria-hidden="true">
				<div class="fm__dash">
					<svg class="fm__dash-svg" viewBox="0 0 420 300" fill="none" xmlns="http://www.w3.org/2000/svg">
						<defs>
							<linearGradient id="fmLineGrad" x1="0" y1="0" x2="420" y2="0">
								<stop offset="0%" stop-color="#6366F1"/>
								<stop offset="100%" stop-color="#06B6D4"/>
							</linearGradient>
							<linearGradient id="fmAreaGrad" x1="0" y1="0" x2="0" y2="1">
								<stop offset="0%" stop-color="#6366F1" stop-opacity="0.25"/>
								<stop offset="100%" stop-color="#6366F1" stop-opacity="0"/>
							</linearGradient>
							<linearGradient id="fmBarGrad" x1="0" y1="1" x2="0" y2="0">
								<stop offset="0%" stop-color="#6366F1" stop-opacity="0.25"/>
								<stop offset="100%" stop-color="#8B5CF6"/>
							</linearGradient>
						</defs>

						<!-- frame -->
						<rect x="8" y="8" width="404" height="284" rx="20" class="fm-dash-frame"/>

						<!-- header dots -->
						<circle cx="34" cy="36" r="5" fill="#F04438" opacity="0.85"/>
						<circle cx="52" cy="36" r="5" fill="#F59E0B" opacity="0.85"/>
						<circle cx="70" cy="36" r="5" fill="#10B981" opacity="0.85"/>
						<text x="352" y="41" text-anchor="end" class="fm-dash-label">فروش · زنده</text>

						<!-- grid lines -->
						<line x1="48" y1="90" x2="380" y2="90" class="fm-dash-grid"/>
						<line x1="48" y1="140" x2="380" y2="140" class="fm-dash-grid"/>
						<line x1="48" y1="190" x2="380" y2="190" class="fm-dash-grid"/>
						<line x1="48" y1="240" x2="380" y2="240" class="fm-dash-grid"/>

						<!-- bars -->
						<rect class="fm-bar" x="70"  y="200" width="28" height="60"  rx="6" fill="url(#fmBarGrad)" style="--i:0"/>
						<rect class="fm-bar" x="118" y="170" width="28" height="90"  rx="6" fill="url(#fmBarGrad)" style="--i:1"/>
						<rect class="fm-bar" x="166" y="185" width="28" height="75"  rx="6" fill="url(#fmBarGrad)" style="--i:2"/>
						<rect class="fm-bar" x="214" y="130" width="28" height="130" rx="6" fill="url(#fmBarGrad)" style="--i:3"/>
						<rect class="fm-bar" x="262" y="145" width="28" height="115" rx="6" fill="url(#fmBarGrad)" style="--i:4"/>
						<rect class="fm-bar" x="310" y="95"  width="28" height="165" rx="6" fill="url(#fmBarGrad)" style="--i:5"/>

						<!-- area under line -->
						<path class="fm-area" d="M84 190 L132 160 L180 172 L228 118 L276 132 L324 85 L324 260 L84 260 Z" fill="url(#fmAreaGrad)"/>

						<!-- growth line -->
						<path class="fm-line" pathLength="1" d="M84 190 L132 160 L180 172 L228 118 L276 132 L324 85" stroke="url(#fmLineGrad)" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>

						<!-- data points -->
						<circle class="fm-dot" cx="84"  cy="190" r="5" style="--i:0"/>
						<circle class="fm-dot" cx="132" cy="160" r="5" style="--i:1"/>
						<circle class="fm-dot" cx="180" cy="172" r="5" style="--i:2"/>
						<circle class="fm-dot" cx="228" cy="118" r="5" style="--i:3"/>
						<circle class="fm-dot" cx="276" cy="132" r="5" style="--i:4"/>
						<circle class="fm-dot" cx="324" cy="85"  r="6" style="--i:5"/>

						<!-- floating KPI chips -->
						<g class="fm-chip fm-chip--1">
							<rect x="250" y="48" width="120" height="34" rx="10"/>
							<text x="310" y="70" text-anchor="middle">+۴۵٪ نرخ تبدیل</text>
						</g>
						<g class="fm-chip fm-chip--2">
							<rect x="40" y="100" width="108" height="34" rx="10"/>
							<text x="94" y="122" text-anchor="middle">۱۲ سبد برگشته</text>
						</g>
					</svg>
				</div>
			</div>

		</div>
	</section>

	<!-- ============ ۴. GEN-3 SECRET ============ -->
	<section class="fm__gen3" id="gen3">
		<div class="fm__section-inner">

			<div class="fm__section-head" data-reveal="up">
				<span class="hp__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
					راز نسل سوم «xCRM فروش»
				</span>
				<h2 class="fm__section-title">
					چرا می‌گوییم «xCRM فروش» <span class="text-gradient-primary">نسل سوم</span> مارکتینگ است؟
				</h2>
			</div>

			<blockquote class="fm__quote glass-card" data-reveal="up">
				<p style="margin: 10px;" >
					«xCRM فروش » فقط یک CRM یا CDP یا Marketing automation tools  بازطراحی‌شده با پشتیبانی از شبکهٔ اجتماعی نیست؛
					ما در حال رونمایی از قابلیتی هستیم که <strong>برای اولین بار در دیجیتال مارکتینگ </strong> معرفی می‌شود؛
					زیرساختی که به کسب‌وکارها اجازه می‌دهد
					<span class="fm__censored" aria-label="بخش محرمانه — به‌زودی"><span aria-hidden="true">به زودی به زودی به زودی به زودی</span></span>
					تحلیل کرده و تجربه‌ای بی‌سابقه از
					<span class="fm__censored" aria-label="بخش محرمانه — به‌زودی"><span aria-hidden="true">به زودی به زودی به زودی به زودی</span></span>
					ارائه دهند. این قابلیت به زودی رونمایی خواهد شد.
				</p>
				
			</blockquote>
			<div class="fm__section-head" data-reveal="up">
				
				<h3 class="" style="">
				XCRM فروش، تمامی امکانات بدیهی هر CDP , Marketing automation tools را دارد، بعلاوه:
			</h3>
			</div>

			
			<!-- ویژگی های نسل سوم  -->
			<div class="fm__value-grid fm__gen3-grid">

				<article class="fm__value-card main-card" data-reveal="up" data-tilt data-tilt-max="4">
					<div class="fm__value-icon" aria-hidden="true">
						<!-- multi-channel hub: web + social + messaging -->
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
							<circle cx="12" cy="12" r="3"/>
							<circle cx="4.5" cy="6" r="2"/>
							<circle cx="19.5" cy="6" r="2"/>
							<circle cx="4.5" cy="18" r="2"/>
							<circle cx="19.5" cy="18" r="2"/>
							<path d="M6.2 7.3l3.2 2.6"/>
							<path d="M17.8 7.3l-3.2 2.6"/>
							<path d="M6.2 16.7l3.2-2.6"/>
							<path d="M17.8 16.7l-3.2-2.6"/>
						</svg>
					</div>
					<h3 class="fm__value-title"> کانال های رصد و ارتباطی جدید</h3>
					<p class="fm__value-desc">رفتار مخاطب در وب‌سایت، تلگرام (NOT BOT) و اینستاگرام در یک پروفایل واحد ادغام می‌شود؛ و از همین کانال ها هم امکان ارتباط دارید.</p>
					<div class="fm__value-spark" aria-hidden="true">
						<!-- streams merging into one identity -->
						<svg viewBox="0 0 80 28" fill="none">
							<path pathLength="1" class="fm-spark-path" d="M2 5 C18 5 28 14 42 14 C56 14 66 14 78 14"/>
							<path pathLength="1" class="fm-spark-path" d="M2 14 H78"/>
							<path pathLength="1" class="fm-spark-path" d="M2 23 C18 23 28 14 42 14 C56 14 66 14 78 14"/>
							<circle cx="78" cy="14" r="2.5" class="fm-spark-dot"/>
						</svg>
					</div>
				</article>

				<article class="fm__value-card main-card" data-reveal="up" data-reveal-delay="80" data-tilt data-tilt-max="4">
					<div class="fm__value-icon fm__value-icon--cyan" aria-hidden="true">
						<!-- eye of insight: watching → understanding -->
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
							<path d="M2 12c2.8-5 6.5-7.5 10-7.5S19.2 7 22 12c-2.8 5-6.5 7.5-10 7.5S4.8 17 2 12z"/>
							<circle cx="12" cy="12" r="3.2"/>
							<path d="M19.5 3v2.6"/>
							<path d="M18.2 4.3h2.6"/>
							<path d="M5.5 19.5v1.8"/>
							<path d="M4.6 20.4h1.8"/>
						</svg>
					</div>
					<h3 class="fm__value-title">کوچ از رصد مشتری به فهم مشتری</h3>
					<p class="fm__value-desc">ما از LLM به سمت LBM در حال حرکت هستیم. شما از پیگری و رصد مشتری میتوایند به سمت فهمیدن مشتری حرکت کنید.</p>
					<div class="fm__value-spark" aria-hidden="true">
						<!-- from flat tracking to insight spike -->
						<svg viewBox="0 0 80 28" fill="none">
							<path pathLength="1" class="fm-spark-path" d="M2 20 C16 21 28 21 38 18 C46 15.5 48 9 56 7 C64 5 70 4 76 3"/>
							<path pathLength="1" class="fm-spark-path" d="M56 7 L58 3.2 L60.5 7.5" opacity="0.7"/>
							<circle cx="76" cy="3" r="2.5" class="fm-spark-dot"/>
						</svg>
					</div>
				</article>

				<article class="fm__value-card main-card" data-reveal="up" data-reveal-delay="160" data-tilt data-tilt-max="4">
					<div class="fm__value-icon fm__value-icon--success" aria-hidden="true">
						<!-- sealed secret: lock + sparkle -->
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
							<rect x="4" y="11" width="16" height="10" rx="2.5"/>
							<path d="M8 11V7.5a4 4 0 0 1 8 0V11"/>
							<path d="M12 15.5v2"/>
							<path d="M19 3.5v2.4"/>
							<path d="M17.8 4.7h2.4"/>
						</svg>
					</div>
					<h3 class="fm__value-title fm__censored" aria-label="راز نسل سوم — کنسول را باز کنید" > <span aria-hidden="true"> کنسول را باز کنید و ببینید </span></h3>
					<p class="fm__value-desc">ویژگی بعدی نسل جدید با رونمایی کامل معرفی خواهد شد.</p>
					<div class="fm__value-spark" aria-hidden="true">
						<!-- stairs climbing into the unknown -->
						<svg viewBox="0 0 80 28" fill="none">
							<path pathLength="1" class="fm-spark-path" d="M2 24 H16 V18 H32 V12 H48 V7 H62 V3"/>
							<circle cx="66" cy="3" r="1.6" class="fm-spark-dot" opacity="0.55"/>
							<circle cx="71" cy="3" r="1.2" class="fm-spark-dot" opacity="0.35"/>
							<circle cx="75.5" cy="3" r="0.9" class="fm-spark-dot" opacity="0.2"/>
						</svg>
					</div>
				</article>

			</div>
		</div>
	</section>



	<!-- ============ ۲. ROOT PROBLEM (CRO) ============ -->
	<section class="fm__value" id="value">
		<div class="fm__section-inner">

			<div class="fm__section-head" data-reveal="up">
				<span class="hp__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 8v4"/><path d="M12 16h.01"/></svg>
					ریشه اصلی مشکل
				</span>
				<h2 class="fm__section-title">
					چرا کمپین‌های شما به <span class="text-gradient-primary">سقف فروش</span> می‌خورند؟
				</h2>
				<p class="fm__section-desc">
					کاربر در پلتفرم شما زندگی نمی‌کند. کاربر در شبکه‌های اجتماعی زندگی‌ می‌کند و شما در آن‌ها هیچ رصدی نداید، داده‌هایتان میان ابزار‌های واسط Zapier, N8N, GA4 گم می‌شود و نرخ تبدیل رشد نمی‌کند. XCRM فروش این مشکلات را حل می‌کند.
				</p>
			</div>

			<div class="fm__value-grid">

				<article class="fm__value-card main-card" data-reveal="up" data-tilt data-tilt-max="4">
					<div class="fm__value-icon" aria-hidden="true">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7" rx="1.5"/><rect x="14" y="3" width="7" height="7" rx="1.5"/><rect x="3" y="14" width="7" height="7" rx="1.5"/><rect x="14" y="14" width="7" height="7" rx="1.5"/></svg>
					</div>
					<h3 class="fm__value-title">ابزارهای مجزا</h3>
					<p class="fm__value-desc">CRM، GA4, Event Trackers و سایر ابزارهای تحلیل هر کدام جزیرهٔ جدا دارند؛ هویت مخاطب بین‌شان بریده می‌شود و داده یکپارچه شکل نمی‌گیرد.</p>
					<div class="fm__value-spark" aria-hidden="true">
						<svg viewBox="0 0 80 28" fill="none"><path pathLength="1" class="fm-spark-path" d="M2 8 L18 14 L32 10 L48 18 L62 14 L78 24"/></svg>
					</div>
				</article>

				<article class="fm__value-card main-card" data-reveal="up" data-reveal-delay="80" data-tilt data-tilt-max="4">
					<div class="fm__value-icon fm__value-icon--cyan" aria-hidden="true">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
					</div>
					<h3 class="fm__value-title">اتکا به واسط‌ها</h3>
					<p class="fm__value-desc">Zapier و n8n‌های عمومی هزینه و پیچیدگی اضافه می‌کنند، داده را از مالکیت شما خارج می‌کنند و به هر ابزار واسط وابسته می‌شوید.</p>
					<div class="fm__value-spark" aria-hidden="true">
						<svg viewBox="0 0 80 28" fill="none"><path pathLength="1" class="fm-spark-path" d="M2 10 C14 10 18 20 30 18 C42 16 46 22 58 20 C68 18 74 24 78 24"/></svg>
					</div>
				</article>

				<article class="fm__value-card main-card" data-reveal="up" data-reveal-delay="160" data-tilt data-tilt-max="4">
					<div class="fm__value-icon fm__value-icon--success" aria-hidden="true">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M7 14l4-4 3 3 5-6"/></svg>
					</div>
					<h3 class="fm__value-title">نقطه‌کور کمپین (CRO)</h3>
					<p class="fm__value-desc">بدون دادهٔ یکپارچه، نمی‌دانید کدام پیام کدام مخاطب را واقعاً به خرید رسانده — و نرخ تبدیل همان‌جا متوقف می‌شود.</p>
					<div class="fm__value-spark" aria-hidden="true">
						<svg viewBox="0 0 80 28" fill="none"><path pathLength="1" class="fm-spark-path" d="M2 6 L20 10 L36 8 L52 16 L66 14 L78 22"/></svg>
					</div>
				</article>

			</div>

			<div class="fm__solution glass-card" data-reveal="up">
				<div class="fm__solution-icon" aria-hidden="true">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
				</div>
				<div class="fm__solution-body">
					<h3>n8n اختصاصی — بدون واسط، بدون سقف</h3>
					<p>
						هر شرکت در «xCRM فروش» صاحب یک <strong>n8n اختصاصی</strong> می‌شود.
						سناریوهای اتوماسیون مارکتینگ، افیلیت، ایمیل، پیامک و چت‌بات‌ها را
						<strong> با ده‌ها نود اختصاصی</strong>  و بدون هیچ محدودیتی طراحی کنید.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ============ ۳. DEEP BEHAVIORAL ANALYSIS ============ -->
	<section class="fm__features fm__analysis" id="analysis">
		<div class="fm__section-inner">

			<div class="fm__section-head" data-reveal="up">
				<span class="hp__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M7 14l4-4 3 3 5-6"/></svg>
					تحلیل رفتاری عمیق
				</span>
				<h2 class="fm__section-title">
					کجای سفر مشتری باید <span class="text-gradient-primary">نرخ تبدیل</span> را جهش بدهید؟
				</h2>
				<p class="fm__section-desc">
					تحلیل آنی کوهورت‌ها، آنالیز رفتاری، قیف‌های فروش پیشرفته و رصد لحظه‌ای کاربران (Real-time Analytics) —
					تا دقیقاً بدانید کجای قیف باید نرخ تبدیل را جهش بدهید.
				</p>
			</div>

			<div class="fm__features-grid fm__analysis-grid">

				<article class="fm__feature main-card" data-reveal="up">
					<div class="fm__feature-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
					</div>
					<h3 class="fm__feature-title">کوهورت‌های آنی</h3>
					<p class="fm__feature-desc">گروه‌های کاربری را در هر بازهٔ زمانی مقایسه کنید و رفتار خرید هر نسل را زنده ببینید.</p>
				</article>

				<article class="fm__feature main-card" data-reveal="up" data-reveal-delay="60">
					<div class="fm__feature-icon fm__feature-icon--cyan" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
					</div>
					<h3 class="fm__feature-title">آنالیز رفتاری</h3>
					<p class="fm__feature-desc">الگوهای خرید، ریزش و وفاداری را رصد کنید و قبل از رقبا عمل کنید.</p>
				</article>

				<article class="fm__feature main-card" data-reveal="up" data-reveal-delay="120">
					<div class="fm__feature-icon fm__feature-icon--success" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 4h18l-7 8v6l-4 2v-8L3 4z"/></svg>
					</div>
					<h3 class="fm__feature-title">قیف فروش پیشرفته</h3>
					<p class="fm__feature-desc">قیف‌های چندمرحله‌ای با نقاط ریزش دقیق — ببینید مشتری در کدام گام متوقف می‌شود.</p>
				</article>

				

			</div>
		</div>
	</section>

	
	<!-- ============ USE CASES ============ -->
	<section class="fm__usecases" id="usecases">
		<div class="fm__section-inner">

			<div class="fm__section-head" data-reveal="up">
				<span class="hp__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg>
					کاربردها
				</span>
				<h2 class="fm__section-title">
					امکانات بدیهی «xCRM فروش» برای <span class="text-gradient-primary">مارکترها</span>
				</h2>
				<p class="fm__section-desc">
					دو کاربردی که هر روز با آن سر و کار دارید — از داده خام تا سگمنت و کمپین آماده اجرا.
				</p>
			</div>

			<!-- ── Use case 1: Segmentation ── -->
			<article class="fm__uc fm__uc--rtl" data-reveal="up">
				<div class="fm__uc-visual">
					<svg class="fm-uc-svg" viewBox="0 0 360 280" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
						<defs>
							<linearGradient id="uc4g" x1="0" y1="0" x2="1" y2="1">
								<stop offset="0%" stop-color="#10B981" stop-opacity="0.1"/>
								<stop offset="100%" stop-color="#6366F1" stop-opacity="0.06"/>
							</linearGradient>
						</defs>
						<rect x="20" y="20" width="320" height="240" rx="24" fill="url(#uc4g)" class="fm-uc-bg"/>

						<!-- three cluster groups -->
						<!-- group A -->
						<circle cx="110" cy="110" r="58" class="fm-uc-cluster fm-uc-cluster--a"/>
						<circle cx="95"  cy="100" r="9" class="fm-uc-node fm-uc-node--a"/>
						<circle cx="125" cy="96"  r="9" class="fm-uc-node fm-uc-node--a"/>
						<circle cx="108" cy="128" r="9" class="fm-uc-node fm-uc-node--a"/>
						<circle cx="132" cy="124" r="7" class="fm-uc-node fm-uc-node--a"/>

						<!-- group B -->
						<circle cx="230" cy="100" r="50" class="fm-uc-cluster fm-uc-cluster--b"/>
						<circle cx="218" cy="92"  r="8" class="fm-uc-node fm-uc-node--b"/>
						<circle cx="244" cy="88"  r="8" class="fm-uc-node fm-uc-node--b"/>
						<circle cx="230" cy="118" r="8" class="fm-uc-node fm-uc-node--b"/>

						<!-- group C -->
						<circle cx="175" cy="200" r="48" class="fm-uc-cluster fm-uc-cluster--c"/>
						<circle cx="162" cy="192" r="8" class="fm-uc-node fm-uc-node--c"/>
						<circle cx="188" cy="190" r="8" class="fm-uc-node fm-uc-node--c"/>
						<circle cx="175" cy="216" r="8" class="fm-uc-node fm-uc-node--c"/>

						<!-- connecting lines between clusters -->
						<path pathLength="1" class="fm-draw fm-draw--link" d="M150 130 L195 125"/>
						<path pathLength="1" class="fm-draw fm-draw--link fm-draw--link-2" d="M130 155 L160 175"/>
						<path pathLength="1" class="fm-draw fm-draw--link fm-draw--link-3" d="M210 145 L190 170"/>

						<!-- labels -->
						<g class="fm-uc-label-chip fm-uc-label-chip--a">
							<rect x="70" y="46" width="80" height="24" rx="8"/>
							<text x="110" y="63" text-anchor="middle">پرخرید</text>
						</g>
						<g class="fm-uc-label-chip fm-uc-label-chip--b">
							<rect x="198" y="36" width="80" height="24" rx="8"/>
							<text x="238" y="53" text-anchor="middle">جدید</text>
						</g>
						<g class="fm-uc-label-chip fm-uc-label-chip--c">
							<rect x="140" y="248" width="80" height="24" rx="8"/>
							<text x="180" y="265" text-anchor="middle">در معرض ریزش</text>
						</g>
					</svg>
				</div>
				<div class="fm__uc-body">
					<span class="fm__uc-num" aria-hidden="true">۰۱</span>
					<h3 class="fm__uc-title">گروه‌بندی هوشمند مشتریان</h3>
					<p class="fm__uc-desc">
						مخاطبان را بر اساس رفتار خرید، ارزش طول عمر و مرحله سفر دسته‌بندی کنید.
						سگمنت‌ها زنده‌اند؛ با هر بازدید، سبد خرید و خرید، خودشان به‌روز می‌شوند
						و مستقیماً به کمپین‌ها و اتوماسیون‌ها وصل می‌شوند.
					</p>
					<ul class="fm__uc-tags">
						<li>سگمنت داینامیک</li>
						<li>فیلتر رفتاری</li>
						<li>خروجی کمپین</li>
					</ul>
				</div>
			</article>

			<!-- ── Use case 2: Customer management ── -->
			<article class="fm__uc fm__uc--ltr" data-reveal="up">
				<div class="fm__uc-visual">
					<svg class="fm-uc-svg" viewBox="0 0 360 280" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
						<defs>
							<linearGradient id="uc5g" x1="0" y1="0" x2="1" y2="1">
								<stop offset="0%" stop-color="#F59E0B" stop-opacity="0.1"/>
								<stop offset="100%" stop-color="#6366F1" stop-opacity="0.06"/>
							</linearGradient>
							<linearGradient id="uc5bar" x1="0" y1="0" x2="1" y2="0">
								<stop offset="0%" stop-color="#6366F1"/>
								<stop offset="100%" stop-color="#06B6D4"/>
							</linearGradient>
						</defs>
						<rect x="20" y="20" width="320" height="240" rx="24" fill="url(#uc5g)" class="fm-uc-bg"/>

						<!-- window -->
						<rect x="56" y="48" width="248" height="196" rx="16" class="fm-uc-window"/>
						<circle cx="80" cy="70" r="5" fill="#F04438" opacity="0.7"/>
						<circle cx="96" cy="70" r="5" fill="#F59E0B" opacity="0.7"/>
						<circle cx="112" cy="70" r="5" fill="#10B981" opacity="0.7"/>
						<line x1="56" y1="88" x2="304" y2="88" class="fm-uc-window-line"/>

						<!-- list rows -->
						<g class="fm-uc-row fm-uc-row--1">
							<circle cx="88" cy="118" r="12" class="fm-uc-avatar"/>
							<rect x="112" y="110" width="100" height="7" rx="3.5" class="fm-uc-row-line"/>
							<rect x="112" y="122" width="64" height="6" rx="3" class="fm-uc-row-line fm-uc-row-line--sub"/>
							<rect x="236" y="110" width="44" height="18" rx="9" class="fm-uc-row-pill"/>
							<path pathLength="1" class="fm-draw fm-draw--check" d="M248 119 l4 4 8-10"/>
						</g>
						<g class="fm-uc-row fm-uc-row--2">
							<circle cx="88" cy="160" r="12" class="fm-uc-avatar fm-uc-avatar--2"/>
							<rect x="112" y="152" width="110" height="7" rx="3.5" class="fm-uc-row-line"/>
							<rect x="112" y="164" width="56" height="6" rx="3" class="fm-uc-row-line fm-uc-row-line--sub"/>
							<rect x="236" y="152" width="44" height="18" rx="9" class="fm-uc-row-pill fm-uc-row-pill--2"/>
							<path pathLength="1" class="fm-draw fm-draw--check fm-draw--check-2" d="M248 161 l4 4 8-10"/>
						</g>
						<g class="fm-uc-row fm-uc-row--3">
							<circle cx="88" cy="202" r="12" class="fm-uc-avatar fm-uc-avatar--3"/>
							<rect x="112" y="194" width="88" height="7" rx="3.5" class="fm-uc-row-line"/>
							<rect x="112" y="206" width="72" height="6" rx="3" class="fm-uc-row-line fm-uc-row-line--sub"/>
							<!-- progress bar -->
							<rect x="220" y="198" width="64" height="8" rx="4" class="fm-uc-progress-bg"/>
							<rect x="220" y="198" width="64" height="8" rx="4" class="fm-uc-progress-fill"/>
						</g>
					</svg>
				</div>
				<div class="fm__uc-body">
					<span class="fm__uc-num" aria-hidden="true">۰۲</span>
					<h3 class="fm__uc-title">مدیریت یکپارچه مشتریان</h3>
					<p class="fm__uc-desc">
						تمام تاریخچه، تعاملات، سفارش‌ها و یادداشت‌های تیم در یک پروفایل واحد.
						مارکتینگ، فروش و پشتیبانی همان تصویر کامل از مشتری را می‌بینند —
						بدون پراکندگی داده بین ابزارها.
					</p>
					<ul class="fm__uc-tags">
						<li>پروفایل واحد</li>
						<li>دید مشترک تیم</li>
						<li>تاریخچه کامل</li>
					</ul>
				</div>
			</article>

		</div>
	</section>

	<!-- ============ FEATURES GRID ============ -->
	<section class="fm__features" id="features">
		<div class="fm__section-inner">

			<div class="fm__section-head" data-reveal="up">
				<span class="hp__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
					امکانات «xCRM فروش»
				</span>
				<h2 class="fm__section-title">
					شش محصول، <span class="text-gradient-primary">یک پروفایل مشتری.</span>
				</h2>
			</div>

			<div class="fm__features-grid">
				<article class="fm__feature main-card" data-reveal="up">
					<div class="fm__feature-icon" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
					</div>
					<h3 class="fm__feature-title">پروفایل مشتری</h3>
					<p class="fm__feature-desc">CDP کامل با تمام رفتارها و رویدادها در یک خط زمانی واحد.</p>
				</article>
				<article class="fm__feature main-card" data-reveal="up" data-reveal-delay="60">
					<div class="fm__feature-icon fm__feature-icon--cyan" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M18 20V10M12 20V4M6 20v-6"/></svg>
					</div>
					<h3 class="fm__feature-title">تحلیل رفتار</h3>
					<p class="fm__feature-desc">قیف تبدیل، مسیر مشتری و نقاط ریزش — زنده و لحظه‌ای.</p>
				</article>
				<article class="fm__feature main-card" data-reveal="up" data-reveal-delay="120">
					<div class="fm__feature-icon fm__feature-icon--success" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
					</div>
					<h3 class="fm__feature-title">سگمنت‌بندی</h3>
					<p class="fm__feature-desc">گروه‌های پویا بر اساس رفتار واقعی، آماده اتصال به کمپین.</p>
				</article>
				<article class="fm__feature main-card" data-reveal="up" data-reveal-delay="180">
					<div class="fm__feature-icon fm__feature-icon--warn" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 2L11 13"/><path d="M22 2l-7 20-4-9-9-4 20-7z"/></svg>
					</div>
					<h3 class="fm__feature-title">کمپین‌ها</h3>
					<p class="fm__feature-desc">کمپین‌های چندکاناله هدفمند با A/B تست و زمان‌بندی هوشمند.</p>
				</article>
				<article class="fm__feature main-card" data-reveal="up" data-reveal-delay="240">
					<div class="fm__feature-icon fm__feature-icon--purple" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
					</div>
					<h3 class="fm__feature-title">اتوماسیون</h3>
					<p class="fm__feature-desc">سناریوهای بصری روی n8n اختصاصی — بدون کدنویسی، بدون محدودیت، همراه با نود‌های اختصاصی.</p>
				</article>
				<article class="fm__feature main-card" data-reveal="up" data-reveal-delay="300">
					<div class="fm__feature-icon fm__feature-icon--pink" aria-hidden="true">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
					</div>
					<h3 class="fm__feature-title">کانال‌ها</h3>
					<p class="fm__feature-desc">پیامک، تلگرام (NOT BOT)، ایمیل، Push و inSite , inApp — همه در یک پنل و زیر یک هویت.</p>
				</article>
			</div>
		</div>
	</section>

	<!-- ============ HOW IT WORKS ============ -->
	<section class="fm__steps" id="steps">
		<div class="fm__section-inner">
			<div class="fm__section-head" data-reveal="up">
				<span class="hp__label">
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
					مسیر CRO
				</span>
				<h2 class="fm__section-title">سه قدم تا <span class="text-gradient-primary">جهش نرخ تبدیل</span></h2>
				
			</div>

			<ol class="fm__steps-list">
				<li class="fm__step" data-reveal="up">
					<div class="fm__step-num" aria-hidden="true">۱</div>
					<h3 class="fm__step-title">اتصال سریع</h3>
					<p class="fm__step-desc">اسکریپت سبک SDK را روی وب‌سایت بگذارید و کانال‌های ارتباطی را متصل کنید — فعال‌سازی در کمتر از ۵ دقیقه.</p>
				</li>
				<li class="fm__step" data-reveal="up" data-reveal-delay="120">
					<div class="fm__step-num" aria-hidden="true">۲</div>
					<h3 class="fm__step-title">اتوماسیون بی‌محدودیت</h3>
					<p class="fm__step-desc">سناریوهای بازگشت مشتری و شخصی‌سازی را در محیط n8n اختصاصی خودتان بچینید — بدون کدنویسی و بدون سقف.</p>
				</li>
				<li class="fm__step" data-reveal="up" data-reveal-delay="240">
					<div class="fm__step-num" aria-hidden="true">۳</div>
					<h3 class="fm__step-title">بهینه‌سازی نرخ تبدیل</h3>
					<p class="fm__step-desc">تمام نقاط کور کمپین‌ها را شفاف کنید، خریدهای تکراری بسازید و رشد را روی نمودار ببینید.</p>
				</li>
			</ol>
		</div>
	</section>

	<!-- ============ CTA ============ -->
	<section class="fm__cta" id="cta">
		<div class="fm__section-inner">
			<div class="fm__cta-box brand-surface" data-reveal="scale">
				<div class="fm__cta-deco" aria-hidden="true">
					<div class="fm__cta-orb fm__cta-orb--1"></div>
					<div class="fm__cta-orb fm__cta-orb--2"></div>
				</div>
				<div class="fm__cta-content">
					<h2 class="fm__cta-title">آماده‌اید کمپین‌هایتان را وارد لول بعدی ببرید؟</h2>
					<p class="fm__cta-desc">
						همین حالا اکانت رایگان بسازید و پلتفرم نسل سوم را روی داده‌های واقعی خودتان تست کنید.
						فعال‌سازی در کمتر از ۵ دقیقه.
					</p>
					<div class="fm__cta-actions">
						<a href="https://dashboard.xcrmforosh.com/" class="hp__btn hp__btn--primary" data-magnetic>
							ساخت اکانت رایگان
							<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
						</a>
						<a href="#features" class="hp__btn hp__btn--ghost" data-magnetic>بررسی امکانات</a>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- ============ FOOTER ============ -->
	<?php get_template_part( 'template-parts/site-footer' ); ?>

</main>

<script>
/**
 * Gamification easter egg — console curiosity message
 */
(function () {
	'use strict';

	var MSG = 'متوجه کنجکاوی شما هستیم.\nشما با این مهارت و کنجکاوی حتماً باید از ابزار ما استفاده کنید.\nقول می‌دهیم در زمان رونمایی ویژگی نوآورانه و جدید ما، فروش کسب‌وکار شما متحول خواهد شد.';

	function shout () {
		try {
			console.log(
				'%c🔍 ' + MSG,
				'color:#8B5CF6; font-size:13px; font-weight:700; line-height:1.9; font-family:Tahoma,sans-serif; direction:rtl; text-align:right'
			);
			console.log(
				'%c🎯 Hint: the third card of the Gen-3 section…',
				'color:#06B6D4; font-size:11px; font-family:monospace; direction:ltr'
			);
		} catch (e) {}
	}

	/* Log when DevTools is already open */
	shout();

	/* Re-log when the censored card is clicked */
	document.addEventListener('click', function (e) {
		var target = e.target.closest ? e.target.closest('.fm__censored') : null;
		if (target) {
			shout();
			target.classList.add('is-pinged');
			setTimeout(function () {
				target.classList.remove('is-pinged');
			}, 600);
		}
	});
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
