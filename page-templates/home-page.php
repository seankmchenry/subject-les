<?php
/**
 * Template Name: Home Page
 *
 * @package _s
 */

get_header(); ?>

	<div class="all-windows">

		<!-- Top -->
		<section id="top" class="window">
			<?php get_template_part( 'partials/home/content', 'top' ); ?>
		</section><!-- .window -->

		<!-- Menu -->
		<section id="menu" class="window">
			<?php get_template_part( 'partials/home/content', 'menu' ); ?>
		</section><!-- .window -->

		<!-- Gallery -->
		<section id="gallery" class="window">
			<?php get_template_part( 'partials/home/content', 'gallery' ); ?>
		</section><!-- .window -->

		<!-- Press -->
		<section id="press" class="window">
			<?php get_template_part( 'partials/home/content', 'press' ); ?>
		</section><!-- .window -->

		<!-- Info -->
		<section id="info" class="window">
			<?php get_template_part( 'partials/home/content', 'info' ); ?>
		</section><!-- .window -->

	</div><!-- .all-windows -->

<?php get_footer(); ?>
