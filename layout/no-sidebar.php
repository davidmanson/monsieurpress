<?php
/*
 Template Name: No sidebar
*/
?>

<?php get_header(); ?>

<div class="container">
    <main class="col-10 col-push-1" role="main">
        <?php
        while (have_posts()) : the_post();
            get_template_part( 'template-parts/content', 'page' );	
            comments_template();
        endwhile;
        ?>
    </main>
</div>

<?php get_footer(); ?>
