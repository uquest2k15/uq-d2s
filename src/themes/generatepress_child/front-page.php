<?php
/**
 * Front Page Template
 * 
 * @package GeneratePress Child
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Include uq-blog-core-cld library
require_once get_stylesheet_directory() . '/includes/uq-blog-core-cld.php';

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <!-- Hero Section - Full Width -->
        <section class="onfield-hero-wrapper full-width-section">
            <div class="onfield-hero-section" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero/hero-tax-professional.png');">
                <div class="grid-container">
                    <div class="onfield-hero-content">
                        <div class="onfield-hero-text">
                            <h1 class="hero-title">
                                <span class="hero-subtitle">온필드 Onfield</span>
                                세무 걱정 끝, 온필드가 해결합니다!
                            </h1>
                            <p class="hero-description">
                                10년 경력 세무 전문가가 복잡한 세금 문제를<br>
                                명쾌로 풀어드립니다. 지원금부터 절세까지 원스톱 해결!
                            </p>
                            <a href="/contact" class="hero-cta-button">상담 신청하기</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Overlapping Service Cards -->
            <div class="onfield-service-cards">
                <div class="grid-container">
                    <div class="service-cards-wrapper">
                        <div class="service-card">
                            <h3>세무사가 직접 관리</h3>
                            <p>직접 운영하는 세무사 사무소<br>세무 대리인이 직접 상담부터 처리까지</p>
                        </div>
                        <div class="service-card">
                            <h3>절세와 정부지원금 동시에</h3>
                            <p>절세는 물론 놓치기 쉬운 정부지원금까지<br>꼼꼼하게 챙겨드립니다</p>
                        </div>
                        <div class="service-card">
                            <h3>언제나 곁에 있는 세무사</h3>
                            <p>급한 세무 이슈도 빠르게 대응<br>든든한 세무 파트너가 되어드립니다</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Statistics Section - Full Width Background -->
        <section class="full-width-section bg-white">
            <div class="onfield-stats-section">
                <div class="grid-container">
                    <h2 class="section-title">온필드만의 특별한 이유</h2>
                    <p class="section-subtitle">숫자로 보는 온필드의 특별함을 살펴보세요</p>
                    
                    <div class="stats-grid">
                        <div class="stat-item">
                            <div class="stat-number">15년</div>
                            <div class="stat-label">세무 경력</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">200+</div>
                            <div class="stat-label">고객사</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">2,500만원</div>
                            <div class="stat-label">평균 절세액</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">98%</div>
                            <div class="stat-label">고객 만족도</div>
                        </div>
                    </div>
                    
                    <p class="stats-description">
                        온필드는 15년의 세무 경력을 바탕으로 200개 이상의 기업에 세무 서비스를 제공하고 있습니다.
                    </p>
                </div>
            </div>
        </section>

        <!-- Services Section - Full Width Background -->
        <section class="full-width-section bg-light-gray">
            <div class="onfield-services-section">
                <div class="grid-container">
                    <h2 class="section-title">온필드 2025 핵심 서비스</h2>
                    <p class="section-subtitle">세무 걱정 없는 성공적인 비즈니스를 위해 지금 시작하세요</p>
                    
                    <div class="services-grid">
                        <div class="service-item">
                            <h3>세무 기장</h3>
                            <ul>
                                <li>부가가치세 신고부터 종합소득세까지</li>
                                <li>월별 손익 분석 리포트 제공</li>
                                <li>세무조사 대응 지원</li>
                            </ul>
                        </div>
                        <div class="service-item">
                            <h3>세무 진단팀</h3>
                            <ul>
                                <li>현재 납부세액이 적정한지 진단</li>
                                <li>절세 포인트 발굴 및 세무 리스크 체크</li>
                                <li>맞춤형 절세 전략 수립</li>
                            </ul>
                        </div>
                        <div class="service-item">
                            <h3>급여 아웃소싱</h3>
                            <ul>
                                <li>급여명세서 작성 및 이메일 발송</li>
                                <li>4대보험 신고 및 관리</li>
                                <li>연말정산 처리</li>
                            </ul>
                        </div>
                        <div class="service-item">
                            <h3>회계감사 대행</h3>
                            <ul>
                                <li>외부감사 대응 전문 서비스</li>
                                <li>재무제표 작성 지원</li>
                                <li>감사보고서 검토</li>
                            </ul>
                        </div>
                        <div class="service-item">
                            <h3>세무조사 대응 서비스</h3>
                            <ul>
                                <li>세무조사 사전 대비 컨설팅</li>
                                <li>조사 과정 전반 대리 및 동행</li>
                                <li>불복청구 대리</li>
                            </ul>
                        </div>
                        <div class="service-item">
                            <h3>창업컨설팅</h3>
                            <ul>
                                <li>사업자등록부터 세무 신고까지</li>
                                <li>창업 지원금 안내 및 신청 대행</li>
                                <li>초기 세무 전략 수립</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Guide Section - Full Width Background -->
        <section class="full-width-section bg-white">
            <div class="onfield-guide-section">
                <div class="grid-container">
                    <h2 class="section-title">서비스 선택 가이드</h2>
                    <p class="section-subtitle">고객님의 상황에 맞는 최적의 서비스를 찾아보세요</p>
                    
                    <div class="guide-tabs">
                        <div class="tab-buttons">
                            <button class="tab-button active" data-tab="individual">개인 사업자 또는 프리랜서라면</button>
                            <button class="tab-button" data-tab="corporation">법인을 운영하시는 분</button>
                            <button class="tab-button" data-tab="startup">창업을 준비 중이시라면</button>
                            <button class="tab-button" data-tab="monthly">월 급여를 받고 계신다면</button>
                        </div>
                        
                        <div class="tab-contents">
                            <div class="tab-content active" id="individual">
                                <div class="tab-inner">
                                    <h4>개인 사업자를 위한 맞춤 서비스</h4>
                                    <p>부가가치세부터 종합소득세까지, 개인 사업자에게 필요한 모든 세무 서비스를 제공합니다.</p>
                                    <ul>
                                        <li>월별 세무 기장 및 부가가치세 신고</li>
                                        <li>종합소득세 신고 및 절세 컨설팅</li>
                                        <li>세무조사 대응 서비스</li>
                                    </ul>
                                    <a href="/service/individual" class="guide-cta">자세히 보기</a>
                                </div>
                            </div>
                            <div class="tab-content" id="corporation">
                                <div class="tab-inner">
                                    <h4>법인 세무의 모든 것</h4>
                                    <p>복잡한 법인세무를 전문가가 체계적으로 관리해드립니다.</p>
                                    <ul>
                                        <li>법인세 신고 및 세무조정</li>
                                        <li>부가가치세 및 원천세 신고</li>
                                        <li>세무조사 대응 및 불복청구</li>
                                    </ul>
                                    <a href="/service/corporation" class="guide-cta">자세히 보기</a>
                                </div>
                            </div>
                            <div class="tab-content" id="startup">
                                <div class="tab-inner">
                                    <h4>성공적인 창업의 첫걸음</h4>
                                    <p>사업자등록부터 초기 세무전략까지, 창업의 모든 과정을 함께합니다.</p>
                                    <ul>
                                        <li>사업자등록 및 초기 세무 설정</li>
                                        <li>정부 지원금 신청 대행</li>
                                        <li>창업 초기 절세 전략 수립</li>
                                    </ul>
                                    <a href="/service/startup" class="guide-cta">자세히 보기</a>
                                </div>
                            </div>
                            <div class="tab-content" id="monthly">
                                <div class="tab-inner">
                                    <h4>직장인을 위한 절세 서비스</h4>
                                    <p>연말정산 환급부터 종합소득세까지, 직장인의 세금을 관리해드립니다.</p>
                                    <ul>
                                        <li>연말정산 최적화 컨설팅</li>
                                        <li>부업 소득 신고 대행</li>
                                        <li>금융소득 종합과세 상담</li>
                                    </ul>
                                    <a href="/service/employee" class="guide-cta">자세히 보기</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog Content Hub Section - Full Width Background -->
        <section class="full-width-section bg-light-gray">
            <div class="onfield-content-hub">
                <div class="grid-container">
                    <h2 class="section-title">온필드 콘텐츠 허브</h2>
                    <p class="section-subtitle">세무 정보와 인사이트를 만나보세요</p>
                    
                    <?php
                    // Get recent posts
                    $recent_posts = get_posts(array(
                        'numberposts' => 6,
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC'
                    ));
                    
                    if ($recent_posts) {
                        $post_ids = wp_list_pluck($recent_posts, 'ID');
                        
                        echo UQ_Blog_Core::render_post_card_group($post_ids, array(
                            'layout_type' => 'gallery',
                            'columns' => 3,
                            'pagination' => false,
                            'group_class' => 'onfield-blog-grid',
                            'card_options' => array(
                                'layout' => 'portrait',
                                'show_category' => true,
                                'show_date_author' => true,
                                'show_tags' => false,
                                'title_lines' => 2,
                                'excerpt_lines' => 3,
                                'date_format' => 'Y.m.d',
                                'card_class' => 'onfield-blog-card'
                            )
                        ));
                    }
                    ?>
                    
                    <div class="content-hub-cta">
                        <a href="/blog" class="view-all-button">전체 콘텐츠 보기</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section - Full Width Background -->
        <section class="full-width-section bg-white">
            <div class="onfield-cta-section">
                <div class="grid-container">
                    <div class="cta-content">
                        <div class="cta-text">
                            <h2 class="cta-title">복잡한 세금, 전문가의 지식으로 명쾌하게</h2>
                            <p class="cta-description">
                                세무는 전문가에게 맡기고<br>
                                사업에만 집중하실 수 있도록 온필드가 함께합니다.
                            </p>
                            <div class="cta-buttons">
                                <a href="/contact" class="cta-primary-button">무료 상담 신청하기</a>
                                <a href="/about" class="cta-secondary-button">온필드 소개 보기</a>
                            </div>
                        </div>
                        <div class="cta-image">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/components/cta-form-section.png" alt="세무 전문가 상담">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
</div>

<?php
get_footer();