<?php
/**
 * Template Name: Tax Audit Support
 * D2S v1 Template - Page: tax-audit-support
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Remove sidebars
add_filter( 'generate_sidebar_layout', function() {
    return 'no-sidebar';
} );

// Enqueue page-specific assets
add_action( 'wp_enqueue_scripts', function() {
    gp_d2s_enqueue_page_assets( 'tax-audit-support', true ); // true because we need JS for animations
} );

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <!-- Section 1: Hero - 세무조사 통지 받으셨나요? -->
        <section class="d2s-hero hero-tall" style="background-image: url('<?php echo gp_d2s_image_url( 'tax-audit-support', 'tax-audit-support-bg.webp' ); ?>');">
            <div class="d2s-hero-overlay"></div>
            <div class="d2s-hero-content">
                <div class="d2s-container">
                    <h1 class="d2s-hero-title" data-animation="fadeInUp">
                        <span class="tax-audit-support-highlight">세무조사 통지</span> 받으셨나요?<br>
                        24시간 내 전문가가 동행합니다.
                    </h1>
                    <p class="d2s-hero-subtitle" data-animation="fadeInUp" data-delay="200">
                        20년 경험의 세무 전문가가 현장에 함께합니다
                    </p>
                    <div class="d2s-button-group" data-animation="fadeInUp" data-delay="400">
                        <a href="#" class="d2s-button d2s-button-primary">무료 상담 신청하기</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: 혼자 대응하지 마세요 -->
        <section class="d2s-section bg-white">
            <div class="d2s-container">
                <div class="d2s-text-center" data-animation="fadeInUp">
                    <h2 class="d2s-heading">혼자 대응하지 마세요. 전문가와 함께하면 결과가 달라집니다.</h2>
                    <p class="d2s-lead">
                        세무조사는 준비와 대응이 결과를 좌우합니다.<br>
                        온필드의 체계적인 대응 전략으로 추징세액을 최소화하세요.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 3: 온필드 세무조사 대응 핵심 성과 -->
        <section class="d2s-section bg-light-gray">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">온필드 세무조사 대응 핵심 성과</h2>
                </div>
                <div class="d2s-grid d2s-grid-4">
                    <div class="d2s-feature-box d2s-text-center" data-counter="true">
                        <div class="tax-audit-support-stat">
                            <div class="tax-audit-support-stat__number" data-target="100">0</div>
                            <div class="tax-audit-support-stat__unit">%</div>
                        </div>
                        <h3 class="tax-audit-support-stat__title">현장 동행율</h3>
                        <p class="tax-audit-support-stat__desc">모든 세무조사에<br>전문가가 직접 동행</p>
                    </div>
                    <div class="d2s-feature-box d2s-text-center" data-counter="true">
                        <div class="tax-audit-support-stat">
                            <div class="tax-audit-support-stat__number" data-target="75">0</div>
                            <div class="tax-audit-support-stat__unit">%</div>
                        </div>
                        <h3 class="tax-audit-support-stat__title">추징세액 감면율</h3>
                        <p class="tax-audit-support-stat__desc">평균 추징세액<br>대폭 감면 성공</p>
                    </div>
                    <div class="d2s-feature-box d2s-text-center" data-counter="true">
                        <div class="tax-audit-support-stat">
                            <div class="tax-audit-support-stat__number" data-target="24">0</div>
                            <div class="tax-audit-support-stat__unit">시간</div>
                        </div>
                        <h3 class="tax-audit-support-stat__title">긴급 대응</h3>
                        <p class="tax-audit-support-stat__desc">세무조사 통지 후<br>즉시 대응 시작</p>
                    </div>
                    <div class="d2s-feature-box d2s-text-center" data-counter="true">
                        <div class="tax-audit-support-stat">
                            <div class="tax-audit-support-stat__number" data-target="90">0</div>
                            <div class="tax-audit-support-stat__unit">%</div>
                        </div>
                        <h3 class="tax-audit-support-stat__title">고객 만족도</h3>
                        <p class="tax-audit-support-stat__desc">체계적인 대응으로<br>높은 만족도 달성</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: 온필드 세무조사 대응 3단계 전략 -->
        <section class="d2s-section bg-white">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">온필드 세무조사 대응 3단계 전략</h2>
                </div>
                <div class="d2s-grid d2s-grid-3" data-animation="fadeInUp">
                    <div class="d2s-card">
                        <div class="tax-audit-support-strategy">
                            <div class="tax-audit-support-strategy__step">1단계</div>
                            <h3 class="tax-audit-support-strategy__title">사전 준비 단계</h3>
                            <ul class="tax-audit-support-list">
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 세무조사 통지서 분석</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 장부 및 증빙서류 정비</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 예상 지적사항 파악</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 대응 시나리오 수립</li>
                            </ul>
                        </div>
                    </div>
                    <div class="d2s-card">
                        <div class="tax-audit-support-strategy">
                            <div class="tax-audit-support-strategy__step">2단계</div>
                            <h3 class="tax-audit-support-strategy__title">현장 대응 단계</h3>
                            <ul class="tax-audit-support-list">
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 전문가 현장 동행</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 조사관 질의 대응</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 즉시 소명자료 제출</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 불리한 진술 방지</li>
                            </ul>
                        </div>
                    </div>
                    <div class="d2s-card">
                        <div class="tax-audit-support-strategy">
                            <div class="tax-audit-support-strategy__step">3단계</div>
                            <h3 class="tax-audit-support-strategy__title">사후 관리 단계</h3>
                            <ul class="tax-audit-support-list">
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 조사 결과 분석</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 불복청구 검토</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 추징세액 협상</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 재발 방지 대책 수립</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 5: 세무조사 유형별 대응 전략 -->
        <section class="d2s-section bg-light-gray">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">세무조사 유형별 대응 전략</h2>
                    <p class="d2s-lead">세무조사 유형에 따른 맞춤형 대응 전략을 제공합니다</p>
                </div>
                <div class="d2s-grid d2s-grid-2" data-animation="fadeInUp">
                    <div class="d2s-card">
                        <div class="tax-audit-support-type">
                            <h3 class="tax-audit-support-type__title">정기 세무조사</h3>
                            <p class="tax-audit-support-type__desc">
                                4~5년 주기로 실시되는 일반적인 세무조사
                            </p>
                            <ul class="tax-audit-support-list tax-audit-support-list--outlined">
                                <li>
                                    <span class="tax-audit-support-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    과거 신고내역 전반 검토
                                </li>
                                <li>
                                    <span class="tax-audit-support-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    주요 세목별 리스크 분석
                                </li>
                                <li>
                                    <span class="tax-audit-support-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    업종별 특수사항 대비
                                </li>
                                <li>
                                    <span class="tax-audit-support-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    사전 모의조사 실시
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="d2s-card">
                        <div class="tax-audit-support-type">
                            <h3 class="tax-audit-support-type__title">특별 세무조사</h3>
                            <p class="tax-audit-support-type__desc">
                                탈세 제보, 이상 징후 등으로 실시되는 집중 조사
                            </p>
                            <ul class="tax-audit-support-list tax-audit-support-list--outlined">
                                <li>
                                    <span class="tax-audit-support-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    긴급 대응팀 즉시 구성
                                </li>
                                <li>
                                    <span class="tax-audit-support-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    혐의사항 집중 분석
                                </li>
                                <li>
                                    <span class="tax-audit-support-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    법률 검토 및 대응 논리 개발
                                </li>
                                <li>
                                    <span class="tax-audit-support-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    형사 고발 리스크 차단
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 6: 세무조사 대응 프로세스 -->
        <section class="d2s-section bg-white">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">세무조사 대응 프로세스</h2>
                    <p class="d2s-lead">체계적인 4단계 프로세스로 완벽하게 대응합니다</p>
                </div>
                <div class="d2s-grid grid-40-60">
                    <div class="tax-audit-support-process">
                        <div class="tax-audit-support-process__item" data-step="1">
                            <div class="tax-audit-support-process__number">1단계</div>
                            <h3 class="tax-audit-support-process__title">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt="">
                                긴급 상담
                            </h3>
                            <p class="tax-audit-support-process__desc">
                                세무조사 통지 즉시<br>
                                24시간 내 긴급 상담 진행
                            </p>
                        </div>
                        <div class="tax-audit-support-process__item" data-step="2">
                            <div class="tax-audit-support-process__number">2단계</div>
                            <h3 class="tax-audit-support-process__title">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt="">
                                사전 준비
                            </h3>
                            <p class="tax-audit-support-process__desc">
                                장부 검토 및 예상 지적사항<br>
                                사전 점검 실시
                            </p>
                        </div>
                    </div>
                    <div class="tax-audit-support-process">
                        <div class="tax-audit-support-process__item" data-step="3">
                            <div class="tax-audit-support-process__number">3단계</div>
                            <h3 class="tax-audit-support-process__title">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt="">
                                현장 대응
                            </h3>
                            <p class="tax-audit-support-process__desc">
                                전문가 현장 동행 및<br>
                                실시간 대응 지원
                            </p>
                        </div>
                        <div class="tax-audit-support-process__item" data-step="4">
                            <div class="tax-audit-support-process__number">4단계</div>
                            <h3 class="tax-audit-support-process__title">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt="">
                                사후 관리
                            </h3>
                            <p class="tax-audit-support-process__desc">
                                조사 결과 분석 및<br>
                                불복청구 여부 검토
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 7: 서비스 비용 안내 -->
        <section class="d2s-section bg-light-gray">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">서비스 비용 안내</h2>
                    <p class="d2s-lead">투명하고 합리적인 비용으로 전문 서비스를 제공합니다</p>
                </div>
                <div class="d2s-grid d2s-grid-2" data-animation="fadeInUp">
                    <div class="d2s-card">
                        <div class="tax-audit-support-pricing">
                            <h3 class="tax-audit-support-pricing__title">기본 대응 서비스</h3>
                            <div class="tax-audit-support-pricing__price">
                                <span class="amount">200</span>
                                <span class="unit">만원~</span>
                            </div>
                            <p class="tax-audit-support-pricing__desc">
                                소규모 사업자 / 단순 조사
                            </p>
                            <ul class="tax-audit-support-list tax-audit-support-list--outlined">
                                <li>
                                    <span class="tax-audit-support-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    세무조사 통지서 분석
                                </li>
                                <li>
                                    <span class="tax-audit-support-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    기본 자료 준비 지원
                                </li>
                                <li>
                                    <span class="tax-audit-support-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    조사 당일 현장 동행
                                </li>
                                <li>
                                    <span class="tax-audit-support-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    결과 분석 보고서
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="d2s-card">
                        <div class="tax-audit-support-pricing tax-audit-support-pricing--featured">
                            <div class="tax-audit-support-pricing__badge">추천</div>
                            <h3 class="tax-audit-support-pricing__title">전문 대응 서비스</h3>
                            <div class="tax-audit-support-pricing__price">
                                <span class="amount">성과</span>
                                <span class="unit">보수제</span>
                            </div>
                            <p class="tax-audit-support-pricing__desc">
                                중견기업 / 특별 조사
                            </p>
                            <ul class="tax-audit-support-list tax-audit-support-list--outlined">
                                <li>
                                    <span class="tax-audit-support-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    기본 서비스 전체 포함
                                </li>
                                <li>
                                    <span class="tax-audit-support-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    전담팀 구성 (3~5명)
                                </li>
                                <li>
                                    <span class="tax-audit-support-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    전 과정 밀착 대응
                                </li>
                                <li>
                                    <span class="tax-audit-support-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    불복청구 대리 포함
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d2s-text-center d2s-mt-40">
                    <p class="tax-audit-support-pricing__note">
                        * 성과보수제: 기본료 + 감면세액의 20~30% (협의 가능)
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 8: 대응 성공 사례 -->
        <section class="d2s-section bg-white">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">대응 성공 사례</h2>
                    <p class="d2s-lead">온필드와 함께 세무조사를 성공적으로 마친 기업들</p>
                </div>
                <div class="tax-audit-support-testimonials">
                    <div class="swiper tax-audit-support-carousel">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="tax-audit-support-testimonial">
                                    <h3 class="tax-audit-support-testimonial__title">추징세액 5억→5천만원으로 감면</h3>
                                    <p class="tax-audit-support-testimonial__author">G제조업 김○○ 대표</p>
                                    <p class="tax-audit-support-testimonial__content">
                                        "처음엔 5억 추징 통보를 받았는데, 온필드의 체계적인 대응으로 5천만원으로 줄였습니다"
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tax-audit-support-testimonial">
                                    <h3 class="tax-audit-support-testimonial__title">가산세 1억원 전액 면제 성공</h3>
                                    <p class="tax-audit-support-testimonial__author">H유통업 이○○ 대표</p>
                                    <p class="tax-audit-support-testimonial__content">
                                        "정당한 사유 입증으로 가산세 1억원을 전액 면제받았습니다. 혼자였다면 불가능했을 거예요"
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tax-audit-support-testimonial">
                                    <h3 class="tax-audit-support-testimonial__title">무혐의로 조사 조기 종결</h3>
                                    <p class="tax-audit-support-testimonial__author">I서비스업 박○○ 대표</p>
                                    <p class="tax-audit-support-testimonial__content">
                                        "철저한 사전 준비 덕분에 지적사항 없이 일주일 만에 조사가 종결됐습니다"
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 9: 자주 묻는 질문 -->
        <section class="d2s-section bg-light-gray">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">자주 묻는 질문</h2>
                </div>
                <div class="d2s-grid d2s-grid-2" data-animation="fadeInUp">
                    <div class="tax-audit-support-faq">
                        <h3 class="tax-audit-support-faq__question">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt="">
                            세무조사 통지를 받으면 어떻게 해야 하나요?
                        </h3>
                        <p class="tax-audit-support-faq__answer">
                            먼저 당황하지 마시고 통지서 내용을 정확히 확인하세요. 조사 일정, 조사 범위, 담당자 정보를 파악한 후 즉시 전문가에게 연락하여 대응 전략을 수립해야 합니다.
                        </p>
                    </div>
                    <div class="tax-audit-support-faq">
                        <h3 class="tax-audit-support-faq__question">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt="">
                            세무조사 기간은 얼마나 걸리나요?
                        </h3>
                        <p class="tax-audit-support-faq__answer">
                            일반적으로 정기조사는 10~20일, 특별조사는 30일 이상 소요됩니다. 조사 규모와 복잡도에 따라 기간이 연장될 수 있으며, 체계적인 대응으로 기간을 단축할 수 있습니다.
                        </p>
                    </div>
                    <div class="tax-audit-support-faq">
                        <h3 class="tax-audit-support-faq__question">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt="">
                            전문가 도움 없이 혼자 대응해도 되나요?
                        </h3>
                        <p class="tax-audit-support-faq__answer">
                            세무조사는 고도의 전문성이 필요한 영역입니다. 잘못된 대응으로 불필요한 추징이나 가산세를 부담할 수 있으므로, 반드시 경험 많은 전문가의 도움을 받으시길 권합니다.
                        </p>
                    </div>
                    <div class="tax-audit-support-faq">
                        <h3 class="tax-audit-support-faq__question">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt="">
                            조사 결과에 불복할 수 있나요?
                        </h3>
                        <p class="tax-audit-support-faq__answer">
                            네, 가능합니다. 과세전적부심사, 이의신청, 심사청구, 심판청구 등 단계별 불복 절차가 있습니다. 각 절차별 기한과 요건이 다르므로 전문가와 상의하여 진행하는 것이 중요합니다.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 10: 세무조사 대비 체크리스트 -->
        <section class="d2s-section bg-white">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">세무조사 대비 체크리스트</h2>
                    <p class="d2s-lead">평소에 준비해두면 세무조사 시 유용한 서류들입니다</p>
                </div>
                <div class="tax-audit-support-checklist">
                    <div class="tax-audit-support-table-wrapper">
                        <table class="tax-audit-support-table">
                            <thead>
                                <tr>
                                    <th>구분</th>
                                    <th>필수 준비 서류</th>
                                    <th>준비 요령</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>회계장부</td>
                                    <td>총계정원장, 분개장, 재무제표</td>
                                    <td>최근 5년간 자료를 연도별로 정리</td>
                                </tr>
                                <tr>
                                    <td>세금계산서</td>
                                    <td>매입·매출 세금계산서, 계산서합계표</td>
                                    <td>거래처별, 월별로 분류하여 보관</td>
                                </tr>
                                <tr>
                                    <td>증빙서류</td>
                                    <td>계약서, 거래명세서, 입금표</td>
                                    <td>거래 건별로 일련번호 부여 관리</td>
                                </tr>
                                <tr>
                                    <td>급여자료</td>
                                    <td>급여대장, 원천징수영수증</td>
                                    <td>직원별 인사기록카드와 함께 보관</td>
                                </tr>
                                <tr>
                                    <td>자산관련</td>
                                    <td>고정자산대장, 감가상각명세서</td>
                                    <td>취득 증빙과 함께 일괄 정리</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 11: 온필드 세무조사 대응의 차별점 -->
        <section class="d2s-section bg-light-gray">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">온필드 세무조사 대응의 차별점</h2>
                </div>
                <div class="d2s-grid d2s-grid-3" data-animation="fadeInUp">
                    <div class="tax-audit-support-difference">
                        <div class="tax-audit-support-difference__icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="tax-audit-support-difference__title">검증된 전문성</h3>
                        <ul class="tax-audit-support-list tax-audit-support-list--outlined">
                            <li>
                                <span class="tax-audit-support-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                세무조사 대응 20년 경력
                            </li>
                            <li>
                                <span class="tax-audit-support-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                전직 국세청 출신 전문가
                            </li>
                            <li>
                                <span class="tax-audit-support-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                업종별 전담팀 운영
                            </li>
                        </ul>
                    </div>
                    <div class="tax-audit-support-difference">
                        <div class="tax-audit-support-difference__icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <h3 class="tax-audit-support-difference__title">신속한 대응</h3>
                        <ul class="tax-audit-support-list tax-audit-support-list--outlined">
                            <li>
                                <span class="tax-audit-support-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                24시간 긴급 상담 체계
                            </li>
                            <li>
                                <span class="tax-audit-support-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                즉시 현장 출동 가능
                            </li>
                            <li>
                                <span class="tax-audit-support-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                실시간 대응 전략 수정
                            </li>
                        </ul>
                    </div>
                    <div class="tax-audit-support-difference">
                        <div class="tax-audit-support-difference__icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="tax-audit-support-difference__title">성과 중심</h3>
                        <ul class="tax-audit-support-list tax-audit-support-list--outlined">
                            <li>
                                <span class="tax-audit-support-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                평균 75% 추징세액 감면
                            </li>
                            <li>
                                <span class="tax-audit-support-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                성과보수제 운영 가능
                            </li>
                            <li>
                                <span class="tax-audit-support-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                불복청구 성공률 80%
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 12: CTA - 복잡한 세금, 전문가의 지식으로 명쾌하게 -->
        <section class="d2s-cta-box bg-white">
            <div class="d2s-container">
                <div class="d2s-grid grid-60-40 v-center">
                    <div class="tax-audit-support-cta__content">
                        <h2 class="d2s-heading" data-animation="fadeInUp">
                            복잡한 세금,<br>
                            전문가의 지식으로 명쾌하게
                        </h2>
                        <p class="d2s-lead d2s-mb-40" data-animation="fadeInUp" data-delay="200">
                            세무조사 통지를 받으셨다면 지금 바로 연락주세요.<br>
                            24시간 내 전문가가 직접 찾아갑니다.
                        </p>
                        <div class="d2s-button-group" data-animation="fadeInUp" data-delay="400">
                            <a href="#" class="d2s-button d2s-button-primary d2s-button-large">무료 상담 신청하기</a>
                        </div>
                    </div>
                    <div class="tax-audit-support-cta__image" data-animation="appear">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/consult-request-form-cta.webp" alt="상담 신청">
                    </div>
                </div>
            </div>
        </section>

    </main>
</div>

<?php get_footer(); ?>