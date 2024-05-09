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


// Add customizer settings
function mytheme_customize_register( $wp_customize ) {
    // Add a new section for logo customization
    $wp_customize->add_section( 'mytheme_logo_section', array(
        'title'    => __( 'Logo', 'mytheme' ),
        'priority' => 30,
    ) );

    // Add setting for logo image
    $wp_customize->add_setting( 'mytheme_logo', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    // Add control for logo image
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mytheme_logo', array(
        'label'    => __( 'Upload Logo', 'mytheme' ),
        'section'  => 'mytheme_logo_section',
        'settings' => 'mytheme_logo',
    ) ) );
}
add_action( 'customize_register', 'mytheme_customize_register' );

// Output logo in theme header
function mytheme_display_logo() {
    $logo_url = get_theme_mod( 'mytheme_logo' );
    if ( $logo_url ) {
        echo '<img src="' . esc_url( $logo_url ) . '" alt="' . get_bloginfo( 'name' ) . '">';
    } else {
        echo '<h1>' . get_bloginfo( 'name' ) . '</h1>';
    }
}




?>