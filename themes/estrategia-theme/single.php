<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Inkness
 */

get_header(); ?>
	<div class="content-area container">
		<div class="row">
			<div class="col-md-8">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'single', 'header' ); ?>
					<?php get_template_part( 'content', 'single' ); ?>	
				<?php endwhile; // end of the loop. ?>
			</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div><!-- #content -->
<?php get_footer(); ?>