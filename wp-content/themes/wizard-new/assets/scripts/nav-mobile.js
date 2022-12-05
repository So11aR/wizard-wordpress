$(function(){
	$(".nav-menu-mobile").click(function(){
		$(".nav-menu-mobile-block").slideToggle();
		$(this).toggleClass('nav-menu-mobile-active');
	});
});