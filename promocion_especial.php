<a id="inicio" href="<?php bloginfo('template_url'); ?>"><- Volver</a>
<?php query_posts(array('category_name' => 'promocion especial'));
while ( have_posts() ) : the_post(); ?>
<p>
	<?php the_content(); ?>
</p>
<?php endwhile; wp_reset_query(); ?>
<script>
	$('#inicio').click(function(e) {
		e.preventDefault();
		$.post(MyAjax.url, {
			nonce : MyAjax.nonce,
			action : 'principal'
		}, function(response) {
			$('#contenido').hide().html(response).fadeIn(function() {
				$('#nivoslider').nivoSlider();
			});
		});
	});
</script>