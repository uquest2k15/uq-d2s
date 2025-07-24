<?php
/**
 * gp-blog.php - Updated to use uq-blog-core-cld library
 */

// Include uq-blog-core-cld library
require_once get_stylesheet_directory() . '/includes/uq-blog-core-cld.php';

add_action( 'wp_enqueue_scripts', 'gp_register_blog_scripts_and_styles');
function gp_register_blog_scripts_and_styles() {

	if ( false === wp_script_is( 'gp-blog-script', 'registered' ) ) {   
		$ret = wp_register_script('gp-blog-script', get_stylesheet_directory_uri() . '/assets/js/gp-blog.js', array('jquery', 'uq-blog-core-cld-script'));
		if ($ret) {
			//error_log('__## mlf ##__ gp-blog-script register successfully');
		} else {
			// error_log('__## mlf ##__ gp-blog-script register failed');
		}
	}

	if ( false === wp_style_is( 'gp-blog-style', 'registered' ) ) {

		$ret = wp_register_style( 'gp-blog-style', get_stylesheet_directory_uri() . '/assets/css/gp-blog.css', array('uq-blog-core-cld-style') );
		if ($ret) {
			//error_log('__## mlf ##__ gp-blog-style register successfully');
		} else {
			// error_log('__## mlf ##__ gp-blog-style register failed');
		}
	}

	gp_enqueue_blog_scripts_and_styles();

}

function gp_enqueue_blog_scripts_and_styles($script = null, $force_fetch_content = false) {

	error_log('__## gp_enqueue_blog_scripts_and_styles ##__ $script: '.$script);

	if ( false === wp_script_is( 'gp-blog-script', 'enqueued' ) ) {
		// error_log('__## gp_enqueue_blog_scripts_and_styles ##__ wp_enqueue_script("gp-blog-script")');
		wp_enqueue_script('gp-blog-script');
	}
	
	if (  false === wp_style_is( 'gp-blog-style', 'enqueued' ) ) {
		// error_log('__## gp_enqueue_blog_scripts_and_styles ##__ wp_enqueue_style("gp-blog-style")');
		wp_enqueue_style( 'gp-blog-style' );
	}
	
	if ( is_category() ) {
		$term      = get_queried_object();
		$cat_slug = $term->slug;
	} else {
		$cat_slug  = '';
	}
	$paged = get_query_var('mb-paged');
	if (empty($paged))
		$paged = 1;


	$nonce  = wp_create_nonce( 'my-nonce' );
	$params = array (
		'nonce'    => $nonce,
		'cat_slug' => $cat_slug,
		'post_url' => get_permalink(),
		'paged'    => $paged
	);

	wp_localize_script('gp-blog-script', 'php_params', $params);

	// Also localize for uq-blog-core-cld
	wp_localize_script('uq-blog-core-cld-script', 'uq_blog_ajax', array(
		'ajax_url' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('uq_blog_core_nonce')
	));

}



/**
 * ===================================================================
 * ONFIELD - CUSTOM BLOG INDEX PAGE LAYOUT
 * ===================================================================
 * This code block generates a custom layout for the 'Blog Posts Index Page'.
 * It hooks into GeneratePress to display the layout and removes the default content loop.
 */

// 1. Helper function to create a custom length excerpt.
if ( ! function_exists( 'onfield_get_custom_excerpt' ) ) {
    function onfield_get_custom_excerpt($limit) {
        $excerpt = explode(' ', get_the_excerpt(), $limit);
        if (count($excerpt) >= $limit) {
            array_pop($excerpt);
            $excerpt = implode(" ", $excerpt) . '...';
        } else {
            $excerpt = implode(" ", $excerpt);
        }
        $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
        return $excerpt;
    }
}

