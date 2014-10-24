<?php
/**
 * Template Name: Home Page
 *
 * @package _s
 */

get_header(); ?>

	<div class="all-windows">

		<!-- Top -->
		<section class="window">
			<?php get_template_part( 'partials/home/content', 'top' ); ?>
		</section><!-- .window -->

		<!-- Menu -->
		<section class="window">
			<?php get_template_part( 'partials/home/content', 'menu' ); ?>
		</section><!-- .window -->

		<!-- Gallery -->
		<section class="window">
			<?php get_template_part( 'partials/home/content', 'gallery' ); ?>
		</section><!-- .window -->

		<!-- Press -->
		<section class="window">
			<?php get_template_part( 'partials/home/content', 'press' ); ?>
		</section><!-- .window -->

		<!-- Info -->
		<section class="window">
			<?php get_template_part( 'partials/home/content', 'info' ); ?>
		</section><!-- .window -->

	</div><!-- .all-windows -->

<?php get_footer(); ?>
