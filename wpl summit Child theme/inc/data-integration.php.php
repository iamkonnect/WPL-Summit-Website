<?php
// WPL Summit Data Integration
add_action('wp_ajax_fetch_speakers', 'wpl_fetch_speakers');
add_action('wp_ajax_nopriv_fetch_speakers', 'wpl_fetch_speakers');

function wpl_fetch_speakers() {
    $speakers = array();
    
    // Check if we have speakers post type
    $speaker_posts = get_posts(array(
        'post_type' => 'speakers',
        'numberposts' => -1,
        'post_status' => 'publish'
    ));
    
    if ($speaker_posts) {
        foreach ($speaker_posts as $post) {
            $speakers[] = array(
                'name' => $post->post_title,
                'title' => get_post_meta($post->ID, 'speaker_title', true),
                'company' => get_post_meta($post->ID, 'speaker_company', true),
                'image' => get_the_post_thumbnail_url($post->ID, 'speaker-thumbnail') ?: get_stylesheet_directory_uri() . '/assets/images/speaker-placeholder.jpg'
            );
        }
    } else {
        // Fallback dummy data
        $speakers = array(
            array(
                'name' => 'Dr. Sarah Johnson',
                'title' => 'President & CEO',
                'company' => 'Global Leadership Foundation',
                'image' => get_stylesheet_directory_uri() . '/assets/images/speaker-placeholder.jpg'
            ),
            array(
                'name' => 'Maria Rodriguez',
                'title' => 'Former Minister of Education',
                'company' => 'Government of Spain',
                'image' => get_stylesheet_directory_uri() . '/assets/images/speaker-placeholder.jpg'
            ),
            array(
                'name' => 'Amina Diallo',
                'title' => 'Executive Director',
                'company' => 'Women in Politics Africa',
                'image' => get_stylesheet_directory_uri() . '/assets/images/speaker-placeholder.jpg'
            )
        );
    }
    
    wp_send_json_success($speakers);
}

// Fetch data from original WPL Summit website (future implementation)
function wpl_fetch_remote_data() {
    $remote_url = 'https://wplsummit.org/wp-json/wp/v2/';
    
    // This would be implemented later to sync with the main site
    // For now, we use local data
    
    return array();
}
?>