<?php
/*
 * The comments page for MonsieurPress
 */

// don't load it if you can't comment
if ( post_password_required() ) { return; }

// don't load if not opened
if ( !comments_open() && !get_comments_number() ){ return; }
?>

<?php if ( have_comments() ) : ?>

    <h3 id="comments-title" class="h2"><?php comments_number( __( '<span>No</span> Comments', 'mrpress' ), __( '<span>One</span> Comment', 'mrpress' ), __( '<span>%</span> Comments', 'mrpress' ) );?></h3>

    <section class="commentlist">
        <?php wp_list_comments(); ?>
    </section>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
        <nav class="navigation comment-navigation" role="navigation">
            <div class="comment-nav-prev">
                <?php previous_comments_link( __( '&larr; Previous Comments', 'mrpress' ) ); ?>
            </div>
            <div class="comment-nav-next">
                <?php next_comments_link( __( 'More Comments &rarr;', 'mrpress' ) ); ?>
            </div>
        </nav>
    <?php endif; ?>

    <?php if ( ! comments_open() ) : ?>
        <p class="no-comments">
            <?php _e( 'Comments are closed.' , 'mrpress' ); ?>
        </p>
    <?php endif; ?>

<?php endif; ?>

<?php comment_form(); ?>