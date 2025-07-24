# Objective
- docs/figma-exports/tax-appeal/index.html 페이지를 WordPress + GeneratePress의 custom static page template 으로 구현한다.

# context
- {proj-name}/docs/page-template-builds/common.md를 우선 참조한다.

# Sections Guide

##  1. Section 순서
1. 과도한 세금 추징, 전문가가 바로잡아드립니다. (메인 헤드라인)
2. 합리적이지 않은 과세는 충분히 정정 가능합니다
3. 온필드 조세 불복 핵심 성과
4. 조세 불복 단계별 전략
5. 불복 가능 사례별 대응
6. 조세 불복 프로세스
7. 서비스 비용 안내
8. 불복 성공 사례
9. 자주 묻는 질문
10. 불복 가능성 자가진단
11. 온필드 조세 불복의 차별점
12. 지금 바로 시작하세요
13. 복잡한 세금, 전문가의 지식으로 명쾌하게 (상담 신청 유도 섹션)

## 2. unordered list가 있는 섹션에서 bullet의 표시 방법
### 2-1. solid circled check
- themes/generatepress_child/d2s-v1/common/images/symbol/solid-circled-check.svg 사용
#### solid circled check로 unordered list의 bullet의 표시하는 섹션들
4. 조세 불복 단계별 전략
6. 조세 불복 프로세스
9. 자주 묻는 질문

### 2-2. outlined circled check
아래 두 개를 결합해서 사용(circle안에 check가 들어가야 함)
- themes/generatepress_child/d2s-v1/common/images/symbol/circle.svg
- themes/generatepress_child/d2s-v1/common/images/symbolcheck.svg
#### solid circled check 로 unordered list의 bullet의 표시하는 섹션들
5. 불복 가능 사례별 대응
7. 서비스 비용 안내
11. 온필드 조세 불복의 차별점
12. 지금 바로 시작하세요

## 3. Section 별 설명
### 3-1. 과도한 세금 추징, 전문가가 바로잡아드립니다. (메인 헤드라인)
- background-image : themes\generatepress_child\d2s-v1\pages\tax-appeal\images\tax-appeal.webp
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-2. 합리적이지 않은 과세는 충분히 정정 가능합니다
- Background-image : light gray
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-3. 온필드 조세 불복 핵심 성과
- Background-image : white
- 65%, 800만원, 150건, 3개월 는 페이지 스크롤 되서 표시될 때 나타나고/사라지는 애니메이션 효과
- 숫자 애니메이션
	- 0% --> 65%
	- 0만원 --> 800만원
	- 0건 --> 150건
	- 0개월 --> 3개월

### 3-4. 조세 불복 단계별 전략
- Background-image : white
#### 레이아웃
- desktop : 3 columns
- mobile : 1 column
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.
### 3-5. 불복 가능 사례별 대응
- Background-image : light gray
#### 레이아웃
- desktop : 2 columns
- mobile : 1 column
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.


### 3-6. 조세 불복 프로세스
- Background-image : white
- design-mockup과 figma export의 디자인, 레이아웃, content를 바꾸지 말 것.

#### 레이아웃
- desktop : 2 columns
- mobile : 1 column
#### 애니메이션
- 1단계 → 2단계 → 3단계 → 4단계 순차적으로 appear 효과

### 3-7. 서비스 비용 안내
- Background-image : light gray
- design-mockup과 figma export의 디자인, 레이아웃, content를 바꾸지 말 것.
#### 레이아웃
- desktop : 2 columns
- mobile : 1 column
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-8. 불복 성공 사례
- Background-image : white
#### Carousel 
##### 카드 구성
1. Title : "부인된 접대비 2억원 전액 인정"
2. Subtitle : J무역회사 김○○ 대표
3. Description : "해외 바이어 접대비를 부인당했는데, 업무관련성을 입증해 전액 필요경비로 인정받았습니다"
##### as-is
- 현재는 카드 1장만 있음.
##### to-be
- 카드 3장을 Carousel 처리 (themes/generatepress_child/assets/js/vendors/Swiper)

##### as-is
- 현재는 카드 1장만 있음.
##### to-be
- 카드 3장을 Carousel 처리 (themes/generatepress_child/assets/js/vendors/Swiper)

###### Card 1
1. Title : "부인된 접대비 2억원 전액 인정"
2. Subtitle : J무역회사 김○○ 대표
3. Description : "해외 바이어 접대비를 부인당했는데, 업무관련성을 입증해 전액 필요경비로 인정받았습니다"
###### Card 2
1. Title: "가산세 5천만원 전액 취소"
2. Subtitle : K건설업 이○○ 대표
3. Description: "정당한 사유를 인정받아 무거운 가산세를 모두 취소시켰습니다"
###### Card 3
1. Title: "3년간 과다 납부세액 1.5억 환급"
2. Subtitle : L서비스업 박○○ 대표
3. Description: "소득 구분 오류를 바로잡아 3년치 세금을 돌려받았습니다"

#### 애니메이션
- 스크롤로 나타날 때 Carousel이 넘어가게
- 스크롤로 사라질 때 Carousel이 넘어가게
 - 슬라이드 전환 속도: 600ms → 300ms (기본값으로 복구)
  - 자동 재생 간격: 3.5초 → 2초로 단축

### 3-9. 자주 묻는 질문
- Background-image : light gray
- design-mockup과 figma export의 디자인, 레이아웃, content를 바꾸지 말 것.
#### 레이아웃
- desktop : 2 columns
- mobile : 1 column
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-10. 불복 가능성 자가진단
- Background-image : white
- design-mockup과 figma export의 디자인, 레이아웃, content를 바꾸지 말 것. 특히 표는 figma-export의 html, css 속성 그대로 가져올 것
- 표는 mobile layout에서도 폭을 줄이지 말고, 좌우 스크롤을 하도록 설정할 것

### 3-11. 온필드 조세 불복의 차별점
- Background-image : light gray
#### 레이아웃
- desktop : 3 columns
- mobile : 1 column
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-12. 지금 바로 시작하세요
- Background-image : white
#### 레이아웃
- desktop : 2 columns
- mobile : 1 column
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-13. 복잡한 세금, 전문가의 지식으로 명쾌하게 (상담 신청 유도 섹션)
- Background-image : light gray
#### Section Image
- themes/generatepress_child/d2s-v1/common/images/consult-request-form-cta.webp

#### 애미메이션
- section image : appear
- title / subtitle / button : float in, float up, ease-in-out