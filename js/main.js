function veldtSlider (p) {
	var slider = $('#' + p.id), 
	    list = slider.find('ul').addClass('slider-items');

	// Add classes for css
	slider.addClass('veldt-slider');
	slider.append('<div class="slider-row"></div>');
	list.appendTo('.slider-row');
	list.width($(document).width());

	// list items alignment
	var listWidth = 0;
	list.find('li').each(function (i) {
		if (i == 0) 
			$(this).addClass('active');
		
		var w = $(this).width();
		$(this).width(w);
		$(this).css('left', listWidth + 'px');
		listWidth += w;
	});

	normalizeHeight();

	list.find('img').load(function(){
		normalizeHeight();
	});

	if (p.arrows) {
		slider.append('<div class="arrows"><div class="left"></div><div class="right"></div></div>');
		slider.find('.left').click(function(){
			scrollItem('prev');
		});
		slider.find('.right').click(function(){
			scrollItem('next');
		});
	}

	if (p.textNavigation) {
		slider.prepend('<ul class="nav-items"></ul>');
		var navigation = slider.find('.nav-items');
		navigation.append(function(){
			for (var navText = p.textNavigation, nav = '', i = 0; i < navText.length; i++) {
				nav += '<li data-scroll="' + i + '">' + navText[i] + '</li>';
			}
			return nav;
		});

		var navItems = navigation.find('li');
		navItems.click(function() {
			scrollItem(+$(this).attr('data-scroll'));
		});

		navigation.css('left', ($(document).width() - navigation.width()) / 2);
	}

	var listHeight = 0;
	function normalizeHeight() {
		list.find('li').each(function (i, el) {
			if (listHeight < $(el).height())
				listHeight = $(el).height();

			// console.log($(this).height());
		});
		
		list.height(listHeight);
		slider.find('.arrows > div').height(listHeight);
	}

	function scrollItem (el) {
		normalizeHeight();
		if (typeof el == 'number') {
			var index = el;

			if (list.find('li')[index].classList.contains('active')) return;
		}
		else if (typeof el == 'string' && el == 'next') {
			var dir = 1;
		}	else if (typeof el == 'string' && el == 'prev') {
			var dir = -1;
		}

		var activeInd = -1;

		list.find('li').each(function (i, elem) {
			if ($(this).hasClass('active'))
				activeInd = i;

			$(this).removeClass('active');
			$(this).css('left', (- $(this).width()) + 'px');

			// if clicked element
			if ((index || index === 0) && (i == index)) {
				$(this).addClass('active');
				$(this).css('left', 0);
			}
		});

		if ((activeInd || activeInd === 0) && dir) {
			var newInd = activeInd + dir,
					length = list.find('li').length;

			newInd = newInd < 0 ? length - 1 : newInd > length - 1 ? 0 : newInd;

			list.find('li')[newInd].classList.add('active');
			list.find('li')[newInd].style.left = 0;
		}
	}
}

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

	$('.row-40-slider').owlCarousel({
		items: 1,
		navigation: true,
		navigationText: true
	});

	$('.spoiler').click(function(){
		var id = $(this).attr('data-show');
		if (id) {
			$('#' + id).toggleClass('open');
		}
	});

	veldtSlider({
		id: 'slider1',
		textNavigation: [
			'Hawk',
			'Aerial',
			'Dynamic'
		],
		arrows: true
	});


// slider1.onclick = function (e) {
// 	var el = e.target;
// 	if (el.tagName == 'SPAN' && el.className != 'selected') {

// 		var btn = this.firstElementChild.children,
// 			l = btn.length, i = 0;

// 		for (; i < l; i++) {
// 			btn[i].className = '';
// 		};

// 		el.className = 'selected';
// 		showTab(el.getAttribute('data-open'));
// 	}
// }

// function showTab (id) {
// 	var tabs = document.getElementsByClassName('tabs')[0].children,
// 		l = tabs.length, i = 0;

// 	for (; i < l; i++) {
// 		tabs[i].className = '';
// 	};

// 	document.getElementById(id).className = 'show'
// }



  $('.js-videoshow').click(function(){
    var p = $(this).parents('.ourvideo-container'),
        i = p.find('iframe');

    $(this).hide();
    i.show();
	});

  $('.js-send').click(function(){


  	var email = $('.mail-email').val(),
  		request = 		$('.mail-request').val(),
  		name =		$('.mail-name').val(),
  		key =		$('.mail-key').val(),
  		correct = true;


  		console.log('s');


  		if( email.length < 8){
  			correct = false;
  			alert('Email is too short');
  		}

  		if( request.length < 20 && correct){
  			correct = false;
  			alert('Request is too short');
  		}

  		if( request.length < 20 && correct){
  			correct = false;
  			alert('Request is too short');
  		}


  	if( correct ){


    	$.ajax({
    		'url': '/mail.php',
    		'type' : 'post',
    		data: { name:name, email:email, request:request, key:key  },
    		success: function(data){
    			console.log( data );
    			$('.contactus-success').show();
    			$('.contactus-form').hide();
    		}
    	});

  	}

  	return false;
  });

});