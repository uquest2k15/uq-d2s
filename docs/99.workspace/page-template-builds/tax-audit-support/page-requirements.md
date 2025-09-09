# Objective
- docs/figma-exports/tax-audit-support/index.html 페이지를 WordPress + GeneratePress의 custom static page template 으로 구현한다.

# context
- {proj-name}/docs/page-template-builds/common.md를 우선 참조한다.

# Sections Guide

##  1. Section 순서
1. 세무조사 통지 받으셨나요? 24시간 내 전문가가 동행합니다. (메인 헤드라인)
2. 혼자 대응하지 마세요. 전문가와 함께하면 결과가 달라집니다.
3. 온필드 세무조사 대응 핵심 성과
4. 온필드 세무조사 대응 3단계 전략
5. 세무조사 유형별 대응 전략
6. 세무조사 대응 프로세스
7. 서비스 비용 안내
8. 대응 성공 사례
9. 자주 묻는 질문
10. 세무조사 대비 체크리스트
11. 온필드 세무조사 대응의 차별점
12. 복잡한 세금, 전문가의 지식으로 명쾌하게 (상담 신청 유도 섹션)

## 2. unordered list가 있는 섹션에서 bullet의 표시 방법
### 2-1. solid circled check
- themes/generatepress_child/d2s-v1/common/images/symbol/solid-circled-check.svg 사용
#### solid circled check로 unordered list의 bullet의 표시하는 섹션들
1. 온필드 세무조사 대응 3단계 전략
2. 세무조사 대응 프로세스
3. 자주 묻는 질문

### 2-2. outlined circled check
아래 두 개를 결합해서 사용(circle안에 check가 들어가야 함)
- themes/generatepress_child/d2s-v1/common/images/symbol/circle.svg
- themes/generatepress_child/d2s-v1/common/images/symbolcheck.svg
#### solid circled check 로 unordered list의 bullet의 표시하는 섹션들
1. 세무조사 유형별 대응 전략
2. 서비스 비용 안내
3. 온필드 세무조사 대응의 차별점

## 3. Section 별 설명
### 3-1. 세무조사 통지 받으셨나요? 24시간 내 전문가가 동행합니다. (메인 헤드라인)
- background-image : themes\generatepress_child\d2s-v1\pages\tax-audit-support\images\tax-audit-support-bg.webp
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.
### 3-2. 혼자 대응하지 마세요. 전문가와 함께하면 결과가 달라집니다.
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.
### 3-3. 온필드 세무조사 대응 핵심 성과
- 100%, 75%, 24시간, 90% 는 페이지 스크롤 되서 표시될 때 나타나고/사라지는 애니메이션 효과
- 숫자 애니메이션
	- 0% --> 100%
	- 0% --> 75%
	- 0시간 --> 24시간
	- 0% --> 90%
### 3-4. 온필드 세무조사 대응 3단계 전략
#### 레이아웃
- desktop : 3 columns
- mobile : 1 column
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-5. 세무조사 유형별 대응 전략
#### 레이아웃
- desktop : 2 columns
- mobile : 1 column
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-6. 세무조사 대응 프로세스
- design-mockup과 figma export의 디자인, 레이아웃, content를 바꾸지 말 것.

#### 레이아웃
- desktop : 2 columns
- mobile : 1 column
#### 애니메이션
- 1단계 → 2단계 → 3단계 → 4단계 순차적으로 appear 효과

### 3-7. 서비스 비용 안내
- design-mockup과 figma export의 디자인, 레이아웃, content를 바꾸지 말 것.
#### 레이아웃
- desktop : 2 columns
- mobile : 1 column
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-8. 대응 성공 사례
#### Carousel 
##### 카드 구성
1. Title : "추징세액 5억→5천만원으로 감면"
2. Subtitle : G제조업 김○○ 대표
3. Description : "처음엔 5억 추징 통보를 받았는데, 온필드의 체계적인 대응으로 5천만원으로 줄였습니다"
##### as-is
- 현재는 카드 1장만 있음.
##### to-be
- 카드 3장을 Carousel 처리 (themes/generatepress_child/assets/js/vendors/Swiper)

##### as-is
- 현재는 카드 1장만 있음.
##### to-be
- 카드 3장을 Carousel 처리 (themes/generatepress_child/assets/js/vendors/Swiper)

###### Card 1
1. Title : "추징세액 5억→5천만원으로 감면"
2. Subtitle : G제조업 김○○ 대표
3. Description : "처음엔 5억 추징 통보를 받았는데, 온필드의 체계적인 대응으로 5천만원으로 줄였습니다"
###### Card 2
1. Title: "가산세 1억원 전액 면제 성공"
2. Subtitle : H유통업 이○○ 대표
3. Description: "정당한 사유 입증으로 가산세 1억원을 전액 면제받았습니다. 혼자였다면 불가능했을 거예요"
###### Card 3
1. Title: "무혐의로 조사 조기 종결"
2. Subtitle : I서비스업 박○○ 대표
3. Description: "철저한 사전 준비 덕분에 지적사항 없이 일주일 만에 조사가 종결됐습니다"

#### 애니메이션
- 스크롤로 나타날 때 Carousel이 넘어가게
- 스크롤로 사라질 때 Carousel이 넘어가게
 - 슬라이드 전환 속도: 600ms → 300ms (기본값으로 복구)
  - 자동 재생 간격: 3.5초 → 2초로 단축

### 3-9. 자주 묻는 질문
- design-mockup과 figma export의 디자인, 레이아웃, content를 바꾸지 말 것.
#### 레이아웃
- desktop : 2 columns
- mobile : 1 column
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-10. 세무조사 대비 체크리스트
- design-mockup과 figma export의 디자인, 레이아웃, content를 바꾸지 말 것. 특히 표는 figma-export의 html, css 속성 그대로 가져올 것
- 표는 mobile layout에서도 폭을 줄이지 말고, 좌우 스크롤을 하도록 설정할 것

### 3-11. 온필드 세무조사 대응의 차별점
#### 레이아웃
- desktop : 3 columns
- mobile : 1 column
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-12. 복잡한 세금, 전문가의 지식으로 명쾌하게 (상담 신청 유도 섹션)
#### Section Image
- themes/generatepress_child/d2s-v1/common/images/consult-request-form-cta.webp

#### 애미메이션
- section image : appear
- title / subtitle / button : float in, float up, ease-in-out