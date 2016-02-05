<?php get_header(); ?>

<div class="l-dark l-pad-3">
    <div class="l-container">
        <div class="l-col-8 l-col-push-2">
            <div class="page-title">
                <h2><?php wp_title(null); ?></h2>
            </div>
        </div>
    </div>
</div>

<div class="l-container">

    <main role="main" class="l-col-8">
        <?php
        while (have_posts()) : the_post();
            get_template_part( 'template-parts/content', 'page' );	
            comments_template();
        endwhile;
        ?>
    </main>
    
    <aside role="complementary" class="l-col-4 l-pad-2" >
        <?php get_sidebar(); ?>
    </aside>
    
</div>

<?php get_footer(); ?>
