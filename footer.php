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
		<div class="site-info">
			<span>&copy; <?php echo date( 'Y' ); ?> <?php echo bloginfo( 'name' ); ?></span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
jQuery(document).ready(function($){
	if ($(window).width() > 767) {
		var x = $( window ).height();
		var $height = x + 'px';
		$("#top-area").css("height", $height);
	};
});
</script>

</body>
</html>
