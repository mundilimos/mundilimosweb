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
	
 

	<?php
if (! wp_is_mobile() ) { ?>
	<link href="/wp-content/themes/IIMTECH/desktop.css" media="only screen and (min-device-width: 1024px)" rel="stylesheet">
	<style>
.theboxinner img{
    height: 244px !IMPORTANT;
}
	</style>
	<?php } ?>
	<?php include 'options.php'; ?>
	<?php
if ( wp_is_mobile() ) { ?>
	<?php if(! is_page( '8' ) ) { ?>
	<style type="text/css" rel="stylesheet">
body {
    color: #000 !important;
    background-color: #fff !important;
}
footer#colophon{
min-height: 1400px !important; clear:both;
}
	</style>
	<?php } ?>
	<?php } ?>
	<?php
if (! wp_is_mobile() ) { ?>
	<?php if(! is_page( '8' ) ) { ?>
	<style type="text/css" rel="stylesheet">
body {
    color: #000 !important;
    background-color: #fff !important;
}
.nav-fixed {
    background: #000 !important;
}
.blackbg{
	background-color:#000;	
		z-index:99999 !important;
		}
.navbar-default {
    background-color: #000 !important;
	border-radius:0px !important;
}
.nav-fixed {
    background: #000 !important;
}
.blackbg{ background: #000 !important;
    opacity: 5 !important;
}
	</style>
	<?php } ?>
	<?php } ?>
	<style>
.nav-fixed {
    background: #000 !important;
}
	</style>
	<?php
if (! wp_is_mobile() ) { ?>
	<?php if( is_page( '8' ) ) { ?>
	<style type="text/css" rel="stylesheet">
.navbar-default {
    background-color: transparent !important;
	border-radius:0px !important;
}
.nav-fixed {
    background: #000 !important;
}
a.boxh3a:hover {
    border: none !important;
}
.thebox{
	background: #000;
    opacity: 0.7;
	}
	</style>
	<?php } ?>
	<?php } ?>
	</head>
	<body <?php body_class(); ?>
	>
	<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create','UA-65102923-8','auto');ga('send','pageview');</script>





<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '370299159969508'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=370299159969508&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->





	<!-- Mobile Menu Goes Here -->
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
			<li><a href="tel:<?php echo $wphone ?>"><i class="fa fa-phone"></i> Call Now!</a></li>
			<li><a href="mailto:<?php echo $wemail ?>"> <i class="fa fa-envelope"></i> Email Us</a>
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
				<li><a href="tel:<?php echo $wphone ?>"><i class="fa fa-phone fa-2x"></i></a></li>
				<li><a href="mailto:<?php echo $wemail ?>"> <i class="fa fa-envelope-o fa-2x"></i> </a></li>
			</ul>
		</div>
	</div>
	<?php } ?>
	<?php
if (! wp_is_mobile() ) { ?>
	<div id="sticky" class="mobile-menu-slide">
		<ul class="menu-slide-menu">
			<li style="list-style: none; display: inline"><a href="#">
			<div class="icon-btn menu-closer">
				<h2 class="closemenuicon"><i class="fa fa-times" aria-hidden="true"></i></h2>
			</div>
			</a>
			</li>
			<li><a href="tel:<?php echo $wphone ?>"><i class="fa fa-phone"></i> Call Now!</a></li>
			<li><a href="mailto:<?php echo $wemail ?>"> <i class="fa fa-envelope"></i> Email Us</a>
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
				<li><a href="tel:<?php echo $wphone ?>"><i class="fa fa-phone fa-2x"></i></a></li>
				<li><a href="mailto:<?php echo $wemail ?>"> <i class="fa fa-envelope-o fa-2x"></i></a></li>
			</ul>
		</div>
	</div>
	<?php } ?>
	<!-- Mobile Menu Goes Here -->
	<?php
