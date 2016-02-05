<?php
/************************************
 * Author: MANSON David
 * URL: http://www.david-manson.com
 ************************************/


// LOAD LIBS
require_once( 'inc/helpers.php' );
require_once( 'inc/custom-post-type.php' );



/************************************
Let's get everything up and running.
*************************************/
function theme_init() {

  add_action( 'init', 'head_cleanup' );
  add_action( 'init', 'theme_support' );
  add_action( 'widgets_init', 'theme_sidebars' );

  add_filter( 'the_content', 'remove_ptags_on_images' );
  add_filter( 'excerpt_more', 'custom_excerpt_more' );

}

add_action( 'after_setup_theme', 'theme_init' );



/*********************
THEME SUPPORT
*********************/
function theme_support() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links');
	add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'main-nav' => __( 'The Main Menu', 'mrpress' ),   // main nav in header
			'footer-links' => __( 'Footer Links', 'mrpress' ) // secondary nav in footer
		)
	);

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form'
	) );

}



/************************************
  Oembed size option
*************************************/
if ( ! isset( $content_width ) ) {
	$content_width = 680;
}



/************************************
 Thumbnail size
*************************************/
$thumb_realisation_ratio = 1.5; // Using aspect ratio for WP 4.4 responsive image

add_image_size( 'mrpress-small', 350, round(350/$thumb_realisation_ratio), true );
add_image_size( 'mrpress-medium', 700, round(700/$thumb_realisation_ratio), true );



/************************************
 Sidebar
*************************************/
function theme_sidebars() {
	register_sidebar(array(
		'id' => 'main-sidebar',
		'name' => __( 'Main sidebar', 'mrpress' ),
		'description' => __( 'The main sidebar', 'mrpress' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	));
} 



/************************************
 Assets
*************************************/
function front_assets_load() {
    if (is_admin()) return;
    
    /* deregister jQuery in header & register it in footer */
    wp_deregister_script( 'jquery' );
    wp_deregister_script( 'jquery-migrate');
    wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
    
    
    /* deregister new wp-embed from WP 4.4 */
    wp_deregister_script('wp-embed');
    
    
    /* register theme script & style */
    wp_register_script( 'site-js', get_stylesheet_directory_uri() . '/js/scripts.js', array(), '1.0', true );
    wp_register_style( 'site-stylesheet', get_stylesheet_directory_uri() . '/style.css', array(), '', 'all' );
    
    
    /* Enqueue theme script & style */
    wp_enqueue_style( 'site-stylesheet' );
    wp_enqueue_script( 'site-js' );
}


add_action('wp_enqueue_scripts', 'front_assets_load');
