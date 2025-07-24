<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */

 if (!defined('ABSPATH')) die();

include('includes/gp-customize.php');
include('includes/gp-blog.php');                  // GeneratePress Blog 모듈
include('includes/gp-d2s-v1.php');                // D2S v1 System Integration

// Tell WordPress to look for page templates in the templates directory
add_filter('theme_page_templates', 'gp_child_add_page_templates', 10, 4);
function gp_child_add_page_templates($post_templates, $wp_theme, $post, $post_type) {
    // Only for pages
    if ($post_type !== 'page') {
        return $post_templates;
    }
    
    // Get templates from templates directory
    $templates_dir = get_stylesheet_directory() . '/templates/';
    if (file_exists($templates_dir)) {
        $files = glob($templates_dir . 'page-*.php');
        foreach ($files as $file) {
            $template_data = get_file_data($file, array(
                'Template Name' => 'Template Name'
            ));
            
            if (!empty($template_data['Template Name'])) {
                $template_slug = 'templates/' . basename($file);
                $post_templates[$template_slug] = $template_data['Template Name'];
            }
        }
    }
    
    return $post_templates;
}



 /*
 * Helper Functions
 */

if (! function_exists('error_log_print_r')) {
    function error_log_print_r($log) {
        if ( is_array($log) || is_object($log)) {
            error_log( print_r($log, true));
        } else {
            error_log($log);
        }
    }
}

if (! function_exists('error_log_var_dump')) {
    function error_log_var_dump( $object=null ){
        ob_start();                    // start buffer capture
        var_dump( $object );           // dump the values
        $contents = ob_get_contents(); // put the buffer into a variable
        ob_end_clean();                // end capture
        error_log( $contents );        // log contents of the result of var_dump( $object )
    }
}

if (! function_exists('error_log_backtrace')) {
    function error_log_backtrace(){
        ob_start();                    // start buffer capture
        debug_print_backtrace();       // prints a PHP backtrace. It prints the function calls, included/required files and eval()ed stuff.
        $contents = ob_get_contents(); // put the buffer into a variable
        ob_end_clean();                // end capture
        error_log( $contents );        // log contents of the result of var_dump( $object )
    }
}



function gp_add_modified_time( $src ) {

    $clean_src = remove_query_arg( 'ver', $src );
    $path      = wp_parse_url( $src, PHP_URL_PATH );

    // untrailingslashit() - wp function. Removes trailing forward slashes and backslashes if they exist.
    if ( $modified_time = @filemtime( untrailingslashit( ABSPATH ) . $path ) ) {
        $src = add_query_arg( 'ver', $modified_time, $clean_src );
    } else {
        $src = add_query_arg( 'ver', time(), $clean_src );
    }

    return $src;
}
add_filter( 'style_loader_src', 'gp_add_modified_time', 99999999, 1 );
add_filter( 'script_loader_src', 'gp_add_modified_time', 99999999, 1 );


/**
 * OnField Front Page Functions
 * Add this code to your child theme's functions.php file
 */

// Enqueue front page specific styles and scripts
add_action('wp_enqueue_scripts', 'onfield_enqueue_front_page_assets');
function onfield_enqueue_front_page_assets() {
    
    // Only load on front page
    if (is_front_page()) {
        
        // Enqueue front page CSS
        wp_enqueue_style(
            'onfield-front',
            get_stylesheet_directory_uri() . '/assets/css/onfield-front.css',
            array('uq-blog-core-cld-style'), // Dependency on blog core styles
            '1.0.0'
        );
        
        // Enqueue front page JavaScript
        wp_enqueue_script(
            'onfield-front',
            get_stylesheet_directory_uri() . '/assets/js/onfield-front.js',
            array('jquery', 'uq-blog-core-cld-script'), // Dependencies
            '1.0.0',
            true
        );
        
        // Make sure uq-blog-core-cld is loaded
        uq_enqueue_blog_core_cld_scripts_and_styles();
    }
}

// Set front page display options programmatically (optional)
// You can also do this manually in WordPress Settings > Reading
// add_action('after_switch_theme', 'onfield_set_homepage_options');
function onfield_set_homepage_options() {
    
    // Create a front page if it doesn't exist
    $front_page = get_page_by_title('홈');
    if (!$front_page) {
        $front_page_id = wp_insert_post(array(
            'post_title'     => '홈',
            'post_content'   => '',
            'post_status'    => 'publish',
            'post_type'      => 'page',
            'post_author'    => 1,
        ));
    } else {
        $front_page_id = $front_page->ID;
    }
    
    // Create a blog page if it doesn't exist
    $blog_page = get_page_by_title('블로그');
    if (!$blog_page) {
        $blog_page_id = wp_insert_post(array(
            'post_title'     => '블로그',
            'post_content'   => '',
            'post_status'    => 'publish',
            'post_type'      => 'page',
            'post_author'    => 1,
        ));
    } else {
        $blog_page_id = $blog_page->ID;
    }
    
    // Set the options
    update_option('show_on_front', 'page');
    update_option('page_on_front', $front_page_id);
    update_option('page_for_posts', $blog_page_id);
}

// Remove GeneratePress elements on front page for cleaner layout
add_action('wp', 'onfield_remove_front_page_elements');
function onfield_remove_front_page_elements() {
    if (is_front_page()) {
        // Remove page title
        add_filter('generate_show_title', '__return_false');
        
        // Remove featured image
        remove_action('generate_before_content', 'generate_featured_page_header_inside_single', 10);
        remove_action('generate_after_header', 'generate_featured_page_header', 10);
        
        // Remove sidebar if needed
        add_filter('generate_sidebar_layout', function() {
            return 'no-sidebar';
        });
    }
}

