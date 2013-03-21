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
				<div id="text-6" class="container-fluid widget_text">
					<div class="textwidget">
						<div class="wpcf7" id="wpcf7-f196-w1-o1">
							<form action="/wordpress/#wpcf7-f196-w1-o1" method="post" class="wpcf7-form">
								<div style="display: none;">
									<input type="hidden" name="_wpcf7" value="196" />
									<input type="hidden" name="_wpcf7_version" value="3.3.3" />
									<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f196-w1-o1" />
									<input type="hidden" name="_wpnonce" value="253f224268" />
								</div>
								<p>
									Tu nombre (requerido)
									<br />
									<span class="wpcf7-form-control-wrap your-name">
										<input type="text" name="your-name" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" size="40" />
									</span>
								</p>
								<p>
									Tu Email (requerido)
									<br />
									<span class="wpcf7-form-control-wrap your-email">
										<input type="text" name="your-email" value="" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" size="40" />
									</span>
								</p>
								<p>
									Asunto
									<br />
									<span class="wpcf7-form-control-wrap your-subject">
										<input type="text" name="your-subject" value="" class="wpcf7-form-control wpcf7-text" size="40" />
									</span>
								</p>
								<p>
									Tu Mensaje
								</p>
								<p>
									<span class="wpcf7-form-control-wrap mensaje"> 							
										<textarea name="mensaje" id="mensaje" class="wpcf7-form-control  wpcf7-textarea wpcf7-use-title-as-watermark" cols="40" rows="10" title="ingrese su mensaje aqui"></textarea>
										</span>
								</p>
								<p>
									<center>
										<p>
											<input type="submit" value="Enviar" id="enviar_mail" class="wpcf7-form-control  wpcf7-submit btn" />
										</p>
										<p>
									</center>
								</p>
								<div class="wpcf7-response-output wpcf7-display-none"></div>
							</form>
						</div>
					</div>
				</div>
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
