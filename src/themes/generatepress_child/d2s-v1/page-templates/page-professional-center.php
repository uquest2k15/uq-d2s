<?php
/**
 * Template Name: Professional Center
 * Template Post Type: page
 * D2S v1 Template - Page: professional-center
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
    gp_d2s_enqueue_page_assets('professional-center', true); // true if has JS file
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
                            
                            <!-- Section 1: Hero - 업종별 맞춤 세무 솔루션 -->
                            <div class="d2s-hero" style="background-image: url('<?php echo gp_d2s_image_url('professional-center', 'tax-expert-center-bg-1.jpg'); ?>');">
                                <div class="d2s-container">
                                    <div class="d2s-hero-content">
                                        <h1 class="d2s-hero-title">
                                            <span class="text-accent">업종별 맞춤</span> 세무 솔루션,<br>
                                            전문성이 성과를 만듭니다
                                        </h1>
                                        <p class="d2s-hero-subtitle">IT기업, 온라인 쇼핑몰, 부동산 - 각 분야 최고의 세무 전문가가 함께합니다.</p>
                                        <div class="d2s-button-group">
                                            <a href="#" class="button">무료 상담 신청하기</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 2: 모든 업종을 똑같이 다루지 않습니다 -->
                            <section class="d2s-section bg-base-2">
                                <div class="d2s-container">
                                    <div class="entry-content">
                                        <h2 class="d2s-heading d2s-text-center">
                                            모든 업종을 똑같이 다루지 않습니다. <span class="text-accent">전문 분야만 집중</span>합니다.
                                        </h2>
                                        <p class="d2s-lead d2s-text-center d2s-max-1000">
                                            15년간 축적된 업종별 노하우로 일반 세무사가 놓치는 절세 포인트까지 찾아드립니다.
                                        </p>
                                    </div>
                                </div>
                            </section>

                            <!-- Section 3: 온필드 전문센터 핵심 성과 -->
                            <section class="d2s-section bg-white">
                                <div class="d2s-container">
                                    <div class="entry-content">
                                        <h2 class="d2s-heading d2s-text-center">
                                            온필드 전문센터 <span class="text-accent">핵심 성과</span>
                                        </h2>
                                        <p class="d2s-subtitle d2s-text-center">업종 특화 전문성이 만든 차별화된 성과</p>
                                        
                                        <div class="performance-stats bg-base d2s-mt-60">
                                            <div class="d2s-grid d2s-grid-4">
                                                <div class="stat-item">
                                                    <div class="stat-number text-accent">40%+</div>
                                                    <div class="stat-label">업종별 평균 절세율</div>
                                                </div>
                                                <div class="stat-item">
                                                    <div class="stat-number text-accent">99%</div>
                                                    <div class="stat-label">전문 고객 만족도</div>
                                                </div>
                                                <div class="stat-item">
                                                    <div class="stat-number text-accent">500+</div>
                                                    <div class="stat-label">업종별 고객사</div>
                                                </div>
                                                <div class="stat-item">
                                                    <div class="stat-number text-accent">5,000만원</div>
                                                    <div class="stat-label">R&D 평균 세액공제</div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <p class="d2s-text-center d2s-mt-40">
                                            각 업종의 특성을 완벽히 이해하는 전문가의 맞춤 솔루션이 차이를 만듭니다.
                                        </p>
                                    </div>
                                </div>
                            </section>

                            <!-- Section 4: IT기업 전문센터 -->
                            <section class="d2s-section bg-base-2">
                                <div class="d2s-container">
                                    <div class="entry-content">
                                        <div class="center-header d2s-text-center d2s-mb-60">
                                            <h2 class="d2s-heading">IT기업 전문센터</h2>
                                            <p class="d2s-subtitle">스타트업부터 중견 IT기업까지, 성장 단계별 맞춤 세무 전략</p>
                                        </div>

                                        <h3 class="d2s-subheading">핵심 서비스</h3>
                                        <div class="d2s-grid d2s-grid-3 d2s-mt-40">
                                            <div class="d2s-card">
                                                <h4 class="card-title">R&D 세액공제 전문</h4>
                                                <ul class="d2s-list">
                                                    <li>인건비, 재료비, 외주비 최대 인정</li>
                                                    <li>일반 R&D + 신성장 R&D 동시 적용</li>
                                                    <li>3년 소급 적용으로 환급 극대화</li>
                                                    <li>정부 R&D 과제와 중복 적용</li>
                                                </ul>
                                            </div>
                                            <div class="d2s-card">
                                                <h4 class="card-title">스타트업 특화 서비스</h4>
                                                <ul class="d2s-list">
                                                    <li>벤처기업 인증 취득 지원</li>
                                                    <li>스톡옵션 행사 시기 컨설팅</li>
                                                    <li>투자 유치 시 세무 실사 대응</li>
                                                    <li>기술보증기금 연계 지원</li>
                                                </ul>
                                            </div>
                                            <div class="d2s-card">
                                                <h4 class="card-title">IT기업 맞춤 기장</h4>
                                                <ul class="d2s-list">
                                                    <li>클라우드 비용 처리 최적화</li>
                                                    <li>개발 인건비 자산화 검토</li>
                                                    <li>라이선스 비용 절세 처리</li>
                                                    <li>해외 서비스 부가세 처리</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <h3 class="d2s-subheading d2s-mt-60">진행 프로세스</h3>
                                        <div class="d2s-grid d2s-grid-4 d2s-mt-40">
                                            <div class="d2s-card process-card">
                                                <h4 class="card-title">기업 진단</h4>
                                                <ul class="d2s-list">
                                                    <li>현재 세무 상태</li>
                                                    <li>R&D 활동 분석</li>
                                                </ul>
                                            </div>
                                            <div class="d2s-card process-card">
                                                <h4 class="card-title">전략 수립</h4>
                                                <ul class="d2s-list">
                                                    <li>절세 포인트 발굴</li>
                                                    <li>적용 방안 설계</li>
                                                </ul>
                                            </div>
                                            <div class="d2s-card process-card">
                                                <h4 class="card-title">실행 지원</h4>
                                                <ul class="d2s-list">
                                                    <li>세액공제 신청</li>
                                                    <li>세무 신고 대행</li>
                                                </ul>
                                            </div>
                                            <div class="d2s-card process-card">
                                                <h4 class="card-title">사후 관리</h4>
                                                <ul class="d2s-list">
                                                    <li>정기 점검</li>
                                                    <li>추가 절세 기회 발굴</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <h3 class="d2s-subheading d2s-mt-60">성공 사례</h3>
                                        <div class="d2s-grid d2s-grid-2 d2s-mt-40">
                                            <div class="d2s-card success-card">
                                                <h4 class="card-title">A소프트웨어 개발사</h4>
                                                <ul class="d2s-list">
                                                    <li>R&D 세액공제 7,000만원 환급</li>
                                                    <li>벤처기업 세액감면 2,000만원</li>
                                                    <li>스톡옵션 절세 설계로 직원 만족도 상승</li>
                                                </ul>
                                            </div>
                                            <div class="d2s-card success-card">
                                                <h4 class="card-title">B게임 개발사</h4>
                                                <ul class="d2s-list">
                                                    <li>3년 소급 적용으로 1.5억원 환급</li>
                                                    <li>해외 진출 시 이중과세 방지</li>
                                                    <li>정부지원사업 5억원 유치 성공</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Section 5: 온라인 쇼핑몰 전문센터 -->
                            <section class="d2s-section bg-white">
                                <div class="d2s-container">
                                    <div class="entry-content">
                                        <div class="center-header d2s-text-center d2s-mb-60">
                                            <h2 class="d2s-heading">온라인 쇼핑몰 전문센터</h2>
                                            <p class="d2s-subtitle">매출 1억부터 100억까지, 규모별 최적화된 전자상거래 세무 관리</p>
                                        </div>

                                        <h3 class="d2s-subheading">핵심 서비스</h3>
                                        <div class="d2s-grid d2s-grid-3 d2s-mt-40">
                                            <div class="d2s-card">
                                                <h4 class="card-title">오픈마켓 판매자 특화</h4>
                                                <ul class="d2s-list">
                                                    <li>네이버, 쿠팡 등 수수료 절세</li>
                                                    <li>통신판매업 신고 및 관리</li>
                                                    <li>간이과세자 기준경비율 적용</li>
                                                    <li>부가세 신고 자동화 지원</li>
                                                </ul>
                                            </div>
                                            <div class="d2s-card">
                                                <h4 class="card-title">해외 직구/구매대행</h4>
                                                <ul class="d2s-list">
                                                    <li>관세 및 부가세 통합 관리</li>
                                                    <li>환율 변동 회계 처리</li>
                                                    <li>해외 거래 증빙 관리</li>
                                                    <li>FTA 활용 관세 절감</li>
                                                </ul>
                                            </div>
                                            <div class="d2s-card">
                                                <h4 class="card-title">온라인 마케팅 최적화</h4>
                                                <ul class="d2s-list">
                                                    <li>광고비 즉시 비용 처리</li>
                                                    <li>인플루언서 마케팅 세무</li>
                                                    <li>쿠폰/할인 회계 처리</li>
                                                    <li>포인트/적립금 세무 처리</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <h3 class="d2s-subheading d2s-mt-60">진행 프로세스</h3>
                                        <div class="d2s-grid d2s-grid-4 d2s-mt-40">
                                            <div class="d2s-card process-card">
                                                <h4 class="card-title">판매 채널 분석</h4>
                                                <ul class="d2s-list">
                                                    <li>채널별 특징 파악</li>
                                                    <li>매출 구조 분석</li>
                                                </ul>
                                            </div>
                                            <div class="d2s-card process-card">
                                                <h4 class="card-title">세무 체계 구축</h4>
                                                <ul class="d2s-list">
                                                    <li>자동화 시스템 구축</li>
                                                    <li>업무 효율화</li>
                                                </ul>
                                            </div>
                                            <div class="d2s-card process-card">
                                                <h4 class="card-title">월별 관리</h4>
                                                <ul class="d2s-list">
                                                    <li>세금계산서 관리</li>
                                                    <li>세무 신고 대행</li>
                                                </ul>
                                            </div>
                                            <div class="d2s-card process-card">
                                                <h4 class="card-title">절세 컨설팅</h4>
                                                <ul class="d2s-list">
                                                    <li>분기별 절세 점검</li>
                                                    <li>추가 절세 포인트 발굴</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <h3 class="d2s-subheading d2s-mt-60">성공 사례</h3>
                                        <div class="d2s-grid d2s-grid-2 d2s-mt-40">
                                            <div class="d2s-card success-card">
                                                <h4 class="card-title">C패션 쇼핑몰</h4>
                                                <ul class="d2s-list">
                                                    <li>수수료 비용 처리로 연 800만원 절세</li>
                                                    <li>재고 평가 방법 변경으로 1,200만원 절감</li>
                                                    <li>부가세 환급 주기 단축</li>
                                                </ul>
                                            </div>
                                            <div class="d2s-card success-card">
                                                <h4 class="card-title">D해외직구 업체</h4>
                                                <ul class="d2s-list">
                                                    <li>FTA 활용으로 관세 30% 절감</li>
                                                    <li>환차손익 최적화로 500만원 절세</li>
                                                    <li>해외 거래 리스크 제로화</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Section 6: 부동산 전문센터 -->
                            <section class="d2s-section bg-base-2">
                                <div class="d2s-container">
                                    <div class="entry-content">
                                        <div class="center-header d2s-text-center d2s-mb-60">
                                            <h2 class="d2s-heading">부동산 전문센터</h2>
                                            <p class="d2s-subtitle">1주택자부터 다주택자까지, 보유부터 양도까지 토탈 세무 관리</p>
                                        </div>

                                        <h3 class="d2s-subheading">핵심 서비스</h3>
                                        <div class="d2s-grid d2s-grid-3 d2s-mt-40">
                                            <div class="d2s-card">
                                                <h4 class="card-title">임대소득 절세 전략</h4>
                                                <ul class="d2s-list">
                                                    <li>필요경비 최대 인정</li>
                                                    <li>주택임대사업자 세제 혜택</li>
                                                    <li>분리과세 vs 종합과세 선택</li>
                                                    <li>공동사업 소득 분산</li>
                                                </ul>
                                            </div>
                                            <div class="d2s-card">
                                                <h4 class="card-title">양도소득세 사전 설계</h4>
                                                <ul class="d2s-list">
                                                    <li>1세대 1주택 비과세 전략</li>
                                                    <li>다주택자 중과세 회피</li>
                                                    <li>재건축/재개발 절세</li>
                                                    <li>증여 후 양도 시뮬레이션</li>
                                                </ul>
                                            </div>
                                            <div class="d2s-card">
                                                <h4 class="card-title">부동산 법인 활용</h4>
                                                <ul class="d2s-list">
                                                    <li>개인 vs 법인 시뮬레이션</li>
                                                    <li>법인 전환 최적 시기</li>
                                                    <li>법인 활용 절세 전략</li>
                                                    <li>Exit 전략 수립</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <h3 class="d2s-subheading d2s-mt-60">진행 프로세스</h3>
                                        <div class="d2s-grid d2s-grid-4 d2s-mt-40">
                                            <div class="d2s-card process-card">
                                                <h4 class="card-title">포트폴리오 분석</h4>
                                                <ul class="d2s-list">
                                                    <li>보유 부동산 현황 파악</li>
                                                    <li>세무 리스크 진단</li>
                                                </ul>
                                            </div>
                                            <div class="d2s-card process-card">
                                                <h4 class="card-title">전략 설계</h4>
                                                <ul class="d2s-list">
                                                    <li>보유/양도 시뮬레이션</li>
                                                    <li>최적 절세안 도출</li>
                                                </ul>
                                            </div>
                                            <div class="d2s-card process-card">
                                                <h4 class="card-title">실행 지원</h4>
                                                <ul class="d2s-list">
                                                    <li>세무 신고 대행</li>
                                                    <li>절세 전략 실행</li>
                                                </ul>
                                            </div>
                                            <div class="d2s-card process-card">
                                                <h4 class="card-title">지속 관리</h4>
                                                <ul class="d2s-list">
                                                    <li>세법 개정 대응</li>
                                                    <li>전략 수정 지원</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <h3 class="d2s-subheading d2s-mt-60">성공 사례</h3>
                                        <div class="d2s-grid d2s-grid-2 d2s-mt-40">
                                            <div class="d2s-card success-card">
                                                <h4 class="card-title">E상가 임대사업자</h4>
                                                <ul class="d2s-list">
                                                    <li>임대소득세 연 2,000만원 절감</li>
                                                    <li>종부세 50% 감면 달성</li>
                                                    <li>향후 양도세 3억원 절감 설계</li>
                                                </ul>
                                            </div>
                                            <div class="d2s-card success-card">
                                                <h4 class="card-title">F다주택자</h4>
                                                <ul class="d2s-list">
                                                    <li>법인 전환으로 종부세 회피</li>
                                                    <li>가족 간 증여로 절세 극대화</li>
                                                    <li>10년 장기 절세 플랜 수립</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Section 7: 전문센터 이용 안내 -->
                            <section class="d2s-section bg-white">
                                <div class="d2s-container">
                                    <div class="entry-content">
                                        <h2 class="d2s-heading d2s-text-center">전문센터 이용 안내</h2>
                                        <p class="d2s-subtitle d2s-text-center">업종별 전문가가 직접 관리하는 프리미엄 서비스</p>

                                        <div class="d2s-grid d2s-grid-2 d2s-mt-60">
                                            <div class="d2s-card info-card">
                                                <h3 class="card-title">전문센터별 담당 세무사</h3>
                                                <ul class="d2s-list outlined-check">
                                                    <li><strong>IT기업 전문</strong>: 김성미 세무사 (15년 경력)</li>
                                                    <li><strong>온라인 쇼핑몰 전문</strong>: 전담 매니저 배정</li>
                                                    <li><strong>부동산 전문</strong>: 양도/상속 전문가 협업</li>
                                                </ul>
                                            </div>
                                            <div class="d2s-card info-card">
                                                <h3 class="card-title">이용 요금</h3>
                                                <ul class="d2s-list outlined-check">
                                                    <li><strong>기본 자문료</strong>: 월 50만원~</li>
                                                    <li><strong>프로젝트성 컨설팅</strong>: 별도 협의</li>
                                                    <li>성공보수제 가능</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Section 8: 자주 묻는 질문 -->
                            <section class="d2s-section bg-base-2">
                                <div class="d2s-container">
                                    <div class="entry-content">
                                        <h2 class="d2s-heading d2s-text-center">자주 묻는 질문</h2>
                                        <p class="d2s-subtitle d2s-text-center">전문센터 이용에 대해 자주 묻는 질문들</p>

                                        <div class="faq-container d2s-mt-60">
                                            <div class="faq-item">
                                                <div class="faq-question">
                                                    <span class="faq-q">Q</span>
                                                    <h3>우리 회사도 이용할 수 있나요?</h3>
                                                </div>
                                                <div class="faq-answer">
                                                    <p>해당 업종이라면 규모 관계없이 가능합니다.</p>
                                                    <ul class="d2s-list">
                                                        <li>스타트업부터 중견기업까지</li>
                                                        <li>업종별 맞춤 서비스 제공</li>
                                                        <li>규모별 차등 요금제</li>
                                                        <li>성장 단계별 지원</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="faq-item">
                                                <div class="faq-question">
                                                    <span class="faq-q">Q</span>
                                                    <h3>여러 업종을 하고 있다면 어떻게 하나요?</h3>
                                                </div>
                                                <div class="faq-answer">
                                                    <p>주력 업종 기준으로 통합 관리합니다.</p>
                                                    <ul class="d2s-list">
                                                        <li>복합 업종 통합 컨설팅</li>
                                                        <li>업종별 절세 전략 동시 적용</li>
                                                        <li>시너지 효과 극대화</li>
                                                        <li>전문가 협업 체제</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="faq-item">
                                                <div class="faq-question">
                                                    <span class="faq-q">Q</span>
                                                    <h3>일반 세무 서비스와 어떤 차이가 있나요?</h3>
                                                </div>
                                                <div class="faq-answer">
                                                    <p>업종 특화 전문성이 핵심 차이입니다.</p>
                                                    <ul class="d2s-list">
                                                        <li>업종별 전담 전문가 배정</li>
                                                        <li>특화된 절세 노하우</li>
                                                        <li>업계 특수성 완벽 이해</li>
                                                        <li>맞춤형 솔루션 제공</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="faq-item">
                                                <div class="faq-question">
                                                    <span class="faq-q">Q</span>
                                                    <h3>업종이 바뀌면 어떻게 되나요?</h3>
                                                </div>
                                                <div class="faq-answer">
                                                    <p>새로운 업종에 맞춰 전문가를 재배정합니다.</p>
                                                    <ul class="d2s-list">
                                                        <li>업종 변경 시 즉시 대응</li>
                                                        <li>새 업종 전문가 투입</li>
                                                        <li>전환 과정 세무 지원</li>
                                                        <li>추가 비용 없음</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Section 9: 업종별 세무 진단 -->
                            <section class="d2s-section bg-white">
                                <div class="d2s-container">
                                    <div class="entry-content">
                                        <h2 class="d2s-heading d2s-text-center">업종별 세무 진단</h2>
                                        <p class="d2s-subtitle d2s-text-center">우리 회사에 맞는 전문센터를 찾아보세요.</p>

                                        <div class="diagnosis-table d2s-mt-60">
                                            <table class="d2s-table">
                                                <thead>
                                                    <tr>
                                                        <th>업종 특징</th>
                                                        <th>연매출</th>
                                                        <th>평균 법인세</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>소프트웨어 개발, 앱 서비스</td>
                                                        <td>IT기업</td>
                                                        <td>R&D 세액공제, 벤처 혜택</td>
                                                    </tr>
                                                    <tr>
                                                        <td>게임, 콘텐츠 제작</td>
                                                        <td>IT기업</td>
                                                        <td>개발비 자산화, 라이선스</td>
                                                    </tr>
                                                    <tr>
                                                        <td>네이버, 쿠팡 등 오픈마켓</td>
                                                        <td>쇼핑몰</td>
                                                        <td>수수료 절세, 부가세 환급</td>
                                                    </tr>
                                                    <tr>
                                                        <td>해외직구, 구매대행</td>
                                                        <td>쇼핑몰</td>
                                                        <td>관세 절감, FTA 활용</td>
                                                    </tr>
                                                    <tr>
                                                        <td>상가, 오피스텔 임대</td>
                                                        <td>부동산</td>
                                                        <td>임대소득 절세, 종부세</td>
                                                    </tr>
                                                    <tr>
                                                        <td>다주택 보유</td>
                                                        <td>부동산</td>
                                                        <td>양도세 전략, 법인 활용</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p class="table-note d2s-text-center d2s-mt-20">
                                                2개 이상 해당 시 통합 컨설팅 추천
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Section 10: 온필드 전문센터의 강점 -->
                            <section class="d2s-section bg-white">
                                <div class="d2s-container">
                                    <div class="entry-content">
                                        <h2 class="d2s-heading d2s-text-center">온필드 전문센터의 강점</h2>
                                        <p class="d2s-subtitle d2s-text-center">일반 세무사무소와는 차원이 다른 전문성</p>

                                        <div class="d2s-grid d2s-grid-3 d2s-mt-60">
                                            <div class="d2s-card strength-card">
                                                <h3 class="card-title">깊이 있는 전문성</h3>
                                                <ul class="d2s-list outlined-check">
                                                    <li>업종별 15년 전문 경력</li>
                                                    <li>500개 이상 업종별 고객</li>
                                                    <li>최신 트렌드 즉시 반영</li>
                                                </ul>
                                            </div>
                                            <div class="d2s-card strength-card">
                                                <h3 class="card-title">검증된 성과</h3>
                                                <ul class="d2s-list outlined-check">
                                                    <li>평균 40% 절세율 달성</li>
                                                    <li>99% 고객 만족도</li>
                                                    <li>지속적 성과 창출</li>
                                                </ul>
                                            </div>
                                            <div class="d2s-card strength-card">
                                                <h3 class="card-title">맞춤형 솔루션</h3>
                                                <ul class="d2s-list outlined-check">
                                                    <li>업종 특화 서비스 설계</li>
                                                    <li>규모별 차별화 전략</li>
                                                    <li>성장 단계별 지원</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Section 11: CTA - 복잡한 세금, 전문가의 지식으로 명쾌하게 -->
                            <section class="d2s-section bg-base cta-section">
                                <div class="d2s-container">
                                    <div class="d2s-grid d2s-grid-2 v-center">
                                        <div class="cta-image">
                                            <img src="<?php echo gp_d2s_image_url('professional-center', 'image.png'); ?>" alt="상담 이미지">
                                        </div>
                                        <div class="cta-content">
                                            <h2 class="d2s-heading">복잡한 세금, 전문가의 지식으로 명쾌하게</h2>
                                            <p class="d2s-lead">
                                                산더미 같은 서류와 어려운 규정들,<br>
                                                이제 전문가에게 맡기고 마음 편히 비즈니스에 집중하세요.
                                            </p>
                                            <div class="d2s-button-group d2s-mt-40">
                                                <a href="#" class="button button-large">지금 바로 상담 신청하기</a>
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