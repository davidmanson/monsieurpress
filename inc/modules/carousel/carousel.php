<?php

/************************************
 Variables
*************************************/
$module_uri = get_template_directory_uri() . '/inc/modules/carousel';

/************************************
 Add Assets
*************************************/
function gallery_assets_load() {
    if (is_admin()) return;

    global $module_uri;

    // Fresco import
    wp_enqueue_style( 'fresco-stylesheet', $module_uri . '/vendors/fresco/css/fresco/fresco.css' );
    wp_enqueue_script( 'fresco-js', $module_uri . '/vendors/fresco/js/fresco/fresco.js', array('jquery'));


    // Slick import
    wp_enqueue_style( 'slider-stylesheet', $module_uri . '/vendors/slick/slick.css' );
    wp_enqueue_script( 'slider-js', $module_uri . '/vendors/slick/slick.min.js', array('jquery'));


    // Plugin assets import
    wp_enqueue_style( 'inline-slider-stylesheet', $module_uri . '/assets/css/carousel.css' );
    wp_enqueue_script( 'inline-slider-js', $module_uri . '/assets/javascript/carousel.js', array('jquery'));

}
add_action('wp_enqueue_scripts', 'gallery_assets_load');



/************************************
 Add custom post type
*************************************/
function custom_post_gallery() {
	register_post_type( 'gallery-slider-image',
		array( 'labels' => array(
			     'name' => __( 'Gallery images', 'monsieurpress' ),
			     'singular_name' => __( 'Gallery image', 'monsieurpress' ),
			),
			'public' => true,
            'has_archive' => true,
			'menu_position' => 8,
            'hierarchical' => true,
			'menu_icon' => 'dashicons-images-alt',
			'supports' => array( 'title', 'editor', 'thumbnail')
		)
	);
}
add_action( 'init', 'custom_post_gallery');



/************************************
  Add custom taxonomy gallery
*************************************/
function custom_taxonomy_gallery() {
    register_taxonomy(
        'slider',
        'gallery-slider-image',
        array(
            'label' => __( 'Carousels' ),
            'labels'=> array(
        		'name'                       => _x( 'Carousels', 'taxonomy general name' ),
        		'singular_name'              => _x( 'Carousel', 'taxonomy singular name' ),
        		'search_items'               => __( 'R Writers' ),
        		'popular_items'              => __( 'Popular carousel' ),
        		'all_items'                  => __( 'Tous les carousels' ),
        		'parent_item'                => null,
        		'parent_item_colon'          => null,
        		'edit_item'                  => __( 'Edit Carousel' ),
        		'update_item'                => __( 'Update Carousel' ),
        		'add_new_item'               => __( 'Ajouter un nouveau Carousel' ),
        		'new_item_name'              => __( 'New Carousel Name' ),
        		'separate_items_with_commas' => __( 'Separate carousel with commas' ),
        		'add_or_remove_items'        => __( 'Add or remove carousel' ),
        		'choose_from_most_used'      => __( 'Choose from the most used carousel' ),
        		'not_found'                  => __( 'No carousels found.' ),
        		'menu_name'                  => __( 'Carousels' ),
        	),
            'rewrite' => array( 'slug' => 'slider' ),
            'hierarchical' => true,
            'show_admin_column' => true
        )
    );
}
add_action( 'init', 'custom_taxonomy_gallery');



/************************************
  Add column for ShortCode
*************************************/
function add_slider_tag_columns($new_columns){
    $new_columns = array(
        'cb' => '<input type="checkbox" />',
        'name'   => __('Name'),
        'slug'   => __('Slug'),
        'tax_id' => __('ShortCode'),
        'posts'  => __('Posts')
    );

    return $new_columns;
}
add_filter( 'manage_edit-slider_columns', 'add_slider_tag_columns');
add_filter( 'manage_edit-slider_sortable_columns', 'add_slider_tag_columns');



/************************************
  Add column content for ShortCode
*************************************/
function add_post_tag_column_content( $value, $name, $term_id ) {
    $term = get_term($term_id, 'slider');
    return '[carousel id="'.$term->slug.'"]';
}
add_filter('manage_slider_custom_column', 'add_post_tag_column_content', 10, 3);



/************************************
  The shortcode
*************************************/
function carousel_shortcode( $atts ) {

    // The paramaters
    $a = shortcode_atts( array(
        'id' => 'carousel-1',
    ), $atts );

    // The query arguments
    $args = array(
    	'post_type' => 'gallery-slider-image',
    	'tax_query' => array(
    		array(
    			'taxonomy' => 'slider',
    			'field'    => 'slug',
    			'terms'    => $a['id'],
    		),
    	),
    );

    // The query
    $query = new WP_Query( $args );

    // Start getting the content
    ob_start();

    // The DOM
    echo '<div class="inline-slider">';
        $slides = "";
        while ( $query->have_posts() ) : $query->the_post();
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'large', true);
            $slides .= '<a href="'.$thumb_url[0].'" class="slide fresco" data-fresco-group="'.$a['id'].'">';
            $slides .= get_the_post_thumbnail( null, 'medium' );
            $slides .= '</a>';
        endwhile;
        echo $slides;

    echo '</div>';


    // Return the content
    return ob_get_clean();
}

add_shortcode( 'carousel', 'carousel_shortcode' );
