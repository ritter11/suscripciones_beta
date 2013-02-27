<?php wp_footer(); ?>
<div id="bottom" class="clearfix">
	<div class="wrapper">
		<div class="first_col">
			<div class="widget">
				<p>
					<img alt="Club de Lectores" src="http://clubprod.mersap.com/wp-content/uploads/logo_club_footer.png">
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
</body>
</html>