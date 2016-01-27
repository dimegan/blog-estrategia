<?php 
	if ( is_single() ): // Si es un single post
		$postCategories = get_the_category();
		$postId = get_the_ID(); // El id del current post

		if(! empty( $postCategories ) && sizeof($postCategories) > 0):
		
			$arrayCategories = array();
			foreach($postCategories as $category) {
				array_push($arrayCategories,$category->term_id);
			}	

			?>
			<!-- POST RELACIONADOS POR CATEGORIA -->
			<div class="related-posts">
				<h3>Estos artículos podrían interesarte </h3>	
				
				<?php 
				 $args = array( // La variable
					'cat'=>implode(",",$arrayCategories), // Buscamos articulos de las categorías del actual
					'showposts' => 3, // El número de posts que se van a listar
					'post__not_in' => array($postId) // Llama al id del post actual para que no sea listado
					);
				?>
				
				<div class="row">
				 <?php $recent = new WP_Query($args); while($recent->have_posts()) : $recent->the_post();?>
					 <div class="col-xs-12 col-md-4 col-sm-4 ">
						 <div class="related-item">
						 	<a href="<?php the_permalink() ?>">
								<?php the_post_thumbnail( 'medium', array( 'class' => 'img-responsive center-block' )  ); ?>
						 	</a>
						 	<div class="related-info">
							 	<span>
							 		<a class="tittle-post-relation" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
							 	</span>
							 	<br/>
							 	<span class="meta-data">
							 		<i class="fa fa-clock-o"></i>
							 		<?php the_time('j F, Y'); ?> 
							 	</span>
						 	</div>
						 </div>
					 </div>
				 <?php endwhile; ?>
				 <?php wp_reset_postdata(); ?>
				</div>
			</div>
	<!-- if(! empty( $categories )) -->
	<?php endif ?>
<!-- end If (is_single()) -->
<?php endif ?>
