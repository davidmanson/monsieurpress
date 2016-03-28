<?php
/**
 * Template part for displaying page content in index.php & archive.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <aside class="entry-meta">
            <?php _e('Posted', 'mrpress'); ?> <?php the_date(); ?> <?php _e('by', 'mrpress'); ?> <?php the_author(); ?>
        </aside>
	</header>

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
</article>