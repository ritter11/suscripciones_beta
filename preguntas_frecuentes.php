<?php
/*
 Template Name: Preguntas Frecuentes
 */
//get_header();
?>
<?php print_frecuent_question(); ?>

<?php query_posts(array('category_name' => 'pregunta frecuente nota'));
			while ( have_posts() ) : the_post(); ?>
			<p><?php the_content(); ?></p>
<?php endwhile; wp_reset_query(); ?>

