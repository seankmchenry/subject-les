<?php
/**
 * The template for displaying all single posts.
 *
 * @package _s
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-sm-offset-2 col-sm-8">

				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'partials/content', 'single' ); ?>

						<?php _s_post_nav(); ?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || '0' != get_comments_number() ) :
								comments_template();
							endif;
						?>

					<?php endwhile; // end of the loop. ?>

					</main><!-- #main -->
				</div><!-- #primary -->

			</div>
		</div>
	</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>