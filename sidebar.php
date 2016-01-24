<div class="" role="complementary">
    <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar1' ); ?>
    <?php else : ?>
        <div class="no-widgets">
            <p><?php _e( 'widget area', 'monsieurpress' );  ?></p>
        </div>
    <?php endif; ?>
</div>