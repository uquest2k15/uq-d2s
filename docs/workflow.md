# {page-name} Design to Static Page Template
- Figma 디자인을 WordPress GeneratePress child theme의 static page template로 변환하는 워크플로우를 정의

## 1. Figma : idea to Figma design
- Figma에서 {page-name} 레이어로 디자인
### 결과물(design-mockup) 및 최종 위치
#### 파일
- {page-name}-v1.png
- 혹은 {page-name}-v1.jpg
- 혹은 {page-name}-v1.svg
- 혹은 {page-name}-v1.pdf
- version number가 없으면 version number가 없는 파일을 참조해
	- 예시: {page-name}.png
- version number가 있으면 version number가 있는 파일을 참조해
	- 예시: {page-name}-v1.png
- version number가 있는 파일이 복수개이면 version number가 높은 파일을 참조해.
	- 예시: {page-name}-v1.png, {page-name}-v2.png 2개가 있다면 {page-name}-v2.png를 참조해.
#### 위치
- {project-name}/docs/design-mockups/

## 2. Anima : Export Figma design to markup(.html) & style(.css)
- Figma의 플러그인으로 Figma Design을 markup(.html) & style(.css)으로 변환해 준다.
- 참고: Anima는 별도의 자체적인 서비스를(Anima AI Playground)를 가지고 있어서, 변환된 Markup(.html) & Style(.css)을 Anima AI Playground로 가지고와서 추가적인 작업도 가능하다.
### 결과물(HTML + CSS) 및 최종 위치
#### 파일
```bash
├── index.html
├── globals.css
├── style.css
├── styleguide.css
├── img/
└── static/
```
#### 위치
- {project-name}/docs/figma-exports/{page-name}/
- version number가 없으면 version number가 없는 폴더를 참조해
	- 예시: {page-name}/
- version number가 있으면 version number가 있는 폴더를 참조해
	- 예시: {page-name}-v1/
- version number가 있는 폴더 복수개이면 version number가 높은 풀더를 참조해.
	- 예시: {page-name}-v1/, {page-name}-v2/ 2개가 있다면 {page-name}-v2/를 참조해.

## 3. markdown editor : page-requirements.md 작성
- {page-name} 페이지에서 Site Header와 Site Footer를 제외한 영역의 퍼블리싱 지침을 설계한다.
- Section 단위로 다음 사항들의 지침을 정한다.
	- Background Color 혹은 Background Image
	- Section Image File
	- Icon, Symbol File
	- Mobile Responsive Layout의 형태

### 고려할 점
- unordered list의 bullet symbol 같은 경우, 동일한 기호를 기호 갯수만큼 다른 svg 파일로 저장하고 있는 경우가 있음. 이 경우 WordPress child theme static page template로 변환할 때 하나의 파일을 참조하도록 할 필요가 있음.

### 결과물(.md) 및 최종 위치
- {project-name}/docs/page-template-builds/{page-name}/page-requirements.md
- version number가 없으면 version number가 없는 파일을 참조해
	- 예시: page-requirements.md
- version number가 있으면 version number가 있는 파일을 참조해
	- 예시: page-requirements-v1.md
- version number가 있는 파일이 복수개이면 version number가 높은 파일을 참조해.
	- 예시: page-requirements-v1.md, page-requirements-v2.md 2개가 있다면 {page-name}-v2.md를 참조해.

## 4. Claude Code : markup(.html) & style(.css) to WordPress child theme
- 프롬프트 템플리트를 참고하여 프롬프트를 작성하여 입력한다.
### 프롬프트 템플리트 위치
- {project-name}/docs/prompt-template.md

