<?php
// WPL Summit Child Theme Functions

add_action( 'wp_enqueue_scripts', 'wpl_summit_enqueue_styles' );
function wpl_summit_enqueue_styles() {
    // Parent style
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
    // Child style
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
    
    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap' );
    
    // Custom JS
    wp_enqueue_script( 'wpl-custom', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0', true );
    
    // AJAX URL for WordPress
    wp_localize_script( 'wpl-custom', 'wpl_ajax', array(
        'ajax_url' => admin_url( 'admin-ajax.php' )
    ));
}

// Add theme support
add_action( 'after_setup_theme', 'wpl_summit_theme_setup' );
function wpl_summit_theme_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'customize-selective-refresh-widgets' );
    
    // Register navigation menus
    register_nav_menus( array(
        'primary-menu' => 'Primary Menu',
        'footer-menu' => 'Footer Menu',
    ) );
}

// Register widget areas
add_action( 'widgets_init', 'wpl_summit_widgets_init' );
function wpl_summit_widgets_init() {
    register_sidebar( array(
        'name'          => 'Blog Sidebar',
        'id'            => 'sidebar-1',
        'description'   => 'Add widgets here to appear in your blog sidebar.',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => 'Footer Widget 1',
        'id'            => 'footer-1',
        'description'   => 'Add widgets here for the first footer column.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}

// Include custom functions
require_once get_stylesheet_directory() . '/inc/custom-post-types.php';
require_once get_stylesheet_directory() . '/inc/data-integration.php';
require_once get_stylesheet_directory() . '/inc/demo-content-installer.php';

// Custom excerpt length
function wpl_custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'wpl_custom_excerpt_length', 999 );

// Add custom image sizes
add_image_size( 'speaker-thumbnail', 400, 400, true );
add_image_size( 'hero-background', 1920, 800, true );

// Remove paragraph tags from category description
remove_filter('term_description','wpautop');
?>
