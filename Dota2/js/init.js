plyr.setup({
	volume: 5,
	iconUrl: "img/plyr.svg"
});

$("#menu a, form a, .btnRequest").click(function (event) {
	//отменяем стандартную обработку нажатия по ссылке
	event.preventDefault();

	//забираем идентификатор бока с атрибута href
	var id  = $(this).attr('href'),

	//узнаем высоту от начала страницы до блока на который ссылается якорь
		top = $(id).offset().top;

	//анимируем переход на расстояние - top за 1500 мс
	$('body,html').animate({scrollTop: top}, 1500);
});



$('.showFullRules').click(function() {
	$(this).addClass('hide');
	$('.hideOnclick').addClass('hide');
	$('.showOnClick').fadeIn(1000);
	$('.showOnClick text').fadeIn(1000);
});

function validate() {
	if(document.getElementById("chkbx1").checked){
		document.getElementById("b1").disabled = false;
	} else {
		document.getElementById("b1").disabled = true;
	}

	if(document.getElementById("chkbx2").checked){
		document.getElementById("b2").disabled = false;
	} else {
		document.getElementById("b2").disabled = true;
	}
}


$(document).ready(validate);



//------------------------------------------------------------------------ то что ниже это для аккордеона


$('#collapse1_1').on('hide.bs.collapse', function () {
	$('#lol1 span').removeClass('opened');
});
$('#collapse1_1-1').on('hide.bs.collapse', function () {
	$('#lol1-1 span').removeClass('opened');
});
$('#collapse2_1').on('hide.bs.collapse', function () {
	$('#lol2 span').removeClass('opened');
});
$('#collapse2_2').on('hide.bs.collapse', function () {
	$('#lol3 span').removeClass('opened');
});
$('#collapse3_1').on('hide.bs.collapse', function () {
	$('#lol4 span').removeClass('opened');
});
$('#collapse3_2').on('hide.bs.collapse', function () {
	$('#lol5 span').removeClass('opened');
});
$('#collapse3_3').on('hide.bs.collapse', function () {
	$('#lol6 span').removeClass('opened');
});
$('#collapse4_1').on('hide.bs.collapse', function () {
	$('#lol7 span').removeClass('opened');
});
$('#collapse4_2').on('hide.bs.collapse', function () {
	$('#lol8 span').removeClass('opened');
});
$('#collapse5_1').on('hide.bs.collapse', function () {
	$('#lol9 span').removeClass('opened');
});



$('#collapse1_1').on('show.bs.collapse', function () {
	$('#lol1 span').addClass('opened');
});
$('#collapse1_1-1').on('show.bs.collapse', function () {
	$('#lol1-1 span').addClass('opened');
});
$('#collapse2_1').on('show.bs.collapse', function () {
	$('#lol2 span').addClass('opened');
});
$('#collapse2_2').on('show.bs.collapse', function () {
	$('#lol3 span').addClass('opened');
});
$('#collapse3_1').on('show.bs.collapse', function () {
	$('#lol4 span').addClass('opened');
});
$('#collapse3_2').on('show.bs.collapse', function () {
	$('#lol5 span').addClass('opened');
});
$('#collapse3_3').on('show.bs.collapse', function () {
	$('#lol6 span').addClass('opened');
});
$('#collapse4_1').on('show.bs.collapse', function () {
	$('#lol7 span').addClass('opened');
});
$('#collapse4_2').on('show.bs.collapse', function () {
	$('#lol8 span').addClass('opened');
});
$('#collapse5_1').on('show.bs.collapse', function () {
	$('#lol9 span').addClass('opened');
});




//------------------------------------------------------------------------ то что выше это для аккордеона


if ($( window ).width() < 500) {
	$('.bxslider1').bxSlider({
		pager: false,            // показ номера страницы
		auto: false,             // сделать автоматический переход
		autoControls: false,     // показывает кнопку плей и стоп
		speed: 500,             // длительность перехода слайда в м-сек
		useCSS: false,           // CSS переходы
		captions: false,
		slideWidth: 125,
		moveSlides:1,
		slideMargin: 0,
		minSlides: 1,
		maxSlides: 1
	});
}
else if ($(window).width() < 991) {
	$('.bxslider1').bxSlider({
		pager: false,            // показ номера страницы
		auto: false,             // сделать автоматический переход
		autoControls: false,     // показывает кнопку плей и стоп
		speed: 500,             // длительность перехода слайда в м-сек
		useCSS: false,           // CSS переходы
		captions: false,
		slideWidth: 125,
		moveSlides:1,
		slideMargin: 15,
		minSlides: 4,
		maxSlides: 4
	});
}
else if ($(window).width() < 1200) {
	$('.bxslider1').bxSlider({
		pager: false,            // показ номера страницы
		auto: false,             // сделать автоматический переход
		autoControls: false,     // показывает кнопку плей и стоп
		speed: 500,             // длительность перехода слайда в м-сек
		useCSS: false,           // CSS переходы
		captions: false,
		slideWidth: 170,
		moveSlides:1,
		slideMargin: 25,
		minSlides: 4,
		maxSlides: 4
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
		slideWidth: 170,
		moveSlides:1,
		slideMargin: 25,
		minSlides: 5,
		maxSlides: 5
	});
}