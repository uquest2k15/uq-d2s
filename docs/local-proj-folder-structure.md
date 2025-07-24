```bash
├── docs/
│   ├── local-proj-folder-structure.md
│   ├── workflow.md
│   ├── prompt-template.md
│	│
│   ├── design-mockups/        # Figma Design to image 
│	│	├── front-page.png
│	│	└── about-us.png
│	│
│   ├── figma-exports/          # Figma Design to Code(HTML markup & CSS style) by Anima Plugin
│	│	├── front-page/
│	│	│	├── index.html
│	│	│	└── style.css
│	│	└── about-us/
│	│		├── index.html
│	│		└── style.css
│	│
│   ├── page-template-builds
│	│	├── front-page/
│	│	│	├── page-requirements.md            # custom page-template 빌드 방법
│	│	│   ├── changelog.md                    # changelog
│	│	│   ├── post-deploy-review-1.md         # 첫번째 post-deploy-review
│	│	│   ├── post-deploy-review-1.png        # 첫번째 post-deploy-review 에서 참조할 screenshot-1
│	│	│   ├── post-deploy-review-2.md         # 두번째 post-deploy-review
│	│	│   └── post-deploy-review-2.jpg        # 두번째 post-deploy-review 에서 참조할 screenshot-2
│	│	│ 
│	│	└── about-us/
│	│       ├── page-requirements.md
│	│       ├── changelog.md
│	│       ├── post-deploy-review-1.md
│	│       ├── post-deploy-review-1.png
│	│       ├── post-deploy-review-1.md
│	│       └── post-deploy-review-2.jpg
│	│
│   ├── d2s-v1/
│	│	├── d2s-v1-implementation-guide.md      # d2s-v1 개발문서
│	│	├── d2s-v1-improvements.md              # d2s-v1 개선할 항목 리스트
│	│	├── d2s-v1-final-file-structure.md      # d2s-v1 디렉토리 구조
│	│	├── d2s-v1-quick-setup.md               # d2s-v1 설치 및 배포 방법
│	│	├── d2s-v1-gp-global-colors-guide.md    # GeneratePress Global Colors
│	│	└── d2s-v1-changelog.md                 # d2c-v1 changelog
│   │
└── src/
    └── wp-content/
        │
        ├── mu-plugins/
        │	└── my-site/
        │       ├── my-site.php
        │       ├── languages/
        │       ├── assets/
        │       │   ├── images/
        │       │   ├── css/
        │       │   └── js/
        │       └── includes/
        │
        └── themes/
            └── {child-theme-name}/
                ├── functions.php
                ├── style.css
                ├── front-page.php      # Hierarchy-based Templates
                │
                ├── templates/          # Custom Page Templates
                │  	├── page-{page-name}.php
                │   └── page-about-us.php
                │
                ├── assets/
                │  	├── images/
                │	│	├── sections/
                │   │	└── logo/
                │   ├── css/
                │	│	├── front-page.css
                │   │	└── about-us.css
                │   └── js/
                │		├── front-page.js
                │		└── about-us.js
                │       
                ├── includes/
                │   ├── gp-d2s-v1.php              # d2s-v1
                │   ├── gp-customize.php
                │   └── gp-blog.php
                │
                └── d2s-v1/                         # D2S v1 System Root
                    │
                    ├── common/                     # Common resources
                    │   ├── d2s-v1-common.css       # Common CSS classes
                    │   └── images/                 # d2c-v1 으로 빌드한 custom page template들이 공통적으로 사용하는 이미지 리소스
                    │       ├── consult-request-form-cta.webp
                    │       └── symbol/
                    │           ├── solid-circled-check.svg     # ✅ ← 이런 모양인데, 네모가 아니라 원이 solid fill, 안에는 체크
                    │           ├── check.svg                   # √  ← 아래 원과 합쳐서 원 안에 체크표시
                    │           └── circle.svg                  # ◯
                    │
                    │
                    └── pages/                      # d2c-v1 으로 빌드한 custom page template들이 개별적으로 사용하는 이미지 리소스
                        └── {page-name}/            # Each page has its own folder
                            ├── {page-name}.css     # Page-specific CSS
                            ├── {page-name}.js      # Page-specific JS (optional)
                            └── images/             # Page-specific images
                                ├── hero-bg.jpg
                                └── other-images.jpg
				   
	
```

### 주요 폴더 역할 설명
#### docs/ (문서)
- 프로젝트의 개발 및 관리에 필요한 모든 문서와 설계 자산을 보관
##### 하위 폴더
- design-mockups/ : 개발 전 페이지의 최종적인 시각적 결과물(디자인 시안)을 이미지로 저장한 파일 혹은 Figma에서 디자인한 페이지(레이어)를 내보내기한 파일(png, jpg, svg, pdf)
- figma-exports/ : Figma 플러그인을 활용하여 Figma 디자인을 코드로 변환한 HTML/CSS 원본으로, WordPress의 페이지 템플릿을 개발할 때, 이것을 사용합니다.
- d2s-v1 : Figma 디자인을 Claude Code를 통해 정적 WordPress 템플릿으로 변환하는 시스템에 대한 문서
- page-template-builds/ : d2s-v1를 사용하여 HTML/CSS를 WordPress child theme의 custom page template로 빌드한다.
    - page-requirements.md : 섹션별 속성, 모바일의 반응형 레이아웃 등 페이지을 빌드할 때 섹션별 요구사항을 정리한 문서
    - changelog.md : 빌드를 반복하면서 변화 관리
    - post-deploy-review-1.md : 빌드 후 배포해서 테스트해보고 나온 수정사항, 개선사항 항목 리스트
    - post-deploy-review-1.png : 빌드 후 배포해서 테스트 했을 때의 화면 캡처 스크린 샷 이미지 파일.


#### src/wp-content/ (소스코드)
- WordPress 기반 웹사이트에서 실제로 동작하고 배포되는 모든 소스 코드를 관리
##### 하위 폴더
- mu-plugins/my-site/ : 사이트 전용 커스텀 플러그인(Site Specific Custom Plugin)
- themes/{child-theme-name}/ : 부모 테마를 확장한 차일드 테마 (실제 배포되는 WordPress 템플릿)
- themes/{child-theme-name}/templates/ : 특정 페이지용 커스텀 템플릿 파일
- themes/{child-theme-name}/assets/ : 테마에서 사용하는 이미지, CSS, JavaScript 리소스
- themes/{child-theme-name}/includes/ : 테마 기능 확장을 위한 PHP 모듈 파일
- themes/{child-theme-name}/d2c-v1/ : Figma 디자인을 Claude Code를 통해 정적 WordPress 템플릿으로 변환하는 시스템