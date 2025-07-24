<?php
/**
 * Plugin Name: OnField
 * Plugin URI: https://aigrowthclub.kr/
 * Description: OnField WordPress Plugin
 * Version: 1.0.0
 * Author: AIGrowthClub.kr
 * Author URI: https://aigrowthclub.kr/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: onfield
 * Domain Path: /languages
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants
define('ONFIELD_VERSION', '1.0.0');
define('ONFIELD_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('ONFIELD_PLUGIN_URL', plugin_dir_url(__FILE__));
define('ONFIELD_PLUGIN_BASENAME', plugin_basename(__FILE__));

/**
 * Main OnField Class
 */
class OnField {
    
    /**
     * The single instance of the class
     */
    private static $instance = null;
    
    /**
     * Main OnField Instance
     */
    public static function instance() {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    /**
     * Constructor
     */
    public function __construct() {
        $this->init_hooks();
    }
    
    /**
     * Hook into actions and filters
     */
    private function init_hooks() {
        // Init hook
        add_action('init', array($this, 'init'));
        
        // Enqueue scripts and styles
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
        add_action('admin_enqueue_scripts', array($this, 'admin_enqueue_scripts'));
        
        // Plugin activation/deactivation hooks
        register_activation_hook(__FILE__, array($this, 'activate'));
        register_deactivation_hook(__FILE__, array($this, 'deactivate'));

        
        // Gravity Forms가 로드된 후 관련 기능 포함
        add_action('gform_loaded', array($this, 'include_gravityforms_features'));
    }
    
    /**
     * Init OnField when WordPress initializes
     */
    public function init() {
        // Load plugin textdomain
        load_plugin_textdomain('onfield', false, dirname(ONFIELD_PLUGIN_BASENAME) . '/languages');
        
        // Initialize plugin features here
    }
    
    /**
     * Enqueue frontend scripts and styles
     */
    public function enqueue_scripts() {
        // Enqueue CSS
        wp_enqueue_style(
            'onfield-style',
            ONFIELD_PLUGIN_URL . 'assets/css/onfield.css',
            array(),
            ONFIELD_VERSION
        );
        
        // Enqueue JavaScript
        wp_enqueue_script(
            'onfield-script',
            ONFIELD_PLUGIN_URL . 'assets/js/onfield.js',
            array('jquery'),
            ONFIELD_VERSION,
            true
        );
        
        // Localize script
        wp_localize_script('onfield-script', 'onfield_ajax', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('onfield-nonce')
        ));
    }
    
    /**
     * Enqueue admin scripts and styles
     */
    public function admin_enqueue_scripts($hook) {
        // Only load on specific admin pages if needed
        // if ('toplevel_page_onfield' !== $hook) {
        //     return;
        // }
        
        // Enqueue admin CSS
        wp_enqueue_style(
            'onfield-admin-style',
            ONFIELD_PLUGIN_URL . 'assets/css/onfield-admin.css',
            array(),
            ONFIELD_VERSION
        );
        
        // Enqueue admin JavaScript
        wp_enqueue_script(
            'onfield-admin-script',
            ONFIELD_PLUGIN_URL . 'assets/js/onfield-admin.js',
            array('jquery'),
            ONFIELD_VERSION,
            true
        );
    }
    
    /**
     * Plugin activation
     */
    public function activate() {
        // Create database tables or set default options
        flush_rewrite_rules();
    }
    
    /**
     * Plugin deactivation
     */
    public function deactivate() {
        // Cleanup tasks
        flush_rewrite_rules();
    }

    /**
     * Gravity Forms 관련 기능을 포함합니다.
     * 이 메소드는 'gform_loaded' 훅에 의해 호출되므로,
     * Gravity Forms가 활성화된 경우에만 실행됩니다.
     */
    public function include_gravityforms_features() {
        require_once ONFIELD_PLUGIN_DIR . 'includes/uq-gf-general.php';
    }
}

/**
 * Main instance of OnField
 */
function OnField() {
    return OnField::instance();
}

// Initialize the plugin
OnField();