
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <p class="byline entry-meta vcard">
            <?php printf( __( 'Posted', 'mrpress' ). ' %1$s %2$s', '<time class="updated entry-time" datetime="' . get_the_time( 'Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option( 'date_format')) . '</time>', '<span class="by">'.__( 'by', 'mrpress' ). '</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>' ); ?>
        </p>
	</header>

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
</article>