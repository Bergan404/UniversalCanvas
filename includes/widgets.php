<?php

function custom_theme_widgets(){
    register_sidebar([
        'name'              =>  __( 'Theme Sidebar', 'customtheme' ),
        'id'                =>  'custom_theme_sidebar',
        'description'       =>  __( 'Sidebar for the theme', 'customtheme' ),
        'before_widget'     =>  '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget'      =>  '</div>',
        'before_title'      =>  '<h4>',
        'after_title'       =>  '</h4>'
    ]);
}