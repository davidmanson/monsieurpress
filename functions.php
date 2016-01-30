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
  add_action( 'widgets_init', 'remove_recent_comments_style');

  add_filter( 'the_content', 'remove_ptags_on_images' );
  add_filter( 'excerpt_more', 'custom_excerpt_more' );

}

add_action( 'after_setup_theme', 'theme_init' );




/************************************
  Oembed size option
*************************************/
if ( ! isset( $content_width ) ) {
	$content_width = 680;
}



/************************************
 Thumbnail size
*************************************/
$thumb_realisation_ratio = 1.5;

add_image_size( 'thumb-realisation-small', 350, round(350/$thumb_realisation_ratio), true );
add_image_size( 'thumb-realisation-medium', 700, round(700/$thumb_realisation_ratio), true );



/************************************
 Sidebar
*************************************/
function theme_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __( 'Sidebar 1', 'mrpress' ),
		'description' => __( 'The first (primary) sidebar.', 'mrpress' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
} 



/************************************
 Assets
*************************************/
function assets_load() {
    if (is_admin()) return;
    
    /*
     * deregister jQuery in header & register it in footer
     */
    wp_deregister_script( 'jquery' );
    wp_deregister_script( 'jquery-migrate');
    wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
    
    
    /*
     * deregister new wp-embed from WP 4.4
     */
    wp_deregister_script('wp-embed');
    
    
    /*
     * register theme scripts
     */
    wp_register_script( 'site-js', get_stylesheet_directory_uri() . '/js/scripts.js', array( /*'jquery' */), '1.0', true );
    
    
    /*
     * Register  theme style
     */ 
    wp_register_style( 'site-stylesheet', get_stylesheet_directory_uri() . '/style.css', array(), '', 'all' );
    
    
    /*
     * Enqueue styles & scripts
     */
    wp_enqueue_style( 'site-stylesheet' );
    wp_enqueue_script( 'site-js' );
}


add_action('wp_enqueue_scripts', 'assets_load');



/************************************
 Async Font Load
*************************************/
add_action( 'wp_head', 'add_load_web_font');

function add_load_web_font(){ ?>
   
    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Open+Sans:300,400,400italic,700:latin' ] }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
  
<?php
}
?>
