<?php
/**
 * Template Name: Tax Bookkeeping
 * Template Post Type: page
 * D2S v1 Template - Page: tax-bookkeeping
 *
 * @package GeneratePress
 * @subpackage D2S_v1
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Remove sidebars
add_filter( 'generate_sidebar_layout', function() {
    return 'no-sidebar';
});

// Enqueue page-specific styles and scripts
add_action( 'wp_enqueue_scripts', function() {
    // Use GP D2S helper function
    gp_d2s_enqueue_page_assets('tax-bookkeeping', true); // true because we have JS file
}, 20 );

get_header(); ?>

<div class="site grid-container container hfeed" id="page">
    <div class="site-content" id="content">
        <div class="content-area" id="primary">
            <main class="site-main" id="main">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        
                        <!-- D2S Content Start -->
                        <div class="inside-article">
                            
                            <!-- Hero Section -->
                            <section class="d2s-hero" style="background-image: url('<?php echo gp_d2s_image_url('tax-bookkeeping', 'hero-bg.jpg'); ?>');">
                                <div class="d2s-hero-content">
                                    <h1 class="d2s-hero-title">
                                        <span class="hero-highlight">정확하고 안전한 장부 관리</span>,<br>
                                        온필드가 책임집니다
                                    </h1>
                                    <p class="d2s-hero-subtitle">15년 경력 세무 전문가의 꼼꼼한 기장으로 세무 리스크 ZERO</p>
                                    <div class="d2s-button-group">
                                        <a href="#consult" class="button">무료 상담 신청하기</a>
                                    </div>
                                </div>
                            </section>
                            
                            <!-- Section 2: Strategic Bookkeeping -->
                            <section class="d2s-section bg-white">
                                <div class="d2s-container">
                                    <div class="entry-content">
                                        <h2 class="d2s-heading d2s-text-center">단순 기장이 아닌, 절세를 위한 전략적 기장</h2>
                                        <p class="d2s-lead d2s-text-center d2s-max-800">
                                            매월 단순히 세금 신고만 하는 기장이 아닌<br>
                                            절세 혜택을 놓치지 않도록 세무 전문가가 꼼꼼하게 검토하고 관리합니다
                                        </p>
                                    </div>
                                </div>
                            </section>
                            
                            <!-- Section 3: Core Performance -->
                            <section class="d2s-section bg-light-gray">
                                <div class="d2s-container">
                                    <div class="entry-content">
                                        <h2 class="d2s-heading d2s-text-center">온필드 세무 기장 핵심 성과</h2>
                                        <div class="d2s-grid d2s-grid-4 d2s-mt-40 stats-grid">
                                            <div class="stat-box">
                                                <div class="stat-number" data-count="0">0%</div>
                                                <div class="stat-label">장부 오류</div>
                                                <p class="stat-desc">15년 전문가의<br>완벽한 장부 관리</p>
                                            </div>
                                            <div class="stat-box">
                                                <div class="stat-number" data-count="24">24시간</div>
                                                <div class="stat-label">문의 응답 시간</div>
                                                <p class="stat-desc">긴급 사항은<br>실시간 대응</p>
                                            </div>
                                            <div class="stat-box">
                                                <div class="stat-number" data-count="98">98%</div>
                                                <div class="stat-label">고객 만족도</div>
                                                <p class="stat-desc">2년 연속<br>고객 만족도 1위</p>
                                            </div>
                                            <div class="stat-box">
                                                <div class="stat-number" data-count="15">월15만원</div>
                                                <div class="stat-label">평균 절세액</div>
                                                <p class="stat-desc">놓치는 세액공제<br>완벽 챙기기</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            
                            <!-- Section 4: 3 Key Features -->
                            <section class="d2s-section bg-white">
                                <div class="d2s-container">
                                    <div class="entry-content">
                                        <h2 class="d2s-heading d2s-text-center">온필드 세무 기장 3대 특장점</h2>
                                        <div class="d2s-grid d2s-grid-3 d2s-mt-40">
                                            <div class="d2s-feature-box">
                                                <h3>철저한 검증 절차</h3>
                                                <p>담당 세무사 1차 검토<br>품질관리팀 2차 검증</p>
                                                <ul class="feature-list">
                                                    <li>더블 체크 시스템</li>
                                                    <li>월별 오류율 0% 유지</li>
                                                    <li>분기별 품질 리포트 제공</li>
                                                </ul>
                                            </div>
                                            <div class="d2s-feature-box">
                                                <h3>실시간 온라인 시스템</h3>
                                                <p>언제 어디서나 장부 확인<br>모바일로 간편하게</p>
                                                <ul class="feature-list">
                                                    <li>24시간 장부 열람</li>
                                                    <li>실시간 세무 상담</li>
                                                    <li>모바일 앱 지원</li>
                                                </ul>
                                            </div>
                                            <div class="d2s-feature-box">
                                                <h3>전담 세무팀 시스템</h3>
                                                <p>업종별 전문 세무사 배정<br>1:1 밀착 관리</p>
                                                <ul class="feature-list">
                                                    <li>업종별 전문가 매칭</li>
                                                    <li>전담 매니저 배정</li>
                                                    <li>분기별 대면 상담</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            
                            <!-- Section 5: Detailed Services -->
                            <section class="d2s-section bg-light-gray">
                                <div class="d2s-container">
                                    <div class="entry-content">
                                        <h2 class="d2s-heading d2s-text-center">세부 기장 서비스</h2>
                                        <div class="d2s-grid d2s-grid-2 grid-40-60 v-center d2s-mt-40">
                                            <div>
                                                <h3 class="d2s-subheading">매입매출장 기장 서비스</h3>
                                                <ul class="service-list outlined-check">
                                                    <li>세금계산서 발행/수취 관리</li>
                                                    <li>매입세액 공제 검토</li>
                                                    <li>거래처별 매출/매입 관리</li>
                                                    <li>부가가치세 신고서 작성</li>
                                                    <li>전자세금계산서 발급 대행</li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h3 class="d2s-subheading">법인세/소득세 기장 서비스</h3>
                                                <ul class="service-list outlined-check">
                                                    <li>손익계산서 작성</li>
                                                    <li>재무상태표 작성</li>
                                                    <li>세무조정 계산서 작성</li>
                                                    <li>각종 세액공제/감면 검토</li>
                                                    <li>법인세/소득세 신고서 작성</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            
                            <!-- Section 6: Process -->
                            <section class="d2s-section bg-white">
                                <div class="d2s-container">
                                    <div class="entry-content">
                                        <h2 class="d2s-heading d2s-text-center">온필드 기장 프로세스</h2>
                                        <p class="d2s-lead d2s-text-center">체계적인 4단계 프로세스로 완벽한 세무 관리를 제공합니다</p>
                                        <div class="process-timeline d2s-mt-60">
                                            <div class="process-step">
                                                <div class="step-number">1단계</div>
                                                <h3>무료 상담</h3>
                                                <p>사업 현황 분석<br>절세 가능액 검토</p>
                                                <ul class="process-list">
                                                    <li>현재 세무 상태 진단</li>
                                                    <li>업종별 맞춤 상담</li>
                                                    <li>예상 절세액 안내</li>
                                                </ul>
                                            </div>
                                            <div class="process-step">
                                                <div class="step-number">2단계</div>
                                                <h3>계약 및 인수인계</h3>
                                                <p>간편한 온라인 계약<br>전담팀 배정</p>
                                                <ul class="process-list">
                                                    <li>온라인 계약 진행</li>
                                                    <li>기존 세무사 인수인계</li>
                                                    <li>전담 매니저 배정</li>
                                                </ul>
                                            </div>
                                            <div class="process-step">
                                                <div class="step-number">3단계</div>
                                                <h3>월별 기장 관리</h3>
                                                <p>꼼꼼한 장부 정리<br>실시간 세무 상담</p>
                                                <ul class="process-list">
                                                    <li>증빙 자료 정리</li>
                                                    <li>장부 작성 및 검토</li>
                                                    <li>세금 신고 대행</li>
                                                </ul>
                                            </div>
                                            <div class="process-step">
                                                <div class="step-number">4단계</div>
                                                <h3>분기별 리포트</h3>
                                                <p>경영 현황 분석<br>절세 전략 제안</p>
                                                <ul class="process-list">
                                                    <li>재무 현황 리포트</li>
                                                    <li>절세 방안 제시</li>
                                                    <li>경영 개선 조언</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            
                            <!-- Section 7: Pricing -->
                            <section class="d2s-section bg-light-gray">
                                <div class="d2s-container">
                                    <div class="entry-content">
                                        <h2 class="d2s-heading d2s-text-center">기장료 안내</h2>
                                        <p class="d2s-lead d2s-text-center">합리적인 가격으로 최고의 세무 서비스를 제공합니다</p>
                                        <div class="d2s-grid d2s-grid-3 d2s-mt-40 pricing-grid">
                                            <div class="pricing-card">
                                                <h3>개인 사업자</h3>
                                                <div class="price">월 10만원~</div>
                                                <ul class="pricing-features outlined-check">
                                                    <li>부가세 신고 포함</li>
                                                    <li>종합소득세 신고</li>
                                                    <li>4대보험 신고 대행</li>
                                                    <li>세무 상담 무제한</li>
                                                </ul>
                                            </div>
                                            <div class="pricing-card featured">
                                                <div class="badge">인기</div>
                                                <h3>법인 사업자</h3>
                                                <div class="price">월 20만원~</div>
                                                <ul class="pricing-features outlined-check">
                                                    <li>부가세 신고 포함</li>
                                                    <li>법인세 신고</li>
                                                    <li>원천세 신고</li>
                                                    <li>재무제표 작성</li>
                                                    <li>세무 상담 무제한</li>
                                                </ul>
                                            </div>
                                            <div class="pricing-card">
                                                <h3>프리미엄 기장</h3>
                                                <div class="price">맞춤 견적</div>
                                                <ul class="pricing-features outlined-check">
                                                    <li>모든 기본 서비스</li>
                                                    <li>세무조사 대응</li>
                                                    <li>경영 컨설팅</li>
                                                    <li>CFO 서비스</li>
                                                    <li>M&A 자문</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            
                            <!-- Section 8: Success Stories -->
                            <section class="d2s-section bg-white">
                                <div class="d2s-container">
                                    <div class="entry-content">
                                        <h2 class="d2s-heading d2s-text-center">고객 성공 사례</h2>
                                        <div class="success-carousel-wrapper d2s-mt-40">
                                            <div class="swiper success-carousel">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="success-card">
                                                            <h3>"기장료는 그대로, 절세액은 500만원"</h3>
                                                            <div class="customer-info">A온라인몰 김○○ 대표</div>
                                                            <p>"단순 기장만 하던 곳에서 옮긴 후 세액공제를 추가로 받아 연 500만원을 절세했습니다"</p>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="success-card">
                                                            <h3>"세무조사도 무사히 통과했어요"</h3>
                                                            <div class="customer-info">B제조업 이○○ 대표</div>
                                                            <p>"3년치 장부를 꼼꼼히 관리해주셔서 세무조사를 아무 문제 없이 마쳤습니다"</p>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="success-card">
                                                            <h3>"이제 세금 걱정 없이 사업에만 집중해요"</h3>
                                                            <div class="customer-info">C서비스업 박○○ 대표</div>
                                                            <p>"매달 카톡으로 바로바로 물어볼 수 있어서 정말 편합니다"</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            
                            <!-- Section 9: FAQ -->
                            <section class="d2s-section bg-light-gray">
                                <div class="d2s-container">
                                    <div class="entry-content">
                                        <h2 class="d2s-heading d2s-text-center">기장 서비스 FAQ</h2>
                                        <p class="d2s-lead d2s-text-center">기장 서비스에 대해 자주 묻는 질문들을 정리했습니다.</p>
                                        <div class="d2s-grid d2s-grid-2 d2s-mt-40 faq-grid">
                                            <div class="faq-item">
                                                <div class="faq-question">
                                                    <span class="q-badge">Q</span>
                                                    <h3>기존 세무사에서 변경이 어렵지 않나요?</h3>
                                                </div>
                                                <div class="faq-answer">
                                                    <p>온필드가 모든 인수인계를 대행합니다.</p>
                                                    <ul class="faq-list">
                                                        <li>기존 세무사 해지 공문 작성 지원</li>
                                                        <li>필요 서류 리스트 제공</li>
                                                        <li>인수인계 기간 중 병행 처리</li>
                                                        <li>변경 과정 전체 지원</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="faq-item">
                                                <div class="faq-question">
                                                    <span class="q-badge">Q</span>
                                                    <h3>세무 상담도 가능한가요?</h3>
                                                </div>
                                                <div class="faq-answer">
                                                    <p>무제한 세무 상담이 포함되어 있습니다.</p>
                                                    <ul class="faq-list">
                                                        <li>카카오톡 실시간 상담</li>
                                                        <li>전화 상담 예약제</li>
                                                        <li>필요시 대면 상담</li>
                                                        <li>긴급 사항 24시간 대응</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="faq-item">
                                                <div class="faq-question">
                                                    <span class="q-badge">Q</span>
                                                    <h3>증빙 자료는 어떻게 전달하나요?</h3>
                                                </div>
                                                <div class="faq-answer">
                                                    <p>다양한 방법으로 편리하게 전달 가능합니다.</p>
                                                    <ul class="faq-list">
                                                        <li>카카오톡 사진 전송</li>
                                                        <li>이메일 스캔 첨부</li>
                                                        <li>온라인 자료실 업로드</li>
                                                        <li>월 1회 방문 수거 (선택)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="faq-item">
                                                <div class="faq-question">
                                                    <span class="q-badge">Q</span>
                                                    <h3>세무조사가 나오면 어떻게 하나요?</h3>
                                                </div>
                                                <div class="faq-answer">
                                                    <p>세무조사 전 과정을 함께합니다.</p>
                                                    <ul class="faq-list">
                                                        <li>사전 대비 자료 정리</li>
                                                        <li>세무서 동행 (별도 비용)</li>
                                                        <li>소명 자료 작성 지원</li>
                                                        <li>사후 대응 전략 수립</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            
                            <!-- Section 10: Exclusive Benefits -->
                            <section class="d2s-section bg-white">
                                <div class="d2s-container">
                                    <div class="entry-content">
                                        <h2 class="d2s-heading d2s-text-center">기장 고객 전용 혜택</h2>
                                        <div class="d2s-grid d2s-grid-3 d2s-mt-40">
                                            <div class="benefit-box">
                                                <div class="benefit-icon">💼</div>
                                                <h3>경영 컨설팅</h3>
                                                <p>재무 분석 리포트<br>무료 제공</p>
                                                <ul class="benefit-list outlined-check">
                                                    <li>월별 재무 현황 분석</li>
                                                    <li>동종업계 비교 분석</li>
                                                    <li>경영 개선 제안</li>
                                                </ul>
                                            </div>
                                            <div class="benefit-box">
                                                <div class="benefit-icon">📚</div>
                                                <h3>세무 교육</h3>
                                                <p>실무 중심의<br>세무 교육 제공</p>
                                                <ul class="benefit-list outlined-check">
                                                    <li>분기별 세법 개정 안내</li>
                                                    <li>절세 전략 교육</li>
                                                    <li>온라인 세미나 초대</li>
                                                </ul>
                                            </div>
                                            <div class="benefit-box">
                                                <div class="benefit-icon">🎁</div>
                                                <h3>추가 할인</h3>
                                                <p>관련 서비스<br>특별 할인 제공</p>
                                                <ul class="benefit-list outlined-check">
                                                    <li>세무조사 대응 20% 할인</li>
                                                    <li>경영 컨설팅 30% 할인</li>
                                                    <li>지인 추천 시 한달 무료</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            
                            <!-- Section 11: CTA -->
                            <section id="consult" class="d2s-section bg-dark cta-section" style="background-image: url('<?php echo gp_d2s_image_url('common', 'consult-request-form-cta.webp'); ?>');">
                                <div class="d2s-container">
                                    <div class="entry-content">
                                        <div class="d2s-cta-box">
                                            <h2 class="d2s-heading">복잡한 세금, 전문가의 지식으로 명쾌하게</h2>
                                            <p class="d2s-lead">지금 무료 상담을 신청하고 절세의 기회를 잡으세요</p>
                                            <div class="d2s-button-group">
                                                <a href="/contact" class="button button-large">무료 상담 신청하기</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            
                        </div>
                        <!-- D2S Content End -->
                        
                    </article>
                <?php endwhile; ?>
            </main>
        </div>
    </div>
</div>

<?php get_footer(); ?>