
<div id="bottom" class="clearfix hidden-phone">
	<div class="wrapper">
		<div class="first_col">
			<div class="widget">
				<p>
					<?php query_posts(array('category_name' => 'pie pagina'));
					while ( have_posts() ) : the_post(); ?>
						<img src="<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post -> ID), array(720, 405), false, '');
						echo $src[0];
					?>">				
					<?php endwhile; wp_reset_query(); ?>
				</p>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.nivo.slider.pack.js"></script>
<!--<script type="text/javascript">
$(window).load(function() {
$('#nivoslider').nivoSlider();

});
</script>-->
<script>
	$('a[data-toggle="tab"]').on('show', function(e) {
		e.target// activated tab
		e.relatedTarget // previous tab
	})
	

</script>

<style>
	#mensaje {
		width: 480;
		height: 136;
	}
</style>
<?php wp_footer(); ?>
</body>
</html>