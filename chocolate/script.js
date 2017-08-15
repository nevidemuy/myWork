$(function() {
	if ($('select[name=country] option').length < 2) $('select[name=country]').closest('.row').hide();
	
	
	$('#selectProd').change(function() {
	var selVal = $(this).val();
	switch (selVal) {
		case 'TRX Home Gym':
			$('#image').attr("src", "img/tov1.jpg");
			$('#type').text('TRX Home Gym');
			$('#selectProd :nth-child(1)').attr("selected", "selected");
			break;

		case 'TRX PRO P5':
			$('#image').attr("src", "img/tov2.jpg");
			$('#type').text('TRX PRO P5');
			$('#selectProd :nth-child(2)').attr("selected", "selected");
			break;
		case 'TRX Tactical Gym':
			$('#image').attr("src", "img/tov3.jpg");
			$('#type').text('TRX Tactical Gym');
			$('#selectProd :nth-child(3)').attr("selected", "selected");
			break;
		case 'Крепление TRX Xmount':
			$('#image').attr("src", "img/tov4.jpg");
			$('#type').text('Крепление TRX Xmount');
			$('#selectProd :nth-child(4)').attr("selected", "selected");
			break;
			
	}
	});
	
});

setTimeout(function() {
			
		$('select[name=address]').trigger('change');

}, 500);
