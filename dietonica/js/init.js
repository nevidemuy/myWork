plyr.setup();


var slider;
$(document).ready(function(){
	resizeWind();
});


function resizeWind() {
	if($(window).width() < 768) {
		slider = $('.bxslider1').bxSlider({
			pager: false,            // показ номера страницы
			auto: false,             // сделать автоматический переход
			autoControls: false,     // показывает кнопку плей и стоп
			speed: 500,             // длительность перехода слайда в м-сек
			useCSS: false,           // CSS переходы
			captions: false,
			slideWidth: 290,
			minSlides: 1,
			maxSlides: 1
		});
	}
	else if($(window).width() < 991) {
		slider = $('.bxslider1').bxSlider({
			pager: false,            // показ номера страницы
			auto: false,             // сделать автоматический переход
			autoControls: false,     // показывает кнопку плей и стоп
			speed: 500,             // длительность перехода слайда в м-сек
			useCSS: false,           // CSS переходы
			captions: false,
			slideWidth: 720,
			minSlides: 1,
			maxSlides: 1
		});
	}
	else if($(window).width() < 1200) {
		slider = $('.bxslider1').bxSlider({
			pager: false,            // показ номера страницы
			auto: false,             // сделать автоматический переход
			autoControls: false,     // показывает кнопку плей и стоп
			speed: 500,             // длительность перехода слайда в м-сек
			useCSS: false,           // CSS переходы
			captions: false,
			slideWidth: 940,
			minSlides: 1,
			maxSlides: 1
		});
	}
	else {
		slider = $('.bxslider1').bxSlider({
			pager: false,            // показ номера страницы
			auto: false,             // сделать автоматический переход
			autoControls: false,     // показывает кнопку плей и стоп
			speed: 500,             // длительность перехода слайда в м-сек
			useCSS: false,           // CSS переходы
			captions: false,
			slideWidth: 1170,
			minSlides: 1,
			maxSlides: 1
		});
	}
}


$(window).resize(function(){
  	if($(window).width() < 768) {
		slider.reloadSlider({
			pager: false,            // показ номера страницы
			auto: false,             // сделать автоматический переход
			autoControls: false,     // показывает кнопку плей и стоп
			speed: 500,             // длительность перехода слайда в м-сек
			useCSS: false,           // CSS переходы
			captions: false,
			slideWidth: 290,
			minSlides: 1,
			maxSlides: 1
		});
	}
	else if($(window).width() < 991) {
		slider.reloadSlider({
			pager: false,            // показ номера страницы
			auto: false,             // сделать автоматический переход
			autoControls: false,     // показывает кнопку плей и стоп
			speed: 500,             // длительность перехода слайда в м-сек
			useCSS: false,           // CSS переходы
			captions: false,
			slideWidth: 720,
			minSlides: 1,
			maxSlides: 1
		});
	}
	else if($(window).width() < 1200) {
		slider.reloadSlider({
			pager: false,            // показ номера страницы
			auto: false,             // сделать автоматический переход
			autoControls: false,     // показывает кнопку плей и стоп
			speed: 500,             // длительность перехода слайда в м-сек
			useCSS: false,           // CSS переходы
			captions: false,
			slideWidth: 940,
			minSlides: 1,
			maxSlides: 1
		});
	}
	else {
		slider.reloadSlider({
			pager: false,            // показ номера страницы
			auto: false,             // сделать автоматический переход
			autoControls: false,     // показывает кнопку плей и стоп
			speed: 500,             // длительность перехода слайда в м-сек
			useCSS: false,           // CSS переходы
			captions: false,
			slideWidth: 1170,
			minSlides: 1,
			maxSlides: 1
		});
	}
});