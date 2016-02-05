<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package _monsieurpress
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<footer class="entry-footer">
		<?php edit_post_link(); ?>
	</footer>
</article>