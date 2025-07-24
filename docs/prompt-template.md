# Objective
Figma로 디자인한 {page-name}를 WordPress child theme의 static custom page template로 퍼블리싱한다.

# context
- 퍼블리싱 과정의 workflow는 {project-name}/docs/workflow.md 를 참조한다.
- 1 Design = 1 PHP Template + 1 Custom CSS + 1 Custom JS
- custom page template의 markup 구조와 스타일은 D2S-v1를 따라야 한다.
## D2S-v1 (Design-to-Static System Version 1.0)
- D2S-v1은 Figma 디자인을 Claude Code를 통해 정적 WordPress 템플릿으로 변환하는 시스템
- D2S-v1이 정의하는 레이아웃과 스타일을 반드시 따라야 하며, d2s-common-v1.0.css 클래스를 반드시 사용해야 한다.

### Documents
```bash
{project-name}/docs/d2s-v1/
					├── d2s-v1-implementation-guide.md
					├── d2s-v1-final-file-structure.md
					├── d2s-v1-quick-setup.md
					├── d2s-v1-gp-global-colors-guide.md
					├── d2s-v1-improvements.md
					└── d2s-v1-changelog.md
```

## 디자인 우선순위
- Figma export markup & style(.html, .css)은 design-mockup(.png)과 시각적으로 일치한다고 가정한다. 만일 다르다면 design-mockup이 우선순위가 높다.
- 우선 desktop layout를 기준으로 Figma export markup & style을 WordPress child theme static custom page template을 개발하되, D2S-v1의 구조와 스타일을 따라야 한다. `d2s-v1-common.css`를 반드시 사용해야 한다는 것이다.
- 즉 1차적으로 "pixel-perfection" 하게 퍼블리싱 하기 위해서 Figma export markup & style(.html, .css)를 그대로 가져오면 된다. 다만 변환된 D2S-v1의 d2s-common-v1.0.css를 사용하도록 2차적으로 구조 및 스타일의 조정이 필요한다.
- mobile layout은 publishing instruction의 지침에 따라 desktop layout에 근거하여 구현한다.

### 1. design-mockup
#### 위치
- {project-name}/docs/design-mockups/{page-name}.png

### 2. Figma export markup(.html) & style(.css)
#### 위치
```bash
{project-name}/docs/figma-exports/{page-name}
									├── index.html
									├── globals.css
									├── style.css
									├── styleguide.css
									├── img/
									└── static/
```
### 3. page-requirements.md 파일
#### 위치
- {project-name}/docs/page-template-builds/{page-name}/page-requirements.md
- version number가 없으면 version number가 없는 파일을 참조해
	- 예시: page-requirements.md
- version number가 있으면 version number가 있는 파일을 참조해
	- 예시: page-requirements-v1.md
- version number가 있는 파일이 복수개이면 version number가 높은 파일을 참조해.
	- 예시: page-requirements-v1.md, page-requirements-v2.md 2개가 있다면 page-requirements-v2.md를 참조해.