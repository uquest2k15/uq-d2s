<?php
/**
 * GeneratePress D2S v1 System Integration
 * 
 * This file contains all D2S v1 system functionality
 * Include this file in your child theme's functions.php
 * 
 * @package GeneratePress Child
 * @subpackage D2S_v1
 * @version 1.0.0
 * @path /themes/generatepress_child/includes/gp-d2s-v1.php
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
define('D2S_VERSION', '1.0');
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
    
    // D2S v1 Common CSS
    wp_enqueue_style(
        'd2s-v1-common',
        D2S_SYSTEM_URL . '/common/d2s-v1-common.css',
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
        error_log('D2S Common CSS URL: ' . D2S_SYSTEM_URL . '/common/d2s-v1-common.css');
        error_log('D2S Common CSS Path: ' . D2S_SYSTEM_PATH . '/common/d2s-v1-common.css');
        error_log('File exists: ' . (file_exists(D2S_SYSTEM_PATH . '/common/d2s-v1-common.css') ? 'YES' : 'NO'));
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
    
    // Check if it's a D2S template (starts with 'page-')
    if (!empty($template) && strpos($template, 'page-') === 0) {
        // Add D2S system classes
        $classes[] = 'd2s-v1-template';
        $classes[] = 'd2s-template';
        
        // Add specific template class
        $template_name = str_replace('.php', '', $template);
        $classes[] = 'page-template-' . $template_name;
        
        // Add page slug class for more specific targeting
        if (is_page()) {
            global $post;
            if (isset($post->post_name)) {
                $classes[] = 'd2s-page-' . $post->post_name;
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
    // Check for templates in both root and templates directory
    return !empty($template) && (strpos($template, 'page-') === 0 || strpos($template, 'templates/page-') === 0);
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
    
    // Remove 'templates/' prefix if present
    $template_file = str_replace('templates/', '', $template_file);
    
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
    
    $page_path = D2S_SYSTEM_URL . '/pages/' . $page_name . '/';
    $page_dir = D2S_SYSTEM_PATH . '/pages/' . $page_name . '/';
    
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
            
            // Localize script with useful data
            wp_localize_script('d2s-' . $page_name, 'd2s_' . str_replace('-', '_', $page_name), array(
                'ajax_url' => admin_url('admin-ajax.php'),
                'page_url' => $page_path,
                'image_url' => $page_path . 'images/',
                'nonce' => wp_create_nonce('d2s_' . $page_name)
            ));
        }
    }
}

// ============================================================================
// D2S v1 Image Helper Functions
// ============================================================================

/**
 * Get D2S page image URL
 * 
 * @param string $page_name Page name
 * @param string $image_file Image filename
 * @return string Image URL
 * 
 * Usage: $hero_url = gp_d2s_get_image_url('about-us', 'hero-bg.jpg');
 */
function gp_d2s_get_image_url($page_name, $image_file) {
    return D2S_SYSTEM_URL . '/pages/' . $page_name . '/images/' . $image_file;
}

/**
 * Output D2S page image URL
 * 
 * @param string $page_name Page name
 * @param string $image_file Image filename
 * @return void
 * 
 * Usage: <img src="<?php gp_d2s_image_url('about-us', 'team.jpg'); ?>" alt="">
 */
function gp_d2s_image_url($page_name, $image_file) {
    echo esc_url(gp_d2s_get_image_url($page_name, $image_file));
}

// ============================================================================
// D2S v1 Development Helpers (Remove in Production)
// ============================================================================

/**
 * Show D2S debug info in admin bar (Development only)
 */
if (defined('WP_DEBUG') && WP_DEBUG) {
    add_action('admin_bar_menu', 'gp_d2s_v1_add_debug_info', 999);
    function gp_d2s_v1_add_debug_info($admin_bar) {
        if (!gp_is_d2s_v1_template()) {
            return;
        }
        
        $template_name = gp_get_d2s_template_name();
        
        $admin_bar->add_node(array(
            'id'    => 'd2s-debug',
            'title' => sprintf('D2S v%s: %s', D2S_MAJOR_VERSION, $template_name),
            'meta'  => array(
                'title' => 'Template: ' . get_page_template_slug(),
            ),
        ));
    }
    
    // Add template hints in HTML comments
    add_action('wp_head', 'gp_d2s_v1_template_hints');
    function gp_d2s_v1_template_hints() {
        if (!gp_is_d2s_v1_template()) {
            return;
        }
        
        echo "\n<!-- D2S v1 System Active -->\n";
        echo "<!-- Template: " . esc_html(get_page_template_slug()) . " -->\n";
        echo "<!-- D2S Version: " . esc_html(D2S_VERSION) . " -->\n";
        echo "<!-- Page Name: " . esc_html(gp_get_d2s_template_name()) . " -->\n";
        echo "<!-- GP Global Colors: base-3 (white), base-2 (light), base (dark bg), contrast (text) -->\n";
        
        // Debug: Show enqueued D2S styles
        global $wp_styles;
        echo "<!-- D2S Enqueued Styles:\n";
        foreach ($wp_styles->queue as $handle) {
            if (strpos($handle, 'd2s-') === 0) {
                $src = $wp_styles->registered[$handle]->src;
                echo "     - $handle: $src\n";
            }
        }
        echo "-->\n\n";
    }
}

