<?php
/**
 * The sidebar containing the main widget area.
 * @package _mrpress
 */

if ( is_active_sidebar( 'main-sidebar' ) ) {
    dynamic_sidebar( 'main-sidebar' );
}

?>