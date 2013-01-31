<?php
/*
 Template Name: antofagasta
 */
?>
<ul class="nav nav-tabs" id="myTab">
  <li class="active"><a data-toggle="tab" href="#plan_anual">Plan Anual</a></li>
  <li ><a data-toggle="tab" href="#plan_semestral">Plan Semestral</a></li>
  <li><a data-toggle="tab" href="#plan_trimestral">Plan Trimestral</a></li>
  <li><a data-toggle="tab" href="#combenio_empresa">Combenio Empresas</a></li>
</ul>
 
<div class="tab-content">
  <div class="tab-pane fade in active " id="plan_anual">
  	<?php query_posts(array('category_name' => 'plan anual', 'tag' => 'antofagasta'));/*&posts_per_page=3' );*/
			while ( have_posts() ) : the_post(); ?>
				<!--<a href="<?php echo get_permalink(); ?>">--><?php the_title(); ?><!--</a>-->
				<?php the_post_thumbnail('homepage-slider');?>
			<?php endwhile; wp_reset_query(); ?>
  </div>  
  <div class="tab-pane fade " id="plan_semestral">
	<?php query_posts(array('category_name' => 'plan semestral', 'tag' => 'antofagasta'));/*&posts_per_page=3' );*/
			while ( have_posts() ) : the_post(); ?>
				<!--<a href="<?php echo get_permalink(); ?>">--><?php the_title(); ?><!--</a>-->
				<?php the_post_thumbnail('homepage-slider');?>
			<?php endwhile; wp_reset_query(); ?>
  </div>
  <div class="tab-pane fade" id="plan_trimestral">
  	<?php query_posts(array('category_name' => 'plan trimestral', 'tag' => 'antofagasta'));/*&posts_per_page=3' );*/
			while ( have_posts() ) : the_post(); ?>
				<!--<a href="<?php echo get_permalink(); ?>">--><?php the_title(); ?><!--</a>-->
				<?php the_post_thumbnail('homepage-slider');?>
			<?php endwhile; wp_reset_query(); ?>
  </div>
  <div class="tab-pane fade" id="combenio_empresa">
  	
  </div>
</div>
<div class="well">
	<?php query_posts(array('category_name' => 'promocion activa', 'tag' => 'antofagasta'));/*&posts_per_page=3' );*/
			while ( have_posts() ) : the_post(); ?>
				<!--<a href="<?php echo get_permalink(); ?>">--><?php the_title(); ?><!--</a>-->
				<?php the_post_thumbnail('homepage-slider');?>
			<?php endwhile; wp_reset_query(); ?>
</div>

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
	