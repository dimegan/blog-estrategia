<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Inkness
 */

get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="content-area container">
			<div class="row">
				<div class="col-md-8">
					<?php get_template_part( 'single', 'header' ); ?>
					<?php get_template_part( 'content', 'single' ); ?>	
				</div>
				<div class="col-md-4">
					<h3>Side bar</h3>
					<span>
						Bienvenido a WordPress. Esta es tu primera entrada. Edítala o bórrala, ¡y comienza a publicar!.
					</span>
				</div>
			</div>
		</div><!-- #content -->
	<?php endwhile; // end of the loop. ?>
<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>