// ============================================================================
// D2S v1 Admin Notices
// ============================================================================

/**
 * Show D2S system status in admin area
 */
add_action('admin_notices', 'gp_d2s_v1_admin_notices');
function gp_d2s_v1_admin_notices() {
    // Only show on Pages screen
    $screen = get_current_screen();
    if (!$screen || $screen->id !== 'edit-page') {
        return;
    }
    
    // Check if D2S system exists
    if (!file_exists(D2S_SYSTEM_PATH)) {
        echo '<div class="notice notice-warning is-dismissible">';
        echo '<p><strong>D2S v1 System:</strong> ';
        echo sprintf(
            'System directory not found. Please create: <code>%s</code>',
            '/wp-content/themes/generatepress_child/d2s-v1/'
        );
        echo '</p>';
        echo '</div>';
        return;
    }
    
    // Check if common CSS exists
    $common_css = D2S_SYSTEM_PATH . '/common/d2s-v1-common.css';
    if (!file_exists($common_css)) {
        echo '<div class="notice notice-warning is-dismissible">';
        echo '<p><strong>D2S v1 System:</strong> ';
        echo sprintf(
            'Common CSS not found. Please add: <code>%s</code>',
            'd2s-v1-common.css'
        );
        echo '</p>';
        echo '</div>';
    }
}

// ============================================================================
// D2S v1 Color System Info
// ============================================================================

/**
 * Get GeneratePress color information for D2S templates
 * 
 * @return array Color information
 */
function gp_d2s_get_color_info() {
    $colors = array(
        'contrast' => 'Strongest text color',
        'contrast-2' => 'Lighter text color',
        'contrast-3' => 'Lightest text/border color',
        'base' => 'Dark background (text still readable)',
        'base-2' => 'Lighter background',
        'base-3' => 'Lightest background (usually white)',
        'accent' => 'Main branding color'
    );
    
    return $colors;
}

// ============================================================================
// Initialize D2S v1 System
// ============================================================================

/**
 * Run initialization checks
 */
add_action('init', 'gp_d2s_v1_init');
function gp_d2s_v1_init() {
    // Create D2S directories if they don't exist
    $dirs = array(
        D2S_SYSTEM_PATH,
        D2S_SYSTEM_PATH . '/common',
        D2S_SYSTEM_PATH . '/pages',
        D2S_SYSTEM_PATH . '/docs'
    );
    
    foreach ($dirs as $dir) {
        if (!file_exists($dir)) {
            wp_mkdir_p($dir);
        }
    }
}

// Debug: Check if styles are properly registered
add_action('wp_print_styles', 'gp_d2s_v1_debug_styles', 999);
function gp_d2s_v1_debug_styles() {
    if (!gp_is_d2s_v1_template() || !defined('WP_DEBUG') || !WP_DEBUG) {
        return;
    }
    
    global $wp_styles;
    
    // Check if our styles are registered
    $d2s_styles = array('d2s-v1-common', 'd2s-tax-consulting');
    
    foreach ($d2s_styles as $handle) {
        if (isset($wp_styles->registered[$handle])) {
            $style = $wp_styles->registered[$handle];
            error_log("D2S Style Registered - $handle: " . $style->src);
            error_log("D2S Style in queue: " . (in_array($handle, $wp_styles->queue) ? 'YES' : 'NO'));
            error_log("D2S Style dependencies: " . implode(', ', $style->deps));
            
            // Check if dependencies exist
            foreach ($style->deps as $dep) {
                if (!isset($wp_styles->registered[$dep])) {
                    error_log("D2S Style Missing Dependency: $dep for $handle");
                }
            }
        } else {
            error_log("D2S Style NOT REGISTERED: $handle");
        }
    }
}

// Force enqueue styles just before output
add_action('wp_head', 'gp_d2s_v1_force_styles', 5);
function gp_d2s_v1_force_styles() {
    if (!gp_is_d2s_v1_template()) {
        return;
    }
    
    // Re-enqueue our styles to ensure they're output
    wp_enqueue_style('d2s-v1-common');
    
    $template_name = gp_get_d2s_template_name();
    if ($template_name) {
        wp_enqueue_style('d2s-' . $template_name);
    }
}

// ============================================================================
// Example Template Code (for reference)
// ============================================================================

/**
 * Example usage in a D2S page template:
 * 
 * <?php
 * // In page-about-us.php:
 * 
 * // Enqueue page assets
 * add_action('wp_enqueue_scripts', function() {
 *     gp_d2s_enqueue_page_assets('about-us', true); // true = has JS
 * }, 20);
 * 
 * // For images in template:
 * <img src="<?php gp_d2s_image_url('about-us', 'team-photo.jpg'); ?>" alt="Our Team">
 * 
 * // For background images:
 * <div class="d2s-hero" style="background-image: url('<?php gp_d2s_image_url('about-us', 'hero-bg.jpg'); ?>');">
 * ?>
 */