// 2. The main function that outputs the entire page HTML and logic.
if ( ! function_exists( 'onfield_display_blog_index_page' ) ) {
    function onfield_display_blog_index_page() {
        ?>
        <div class="onfield-blog-index-wrapper">

            <!-- ============================================= -->
            <!-- 1. Page Header (Featured Post Hero Section)   -->
            <!-- ============================================= -->
            <?php
            $featured_args = array(
                'posts_per_page' => 1,
                'tag' => 'featured', // 'featured' 태그를 사용한다고 가정합니다.
                'ignore_sticky_posts' => 1
            );
            $featured_query = new WP_Query($featured_args);

            if ($featured_query->have_posts()) :
                while ($featured_query->have_posts()) : $featured_query->the_post();
                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $categories = get_the_category();
                    $category_name = !empty($categories) ? esc_html($categories[0]->name) : '세무 뉴스/칼럼';
            ?>
            <section class="onfield-hero-section">
                <div class="onfield-hero-content">
                    <div class="onfield-hero-text">
                        <span class="onfield-hero-category"><?php echo $category_name; ?></span>
                        <h1 class="onfield-hero-title"><?php the_title(); ?></h1>
                        <p class="onfield-hero-excerpt"><?php echo onfield_get_custom_excerpt(25); ?></p>
                        <a href="<?php the_permalink(); ?>" class="onfield-button">자세히 보기</a>
                    </div>
                    <div class="onfield-hero-image" style="background-image: url('<?php echo esc_url($featured_img_url); ?>');">
                    </div>
                </div>
            </section>
            <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>

            <!-- ============================================= -->
            <!-- 2. Category Filter Section                  -->
            <!-- ============================================= -->
            <section class="onfield-category-filter-section">
                <h2 class="section-title">온필드 아티클 카테고리</h2>
                <p class="section-description">관심 주제를 선택하세요.</p>
                <div class="onfield-category-filters">
                    <?php
                    // '미분류' 카테고리를 제외하고 모든 카테고리 가져오기
                    $uncategorized_id = get_cat_ID('Uncategorized');
                    $args = array(
                        'orderby' => 'name',
                        'order'   => 'ASC',
                        'exclude' => array($uncategorized_id)
                    );
                    $categories = get_categories($args);
                    foreach ($categories as $category) {
                        echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="onfield-filter-button">' . esc_html($category->name) . '</a>';
                    }
                    ?>
                </div>
            </section>

            <!-- ============================================= -->
            <!-- 3. Category Post List Section               -->
            <!-- ============================================= -->
            <?php
            foreach ($categories as $category) :
            ?>
            <section class="onfield-category-list-section">
                <div class="onfield-category-header">
                    <h3 class="category-name"><?php echo esc_html($category->name); ?></h3>
                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="category-more-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 4.5L21 12M21 12L13.5 19.5M21 12H3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                </div>
                <?php
                // Get posts for this category
                $category_posts_args = array(
                    'posts_per_page' => 3,
                    'cat' => $category->term_id,
                    'ignore_sticky_posts' => 1
                );
                $category_posts_query = new WP_Query($category_posts_args);

                $post_ids = array();
                if ($category_posts_query->have_posts()) {
                    while ($category_posts_query->have_posts()) {
                        $category_posts_query->the_post();
                        $post_ids[] = get_the_ID();
                    }
                }
                wp_reset_postdata();

                // Render post card group using uq-blog-core-cld
                if (!empty($post_ids)) {
                    echo UQ_Blog_Core::render_post_card_group($post_ids, array(
                        'layout_type' => 'gallery',
                        'columns' => 3,
                        'pagination' => false,
                        'infinite_scroll' => false,
                        'group_class' => 'onfield-category-posts',
                        'card_options' => array(
                            'layout' => 'portrait',
                            'show_category' => false, // Category already shown in section header
                            'show_date_author' => false,
                            'show_tags' => false,
                            'title_lines' => 2,
                            'excerpt_lines' => 2,
                            'excerpt_length' => 18,
                            'card_class' => 'onfield-category-post-card'
                        )
                    ));
                } else {
                    echo '<p>이 카테고리에는 아직 글이 없습니다.</p>';
                }
                ?>
            </section>
            <?php endforeach; ?>

            <!-- ============================================= -->
            <!-- 4. CTA Section                              -->
            <!-- ============================================= -->
            <?php
            $cta_image_path = get_stylesheet_directory_uri() . '/assets/images/components/cta-form-section.png';
            ?>
            <section class="onfield-cta-section">
                <div class="onfield-cta-content">
                    <div class="onfield-cta-text">
                        <h2 class="cta-title">복잡한 세금, 전문가의 지식으로 명쾌하게</h2>
                        <p class="cta-description">
                            산더미 같은 서류와 어려운 규정들,<br>
                            이제 전문가에게 맡기고 마음 편히 비즈니스에 집중하세요.
                        </p>
                        <a href="/contact" class="onfield-button cta-button">지금 바로 상담 신청하기</a>
                    </div>
                    <div class="onfield-cta-illustration">
                         <img src="<?php echo esc_url( $cta_image_path ); ?>" alt="세금 상담 신청 CTA 이미지">
                    </div>
                </div>
            </section>

        </div><!-- .onfield-blog-index-wrapper -->
        <?php
    }
}

