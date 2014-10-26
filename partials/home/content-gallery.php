<?php
/**
 * Template for displaying gallery content on the home page
 *
 * @package _s
 */
?>

<h2>Gallery</h2>

<div class="container">
	<div class="row">
		<div class="col-sm-offset-1 col-sm-10">

			<?php /* Gallery */
			if ( have_rows( 'image_gallery' ) ) { ?>
				<div id="gallery-slider" class="slider">
					<ul class="slider__wrapper">
						<?php while( have_rows( 'image_gallery') ): the_row(); ?>
							<li class="slider__item">
								<?php /* Image */
								if ( get_sub_field( 'image' ) ) {
									$image = get_sub_field( 'image' );
									$img_url = $image['url'];
									$img_alt = $image['alt']; ?>
									<img src="<?php echo $img_url; ?>" alt="" />
								<?php } ?>

								<?php /* Caption */
								if ( get_sub_field( 'caption' ) ) { ?>
									<div class="container">
										<div class="slide__caption">
											<?php the_field( 'caption' ); ?>
										</div>
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
