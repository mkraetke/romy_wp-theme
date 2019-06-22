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
	<meta name="theme-color" content="#76fe96"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="icon" sizes="192x192" href="<?php bloginfo('template_url'); ?>/img/icons/icon.png"/>
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/icons/ios-icon.png"/>
	<link rel="profile" href="https://gmpg.org/xfn/11"/>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/lib/bootstrap/css/bootstrap.min.css"/>
	<?php wp_head(); ?>
	<style>
		.bg {
			background-image: url("<?php bloginfo('template_url'); ?>/img/bg<?php echo rand(1,5);?>.jpg");
			}
	</style>
</head>
<body <?php body_class(); ?>>
	<div class="bg <?php if (! is_home()){ echo 'bgnone';} ?>">
		<?php
			include('navbar.php');
		?>  
	</div>
	<div id="page" class="site">
		<div id="content" class="site-content <?php if ( is_home() ){ echo 'site-home'; } ?>">
