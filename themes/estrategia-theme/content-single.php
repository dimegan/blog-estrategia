<?php
/**
 * @package Inkness
 */
?>
<div class="row">
	<div class="col-md-12">
		<header class="entry-header">
			<h1 class="entry-title text-center"><?php the_title(); ?></h1>
			<div class="entry-meta">
				<?php inkness_posted_on(); ?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->

			<div id="social-buttons">
				<!-- FACEBOOK SHARE BUTTON -->
				<div class="fb-like facebook-widget" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true">
				</div>
			</div>
			<br/>
			<!-- AUTHOR INFO -->
			<?php get_template_part( 'dmg/author-info' ); ?>
			<br/>
			<!-- RELATED POSTS -->
			<?php get_template_part( 'dmg/related-posts' ); ?>
			<br/>
			<!-- FACEBOOK COMMENT DIRECTION -->
			<div class="fb-comments facebook-widget" data-href="<?php the_permalink(); ?>" data-numposts="5" data-colorscheme="light" data-width="100%">
			</div>
			<!-- END COMMENT DIRECTION -->

			<footer class="entry-meta">
				<?php edit_post_link( __( 'Edit', 'inkness' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-meta -->
		</article><!-- #post-## -->
	</div>
</div>