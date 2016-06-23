<?php
/*
 * Template Name: Full width
 *
 * Because this is a full template, we only put the header & the footer
 * There is no container, so it's perfect for using a page builder for exemple.
*/
?>

<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; ?>

<?php get_footer(); ?>
