# Objective
- docs/figma-exports/tax-consulting/index.html 페이지를 WordPress + GeneratePress의 custom static page template 으로 구현한다.

# context
- {proj-name}/docs/publish-instruction/common.md를 우선 참조한다.



# sections

##  Section 순서
1. Page Header : 합법적 절세 전략으로 세금 부담을 확 줄여드립니다.
2. Section : 세금을 줄이는 것이 곧 수익을 늘리는 것입니다
3. Section : 온필드 세무 컨설팅 핵심 성과
4. Section : 온필드 세무 컨설팅 3대 핵심 영역
5. Section : 세부 컨설팅 서비스
6. Section : 정부지원사업 컨설팅 프로세스
7. Section : 업종별 특화 컨설팅
8. Section : 컨설팅 비용 및 수수료
9. Section : 고객 성공 사례
10. Section : 자주 묻는 질문
11. Section : 컨설팅 효과 시뮬레이션
12. Section : 온필드 컨설팅의 차별점
13. Section : CTA - 복잡한 세금, 전문가의 지식으로 명쾌하게

### check list
#### solid circled check
- themes/generatepress_child/assets/images/symbol/solid-circled-check.svg 사용
##### solid circled check로 표시하는 섹션
1. 온필드 세무 컨설팅 3대 핵심 영역
2. 정부지원사업 컨설팅 프로세스
3. 자주 묻는 질문

#### outlined circled check
아래 두 개를 결합해서 사용(circle안에 check가 들어가야 함)
- themes/generatepress_child/assets/images/symbol/circle.svg
- themes/generatepress_child/assets/images/symbol/check.svg
##### solid circled check로 표시하는 섹션
1. 세부 컨설팅 서비스
2. 업종별 특화 컨설팅
3. 컨설팅 비용 및 수수료
4. 온라인 컨설팅의 차별점


### Section : 세금을 줄이는 것이 곧 수익을 늘리는 것입니다

### Section : 온필드 세무 컨설팅 핵심 성과


### Section : 온필드 세무 컨설팅 3대 핵심 영역

#### 컬럼 구성 
1. 절세 컨설팅
2. 정부지원사업 컨설팅
3. R&D 세액공제
##### 반응형
- Desktop : 3열
- Mobile : 1열

### Section : 세부 컨설팅 서비스

#### 컬럼 구성 
1. 법인세 절세 컨설팅
2. 소득세 절세 컨설팅
##### 반응형
- Desktop : 2열
- Mobile : 1열

### Section : 정부 지원 사업 컨설팅 프로세스
#### 컬럼 구성
1. 1단계 기업 진단 → 2단계 사업매칭
2. 3단계 서류 준비 → 4단계 신청 및 사후 관리
#### 반응형
- Desktop : 2열
- Mobile : 1열

### Section : 업종별 특화 컨설팅
#### 컬럼 구성
1. IT/스타트업
2. 제조/무역업
3. 서비스/유통업
#### 반응형
- Desktop : 3열
- Mobile : 1열

### section : 컨설팅 비용 및 수수료
#### 컬럼 구성
1. 절세 컨설팅
2. 정부지원사업 컨설팅
#### 반응형
- Desktop : 2열
- Mobile : 1열

### Section : '고객 성공 사례'
#### Carousel 
##### 카드 구성
1. Title : '세무 컨설팅으로 연간 3,000만원 절세 성공`
2. Subtitle : 'A제조업체 김○○ 대표'
3. Description : '"법인세 부담이 50% 줄어서 시설 투자에 더 집중할 수 있게 됐습니다"'
##### as-is
- 현재는 카드 1장만 있음.
##### to-be
- 카드 3장을 Carousel 처리 (themes/generatepress_child/assets/js/vendors/Swiper)
###### Card 1
1. Title: "법인세 5,000만원 절감 성공"
2. Subtitle : A제조업체 김○○ 대표
3. Description: "R&D 세액공제를 전혀 몰랐는데, 3년치 소급 적용까지 받아 5천만원을 절세했습니다"
###### Card 2
1. Title: "정부지원금 1억원 확보"
2. Subtitle : B스타트업 이○○ 대표
3. Description: "혼자서는 엄두도 못 냈을 사업에 선정되어 시설 투자를 할 수 있었습니다"
###### Card 3
1. Title: "종합소득세 40% 절감"
2. Subtitle : C병원 박○○ 원장 
3. Description: 필요경비 인정 범자주위를 넓혀주셔서 매년 2천만원씩 절세하고 있습니다"

### section : 자주 묻는 질문
#### 컬럼 구성
1. 2열 * 2행
#### 반응형
- Desktop : 2열
- Mobile : 1열

### section : 컨설팅 효과 시뮬레이션
- 표는 반응형에서 너비를 줄이지 않고 좌우 스크롤

### section : 온라인 컨설팅의 차별점
#### 컬럼 구성
1. 검증된 전문성
2. 통합 컨설팅
3. 성과 보장
#### 반응형
- Desktop : 3열
- Mobile : 1열

# 애니메이션 효과
- 최대한 절제해서 표현
- 많은 웹사이트에서 보편적으로 사용하는 방식 적용



## Page Header : 합법적 절세 전략으로 세금 부담을 확 줄여드립니다.
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

## Section : 세금을 줄이는 것이 곧 수익을 늘리는 것입니다
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

## Section : 정부지원사업 컨설팅 프로세스
- 1단계 → 2단계 → 3단계 → 4단계 순차적으로 appear 효과

### Section : '고객 성공 사례'
- 스크롤로 나타날 때 Carousel이 넘어가게
- 스크롤로 사라질 때 Carousel이 넘어가게
 - 슬라이드 전환 속도: 600ms → 300ms (기본값으로 복구)
  - 자동 재생 간격: 3.5초 → 2초로 단축

### Section : CTA - 복잡한 세금, 전문가의 지식으로 명쾌하게
- section image : appear
- title / subtitle / button : float in, float up, ease-in-out


## 컬럼 구조일 경우, 3열은 순차적으로 appear, 2열 구조일 경우, 행 단위로 apper

### Section : 온필드 세무 컨설팅 핵심 성과
### Section : 온필드 세무 컨설팅 3대 핵심 영역
### Section : 세부 컨설팅 서비스
### Section : 업종별 특화 컨설팅
### Section : 컨설팅 비용 및 수수료
### Section : 자주 묻는 질문
### Section : 컨설팅 효과 시뮬레이션
### Section : 온필드 컨설팅의 차별점