// 3. This controller function hooks our layout into the correct place.
if ( ! function_exists( 'onfield_blog_index_controller' ) ) {
    function onfield_blog_index_controller() {
        if ( is_home() || is_page( 'blog' ) || is_page( 499 ) ) {

            // 1) 기본 루프 해제 (generate_loop 훅에서 generate_do_loop 콜백 제거)
            // remove_action( 'generate_loop', 'generate_do_loop', 10 );
            add_filter( 'generate_has_default_loop', function( $show ) {
                if ( is_home() || is_page(499) ) {
                    $show = false;
                }
                else {
                    $show = true;
                }
                return $show;
            } );


            // 2) 커스텀 섹션 출력
            add_action( 'generate_before_main_content', 'onfield_display_blog_index_page' );
        }
    }
    add_action( 'wp', 'onfield_blog_index_controller', 1 );
}






/**
 * 
 * Category Archive Page
 * 
 */

/**
 * ===================================================================
 * ONFIELD - CATEGORY ARCHIVE PAGE - FINAL VERSION
 * ===================================================================
 * This file contains all the necessary functions to build the custom
 * category archive page, including a dedicated widget area.
 */



// 1. Register a new, dedicated widget area for category archives.
add_action( 'widgets_init', 'onfield_register_category_sidebar' );
function onfield_register_category_sidebar() {
    register_sidebar( array(
        'name'          => __( '카테고리 아카이브 사이드바', 'onfield' ),
        'id'            => 'onfield-category-archive-sidebar',
        'description'   => __( '카테고리 아카이브 페이지 전용 사이드바입니다.', 'onfield' ),
        'before_widget' => '<div class="wp-block-group onfield-sidebar-widget widget %2$s">', // Use group for styling
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="wp-block-heading">',
        'after_title'   => '</h2>',
    ) );
}

// 2. Main controller to manage the layout on category archives. [UPDATED]
add_action( 'wp', 'onfield_category_archive_layout_controller' );
function onfield_category_archive_layout_controller() {
    // Only run on category archive pages.
    if ( ! is_category() ) {
        return;
    }

    // A. Remove default elements
    remove_action( 'generate_archive_title', 'generate_archive_title' );
    
    // Remove default loop content
    add_filter( 'generate_show_content', '__return_false' );

    // B. Add custom elements (Header, CTA, Grid Wrapper)
    // [CHANGED HOOK] Use generate_after_header for a full-width section
    add_action( 'generate_after_header', 'onfield_display_category_header' ); 
    add_action( 'generate_after_main_content', 'onfield_display_cta_section' );
    add_action( 'generate_before_loop', 'onfield_start_post_grid_wrapper' );
    add_action( 'generate_after_loop', 'onfield_end_post_grid_wrapper' );
    
    // C. Replace the sidebar using the CORRECT hooks
    add_filter( 'sidebars_widgets', 'onfield_clear_default_category_sidebar' );
    add_action( 'generate_before_right_sidebar_content', 'onfield_inject_custom_sidebar_area' );
}

/**
 * 3. Clear default widgets from the right sidebar on category pages.
 * This prevents default widgets from showing up.
 */
function onfield_clear_default_category_sidebar( $sidebars_widgets ) {
    // 'sidebar-1' is the ID for the default right sidebar in GeneratePress.
    if ( isset($sidebars_widgets['sidebar-1']) ) {
        $sidebars_widgets['sidebar-1'] = [];
    }
    return $sidebars_widgets;
}

/**
 * 4. Inject our new custom sidebar into the right sidebar area using the correct hook.
 */
function onfield_inject_custom_sidebar_area() {
    dynamic_sidebar( 'onfield-category-archive-sidebar' );
}


/* --- Other functions (Header, CTA, Grid) - No changes needed here --- */

