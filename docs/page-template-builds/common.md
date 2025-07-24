# Objective

# Context

## 1. WordPress
- WordPress v6.8.x 사용

## 2. Plugin
- 특이사항 없음

## 3. Theme
- GeneratePress Premium + GenerateBlocks Pro
- GeneratePress는 이하 'GP' 라고 명칭함.

## 4. Child Theme

### GP에서 single 혹은 single-post page template의 HTML구조
```html
<body class="wp-singular post-template-default single single-post postid-266910 one-container">
	<header class="site-header has-inline-mobile-toggle" id="masthead" aria-label="사이트">
		<div class="inside-header grid-container">
			<div class="site-branding">
			</div>
			<nav class="main-navigation mobile-menu-control-wrapper" id="mobile-menu-control-wrapper">
			</nav>
			<nav class="main-navigation sub-menu-right" id="site-navigation">
				<div class="inside-navigation grid-container">
				</div>
			</nav>
		</div>
	</header>

	<div class="site grid-container container hfeed" id="page">
		<div class="site-content" id="content">
			<div class="content-area" id="primary">
				<main class="site-main" id="main">
					<article id="post-266910" class="post-266910 post">
						<div class="inside-article">
							<div class="featured-image  page-header-image-single ">
							</div>
							<header class="entry-header">
							</header>

							<div class="entry-content" itemprop="text">
							</div>

							<footer class="entry-meta" aria-label="항목 메타">
							</footer>
						</div>
					</article>
					<div class="comments-area">
						<div id="comments">
						</div><!-- #comments -->
					</div>
				</main>
			</div>

			<div class="widget-area sidebar is-left-sidebar" id="left-sidebar">
				<div class="inside-left-sidebar">
					<aside id="block-8" class="widget inner-padding widget_block">
					</aside>
					<aside id="block-9" class="widget inner-padding widget_block widget_calendar">
					</aside>
				</div>
			</div>

			<div class="widget-area sidebar is-right-sidebar" id="right-sidebar">
				<div class="inside-right-sidebar">
					<aside id="block-7" class="widget inner-padding widget_block widget_recent_entries">
					</aside>
				</div>
			</div>

		</div>
	</div>

	<div class="site-footer">
		<footer class="site-info">
			<div class="inside-site-info grid-container">
			</div>
		</footer>
	</div>

</body>
```

### Global Color
#### Concept
- Contrast – strongest text color
- Contrast 2 – lighter text color
- Contrast 3 – lightest text/border color
- Base – dark background (strongest text still readable)
- Base 2 – lighter background
- Base 3 – lightest background (white)
- Accent – main branding color

#### Style Definiton
##### 설명
- 별도의 물리적 CSS 파일(style.css global-colors.css 등)에 저장되지 않고, WordPress가 동적으로 생성하는 `<style>` 태그(사이트의 `<head>` 내부, `<style id="global-styles-inline-css" ></style>`)에 인라인으로 출력됩니다. 즉, 파일 경로가 아니라 해당 페이지 템플리트의 HTML 소스 내 `<style>` 태그에서 확인할 수 있습니다.

- 이 변수들은 테마의 각 요소, 블록, 커스텀 CSS 등에서 var(--변수명) 형태로 사용됩니다

#### 예시
```
:root {
  --contrast: #000000;
  --contrast-2: #7a7a7e;
  --contrast-3: #d9d9d9;
  --base: #f4f4f4;
  --base-2: #f9f9f9;
  --base-3: #ffffff;
  --accent: #4ec0e1;
}

body {
	color : var(--contrast);
	background-color : var(--base-2);
}
```

### Javascript Library
- 자바스크립트 애니메이션 사용을 최소화한다.
- GSAP // generatepress_child/assets/js/vendors/GASP@3.13
- Swiper // generatepress_child/assets/js/vendors/Swiper

### custom page template
#### site header & site footer
- site header(logo + GNB)는 get_header(), footer는 get_footer() 호출
