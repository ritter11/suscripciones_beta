<?php if ( have_posts() ) : 
							
							while ( have_posts() ) : the_post();
?>
<?php the_post_thumbnail('promocion-activa'); ?>
<?php endwhile;
	else:
?>
Lo sentimos, no se han encontrado entradas.
<?php endif; ?>