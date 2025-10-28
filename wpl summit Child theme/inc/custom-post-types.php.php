<?php
// Custom Post Types for WPL Summit
add_action('init', 'wpl_register_custom_post_types');

function wpl_register_custom_post_types() {
    // Speakers Post Type
    register_post_type('speakers',
        array(
            'labels' => array(
                'name' => __('Speakers'),
                'singular_name' => __('Speaker'),
                'add_new' => __('Add New Speaker'),
                'add_new_item' => __('Add New Speaker'),
                'edit_item' => __('Edit Speaker'),
                'new_item' => __('New Speaker'),
                'view_item' => __('View Speaker'),
                'search_items' => __('Search Speakers'),
                'not_found' => __('No speakers found'),
                'not_found_in_trash' => __('No speakers found in Trash')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-microphone',
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
            'show_in_rest' => true,
            'taxonomies' => array('speaker-category')
        )
    );

    // Agenda Post Type
    register_post_type('agenda',
        array(
            'labels' => array(
                'name' => __('Agenda'),
                'singular_name' => __('Agenda Item'),
                'add_new' => __('Add New Item'),
                'add_new_item' => __('Add New Agenda Item'),
                'edit_item' => __('Edit Agenda Item'),
                'new_item' => __('New Agenda Item'),
                'view_item' => __('View Agenda Item'),
                'search_items' => __('Search Agenda'),
                'not_found' => __('No agenda items found'),
                'not_found_in_trash' => __('No agenda items found in Trash')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-calendar-alt',
            'supports' => array('title', 'editor', 'custom-fields'),
            'show_in_rest' => true
        )
    );

    // Sponsors Post Type
    register_post_type('sponsors',
        array(
            'labels' => array(
                'name' => __('Sponsors'),
                'singular_name' => __('Sponsor'),
                'add_new' => __('Add New Sponsor'),
                'add_new_item' => __('Add New Sponsor'),
                'edit_item' => __('Edit Sponsor'),
                'new_item' => __('New Sponsor'),
                'view_item' => __('View Sponsor'),
                'search_items' => __('Search Sponsors'),
                'not_found' => __('No sponsors found'),
                'not_found_in_trash' => __('No sponsors found in Trash')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-businessperson',
            'supports' => array('title', 'thumbnail'),
            'show_in_rest' => true
        )
    );
}

// Register Taxonomies
add_action('init', 'wpl_register_taxonomies');

function wpl_register_taxonomies() {
    register_taxonomy(
        'speaker-category',
        'speakers',
        array(
            'labels' => array(
                'name' => 'Speaker Categories',
                'add_new_item' => 'Add New Category',
                'new_item_name' => "New Category"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true,
            'show_in_rest' => true
        )
    );
}
?>