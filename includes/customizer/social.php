<?php

function custom_theme_social_customizer_section( $wp_customize ){
    $wp_customize->add_setting( 'custom_theme_facebook_handle', [
        'default'   =>  '',
    ]);

    $wp_customize->add_setting( 'custom_theme_twitter_handle', [
        'default'   =>  '',
    ]);

    $wp_customize->add_setting( 'custom_theme_instagram_handle', [
        'default'   =>  '',
    ]);

    $wp_customize->add_section( 'custom_theme_social_section', [
        'title'             =>  __( 'Social Settings', 'customtheme' ),
        'priority'          =>  30,
        'panel'             =>  'custom'
    ]);

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'custom_theme_social_facebook_input',
        array(
            'label'         =>  __( 'Facebook Handle', 'customtheme' ),
            'section'       =>  'custom_theme_social_section',
            'settings'      =>  'custom_theme_facebook_handle',
            'type'          =>  'text'
        )
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'custom_theme_social_twitter_input',
        array(
            'label'         =>  __( 'Twitter Handle', 'customtheme' ),
            'section'       =>  'custom_theme_social_section',
            'settings'      =>  'custom_theme_twitter_handle',
            'type'          =>  'text'
        )
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'custom_theme_social_instagram_input',
        array(
            'label'         =>  __( 'Instagram Handle', 'customtheme' ),
            'section'       =>  'custom_theme_social_section',
            'settings'      =>  'custom_theme_instagram_handle',
            'type'          =>  'text'
        )
    ));
}