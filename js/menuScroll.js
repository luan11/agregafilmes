var menuLink = $('#firstMenu li a');
var navHeight = $('#navigation').height();
var nav = $('#navigation');

menuLink.on('click',function(){
	
	var selector = $(this).attr("href");
	var position = $(selector).offset().top;
	
	$("html, body").animate({scrollTop: position-navHeight},800);
	
});

$(window).scroll(function(){
	var minhaposicao = $(this).scrollTop();
		if(minhaposicao >= 250) {
			nav.addClass("sticky-top");
		}else {
			nav.removeClass("sticky-top");
		}
});