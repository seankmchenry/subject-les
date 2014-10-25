<?php
/**
 * Template for displaying the top section on the home page
 *
 * @package _s
 */
?>

<div id="top-area" class="section full-bg">

	<div class="container">

		<div class="inner">

			<!-- Logo -->
			<img id="logo" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" />

			<div class="info">
				<!-- Street Address -->
				<?php if ( get_field( 'street_address' ) ) { ?>
					<span><?php the_field( 'street_address' ); ?></span>
				<?php } ?>

				<!-- Phone Number -->
				<?php if ( get_field( 'phone_number' ) ) {
					$num_raw = get_field( 'phone_number' );
					$num = preg_replace( '/\D/', '', $num_raw ); ?>
					<span><a href="tel:<?php echo $num; ?>"><?php echo $num_raw; ?></a></span>
				<?php } ?>
			</div>

		</div>

	</div>

</div><!-- #top-section -->