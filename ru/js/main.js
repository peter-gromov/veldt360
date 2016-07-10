$(document).ready(function(){
	$(window).scroll(function(){
		var top = $(window).scrollTop();

		$('.header').css('top', top+'px');
	});

	$('.row-5-slides').owlCarousel({
	    loop:true,
		items: 1,
		dots: false,
		navRewind: false
 
	});



	        $('.js-videoshow').click(function(){
            var p = $(this).parents('.ourvideo-container'),
                i = p.find('iframe');

                $(this).hide();
                i.show();
        })

});