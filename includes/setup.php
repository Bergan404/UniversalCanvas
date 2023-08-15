<?php 

function custom_theme_setup_theme(){
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    register_nav_menu( 'primary', __( 'Primary Menu', 'customtheme' ) );
    register_nav_menu( 'secondary', __( 'Secondary Menu', 'customtheme' ) );

}