// Add custom body class for front page
add_filter('body_class', 'onfield_front_page_body_class');
function onfield_front_page_body_class($classes) {
    if (is_front_page()) {
        $classes[] = 'onfield-front-page';
    }
    return $classes;
}

// Preload hero images for better performance
add_action('wp_head', 'onfield_preload_hero_images');
function onfield_preload_hero_images() {
    if (is_front_page()) {
        $hero_image = get_stylesheet_directory_uri() . '/assets/images/hero/hero-tax-professional.png';
        $cta_image = get_stylesheet_directory_uri() . '/assets/images/components/cta-form-section.png';
        ?>
        <link rel="preload" as="image" href="<?php echo esc_url($hero_image); ?>">
        <link rel="preload" as="image" href="<?php echo esc_url($cta_image); ?>">
        <?php
    }
}

// Enqueue About Us page specific styles and scripts
add_action('wp_enqueue_scripts', 'onfield_enqueue_about_page_assets');
function onfield_enqueue_about_page_assets() {
    
    // Only load on About Us page template
    if (is_page_template('templates/about-us.php')) {
        
        // No external dependencies needed for static design
        
        // Enqueue About Us CSS
        wp_enqueue_style(
            'onfield-about',
            get_stylesheet_directory_uri() . '/assets/css/about-us.css',
            array('generate-style'),
            '1.0.0'
        );
        
        
        // Enqueue About Us JavaScript (no animations)
        wp_enqueue_script(
            'onfield-about',
            get_stylesheet_directory_uri() . '/assets/js/about-us.js',
            array('jquery'),
            '1.0.0',
            true
        );
    }
}

// Remove GeneratePress elements on About Us page
add_action('wp', 'onfield_remove_about_page_elements');
function onfield_remove_about_page_elements() {
    if (is_page_template('templates/about-us.php')) {
        // Remove page title
        add_filter('generate_show_title', '__return_false');
        
        // Remove featured image
        remove_action('generate_before_content', 'generate_featured_page_header_inside_single', 10);
        remove_action('generate_after_header', 'generate_featured_page_header', 10);
        
        // Remove sidebar
        add_filter('generate_sidebar_layout', function() {
            return 'no-sidebar';
        });
        
        // Add custom body class
        add_filter('body_class', function($classes) {
            $classes[] = 'onfield-about-page';
            return $classes;
        });
    }
}

// Enqueue Tax Services page specific styles and scripts
add_action('wp_enqueue_scripts', 'onfield_enqueue_tax_services_assets');
function onfield_enqueue_tax_services_assets() {
    
    // Only load on Tax Services page template
    if (is_page_template('templates/tax-services.php')) {
        
        // Enqueue Swiper CSS
        wp_enqueue_style(
            'swiper',
            get_stylesheet_directory_uri() . '/assets/js/vendors/Swiper/swiper-bundle.min.css',
            array(),
            '8.4.7'
        );
        
        // Enqueue Tax Services CSS
        wp_enqueue_style(
            'onfield-tax-services',
            get_stylesheet_directory_uri() . '/assets/css/tax-services.css',
            array('generate-style'),
            '1.0.0'
        );
        
        // Enqueue Swiper JS
        wp_enqueue_script(
            'swiper',
            get_stylesheet_directory_uri() . '/assets/js/vendors/Swiper/swiper-bundle.min.js',
            array(),
            '8.4.7',
            true
        );
        
        // Enqueue Tax Services JavaScript
        wp_enqueue_script(
            'onfield-tax-services',
            get_stylesheet_directory_uri() . '/assets/js/tax-services.js',
            array('jquery', 'swiper'),
            '1.0.0',
            true
        );
    }
    
    // Only load on Tax Consulting page template
    if (is_page_template('templates/tax-consulting.php')) {
        
        // Enqueue Swiper CSS
        wp_enqueue_style(
            'swiper',
            get_stylesheet_directory_uri() . '/assets/js/vendors/Swiper/swiper-bundle.min.css',
            array(),
            '8.4.7'
        );
        
        // Enqueue Tax Consulting CSS
        wp_enqueue_style(
            'onfield-tax-consulting',
            get_stylesheet_directory_uri() . '/assets/css/tax-consulting.css',
            array('generate-style'),
            '1.0.0'
        );
        
        // Enqueue Swiper JS
        wp_enqueue_script(
            'swiper',
            get_stylesheet_directory_uri() . '/assets/js/vendors/Swiper/swiper-bundle.min.js',
            array(),
            '8.4.7',
            true
        );
        
        // Enqueue Tax Consulting JavaScript
        wp_enqueue_script(
            'onfield-tax-consulting',
            get_stylesheet_directory_uri() . '/assets/js/tax-consulting.js',
            array('jquery', 'swiper', 'gsap', 'gsap-scroll-trigger'),
            '1.0.0',
            true
        );
    }
}

// Remove GeneratePress elements on Tax Services page
add_action('wp', 'onfield_remove_tax_services_page_elements');
function onfield_remove_tax_services_page_elements() {
    if (is_page_template('templates/tax-services.php')) {
        // Remove page title
        add_filter('generate_show_title', '__return_false');
        
        // Remove featured image
        remove_action('generate_before_content', 'generate_featured_page_header_inside_single', 10);
        remove_action('generate_after_header', 'generate_featured_page_header', 10);
        
        // Remove sidebar
        add_filter('generate_sidebar_layout', function() {
            return 'no-sidebar';
        });
        
        // Add custom body class
        add_filter('body_class', function($classes) {
            $classes[] = 'onfield-tax-services-page';
            return $classes;
        });
    }
}