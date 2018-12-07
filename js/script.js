//BOTÃO SCROLL DOWN
$(document).ready(function(){
	$('.down').click(function(e){
		e.preventDefault();
		var button = $(this).attr('href');
		distancia = $(button).offset().top;
		$('html, body').animate({
			scrollTop : distancia
		}, 500);	

	});
});

//BOTÃO SCROLL UP
$(document).ready(function(){
	height = $(window).height() * 2/4;
	$('.backtop').hide();

	$(window).scroll(function(){
		if($(this).scrollTop() > height){
			$('.backtop').fadeIn();
		}else{
			$('.backtop').fadeOut();
		}
	});
	$('.backtop').click(function(){
		$('html, body').animate({
			scrollTop: 0
		}, 500);
	});
});
