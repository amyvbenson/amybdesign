$(document).ready(function(){
	
	// drop down login form
	$('.login-link').click(function(e){
		e.preventDefault();		
		$('.login-menu').slideToggle();
	});
	
	//homepage cover overlays
	$('#articles li, #articles-sidebar li').hover(function(){
		$(this).find('div').slideToggle();
	});
	
});