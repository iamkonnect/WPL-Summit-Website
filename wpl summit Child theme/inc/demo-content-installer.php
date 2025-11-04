<?php
/**
 * WPL Summit Demo Content Installer
 * This script creates demo content similar to TAS Guinea website
 */

function wpl_install_demo_content() {
    
    // Create demo pages
    $pages = array(
        'Home' => array(
            'template' => 'homepage-template.php',
            'content' => ''
        ),
        'About' => array(
            'template' => 'page.php',
            'content' => 'Learn more about the WPL Summit and our mission to advance women in political leadership globally.'
        ),
        'Speakers' => array(
            'template' => 'speakers.php',
            'content' => 'Meet the distinguished speakers and leaders participating in WPL Summit 2024.'
        ),
        'Agenda' => array(
            'template' => 'page.php',
            'content' => 'View the complete schedule and sessions for WPL Summit 2024.'
        ),
        'Sponsors' => array(
            'template' => 'page.php',
            'content' => 'Our valued sponsors and partners who make WPL Summit possible.'
        ),
        'News' => array(
            'template' => 'page.php',
            'content' => 'Latest updates and announcements about WPL Summit 2024.'
        ),
        'Contact' => array(
            'template' => 'page.php',
            'content' => 'Get in touch with the WPL Summit organizing team.'
        ),
        'Register' => array(
            'template' => 'page.php',
            'content' => 'Register now to secure your spot at WPL Summit 2024.'
        )
    );
    
    foreach ($pages as $page_title => $page_data) {
        $page_check = get_page_by_title($page_title);
        if (!isset($page_check->ID)) {
            $page_id = wp_insert_post(array(
                'post_title' => $page_title,
                'post_content' => $page_data['content'],
                'post_status' => 'publish',
                'post_type' => 'page',
                'page_template' => $page_data['template']
            ));
        }
    }
    
    // Set homepage
    $homepage = get_page_by_title('Home');
    if ($homepage) {
        update_option('page_on_front', $homepage->ID);
        update_option('show_on_front', 'page');
    }
    
    // Create navigation menus
    $menu_name = 'Primary Menu';
    $menu_exists = wp_get_nav_menu_object($menu_name);
    
    if (!$menu_exists) {
        $menu_id = wp_create_nav_menu($menu_name);
        
        $menu_items = array(
            'Home' => home_url(),
            'About' => get_permalink(get_page_by_title('About')),
            'Speakers' => get_permalink(get_page_by_title('Speakers')),
            'Agenda' => get_permalink(get_page_by_title('Agenda')),
            'Sponsors' => get_permalink(get_page_by_title('Sponsors')),
            'News' => get_permalink(get_page_by_title('News')),
            'Contact' => get_permalink(get_page_by_title('Contact')),
            'Register' => get_permalink(get_page_by_title('Register'))
        );
        
        foreach ($menu_items as $title => $url) {
            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' => $title,
                'menu-item-url' => $url,
                'menu-item-status' => 'publish'
            ));
        }
        
        // Set menu location
        $locations = get_theme_mod('nav_menu_locations');
        $locations['primary-menu'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }
    
    return true;
}

// Hook to run after theme activation
add_action('after_switch_theme', 'wpl_install_demo_content');
?>
