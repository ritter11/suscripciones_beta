<?php
/*
 Template Name: tocopilla
 */
?>
<ul class="nav nav-tabs" id="myTab">
	<li class="active">
		<a data-toggle="tab" href="#planes">Planes:</a>
	</li>
	<li >
		<a data-toggle="tab" href="#plan_anual">Plan Anual</a>
	</li>
	<li >
		<a data-toggle="tab" href="#plan_semestral">Plan Semestral</a>
	</li>
	<li>
		<a data-toggle="tab" href="#plan_trimestral">Plan Trimestral</a>
	</li>
	<li>
		<a data-toggle="tab" href="#convenio_empresa">Convenio Empresas</a>
	</li>
</ul>

<div class="tab-content">
	<div class="tab-pane fade in active" id="planes">
		<div style="padding-bottom: 5px;">
			<?php query_posts(array('category_name' => 'plan anual', 'tag' => 'tocopilla'));
			while ( have_posts() ) : the_post(); ?>
			<span style="padding-right: 5px">
				<img src="<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post -> ID), array(720, 405), false, '');
				echo $src[0];
				?>" class="img-polaroid"" >
			</span>
			<?php endwhile; wp_reset_query(); ?>

			<?php query_posts(array('category_name' => 'convenio empresa', 'tag' => 'tocopilla'));
			while ( have_posts() ) : the_post(); ?>
			<span style="padding-left: 5px">
			<img src="<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post -> ID), array(720, 405), false, '');
				echo $src[0];
			?>" class="img-polaroid">
			</span>
			<?php endwhile; wp_reset_query(); ?>
		</div>

		<div style="padding-top:5px; padding-bottom: 20px;">
			<?php query_posts(array('category_name' => 'plan semestral', 'tag' => 'tocopilla'));
			while ( have_posts() ) : the_post(); ?>
			<img src="<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post -> ID), array(720, 405), false, '');
				echo $src[0];
			?>" class="img-polaroid">
			<?php endwhile; wp_reset_query(); ?>

			<?php query_posts(array('category_name' => 'plan trimestral', 'tag' => 'tocopilla'));
			while ( have_posts() ) : the_post(); ?>
			<span style="padding-left: 10px"> <img src="<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post -> ID), array(720, 405), false, '');
				echo $src[0];
				?>" class="img-polaroid"> </span>
			<?php endwhile; wp_reset_query(); ?>
		</div>
		<div>
			<?php query_posts(array('category_name' => 'promocion activa', 'tag' => 'tocopilla'));
			while ( have_posts() ) : the_post(); ?>
			<img src="<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post -> ID), array(720, 405), false, '');
				echo $src[0];
			?>" class="img-polaroid">

			<?php endwhile; wp_reset_query(); ?>
		</div>

	</div>
	<div class="tab-pane fade" id="plan_anual">

		<?php query_posts(array('category_name' => 'plan anual', 'tag' => 'tocopilla'));
		while ( have_posts() ) : the_post(); ?>
		<div class="row-fluid">
			<div class="span10">
				<p >
					<?php the_content(); ?>
				</p>
			</div>
		</div>
		<?php endwhile; wp_reset_query(); ?>
		
		<div>	
	<?php query_posts(array('category_name' => 'promocion activa', 'tag' => 'tocopilla'));
			while ( have_posts() ) : the_post(); ?>
				<img src="<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post -> ID), array(720, 405), false, '');
				echo $src[0];
			?>" class="img-polaroid">
				
			<?php endwhile; wp_reset_query(); ?>
		</div>
	</div>
	<div class="tab-pane fade " id="plan_semestral">
		<?php query_posts(array('category_name' => 'plan semestral', 'tag' => 'tocopilla'));/*&posts_per_page=3' );*/
		while ( have_posts() ) : the_post(); ?>
		<div class="row-fluid">
			<div class="span10">
				<p >
					<?php the_content(); ?>
				</p>
			</div>
		</div>
		<?php endwhile; wp_reset_query(); ?>
	</div>
	<div class="tab-pane fade" id="plan_trimestral">
		<?php query_posts(array('category_name' => 'plan trimestral', 'tag' => 'tocopilla'));/*&posts_per_page=3' );*/
		while ( have_posts() ) : the_post(); ?>
		<div class="row-fluid">
			<div class="span10">
				<p >
					<?php the_content(); ?>
				</p>
			</div>
		</div>
		<?php endwhile; wp_reset_query(); ?>
	</div>
	<div class="tab-pane fade" id="convenio_empresa">
		<?php query_posts(array('category_name' => 'convenio empresa', 'tag' => 'tocopilla'));/*&posts_per_page=3' );*/
		while ( have_posts() ) : the_post(); ?>
		<div class="row-fluid">
			<div class="span10">
				<p >
					<?php the_content(); ?>
				</p>
			</div>
		</div>
		<?php endwhile; wp_reset_query(); ?>
		<div>
			<?php query_posts(array('category_name' => 'promocion activa', 'tag' => 'tocopilla'));
			while ( have_posts() ) : the_post(); ?><img src="<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post -> ID), array(720, 405), false, '');
				echo $src[0];
			?>" class="img-polaroid">

			<?php endwhile; wp_reset_query(); ?>
		</div>
	</div>
</div>