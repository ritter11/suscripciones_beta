<?php
/*
 Template Name: antofagasta
 */
?>
<ul class="nav nav-tabs" id="myTab">
	<li class="active"><a data-toggle="tab" href="#planes">Planes:</a></li>
  <li ><a data-toggle="tab" href="#plan_anual">Plan Anual</a></li>
  <li ><a data-toggle="tab" href="#plan_semestral">Plan Semestral</a></li>
  <li><a data-toggle="tab" href="#plan_trimestral">Plan Trimestral</a></li>
  <li><a data-toggle="tab" href="#combenio_empresa">Combenio Empresas</a></li>
</ul>
 
<div class="tab-content">
	<div class="tab-pane fade in active" id="planes">
		<div>
  				<?php query_posts(array('category_name' => 'plan anual', 'tag' => 'antofagasta'));
			while ( have_posts() ) : the_post(); ?>
				<img src="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );
				echo $src[0];?>" class="img-polaroid"" >			
			<?php endwhile; wp_reset_query(); ?>
		</div>
																							
			<div style="padding-top:10px; padding-bottom: 20px;">
					<?php query_posts(array('category_name' => 'plan semestral', 'tag' => 'antofagasta'));
					while ( have_posts() ) : the_post(); ?>
						<img src="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );
						echo $src[0];?>" class="img-polaroid">				
					<?php endwhile; wp_reset_query(); ?>
			
				
					<?php query_posts(array('category_name' => 'plan trimestral', 'tag' => 'antofagasta'));
					while ( have_posts() ) : the_post(); ?>
					<span style="padding-left: 10px">
						<img src="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );
						echo $src[0];?>" class="img-polaroid">
					</span>			
					<?php endwhile; wp_reset_query(); ?>
			</div>			
	
			
  </div>
  <div class="tab-pane fade" id="plan_anual">
  				
			<?php query_posts(array('category_name' => 'plan anual', 'tag' => 'antofagasta'));
			while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_post_thumbnail('homepage-thumb'); ?>
			<p>
				<?php the_content(); ?>
			</p>
			<?php endwhile; wp_reset_query(); ?>
  </div>  
  <div class="tab-pane fade " id="plan_semestral">
	<?php query_posts(array('category_name' => 'plan semestral', 'tag' => 'antofagasta'));/*&posts_per_page=3' );*/
			while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_post_thumbnail('homepage-thumb'); ?>
			<p>
				<?php the_content(); ?>
			</p>
			<?php endwhile; wp_reset_query(); ?>
  </div>
  <div class="tab-pane fade" id="plan_trimestral">
  	<?php query_posts(array('category_name' => 'plan trimestral', 'tag' => 'antofagasta'));/*&posts_per_page=3' );*/
			while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_post_thumbnail('homepage-thumb'); ?>
			<p>
				<?php the_content(); ?>
			</p>
			<?php endwhile; wp_reset_query(); ?>
  </div>
  <div class="tab-pane fade" id="combenio_empresa">
  	
  </div>
</div>

<div class="well">	
	<?php query_posts(array('category_name' => 'promocion activa', 'tag' => 'antofagasta'));
			while ( have_posts() ) : the_post(); ?>
				<center><img src="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );
				echo $src[0];?>" class="img-polaroid"></center>
				
			<?php endwhile; wp_reset_query(); ?>
</div>
	