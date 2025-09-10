<?php
/**
 * GeneratePress D2S v1 System Integration
 * 
 * This file contains all D2S v1 system functionality
 * Include this file in your child theme's functions.php
 * 
 * @package GeneratePress Child
 * @subpackage D2S_v1
 * @version 1.0.1
 * @path /themes/generatepress_child/d2s-v1/includes/gp-d2s-v1.php
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// ============================================================================
// D2S v1 System Configuration
// ============================================================================

/**
 * Define D2S System Constants
 */
define('D2S_VERSION', '1.0.1');
define('D2S_MAJOR_VERSION', '1');
define('D2S_SYSTEM_PATH', get_stylesheet_directory() . '/d2s-v' . D2S_MAJOR_VERSION);
define('D2S_SYSTEM_URL', get_stylesheet_directory_uri() . '/d2s-v' . D2S_MAJOR_VERSION);

// ============================================================================
// Enqueue D2S v1 Common Styles
// ============================================================================

/**
 * Load D2S v1 Common CSS on all pages
 * This contains all the shared classes used across D2S templates
 */
add_action('wp_enqueue_scripts', 'gp_d2s_v1_enqueue_common_styles', 98);
function gp_d2s_v1_enqueue_common_styles() {
    // Only load if child theme is active
    if (!is_child_theme()) {
        return;
    }
    
    // D2S v1 Common CSS - Updated path to common-assets
    wp_enqueue_style(
        'd2s-v1-common',
        D2S_SYSTEM_URL . '/common-assets/css/d2s-v1-common.css',
        array(), // No dependencies for now
        D2S_VERSION,
        'all'
    );
    
    // Sync container width with GeneratePress settings
    $settings = wp_parse_args(
        get_option('generate_settings', array()),
        generate_get_defaults()
    );
    
    $container_width = $settings['container_width'] ?? 1200;
    
    $inline_css = sprintf(
        ':root { --d2s-container-width: %spx; }',
        esc_attr($container_width)
    );
    
    wp_add_inline_style('d2s-v1-common', $inline_css);
    
    // Debug: Log the CSS URL being generated
    if (defined('WP_DEBUG') && WP_DEBUG) {
        error_log('D2S Common CSS URL: ' . D2S_SYSTEM_URL . '/common-assets/css/d2s-v1-common.css');
        error_log('D2S Common CSS Path: ' . D2S_SYSTEM_PATH . '/common-assets/css/d2s-v1-common.css');
        error_log('File exists: ' . (file_exists(D2S_SYSTEM_PATH . '/common-assets/css/d2s-v1-common.css') ? 'YES' : 'NO'));
    }
}

// ============================================================================
// D2S v1 Body Classes
// ============================================================================

/**
 * Add D2S specific body classes for better CSS targeting
 */
add_filter('body_class', 'gp_d2s_v1_body_classes');
function gp_d2s_v1_body_classes($classes) {
    $template = get_page_template_slug();
    
    // Check if it's a D2S template (in d2s-v1/page-templates/ or starts with 'page-')
    if (!empty($template)) {
        if (strpos($template, 'd2s-v1/page-templates/') === 0 || strpos($template, 'page-') === 0) {
            // Add D2S system classes
            $classes[] = 'd2s-v1-template';
            $classes[] = 'd2s-template';
            
            // Add specific template class
            $template_name = str_replace(array('d2s-v1/page-templates/', '.php'), '', $template);
            $classes[] = 'page-template-' . $template_name;
            
            // Add page slug class for more specific targeting
            if (is_page()) {
                global $post;
                if (isset($post->post_name)) {
                    $classes[] = 'd2s-page-' . $post->post_name;
                }
            }
        }
    }
    
    return $classes;
}

// ============================================================================
// D2S v1 Template Detection
// ============================================================================

/**
 * Helper function to check if current page uses D2S template
 * 
 * @return bool
 */
function gp_is_d2s_v1_template() {
    $template = get_page_template_slug();
    // Check for templates in both locations
    return !empty($template) && (
        strpos($template, 'd2s-v1/page-templates/') === 0 || 
        strpos($template, 'page-') === 0 || 
        strpos($template, 'templates/page-') === 0
    );
}

/**
 * Get D2S template name from filename
 * 
 * @param string|null $template_file Template filename
 * @return string|false Template name or false if not found
 */
function gp_get_d2s_template_name($template_file = null) {
    if (!$template_file) {
        $template_file = get_page_template_slug();
    }
    
    if (empty($template_file)) {
        return false;
    }
    
    // Remove path prefixes
    $template_file = str_replace(array('d2s-v1/page-templates/', 'templates/'), '', $template_file);
    
    // Extract name from 'page-{name}.php'
    preg_match('/page-(.+)\.php/', $template_file, $matches);
    return isset($matches[1]) ? $matches[1] : false;
}

// ============================================================================
// D2S v1 Asset Loading Helper
// ============================================================================

/**
 * Helper function to enqueue D2S page-specific assets
 * Call this from your page template file
 * 
 * @param string $page_name Page name (e.g., 'about-us')
 * @param bool $has_js Whether the page has a JS file
 * @return void
 * 
 * Usage: gp_d2s_enqueue_page_assets('about-us', true);
 */
