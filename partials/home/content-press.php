<?php
/**
 * Template for displaying press content on the home page
 *
 * @package _s
 */
?>

<h2>Press</h2>

<div class="vert-aligner">
	<div class="aligned">

		<div class="container">
			<div class="row">
				<div class="col-sm-offset-2 col-sm-8">

					<?php /* Press */
					if ( have_rows( 'reviews' ) ) { ?>
						<div id="press-slider" class="slider">
							<ul class="slider__wrapper">
								<?php while( have_rows( 'reviews') ): the_row(); ?>
									<li class="slider__item">
										<?php /* Excerpt */
										if ( get_sub_field( 'review_excerpt' ) ) { ?>
											<div class="excerpt">
												<?php the_sub_field( 'review_excerpt' ); ?>
												<?php if ( get_sub_field( 'media_outlet' ) ) { ?>
													<span><a href=""><?php the_sub_field( 'media_outlet' ); ?></a></span>
												<?php } ?>
											</div>
										<?php } ?>
									</li>
								<?php endwhile; ?>
							</ul>
						</div>
					<?php } ?>

				</div><!-- .col-sm-10 -->
			</div><!-- .row -->
		</div><!-- .container -->

	</div><!-- .inner -->
</div><!-- .sub-section -->
