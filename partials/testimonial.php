<div class="testimonial-thumb">
    <div class="testimonial-person">
        <?php the_post_thumbnail( 'thumb-testimonial-large' ); ?>
        <h3><?php echo get_the_title(); ?></h3>
    </div>
    <div class="testimonial-content">
        <?php the_content(); ?>
    </div>
</div>