jQuery( document ).ready( function( $ ) {
	
	var $homeHeader = $('.home header');
	var $header = $('header');
	var $headerNav = $('header nav');
	var $hamburger = $('.hamburger');
	var $hamburgerBox = $('.hamburger-box');
	var $logoContainer = $('.home .logo-container');
	var $logo = $('.home header .logo');
	var $content = $('.home content');
	var $body = $('body');
	var $html = $('html');
	var $window = $(window);

	// Animation classes on header
	var removeHeaderAnimationClasses = function() {
		$homeHeader.removeClass('animate');
		$logoContainer.removeClass('animate');
		$logo.removeClass('animate');
		$content.removeClass('animate');
	}

	// Remove navigation classes
	var removeNavigationClasses = function() {
		$headerNav.removeClass('wide-active');
		$headerNav.removeClass('active');
		$hamburger.removeClass('is-active');
		$hamburgerBox.removeClass('animate');
	}

	// Add navigation classes
	var addNavigationClasses = function() {
		$headerNav.addClass('wide-active');
		$hamburgerBox.addClass('animate');
	}

	// Getting the current width of the screen
	var getCurrentWidth = function() {
		var windowWidth = $window.width();
		return windowWidth;
	}

	// Scroll animation
	var scrollAnimation = function() {
	  		if ( $body.hasClass('home') && $homeHeader.hasClass('animate') ) {
	  			$html.css('overflow', 'hidden');
	  			removeHeaderAnimationClasses();
	  			setTimeout( function(){
	  				$html.css('overflow', 'auto');
	  				$window.scrollTop(0);
	  			}, 800);
	  		} else if ( $window.scrollTop() > 1 ) {
	  			removeNavigationClasses();
	  		} else if ( $window.scrollTop() == 0 ) {
	  			addNavigationClasses();
	  		}

	  		if ( !$body.hasClass('home') && $window.scrollTop() > 420 ) {
	  			$('.sidebar-contact-info').css('margin-top', '0');
	  		} else {
	  			$('.sidebar-contact-info').css('margin-top', '-196px');
	  		}
	}

	// Getting the current width of the screen when the user resizes the window
	$window.resize(function() {
		getCurrentWidth();
	});

	// The animation is happening on scroll event
	$window.scroll(function() {
		if ( getCurrentWidth() > 1200 ) {
			scrollAnimation();
		}
	});

});