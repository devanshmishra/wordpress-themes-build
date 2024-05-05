<?php

// add the title of the site
add_theme_support('title-tag');

// include the css and js in header 

add_action('wp_enqueue_scripts', 'mb_scripts');

function mb_scripts() {
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css', array(), '1.0');
    wp_enqueue_style('style-css', get_theme_file_uri('/css/styles.css'), array('bootstrap-icons'), '1.0');
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array(), '1.0', true);
    wp_enqueue_script('script', get_theme_file_uri('/js/scripts.js'), array('bootstrap-js'), '1.0', true);

}

// Register navigation menus

    register_nav_menus( array(
        'primary-menu' => esc_html__( 'Primary Menu' ),
        'footer-menu'  => esc_html__( 'Footer Menu', ),
    ) );






?>