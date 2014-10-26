<?php
/**
 * Template Name: Home Page
 *
 * @package _s
 */

get_header(); ?>

	<!-- Top -->
	<div id="top" class="section top-section contrast">
		<?php get_template_part( 'partials/home/content', 'top' ); ?>
	</div><!-- .section -->

	<!-- Menu -->
	<div id="menu" class="section menu-section">
		<?php get_template_part( 'partials/home/content', 'menu' ); ?>
	</div><!-- .section -->

	<!-- Gallery -->
	<div id="gallery" class="section gallery-section contrast">
		<?php get_template_part( 'partials/home/content', 'gallery' ); ?>
	</div><!-- .section -->

	<!-- Press -->
	<div id="press" class="section press-section contrast">
		<?php get_template_part( 'partials/home/content', 'press' ); ?>
	</div><!-- .section -->

	<!-- Info -->
	<div id="info" class="section info-section">
		<?php get_template_part( 'partials/home/content', 'info' ); ?>
	</div><!-- .section -->

<?php get_footer(); ?>
