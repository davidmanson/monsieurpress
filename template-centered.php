<?php
/*
 Template Name: Centered
*/
?>

<?php get_header(); ?>

<div class="l-container">
    <main class="l-col-10 l-col-push-1" role="main">
        <?php
        while (have_posts()) : the_post();
            get_template_part( 'template-parts/content', 'single' );
            comments_template();
        endwhile;
        ?>
    </main>
</div>

<?php get_footer(); ?>
