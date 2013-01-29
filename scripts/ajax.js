jQuery(document).ready(function($) {
	/*var cadena = 'antofagasta';
	 $.post(MyAjax.url, {
	 action : 'preguntas',
	 cadena : cadena
	 }, function(response) {
	 $('#prueba').hide().html(response).fadeIn();
	 });*/

	$('#antofagasta').click(function(evento) {
		evento.preventDefault();
		$.post(MyAjax.url, {
			action : 'preguntas'
		}, function(response) {
			$('#prueba').hide().html(response).fadeIn();
		});

	});

	$('.navder li').click(function(e) {
		$('.navbar li').removeClass('active');
		$('.navder li').removeClass('active');
		var $this = $(this);
		if (!$this.hasClass('active')) {
			$this.addClass('active');
		}
		e.preventDefault();
	});
});
