<?php get_header(); ?>

<div class="container">

    <main role="main" class="col-8">
        <?php
        while (have_posts()) : the_post();
            get_template_part( 'template-parts/content', 'page' );	
            comments_template();
        endwhile;
        ?>
    </main>
    
    <aside role="complementary" class="col-4 col-last l-pad-2" >
        <?php get_sidebar(); ?>
    </aside>
    
</div>

<?php get_footer(); ?>
