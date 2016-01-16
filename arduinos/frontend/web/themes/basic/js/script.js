function show_func() {
	$('#inBasket').animate({
		right: 0
		}, 200);
	$('.mask-content').css('display', 'block')
}

function close_func() {
	$('#inBasket').animate({
		right: -350
		}, 200);
	$('.mask-content').css('display', 'none')
}

function add_func() {
	show_func();
	console.log('Quant: ' + $('#select').val());
	console.log(var productElements = $('.product'));
	console.log($('input[type=radio]'));
	console.log('Price: ' + $('#price').val());
	console.log('Product: ' + $('#product').val());

}

