plyr.setup({
	volume: 5,
	iconUrl: "img/plyr.svg"
});
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


$('.country_select').change(function(){
  wachThePrice($(this).val());
});
$('.country_select').change();

function wachThePrice(id){
price777 = country_list[id].s1, 
curr777 = country_list[id].curr; 
};

$(document).ready(function() {
	
  $('.drawer').drawer();
	
	if($(window).width() > 1199) {
		$('body').removeClass('drawer-close').addClass('drawer-open');
	}
	
	
});



$(function () {
	$('.selectAdress').change(function() {
	var selVal = $(this).val();
	switch (selVal) {
		case 'Стандарт':
			$('.tovarAndOpis img').attr("src", "img/presents/standart.jpg");
			$('.tovarAndOpis .text').text('Стандарт');
			$('.selectAdress :nth-child(1)').attr("selected", "selected");
			$('.price_land_s4').text(country_list.RU.specialfields.complect_1_s4);
			$('.price_land_s1').text(country_list.RU.specialfields.complect_1_s1);
			break;

		case 'Шериф':
			$('.tovarAndOpis img').attr("src", "img/presents/sheriff.jpg");
			$('.tovarAndOpis .text').text('Шериф');
			$('.selectAdress :nth-child(2)').attr("selected", "selected");
			$('.price_land_s4').text(country_list.RU.specialfields.complect_6_s4);
			$('.price_land_s1').text(country_list.RU.specialfields.complect_6_s1);
			break;
		case 'Жби':
			$('.tovarAndOpis img').attr("src", "img/presents/jbi.jpg");
			$('.tovarAndOpis .text').text('Жби');
			$('.selectAdress :nth-child(3)').attr("selected", "selected");
			$('.price_land_s4').text(country_list.RU.specialfields.complect_2_s4);
			$('.price_land_s1').text(country_list.RU.specialfields.complect_2_s1);
			break;
		case 'Микс':
			$('.tovarAndOpis img').attr("src", "img/presents/mix.jpg");
			$('.tovarAndOpis .text').text('Микс');
			$('.selectAdress :nth-child(4)').attr("selected", "selected");
			$('.price_land_s4').text(country_list.RU.specialfields.complect_7_s4);
			$('.price_land_s1').text(country_list.RU.specialfields.complect_7_s1);
			break;
		case 'Конструкторский':
			$('.tovarAndOpis img').attr("src", "img/presents/konstr.jpg");
			$('.tovarAndOpis .text').text('Конструкторский');
			$('.selectAdress :nth-child(5)').attr("selected", "selected");
			$('.price_land_s4').text(country_list.RU.specialfields.complect_4_s4);
			$('.price_land_s1').text(country_list.RU.specialfields.complect_4_s1);
			break;
		case 'Офисный':
			$('.tovarAndOpis img').attr("src", "img/presents/office.jpg");
			$('.tovarAndOpis .text').text('Офисный');
			$('.selectAdress :nth-child(6)').attr("selected", "selected");
			$('.price_land_s4').text(country_list.RU.specialfields.complect_5_s4);
			$('.price_land_s1').text(country_list.RU.specialfields.complect_5_s1);
			break;
		case 'Энергетический':
			$('.tovarAndOpis img').attr("src", "img/presents/energy.jpg");
			$('.tovarAndOpis .text').text('Энергетический');
			$('.selectAdress :nth-child(7)').attr("selected", "selected");
			$('.price_land_s4').text(country_list.RU.s4);
			$('.price_land_s1').text(country_list.RU.s1);
			break;
		case 'Дизайнерский':
			$('.tovarAndOpis img').attr("src", "img/presents/design.jpg");
			$('.tovarAndOpis .text').text('Дизайнерский');
			$('.selectAdress :nth-child(8)').attr("selected", "selected");
			$('.price_land_s4').text(country_list.RU.specialfields.complect_3_s4);
			$('.price_land_s1').text(country_list.RU.specialfields.complect_3_s1);
			break;
		
	}
});










});

setTimeout(function() {
			
		$('select[name=address]').trigger('change');

}, 500);







