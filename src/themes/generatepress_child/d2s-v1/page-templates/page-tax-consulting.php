<?php
/**
 * Template Name: Tax Consulting
 * D2S v1 Template - Page: tax-consulting
 * 
 * @package GeneratePress Child
 * @subpackage D2S_v1
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Remove sidebars
add_filter('generate_sidebar_layout', function() { return 'no-sidebar'; });

// Enqueue D2S v1 page assets
add_action('wp_enqueue_scripts', function() {
    gp_d2s_enqueue_page_assets('tax-consulting', true); // true = has JS file
}, 99);

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <!-- Page Header Section -->
        <section class="d2s-tax-consulting__hero d2s-section">
            <div class="grid-container">
                <div class="d2s-tax-consulting__hero-content">
                    <h1 class="d2s-tax-consulting__hero-title">
                        합법적 절세 전략으로<br>
                        세금 부담을 <span class="d2s-accent">확 줄여드립니다.</span>
                    </h1>
                    <p class="d2s-tax-consulting__hero-subtitle">
                        연간 평균 2,500만원 절세 달성, 검증된 세무 컨설팅
                    </p>
                    <a href="/request-consult" class="d2s-tax-consulting__hero-button d2s-button d2s-button--primary">
                        무료 상담 신청하기
                    </a>
                </div>
            </div>
        </section>

        <!-- Section: 세금을 줄이는 것이 곧 수익을 늘리는 것입니다 -->
        <section class="d2s-tax-consulting__intro d2s-section">
            <div class="grid-container">
                <h2 class="d2s-tax-consulting__intro-title">
                    세금을 줄이는 것이 곧 <span class="d2s-accent">수익을 늘리는 것</span>입니다
                </h2>
                <p class="d2s-tax-consulting__intro-description">
                    김성미 세무사의 15년 노하우로 숨어있는 절세 기회를 찾아 세금은 줄이고, 정부지원금은 확보하세요.
                </p>
            </div>
        </section>

        <!-- Section: 온필드 세무 컨설팅 핵심 성과 -->
        <section class="d2s-tax-consulting__stats d2s-section d2s-section--gray">
            <div class="grid-container">
                <h2 class="d2s-section__title">온필드 세무 컨설팅 <span class="d2s-accent">핵심 성과</span></h2>
                <p class="d2s-section__subtitle">숫자로 증명하는 확실한 절세 효과</p>
                <p class="d2s-section__description">
                    단 3개월 만에 컨설팅 비용을 회수하고, <span class="d2s-accent">지속적인 절세 혜택</span>을 누리실 수 있습니다.
                </p>
                
                <div class="d2s-tax-consulting__stats-grid">
                    <div class="d2s-tax-consulting__stat-item">
                        <div class="d2s-tax-consulting__stat-number" data-target="2500">0</div>
                        <div class="d2s-tax-consulting__stat-suffix">만원</div>
                        <div class="d2s-tax-consulting__stat-label">연간 평균 절세액</div>
                    </div>
                    <div class="d2s-tax-consulting__stat-item">
                        <div class="d2s-tax-consulting__stat-number" data-target="95">0</div>
                        <div class="d2s-tax-consulting__stat-suffix">%</div>
                        <div class="d2s-tax-consulting__stat-label">R&D 세액공제 성공률</div>
                    </div>
                    <div class="d2s-tax-consulting__stat-item">
                        <div class="d2s-tax-consulting__stat-number" data-target="5000">0</div>
                        <div class="d2s-tax-consulting__stat-suffix">만원</div>
                        <div class="d2s-tax-consulting__stat-label">평균 정부지원금 확보</div>
                    </div>
                    <div class="d2s-tax-consulting__stat-item">
                        <div class="d2s-tax-consulting__stat-number" data-target="35">0</div>
                        <div class="d2s-tax-consulting__stat-suffix">%</div>
                        <div class="d2s-tax-consulting__stat-label">평균 절세율</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: 온필드 세무 컨설팅 3대 핵심 영역 -->
        <section class="d2s-tax-consulting__core-areas d2s-section">
            <div class="grid-container">
                <h2 class="d2s-section__title">온필드 세무 컨설팅 3대 핵심 영역</h2>
                <p class="d2s-section__subtitle">세금은 줄이고, 지원금은 받고, 공제는 최대로 - 온필드가 모든 절세 기회를 찾아드립니다.</p>
                
                <div class="d2s-tax-consulting__core-grid">
                    <!-- 절세 컨설팅 -->
                    <div class="d2s-tax-consulting__core-item">
                        <h3 class="d2s-tax-consulting__core-title">절세 컨설팅</h3>
                        <p class="d2s-tax-consulting__core-subtitle">모든 세목의 <span class="d2s-accent">통합 절세 전략</span></p>
                        
                        <div class="d2s-tax-consulting__core-stat">
                            <div class="d2s-tax-consulting__core-stat-label">주요 성과</div>
                            <ul class="d2s-tax-consulting__core-stat-list">
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 평균 절세율 35%</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 최대 절세액 1.2억원</li>
                            </ul>
                        </div>
                        
                        <div class="d2s-tax-consulting__core-content">
                            <div class="d2s-tax-consulting__core-content-title">법인세부터 양도소득세까지 완벽 대응</div>
                            <ul class="d2s-tax-consulting__core-content-list">
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 법인세/소득세 최적화</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 부가가치세 절세 방안</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 양도소득세/상속증여세 사전 설계</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 세목 간 연계 절세 전략</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- 정부지원사업 컨설팅 -->
                    <div class="d2s-tax-consulting__core-item">
                        <h3 class="d2s-tax-consulting__core-title">정부지원사업 컨설팅</h3>
                        <p class="d2s-tax-consulting__core-subtitle">놓치고 있는 <span class="d2s-accent">정부지원금 받기</span></p>
                        
                        <div class="d2s-tax-consulting__core-stat">
                            <div class="d2s-tax-consulting__core-stat-label">주요 성과</div>
                            <ul class="d2s-tax-consulting__core-stat-list">
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 선정률 85%</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 평균 확보액 5,000만원</li>
                            </ul>
                        </div>
                        
                        <div class="d2s-tax-consulting__core-content">
                            <div class="d2s-tax-consulting__core-content-title">평균 5,000만원 지원금 확보 성공</div>
                            <ul class="d2s-tax-consulting__core-content-list">
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 맞춤형 지원사업 발굴</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 사업계획서 작성 지원</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 신청부터 사후관리까지</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 정부 R&D 과제 매칭</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- R&D 세액공제 -->
                    <div class="d2s-tax-consulting__core-item">
                        <h3 class="d2s-tax-consulting__core-title">R&D 세액공제</h3>
                        <p class="d2s-tax-consulting__core-subtitle">기업 R&D 투자 <span class="d2s-accent">세액공제</span></p>
                        
                        <div class="d2s-tax-consulting__core-stat">
                            <div class="d2s-tax-consulting__core-stat-label">주요 성과</div>
                            <ul class="d2s-tax-consulting__core-stat-list">
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 평균 공제액 3,000만원</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 성공률 95%</li>
                            </ul>
                        </div>
                        
                        <div class="d2s-tax-consulting__core-content">
                            <div class="d2s-tax-consulting__core-content-title">성공률 95%의 검증된 전문성</div>
                            <ul class="d2s-tax-consulting__core-content-list">
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> R&D 세액공제 대상 발굴</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 증빙자료 구축 지원</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 사전 검토 및 리스크 관리</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 일반 R&D부터 신성장 R&D까지</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: 세부 컨설팅 서비스 -->
        <section class="d2s-tax-consulting__services d2s-section d2s-section--gray">
            <div class="grid-container">
                <h2 class="d2s-section__title">세부 컨설팅 서비스</h2>
                <p class="d2s-section__subtitle">법인과 개인, 각자의 상황에 맞는 최적의 절세 전략을 설계합니다</p>
                
                <div class="d2s-tax-consulting__services-grid">
                    <!-- 법인세 절세 컨설팅 -->
                    <div class="d2s-tax-consulting__service-card">
                        <h3 class="d2s-tax-consulting__service-title">법인세 절세 컨설팅</h3>
                        <p class="d2s-tax-consulting__service-subtitle">법인의 <span class="d2s-accent">세금 부담</span>을 확실히 줄여드립니다</p>
                        
                        <div class="d2s-tax-consulting__service-section">
                            <h4 class="d2s-tax-consulting__service-section-title">컨설팅 항목</h4>
                            <ul class="d2s-tax-consulting__service-list">
                                <li>
                                    <div class="d2s-check-wrapper">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                    </div>
                                    이월결손금 활용 전략
                                </li>
                                <li>
                                    <div class="d2s-check-wrapper">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                    </div>
                                    접대비/복리후생비 최적화
                                </li>
                                <li>
                                    <div class="d2s-check-wrapper">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                    </div>
                                    감가상각 방법 검토
                                </li>
                                <li>
                                    <div class="d2s-check-wrapper">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                    </div>
                                    투자세액공제 활용
                                </li>
                                <li>
                                    <div class="d2s-check-wrapper">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                    </div>
                                    중소기업 특별세액 감면
                                </li>
                                <li>
                                    <div class="d2s-check-wrapper">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                    </div>
                                    비용 인정 범위 확대
                                </li>
                            </ul>
                        </div>
                        
                        <div class="d2s-tax-consulting__service-section">
                            <h4 class="d2s-tax-consulting__service-section-title">이런 법인에 추천합니다.</h4>
                            <ul class="d2s-tax-consulting__service-target-list">
                                <li>연 매출 10억 이상 중소법인</li>
                                <li>세금 부담이 큰 흑자 법인</li>
                                <li>R&D 투자가 많은 기술 기업</li>
                                <li>신규 투자를 계획 중인 법인</li>
                            </ul>
                        </div>
                        
                        <div class="d2s-tax-consulting__service-section">
                            <h4 class="d2s-tax-consulting__service-section-title">기대 효과</h4>
                            <ul class="d2s-tax-consulting__service-effect-list">
                                <li>법인세 30~50% 절감</li>
                                <li>현금흐름 개선</li>
                                <li>재투자 여력 확대</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- 소득세 절세 컨설팅 -->
                    <div class="d2s-tax-consulting__service-card">
                        <h3 class="d2s-tax-consulting__service-title">소득세 절세 컨설팅</h3>
                        <p class="d2s-tax-consulting__service-subtitle">개인사업자와 고소득자를 위한 <span class="d2s-accent">맞춤 전략</span></p>
                        
                        <div class="d2s-tax-consulting__service-section">
                            <h4 class="d2s-tax-consulting__service-section-title">컨설팅 항목</h4>
                            <ul class="d2s-tax-consulting__service-list">
                                <li>
                                    <div class="d2s-check-wrapper">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                    </div>
                                    필요경비 최대 인정
                                </li>
                                <li>
                                    <div class="d2s-check-wrapper">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                    </div>
                                    소득공제/세액공제 극대화
                                </li>
                                <li>
                                    <div class="d2s-check-wrapper">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                    </div>
                                    분리과세 활용 방안
                                </li>
                                <li>
                                    <div class="d2s-check-wrapper">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                    </div>
                                    절세 상품 활용 전략
                                </li>
                                <li>
                                    <div class="d2s-check-wrapper">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                    </div>
                                    가족 간 소득 분산
                                </li>
                                <li>
                                    <div class="d2s-check-wrapper">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                    </div>
                                    사업소득/근로소득 최적 배분
                                </li>
                            </ul>
                        </div>
                        
                        <div class="d2s-tax-consulting__service-section">
                            <h4 class="d2s-tax-consulting__service-section-title">이런 분들께 추천합니다.</h4>
                            <ul class="d2s-tax-consulting__service-target-list">
                                <li>연 소득 1억 이상 개인사업자</li>
                                <li>급여 외 소득이 있는 직장인</li>
                                <li>부동산 임대소득자</li>
                                <li>프리랜서/전문직 종사자</li>
                            </ul>
                        </div>
                        
                        <div class="d2s-tax-consulting__service-section">
                            <h4 class="d2s-tax-consulting__service-section-title">기대 효과</h4>
                            <ul class="d2s-tax-consulting__service-effect-list">
                                <li>종합소득세 20~40% 절감</li>
                                <li>절세 효과 장기 지속</li>
                                <li>세무조사 리스크 최소화</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: 정부지원사업 컨설팅 프로세스 -->
        <section class="d2s-tax-consulting__process d2s-section">
            <div class="grid-container">
                <h2 class="d2s-section__title">정부지원사업 컨설팅 프로세스</h2>
                <p class="d2s-section__subtitle">체계적인 4단계 프로세스로 정부지원금 선정까지 완벽하게 동행합니다.</p>
                
                <div class="d2s-tax-consulting__process-grid">
                    <!-- 1단계 & 2단계 -->
                    <div class="d2s-tax-consulting__process-row">
                        <div class="d2s-tax-consulting__process-item" data-step="1">
                            <div class="d2s-tax-consulting__process-number">1단계</div>
                            <h3 class="d2s-tax-consulting__process-title">기업 진단</h3>
                            <p class="d2s-tax-consulting__process-subtitle">지원 가능성 분석</p>
                            <ul class="d2s-tax-consulting__process-list">
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 기업 현황 파악</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 지원 자격 검토</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 강점/약점 분석</li>
                            </ul>
                        </div>
                        
                        <div class="d2s-tax-consulting__process-arrow">→</div>
                        
                        <div class="d2s-tax-consulting__process-item" data-step="2">
                            <div class="d2s-tax-consulting__process-number">2단계</div>
                            <h3 class="d2s-tax-consulting__process-title">사업 매칭</h3>
                            <p class="d2s-tax-consulting__process-subtitle">최적 사업 발굴</p>
                            <ul class="d2s-tax-consulting__process-list">
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 200+ 지원사업 DB</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 맞춤형 추천</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 성공 가능성 평가</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- 3단계 & 4단계 -->
                    <div class="d2s-tax-consulting__process-row">
                        <div class="d2s-tax-consulting__process-item" data-step="3">
                            <div class="d2s-tax-consulting__process-number">3단계</div>
                            <h3 class="d2s-tax-consulting__process-title">서류 준비</h3>
                            <p class="d2s-tax-consulting__process-subtitle">완벽한 신청서 작성</p>
                            <ul class="d2s-tax-consulting__process-list">
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 사업계획서 작성</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 증빙자료 구축</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 전문가 검토</li>
                            </ul>
                        </div>
                        
                        <div class="d2s-tax-consulting__process-arrow">→</div>
                        
                        <div class="d2s-tax-consulting__process-item" data-step="4">
                            <div class="d2s-tax-consulting__process-number">4단계</div>
                            <h3 class="d2s-tax-consulting__process-title">신청 및 사후관리</h3>
                            <p class="d2s-tax-consulting__process-subtitle">선정까지 밀착 지원</p>
                            <ul class="d2s-tax-consulting__process-list">
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 온라인 신청 대행</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 발표/면접 지원</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon"> 정산 관리</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: 업종별 특화 컨설팅 -->
        <section class="d2s-tax-consulting__industry d2s-section d2s-section--gray">
            <div class="grid-container">
                <h2 class="d2s-section__title">업종별 특화 컨설팅</h2>
                <p class="d2s-section__subtitle">IT, 제조, 서비스 - 각 업종 특성에 맞춘 맞춤형 절세 솔루션을 제공합니다.</p>
                
                <div class="d2s-tax-consulting__industry-grid">
                    <!-- IT/스타트업 -->
                    <div class="d2s-tax-consulting__industry-card">
                        <h3 class="d2s-tax-consulting__industry-title">IT/스타트업</h3>
                        <p class="d2s-tax-consulting__industry-stat">평균 절세액 <span class="d2s-accent">4,000만원</span></p>
                        
                        <h4 class="d2s-tax-consulting__industry-section-title">컨설팅 항목</h4>
                        <ul class="d2s-tax-consulting__industry-list">
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                SW 개발비 세액공제
                            </li>
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                벤처기업 세제 혜택
                            </li>
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                스톡옵션 세무 설계
                            </li>
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                기술혁신형 R&D 공제
                            </li>
                        </ul>
                        
                        <h4 class="d2s-tax-consulting__industry-section-title">추천 대상</h4>
                        <ul class="d2s-tax-consulting__industry-target-list">
                            <li>소프트웨어 개발</li>
                            <li>플랫폼 서비스</li>
                            <li>기술 스타트업</li>
                        </ul>
                    </div>
                    
                    <!-- 제조/무역업 -->
                    <div class="d2s-tax-consulting__industry-card">
                        <h3 class="d2s-tax-consulting__industry-title">제조/무역업</h3>
                        <p class="d2s-tax-consulting__industry-stat">평균 절세액 <span class="d2s-accent">3,500만원</span></p>
                        
                        <h4 class="d2s-tax-consulting__industry-section-title">컨설팅 항목</h4>
                        <ul class="d2s-tax-consulting__industry-list">
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                설비투자 세액공제
                            </li>
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                수출 관련 절세
                            </li>
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                원자재 매입 최적화
                            </li>
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                제조업 특별공제
                            </li>
                        </ul>
                        
                        <h4 class="d2s-tax-consulting__industry-section-title">추천 대상</h4>
                        <ul class="d2s-tax-consulting__industry-target-list">
                            <li>생산시설 보유</li>
                            <li>수출입 기업</li>
                            <li>설비투자 계획 기업</li>
                        </ul>
                    </div>
                    
                    <!-- 서비스/유통업 -->
                    <div class="d2s-tax-consulting__industry-card">
                        <h3 class="d2s-tax-consulting__industry-title">서비스/유통업</h3>
                        <p class="d2s-tax-consulting__industry-stat">평균 절세액 <span class="d2s-accent">2,000만원</span></p>
                        
                        <h4 class="d2s-tax-consulting__industry-section-title">컨설팅 항목</h4>
                        <ul class="d2s-tax-consulting__industry-list">
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                매입세액 공제 극대화
                            </li>
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                인건비 절세 방안
                            </li>
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                판촉비 세무 처리
                            </li>
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                가맹사업 절세
                            </li>
                        </ul>
                        
                        <h4 class="d2s-tax-consulting__industry-section-title">추천 대상</h4>
                        <ul class="d2s-tax-consulting__industry-target-list">
                            <li>도소매업</li>
                            <li>프랜차이즈</li>
                            <li>온라인 쇼핑몰</li>
                            <li>서비스업</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: 컨설팅 비용 및 수수료 -->
        <section class="d2s-tax-consulting__pricing d2s-section">
            <div class="grid-container">
                <h2 class="d2s-section__title">컨설팅 비용 및 수수료</h2>
                <p class="d2s-section__subtitle">투명한 비용과 성과 보수제로 부담 없이 시작하고 확실한 성과를 보장합니다</p>
                
                <div class="d2s-tax-consulting__pricing-grid">
                    <!-- 절세 컨설팅 -->
                    <div class="d2s-tax-consulting__pricing-card">
                        <h3 class="d2s-tax-consulting__pricing-title">절세 컨설팅</h3>
                        <p class="d2s-tax-consulting__pricing-model">
                            <span class="d2s-accent">기본료</span> + <span class="d2s-accent">성과 수수료</span>
                        </p>
                        
                        <ul class="d2s-tax-consulting__pricing-list">
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                기본 검토비: 50만원~
                            </li>
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                성과 수수료: 절세액의 20~30%
                            </li>
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                연간 자문 계약: 월 30만원~
                            </li>
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                최소 3개월 내 투자비 회수 보장
                            </li>
                        </ul>
                        
                        <p class="d2s-tax-consulting__pricing-note">* VAT 별도, 규모에 따라 협의 가능</p>
                    </div>
                    
                    <!-- 정부지원사업 컨설팅 -->
                    <div class="d2s-tax-consulting__pricing-card">
                        <h3 class="d2s-tax-consulting__pricing-title">정부지원사업 컨설팅</h3>
                        <p class="d2s-tax-consulting__pricing-model">단계별 수수료</p>
                        
                        <ul class="d2s-tax-consulting__pricing-list">
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                지원사업 매칭: 30만원
                            </li>
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                사업계획서 작성: 200만원~
                            </li>
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                선정 성공 수수료: 지원금의 5~10%
                            </li>
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                미선정 시 작성비 50% 환불
                            </li>
                        </ul>
                        
                        <p class="d2s-tax-consulting__pricing-note">* VAT 별도, 규모에 따라 협의 가능</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: 고객 성공 사례 -->
        <section class="d2s-tax-consulting__success d2s-section d2s-section--gray">
            <div class="grid-container">
                <h2 class="d2s-section__title">고객 성공 사례</h2>
                <p class="d2s-section__subtitle">온필드와 함께한 기업들의 실제 절세 성공 스토리</p>
                
                <div class="d2s-tax-consulting__success-carousel swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="d2s-tax-consulting__success-card">
                                <h3 class="d2s-tax-consulting__success-title">법인세 5,000만원 절감 성공</h3>
                                <p class="d2s-tax-consulting__success-subtitle">A제조업체 김○○ 대표</p>
                                <p class="d2s-tax-consulting__success-description">"R&D 세액공제를 전혀 몰랐는데, 3년치 소급 적용까지 받아 5천만원을 절세했습니다"</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="d2s-tax-consulting__success-card">
                                <h3 class="d2s-tax-consulting__success-title">정부지원금 1억원 확보</h3>
                                <p class="d2s-tax-consulting__success-subtitle">B스타트업 이○○ 대표</p>
                                <p class="d2s-tax-consulting__success-description">"혼자서는 엄두도 못 냈을 사업에 선정되어 시설 투자를 할 수 있었습니다"</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="d2s-tax-consulting__success-card">
                                <h3 class="d2s-tax-consulting__success-title">종합소득세 40% 절감</h3>
                                <p class="d2s-tax-consulting__success-subtitle">C병원 박○○ 원장</p>
                                <p class="d2s-tax-consulting__success-description">"필요경비 인정 범위를 넓혀주셔서 매년 2천만원씩 절세하고 있습니다"</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- Section: 자주 묻는 질문 -->
        <section class="d2s-tax-consulting__faq d2s-section">
            <div class="grid-container">
                <h2 class="d2s-section__title">자주 묻는 질문</h2>
                <p class="d2s-section__subtitle">세무 컨설팅에 대해 궁금한 점들을 모았습니다</p>
                
                <div class="d2s-tax-consulting__faq-grid">
                    <div class="d2s-tax-consulting__faq-item">
                        <h3 class="d2s-tax-consulting__faq-question">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon">
                            절세 컨설팅 후 세무조사 위험은 없나요?
                        </h3>
                        <p class="d2s-tax-consulting__faq-answer">합법적인 세법 내에서만 절세 전략을 수립하므로 세무조사 위험이 없습니다. 오히려 체계적인 세무관리로 세무조사 대응력이 높아집니다.</p>
                    </div>
                    
                    <div class="d2s-tax-consulting__faq-item">
                        <h3 class="d2s-tax-consulting__faq-question">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon">
                            컨설팅 비용 대비 효과가 있을까요?
                        </h3>
                        <p class="d2s-tax-consulting__faq-answer">평균 3개월 내 컨설팅 비용을 회수하며, 절세 효과는 지속적으로 이어집니다. 성과가 없으면 수수료를 받지 않습니다.</p>
                    </div>
                    
                    <div class="d2s-tax-consulting__faq-item">
                        <h3 class="d2s-tax-consulting__faq-question">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon">
                            어떤 기업이 컨설팅을 받으면 좋나요?
                        </h3>
                        <p class="d2s-tax-consulting__faq-answer">연 매출 5억 이상 또는 법인세 1천만원 이상 납부 기업, R&D 투자가 있는 기업, 정부지원사업이 필요한 기업에 특히 효과적입니다.</p>
                    </div>
                    
                    <div class="d2s-tax-consulting__faq-item">
                        <h3 class="d2s-tax-consulting__faq-question">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/solid-circled-check.svg" alt="체크" class="d2s-check-icon">
                            컨설팅 진행 절차는 어떻게 되나요?
                        </h3>
                        <p class="d2s-tax-consulting__faq-answer">무료 상담 → 기업 진단 → 맞춤 전략 수립 → 실행 지원 → 사후 관리의 5단계로 진행되며, 전 과정에서 밀착 지원합니다.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: 컨설팅 효과 시뮬레이션 -->
        <section class="d2s-tax-consulting__simulation d2s-section d2s-section--gray">
            <div class="grid-container">
                <h2 class="d2s-section__title">컨설팅 효과 시뮬레이션</h2>
                <p class="d2s-section__subtitle">우리 회사는 얼마나 절세할 수 있을까? 규모별 예상 절세액을 미리 확인하세요.</p>
                
                <h3 class="d2s-tax-consulting__simulation-table-title">연매출 규모별 평균 절세 효과</h3>
                <div class="d2s-tax-consulting__simulation-table-wrapper">
                    <table class="d2s-tax-consulting__simulation-table">
                        <thead>
                            <tr>
                                <th>기업규모</th>
                                <th>연매출</th>
                                <th>평균 법인세</th>
                                <th>예상 절세액</th>
                                <th>절세율</th>
                                <th>투자 회수 기간</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>소기업</td>
                                <td>10억 미만</td>
                                <td>2,000만원</td>
                                <td><span class="d2s-highlight">600만원</span></td>
                                <td>30%</td>
                                <td>2개월</td>
                            </tr>
                            <tr>
                                <td>중기업</td>
                                <td>10-50억</td>
                                <td>8,000만원</td>
                                <td><span class="d2s-highlight">2,800만원</span></td>
                                <td>35%</td>
                                <td>3개월</td>
                            </tr>
                            <tr>
                                <td>중견기업</td>
                                <td>50-100억</td>
                                <td>2.5억원</td>
                                <td><span class="d2s-highlight">1억원</span></td>
                                <td>40%</td>
                                <td>3개월</td>
                            </tr>
                            <tr>
                                <td>대기업</td>
                                <td>100억 이상</td>
                                <td>10억원 이상</td>
                                <td><span class="d2s-highlight">4억원 이상</span></td>
                                <td>40%+</td>
                                <td>4개월</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="d2s-tax-consulting__simulation-note">* 실제 절세액은 기업별 상황에 따라 달라질 수 있습니다.</p>
            </div>
        </section>

        <!-- Section: 온필드 컨설팅의 차별점 -->
        <section class="d2s-tax-consulting__differentiators d2s-section">
            <div class="grid-container">
                <h2 class="d2s-section__title">온필드 컨설팅의 차별점</h2>
                <p class="d2s-section__subtitle">왜 온필드여야 하는가? 검증된 전문성과 체계적인 프로세스로 확실한 성과를 보장합니다</p>
                
                <div class="d2s-tax-consulting__differentiators-grid">
                    <div class="d2s-tax-consulting__differentiator-card">
                        <h3 class="d2s-tax-consulting__differentiator-title">검증된 전문성</h3>
                        <ul class="d2s-tax-consulting__differentiator-list">
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                김성미 세무사 15년 경력
                            </li>
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                누적 컨설팅 500+ 기업
                            </li>
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                평균 절세액 2,500만원
                            </li>
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                고객만족도 98%
                            </li>
                        </ul>
                    </div>
                    
                    <div class="d2s-tax-consulting__differentiator-card">
                        <h3 class="d2s-tax-consulting__differentiator-title">통합 컨설팅</h3>
                        <ul class="d2s-tax-consulting__differentiator-list">
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                절세 + 정부지원 원스톱
                            </li>
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                세무 + 회계 통합 관리
                            </li>
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                200+ 정부사업 DB 보유
                            </li>
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                전담 매니저 배정
                            </li>
                        </ul>
                    </div>
                    
                    <div class="d2s-tax-consulting__differentiator-card">
                        <h3 class="d2s-tax-consulting__differentiator-title">성과 보장</h3>
                        <ul class="d2s-tax-consulting__differentiator-list">
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                성과 없으면 수수료 0원
                            </li>
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                3개월 내 투자비 회수
                            </li>
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                절세 효과 장기 지속
                            </li>
                            <li>
                                <div class="d2s-check-wrapper">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/circle.svg" alt="" class="d2s-circle-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/symbol/check.svg" alt="체크" class="d2s-check-icon">
                                </div>
                                사후관리 1년 무료
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="d2s-tax-consulting__cta d2s-section">
            <div class="d2s-tax-consulting__cta-background"></div>
            <div class="grid-container">
                <div class="d2s-tax-consulting__cta-content">
                    <h2 class="d2s-tax-consulting__cta-title">복잡한 세금, 전문가의 지식으로 명쾌하게</h2>
                    <p class="d2s-tax-consulting__cta-subtitle">15년 경력 김성미 세무사가 직접 상담하고 최적의 절세 방안을 제시합니다.</p>
                    <a href="/request-consult" class="d2s-tax-consulting__cta-button d2s-button d2s-button--white">무료 절세 진단 받기</a>
                </div>
            </div>
        </section>

    </main>
</div>

<?php get_footer(); ?>