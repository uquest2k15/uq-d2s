# 텍스트 내용 및 서식 수정
## Page Header 텍스트 색상 및 강조색 변경
세무 걱정 끝, ← contract         
온필드가 해결합니다 ← '온필드' : accent, '가 해결합니다' : base-3
15년 경력 전문가가 직접 챙기는 안전한 세무관리 ← contract
무료 상담 신청하기 ← base-3, button color : accent

# check list
## solid circled check
- themes/generatepress_child/assets/images/symbol/solid-circled-check.svg 사용
### solid circled check로 표시하는 섹션
1. 온필드 6대 핵심 서비스
2. 온필드 서비스 프로세스

## outlined circled check
아래 두 개를 결합해서 사용.
- themes/generatepress_child/assets/images/symbol/circle.svg
- themes/generatepress_child/assets/images/symbol/check.svg
### solid circled check로 표시하는 섹션
1. 서비스 선택 가이드
2. 온필드 차별화 포인트


# 애니메이션 효과
- 최대한 절제해서 표현
- 많은 웹사이트에서 보편적으로 사용하는 방식 적용

## Page Header : 세무 걱정 끝, 온필드가 해결합니다
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.
## Section : '온필드만의 전문 세무 서비스로세무 부담은 줄이고, 절세 혜택까지 꼼꼼히 챙겨 드려요'
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.
### Sectoin : '온필드만의 전문 세무 서비스'
- 현재 상태 유지
### Section: 온필드이 6대 핵심 서비스
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.
### Section : '서비스 선택 가이드'
- Animation : Float In
- Direction : Float Up
- Timing : ease-in, ease-out, ease-in-out 등등 중에서 일반적인 옵션 적용.

### Section : '온필드 서비스 프로세스'
- 1단계 → 2단계 → 3단계 → 4단계 순차적으로 appear 효과
### Section : '온필드 차별화 포인트'
- 검증된 전문성 → 조세 불복 → 전문센터 순차적으로 appear 효과
### Section : '고객 성공 사례'
- 스크롤로 나타날 때 Carousel이 넘어가게
- 스크롤로 사라질 때 Carousel이 넘어가게

### Section : CTA - 복잡한 세금, 전문가의 지식으로 명쾌하게
- section image : appear
- title / subtitle / button : float in, float up, ease-in-out