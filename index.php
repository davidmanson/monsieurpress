<?php get_header(); ?>

<div class="l-background l-pad-3">
    <div class="container">
        <div class="col-8 col-push-2">
            <div class="page-title">
                <h2>Blog</h2>
                <p>Wordpress, jQuery, css et autres gourmandises.</p>
            </div>
        </div>
    </div>
</div>


<div class="container">

    <main id="main" class="col-10 col-push-1" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

            <header class="article-header entry-header">
                <h1 class="entry-title index-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>

                <p class="byline entry-meta vcard">
                    <?php printf( __( 'Posted', 'bonestheme' ). ' %1$s %2$s', '<time class="updated entry-time" datetime="' . get_the_time( 'Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option( 'date_format')) . '</time>', '<span class="by">'.__( 'by', 'bonestheme' ). '</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>' ); ?>
                </p>
            </header>

            <section class="entry-content cf" itemprop="articleBody">
                <?php the_excerpt(); ?>
            </section>

        </article>

        <?php endwhile; ?>

        <?php else : ?>

        <article id="post-not-found" class="hentry cf">
            <section class="entry-content">
                <p>
                    <?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?>
                </p>
            </section>
        </article>

        <?php endif; ?>

    </main>

    <?php /* get_sidebar(); */ ?>

</div>

<?php get_template_part( 'partials/cta', 'section' ); ?>

<?php get_footer(); ?>