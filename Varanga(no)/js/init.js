$('#collapseOne').on('hide.bs.collapse', function () {
	$('#lol1 .openAccord, #lol1 + .openAccord').removeClass('opened');
});
$('#collapseTwo').on('hide.bs.collapse', function () {

	$('#lol2 .openAccord, #lol2 + .openAccord').removeClass('opened');
});
$('#collapseThree').on('hide.bs.collapse', function () {

	$('#lol3 .openAccord, #lol3 + .openAccord').removeClass('opened');
});
$('#collapseFour').on('hide.bs.collapse', function () {

	$('#lol4 .openAccord, #lol4 + .openAccord').removeClass('opened');
});
$('#collapseFive').on('hide.bs.collapse', function () {

	$('#lol5 .openAccord, #lol5 + .openAccord').removeClass('opened');
});

$('#collapseOne').on('show.bs.collapse', function () {
	$('#lol1 .openAccord, #lol1 + .openAccord').addClass('opened');
});
$('#collapseTwo').on('show.bs.collapse', function () {

	$('#lol2 .openAccord, #lol2 + .openAccord').addClass('opened');
});
$('#collapseThree').on('show.bs.collapse', function () {

	$('#lol3 .openAccord, #lol3 + .openAccord').addClass('opened');
});
$('#collapseFour').on('show.bs.collapse', function () {

	$('#lol4 .openAccord, #lol4 + .openAccord').addClass('opened');
});
$('#collapseFive').on('show.bs.collapse', function () {

	$('#lol5 .openAccord, #lol5 + .openAccord').addClass('opened');
});//------------------------------------------------------------------------ то что выше это для аккордеона

$('.checkboxes').find('.check').click(function(){  // это чекбоксы
	// Пишем условие: если вложенный в див чекбокс отмечен
	if( $(this).hasClass('active') ) {
		// то снимаем активность с дива
		$(this).removeClass('active');
		// и удаляем атрибут checked (делаем чекбокс не отмеченным)
		$(this).find('input').removeAttr('checked');

	// если же чекбокс не отмечен, то
	} else {
		// добавляем класс активности диву
		$(this).addClass('active');
		// добавляем атрибут checked чекбоксу
		$(this).find('input').attr('checked', true);
	}
});

$('.progression-single').mediaelementplayer({
	//audioWidth: 1100, // width of audio player
	audioHeight:40, // height of audio player
	startVolume: 0.5, // initial volume when the player starts
	features: ['playpause','current','progress','duration','tracks','volume','fullscreen']
});

$('.country_select').change(function(){
	wachThePrice($(this).val());
});
$('.country_select').change();

function wachThePrice(id){
	price777 = country_list[id].s1, 
	curr777 = country_list[id].curr; 
};
//plyr.setup('audio'); // все плееры

$(document).ready(function(){ // слайдеры
	

	
	if($(window).width() < 768) {
		$('.bxslider1').bxSlider({
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
		$('.bxslider1').bxSlider({
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
		$('.bxslider1').bxSlider({
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
	}
});

//document.addEventListener('DOMContentLoaded', function () {
//	document.getElementById('kmacb').onclick = function() {
//		return false;
//	}
//	
//	
//});

