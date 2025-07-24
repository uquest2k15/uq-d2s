<?php
/**
 * Template Name: Request Consulting
 * Template Post Type: page
 * D2S v1 Template - Page: request-consulting
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
    gp_d2s_enqueue_page_assets('request-consulting', true); // true if has JS file
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
                            
                            <!-- Section 1: Hero - 세무 고민, 바로 지금 상담신청하세요 -->
                            <div class="d2s-hero animate-float-up" style="background-image: url('<?php echo gp_d2s_image_url('request-consulting', 'onfield-contact-us-bg-1.jpg'); ?>');">
                                <div class="d2s-container">
                                    <div class="d2s-hero-content">
                                        <h1 class="d2s-hero-title">
                                            세무 고민,<br>
                                            <span class="text-accent">바로 지금</span> 상담신청하세요
                                        </h1>
                                        <p class="d2s-hero-subtitle">15년 경력 김성미 세무사가 직접 상담합니다.</p>
                                        <div class="d2s-button-group">
                                            <a href="#consulting-form" class="button">무료 상담 신청하기</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 2: 빠른 상담을 원하시나요? -->
                            <section class="d2s-section bg-base animate-float-up">
                                <div class="d2s-container">
                                    <div class="entry-content">
                                        <div class="quick-consultation-box d2s-text-center">
                                            <h2 class="d2s-heading">빠른 상담을 원하시나요</h2>
                                            <div class="phone-number text-accent">02-2068-3849</div>
                                            <p class="phone-cta">📞 지금 바로 전화주세요</p>
                                            <p class="business-hours">평일 09:00-18:00 | 즉시 상담 가능</p>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Section 3: 온라인 상담 신청 (Form) -->
                            <section id="consulting-form" class="d2s-section bg-white">
                                <div class="d2s-container">
                                    <div class="entry-content">
                                        <div class="form-header d2s-text-center d2s-mb-60">
                                            <h2 class="d2s-heading">온라인 상담 신청</h2>
                                            <p class="d2s-subtitle">24시간 내에 전문가가 직접 연락드립니다.</p>
                                        </div>
                                        
                                        <div class="gravity-form-container">
                                            <?php 
                                            // GravityForms shortcode
                                            echo do_shortcode('[gravityform id="1" title="false"]');
                                            ?>
                                        </div>
                                        
                                        <!-- Fallback static form (in case GravityForms is not available) -->
                                        <?php if ( ! shortcode_exists( 'gravityform' ) ) : ?>
                                        <div class="static-form-container d2s-max-800">
                                            <form class="consultation-form" action="#" method="post">
                                                <!-- 기본 정보 -->
                                                <div class="form-section">
                                                    <h3 class="form-section-title">기본 정보</h3>
                                                    
                                                    <div class="form-group">
                                                        <label>성함 <span class="required">(필수)</span></label>
                                                        <input type="text" name="name" placeholder="성함을 입력해주세요." required>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>연락처 <span class="required">(필수)</span></label>
                                                        <input type="tel" name="phone" placeholder="연락처를 입력해주세요." required>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>이메일 <span class="required">(필수)</span></label>
                                                        <input type="email" name="email" placeholder="이메일을 입력해주세요." required>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>회사명 <span class="optional">(선택)</span></label>
                                                        <input type="text" name="company" placeholder="회사명을 입력해주세요.">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>사업자 구분 <span class="required">(필수)</span></label>
                                                        <select name="business_type" required>
                                                            <option value="">선택</option>
                                                            <option value="individual">개인사업자</option>
                                                            <option value="corporation">법인사업자</option>
                                                            <option value="pre-business">예비창업자</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <!-- 상담 내용 -->
                                                <div class="form-section">
                                                    <h3 class="form-section-title">상담 내용</h3>
                                                    
                                                    <div class="form-group">
                                                        <label>상담 분야 <span class="optional">(복수 선택)</span></label>
                                                        <div class="checkbox-group">
                                                            <label class="checkbox-label">
                                                                <input type="checkbox" name="consulting_area[]" value="bookkeeping">
                                                                <span>세무 기장 - 월 세무신고가 부담스러워요.</span>
                                                            </label>
                                                            <label class="checkbox-label">
                                                                <input type="checkbox" name="consulting_area[]" value="tax_saving">
                                                                <span>절세 컨설팅 - 세금을 줄이고 싶어요.</span>
                                                            </label>
                                                            <label class="checkbox-label">
                                                                <input type="checkbox" name="consulting_area[]" value="government_support">
                                                                <span>정부지원금 - 받을 수 있는 지원금을 찾고 있어요.</span>
                                                            </label>
                                                            <label class="checkbox-label">
                                                                <input type="checkbox" name="consulting_area[]" value="tax_investigation">
                                                                <span>세무조사 - 세무조사 통지를 받았어요.</span>
                                                            </label>
                                                            <label class="checkbox-label">
                                                                <input type="checkbox" name="consulting_area[]" value="accounting_outsourcing">
                                                                <span>경리 아웃소싱 - 경리 업무를 맡기고 싶어요.</span>
                                                            </label>
                                                            <label class="checkbox-label">
                                                                <input type="checkbox" name="consulting_area[]" value="other">
                                                                <span>기타</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>상담 희망 시간 <span class="optional">(선택)</span></label>
                                                        <div class="checkbox-group">
                                                            <label class="checkbox-label">
                                                                <input type="checkbox" name="preferred_time[]" value="morning">
                                                                <span>오전 (09:00-12:00)</span>
                                                            </label>
                                                            <label class="checkbox-label">
                                                                <input type="checkbox" name="preferred_time[]" value="afternoon">
                                                                <span>오후 (14:00-18:00)</span>
                                                            </label>
                                                            <label class="checkbox-label">
                                                                <input type="checkbox" name="preferred_time[]" value="anytime">
                                                                <span>아무때나 괜찮아요.</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>어떤 도움이 필요하신지 간단히 적어주세요.</label>
                                                        <textarea name="message" rows="5" placeholder="상담 내용을 입력해주세요."></textarea>
                                                    </div>
                                                </div>
                                                
                                                <!-- 개인정보 동의 -->
                                                <div class="form-section">
                                                    <div class="privacy-policy-box">
                                                        <p>※ 개인정보 수집·이용에 대한 동의 『개인정보보호법』 제15조</p>
                                                        <p>「개인정보보호법」시행으로 정보주체자이신 귀하께서 제공하시는 개인정보의 수집·이용에 대한 귀하의 동의가 필요하며, 해당 내용을 읽고 충분히 숙지하시고 동의 하여 주시기 바랍니다.</p>
                                                        <p>1.개인정보의 수집·이용에 관한 사용</p>
                                                        <p>○ 개인정보 수집·이용·목적 : GMG 지엠지 세무회계 역삼1지점은 귀하의 최소한의...</p>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="checkbox-label">
                                                            <input type="checkbox" name="privacy_agree" required>
                                                            <span>개인정보 수집·이용에 동의합니다. <span class="required">(필수)</span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-submit">
                                                    <button type="submit" class="button button-large">상담 신청 하기</button>
                                                </div>
                                            </form>
                                        </div>
                                        <?php endif; ?>
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