<?php get_header(); ?>
<div class="container-fluid">
	
	<div class="row-fluid">
		
			<!--Sidebar content-->
			<?php get_sidebar(); ?>
		
		
		<div class="span10">
			<!--Body content-->		
			<div id="contenido">
						
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">Contacto</h3>
	  </div>
	  <div class="modal-body">
	    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('form_widget') ) : ?>;
	<?php endif; ?>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
	  </div>
	</div>
	
</div>
</div><!-- </div> continuacion del header.php-->
<?php get_footer(); ?>
