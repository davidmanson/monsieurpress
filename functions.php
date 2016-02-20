<?php
/************************************
 * Author: MANSON David
 * URL: http://www.david-manson.com
 ************************************/


// Load dependencies
require_once( 'inc/helpers.php' );
require_once( 'inc/custom-post-type.php' );



/************************************
Let's get everything up and running.
*************************************/
function theme_init() {
  add_action( 'init', 'head_cleanup' );
  add_action( 'init', 'theme_support' );
  add_action( 'init', 'theme_filters');
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
 Menu
*************************************/
function theme_menu() {
    register_nav_menus(array(
		'main-nav' => __( 'The Main Menu', 'mrpress' ),   // main nav in header
		'footer-links' => __( 'Footer Links', 'mrpress' ) // secondary nav in footer
	));
}



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
add_action( 'widgets_init', 'theme_sidebars' );



/************************************
 Theme filters
*************************************/
function theme_filters(){
    add_filter( 'the_content', 'remove_ptags_on_images' );
    add_filter( 'excerpt_more', 'custom_excerpt_more' );
}



/************************************
 Assets
*************************************/
function front_assets_load() {
    if (is_admin()) return;

    /* deregister jQuery in header & register it in footer & deregister wp-embed */
    wp_deregister_script( 'wp-embed' );
    wp_deregister_script( 'jquery' );
    wp_deregister_script( 'jquery-migrate');
    wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );

    /* Enqueue theme script & style */
    wp_enqueue_style( 'mrpress-stylesheet', get_stylesheet_uri()  );
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/js/dist/scripts.js', array(), '20160207', true);

    /* Enqueue comment-reply script if needed */
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'front_assets_load');
