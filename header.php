<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package romy2
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="profile" href="https://gmpg.org/xfn/11"/>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/lib/bootstrap/css/bootstrap.min.css"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="bg <?php if (! is_home()){ echo 'bgnone';} ?>">
  <?php
			include('navbar.php');
			?>
  
  </div>


<div id="page" class="site">


	<header id="masthead" class="site-header">
		
			
	</header><!-- #masthead -->

	<div id="content" class="site-content <?php if ( is_home() ){ echo 'site-home'; } ?>">
