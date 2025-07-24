<?php
/**
 * UQ Blog Core Library
 * WordPress 테마와 독립적으로 동작하는 블로그 레이아웃 라이브러리
 * 
 * @version 1.0.0
 * @author UQ
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action( 'wp_enqueue_scripts', 'uq_register_blog_core_cld_scripts_and_styles');
function uq_register_blog_core_cld_scripts_and_styles() {
	if ( false === wp_script_is( 'uq-blog-core-cld-script', 'registered' ) ) {   
		$ret = wp_register_script('uq-blog-core-cld-script', get_stylesheet_directory_uri() . '/assets/js/uq-blog-core-cld.js', array('jquery'));
		if ($ret) {
			//error_log('__## mlf ##__ uq-blog-core-cld-script register successfully');
		} else {
			// error_log('__## mlf ##__ uq-blog-core-cld-script register failed');
		}
	}

	if ( false === wp_style_is( 'uq-blog-core-cld-style', 'registered' ) ) {

		wp_register_style( 'uq-blog-core-cld-style', get_stylesheet_directory_uri() . '/assets/css/uq-blog-core-cld.css', array() );
		if ($ret) {
			//error_log('__## mlf ##__ uq-blog-core-cld-style register successfully');
		} else {
			// error_log('__## mlf ##__ uq-blog-core-cld-style register failed');
		}
	}

	uq_enqueue_blog_core_cld_scripts_and_styles();

}

function uq_enqueue_blog_core_cld_scripts_and_styles($script = null, $force_fetch_content = false) {

	if ( false === wp_script_is( 'uq-blog-core-cld-script', 'enqueued' ) ) {
		// error_log('__## gp_enqueue_blog_scripts_and_styles ##__ wp_enqueue_script("uq-blog-core-cld-script")');
		wp_enqueue_script('uq-blog-core-cld-script');
	}
	

	if (  false === wp_style_is( 'uq-blog-core-cld-style', 'enqueued' ) ) {
		// error_log('__## gp_enqueue_blog_scripts_and_styles ##__ wp_enqueue_style("uq-blog-core-cld-style")');
		wp_enqueue_style( 'uq-blog-core-cld-style' );
	}
	
	// Localize script for AJAX
	wp_localize_script('uq-blog-core-cld-script', 'uq_blog_ajax', array(
		'ajax_url' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('uq_blog_core_nonce')
	));
}

class UQ_Blog_Core {
    
    /**
     * Post Card를 렌더링하는 함수
     * 
     * @param int $post_id 포스트 ID
     * @param array $options 카드 옵션
     * @return string HTML 출력
     */
    public static function render_post_card($post_id, $options = array()) {
        // 기본 옵션 설정
        $defaults = array(
            'layout' => 'portrait', // portrait, horizontal
            'image_position' => 'left', // left, right (horizontal layout only)
            'show_category' => true,
            'show_date_author' => true,
            'show_tags' => true,
            'max_height' => '',
            'title_lines' => 2,
            'excerpt_lines' => 3,
            'excerpt_length' => 150,
            'date_format' => 'Y년 m월 d일',
            'author_format' => 'display_name', // display_name, full_name
            'card_class' => '',
            'image_size' => 'medium_large'
        );
        
        $options = wp_parse_args($options, $defaults);
        
        // 포스트 데이터 가져오기
        $post = get_post($post_id);
        if (!$post) {
            return '';
        }
        
        // 데이터 준비
        $categories = get_the_category($post_id);
        $tags = get_the_tags($post_id);
        $author_id = $post->post_author;
        $featured_image_url = get_the_post_thumbnail_url($post_id, $options['image_size']);
        $post_url = get_permalink($post_id);
        
        // 발췌문 처리
        $excerpt = !empty($post->post_excerpt) ? $post->post_excerpt : wp_trim_words($post->post_content, $options['excerpt_length'], '...');
        
        // 저자명 포맷팅
        $author_name = self::get_author_name($author_id, $options['author_format']);
        
        // 카드 클래스 구성
        $card_classes = array(
            'uq-post-card',
            'uq-post-card--' . $options['layout']
        );
        
        if ($options['layout'] === 'horizontal') {
            $card_classes[] = 'uq-post-card--image-' . $options['image_position'];
        }
        
        if (!empty($options['card_class'])) {
            $card_classes[] = $options['card_class'];
        }
        
        // HTML 생성
        ob_start();
        ?>
        <article class="<?php echo esc_attr(implode(' ', $card_classes)); ?>" 
                 <?php if (!empty($options['max_height'])): ?>style="max-height: <?php echo esc_attr($options['max_height']); ?>"<?php endif; ?>>
            
            <?php if ($options['show_category'] && !empty($categories)): ?>
            <div class="uq-post-card__category">
                <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>" class="uq-post-card__category-link">
                    <?php echo esc_html($categories[0]->name); ?>
                </a>
            </div>
            <?php endif; ?>
            
            <div class="uq-post-card__inner">
                <?php if ($featured_image_url): ?>
                <div class="uq-post-card__image-wrapper">
                    <a href="<?php echo esc_url($post_url); ?>" class="uq-post-card__image-link">
                        <img src="<?php echo esc_url($featured_image_url); ?>" 
                             alt="<?php echo esc_attr($post->post_title); ?>" 
                             class="uq-post-card__image">
                    </a>
                </div>
                <?php endif; ?>
                
                <div class="uq-post-card__content">
                    <h3 class="uq-post-card__title" style="-webkit-line-clamp: <?php echo esc_attr($options['title_lines']); ?>">
                        <a href="<?php echo esc_url($post_url); ?>" class="uq-post-card__title-link">
                            <?php echo esc_html($post->post_title); ?>
                        </a>
                    </h3>
                    
                    <div class="uq-post-card__excerpt" style="-webkit-line-clamp: <?php echo esc_attr($options['excerpt_lines']); ?>">
                        <?php echo esc_html($excerpt); ?>
                    </div>
                    
                    <?php if ($options['show_date_author']): ?>
                    <div class="uq-post-card__meta">
                        <time class="uq-post-card__date" datetime="<?php echo esc_attr($post->post_date); ?>">
                            <?php echo esc_html(mysql2date($options['date_format'], $post->post_date)); ?>
                        </time>
                        <span class="uq-post-card__separator">·</span>
                        <span class="uq-post-card__author">
                            <a href="<?php echo esc_url(get_author_posts_url($author_id)); ?>" class="uq-post-card__author-link">
                                <?php echo esc_html($author_name); ?>
                            </a>
                        </span>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($options['show_tags'] && !empty($tags)): ?>
                    <div class="uq-post-card__tags">
                        <?php foreach ($tags as $tag): ?>
                        <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="uq-post-card__tag">
                            #<?php echo esc_html($tag->name); ?>
                        </a>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </article>
        <?php
        
        return ob_get_clean();
    }
    
    /**
     * Post Card Group을 렌더링하는 함수
     * 
     * @param array $post_ids 포스트 ID 배열
     * @param array $options 그룹 옵션
     * @return string HTML 출력
     */
    public static function render_post_card_group($post_ids, $options = array()) {
        // 기본 옵션 설정
        $defaults = array(
            'layout_type' => 'gallery', // gallery, row, list
            'card_options' => array(), // 개별 카드 옵션
            'group_class' => '',
            
            // Gallery Layout 옵션
            'masonry' => false,
            'columns' => 3,
            'pagination' => true,
            'infinite_scroll' => false,
            
            // Row Layout 옵션
            'cards_per_row' => 3,
            'enable_slide' => false,
            'enable_carousel' => false,
            
            // List Layout 옵션
            'list_pagination' => true,
            'list_infinite_scroll' => false,
            
            // 공통 옵션
            'gap' => '20px',
            'wrapper_id' => ''
        );
        
        $options = wp_parse_args($options, $defaults);
        
        // 레이아웃별 카드 기본 옵션 설정
        $card_defaults = self::get_card_defaults_by_layout($options['layout_type']);
        $options['card_options'] = wp_parse_args($options['card_options'], $card_defaults);
        
        // 그룹 클래스 구성
        $group_classes = array(
            'uq-post-card-group',
            'uq-post-card-group--' . $options['layout_type']
        );
        
        if ($options['layout_type'] === 'gallery') {
            $group_classes[] = 'uq-post-card-group--columns-' . $options['columns'];
            if ($options['masonry']) {
                $group_classes[] = 'uq-post-card-group--masonry';
            }
        } elseif ($options['layout_type'] === 'row') {
            $group_classes[] = 'uq-post-card-group--cards-' . $options['cards_per_row'];
            if ($options['enable_slide'] || $options['enable_carousel']) {
                $group_classes[] = 'uq-post-card-group--slider';
            }
        }
        
        if (!empty($options['group_class'])) {
            $group_classes[] = $options['group_class'];
        }
        
        // Wrapper ID 생성
        $wrapper_id = !empty($options['wrapper_id']) ? $options['wrapper_id'] : 'uq-group-' . uniqid();
        
        // HTML 생성
        ob_start();
        ?>
        <div id="<?php echo esc_attr($wrapper_id); ?>" 
             class="<?php echo esc_attr(implode(' ', $group_classes)); ?>"
             style="--uq-gap: <?php echo esc_attr($options['gap']); ?>;"
             <?php echo self::get_data_attributes($options); ?>>
            
            <?php if ($options['layout_type'] === 'row' && ($options['enable_slide'] || $options['enable_carousel'])): ?>
                <div class="uq-post-card-group__slider-wrapper">
                    <div class="uq-post-card-group__slider-container">
            <?php endif; ?>
            
            <div class="uq-post-card-group__inner">
                <?php foreach ($post_ids as $post_id): ?>
                    <?php echo self::render_post_card($post_id, $options['card_options']); ?>
                <?php endforeach; ?>
            </div>
            
            <?php if ($options['layout_type'] === 'row' && ($options['enable_slide'] || $options['enable_carousel'])): ?>
                    </div>
                    <button class="uq-post-card-group__nav uq-post-card-group__nav--prev" aria-label="이전">
                        <span class="uq-icon-chevron-left"></span>
                    </button>
                    <button class="uq-post-card-group__nav uq-post-card-group__nav--next" aria-label="다음">
                        <span class="uq-icon-chevron-right"></span>
                    </button>
                </div>
            <?php endif; ?>
            
            <?php 
            // Pagination 렌더링
            if (($options['layout_type'] === 'gallery' && $options['pagination']) || 
                ($options['layout_type'] === 'list' && $options['list_pagination'])): 
            ?>
                <div class="uq-post-card-group__pagination">
                    <!-- JavaScript로 동적 생성 -->
                </div>
            <?php endif; ?>
            
            <?php 
            // 무한 스크롤 로더
            if (($options['layout_type'] === 'gallery' && $options['infinite_scroll']) || 
                ($options['layout_type'] === 'list' && $options['list_infinite_scroll'])): 
            ?>
                <div class="uq-post-card-group__loader" style="display: none;">
                    <div class="uq-spinner"></div>
                </div>
            <?php endif; ?>
        </div>
        <?php
        
        return ob_get_clean();
    }
    
    /**
     * 저자명 가져오기
     */
    private static function get_author_name($author_id, $format = 'display_name') {
        if ($format === 'full_name') {
            $first_name = get_user_meta($author_id, 'first_name', true);
            $last_name = get_user_meta($author_id, 'last_name', true);
            
            // 한국어 이름 형식 (성 + 이름)
            if (!empty($last_name) && !empty($first_name)) {
                return $last_name . $first_name;
            }
        }
        
        return get_the_author_meta('display_name', $author_id);
    }
    
    /**
     * 레이아웃별 카드 기본 옵션
     */
    private static function get_card_defaults_by_layout($layout_type) {
        switch ($layout_type) {
            case 'gallery':
                return array(
                    'layout' => 'portrait',
                    'show_category' => true,
                    'show_date_author' => true,
                    'show_tags' => false
                );
                
            case 'row':
                return array(
                    'layout' => 'portrait',
                    'show_category' => true,
                    'show_date_author' => false,
                    'show_tags' => false
                );
                
            case 'list':
                return array(
                    'layout' => 'horizontal',
                    'image_position' => 'left',
                    'show_category' => true,
                    'show_date_author' => true,
                    'show_tags' => true
                );
                
            default:
                return array();
        }
    }
    
    /**
     * 데이터 속성 생성
     */
    private static function get_data_attributes($options) {
        $attrs = array();
        
        $attrs['data-layout'] = $options['layout_type'];
        
        if ($options['layout_type'] === 'gallery') {
            if ($options['masonry']) $attrs['data-masonry'] = 'true';
            if ($options['infinite_scroll']) $attrs['data-infinite-scroll'] = 'true';
            $attrs['data-columns'] = $options['columns'];
        }
        
        if ($options['layout_type'] === 'row') {
            if ($options['enable_carousel']) $attrs['data-carousel'] = 'true';
            $attrs['data-cards-per-row'] = $options['cards_per_row'];
        }
        
        if ($options['layout_type'] === 'list' && $options['list_infinite_scroll']) {
            $attrs['data-infinite-scroll'] = 'true';
        }
        
        $output = '';
        foreach ($attrs as $key => $value) {
            $output .= sprintf(' %s="%s"', esc_attr($key), esc_attr($value));
        }
        
        return $output;
    }
    
    /**
     * AJAX 핸들러 - 무한 스크롤용
     */
    public static function ajax_load_more_posts() {
        check_ajax_referer('uq_blog_core_nonce', 'nonce');
        
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $per_page = isset($_POST['per_page']) ? intval($_POST['per_page']) : 10;
        $layout_type = isset($_POST['layout_type']) ? sanitize_text_field($_POST['layout_type']) : 'gallery';
        $card_options = isset($_POST['card_options']) ? $_POST['card_options'] : array();
        
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => $per_page,
            'paged' => $page
        );
        
        $query = new WP_Query($args);
        $posts_html = '';
        
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $posts_html .= self::render_post_card(get_the_ID(), $card_options);
            }
        }
        
        wp_send_json_success(array(
            'html' => $posts_html,
            'has_more' => $query->max_num_pages > $page
        ));
    }
}

// AJAX 액션 등록
add_action('wp_ajax_uq_load_more_posts', array('UQ_Blog_Core', 'ajax_load_more_posts'));
add_action('wp_ajax_nopriv_uq_load_more_posts', array('UQ_Blog_Core', 'ajax_load_more_posts'));