if ( wp_is_mobile() ) { ?>
	<header class="mobile" id="mobile-header">
	<div id="splash" class="mobile-contact-panel">
		<ul>
			<li id="the-custom-logo">
			<img src="<?php echo $logosrc; ?>" class="imgsplash"> </li>
			<li><a href="tel:<?php echo $wphone ?>"><i class="fa fa-phone"></i> Call Now</a></li>
			<li><span style="height: 4px;"></span></li>
			<li><a href="<?php echo $booknow ?>"><i class="fa fa-car" aria-hidden="true"></i>
			Book Now </a>
			</li>
		</ul>
		<?php if(! is_page( '8' ) ){ ?>
		<h1 class="site-title text-center" style="font-size: 26px;">
		<?php the_title(); ?>
		</h1>
		<?php } ?>
		<?php if( is_page( '8' ) ){ ?>
		<h1 class="site-title text-center" style="font-size: 30px; text-transform:none !important;">
		Worldwide Chauffeured <br>
		 Services </h1>
		<?php } ?>
	</div>
	</header>
	<?php } ?>
	<?php
if (! wp_is_mobile() ) { ?>
	<div class="blackbg">
		<div class="container blackbg">
			<div class="col-md-6">
				<div class="topcta">
					<a href="tel:<?php echo $wphone; ?>"> <i class="fa fa-phone" aria-hidden="true"></i> 800.317.7087 </a> &nbsp; &nbsp; <a href="mailto:<?php echo $wemail; ?>"> <i class="fa fa-envelope" aria-hidden="true"></i>  <?php echo $wemail; ?>
					</a>
				</div>
			</div>
			<div class="col-md-6">
				<ul class="footersocial">
					<li><a href="<?php echo $facebooka; ?>" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i>
					</a></li>
					<li><a href="<?php echo $twittera; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i>
					</a></li>
					<li><a href="<?php echo $linkedina; ?>" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i>
					</a></li>
					<li><a href="<?php echo $googleplusa; ?>" target="_blank"> <i class="fa fa-google-plus-official" aria-hidden="true"></i>
					</a></li>
					<li><a href="<?php echo $youtubea; ?>" target="_blank"> <i class="fa fa-youtube" aria-hidden="true"></i>
					</a></li>
				</ul>
			</div>
		</div>
	</div>
	<?php } ?>
	<?php
if (! wp_is_mobile() ) { ?>
	<nav class="navbar navbar-default" role="navigation">
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
				<a class="logo pull-left" href="<?php echo home_url(); ?>"> <img class="logoimg" src="<?php echo $logosrc ?>"/> </a>
			</div>
		</div>
		<div class="col-md-8">
<?php
            wp_nav_menu( array(
                'menu'              =>
			 'primary', 'theme_location' => 'primary', 'depth' => 2, 'container' => 'div', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'bs-example-navbar-collapse-1', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker()) ); ?>
		</div>
	</div>
	</nav>
	<?php } ?>
	<?php
if (! wp_is_mobile() ) { ?>
	<?php if( is_page( '8' ) ) { ?>
	<div id="lider">
		<section class="slide2">
		<div class="slide2inner">
			<div class="edge-title">
				MOVING YOU FORWARD
			</div>
			<div class="edge-desc">
				MAKING YOUR TRANSFER AN UNFORGETTABLE EXPERIENCE
			</div>
			<div>
				<a href="/contact-us" class="mk-button"><span>BOOK A RIDE!</span></a>
			</div>
		</div>
		</section>
		<section class="slide3">
		<div class="slide2inner">
			<div class="edge-title">
				 ALWAYS ON TIME
			</div>
			<div class="edge-desc">
				BENCHMARKING THE VALUE ON PUNCTUALITY
			</div>
			<div>
				<a href="/contact-us" class="mk-button"><span>BOOK A RIDE!</span></a>
			</div>
		</div>
		</section>
		<section class="slide4">
		<div class="slide2inner">
			<div class="edge-title">
				RIDE CONNECTED
			</div>
			<div class="edge-desc">
				ULTIMATE ONBOARD TECHNOLOGY AND LUXURIOUS AMENITIES
			</div>
			<div>
				<a href="/contact-us" class="mk-button"><span>BOOK A RIDE!</span></a>
			</div>
		</div>
		</section>
	</div>
	<?php } ?>
	<?php } ?>
	<?php
