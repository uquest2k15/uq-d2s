# D2S v1 Improvements

> 이 문서는 D2S v1 시스템의 개선 작업을 추적합니다.  
> 완료된 작업은 `d2s-v1-changelog.md`에 기록됩니다.

## 📌 Status Legend
- 🔴 **Critical**: 즉시 수정 필요
- 🟡 **Important**: 다음 릴리즈에 포함
- 🟢 **Nice to have**: 시간이 있을 때
- ✅ **Completed**: 완료됨 (changelog 참조)

## 🏗️ Architecture Changes

### ✅ [ARCH-001] d2s-common-v1.0.css 이름 변경
- **Current**: d2s-common-v1.0.css
- **Proposed**: d2s-v1-common.css
- **Reason**:
	- .css 파일명에 해당 파일의 버전을 표기하는 것 일반적이지 않고, 필요하지 않은 것 같아. 어차피 나중에는 git등을 통해서 버전관리를 할건데, 파일명에 표기할 필요는 없어.
	- 다만 앞쪽에 `d2s-`를 `d2s-v1-`이라고 바꿔서 d2s의 전체 버전 숫자는 표기해 주는 것이 좋을 것 같아.
- **Migration**:
  - [x] Update Related PHPs
  - [x] Update Related File Names
  - [x] Update All documentation
- **Completed**: 2025-01-18 (v1.1.0)

### ✅ [ARCH-002] {page-name}-v1.css, {page-name}-v1.js 이름 변경
- **Current**: {page-name}-v1.css, {page-name}-v1.js
```bash
├── d2s-v1/                              # D2S v1 시스템 루트
│   ├── common/
│   │   └── d2s-common-v1.0.css         # 공통 CSS (필수)
│   │
│   ├── pages/                           # 페이지별 디렉토리
│   │   ├── {page-name}/
│   │   │   ├── page-{page-name}.php    # 템플릿 파일
│   │   │   ├── {page-name}-v1.css      # 페이지 전용 CSS
│   │   │   └── {page-name}-v1.js       # 페이지 전용 JS
```
- **Proposed**: {page-name}.css, {page-name}.js
- **Reason**:
	- .css 파일명에 해당 파일의 버전을 표기하는 것 일반적이지 않고, 필요하지 않은 것 같아. 어차피 나중에는 git등을 통해서 버전관리를 할건데, 파일명에 표기할 필요는 없어.
- **Migration**:
  - [x] Update Related PHPs
  - [x] Update Related File Names
  - [x] Update All documentation
- **Completed**: 2025-01-18 (v1.1.0)

### ✅ [ARCH-003] 템플릿 파일(page-{page-name}.php)의 위치
- **Current**: wp-content/themes/{child-theme-name}/
- **Proposed**: wp-content/themes/{child-theme-name}/templates
- **problems**
	- documentation에 wp-content/themes/{child-theme-name}/d2s-v1/pages/{page-name}/에 있다고 되어 있는 부분도 있어. 문서 내용도 수정해야 함.
- **Reason**:
	- custom static page template의 갯수가 많아질 것 같아서, 차일드 테마 루트에 두지 말고 templates 디렉토리에 모아두는 것이 좋을 것 같아.

- **Migration**:
  - [x] Update Related PHPs
  - [x] Update All documentation
- **Completed**: 2025-01-18 (v1.1.0)


### ✅ [ARCH-004] custom static page template의 images 폴더 위치.
- **Current**: wp-content/themes/{child-theme-name}/d2s-v1/pages/{page-name}/images

- **problems**
	- 이것이 d2s-v1의 documentation({project-name}/docs/d2s-v1/)와 {project-name}/workflow.md, {project-name}/prompt-template.md, 퍼블리싱 지침({project-name}/docs/publish-instruction/)에 명시되어 있지 않아서, 문서에 이것을 명확하게 설명하는 것이 필요.

- **Migration**:
  - [x] Update Related PHPs
  - [x] Update All documentation
- **Completed**: 2025-01-18 (v1.1.0) - 문서에 이미지 폴더 위치 명확히 추가





