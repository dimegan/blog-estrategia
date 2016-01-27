<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Inkness
 */

get_header(); ?>	
	<div class="content-area container">
		<div class="row">
			<div class="col-md-8">
				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'inkness' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'home-post-content' );  ?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'no-results', 'search' ); ?>

				<?php endif; ?>
			</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div><!-- #content -->
<?php get_footer(); ?>