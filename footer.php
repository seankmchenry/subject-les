<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="container">
			<div class="row">
				<div class="col-sm-offset-1 col-sm-10">

					<div class="row">
						<div class="col-sm-4 footer-section align-left">
							<span>&copy; <?php echo date( 'Y' ); ?> <?php echo bloginfo( 'name' ); ?></span>
						</div>
						<div class="col-sm-4 footer-section">
							<ul class="social-button">
							</ul>
						</div>
						<div class="col-sm-4 footer-section align-right">
							<ul class="social-links">
								<?php // to get social links, get home page ID
								$home = get_page_by_path( 'home' )->ID;
								/* Faceboook */
								if ( get_field( 'facebook_link', $home ) ) { ?>
									<li><a class="icon-facebook" href="<?php the_field( 'facebook_link', $home ); ?>"></a></li>
								<?php }
								/* Twitter */
								if ( get_field( 'twitter_link', $home ) ) { ?>
									<li><a class="icon-twitter" href="<?php the_field( 'twitter_link', $home ); ?>"></a></li>
								<?php }
								/* Instagram */
								if ( get_field( 'instagram_link', $home ) ) { ?>
									<li><a class="icon-instagram" href="<?php the_field( 'instagram_link', $home ); ?>"></a></li>
								<?php }
								/* Yelp */
								if ( get_field( 'yelp_link', $home ) ) { ?>
									<li><a class="icon-yelp" href="<?php the_field( 'yelp_link', $home ); ?>"></a></li>
								<?php } ?>
							</ul>
						</div>
					</div><!-- .row -->

				</div><!-- .col-sm-10 -->
			</div><!-- .row -->
		</div><!-- .container -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
