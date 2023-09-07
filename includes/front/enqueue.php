<?php

function custom_theme_enqueue()
{
    $uri                =   get_theme_file_uri();
    $ver                =   CT_DEV_MODE ? time() : false;

    wp_register_style('aos_style', 'https://unpkg.com/aos@2.3.1/dist/aos.css', [], $ver);

    // Latest Version of font awesome
    wp_register_style('font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', [], $ver);

    wp_register_style('bootstrap5_style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', [], $ver);

    wp_register_style('custom_theme_style', get_stylesheet_uri(), [], $ver);

    wp_enqueue_style('aos_style');
    wp_enqueue_style('font_awesome');
    wp_enqueue_style('bootstrap5_style');
    wp_enqueue_style('custom_theme_style');

    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', [], $ver);
    wp_register_script('aos_script', 'https://unpkg.com/aos@2.3.1/dist/aos.js', [], $ver, true);
    wp_register_script('bootstrap5_script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', $ver, true);
    wp_register_script('custom_theme_script', $uri . '/assets/js/bundle.js', [], $ver, true);


    wp_enqueue_script("jquery");
    wp_enqueue_script('aos_script');
    wp_enqueue_script('bootstrap5_script');
    wp_enqueue_script('custom_theme_script');
}
