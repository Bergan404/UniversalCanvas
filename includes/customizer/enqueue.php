<?php

function custom_theme_customize_preview_init(){
    wp_enqueue_script(
        'custom_theme_theme_customizer',
        get_theme_file_uri( 'assets/js/theme-customize.js' ),
        [ 'jquery', 'customize-preview' ],
        false,
        true
    );
}