<?php
 /*
 Template Name: Preguntas Frecuentes
 */
 get_header(); ?>
<div class="container-fluid">
	
	<div class="row-fluid">
		<div class="span2">
			<!--Sidebar content-->
			<?php get_sidebar(); ?>
		
		</div>
		<div class="span10">
			<!--Body content-->
			<div id="contenido">
				<div class="accordion" id="accordion2">
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
					        <b>
						      1. Tipos de Suscripciones - Promociones
						    </b>
					      </a>
					    </div>
					    <div id="collapseOne" class="accordion-body collapse">
					      <div class="accordion-inner">
					        Anim pariatur cliche...
					      </div>
					    </div>
					  </div>
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
					        Collapsible Group Item #2
					      </a>
					    </div>
					    <div id="collapseTwo" class="accordion-body collapse">
					      <div class="accordion-inner">
					        Anim pariatur cliche...
					      </div>
					    </div>
					  </div>
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
					        Collapsible Group Item #1
					      </a>
					    </div>
					    <div id="collapseThree" class="accordion-body collapse">
					      <div class="accordion-inner">
					        Anim pariatur cliche...
					      </div>
					    </div>
					  </div>
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFourth">
					        Collapsible Group Item #2
					      </a>
					    </div>
					    <div id="collapseFourth" class="accordion-body collapse">
					      <div class="accordion-inner">
					        Anim pariatur cliche...
					      </div>
					    </div>
					  </div>
				</div>
			</div>
			
		</div>
	</div>
</div>
</div><!-- </div> continuacion del header.php-->
<?php get_footer(); ?>