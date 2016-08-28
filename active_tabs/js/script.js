$('#sec1').click(function(){
		$('#sec1c').fadeIn(500);
		$('#sec2c').hide();
		$('#sec3c').hide();
});

$('#sec2').click(function(){
		$('#sec2c').fadeIn(500);
		$('#sec1c').hide();
		$('#sec3c').hide();
});

$('#sec3').click(function(){
		$('#sec3c').fadeIn(500);
		$('#sec1c').hide();
		$('#sec2c').hide();
});


$(document).ready(function(e) {
	
	$(".active").click(function(){
		$(this).css("background-color","red");
		$(this).siblings().css("background-color","#1DB438");
	});
	
	
	
	
	
	    
});
