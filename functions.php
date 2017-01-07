<?php
/************************************
 * Author: MANSON David
 * URL: http://www.david-manson.com
 ************************************/


/*********************
THEME INIT
*********************/
function theme_init() {
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
add_action( 'after_setup_theme', 'theme_init' );



/************************************
  Oembed size option
*************************************/
if ( ! isset( $content_width ) ) {
	$content_width = 680;
}



/************************************
 Menu
*************************************/
register_nav_menus(array(
	'main-nav' => __( 'The Main Menu', 'monsieurpress' ),
	'footer-links' => __( 'Footer Links', 'monsieurpress' )
));



/************************************
 Sidebar
*************************************/
function theme_sidebars() {
	register_sidebar(array(
		'id' => 'main-sidebar',
		'name' => __( 'Main sidebar', 'monsieurpress' ),
		'description' => __( 'The main sidebar', 'monsieurpress' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
        'before_title' => '<div class="widgettitle">',
        'after_title' => '</div>'
	));
}
add_action( 'widgets_init', 'theme_sidebars' );



/************************************
 Apply theme's stylesheet to the visual editor.
*************************************/
function theme_add_editor_styles() {
    add_editor_style( get_stylesheet_uri() );
}
add_action( 'init', 'theme_add_editor_styles' );



/************************************
 Assets
*************************************/
function front_assets_load() {
    if (is_admin()) return;

    /* Enqueue theme script & style */
    wp_enqueue_style( 'monsieurpress-stylesheet', get_stylesheet_uri()  );
    wp_enqueue_script( 'monsieurpress-js', get_template_directory_uri() . '/assets/javascript/dist/scripts.js', array('jquery'));

    /* Enqueue comment-reply script if needed */
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'front_assets_load');
