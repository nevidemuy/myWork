$('body').scrollspy({ target: '#men' });
$("#men").on("click","a", function (event) {
	//отменяем стандартную обработку нажатия по ссылке
	event.preventDefault();

	//забираем идентификатор бока с атрибута href
	var id  = $(this).attr('href'),

	//узнаем высоту от начала страницы до блока на который ссылается якорь
		top = $(id).offset().top;

	//анимируем переход на расстояние - top за 1500 мс
	$('body,html').animate({scrollTop: top}, 1500);
	$('#menu').modal('hide');
});

$(document).ready(function(){
	$('.bxslider1').bxSlider({
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
});