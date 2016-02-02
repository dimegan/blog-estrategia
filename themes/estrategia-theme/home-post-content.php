<div class="row">
	<div class="col-md-12">
		<article id="post-<?php the_ID(); ?>">
			<div class="article-wrapper">	
				<?php if (has_post_thumbnail()) : ?>
					<div class="featured-thumb">
						<a href="<?php the_permalink(); ?>">
						<?php
							the_post_thumbnail('homepage-banner');	
						?>
						</a>
					</div>
				<?php endif; ?>
				<header class="entry-header">
					<h1 class="entry-title text-center">
						<a href="<?php the_permalink(); ?>" rel="bookmark" class="animate-hover est-link">
							<?php the_title(); ?>
						</a>
					</h1>

					<?php if ( 'post' == get_post_type() ) : ?>
					<div class="entry-meta text-center">
						<?php inkness_posted_on(); ?>
					</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->
				<div class="article-rest post-summary">
					<div class="entry-content">
						<?php the_excerpt(); ?>
					</div><!-- .entry-content -->
					<div class="webly-read-more">
						<a href="<?php the_permalink(); ?>" class="animate-hover btn-action btn-read-more">
							Continuar leyendo
						</a>
					</div>
				</div>
			</div>	
		</article><!-- #post-## -->
	</div>
</div>