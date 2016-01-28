<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Inkness
 */
?>
	<!-- MenuEstrategia must be the default menu -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php wp_nav_menu( array( 'menu' => 'MenuEstrategia', 
			'theme_location' => 'secondary',
			'menu_id'      => 'footer-menu' ) ); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php		
	if ( (function_exists( 'of_get_option' ) && (of_get_option('footercode1', true) != 1) ) ) {
			 	echo of_get_option('footercode1', true); } ?>

<?php wp_footer(); ?>
<?php get_template_part( 'dmg/google-analytics' ); ?>
</body>
</html>