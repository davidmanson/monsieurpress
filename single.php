<?php get_header(); ?>

<div class="l-container">

    <main id="main" class="l-col-8 l-col-push-2" role="main">

        <?php
        while (have_posts()) : the_post();
            get_template_part( 'template-parts/content', 'page' );
            comments_template();
        endwhile;
        ?>

    </main>

</div>


<?php get_footer(); ?>
