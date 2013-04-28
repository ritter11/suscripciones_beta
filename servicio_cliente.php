<div class="accordion" id="accordion2">
	
	<p>
	Aqu&iacute; podr&aacute; encontrar respuesta a sus consultas con respecto a suscripci&oacute;n, nuestras plataformas dispuestas para ayudarlo son:
	</p>
	<!--tab arica-->
	<?php query_posts(array('category_name' => 'contacto', 'tag' => 'arica'));
	while ( have_posts() ) : the_post(); ?>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#Arica"> <?php echo "<h5>"; the_title(); echo "</h5>"; ?>  </a>
		</div>
		<div id="Arica" class="accordion-body collapse">
			<div class="accordion-inner">
				<p>
					<?php the_content(); ?>
				</p>
			</div>
		</div>
	</div>
	<?php endwhile; wp_reset_query(); ?>
	
	<!--tab iqq-->
	<?php query_posts(array('category_name' => 'contacto', 'tag' => 'iquique'));
	while ( have_posts() ) : the_post(); ?>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#iquique"> <h5><?php the_title(); ?> </h5> </a>
		</div>
		<div id="iquique" class="accordion-body collapse">
			<div class="accordion-inner">
				<p>
					<?php the_content(); ?>
				</p>
			</div>
		</div>
	</div>
	<?php endwhile; wp_reset_query(); ?>
	<!--tab Antofagasta-->
	<?php query_posts(array('category_name' => 'contacto', 'tag' => 'antofagasta'));
	while ( have_posts() ) : the_post(); ?>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#Antofagasta"> <h5><?php the_title(); ?> </h5> </a>
		</div>
		<div id="Antofagasta" class="accordion-body collapse">
			<div class="accordion-inner">
				<p>
					<?php the_content(); ?>
				</p>
			</div>
		</div>
	</div>
	<?php endwhile; wp_reset_query(); ?>

	<!--tab calama-->
	<?php query_posts(array('category_name' => 'contacto', 'tag' => 'calama'));
	while ( have_posts() ) : the_post(); ?>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#calama"> <h5><?php the_title(); ?> </h5> </a>
		</div>
		<div id="calama" class="accordion-body collapse">
			<div class="accordion-inner">
				<p>
					<?php the_content(); ?>
				</p>
			</div>
		</div>
	</div>
	<?php endwhile; wp_reset_query(); ?>

	<!--tab Tocopilla-->
	<?php query_posts(array('category_name' => 'contacto', 'tag' => 'tocopilla'));
	while ( have_posts() ) : the_post(); ?>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#tocopilla"> <h5><?php the_title(); ?> </h5> </a>
		</div>
		<div id="tocopilla" class="accordion-body collapse">
			<div class="accordion-inner">
				<p>
					<?php the_content(); ?>
				</p>
			</div>
		</div>
	</div>
	<?php endwhile; wp_reset_query(); ?>

	<!--tab Copiap�-->
	<?php query_posts(array('category_name' => 'contacto', 'tag' => 'copiapo'));
	while ( have_posts() ) : the_post(); ?>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#copiapo"> <h5><?php the_title(); ?></h5> </a>
		</div>
		<div id="copiapo" class="accordion-body collapse">
			<div class="accordion-inner">
				<p>
					<?php the_content(); ?>
				</p>
			</div>
		</div>
	</div>
	<?php endwhile; wp_reset_query(); ?>

	<!--tab formulario-->
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#mail"> <h5>V&iacute;a e-mail </h5> </a>
		</div>
		<div id="mail" class="accordion-body collapse">
			<div class="accordion-inner">
				<?php echo do_shortcode( '[contact-form-7 id="196" title="Contacto Suscripciones"]' ); ?>
			</div>
		</div>
	</div>
	<div style="text-align:center;">
		<p>
			Servicio al cliente
		</p>
		<p>
			6003292100
		</p>
		<p>
			Contactenos!
		</p>
	</div>

</div>
