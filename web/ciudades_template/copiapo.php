<?php
/*
 Template Name: copiapo
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
  				
			<?php query_posts(array('category_name' => 'plan anual', 'tag' => 'copiapo'));
			while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_post_thumbnail('homepage-slider'); ?>
			<p>
				<?php the_content(); ?>
			</p>
			<?php endwhile; wp_reset_query(); ?>
  </div>  
  <div class="tab-pane fade " id="plan_semestral">
	<?php query_posts(array('category_name' => 'plan semestral', 'tag' => 'copiapo'));/*&posts_per_page=3' );*/
			while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_post_thumbnail('homepage-slider'); ?>
			<p>
				<?php the_content(); ?>
			</p>
			<?php endwhile; wp_reset_query(); ?>
  </div>
  <div class="tab-pane fade" id="plan_trimestral">
  	<?php query_posts(array('category_name' => 'plan trimestral', 'tag' => 'copiapo'));/*&posts_per_page=3' );*/
			while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_post_thumbnail('homepage-slider'); ?>
			<p>
				<?php the_content(); ?>
			</p>
			<?php endwhile; wp_reset_query(); ?>
  </div>
  <div class="tab-pane fade" id="combenio_empresa">
  	
  </div>
</div>
<div class="well">
	<?php query_posts(array('category_name' => 'promocion activa', 'tag' => 'copiapo'));/*&posts_per_page=3' );*/
			while ( have_posts() ) : the_post(); ?>
				<!--<a href="<?php echo get_permalink(); ?>">--><?php the_title(); ?><!--</a>-->
				<?php the_post_thumbnail('homepage-slider');?>
			<?php endwhile; wp_reset_query(); ?>
</div>