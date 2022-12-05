$(function(){
	$('.nav-menu li.dop').hover(function() {
		$(this).addClass('active-menu');
		$(this).find('div').addClass('showme1');
		$('.bg-black').addClass('showme2');
	},
	function() {
		$(this).removeClass("active-menu");     
		$(this).find('div').removeClass('showme1');
		$('.bg-black').removeClass('showme2');
	});
});