# Objective
- docs/figma-exports/request-consulting/index.html 페이지를 WordPress + GeneratePress의 custom static page template 으로 구현한다.

# context
- {proj-name}/docs/page-template-builds/common.md를 우선 참조한다.

# Sections Guide

##  1. Section 순서
### 섹션 제목

1.  세무 고민, 바로 지금 상담신청하세요 (메인 헤드라인)
2.  빠른 상담을 원하시나요? (전화 상담 안내)
3.  온라인 상담 신청 (상담 폼)


## 2. Section 별 설명
### 2-1. Section: 세무 고민, 바로 지금 상담신청하세요 (메인 헤드라인)
- background-image : themes\generatepress_child\d2s-v1\pages\request-consulting\images\request-consulting.webp
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-2. Section: 빠른 상담을 원하시나요? (전화 상담 안내)
- Background-image : light gray
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-3. Section: 온라인 상담 신청 (상담 폼)
- 이것은 static하게 마크업하지 않고 GravityForms의 Form을 임베딩한다.
- Shortcode :
    - [gravityform id="1" title="false"]
- 다만, 제목과 설명과 static하게 마크업 한다.
> 온라인 상담 신청
> 24시간 내에 전문가가 직접 연락드립니다.




