<?php

 // Setup
 define( 'CT_DEV_MODE', true );

 // Includes
 include( get_theme_file_path( '/includes/front/enqueue.php' ) );
 include( get_theme_file_path( '/includes/setup.php' ) );
 include( get_theme_file_path( '/includes/widgets.php' ) );
 include( get_theme_file_path( '/includes/theme-customizer.php' ) );
 include( get_theme_file_path( '/includes/customizer/social.php' ) );
 include( get_theme_file_path( '/includes/customizer/misc.php' ) );
 include( get_theme_file_path( '/includes/customizer/enqueue.php' ) );
 include( get_theme_file_path( '/includes/gravity-forms-plugin/gravity-wiz.php' ) );

 // Hooks
 add_action( 'wp_enqueue_scripts', 'custom_theme_enqueue' );
 add_action( 'after_setup_theme', 'custom_theme_setup_theme' );
 add_action( 'widgets_init', 'custom_theme_widgets' );
 add_action( 'customize_register', 'custom_theme_customize_register' );
 add_action( 'customize_preview_init', 'custom_theme_customize_preview_init' );

 // Shortcodes

if( !defined('PIX_OEMBED_CACHE_KEY') ) {
   define('PIX_OEMBED_CACHE_KEY', 'pix_oembed_');
}

function _wp_custom_oembed_cache_key($url, $args) {
   $args_serialized = serialize($args);
   return PIX_OEMBED_CACHE_KEY . md5("{$url}-{$args_serialized}");
}

/**
* This function caches the result
*/
function pix_cache_wp_oembed_get_function($data, $url, $args) {

   set_transient( _wp_custom_oembed_cache_key($url, $args), $data, 14*DAY_IN_SECONDS);
   return $data;

}
add_filter('oembed_result', 'pix_cache_wp_oembed_get_function', 999, 3);

/**
* This function serves the cached result
*/

function pix_serve_wp_oembed_get_function($result, $url, $args) {

   if(trim($url) === '') {
       return '';
   }

   if($cached_result = get_transient(_wp_custom_oembed_cache_key($url, $args))) {
       return $cached_result;
   }

   return $result;

}
add_filter('pre_oembed_result', 'pix_serve_wp_oembed_get_function', 2, 3);

// This Function Adds Theme Options
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

// This Function adds Active element to nav for whichever page you are on
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}

// Completely blocks the Node_modules from being carried onto the site
add_filter( 'ai1wm_exclude_themes_from_export',
function ( $exclude_filters ) {
  $exclude_filters[] = '/node_modules';
  return $exclude_filters;
} );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
   return 55;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 * Getting rid of the [...]
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
   return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
