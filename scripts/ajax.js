jQuery(document).ready(function($) {
	
	principal();
	
	$('#home').click(function(e){
		e.preventDefault();
		principal();
	});
	
	function principal(){
		$.post(MyAjax.url, {
			nonce : MyAjax.nonce,
			action : 'principal'
		}, function(response) {
			$('#contenido').hide().html(response).fadeIn(function() {
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
	
	/*arica*/
	$('#arica').click(function(evento) {
		evento.preventDefault();
		$.post(MyAjax.url, {
			nonce : MyAjax.nonce,
			action : 'arica'
		}, function(response) {
			$('#contenido').hide().html(response).fadeIn();
		});

	});
	
	/*iquique*/
	$('#iquique').click(function(evento) {
		evento.preventDefault();
		$.post(MyAjax.url, {
			nonce : MyAjax.nonce,
			action : 'iquique'
		}, function(response) {
			$('#contenido').hide().html(response).fadeIn();
		});

	});
	
	/*calama */
	$('#calama').click(function(evento) {
		evento.preventDefault();
		$.post(MyAjax.url, {
			nonce : MyAjax.nonce,
			action : 'calama'
		}, function(response) {
			$('#contenido').hide().html(response).fadeIn();
		});

	});
	
	/*tocopilla*/
	$('#tocopilla').click(function(evento) {
		evento.preventDefault();
		$.post(MyAjax.url, {
			nonce : MyAjax.nonce,
			action : 'tocopilla'
		}, function(response) {
			$('#contenido').hide().html(response).fadeIn();
		});

	});
	
	/*copiapo*/
	$('#copiapo').click(function(evento) {
		evento.preventDefault();
		$.post(MyAjax.url, {
			nonce : MyAjax.nonce,
			action : 'copiapo'
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
