<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="wpl-header">
    <div class="container">
        <div class="wpl-logo">
            <?php
            if ( has_custom_logo() ) {
                the_custom_logo();
            } else {
                echo '<a href="' . home_url() . '"><img src="' . get_stylesheet_directory_uri() . '/assets/images/logo.png" alt="' . get_bloginfo('name') . '"></a>';
            }
            ?>
        </div>
        
        <nav class="wpl-navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary-menu',
                'menu_class'     => 'wpl-main-menu',
                'container'      => false,
            ) );
            ?>
        </nav>
        
        <div class="wpl-header-actions">
            <a href="/register" class="btn-wpl-primary">Register Now</a>
            <button class="mobile-menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>

<main>