// [REPLACED] Displays the new Full-Width Page Header
function onfield_display_category_header() {
    $term = get_queried_object();
    $image_path = get_stylesheet_directory_uri() . '/assets/images/components/category-archive-section.png';
    ?>
    <section class="onfield-archive-header">
        <div class="grid-container">
            <div class="onfield-archive-header-content">
                <div class="onfield-archive-header-text">
                    <h1 class="onfield-archive-title"><?php single_cat_title(); ?></h1>
                    <?php if ( ! empty( $term->description ) ) : ?>
                        <div class="onfield-archive-description"><?php echo wp_kses_post( $term->description ); ?></div>
                    <?php endif; ?>
                </div>
                <div class="onfield-archive-header-image">
                    <img src="<?php echo esc_url( $image_path ); ?>" alt="<?php echo esc_attr( $term->name ); ?> 섹션 이미지">
                </div>
            </div>
        </div>
    </section>
    <?php
}

// [REPLACED] Displays the new CTA Section
function onfield_display_cta_section() {
    $image_path = get_stylesheet_directory_uri() . '/assets/images/components/cta-form-section.png';
    ?>
    <section class="onfield-cta-section onfield-archive-cta">
        <div class="grid-container">
            <div class="onfield-cta-content">
                 <div class="onfield-cta-text">
                    <h2 class="cta-title">복잡한 세금, 전문가의 지식으로 명쾌하게</h2>
                    <p class="cta-description">
                        산더미 같은 서류와 어려운 규정들,<br>
                        이제 전문가에게 맡기고 마음 편히 비즈니스에 집중하세요.
                    </p>
                    <a href="/contact" class="onfield-button cta-button">지금 바로 상담 신청하기</a>
                </div>
                <div class="onfield-cta-illustration">
                     <img src="<?php echo esc_url( $image_path ); ?>" alt="세금 상담 신청 CTA 이미지">
                </div>
            </div>
        </div>
    </section>
    <?php
}

function onfield_start_post_grid_wrapper() { 
    // Get current category posts
    global $wp_query;
    $post_ids = array();
    
    if ($wp_query->have_posts()) {
        while ($wp_query->have_posts()) {
            $wp_query->the_post();
            $post_ids[] = get_the_ID();
        }
        // Reset post data
        rewind_posts();
    }
    
    // Render using uq-blog-core-cld
    if (!empty($post_ids)) {
        echo UQ_Blog_Core::render_post_card_group($post_ids, array(
            'layout_type' => 'gallery',
            'columns' => 3,
            'pagination' => false, // Using WordPress native pagination
            'infinite_scroll' => false,
            'group_class' => 'onfield-archive-posts',
            'card_options' => array(
                'layout' => 'portrait',
                'show_category' => true,
                'show_date_author' => true,
                'show_tags' => false,
                'title_lines' => 2,
                'excerpt_lines' => 3,
                'excerpt_length' => 150,
                'date_format' => 'Y.m.d',
                'card_class' => 'onfield-archive-post-card'
            )
        ));
        
        // Prevent default loop from running by manipulating the query
        $wp_query->current_post = $wp_query->post_count;
        $wp_query->in_the_loop = false;
    }
}

function onfield_end_post_grid_wrapper() { 
    // Empty - rendering already done in start function
    
    // Additional safety: Skip the default loop
    global $wp_query;
    if ($wp_query->have_posts()) {
        // Set the internal pointer to the end
        $wp_query->current_post = $wp_query->post_count - 1;
    }
}

/**
 * ========================================================
 * UTILITY: Modify Categories Widget HTML for better styling
 * ========================================================
 * This filter wraps the category name and post count in separate spans
 * within the anchor tag, allowing for flexbox alignment with CSS.
 */
add_filter( 'wp_list_categories', 'onfield_category_widget_flex_wrapper', 10, 2 );
function onfield_category_widget_flex_wrapper( $output, $args ) {
    // Only apply to our sidebar widgets, not everywhere
    if ( $args['show_count'] ) {
        // Use regular expressions to find the link and the count
        // It finds <a ...>Category Name</a> (3)
        // And replaces it with <a ...><span>Category Name</span> <span class="post-count">3</span></a>
        $pattern = '/(<a[^>]*>)([^<]+)<\/a>\s*\(([\d,]+)\)/';
        $replacement = '$1<span>$2</span> <span class="post-count">$3</span></a>';
        $output = preg_replace( $pattern, $replacement, $output );
    }
    return $output;
}
