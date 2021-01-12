$(document).ready(function(){
	$('.slider-container-slider').each(function () {
		id = $(this).attr('id')
		$('#' + id).slick({
			arrows: true,
			dots: true,
		});
	})	
});
