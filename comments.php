<?php
/*
 * The comments page for MonsieurPress
 */

// don't load it if you can't comment
if ( post_password_required() ) { return; }
?>

<?php if ( have_comments() ) : ?>

    <h3 id="comments-title">
        <?php comments_number( __( '<span>No</span> Comments', 'monsieurpress' ), __( '<span>One</span> Comment', 'monsieurpress' ), __( '<span>%</span> Comments', 'monsieurpress' ) );?>
    </h3>

    <section class="commentlist">
        <?php wp_list_comments(); ?>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <div class="pagination">
                <?php paginate_comments_links() ?>
            </div>
        <?php endif; ?>

        <?php if ( ! comments_open() ) : ?>
            <p class="no-comments">
                <?php _e( 'Comments are closed.' , 'monsieurpress' ); ?>
            </p>
        <?php endif; ?>
    </section>

<?php endif; ?>

<?php comment_form(); ?>
