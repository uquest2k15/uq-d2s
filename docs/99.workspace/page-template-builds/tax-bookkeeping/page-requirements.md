# Objective
- docs/figma-exports/tax-bookkepping/index.html 페이지를 WordPress + GeneratePress의 custom static page template 으로 구현한다.

# context
- {proj-name}/docs/page-template-builds/common.md를 우선 참조한다.

# Sections Guide

##  1. Section 순서
1. 정확하고 안전한 장부 관리, 온필드가 책임집니다 (메인 헤드라인)
2. 단순 기장이 아닌, 절세를 위한 전략적 기장
3. 온필드 세무 기장 핵심 성과
4. 온필드 세무 기장 3대 특장점
5. 세부 기장 서비스
6. 온필드 기장 프로세스
7. 기장료 안내
8. 고객 성공 사례
9. 기장 서비스 FAQ
10. 기장 고객 전용 혜택

11. 복잡한 세금, 전문가의 지식으로 명쾌하게 (상담 신청 유도 섹션)


## 2. unordered list가 있는 섹션에서 bullet의 표시 방법
### 2-1. solid circled check
- themes/generatepress_child/d2s-v1/common/images/symbol/solid-circled-check.svg 사용
#### solid circled check로 unordered list의 bullet의 표시하는 섹션들
1. 온필드 세무 기장 3대 특장점
2. 온필드 기장 프로세스
3. 기장 서비스 FAQ

### 2-2. outlined circled check
아래 두 개를 결합해서 사용(circle안에 check가 들어가야 함ㅇ
- themes/generatepress_child/d2s-v1/common/images/symbol/circle.svg
- themes/generatepress_child/d2s-v1/common/images/symbolcheck.svg
#### solid circled check 로 unordered list의 bullet의 표시하는 섹션들
1. 세부 기장 서비스
2. 기장료 안내
3. 기장 고객 전용 혜택

## 3. Section 별 설명

### 3-1. 정확하고 안전한 장부 관리, 온필드가 책임집니다 (메인 헤드라인)
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-2. 단순 기장이 아닌, 절세를 위한 전략적 기장
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-3. 온필드 세무 기장 핵심 성과
#### 애니메이션
- '0%', '24시간', '98%', '월15만원'는 페이지 스크롤 되서 표시될 때 나타나고/사라지는 애니메이션 효과
- 숫자 애니메이션
	- 100% --> 0%
	- 0시간 --> 24시간
	- 0% --> 98%
	- 월0만원 --> 월15만원

### 3-4. 온필드 세무 기장 3대 특장점
#### 레이아웃
- desktop : 3 columns
- mobile : 1 column
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-5. 세부 기장 서비스
#### 레이아웃
- desktop : 2 columns
- mobile : 1 column
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-6. 온필드 기장 프로세스
- design-mockup과 figma export의 디자인, 레이아웃, content를 바꾸지 말 것.

#### 레이아웃
- desktop : 2 columns
- mobile : 1 column
#### 애니메이션
- 1단계 → 2단계 → 3단계 → 4단계 순차적으로 appear 효과

### 3-7. 기장료 안내
#### 레이아웃
- desktop : 3 columns
- mobile : 1 column
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-8. 고객 성공 사례
#### Carousel 
##### 카드 구성
1. Title : "기장료는 그대로, 절세액은 500만원"
2. Subtitle : A온라인몰 김○○ 대표
3. Description : "단순 기장만 하던 곳에서 옮긴 후 세액공제를 추가로 받아 연 500만원을 절세했습니다"
##### as-is
- 현재는 카드 1장만 있음.
##### to-be
- 카드 3장을 Carousel 처리 (themes/generatepress_child/assets/js/vendors/Swiper)

##### as-is
- 현재는 카드 1장만 있음.
##### to-be
- 카드 3장을 Carousel 처리 (themes/generatepress_child/assets/js/vendors/Swiper)

###### Card 1
1. Title : "기장료는 그대로, 절세액은 500만원"
2. Subtitle : A온라인몰 김○○ 대표
3. Description : "단순 기장만 하던 곳에서 옮긴 후 세액공제를 추가로 받아 연 500만원을 절세했습니다"
###### Card 2
1. Title: "세무조사도 무사히 통과했어요"
2. Subtitle : B제조업 이○○ 대표
3. Description: "3년치 장부를 꼼꼼히 관리해주셔서 세무조사를 아무 문제 없이 마쳤습니다"
###### Card 3
1. Title: "이제 세금 걱정 없이 사업에만 집중해요"
2. Subtitle : C서비스업 박○○ 대표
3. Description: "매달 카톡으로 바로바로 물어볼 수 있어서 정말 편합니다"

#### 애니메이션
- 스크롤로 나타날 때 Carousel이 넘어가게
- 스크롤로 사라질 때 Carousel이 넘어가게
 - 슬라이드 전환 속도: 600ms → 300ms (기본값으로 복구)
  - 자동 재생 간격: 3.5초 → 2초로 단축

### 3-9. 기장 서비스 FAQ
- design-mockup과 figma export의 디자인, 레이아웃, content를 바꾸지 말 것.
#### 레이아웃
- desktop : 2 columns
- mobile : 1 column
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-10. 기장 고객 전용 혜택
#### 레이아웃
- desktop : 3 columns
- mobile : 1 column
#### 애니메이션
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### 3-11. 복잡한 세금, 전문가의 지식으로 명쾌하게 (상담 신청 유도 섹션)
#### Section Image
- themes/generatepress_child/d2s-v1/common/images/consult-request-form-cta.webp

#### 애미메이션
- section image : appear
- title / subtitle / button : float in, float up, ease-in-out