if (! wp_is_mobile() ) { ?>
	<?php if( is_single() ) { ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->
	<div class="bigpostwrap" style="position:relative;">
		<div class="bigpostimage" style="position:relative;">
			<div class="opacity6">
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); ?>
			</div>
			<h1 class="bigimageh2"><?php the_title(); ?>
			</h1>
			<a href="/contact-us/#quote" class="mk-button mk22"><span>BOOK A RIDE!</span></a>
		</div>
		<?php }  ?>
	</div>
</div>
<?php endwhile;
//ends loop
 ?>
<?php  } ?>
<?php  } ?>
<?php
if (! wp_is_mobile() ) { ?>
<?php if( is_page('8907') ) { ?>
<?php while ( have_posts() ) : the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->
<div class="bigpostwrap" style="position:relative;">
	<div class="bigpostimage" style="position:relative;">
		<div class="opacity6 concon" style="color:#000;">
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); ?>
		</div>
		<div class="upupcontact">
			<h2 class="bigimageh2" style="top:5% !important;"><?php the_title(); ?>
			</h2>
			<hp class="text-center"> Allow our team of seasoned travel and transportation professionals to assist you. Around the corner or around the globe, our operators are<strong> standing by 24/7/365</strong>.
		</p>
		<div class="text-center contactus">
			<h2>
			Phone: <a href="tel:8003177087">(800) 317-7087</a>
			<br/>
			<br/> Email: <a href="mailto:info@mundilimos.com">info@mundilimos.com</a>
			</h2>
		</div>
	</div>
	<?php }  ?>
</div>
</div>
<?php endwhile;
//ends loop
 ?>
<?php  } ?>
<?php  } ?>
<?php
if (! wp_is_mobile() ) { ?>
<?php if( is_page_template('template-landing.php') ) { ?>
<?php while ( have_posts() ) : the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->
<div class="bigpostwrap" style="position:relative;">
<div class="bigpostimage" style="position:relative;">
	<div class="opacity6">
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); ?>
	</div>
	<div itemscope="" itemtype="http://schema.org/Service">
		<h1 itemprop="description" class="bigimageh2"><?php the_title(); ?>
		</h1>
		<a href="/contact-us" class="mk-button lele"> BOOK A RIDE! </a>
	</div>
	<?php }  ?>
</div>
</div>
<?php endwhile;
//ends loop
 ?>
<?php  } ?>
<?php  } ?>
<?php
if (! wp_is_mobile() ) { ?>
<?php if( is_page_template('template-aff.php') ) { ?>
<?php while ( have_posts() ) : the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->
<div class="bigpostwrap" style="position:relative;">
<div class="bigpostimage" style="position:relative;">
	<div class="opacity6">
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); ?>
	</div>
	<div itemscope="" itemtype="http://schema.org/Service">
		<h1 itemprop="description" class="bigimageh2"><?php the_title(); ?>
		</h1>
		<a href="/contact-us" class="mk-button lele"> BOOK A RIDE! </a>
	</div>
	<?php }  ?>
</div>
</div>
<?php endwhile;
//ends loop
 ?>
<?php  } ?>
<?php  } ?>
<?php
if (! wp_is_mobile() ) { ?>
<?php if( is_page_template('template-affiliate.php') ) { ?>
<?php while ( have_posts() ) : the_post(); ?>
<!-- LOOP SETTINGS ENDS LOOP STARTS BELOW -->
<div class="bigpostwrap" style="position:relative;">
<div class="bigpostimage" style="position:relative;">
	<div class="opacity6">
<?php if( has_post_thumbnail() ){ the_post_thumbnail(); ?>
	</div>
	<div itemscope="" itemtype="http://schema.org/Service">
		<h1 itemprop="description" class="bigimageh2"><?php the_title(); ?>
		</h1>
		<a href="/contact-us" class="mk-button lele"> BOOK A RIDE! </a>
	</div>
	<?php }  ?>
</div>
</div>
<?php endwhile;
//ends loop
 ?>
<?php  } ?>
<?php  } ?>
<div class="sitewrapper container">