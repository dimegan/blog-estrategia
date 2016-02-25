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
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="<?php echo get_template_directory_uri(); ?>/images/custom/logo-estrategias.png" alt="Logo estrategias docentes" class="img-responsive center-block">
					<p>
						Blog para intercambiar saberes, formular preguntas y apoyar el uso de las nuevas tecnologías en la educación preescolar.
					</p>
				</div>
				<div class="col-md-4">
					<!-- menu on footer-->
					<div class="footer-sec-content">
						<?php wp_nav_menu( array( 'menu' => 'MenuEstrategia', 
						'theme_location' => 'secondary',
						'menu_id'      => 'footer-menu',
						'menu_class' =>  'list-unstyled text-center') ); ?>
					</div>
				</div>
				<div class="col-md-4">
					<div class="footer-sec-content">
						<?php get_template_part( 'dmg/social-footer' ); ?>
					</div><!-- deconday content-->
				</div><!-- col-md-4 -->
			</div>
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