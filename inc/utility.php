<?php
/**
 * Utility Functions
 *
 * @package _s
 */

/**
 * Clean up some header items
 */
// hat tip: http://gomakethings.com/remove-junk-from-the-wordpress-header/
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');
remove_action('wp_head', 'rel_canonical', 10, 0 );
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );

/**
 * Google analytics setup
 */
function _s_google_analytics() { ?>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', '<?php echo get_theme_mod( 'analytics_code' ); ?>', 'auto');
		ga('send', 'pageview');
	</script>
<?php }
if ( get_theme_mod( 'analytics_code' ) ) {
	add_action( 'wp_head', '_s_google_analytics' );
}

/**
 * Display template or query object
 */
function _s_show_template() {
	global $template;
	print_r( $template );
}
function _s_show_query_object() {
	$query_object = get_queried_object();
	echo '<pre>';
	print_r( $query_object );
	echo '</pre>';
}
//add_action( 'wp_head', '_s_show_template' );
//add_action( 'wp_head', '_s_show_query_object' );

/**
 * Flush rewrite rules on theme activation
 */
function _s_flush_rewrite_rules() {
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', '_s_flush_rewrite_rules' );

/**
 * Post thumbnail URL function
 */
function _s_feat_img_url( $size ) {
	// hat tip: http://goo.gl/fzHOaB
	$img_id = get_post_thumbnail_id();
	$img_array = wp_get_attachment_image_src( $img_id, $size );
	$img_url = $img_array[0];
	return $img_url;
}

/**
 * Post thumbnail alt text function
 */
function _s_feat_img_alt() {
	$img_id = get_post_thumbnail_id();
	$img_alt = get_post_meta( $img_id, '_wp_attachment_image_alt', true );
	return $img_alt;
}

/**
 * Get home page ID
 */
function _s_home_page_ID() {
	$home_id = get_option( 'page_on_front' );
	return $home_id;
}

/**
 * Strip phone number formatting
 */
function _s_phone_number( $phone ) {
	$phone = preg_replace( '/[^0-9]/', '', $phone );
	return $phone;
}

/**
 * Custom excerpt w/HTML tags
 */
// hat-tip: http://goo.gl/EMi3EN
function _s_better_excerpt( $text ) {
	global $post;
	if ( '' == $text ) {
		$allowed = '<strong><a><p>';
		$link = get_permalink();
		$text = get_the_content( '' );
		$text = apply_filters( 'the_content', $text );
		$text = str_replace( '\]\]\>', ']]&gt;', $text );
		$text = strip_tags( $text, $allowed );
		$length = 75;
		$words = explode( ' ', $text, $length + 1 );
		if ( count( $words ) > $length ) {
			array_pop( $words );
			array_push( $words, '<a href="' . $link . '">[...]</a>' );
			$text = implode( ' ', $words );
		}
		return $text;
	}
}
remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
add_filter( 'get_the_excerpt', '_s_better_excerpt' );

/**
 * Remove editor on home page
 */
function _s_remove_page_editor() {
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];
	if ( !isset( $post_id ) ) return;

	$template = get_post_meta( $post_id, '_wp_page_template', true );
	if ( $template == 'page-templates/home-page.php' ) {
		remove_post_type_support( 'page', 'editor' );
	}
}
add_action( 'admin_init', '_s_remove_page_editor' );
