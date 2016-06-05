<?php
/*
 *  Custom post type
 */

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'theme_flush_rewrite_rules' );
function theme_flush_rewrite_rules() {
	flush_rewrite_rules();
}


/*****************************
 *   Project custom type
 *****************************/
/*
function custom_post_project() {

	register_post_type( 'project',
		array( 'labels' => array(
			     'name' => __( 'Projects', 'monsieurpress' ),
			     'singular_name' => __( 'Project', 'monsieurpress' ),
			),
			'public' => true,
            'has_archive' => true,
			'menu_position' => 8,
            'hierarchical' => true,
			'menu_icon' => 'dashicons-desktop',
			'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'sticky')
		)
	);

}

add_action( 'init', 'custom_post_project');
*/


?>
