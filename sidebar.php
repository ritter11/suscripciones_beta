<div class="span2 hidden-phone">
	<!--<div class="well" >-->
	<div class="navder">
		<ul id="ciudades" class="nav nav-pills nav-stacked">
			<li class="nav-header">
				<h5>Planes de Suscripción</h5>
			</li>
			<li >
				<a id="arica" href="#">Arica</a>
			</li>
			<li>
				<a id="iquique" href="#">Iquique</a>
			</li>
			<li>
				<a id="calama" href="#">Calama</a>
			</li>
			<li>
				<a id="antofagasta" href="#">Antofagasta</a>
			</li>
			<li>
				<a id="tocopilla" href="#">Tocopilla</a>
			</li>
			<li>
				<a id="copiapo" href="#">Copiapo</a>
			</li>
		</ul>

	</div>
	<ul class="thumbnails">
		<li class="span12">
			<?php query_posts(array('category_name' => 'beneficios suscriptores'));
			while ( have_posts() ) : the_post();
			?>
			<a href="http://www.vidrieriadiamond.cl/wp/" target="_blank" "><img class="promo" src="<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post -> ID), array(720, 405), false, '');
				echo $src[0];
			?>" /></a>
			<?php endwhile; wp_reset_query(); ?>
		</li>
	</ul>
	<!--</div>-->
</div>
<div class="navbar navbar-inverse visible-phone" style="position: fixed; z-index: 10;">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
			<a class="brand" href="#">Planes de Suscripción</a>x
			<div class="nav-collapse collapse navbar-responsive-collapse">
				<div class="navder">
					<ul id="ciudades_phone" class="nav nav-list">
						<li class="active">
							<a id="arica_phone" href="#">Arica</a>
						</li>
						<li>
							<a href="#">Iquique</a>
						</li>
						<li>
							<a href="#">Calama</a>
						</li>
						<li>
							<a href="#">Antofagasta</a>
						</li>
						<li>
							<a href="#">Tocopilla</a>
						</li>
						<li>
							<a href="#">Copiapo</a>
						</li>
					</ul>
				</div>

			</div><!-- /.nav-collapse -->
		</div>
	</div><!-- /navbar-inner -->
</div>