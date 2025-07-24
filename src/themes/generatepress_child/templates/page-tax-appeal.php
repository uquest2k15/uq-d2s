<?php
/**
 * Template Name: Tax Appeal
 * D2S v1 Template - Page: tax-appeal
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
    gp_d2s_enqueue_page_assets( 'tax-appeal', true ); // true because we need JS for animations
} );

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <!-- Section 1: Hero - 과도한 세금 추징, 전문가가 바로잡아드립니다 -->
        <section class="d2s-hero hero-tall" style="background-image: url('<?php echo gp_d2s_image_url( 'tax-appeal', 'tax-appeal.webp' ); ?>');">
            <div class="d2s-hero-overlay"></div>
            <div class="d2s-hero-content">
                <div class="d2s-container">
                    <h1 class="d2s-hero-title" data-animation="fadeInUp">
                        과도한 세금 추징,<br>
                        전문가가 바로잡아드립니다.
                    </h1>
                    <p class="d2s-hero-subtitle" data-animation="fadeInUp" data-delay="200">
                        조세불복 성공률 65%, 평균 환급액 800만원
                    </p>
                    <div class="d2s-button-group" data-animation="fadeInUp" data-delay="400">
                        <a href="#" class="d2s-button d2s-button-primary">무료 상담 신청하기</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: 합리적이지 않은 과세는 충분히 정정 가능합니다 -->
        <section class="d2s-section bg-light-gray">
            <div class="d2s-container">
                <div class="d2s-text-center" data-animation="fadeInUp">
                    <h2 class="d2s-heading">합리적이지 않은 과세는 충분히 정정 가능합니다</h2>
                    <p class="d2s-lead">
                        전문가의 체계적인 분석과 논리적인 대응으로<br>
                        부당한 과세처분을 정정하고 정당한 권리를 찾아드립니다.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 3: 온필드 조세 불복 핵심 성과 -->
        <section class="d2s-section bg-white">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">온필드 조세 불복 핵심 성과</h2>
                </div>
                <div class="d2s-grid d2s-grid-4">
                    <div class="d2s-feature-box d2s-text-center" data-counter="true">
                        <div class="tax-appeal-stat">
                            <div class="tax-appeal-stat__number" data-target="65">0</div>
                            <div class="tax-appeal-stat__unit">%</div>
                        </div>
                        <h3 class="tax-appeal-stat__title">불복 성공률</h3>
                        <p class="tax-appeal-stat__desc">심사청구·심판청구<br>평균 성공률</p>
                    </div>
                    <div class="d2s-feature-box d2s-text-center" data-counter="true">
                        <div class="tax-appeal-stat">
                            <div class="tax-appeal-stat__number" data-target="800">0</div>
                            <div class="tax-appeal-stat__unit">만원</div>
                        </div>
                        <h3 class="tax-appeal-stat__title">평균 환급액</h3>
                        <p class="tax-appeal-stat__desc">고객당 평균<br>세금 환급액</p>
                    </div>
                    <div class="d2s-feature-box d2s-text-center" data-counter="true">
                        <div class="tax-appeal-stat">
                            <div class="tax-appeal-stat__number" data-target="150">0</div>
                            <div class="tax-appeal-stat__unit">건</div>
                        </div>
                        <h3 class="tax-appeal-stat__title">연간 처리 건수</h3>
                        <p class="tax-appeal-stat__desc">다양한 사례의<br>불복 경험 보유</p>
                    </div>
                    <div class="d2s-feature-box d2s-text-center" data-counter="true">
                        <div class="tax-appeal-stat">
                            <div class="tax-appeal-stat__number" data-target="3">0</div>
                            <div class="tax-appeal-stat__unit">개월</div>
                        </div>
                        <h3 class="tax-appeal-stat__title">평균 처리 기간</h3>
                        <p class="tax-appeal-stat__desc">신속한 처리로<br>빠른 결과 도출</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: 조세 불복 단계별 전략 -->
        <section class="d2s-section bg-white">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">조세 불복 단계별 전략</h2>
                </div>
                <div class="d2s-grid d2s-grid-3" data-animation="fadeInUp">
                    <div class="d2s-card">
                        <div class="tax-appeal-strategy">
                            <div class="tax-appeal-strategy__step">1단계</div>
                            <h3 class="tax-appeal-strategy__title">과세전적부심사</h3>
                            <p class="tax-appeal-strategy__subtitle">세금 부과 전 단계</p>
                            <ul class="tax-appeal-list">
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 세무조사 결과 통지 후 30일 이내</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 과세 예고 통지에 대한 이의제기</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 추가 소명자료 제출 기회</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 비용 부담 없이 진행 가능</li>
                            </ul>
                        </div>
                    </div>
                    <div class="d2s-card">
                        <div class="tax-appeal-strategy">
                            <div class="tax-appeal-strategy__step">2단계</div>
                            <h3 class="tax-appeal-strategy__title">이의신청·심사청구</h3>
                            <p class="tax-appeal-strategy__subtitle">행정심판 단계</p>
                            <ul class="tax-appeal-list">
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 처분 통지 후 90일 이내</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 국세청·지방국세청 재심사</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 전문적인 법리 검토 필요</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 성공 시 즉시 환급</li>
                            </ul>
                        </div>
                    </div>
                    <div class="d2s-card">
                        <div class="tax-appeal-strategy">
                            <div class="tax-appeal-strategy__step">3단계</div>
                            <h3 class="tax-appeal-strategy__title">심판청구·소송</h3>
                            <p class="tax-appeal-strategy__subtitle">사법심사 단계</p>
                            <ul class="tax-appeal-list">
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 조세심판원·행정법원 제기</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 독립적인 기관의 공정한 판단</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 최종적인 권리구제 수단</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 승소 시 소송비용 환급</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 5: 불복 가능 사례별 대응 -->
        <section class="d2s-section bg-light-gray">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">불복 가능 사례별 대응</h2>
                    <p class="d2s-lead">다양한 과세 처분에 대한 맞춤형 불복 전략을 제공합니다</p>
                </div>
                <div class="d2s-grid d2s-grid-2" data-animation="fadeInUp">
                    <div class="d2s-card">
                        <div class="tax-appeal-case">
                            <h3 class="tax-appeal-case__title">부당한 경비 부인</h3>
                            <div class="tax-appeal-case__example">
                                <h4>사례</h4>
                                <p>정당한 사업 경비를 개인적 경비로 보아 부인한 경우</p>
                            </div>
                            <div class="tax-appeal-case__strategy">
                                <h4>대응 전략</h4>
                                <ul class="tax-appeal-list tax-appeal-list--outlined">
                                    <li>
                                        <span class="tax-appeal-list__icon">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                        </span>
                                        업무관련성 입증 자료 확보
                                    </li>
                                    <li>
                                        <span class="tax-appeal-list__icon">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                        </span>
                                        유사 판례 분석 및 적용
                                    </li>
                                    <li>
                                        <span class="tax-appeal-list__icon">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                        </span>
                                        증빙서류 보완 제출
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d2s-card">
                        <div class="tax-appeal-case">
                            <h3 class="tax-appeal-case__title">과도한 추계 과세</h3>
                            <div class="tax-appeal-case__example">
                                <h4>사례</h4>
                                <p>장부 미비를 이유로 실제보다 과도하게 추계한 경우</p>
                            </div>
                            <div class="tax-appeal-case__strategy">
                                <h4>대응 전략</h4>
                                <ul class="tax-appeal-list tax-appeal-list--outlined">
                                    <li>
                                        <span class="tax-appeal-list__icon">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                        </span>
                                        실제 소득 입증 자료 수집
                                    </li>
                                    <li>
                                        <span class="tax-appeal-list__icon">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                        </span>
                                        추계방법의 위법성 검토
                                    </li>
                                    <li>
                                        <span class="tax-appeal-list__icon">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                        </span>
                                        합리적인 소득 재산정 요청
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 6: 조세 불복 프로세스 -->
        <section class="d2s-section bg-white">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">조세 불복 프로세스</h2>
                    <p class="d2s-lead">체계적인 4단계 프로세스로 최적의 결과를 도출합니다</p>
                </div>
                <div class="d2s-grid grid-40-60">
                    <div class="tax-appeal-process">
                        <div class="tax-appeal-process__item" data-step="1">
                            <div class="tax-appeal-process__number">1단계</div>
                            <h3 class="tax-appeal-process__title">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt="">
                                무료 상담 및 검토
                            </h3>
                            <p class="tax-appeal-process__desc">
                                과세처분 내용 분석<br>
                                불복 가능성 검토
                            </p>
                        </div>
                        <div class="tax-appeal-process__item" data-step="2">
                            <div class="tax-appeal-process__number">2단계</div>
                            <h3 class="tax-appeal-process__title">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt="">
                                전략 수립
                            </h3>
                            <p class="tax-appeal-process__desc">
                                판례 분석 및 법리 검토<br>
                                최적의 불복 방안 제시
                            </p>
                        </div>
                    </div>
                    <div class="tax-appeal-process">
                        <div class="tax-appeal-process__item" data-step="3">
                            <div class="tax-appeal-process__number">3단계</div>
                            <h3 class="tax-appeal-process__title">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt="">
                                서류 작성 및 제출
                            </h3>
                            <p class="tax-appeal-process__desc">
                                불복청구서 작성<br>
                                증빙자료 준비 및 제출
                            </p>
                        </div>
                        <div class="tax-appeal-process__item" data-step="4">
                            <div class="tax-appeal-process__number">4단계</div>
                            <h3 class="tax-appeal-process__title">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt="">
                                결과 도출
                            </h3>
                            <p class="tax-appeal-process__desc">
                                심리 과정 대응<br>
                                환급 절차 진행
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
                    <p class="d2s-lead">투명하고 합리적인 수수료 체계를 운영합니다</p>
                </div>
                <div class="d2s-grid d2s-grid-2" data-animation="fadeInUp">
                    <div class="d2s-card">
                        <div class="tax-appeal-pricing">
                            <h3 class="tax-appeal-pricing__title">기본 수수료</h3>
                            <div class="tax-appeal-pricing__amount">
                                <span class="price">100</span>
                                <span class="unit">만원~</span>
                            </div>
                            <p class="tax-appeal-pricing__desc">
                                사안의 복잡도에 따라 차등 적용
                            </p>
                            <ul class="tax-appeal-list tax-appeal-list--outlined">
                                <li>
                                    <span class="tax-appeal-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    초기 상담 및 검토 무료
                                </li>
                                <li>
                                    <span class="tax-appeal-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    불복청구서 작성 포함
                                </li>
                                <li>
                                    <span class="tax-appeal-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    기본 증빙자료 검토
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="d2s-card">
                        <div class="tax-appeal-pricing tax-appeal-pricing--featured">
                            <div class="tax-appeal-pricing__badge">추천</div>
                            <h3 class="tax-appeal-pricing__title">성공 보수</h3>
                            <div class="tax-appeal-pricing__amount">
                                <span class="price">환급액의 20</span>
                                <span class="unit">%</span>
                            </div>
                            <p class="tax-appeal-pricing__desc">
                                실제 환급 성공 시에만 부과
                            </p>
                            <ul class="tax-appeal-list tax-appeal-list--outlined">
                                <li>
                                    <span class="tax-appeal-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    환급 실패 시 무료
                                </li>
                                <li>
                                    <span class="tax-appeal-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    최대 성공 보수율 적용
                                </li>
                                <li>
                                    <span class="tax-appeal-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    고액 환급 시 할인 적용
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 8: 불복 성공 사례 -->
        <section class="d2s-section bg-white">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">불복 성공 사례</h2>
                    <p class="d2s-lead">온필드와 함께 정당한 권리를 찾은 고객들의 이야기</p>
                </div>
                <div class="tax-appeal-testimonials">
                    <div class="swiper tax-appeal-carousel">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="tax-appeal-testimonial">
                                    <h3 class="tax-appeal-testimonial__title">부인된 접대비 2억원 전액 인정</h3>
                                    <p class="tax-appeal-testimonial__author">J무역회사 김○○ 대표</p>
                                    <p class="tax-appeal-testimonial__content">
                                        "해외 바이어 접대비를 부인당했는데, 업무관련성을 입증해 전액 필요경비로 인정받았습니다"
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tax-appeal-testimonial">
                                    <h3 class="tax-appeal-testimonial__title">가산세 5천만원 전액 취소</h3>
                                    <p class="tax-appeal-testimonial__author">K건설업 이○○ 대표</p>
                                    <p class="tax-appeal-testimonial__content">
                                        "정당한 사유를 인정받아 무거운 가산세를 모두 취소시켰습니다"
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tax-appeal-testimonial">
                                    <h3 class="tax-appeal-testimonial__title">3년간 과다 납부세액 1.5억 환급</h3>
                                    <p class="tax-appeal-testimonial__author">L서비스업 박○○ 대표</p>
                                    <p class="tax-appeal-testimonial__content">
                                        "소득 구분 오류를 바로잡아 3년치 세금을 돌려받았습니다"
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
                    <div class="tax-appeal-faq">
                        <h3 class="tax-appeal-faq__question">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt="">
                            조세불복 신청 기한이 지났는데 가능한가요?
                        </h3>
                        <p class="tax-appeal-faq__answer">
                            원칙적으로 처분 통지를 받은 날로부터 90일 이내에 신청해야 하지만, 정당한 사유가 있는 경우 기한 연장이 가능합니다. 또한 경정청구 등 다른 구제 방법도 검토해볼 수 있습니다.
                        </p>
                    </div>
                    <div class="tax-appeal-faq">
                        <h3 class="tax-appeal-faq__question">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt="">
                            불복 신청하면 세무조사를 더 받나요?
                        </h3>
                        <p class="tax-appeal-faq__answer">
                            아닙니다. 정당한 권리 행사로 인한 불이익은 법적으로 금지되어 있습니다. 오히려 불복 과정에서 과세당국의 처분 근거가 명확해져 향후 유사한 문제를 예방할 수 있습니다.
                        </p>
                    </div>
                    <div class="tax-appeal-faq">
                        <h3 class="tax-appeal-faq__question">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt="">
                            성공 가능성이 낮아도 시도해볼 만한가요?
                        </h3>
                        <p class="tax-appeal-faq__answer">
                            초기 상담에서 정확한 성공 가능성을 판단해드립니다. 가능성이 낮은 경우 무리한 진행을 권하지 않으며, 다른 절세 방안이나 향후 대비책을 제시해드립니다.
                        </p>
                    </div>
                    <div class="tax-appeal-faq">
                        <h3 class="tax-appeal-faq__question">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt="">
                            환급받는데 얼마나 걸리나요?
                        </h3>
                        <p class="tax-appeal-faq__answer">
                            불복 유형과 단계에 따라 다르지만, 일반적으로 이의신청은 2개월, 심사청구는 3개월, 심판청구는 6개월 정도 소요됩니다. 인용 결정 후 환급금은 즉시 지급됩니다.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 10: 불복 가능성 자가진단 -->
        <section class="d2s-section bg-white">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">불복 가능성 자가진단</h2>
                    <p class="d2s-lead">아래 항목 중 하나라도 해당된다면 불복 검토가 필요합니다</p>
                </div>
                <div class="tax-appeal-diagnosis">
                    <div class="tax-appeal-table-wrapper">
                        <table class="tax-appeal-table">
                            <thead>
                                <tr>
                                    <th>구분</th>
                                    <th>체크 항목</th>
                                    <th>불복 가능성</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="3">경비 문제</td>
                                    <td>정당한 사업 경비를 부인당한 경우</td>
                                    <td><span class="high">높음</span></td>
                                </tr>
                                <tr>
                                    <td>증빙서류가 있음에도 인정받지 못한 경우</td>
                                    <td><span class="high">높음</span></td>
                                </tr>
                                <tr>
                                    <td>업무관련성이 명확한데 부인된 경우</td>
                                    <td><span class="medium">보통</span></td>
                                </tr>
                                <tr>
                                    <td rowspan="3">소득 문제</td>
                                    <td>실제 소득보다 과도하게 추계된 경우</td>
                                    <td><span class="high">높음</span></td>
                                </tr>
                                <tr>
                                    <td>소득 구분이 잘못 적용된 경우</td>
                                    <td><span class="high">높음</span></td>
                                </tr>
                                <tr>
                                    <td>타인 소득이 본인에게 귀속된 경우</td>
                                    <td><span class="medium">보통</span></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">가산세</td>
                                    <td>정당한 사유 없이 가산세가 부과된 경우</td>
                                    <td><span class="high">높음</span></td>
                                </tr>
                                <tr>
                                    <td>가산세율이 과도하게 적용된 경우</td>
                                    <td><span class="medium">보통</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 11: 온필드 조세 불복의 차별점 -->
        <section class="d2s-section bg-light-gray">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">온필드 조세 불복의 차별점</h2>
                </div>
                <div class="d2s-grid d2s-grid-3" data-animation="fadeInUp">
                    <div class="tax-appeal-difference">
                        <div class="tax-appeal-difference__icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <h3 class="tax-appeal-difference__title">20년 축적된 노하우</h3>
                        <ul class="tax-appeal-list tax-appeal-list--outlined">
                            <li>
                                <span class="tax-appeal-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                5,000건 이상 불복 사례 보유
                            </li>
                            <li>
                                <span class="tax-appeal-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                업종별 특화 대응 전략
                            </li>
                            <li>
                                <span class="tax-appeal-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                최신 판례 실시간 업데이트
                            </li>
                        </ul>
                    </div>
                    <div class="tax-appeal-difference">
                        <div class="tax-appeal-difference__icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="tax-appeal-difference__title">체계적인 팀 대응</h3>
                        <ul class="tax-appeal-list tax-appeal-list--outlined">
                            <li>
                                <span class="tax-appeal-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                전담 세무사 배정
                            </li>
                            <li>
                                <span class="tax-appeal-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                법무팀 협업 시스템
                            </li>
                            <li>
                                <span class="tax-appeal-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                분야별 전문가 자문
                            </li>
                        </ul>
                    </div>
                    <div class="tax-appeal-difference">
                        <div class="tax-appeal-difference__icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <h3 class="tax-appeal-difference__title">적극적인 소통</h3>
                        <ul class="tax-appeal-list tax-appeal-list--outlined">
                            <li>
                                <span class="tax-appeal-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                진행 상황 실시간 공유
                            </li>
                            <li>
                                <span class="tax-appeal-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                주요 결정사항 사전 협의
                            </li>
                            <li>
                                <span class="tax-appeal-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                24시간 문의 대응 체계
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 12: 지금 바로 시작하세요 -->
        <section class="d2s-section bg-white">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">지금 바로 시작하세요</h2>
                    <p class="d2s-lead">전문가의 무료 상담을 통해 불복 가능성을 확인하세요</p>
                </div>
                <div class="d2s-grid d2s-grid-2" data-animation="fadeInUp">
                    <div class="d2s-card">
                        <div class="tax-appeal-start">
                            <div class="tax-appeal-start__icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <h3 class="tax-appeal-start__title">전화 상담</h3>
                            <p class="tax-appeal-start__desc">
                                빠른 상담이 필요하신 분께 추천
                            </p>
                            <ul class="tax-appeal-list tax-appeal-list--outlined">
                                <li>
                                    <span class="tax-appeal-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    10분 이내 즉시 상담
                                </li>
                                <li>
                                    <span class="tax-appeal-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    간단한 가능성 진단
                                </li>
                                <li>
                                    <span class="tax-appeal-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    평일 09:00~18:00
                                </li>
                            </ul>
                            <div class="tax-appeal-start__cta">
                                <a href="tel:02-1234-5678" class="d2s-button d2s-button-outline">
                                    <i class="fas fa-phone"></i> 02-1234-5678
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="d2s-card">
                        <div class="tax-appeal-start tax-appeal-start--featured">
                            <div class="tax-appeal-start__icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <h3 class="tax-appeal-start__title">서류 검토 신청</h3>
                            <p class="tax-appeal-start__desc">
                                정확한 검토를 원하시는 분께 추천
                            </p>
                            <ul class="tax-appeal-list tax-appeal-list--outlined">
                                <li>
                                    <span class="tax-appeal-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    과세처분서 정밀 분석
                                </li>
                                <li>
                                    <span class="tax-appeal-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    상세한 서면 검토 의견
                                </li>
                                <li>
                                    <span class="tax-appeal-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    24시간 이내 회신
                                </li>
                            </ul>
                            <div class="tax-appeal-start__cta">
                                <a href="#" class="d2s-button d2s-button-primary">
                                    서류 검토 신청하기
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 13: CTA - 복잡한 세금, 전문가의 지식으로 명쾌하게 -->
        <section class="d2s-cta-box bg-light-gray">
            <div class="d2s-container">
                <div class="d2s-grid grid-60-40 v-center">
                    <div class="tax-appeal-cta__content">
                        <h2 class="d2s-heading" data-animation="fadeInUp">
                            복잡한 세금,<br>
                            전문가의 지식으로 명쾌하게
                        </h2>
                        <p class="d2s-lead d2s-mb-40" data-animation="fadeInUp" data-delay="200">
                            20년 경험의 조세 전문가가<br>
                            여러분의 정당한 권리를 지켜드립니다
                        </p>
                        <div class="d2s-button-group" data-animation="fadeInUp" data-delay="400">
                            <a href="#" class="d2s-button d2s-button-primary d2s-button-large">무료 상담 신청하기</a>
                        </div>
                    </div>
                    <div class="tax-appeal-cta__image" data-animation="appear">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/consult-request-form-cta.webp" alt="상담 신청">
                    </div>
                </div>
            </div>
        </section>

    </main>
</div>

<?php get_footer(); ?>