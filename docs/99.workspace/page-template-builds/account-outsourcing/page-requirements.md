# Objective
- docs/figma-exports/account-outsourcing/index.html 페이지를 WordPress + GeneratePress의 custom static page template 으로 구현한다.

# context
- {proj-name}/docs/page-template-builds/common.md를 우선 참조한다.

# Sections Guide

##  1. Section 순서
1. 복잡한 경리업무 완전 위탁, 경영에만 집중하세요 (메인 헤드라인)
2. 경리 직원 없이도 완벽한 재무 관리가 가능합니다.
3. 온필드 경리 아웃소싱 핵심 성과
4. 온필드 경리 아웃소싱 3대 핵심 서비스
5. 세부 아웃소싱 서비스
6. 경리 아웃소싱 프로세스
7. 서비스 요금 안내
8. 고객 성공 사례
9. 자주 묻는 질문
10. 도입 효과 분석
11. 온필드 경리 아웃소싱의 강점
12. 복잡한 세금, 전문가의 지식으로 명쾌하게 (상담 신청 유도 섹션)


## 2. unordered list가 있는 섹션에서 bullet의 표시 방법
### 2-1. solid circled check
- themes/generatepress_child/d2s-v1/common/images/symbol/solid-circled-check.svg 사용
#### solid circled check로 unordered list의 bullet의 표시하는 섹션들
1. 온필드 경리 아웃소싱 3대 핵심 서비스
2. 경리 아웃소싱 프로세스
3. 자주 묻는 질문

### 2-2. outlined circled check
아래 두 개를 결합해서 사용(circle안에 check가 들어가야 함ㅇ
- themes/generatepress_child/d2s-v1/common/images/symbol/circle.svg
- themes/generatepress_child/d2s-v1/common/images/symbolcheck.svg
#### solid circled check 로 unordered list의 bullet의 표시하는 섹션들
1. 세부 아웃소싱 서비스
2. 서비스 요금 안내
3. 온필드 경리 아웃소싱의 강점

## 3. Section 별 설명

### 3-1. 복잡한 경리업무 완전 위탁, 경영에만 집중하세요 (메인 헤드라인)
- background-image : themes\generatepress_child\d2s-v1\pages\account-outsourcing\images\account-outsourcing-bg.webp
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-2. 경리 직원 없이도 완벽한 재무 관리가 가능합니다.
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-3. 온필드 경리 아웃소싱 핵심 성과
- 200%, 80%, 0건, 월20만원~ 는 페이지 스크롤 되서 표시될 때 나타나고/사라지는 애니메이션 효과
- 숫자 애니메이션
	- 0% --> 200%
	- 0% --> 80%
	- 0건 --> 0건
	- 월0만원 --> 월20만원

### 3-4. 온필드 경리 아웃소싱 3대 핵심 서비스
#### 레이아웃
- desktop : 3 columns
- mobile : 1 column
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-5. 세부 아웃소싱 서비스
#### 레이아웃
- desktop : 2 columns
- mobile : 1 column
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-6. 경리 아웃소싱 프로세스
- design-mockup과 figma export의 디자인, 레이아웃, content를 바꾸지 말 것.

#### 레이아웃
- desktop : 2 columns
- mobile : 1 column
#### 애니메이션
- 1단계 → 2단계 → 3단계 → 4단계 순차적으로 appear 효과


### 3-7. 서비스 요금 안내
#### 레이아웃
- desktop : 2 columns
- mobile : 1 column
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-8. 고객 성공 사례
#### Carousel 
##### 카드 구성
1. Title : "경리 직원 없이도 문제없어요"
2. Subtitle : D스타트업 김○○ 대표
3. Description : "초기 스타트업이라 경리 직원 채용이 부담됐는데, 월 30만원으로 모든 경리 업무가 해결됩니다"
##### as-is
- 현재는 카드 1장만 있음.
##### to-be
- 카드 3장을 Carousel 처리 (themes/generatepress_child/assets/js/vendors/Swiper)

##### as-is
- 현재는 카드 1장만 있음.
##### to-be
- 카드 3장을 Carousel 처리 (themes/generatepress_child/assets/js/vendors/Swiper)

###### Card 1
1. Title : "경리 직원 없이도 문제없어요"
2. Subtitle : D스타트업 김○○ 대표
3. Description : "초기 스타트업이라 경리 직원 채용이 부담됐는데, 월 30만원으로 모든 경리 업무가 해결됩니다"
###### Card 2
1. Title: "인건비 연 1,000만원 절감"
2. Subtitle : E제조업 이○○ 이사
3. Description: "경리 직원 퇴사 후 아웃소싱으로 전환했더니 비용은 절반, 업무 품질은 더 좋아졌어요"
###### Card 3
1. Title: "투자 심사도 무사히 통과"
2. Subtitle : F테크기업 박○○ CFO
3. Description: "체계적인 재무 관리 덕분에 시리즈A 투자 심사를 순조롭게 통과했습니다"

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
### 3-10. 도입 효과 분석

- design-mockup과 figma export의 디자인, 레이아웃, content를 바꾸지 말 것. 특히 표는 figma-export의 html, css 속성 그대로 가져올 것
- 표는 mobile layout에서도 폭을 줄이지 말고, 좌우 스크롤을 하도록 설정할 것

### 3-11. 온필드 경리 아웃소싱의 강점
#### 레이아웃
- desktop : 3 columns
- mobile : 1 column
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.
### 3-10. 도입 효과 분석

### 3-12. 복잡한 세금, 전문가의 지식으로 명쾌하게 (상담 신청 유도 섹션)

#### Section Image
- themes/generatepress_child/d2s-v1/common/images/consult-request-form-cta.webp

#### 애미메이션
- section image : appear
- title / subtitle / button : float in, float up, ease-in-out