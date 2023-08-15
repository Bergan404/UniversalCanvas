<?php

function custom_theme_customize_register( $wp_customize ){
    // echo '<pre>';
    // var_dump( $wp_customize );
    // echo '</pre?';

    $wp_customize->get_section( 'title_tagline' )->title        =   'General';

    $wp_customize->add_panel( 'custom', [
        'title'         =>  __( 'Custom Theme', 'customtheme' ),
        'description'   =>  '<p>Theme Settings</p>',
        'priority'      =>  160
    ]);

    custom_theme_social_customizer_section( $wp_customize );
    custom_theme_misc_customizer_section( $wp_customize );
}