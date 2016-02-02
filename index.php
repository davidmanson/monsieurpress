<?php get_header(); ?>

<div class="l-gradient l-pad-3">
    <div class="container">
        <div class="col-8 col-push-2">
            <div class="page-title">
                <h2><?php wp_title(null); ?></h2>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <main id="main" class="col-8" role="main">
        <?php
        while (have_posts()) : the_post();
            get_template_part( 'template-parts/content', 'excerpt' );	
        endwhile;
        ?>
    </main>
    <aside role="complementary" class="col-4 col-last l-pad-2" >
        <?php get_sidebar(); ?>
    </aside>
</div>


<?php get_footer(); ?>