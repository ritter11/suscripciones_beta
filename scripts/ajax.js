jQuery(document).ready(function($) {
	
	
	
	$('#home').click(function(e){
		e.preventDefault();
		iniciarSlider();
	});
	
	function iniciarSlider(){
		$.post(MyAjax.url, {
			nonce : MyAjax.nonce,
			action : 'slider'
		}, function(response) {
			$('#slider').hide().html(response).fadeIn(function() {
			$('#nivoslider').nivoSlider();
			
			});
		});
	}
	$('#preguntas').click(function(evento) {
		evento.preventDefault();
		$.post(MyAjax.url, {
			nonce : MyAjax.nonce,
			action : 'preguntas'
		}, function(response) {
			$('#contenido').hide().html(response).fadeIn();
		});

	});
	
	/*planes*/
	/*antofagasta*/
	$('#antofagasta').click(function(evento) {
		evento.preventDefault();
		$.post(MyAjax.url, {
			nonce : MyAjax.nonce,
			action : 'antofagasta'
		}, function(response) {
			$('#contenido').hide().html(response).fadeIn();
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
	$('.navbar li').click(function(e) {
		$('.navbar li').removeClass('active');
		$('.navder li').removeClass('active');
		var $this = $(this);
		if (!$this.hasClass('active')) {
			$this.addClass('active');
		}
		e.preventDefault();
	});
});
