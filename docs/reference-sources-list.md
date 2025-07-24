# List of Required Reference Sources
- Incorporate these files as core context before executing any task

# Page Requirements
1. 지금 작업해야 하는 페이지가 {page-name} 이라면, 다음 위치에서 관련문서들을 찾아야 해.
	- @{project-folder}/docs/page-template-builds/{page-name}

2. Page Requirements Document : `page-requirements.md`
	- 여기에 요청한 내용들이 정확히 반영되어야 함.

3. Post Deployment Review : `post-deploy-review-1.md`
	- (현재 작업이 해당 페이지에 대한 최초 빌드가 아니라면) 이전 작업 개발 내용을 배포하고 테스트한 결과 및 개선/수정 사항을 정리한 PDR 문서
	- 이 문서 정보도 context에 통합해야 함.
	- 두번째, 세번째 PRD이라면 post-deploy-review-2.md, post-deploy-review-3.md가 될꺼야.

4. 배포 및 테스트 시 Screenshot : `post-deploy-review-1.png`
	- 파일 확장자가 `.png`가 아니고 `.jpg`, `.svg`, `.pdf` 일수도 있어.
	- 역시 두번째, 세번째 PRD이라면 post-deploy-review-2.png, post-deploy-review-3.png가 될꺼야.

5. Changelog : `changelog.md`
	- 최초 구현, 1차 PDR 후 개선/수정, 2차 PDR 후 개선/수정, n차 PDR 후 개선/수정 내역이 시간 순으로 정리된 문서

# Design Specifications
- 여기에서 정의된 Design Specification을 최종 산출물인 WordPress child theme / custom static page template로 'pixel-perfect'하게 옮기는 것이 최우선 목표임.
- "pixel-perfect"한 페이지 템플리트 빌드 때문에 다른 요소들이 품질이 떨어지거나 기능상의 문제가 생길 수 있다면, 일단 "pixel-perfect"하게 빌드한 이후에 개선하면 됨.
- Design Spec의 우선 순위는 다음과 같음
	1. figma-export
	2. design-mockup
	3. Page Requirements

## 1. figma-export
- 지금 작업해야 하는 페이지가 {page-name} 이라면, 다음 위치에서 관련 문서들을 찾아야 해.
	- @{project-folder}/docs/figma-exports/{page-name}
- 여기에 index.html과 style.css (함께 include되는 .css 포함)을 그대로 WordPress child theme 의 custom static page template로 옮기는 것이 제일 중요한 목표!

## 2. design-mockup
- @{project-folder}/docs/design-mockups/{page-name}.png
- version number가 없으면 version number가 없는 파일을 참조해
	- 예시: {page-name}.png
- version number가 있으면 version number가 있는 파일을 참조해
	- 예시: {page-name}-v1.png
- version number가 있는 파일이 복수개이면 version number가 높은 파일을 참조해.
	- 예시: {page-name}-v1.png, {page-name}-v2.png 2개가 있다면 {page-name}-v1.png를 참조해.


# d2s-v1
- D2S v1은 Figma 디자인을 Claude Code를 통해 정적 WordPress 템플릿으로 변환하는 서브 시스템
- 위치 : @{project-folder}/docs/d2s-v1
	1. d2s-v1-quick-setup.md
	2. d2s-v1-implementation-guide.md
	3. d2s-v1-improvements.md
	4. d2s-v1-gp-global-colors-guide.md
	5. d2s-v1-final-file-structure.md
	6. d2s-v1-changelog

# Wordflow
- @{project-folder}/docs/d2s-v1/workflow.md
- @{project-folder}/docs/d2s-v1/local-proj-folder-structure.md