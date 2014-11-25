<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
	$opts = get_option('home_options');
	$bg_img = $opts['home_bg'];
	if(empty($bg_img)){
		$bg_img = '';
	}
	else{
     	$bg_img = wp_get_attachment_image_src( $bg_img, 'th_clientes', false);
	    $bg_img = $bg_img[0];
		$bg_img = 'background: url('.$bg_img.') no-repeat center left fixed';
	}
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="no-js ie ie7 lt-ie9 lt-ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="no-js ie ie8 lt-ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="home-body" style="<?php echo $bg_img; ?>">
	<header id="header_contato" class="nav_clientes">
			<div class="container">
				<div class="row">
					<a href="<?php echo home_url();?>" class="pull-left">
						<img src="<?php bloginfo('template_url');?>/assets/images/logo-clientes.png">
					</a><!-- .pull-left -->
					<?php get_template_part('content','nav-mobile'); ?>
				</div><!-- .row -->
			</div><!-- .container -->
	</header><!-- .nav_clientes -->
	<div class="container">
		<div id="main" class="site-main row">