function gp_d2s_enqueue_page_assets($page_name, $has_js = false) {
    if (empty($page_name)) {
        return;
    }
    
    // Updated path to page-assets instead of pages
    $page_path = D2S_SYSTEM_URL . '/page-assets/' . $page_name . '/';
    $page_dir = D2S_SYSTEM_PATH . '/page-assets/' . $page_name . '/';
    
    // Enqueue page-specific CSS
    $css_file = $page_name . '.css';
    if (file_exists($page_dir . $css_file)) {
        wp_enqueue_style(
            'd2s-' . $page_name,
            $page_path . $css_file,
            array('d2s-v1-common'),
            D2S_VERSION
        );
        
        // Debug: Log the page CSS being loaded
        if (defined('WP_DEBUG') && WP_DEBUG) {
            error_log('D2S Page CSS enqueued: ' . $page_name);
            error_log('D2S Page CSS URL: ' . $page_path . $css_file);
            error_log('D2S Page CSS Path: ' . $page_dir . $css_file);
        }
    } else {
        // Debug: Log if file not found
        if (defined('WP_DEBUG') && WP_DEBUG) {
            error_log('D2S Page CSS NOT FOUND: ' . $page_dir . $css_file);
        }
    }
    
    // Enqueue page-specific JS if requested and exists
    if ($has_js) {
        $js_file = $page_name . '.js';
        if (file_exists($page_dir . $js_file)) {
            wp_enqueue_script(
                'd2s-' . $page_name,
                $page_path . $js_file,
                array('jquery'),
                D2S_VERSION,
                true
            );
            
            // Debug: Log the page JS being loaded
            if (defined('WP_DEBUG') && WP_DEBUG) {
                error_log('D2S Page JS enqueued: ' . $page_name);
                error_log('D2S Page JS URL: ' . $page_path . $js_file);
            }
        } else {
            // Debug: Log if file not found
            if (defined('WP_DEBUG') && WP_DEBUG) {
                error_log('D2S Page JS NOT FOUND: ' . $page_dir . $js_file);
            }
        }
    }
}

// ============================================================================
// D2S v1 Image URL Helper
// ============================================================================

/**
 * Get D2S page-specific image URL
 * 
 * @param string $page_name Page name
 * @param string $image_file Image filename
 * @return string Full URL to the image
 * 
 * Usage: gp_d2s_image_url('about-us', 'hero-bg.jpg')
 */
function gp_d2s_image_url($page_name, $image_file) {
    return D2S_SYSTEM_URL . '/page-assets/' . $page_name . '/images/' . $image_file;
}

/**
 * Get D2S common image URL
 * 
 * @param string $image_file Image filename (can include subdirectory)
 * @return string Full URL to the image
 * 
 * Usage: gp_d2s_common_image_url('symbol/solid-circled-check.svg')
 */
function gp_d2s_common_image_url($image_file) {
    return D2S_SYSTEM_URL . '/common-assets/images/' . $image_file;
}

// ============================================================================
// D2S v1 Template Path Helpers
// ============================================================================

/**
 * Get the correct template path for D2S templates
 * 
 * @param string $template_name Template name without path
 * @return string Full template path
 */
function gp_d2s_get_template_path($template_name) {
    // Check if template exists in d2s-v1/page-templates/
    $d2s_template = get_stylesheet_directory() . '/d2s-v1/page-templates/' . $template_name;
    if (file_exists($d2s_template)) {
        return $d2s_template;
    }
    
    // Fallback to regular templates directory
    $regular_template = get_stylesheet_directory() . '/templates/' . $template_name;
    if (file_exists($regular_template)) {
        return $regular_template;
    }
    
    return false;
}

// ============================================================================
// D2S v1 Common JavaScript
// ============================================================================

/**
 * Enqueue D2S v1 Common JavaScript if it exists
 */
add_action('wp_enqueue_scripts', 'gp_d2s_v1_enqueue_common_scripts', 99);
function gp_d2s_v1_enqueue_common_scripts() {
    // Only on D2S templates
    if (!gp_is_d2s_v1_template()) {
        return;
    }
    
    $common_js_path = D2S_SYSTEM_PATH . '/common-assets/js/d2s-v1-common.js';
    if (file_exists($common_js_path)) {
        wp_enqueue_script(
            'd2s-v1-common',
            D2S_SYSTEM_URL . '/common-assets/js/d2s-v1-common.js',
            array('jquery'),
            D2S_VERSION,
            true
        );
    }
}

// ============================================================================
// D2S v1 Admin Notices
// ============================================================================

/**
 * Show admin notice if D2S common CSS is missing
 */
add_action('admin_notices', 'gp_d2s_v1_admin_notices');
function gp_d2s_v1_admin_notices() {
    $common_css_path = D2S_SYSTEM_PATH . '/common-assets/css/d2s-v1-common.css';
    
    if (!file_exists($common_css_path)) {
        ?>
        <div class="notice notice-warning">
            <p><strong>D2S v1 System:</strong> Common CSS file is missing at <code><?php echo esc_html('/d2s-v1/common-assets/css/d2s-v1-common.css'); ?></code>. Please upload the file to enable D2S styling.</p>
        </div>
        <?php
    }
}

// ============================================================================
// D2S v1 Template Loader Filter
// ============================================================================

/**
 * Ensure WordPress can locate D2S templates in the new directory
 */
add_filter('template_include', 'gp_d2s_v1_template_include', 99);
function gp_d2s_v1_template_include($template) {
    if (is_page()) {
        $page_template = get_page_template_slug();
        
        // Check if it's a D2S template in the new location
        if (!empty($page_template) && strpos($page_template, 'd2s-v1/page-templates/') === 0) {
            $new_template = get_stylesheet_directory() . '/' . $page_template;
            if (file_exists($new_template)) {
                return $new_template;
            }
        }
    }
    
    return $template;
}

// ============================================================================
// End of D2S v1 System Integration
// ============================================================================