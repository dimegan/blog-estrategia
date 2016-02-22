<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Inkness
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="fb:app_id" content="1538083516521388"/>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/custom/favicon.ico" type="image/x-icon" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.3&appId=764358787011835";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
<div id="page" class="hfeed site">
	<?php do_action( 'inkness_before' ); ?>
	<div id="header-2" class="wrapper-menu">
		<div class="container">
			<div class="default-nav-wrapper col-md-12 col-xs-12"> 	
				<nav id="site-navigation" class="main-navigation" role="navigation">
				 <div id="nav-container">
					<h1 class="menu-toggle"></h1>
					<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'inkness' ); ?>"><?php _e( 'Skip to content', 'inkness' ); ?></a></div>

					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				  </div>  
				</nav><!-- #site-navigation -->
				<div class="social-header visible-lg-block visible-md-block">
					<?php get_template_part( 'social-header' ); ?>
				</div><!-- social header-->
			</div><!-- col -->
		</div><!-- row -->
	</div>
	<header>
		<div id="estrategias-header">
			<img src="<?php echo get_template_directory_uri(); ?>/images/custom/estrategias-header.jpg" alt="Estrategias docentes" class="img-responsive center-block">			
		</div>
	</header>
	
	

	
	
		
