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

<?php if ( is_front_page() ) { ?>
	<script type="text/javascript">
	jQuery(document).ready(function($){
		$('.window').windows({
			snapping: true,
			snapSpeed: 500,
			snapInterval: 1100,
			onScroll: function(scrollPos){
				// scrollPos:Number
			},
			onSnapComplete: function($el){
				// after window ($el) snaps into place
			},
			onWindowEnter: function($el){
				// when new window ($el) enters viewport
			}
		});
	});
	</script>
<?php } ?>

</body>
</html>
