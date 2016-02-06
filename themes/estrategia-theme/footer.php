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
						Cursos profesionales de desarrollo web y de apps, marketing online, diseño de interfaces, servidores. Con clases en vivo y profesores sabios de la industria.
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
						<!-- social networks -->
						<ul id="social-list" class="list-unstyled text-center">
							<li>
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook.png" alt="Siguenos en facebook">			
									<span>/estrategias-docentes</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icons/twitter.png" alt="Siguenos en twitter">			
									<span>@estrategias.docentes</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icons/linkedin.png" alt="Siguenos en linkedin">			
									<span>/estrategias-docentes</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icons/youtube.png" alt="Siguenos en youtube">			
									<span>Estrategias docentes</span>
								</a>
							</li>
						</ul>
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