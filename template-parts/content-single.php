<?php
/**
 * Template part for displaying page content in page.php & single.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- Post header -->
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <aside class="entry-meta">
            <?php _e('Posted', 'monsieurpress'); ?> <?php the_date(); ?>
			<?php _e('by', 'monsieurpress'); ?> <?php the_author(); ?>
        </aside>
	</header>

	<!-- Post content -->
	<div class="entry-content">
		<?php the_content(); ?>
		<p class="tags">
		    <?php the_tags(); ?>
        </p>
        <div class="pagination">
		    <?php wp_link_pages(); ?>
		</div>
	</div>

	<!-- Post Footer -->
	<footer class="entry-footer">
		<?php edit_post_link(); ?>
	</footer>
</article>
