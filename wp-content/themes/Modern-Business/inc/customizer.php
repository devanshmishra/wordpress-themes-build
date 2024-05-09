<?php
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