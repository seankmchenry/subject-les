<?php
/**
 * @package _s
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php /* Image */
		if ( has_post_thumbnail() ) {
			the_post_thumbnail( 'thumbnail', array( 'class' => 'alignright' ) );
		} ?>

		<?php /* Excerpt */
		$content = get_the_content();
		$excerpt = wp_trim_words( $content, 75, '... <a href="' . get_permalink() . '">Read more</a>' );
		echo strip_shortcodes( wpautop( $excerpt ) ); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_s' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php _s_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
