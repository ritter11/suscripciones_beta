<?php get_header(); ?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2">
			<!--Sidebar content-->
			<?php get_sidebar(); ?>
		
		</div>
		<div class="span10">
			<!--Body content-->
			<div class="well">
				<p> este es el numero de la categoria <?php echo $_GET['cat']; ?></p>
				<h1>Este es el contenido del home</h1>
				<?php if ( have_posts() ) : 
				query_posts('category_name=plan mensual' );
				while ( have_posts() ) : the_post(); ?>
				<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
				<?php the_title(); ?></a></h2>
				<?php the_content(); ?>
				<?php endwhile; wp_reset_query();
				 else: ?>Lo sentimos, no se han encontrado entradas.
				<?php endif; ?>
			</div>
			<div class="well">
				<?php if ( have_posts() ) : 
				query_posts( "cat=$_GET[cat]&category_name=plan mensual"/*array('category_name' => 'plan mensual', 'cat' => $_GET['cat'])*/ );
				while ( have_posts() ) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'homepage-thumb' ); } ?>
				<?php endwhile; wp_reset_query();
				 else: ?>Lo sentimos, no se han encontrado entradas.
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="row-fluid">
		
	</div>
</div>
</div><!-- </div> continuacion del header.php-->
<?php get_footer(); ?>
