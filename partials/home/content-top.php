<?php
/**
 * Template for displaying the top section on the home page
 *
 * @package _s
 */
?>

<div class="vert-aligner">
	<div class="aligned">

		<!-- Logo -->
		<img id="logo" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" />

		<div class="info">
			<!-- Street Address -->
			<?php if ( get_field( 'street_address' ) ) { ?>
				<span><a class="icon-location" href="#location"><?php the_field( 'street_address' ); ?></a></span>
			<?php } ?>

			<!-- Phone Number -->
			<?php if ( get_field( 'phone_number' ) ) {
				$num_raw = get_field( 'phone_number' );
				$num = preg_replace( '/\D/', '', $num_raw ); ?>
				<span><a class="icon-mobile" href="tel:<?php echo $num; ?>"><?php echo $num_raw; ?></a></span>
			<?php } ?>
		</div>

	</div><!-- .inner -->
</div><!-- .sub-section -->
