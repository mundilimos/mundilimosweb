//jQuery(document).ready(function($) {

	//nav bar scroll top and not
/*
	$(window).on("scroll", function() {
		var scrollPos = $(window).scrollTop();
		if (scrollPos <= 0) {

			$('nav.navbar.navbar-default').removeClass('nav-fixed');
			$('div.blackbg').removeClass('nav-fixed');
			$('nav.navbar.navbar-default').attr('style', 'top: inherit !important');



		} else {

			$('div.blackbg').addClass('nav-fixed');
			$('nav.navbar.navbar-default').addClass('nav-fixed');
			$('nav.navbar.navbar-default').attr('style', 'top: 3em !important');


		}
	});
*/

 /*
 	$(function() {
		$('.cr1').mouseenter(function() {
			$('.m1p').fadeIn(500);
		});
		$('div.cr1').mouseleave(function() {
			$('.m1p').fadeOut(1000);
		});
	});
	$(function() {
		$('.cr2').mouseenter(function() {
			$('.m2p').fadeIn(500);
		});
		$('div.cr2').mouseleave(function() {
			$('.m2p').fadeOut(1000);
		});
	});
	$(function() {

		$('.cr3').mouseenter(function() {

			$('.m3p').fadeIn(500);

		});

		$('div.cr3').mouseleave(function() {

			$('.m3p').fadeOut(1000);

		});
	});
*/
/*
	function priceSlider() {

		$("#lider section:gt(0)").hide();

		//running every 3 seconds fading out and in and appending
		setInterval(function() {
			$('#lider section:first').fadeOut(500, function() {
				$(this).next().fadeIn(1000).end().appendTo('#lider');
			});
		}, 5000);

	}
	if ($('#lider').length) {
		priceSlider();
	} */
/*
	(function slideMenu() {
		var $trigger = 'menu-trigger'; // the triger class
		var $showslide = 'menu-active'; // the active class
		var $body = 'body';
		var $close = '.menu-closer'; // the close class
		var $slideout = 'slideout'; // the slide show class
		var $slidehide = 'slidehide'; // slide hide, optional not used
		$('.menu-trigger').click(function() {
			$('body').toggleClass($showslide);
			$('div.mobile-menu-slide').toggleClass($slideout);
		});
		$($close, $body).click(function() {

			$('body').removeClass($showslide);
			$('div.mobile-menu-slide').removeClass($slideout);

		});

	}).call(this);

}); */