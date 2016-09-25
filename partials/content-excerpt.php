<?php
/**
 * Template part for displaying page content in index.php & archive.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php the_post_thumbnail('medium'); ?>

	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
        <aside class="entry-meta">
            <?php _e('Posted', 'monsieurpress'); ?> <?php the_date(); ?> <?php _e('by', 'monsieurpress'); ?> <?php the_author(); ?>
        </aside>
	</header>

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
</article>
