# Objective
- docs/figma-exports/tax-services/index.html 페이지를 WordPress + GeneratePress의 page template 으로 구현한다.

# Context


## 1. WordPress

## 2. Plugin
### Site Specific Custom Plugin

```
/wp-content/mu-plugins/onfield-site
├── onfield-site.php
├── /languages/
├── assets/
│   ├── images/
│   ├── css/
│   └── js/
└── includes/
```


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

### Child Theme 파일 구조

```
/wp-content/themes/child-theme/
├── functions.php
├── style.css
├── front-page.php   (← Hierarchy-based Templates)
├── templates/   (← Custom Templates)
│   └── about-us.php
├── assets/
│   ├── images/
│	│	├── sections/
│   │   └── logo/
│   ├── css/
│	│	├── front-page.css
│   │	└── gp-blog.css
│   └── js/
│		├── front-page.js
│		└── gp-blog.js
│       
└── includes/
	├── gp-customize.php
    └── gp-blog.php
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


# Page

## 디자인 목표
- design-spec : docs/design-specs/tax-services.md
- design-mockup : docs/design-mockups/tax-services.png
- figma-export : docs/figma-exports/tax-services/index.html 와 관련 파일들(*.css)
- 결과 페이지 템플릿의 디자인은 위의 design-mockup(tax-services.png)와 100% 동일해야 한다.
- figma-export의 html과 css를 활용하여 GP Child의 Page Template를 제작하되, figma-export가 design-mockup(tax-services.png)과 다른 점은 design-spec(tax-services.md)에 기술해 놓았음

## custom page template filename and directory
- filename: tax-services.php
- directory: wp-content/themes/child-theme/templates/

## 페이지 레이아웃
- Site Header(Logo & GNB), Footer는 퍼블리싱 할 필요 없음.
- Responsive Layout 지원해야 함.

## figma-exports html/css에서 수정해야 할 사항
### Section : '온필드만의 전문 세무 서비스로세무 부담은 줄이고, 절세 혜택까지 꼼꼼히 챙겨 드려요'
1. '전문 세무 서비스'는 강조색(Accent Color) 사용
2. '온필드만의 전문 세무 서비스로' 다음에 줄바꿈.
3. 가운데 정렬
### Sectoin : '온필드만의 전문 세무 서비스'
1. '15년', '200+', '2,500만원', '98%'는 페이지 스크롤 되서 표시될 때 나타나고/사라지는 애니메이션 효과
2. Responsive Layout
	- '15년/전문가 경력', '200+/고객사 수', '2,500만원/평균 절세액', '98%/고객 만족도'가 4 columns → 2 columns → 1 columns으로 바뀌는 구조
### Section: 온필드이 6대 핵심 서비스
#### 6개의 카드 디자인
##### Responsive Layout
1. desktop: 2 rows * 3 column
2. tablet : 3 rows * 2 column
3. mobile : 6 rows * 1 column
##### 카드 구성
- Title과 Subtitle이 줄바꿈이 되지 않고 이어져 있는 카드가 있음 : '세무 기장', '세무 컨설팅', '세무조사 대응', '조세 불복'
1. Title : '세무 기장'
2. Subtitle : '정확하고 안전한 장부 관리'
3. Description : '월 15만원부터 시작하는 전문 기장'
4. checkboxed unordered list 1
5. checkboxed unordered list 2
6. checkboxed unordered list 3

### Section : '서비스 선택 가이드'
##### Responsive Layout
1. desktop: 3 rows * 2 column
2. tablet / mobile : 6 rows * 1 column
### Section : '온필드 서비스 프로세스'
##### Responsive Layout
1. desktop: 2 rows * 2 column
2. tablet / mobile : 4 rows * 1 column
### Section : '온필드 차별화 포인트'
##### Responsive Layout
1. desktop: 1 rows * 3 column
2. tablet / mobile : 3 rows * 1 column
### Section : '고객 성공 사례'
#### Carousel 
##### 카드 구성
1. Title : '세무 컨설팅으로 연간 3,000만원 절세 성공`
2. Subtitle : 'A제조업체 김○○ 대표'
3. Description : '"법인세 부담이 50% 줄어서 시설 투자에 더 집중할 수 있게 됐습니다"'
##### as-is
- 현재는 카드 1장만 있음.
##### to-be
- 카드 3장을 Carousel 처리 (themes/generatepress_child/assets/js/vendors/Swiper)
###### Card 1
1. Title: "세무 컨설팅으로 연간 3,000만원 절세 성공"
2. Subtitle : A제조업체 김○○ 대표
3. Description: "법인세 부담이 50% 줄어서 시설 투자에 더 집중할 수 있게 됐습니다"
###### Card 2
1. Title: "정부지원금 7,000만원 확보"
2. Subtitle : B스타트업 이○○ 대표
3. Description: "혼자서는 찾을 수 없었던 지원사업을 발굴해주셨어요"
###### Card 3
1. Title: "세무 업무 부담 완전 해결"
2. Subtitle : C쇼핑몰 박○○ 대표
3. Description: "매월 복잡했던 세무 업무를 맡기고 본업에만 집중합니다"
