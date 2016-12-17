<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head>
 section and everything up till
<div id="main">
	 * * @package WordPress * @subpackage Twenty_Thirteen * @since Twenty Thirteen 1.0 */ ?><!DOCTYPE html>
	<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
	<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
	<!--[if !(IE 7) & !(IE 8)]><!-->
	<html <?php language_attributes(); ?>> 
	<!--<![endif]-->
	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>
	">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?>
	</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>
	"> 
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>
 

<?php  
if ( wp_is_mobile() ) { ?>
	<link rel="stylesheet"  type="text/css" href="/wp-content/themes/IIMTECH/mobilemenu.css">
<?php } ?>

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<link rel="alternate" href="https://mundilimos.com/" hreflang="en-us"/>
	<link rel="alternate" href="https://mundilimos.com/" hreflang="en-gb"/>

	</head>
	<body <?php body_class(); ?>


