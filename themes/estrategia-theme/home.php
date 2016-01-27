<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Inkness
 */

get_header(); ?>
<main id="primary-home" class="site-content container">
	<div class="row">
		<div class="col-md-8">
			<?php get_template_part( 'home-list-posts' ); ?>
		</div>
		<div class="col-md-4">
			<h3>Side bar</h3>
			<span>
				Bienvenido a WordPress. Esta es tu primera entrada. Edítala o bórrala, ¡y comienza a publicar!.
			</span>
		</div>
	</div>
</main><!-- #content -->
<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>