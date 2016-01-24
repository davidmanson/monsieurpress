<?php get_header(); ?>

    <div id="content">

        <div id="inner-content" class="wrap cf">

                <main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

                    <?php
                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

                        <header class="entry-header article-header">

                            <h3 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                            <p class="byline entry-meta vcard">
                                <?php printf( __( 'Posted', 'mrpress' ).' %1$s %2$s',
                                        '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                                        '<span class="by">'.__('by', 'mrpress').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                                ); ?>
                            </p>

                        </header>

                        <section class="entry-content cf">

                            <?php the_post_thumbnail( 'bones-thumb-300' ); ?>

                            <?php the_excerpt(); ?>

                        </section>

                        <footer class="article-footer">

                        </footer>

                    </article>

                    <?php endwhile; ?>

                            <?php bones_page_navi(); ?>

                    <?php else : ?>

                            <article id="post-not-found" class="hentry cf">
                                <header class="article-header">
                                    <h1><?php _e( 'Oops, Post Not Found!', 'mrpress' ); ?></h1>
                                </header>
                                <section class="entry-content">
                                    <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'mrpress' ); ?></p>
                                </section>
                                <footer class="article-footer">
                                        <p><?php _e( 'This is the error message in the archive.php template.', 'mrpress' ); ?></p>
                                </footer>
                            </article>

                    <?php endif; ?>

                </main>

            <?php get_sidebar(); ?>

        </div>

    </div>

<?php get_footer(); ?>
