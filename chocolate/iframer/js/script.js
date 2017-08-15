$(function() {
	if ($('select[name=country] option').length < 2) $('select[name=country]').closest('.row').hide();
	
	
	$('#selectAdress').change(function() {
	var selVal = $(this).val();
	switch (selVal) {
		case 'Стандарт':
			$('#image').attr("src", "img/standart.jpg");
			$('#type').text('Стандарт');
			$('#selectAdress :nth-child(1)').attr("selected", "selected");
			break;

		case 'Шериф':
			$('#image').attr("src", "img/sheriff.jpg");
			$('#type').text('Шериф');
			$('#selectAdress :nth-child(2)').attr("selected", "selected");
			break;
		case 'Жби':
			$('#image').attr("src", "img/jbi.jpg");
			$('#type').text('Жби');
			$('#selectAdress :nth-child(3)').attr("selected", "selected");
			break;
		case 'Микс':
			$('#image').attr("src", "img/mix.jpg");
			$('#type').text('Микс');
			$('#selectAdress :nth-child(4)').attr("selected", "selected");
			break;
		case 'Конструкторский':
			$('#image').attr("src", "img/konstr.jpg");
			$('#type').text('Конструкторский');
			$('#selectAdress :nth-child(5)').attr("selected", "selected");
			break;
		case 'Офисный':
			$('#image').attr("src", "img/office.jpg");
			$('#type').text('Офисный');
			$('#selectAdress :nth-child(6)').attr("selected", "selected");
			break;
		case 'Энергетический':
			$('#image').attr("src", "img/energy.jpg");
			$('#type').text('Энергетический');
			$('#selectAdress :nth-child(7)').attr("selected", "selected");
			break;
		case 'Дизайнерский':
			$('#image').attr("src", "img/design.jpg");
			$('#type').text('Дизайнерский');
			$('#selectAdress :nth-child(8)').attr("selected", "selected");
			break;
		
		}
	});
	
});

setTimeout(function() {
			
		$('select[name=address]').trigger('change');

}, 500);
