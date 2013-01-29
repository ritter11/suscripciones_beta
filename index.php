<?php get_header(); ?>
<div class="container-fluid">
	
	<div class="row-fluid">
		
			<!--Sidebar content-->
			<?php get_sidebar(); ?>
		
		
		<div class="span10">
			<!--Body content-->
			<?php if(!is_category()):?>
			<div id="slider" class="hidden-phone" style="margin: 0px 0px;">
				<div class="slider-wrapper theme-default">
			        <div class="ribbon"></div>
			        <div id="nivoslider" class="nivoSlider">
							<?php query_posts('category_name=slider');/*&posts_per_page=3' );*/ 
							while ( have_posts() ) : the_post(); ?>
							<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( 'homepage-slider' );  ?></a>
							<?php endwhile; wp_reset_query(); ?>
					</div>
			    </div>
			</div><!-- end of nivoslider -->
			<?php endif;?>
			<div id="contenido">
				<?php if(is_category()):?>
				<div class="row-fluid">
		            <ul class="thumbnails">
		              <li class="span5">
		                <a href="#" class="thumbnail">
		                  <?php if ( have_posts() ) : 
							query_posts("cat=$_GET[cat]&category_name=plan anual" );
							while ( have_posts() ) : the_post(); ?>
							<?php the_post_thumbnail( 'homepage-thumb' );  ?>
							<?php endwhile; wp_reset_query();
							 else: ?>Lo sentimos, no se han encontrado entradas.
							<?php endif; ?>
		                </a>
		              </li>		             
		            </ul>
          		</div>
          		<?php endif;?>
          		<?php if(is_category()):?>
          		<div class="row-fluid" style="padding-left:  100px; padding-right: 100px;">
          			<div >
		            <ul class="thumbnails">
		              <li class="span5">
		                <a href="#" class="thumbnail">
		                  <?php if ( have_posts() ) : 
							query_posts("cat=$_GET[cat]&category_name=plan semestral" );
							while ( have_posts() ) : the_post(); ?>
							<?php the_post_thumbnail( 'homepage-thumb' );  ?>
							<?php endwhile; wp_reset_query();
							 else: ?>Lo sentimos, no se han encontrado entradas.
							<?php endif; ?>
		                </a>
		              </li>
		              <li class="span5">
		                <a href="#" class="thumbnail">
		                  <?php if ( have_posts() ) : 
							query_posts("cat=$_GET[cat]&category_name=plan trimestral" );
							while ( have_posts() ) : the_post(); ?>
							<?php the_post_thumbnail( 'homepage-thumb' );  ?>
							<?php endwhile; wp_reset_query();
							 else: ?>Lo sentimos, no se han encontrado entradas.
							<?php endif; ?>
		                </a>
		              </li>
  		            </ul>
  		           </div>
          		</div>	
          		<?php endif;?>	
          		<?php if(is_category()):?>
				<div class="row-fluid">
		            <ul class="thumbnails">
		              <li class="span12">
		                <a href="#" class="thumbnail">
		                  <?php if ( have_posts() ) : 
							query_posts("cat=$_GET[cat]&category_name=promocion activa" );
							while ( have_posts() ) : the_post(); ?>
							<?php the_post_thumbnail( 'promocion-activa' );  ?>
							<?php endwhile; wp_reset_query();
							 else: ?>Lo sentimos, no se han encontrado entradas.
							<?php endif; ?>
		                </a>
		              </li>		             
		            </ul>
          		</div>
          		<?php endif;?>		
			</div>
			<div id="prueba">
				Aqui debe entrar el codigo php llamado por ajax
			</div>
		</div>
	</div>
	<div class="row-fluid">
		
	</div>
</div>
</div><!-- </div> continuacion del header.php-->
<script>
			$(document).ready(function()
			{
				$('.navder li').removeClass();
				$('#menu-item-93').addClass('active');
				
	
			});
		
		</script>

<?php get_footer(); ?>
