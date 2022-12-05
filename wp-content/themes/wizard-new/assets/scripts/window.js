$(function(){
		$(".window").hide();
		
		$(".window-link").click(function(){
		$(this).parent().children(".window").fadeIn(200);
	});
	
	$(".window-close").click(function(){
		$(".window").fadeOut(200);
	});
});