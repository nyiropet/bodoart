jQuery( document ).ready( function( $ ) {
	
	var $homeHeader = $('.home header');
	var $header = $('header');
	var $hamburger = $('.hamburger-box');
	var $logoContainer = $('.home .logo-container');
	var $logo = $('.home header .logo');
	var $content = $('.home content');
	var $body = $('body');
	var $html = $('html');
	var $window = $(window);

	var animateHeader = function() {
		$homeHeader.removeClass('animate');
		$logoContainer.removeClass('animate');
		$logo.removeClass('animate');
		$content.removeClass('animate');
	}

	if($window.width() > 1200) { // Needed resize on window
		$window.scroll(function() {
	  		if($body.hasClass('home') && $homeHeader.hasClass('animate') ) {
	  			$html.css('overflow', 'hidden');
	  			animateHeader();
	  			setTimeout(function(){
	  				$html.css('overflow', 'auto');
	  				$window.scrollTop(0);
	  			}, 800);
	  		} else if( $window.scrollTop() > 1 ) {
	  			$header.css('height', '72px');	// This is the key to get things done with the navigations
	  			$hamburger.removeClass('animate');
	  		} else if ($window.scrollTop() == 0 ) {
	  			$header.css('height', '122px'); // This is the key to get things done with the navigations
	  			$hamburger.addClass('animate');
	  		}

		});
	}
});