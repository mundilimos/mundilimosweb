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
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet"> 

<?php  
if ( wp_is_mobile() ) { ?>
	<link rel="stylesheet"  type="text/css" href="/wp-content/themes/IIMTECH/mobilemenu.css">
<?php } ?>

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<link rel="alternate" href="https://mundilimos.com/" hreflang="en-us"/>
	<link rel="alternate" href="https://mundilimos.com/" hreflang="en-gb"/>





		<?php
		if ( wp_is_mobile() ) { ?>
			<link rel="stylesheet"  type="text/css" href="/wp-content/themes/IIMTECH/mobilemenu.css">
		<?php } ?>

		<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

	</head>
	<body <?php body_class(); ?> style="<?php if( is_page_template("template-homepage.php") || is_page_template("template-contact.php")   ){ ?> background-color:#000 !important; color:#fff !important; <?php } else { ?> background-color:#fff !important; color:#000  !important; <?php } ?>">






	<?php
	if ( wp_is_mobile() ) { ?>
		<div id="sticky" class="mobile-menu-slide">
			<ul class="menu-slide-menu">
				<li style="list-style: none; display: inline"><a href="#">
						<div class="icon-btn menu-closer">
							<h2 class="closemenuicon"><i class="fa fa-times" aria-hidden="true"></i></h2>
						</div>
					</a>
				</li>
				<li><a href="tel:8003177087"><i class="fa fa-phone"></i> Call Now!</a></li>
				<li><a href="mailto:info@mundilimos.com"> <i class="fa fa-envelope"></i> Email Us</a>
				</li>
			</ul>
			<div class="mmx">
				<?php wp_nav_menu(); ?>
			</div>
		</div>
		<div class="mobile-contact-sticky">
			<div class="sticky-menu">
				<ul>
					<li><a href="#">
							<div class="icon-btn menu-trigger">
								<i class="fa fa-bars fa-2x"></i>
							</div>
						</a></li>
					<li><a href="tel:8003177087"><i class="fa fa-phone fa-2x"></i></a></li>
					<li><a href="mailto:info@mundilimos.com"> <i class="fa fa-envelope-o fa-2x"></i> </a></li>
				</ul>
			</div>
		</div>
	<?php } ?>

<?php
	if ( wp_is_mobile() ) { ?>
	<header class="mobile" id="mobile-header">
		<div id="splash" class="mobile-contact-panel">
			<ul>
				<li id="the-custom-logo">
					<img src="https://mundilimos.com/wp-content/uploads/2016/07/mundilogo.png" class="imgsplash"> </li>
				<li><a href="tel:8003177087"><i class="fa fa-phone"></i> Call Now</a></li>
				<li><span style="height: 4px;"></span></li>
				<li><a href="https://book.mylimobiz.com/v4/mundilimo"><i class="fa fa-car" aria-hidden="true"></i>
						Book Now </a>
				</li>
			</ul>

				<h1 class="site-title text-center" style="font-size: 30px; text-transform:none !important;">
					Worldwide Chauffeured <br>
					Services </h1>
		</div>
	</header>


	<?php } ?>





	<section id="<?php if( is_page_template("template-homepage.php") || is_page_template("template-contact.php")   ){ ?>bigbg<?php }?>" class="<?php if(! is_page_template("template-homepage.php") || is_page_template("template-contact.php") ){ ?> biggy <?php }?>"  style="<?php if( is_page_template("template-contact.php") ){ ?> background-image: url(/wp-content/uploads/2016/07/mundipenimage.jpg); <?php }?> "
	>







		<div class="blackbg">


			<div class="container">
		<div class="row">
	<div class="col-md-4"></div>
			<div class="col-md-8">
				<div class="col-md-3"> <a href="tel:8003177087" class="cta">  <i class="fa fa-phone" aria-hidden="true"></i>   &nbsp; 800.317.7087 </a> </div>
				<div class="col-md-3"> <a href="mailto:info@mundilimos.com" class="cta"> <i class="fa fa-envelope" aria-hidden="true"> </i>  &nbsp; info@mundilimos.com</a> </div>

				<div class="col-md-5">



					<ul class="footersocial">
						<li><a href="https://www.facebook.com/mundilimos" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i>
							</a></li>
						<li><a href="https://twitter.com/mundilimos" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i>
							</a></li>
						<li><a href="https://www.linkedin.com/company/mundi-limos" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i>
							</a></li>
						<li><a href="https://plus.google.com/+mundiLimos" target="_blank"> <i class="fa fa-google-plus-official" aria-hidden="true"></i>
							</a></li>
						<li><a href="https://www.youtube.com/channel/UClHIHKPbVOfFFCr4BYGvVfw" target="_blank"> <i class="fa fa-youtube" aria-hidden="true"></i>
							</a></li>
					</ul>


				</div>
			</div>



		</div>
</div>
		</div>



		<!-- Nav goes here -->

<div style="<?php if( is_page_template("template-homepage.php") || is_page_template("template-contact.php")  ){ ?>  <?php } else { ?> background-color:#000 !important; color:#fff  !important; <?php } ?>" >

		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="col-md-4">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="logo pull-left" href="https://www.mundilimos.com"> <img class="logoimg" src="https://www.mundilimos.com/wp-content/uploads/2016/07/mundilogo.png"> </a>
				</div>
			</div>
			<div class="col-md-8">
				<div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">

					<!--

					<ul id="menu-primary-1" class="nav navbar-nav">



						<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-9007 active"><a title="Home" href="/">Home</a></li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9010"><a title="Fleet" href="https://www.mundilimos.com/fleet/">Fleet</a></li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9008"><a title="Services" href="/service">Services</a></li>

						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9011"><a title="Blog" href="https://www.mundilimos.com/news-2/">Blog</a></li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9009"><a title="Contact Us" href="https://www.mundilimos.com/about-us/">About</a></li>

						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9009"><a title="Contact Us" href="https://www.mundilimos.com/contact-us/">Contact</a></li>

					</ul>
				-->

					<?php wp_nav_menu(); ?>




				</div>		</div>
		</div>


	<?php if( is_page_template("template-homepage.php") ){ ?>  <?php } else { ?>  <h2 class="text-center text-white" style="padding-bottom: 27px;"><?php the_title(); ?> </h2> <?php } ?>


		</div>

		<!--nav ends -->


		<?php if( is_page_template("template-homepage.php") ){ ?> <h2>WELCOME TRAVELER </h2>

		<?php } ?>

		<?php if( is_page_template("template-homepage.php") || is_page_template("template-contact.php") ){ ?>


			<a href="https://book.mylimobiz.com/v4/mundilimo" class="booking">  BOOK A RIDE </a>

		<?php } ?>


</section>



	<?php include 'options.php'; ?>



