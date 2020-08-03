$(function () {
    const message = 'Hello World!';
    console.log(message);

    $(document).on('click', '.destacados .destacados__item', function () {
    	let numcar = $(this).data('numbercar');
    	console.log('item carousel: ' + numcar);
  		$('#promos-destacados').carousel(numcar);
  		$('#promos-destacados').carousel();
    });
});
