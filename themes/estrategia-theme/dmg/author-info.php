<!-- INFORMACION COOL DEL AUTOR-->
<?php $display_name = get_the_author_meta( 'display_name' ); ?>
<?php $nickname = get_the_author_meta( 'nickname' ); ?>
<?php $description = get_the_author_meta( 'description' ); ?>
<?php $user_url = get_the_author_meta( 'user_url' ); ?>
<div id="author-info">
	<h3><?php echo $display_name ?></h3>
	<div class="icon-autor">
		<img src="<?php echo get_template_directory_uri(); ?>/images/icons/twitter.png" alt="Twitter">
		<a href="https://twitter.com/<?php echo $nickname ?>" target="_blank">@<?php echo $nickname ?></a>
	</div>
	<?php if (isset($user_url) && strlen($user_url) > 0): ?>
		<div class="icon-autor">		
			<img class="link-icon" src="<?php echo get_template_directory_uri(); ?>/images/icons/link.png" alt="Twitter">
			<a href="<?php echo $user_url ?>" target="_blank"><?php echo $user_url ?></a>
		</div>
	<?php endif; ?>
	<p>
		<?php echo $description ?>
	</p>
</div>