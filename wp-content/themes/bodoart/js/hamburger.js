jQuery( document ).ready( function( $ ) {
	$('.hamburger').click(function(){
		if($('.phone-numbers').hasClass('active')) {
			$('.phone-numbers').removeClass('active');
			$(this).toggleClass('is-active');
			$('header nav').toggleClass('active');
			$('header nav').toggleClass('wide-active');
		}else {
			$(this).toggleClass('is-active');
			$('header nav').toggleClass('active');
			$('header nav').toggleClass('wide-active');
		}
	});

	$('.header-phone').click(function(){
		if($('header nav').hasClass('active')) {
			$('.hamburger').removeClass('is-active');
			$('header nav').removeClass('active');
			$('.phone-numbers').toggleClass('active');
		} else {
			$('.phone-numbers').toggleClass('active');
		}
	});
});