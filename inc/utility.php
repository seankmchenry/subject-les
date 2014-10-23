<?php
/**
 * Utility Functions
 *
 * @package _s
 */

/**
 * Flush rewrite rules on theme activation
 */
function _s_flush_rewrite_rules() {
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', '_s_flush_rewrite_rules' );

/**
 * Add page template slug body class
 */
function _s_page_template_slug( $slug ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = get_page_template_slug( $post->ID );
		// get only template name if in subfolder
		$class_slug = ltrim( strstr( $classes[0], '/' ), '/' );
		// remove the file extension
		$slug[] = str_replace( '.php', '', $class_slug );
	}
	return $slug;
}
add_filter( 'body_class', '_s_page_template_slug' );

/**
 * Post Thumbnail URL function
 */
function _s_thumbnail_url( $size ) {
	// hat tip: http://goo.gl/fzHOaB
	$img_id = get_post_thumbnail_id();
	$img_array = wp_get_attachment_image_src( $img_id, $size, true );
	$img_url = $img_array[0];
	return $img_url;
}

/**
 * Detect current template
 *//*
function _s_show_template() {
	global $template;
	print_r( $template );
}
add_action( 'wp_head', '_s_show_template' ); */
