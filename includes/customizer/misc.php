<?php

function custom_theme_misc_customizer_section( $wp_customize ){

    $wp_customize->add_setting( 'ct_copyright_text', [
        'default'       =>  ''
    ]);

    $wp_customize->add_setting( 'ct_consent_text', [
        'default'       =>  ''
    ]);

    $wp_customize->add_setting( 'ct_privacy_policy', [
        'default'       =>  ''
    ]);

    $wp_customize->add_section( 'ct_misc_section', [
        'title'         =>  __( 'Footer Settings', 'customtheme' ),
        'priority'      =>  30,
        'panel'         =>  'custom'
    ]);

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'ct_copyright_text_input',
        array(
            'label'     =>  __( 'Copyright Text', 'customtheme' ),
            'section'   =>  'ct_misc_section',
            'settings'  =>  'ct_copyright_text',
            'type'      =>  'text'
        )
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'ct_consent_text_input',
        array(
            'label'     =>  __( 'Consent Text', 'customtheme' ),
            'section'   =>  'ct_misc_section',
            'settings'  =>  'ct_consent_text',
            'type'      =>  'textarea'
        )
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'ct_privacy_policy_input',
        array(
            'label'     =>  __( 'Privacy Policy', 'customtheme' ),
            'section'   =>  'ct_misc_section',
            'settings'  =>  'ct_privacy_policy',
            'type'      =>  'text'
        )
    ));
}