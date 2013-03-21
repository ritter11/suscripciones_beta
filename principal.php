<?php
/*
 Template Name: principal
 */
?>
<!--slider-->
<div id="slider" class="hidden-phone">
<div class="slider-wrapper theme-default">
<div class="ribbon"></div>
<div id="nivoslider" class="nivoSlider">
<?php query_posts('category_name=slider');/*&posts_per_page=3' );*/
while ( have_posts() ) : the_post(); ?>
<!--<a href="<?php echo get_permalink(); ?>">--><?php the_post_thumbnail('sliders'); ?>
	<!--</a>-->
			<?php endwhile; wp_reset_query(); ?>
		</div>
		
	</div>

</div><!-- end of nivoslider -->
<center>
			<div style="padding-top:1px; padding-bottom: 20px;">
				<span style="padding-right: 20px">
					<?php query_posts(array('category_name' => 'foot1'));
					while ( have_posts() ) : the_post(); ?>
						<img src="<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post -> ID), array(720, 405), false, '');
						echo $src[0];
					?>" class="img-polaroid">				
					<?php endwhile; wp_reset_query(); ?>
				</span>
				
					
					<span style="padding-left: 20px">
						<?php query_posts(array('category_name' => 'foot2'));
					while ( have_posts() ) : the_post(); ?>
						<img src="<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post -> ID), array(720, 405), false, '');
						echo $src[0];
					?>" class="img-polaroid">				
					<?php endwhile; wp_reset_query(); ?>
					
						<!--query para traer la imagen de promocion especial si es que esta existe -->
						<?php query_posts(array('category_name' => 'promocion especial'));
					while ( have_posts() ) : the_post(); ?>
						<a id="promo" href="#contenido"><img src="<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post -> ID), array(720, 405), false, '');
						echo $src[0];
					?>" class="img-polaroid promo"></a>
						<?php endwhile; wp_reset_query(); ?>
					</span>			
					
			</div>			
		</center>
<script>
	$('#promo').click(function(evento) {

		evento.preventDefault();
		$.post(MyAjax.url, {
			nonce : MyAjax.nonce,
			action : 'promo'
		}, function(response) {
			$('#contenido').hide().html(response).fadeIn();
		});

	}); 
</script>

