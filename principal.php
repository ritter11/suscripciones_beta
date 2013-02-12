<?php
/*
 Template Name: principal
 */
?>
<!--slider-->
<div id="slider" class="hidden-phone">
	<div class="slider-wrapper theme-default">
		<div class="ribbon"></div>
		<div id="nivoslider" class="nivoSlider">
			<?php query_posts('category_name=slider');/*&posts_per_page=3' );*/
while ( have_posts() ) : the_post(); ?>
<!--<a href="<?php echo get_permalink(); ?>">--><?php the_post_thumbnail('sliders'); ?>
	<!--</a>-->
			<?php endwhile; wp_reset_query(); ?>
		</div>
		<center>
			<div style="padding-top:1px; padding-bottom: 20px;">
					<?php query_posts(array('category_name' => 'home2'));
					while ( have_posts() ) : the_post(); ?>
						<img src="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );
						echo $src[0];?>" class="img-polaroid">				
					<?php endwhile; wp_reset_query(); ?>
			
				
					<?php query_posts(array('category_name' => 'home3'));
					while ( have_posts() ) : the_post(); ?>
					<span style="padding-left: 40px">
						<img src="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );
						echo $src[0];?>" class="img-polaroid">
					</span>			
					<?php endwhile; wp_reset_query(); ?>
			</div>			
		</center>
	</div>
	
</div><!-- end of nivoslider -->