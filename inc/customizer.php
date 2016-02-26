<?php
/************************************
 * Author: MANSON David
 * URL: http://www.david-manson.com
 ************************************/


 /************************************
   Custom background implementation
 *************************************/
$args = array(
	'default-color' => 'FFFFFF',
);
add_theme_support( 'custom-background', $args );



/************************************
  Simple Customizer implementation
  https://codex.wordpress.org/Theme_Customization_API
*************************************/
function theme_customize_register( $wp_customize ) {

    // Settings definitions
    $wp_customize->add_setting( 'primary_cta_link' , array(
        'default'     => 'https://github.com/davidmanson/monsieurpress/archive/master.zip',
    ) );
    $wp_customize->add_setting( 'secondary_cta_link' , array(
        'default'     => 'https://github.com/davidmanson/monsieurpress',
    ) );


    // Section definitions
    $wp_customize->add_section( 'cta_section' , array(
        'title'      => __( 'CTA buttons', 'mrpress' ),
        'priority'   => 30,
    ) );

    // Section definitions
    $wp_customize->add_control(
    	'primary_cta_link_control',
    	array(
    		'label'    => __( 'Primary CTA Link', 'mrpress' ),
    		'section'  => 'cta_section',
    		'settings' => 'primary_cta_link'
    	)
    );

    // Section definitions
    $wp_customize->add_control(
        'secondary_cta_link_control',
        array(
            'label'    => __( 'Secondary CTA Link', 'mrpress' ),
            'section'  => 'cta_section',
            'settings' => 'secondary_cta_link'
        )
    );
}
add_action( 'customize_register', 'theme_customize_register' );

?>
