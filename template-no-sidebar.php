<?php
/*
 Template Name: No sidebar
*/
?>

<?php get_header(); ?>

<div class="l-container">
    <main class="l-col-10 l-col-push-1" role="main">
        <?php
        while (have_posts()) : the_post();
            get_template_part( 'partials/content', 'page' );	
            comments_template();
        endwhile;
        ?>
    </main>
</div>

<?php get_footer(); ?>
