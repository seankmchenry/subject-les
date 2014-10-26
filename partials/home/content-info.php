<?php
/**
 * Template for displaying info content on the home page
 *
 * @package _s
 */
?>

<h2>Info</h2>

<div class="container">
	<div class="row">
		<div class="col-sm-offset-1 col-sm-10">
			<div class="row">
				<div class="col-sm-4">
					<!-- Hours -->
					<h3>Our Hours</h3>
					<?php if ( have_rows( 'bar_hours' ) ) {
						// rows exists, loop through them
						while( have_rows( 'bar_hours' ) ): the_row(); ?>
							<span><strong><?php the_sub_field( 'days_of_the_week' ); ?>:</strong></span>
							<span><?php the_sub_field( 'hours' ); ?></span>
						<?php endwhile;
					} ?>
				</div>
				<div class="col-sm-4">
					<!-- Stations -->
					<h3>Stations</h3>
					<?php if ( get_field( 'stations' ) ) { ?>
						<div class="stations">
							<?php the_field( 'stations' ); ?>
						</div>
					<?php } ?>
				</div>
				<div class="col-sm-4">
					<!-- Info -->
					<h3>Contact</h3>
					<?php if ( get_field( 'phone_number' ) ) {
						$num_raw = get_field( 'phone_number' );
						$num = preg_replace( '/\D/', '', $num_raw ); ?>
						<span>
							<strong>
								<a href="tel:<?php echo $num; ?>"><?php echo $num_raw; ?></a>
							</strong>
						</span>
					<?php } ?>

					<?php if ( get_field( 'email_address' ) ) {
						$email = get_field( 'email_address' ); ?>
						<span>
							<strong>
								<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
							</strong>
						</span>
					<?php } ?>

					<?php if ( get_field( 'reservation_notes' ) ) { ?>
						<div class="notes">
							<?php the_field( 'reservation_notes' ); ?>
						</div>
					<?php } ?>
				</div>
			</div><!-- row -->

			<div class="row">
				<div class="col-sm-12">
					<!-- Map -->
					<?php // check if map exists
					if ( get_field( 'google_map' ) ) {
						get_template_part( 'partials/home/content', 'map' );
					} ?>
				</div>
			</div><!-- .row -->
		</div><!-- .col-sm-10 -->
	</div><!-- .row -->
</div><!-- .container -->
