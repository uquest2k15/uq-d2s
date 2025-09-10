<?php
/**
 * Template Name: Account Outsourcing
 * D2S v1 Template - Page: account-outsourcing
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
    gp_d2s_enqueue_page_assets( 'account-outsourcing', true ); // true because we need JS for animations
} );

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <!-- Section 1: Hero - 복잡한 경리업무 완전 위탁, 경영에만 집중하세요 -->
        <section class="d2s-hero hero-tall" style="background-image: url('<?php echo gp_d2s_image_url( 'account-outsourcing', 'account-outsourcing-bg.webp' ); ?>');">
            <div class="d2s-hero-overlay"></div>
            <div class="d2s-hero-content">
                <div class="d2s-container">
                    <h1 class="d2s-hero-title" data-animation="fadeInUp">
                        복잡한 경리업무 완전 위탁,<br>
                        경영에만 집중하세요
                    </h1>
                    <p class="d2s-hero-subtitle" data-animation="fadeInUp" data-delay="200">
                        월 20만원부터 시작하는 전문 경리 아웃소싱 서비스
                    </p>
                    <div class="d2s-button-group" data-animation="fadeInUp" data-delay="400">
                        <a href="#" class="d2s-button d2s-button-primary">무료 상담 신청하기</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: 경리 직원 없이도 완벽한 재무 관리가 가능합니다 -->
        <section class="d2s-section bg-white">
            <div class="d2s-container">
                <div class="d2s-text-center" data-animation="fadeInUp">
                    <h2 class="d2s-heading">경리 직원 없이도 완벽한 재무 관리가 가능합니다.</h2>
                    <p class="d2s-lead">
                        스타트업부터 중소기업까지, 규모와 업종에 최적화된 맞춤형 경리 아웃소싱을 제공합니다.<br>
                        전문 경리팀이 귀사의 모든 재무 업무를 체계적으로 관리해드립니다.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 3: 온필드 경리 아웃소싱 핵심 성과 -->
        <section class="d2s-section bg-light-gray">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">온필드 경리 아웃소싱 핵심 성과</h2>
                </div>
                <div class="d2s-grid d2s-grid-4">
                    <div class="d2s-feature-box d2s-text-center" data-counter="true">
                        <div class="account-outsourcing-stat">
                            <div class="account-outsourcing-stat__number" data-target="200">0</div>
                            <div class="account-outsourcing-stat__unit">%</div>
                        </div>
                        <h3 class="account-outsourcing-stat__title">업무 효율성 증가</h3>
                        <p class="account-outsourcing-stat__desc">체계적인 프로세스로<br>업무 처리 속도 향상</p>
                    </div>
                    <div class="d2s-feature-box d2s-text-center" data-counter="true">
                        <div class="account-outsourcing-stat">
                            <div class="account-outsourcing-stat__number" data-target="80">0</div>
                            <div class="account-outsourcing-stat__unit">%</div>
                        </div>
                        <h3 class="account-outsourcing-stat__title">인건비 절감</h3>
                        <p class="account-outsourcing-stat__desc">정규직 대비<br>운영비용 대폭 감소</p>
                    </div>
                    <div class="d2s-feature-box d2s-text-center" data-counter="true">
                        <div class="account-outsourcing-stat">
                            <div class="account-outsourcing-stat__number" data-target="0">0</div>
                            <div class="account-outsourcing-stat__unit">건</div>
                        </div>
                        <h3 class="account-outsourcing-stat__title">세무 실수</h3>
                        <p class="account-outsourcing-stat__desc">전문가 검증으로<br>오류 발생 제로화</p>
                    </div>
                    <div class="d2s-feature-box d2s-text-center" data-counter="true">
                        <div class="account-outsourcing-stat">
                            <div class="account-outsourcing-stat__prefix">월</div>
                            <div class="account-outsourcing-stat__number" data-target="20">0</div>
                            <div class="account-outsourcing-stat__unit">만원~</div>
                        </div>
                        <h3 class="account-outsourcing-stat__title">부담없는 비용</h3>
                        <p class="account-outsourcing-stat__desc">규모에 맞는<br>합리적인 요금제</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: 온필드 경리 아웃소싱 3대 핵심 서비스 -->
        <section class="d2s-section bg-white">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">온필드 경리 아웃소싱 3대 핵심 서비스</h2>
                </div>
                <div class="d2s-grid d2s-grid-3" data-animation="fadeInUp">
                    <div class="d2s-card">
                        <div class="account-outsourcing-service">
                            <div class="account-outsourcing-service__icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3 class="account-outsourcing-service__title">급여·4대보험 관리</h3>
                            <ul class="account-outsourcing-list">
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 매월 급여명세서 작성 및 이체</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 4대보험 신고 및 납부 대행</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 연말정산 처리 및 세액계산</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 퇴직금 계산 및 정산 지원</li>
                            </ul>
                        </div>
                    </div>
                    <div class="d2s-card">
                        <div class="account-outsourcing-service">
                            <div class="account-outsourcing-service__icon">
                                <i class="fas fa-file-invoice"></i>
                            </div>
                            <h3 class="account-outsourcing-service__title">세금계산서 관리</h3>
                            <ul class="account-outsourcing-list">
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 전자세금계산서 발행 대행</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 매입·매출 세금계산서 정리</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 부가가치세 신고자료 작성</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 세금계산서 보관 및 관리</li>
                            </ul>
                        </div>
                    </div>
                    <div class="d2s-card">
                        <div class="account-outsourcing-service">
                            <div class="account-outsourcing-service__icon">
                                <i class="fas fa-won-sign"></i>
                            </div>
                            <h3 class="account-outsourcing-service__title">자금·비용 관리</h3>
                            <ul class="account-outsourcing-list">
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 일일 자금 입출금 내역 정리</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 법인카드 사용내역 관리</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 증빙서류 수집 및 정리</li>
                                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt=""> 월별 재무보고서 작성</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 5: 세부 아웃소싱 서비스 -->
        <section class="d2s-section bg-light-gray">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">세부 아웃소싱 서비스</h2>
                    <p class="d2s-lead">기업 운영에 필요한 모든 경리 업무를 전문적으로 지원합니다</p>
                </div>
                <div class="d2s-grid d2s-grid-2" data-animation="fadeInUp">
                    <div class="account-outsourcing-detail">
                        <h3 class="account-outsourcing-detail__title">기본 경리 업무</h3>
                        <ul class="account-outsourcing-list account-outsourcing-list--outlined">
                            <li>
                                <span class="account-outsourcing-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                전표 입력 및 회계 장부 작성
                            </li>
                            <li>
                                <span class="account-outsourcing-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                거래처 대금 입출금 관리
                            </li>
                            <li>
                                <span class="account-outsourcing-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                매출채권·매입채무 관리
                            </li>
                            <li>
                                <span class="account-outsourcing-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                고정자산 등록 및 감가상각 처리
                            </li>
                        </ul>
                    </div>
                    <div class="account-outsourcing-detail">
                        <h3 class="account-outsourcing-detail__title">추가 지원 업무</h3>
                        <ul class="account-outsourcing-list account-outsourcing-list--outlined">
                            <li>
                                <span class="account-outsourcing-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                재무제표 작성 및 분석 리포트
                            </li>
                            <li>
                                <span class="account-outsourcing-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                예산 편성 및 집행 관리
                            </li>
                            <li>
                                <span class="account-outsourcing-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                원천징수 신고 및 납부 대행
                            </li>
                            <li>
                                <span class="account-outsourcing-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                각종 정부 지원금 신청 대행
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 6: 경리 아웃소싱 프로세스 -->
        <section class="d2s-section bg-white">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">경리 아웃소싱 프로세스</h2>
                    <p class="d2s-lead">체계적인 4단계 프로세스로 안정적인 경리 업무 이관을 보장합니다</p>
                </div>
                <div class="d2s-grid grid-40-60">
                    <div class="account-outsourcing-process">
                        <div class="account-outsourcing-process__item" data-step="1">
                            <div class="account-outsourcing-process__number">1단계</div>
                            <h3 class="account-outsourcing-process__title">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt="">
                                무료 상담 및 진단
                            </h3>
                            <p class="account-outsourcing-process__desc">
                                현재 경리 업무 현황을 파악하고<br>
                                최적의 아웃소싱 방안을 제안합니다
                            </p>
                        </div>
                        <div class="account-outsourcing-process__item" data-step="2">
                            <div class="account-outsourcing-process__number">2단계</div>
                            <h3 class="account-outsourcing-process__title">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt="">
                                맞춤형 계약 체결
                            </h3>
                            <p class="account-outsourcing-process__desc">
                                기업 규모와 필요에 맞는<br>
                                서비스 범위와 요금을 확정합니다
                            </p>
                        </div>
                    </div>
                    <div class="account-outsourcing-process">
                        <div class="account-outsourcing-process__item" data-step="3">
                            <div class="account-outsourcing-process__number">3단계</div>
                            <h3 class="account-outsourcing-process__title">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt="">
                                업무 인수인계
                            </h3>
                            <p class="account-outsourcing-process__desc">
                                기존 경리 업무를 체계적으로 인수받아<br>
                                안정적인 전환을 진행합니다
                            </p>
                        </div>
                        <div class="account-outsourcing-process__item" data-step="4">
                            <div class="account-outsourcing-process__number">4단계</div>
                            <h3 class="account-outsourcing-process__title">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt="">
                                정기 보고 및 관리
                            </h3>
                            <p class="account-outsourcing-process__desc">
                                월별 재무 리포트 제공 및<br>
                                실시간 업무 진행 상황을 공유합니다
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 7: 서비스 요금 안내 -->
        <section class="d2s-section bg-light-gray">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">서비스 요금 안내</h2>
                    <p class="d2s-lead">기업 규모에 맞는 합리적인 요금제를 선택하세요</p>
                </div>
                <div class="d2s-grid d2s-grid-2" data-animation="fadeInUp">
                    <div class="d2s-card">
                        <div class="account-outsourcing-package">
                            <h3 class="account-outsourcing-package__title">스타트업 패키지</h3>
                            <div class="account-outsourcing-package__price">
                                <span class="prefix">월</span>
                                <span class="amount">20~50</span>
                                <span class="unit">만원</span>
                            </div>
                            <p class="account-outsourcing-package__target">직원 10명 이하 기업</p>
                            <ul class="account-outsourcing-list account-outsourcing-list--outlined">
                                <li>
                                    <span class="account-outsourcing-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    기본 경리 업무 전체
                                </li>
                                <li>
                                    <span class="account-outsourcing-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    4대보험 관리
                                </li>
                                <li>
                                    <span class="account-outsourcing-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    세금계산서 발행 (월 50건)
                                </li>
                                <li>
                                    <span class="account-outsourcing-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    월별 재무 리포트
                                </li>
                            </ul>
                            <div class="account-outsourcing-package__cta">
                                <a href="#" class="d2s-button d2s-button-outline">상담 신청하기</a>
                            </div>
                        </div>
                    </div>
                    <div class="d2s-card">
                        <div class="account-outsourcing-package account-outsourcing-package--featured">
                            <h3 class="account-outsourcing-package__title">중소기업 패키지</h3>
                            <div class="account-outsourcing-package__price">
                                <span class="prefix">월</span>
                                <span class="amount">50~100</span>
                                <span class="unit">만원</span>
                            </div>
                            <p class="account-outsourcing-package__target">직원 50명 이하 기업</p>
                            <ul class="account-outsourcing-list account-outsourcing-list--outlined">
                                <li>
                                    <span class="account-outsourcing-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    스타트업 패키지 전체 포함
                                </li>
                                <li>
                                    <span class="account-outsourcing-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    재무제표 작성 및 분석
                                </li>
                                <li>
                                    <span class="account-outsourcing-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    세금계산서 무제한 발행
                                </li>
                                <li>
                                    <span class="account-outsourcing-list__icon">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                    </span>
                                    전담 매니저 배정
                                </li>
                            </ul>
                            <div class="account-outsourcing-package__cta">
                                <a href="#" class="d2s-button d2s-button-primary">상담 신청하기</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 8: 고객 성공 사례 -->
        <section class="d2s-section bg-white">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">고객 성공 사례</h2>
                    <p class="d2s-lead">온필드와 함께 성장한 기업들의 이야기</p>
                </div>
                <div class="account-outsourcing-testimonials">
                    <div class="swiper account-outsourcing-carousel">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="account-outsourcing-testimonial">
                                    <h3 class="account-outsourcing-testimonial__title">경리 직원 없이도 문제없어요</h3>
                                    <p class="account-outsourcing-testimonial__author">D스타트업 김○○ 대표</p>
                                    <p class="account-outsourcing-testimonial__content">
                                        "초기 스타트업이라 경리 직원 채용이 부담됐는데, 월 30만원으로 모든 경리 업무가 해결됩니다"
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="account-outsourcing-testimonial">
                                    <h3 class="account-outsourcing-testimonial__title">인건비 연 1,000만원 절감</h3>
                                    <p class="account-outsourcing-testimonial__author">E제조업 이○○ 이사</p>
                                    <p class="account-outsourcing-testimonial__content">
                                        "경리 직원 퇴사 후 아웃소싱으로 전환했더니 비용은 절반, 업무 품질은 더 좋아졌어요"
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="account-outsourcing-testimonial">
                                    <h3 class="account-outsourcing-testimonial__title">투자 심사도 무사히 통과</h3>
                                    <p class="account-outsourcing-testimonial__author">F테크기업 박○○ CFO</p>
                                    <p class="account-outsourcing-testimonial__content">
                                        "체계적인 재무 관리 덕분에 시리즈A 투자 심사를 순조롭게 통과했습니다"
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
                    <div class="account-outsourcing-faq">
                        <h3 class="account-outsourcing-faq__question">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt="">
                            경리 아웃소싱 도입 시기는 언제가 적절한가요?
                        </h3>
                        <p class="account-outsourcing-faq__answer">
                            매출 발생 직후부터 도입하는 것이 가장 이상적입니다. 초기부터 체계적인 재무 관리 시스템을 구축하면 향후 세무 리스크를 예방하고 투자 유치나 정부 지원 사업 신청 시 유리합니다.
                        </p>
                    </div>
                    <div class="account-outsourcing-faq">
                        <h3 class="account-outsourcing-faq__question">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt="">
                            기존 경리 직원과 병행이 가능한가요?
                        </h3>
                        <p class="account-outsourcing-faq__answer">
                            네, 가능합니다. 기존 직원의 업무 부담을 줄이면서 전문성이 필요한 부분만 아웃소싱할 수 있습니다. 점진적으로 업무를 이관하여 안정적인 전환이 가능합니다.
                        </p>
                    </div>
                    <div class="account-outsourcing-faq">
                        <h3 class="account-outsourcing-faq__question">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt="">
                            회사 기밀 정보는 안전하게 보호되나요?
                        </h3>
                        <p class="account-outsourcing-faq__answer">
                            모든 직원은 엄격한 보안 서약서를 작성하며, 정보 접근 권한을 제한하여 관리합니다. 또한 정기적인 보안 교육과 시스템 감사를 통해 고객사의 정보를 안전하게 보호합니다.
                        </p>
                    </div>
                    <div class="account-outsourcing-faq">
                        <h3 class="account-outsourcing-faq__question">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/solid-circled-check.svg" alt="">
                            업무 진행 상황은 어떻게 확인하나요?
                        </h3>
                        <p class="account-outsourcing-faq__answer">
                            전담 매니저가 배정되어 실시간 소통이 가능하며, 월별 재무 리포트와 주간 업무 보고서를 제공합니다. 필요시 언제든 업무 현황을 확인하실 수 있습니다.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 10: 도입 효과 분석 -->
        <section class="d2s-section bg-white">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">도입 효과 분석</h2>
                    <p class="d2s-lead">직접 고용 대비 아웃소싱의 경제적 효과를 비교해보세요</p>
                </div>
                <div class="account-outsourcing-comparison">
                    <div class="account-outsourcing-table-wrapper">
                        <table class="account-outsourcing-table">
                            <thead>
                                <tr>
                                    <th>구분</th>
                                    <th>경리직원 직접 고용</th>
                                    <th>온필드 아웃소싱</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>월 비용</td>
                                    <td>250만원 이상<br><span class="small">(급여+4대보험+퇴직금)</span></td>
                                    <td><strong>20~100만원</strong><br><span class="small">(규모별 차등)</span></td>
                                </tr>
                                <tr>
                                    <td>업무 품질</td>
                                    <td>개인 역량에 의존</td>
                                    <td><strong>전문팀 검증 시스템</strong></td>
                                </tr>
                                <tr>
                                    <td>업무 공백</td>
                                    <td>휴가/퇴사 시 공백 발생</td>
                                    <td><strong>365일 안정적 운영</strong></td>
                                </tr>
                                <tr>
                                    <td>전문성</td>
                                    <td>경력에 따라 상이</td>
                                    <td><strong>세무사 감독 하 운영</strong></td>
                                </tr>
                                <tr>
                                    <td>부가 비용</td>
                                    <td>교육비, 복리후생비 등</td>
                                    <td><strong>추가 비용 없음</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 11: 온필드 경리 아웃소싱의 강점 -->
        <section class="d2s-section bg-light-gray">
            <div class="d2s-container">
                <div class="d2s-text-center d2s-mb-60">
                    <h2 class="d2s-heading">온필드 경리 아웃소싱의 강점</h2>
                </div>
                <div class="d2s-grid d2s-grid-3" data-animation="fadeInUp">
                    <div class="account-outsourcing-strength">
                        <div class="account-outsourcing-strength__icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="account-outsourcing-strength__title">20년 전문성</h3>
                        <ul class="account-outsourcing-list account-outsourcing-list--outlined">
                            <li>
                                <span class="account-outsourcing-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                세무법인 GMG 20년 노하우
                            </li>
                            <li>
                                <span class="account-outsourcing-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                업종별 전문 경리팀 운영
                            </li>
                            <li>
                                <span class="account-outsourcing-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                정기적인 전문 교육 이수
                            </li>
                        </ul>
                    </div>
                    <div class="account-outsourcing-strength">
                        <div class="account-outsourcing-strength__icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="account-outsourcing-strength__title">체계적 시스템</h3>
                        <ul class="account-outsourcing-list account-outsourcing-list--outlined">
                            <li>
                                <span class="account-outsourcing-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                전산화된 업무 프로세스
                            </li>
                            <li>
                                <span class="account-outsourcing-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                이중 검증 시스템 운영
                            </li>
                            <li>
                                <span class="account-outsourcing-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                실시간 업무 모니터링
                            </li>
                        </ul>
                    </div>
                    <div class="account-outsourcing-strength">
                        <div class="account-outsourcing-strength__icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3 class="account-outsourcing-strength__title">맞춤형 서비스</h3>
                        <ul class="account-outsourcing-list account-outsourcing-list--outlined">
                            <li>
                                <span class="account-outsourcing-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                기업별 맞춤 서비스 설계
                            </li>
                            <li>
                                <span class="account-outsourcing-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                유연한 서비스 범위 조정
                            </li>
                            <li>
                                <span class="account-outsourcing-list__icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/circle.svg" alt="" class="circle">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/symbol/check.svg" alt="" class="check">
                                </span>
                                성장 단계별 지원 확대
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
                    <div class="account-outsourcing-cta__content">
                        <h2 class="d2s-heading" data-animation="fadeInUp">
                            복잡한 세금,<br>
                            전문가의 지식으로 명쾌하게
                        </h2>
                        <p class="d2s-lead d2s-mb-40" data-animation="fadeInUp" data-delay="200">
                            20년 경험의 세무 전문가가<br>
                            귀사의 든든한 경리 파트너가 되어드립니다
                        </p>
                        <div class="d2s-button-group" data-animation="fadeInUp" data-delay="400">
                            <a href="#" class="d2s-button d2s-button-primary d2s-button-large">무료 상담 신청하기</a>
                        </div>
                    </div>
                    <div class="account-outsourcing-cta__image" data-animation="appear">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/d2s-v1/common/images/consult-request-form-cta.webp" alt="상담 신청">
                    </div>
                </div>
            </div>
        </section>

    </main>
</div>

<?php get_footer(); ?>