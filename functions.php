<?php
define('LNX_LIBS_URI', get_template_directory_uri() . '/libs/');
define('LNX_CORE_PATH', get_template_directory() . '/core/');
define('LNX_CORE_URI', get_template_directory_uri() . '/core/');
define('LNX_ASSETS_URI', get_template_directory_uri() . '/assets/');
define('LNX_CORE_CLASSES', LNX_CORE_PATH . 'classes/');
define('LNX_CORE_FUNCTIONS', LNX_CORE_PATH . 'functions/');
define('LNX_CORE_WIDGETS', LNX_CORE_PATH . 'widgets/');
define('LNX_TEXT_DOMAIN', 'kemtech');

// Set content width
if (!isset( $content_width ) ) { $content_width = 1170; }

// Theme setup
add_action('after_setup_theme', 'lnx_setup');
function lnx_setup() {
    load_theme_textdomain( LNX_TEXT_DOMAIN, get_template_directory() . '/languages' );
    add_theme_support('woocommerce');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_image_size(LNX_TEXT_DOMAIN . '-fullwidth', 1170, 0, true);
    register_nav_menus(
        array(
            'primary' => esc_html__('Primary Menu', LNX_TEXT_DOMAIN),
            'topbar'  => esc_html__('Topbar Menu', LNX_TEXT_DOMAIN)
        )
    );
    add_theme_support('post-formats', array('video', 'audio', 'gallery'));
}

// Register & Enqueue Styles and Scripts
add_action('wp_enqueue_scripts', 'lnx_load_scripts');
function lnx_load_scripts() {

    //CSS
    wp_enqueue_style('lnx_bootstrap', LNX_LIBS_URI . 'bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('lnx_font-awesome', LNX_LIBS_URI . 'font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('lnx_pt_sans', 'https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i');
    wp_enqueue_style('lnx_theme_style', get_stylesheet_directory_uri() . '/style.css');

    //JS
    wp_enqueue_script('lnx_bootstrap_scripts', LNX_LIBS_URI . 'bootstrap/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script('lnx_scripts', LNX_ASSETS_URI . 'js/nrw-scripts.js', array(), false, true);

    if ( is_singular() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script('comment-reply');
    }
}

function lnx_require_file( $path ) {
    if ( file_exists($path) ) {
        require $path;
    }
}

// Require core files
lnx_require_file( get_template_directory() . '/core/init.php' );

// Include the TGM_Plugin_Activation class
add_action('tgmpa_register', 'lnx_register_required_plugins');

function lnx_register_required_plugins() {
    $plugins = array(
        // Install from external source or directory
        array(
            'name'     				=> esc_html__('Backup Buddy', LNX_TEXT_DOMAIN),
            'slug'     				=> 'backupbuddy',
            'source' 			    => esc_url(get_template_directory() . '/plugins/backupbuddy-7.2.2.0.zip'),
            'force_activation' 		=> false,
            'required' 				=> true,
            'force_deactivation' 	=> false,
            'version' 				=> '7.2.2.0'
        ),
        array(
            'name'     				=> esc_html__('Formidable Pro', LNX_TEXT_DOMAIN),
            'slug'     				=> 'formidable',
            'source' 			    => esc_url(get_template_directory() . '/plugins/formidable-pro-2.02.13.zip'),
            'force_activation' 		=> false,
            'required' 				=> true,
            'force_deactivation' 	=> false,
            'version' 				=> '2.02.13'
        ),
        // Install from WordPress.org
        array(
            'name'     				=> 'Wordfence Security',
            'slug'     				=> 'wordfence',
            'required' 				=> true,
            'force_activation' 		=> false,
            'force_deactivation' 	=> false,
            'external_url' 			=> ''
        ),
        array(
            'name'     				=> 'Disable Comments',
            'slug'     				=> 'disable-comments',
            'required' 				=> true,
            'force_activation' 		=> false,
            'force_deactivation' 	=> false,
            'external_url' 			=> ''
        ),
        array(
            'name'     				=> 'All in One SEO Pack',
            'slug'     				=> 'all-in-one-seo-pack',
            'required' 				=> true,
            'force_activation' 		=> false,
            'force_deactivation' 	=> false,
            'external_url' 			=> ''
        ),
        array(
            'name'     				=> 'WP Statistics',
            'slug'     				=> 'wp-statistics',
            'required' 				=> true,
            'force_activation' 		=> false,
            'force_deactivation' 	=> false,
            'external_url' 			=> ''
        )
    );
    $config = array(
        'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => true,                    // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to out
    );
    tgmpa($plugins, $config);
}

/**
 * Blog layout settings
 */
function lnx_blog_config()
{
    if ( is_home() )
    {
        $lnx_blog_layout       = get_theme_mod('lnx_blog_layout', 'standard');
        $lnx_disable_sidebar   = get_theme_mod('lnx_hompage_disable_sidebar');

        if ( isset($_REQUEST['layout']) && trim($_REQUEST['layout']) != '' ) {
            $lnx_blog_layout = trim($_REQUEST['layout']);
        }
    }
    elseif ( is_single() )
    {
        $lnx_disable_sidebar   = get_theme_mod('lnx_single_post_disable_sidebar');
        $lnx_blog_layout       = null;
    }
    else
    {
        $lnx_blog_layout       = get_theme_mod('lnx_archive_layout', 'standard');
        $lnx_disable_sidebar   = get_theme_mod('lnx_archive_disable_sidebar');
    }

    if ( isset($_REQUEST['sidebar']) && trim($_REQUEST['sidebar']) == 'no' ) {
        $lnx_disable_sidebar = true;
    }

    if ( $lnx_blog_layout == '3col_grid' ) $lnx_disable_sidebar = true;

    if ( $lnx_disable_sidebar ) {
        $lnx_blog_column = 12;
        $lnx_blog_column_sm  = 12;
    } else {
        $lnx_blog_column  = 9;
        $lnx_blog_column_sm = 8;
    }

    $lnx_blog = array();
    $lnx_blog['layout']            = $lnx_blog_layout;
    $lnx_blog['disable_sidebar']   = $lnx_disable_sidebar;
    $lnx_blog['column']            = $lnx_blog_column;
    $lnx_blog['column_sm']         = $lnx_blog_column_sm;


    return $lnx_blog;
}
