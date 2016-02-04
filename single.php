<?php get_header(); ?>

<div class="l-container">

    <main id="main" class="l-col-10 l-col-push-1" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

        <?php
        while (have_posts()) : the_post();
            get_template_part( 'template-parts/content', 'page' );	
            comments_template();
        endwhile;
        ?>

    </main>

</div>


<?php get_footer(); ?>