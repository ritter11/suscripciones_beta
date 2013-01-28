<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> <?php if ( is_home() ) { ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?><?php } ?>
		<?php if ( is_author() ) { ?><?php bloginfo('name'); ?> | Archivo por autor<?php } ?>
		<?php if ( is_single() ) { ?><?php wp_title(''); ?> | <?php wp_title(''); ?><?php } ?>
		<?php if ( is_page() ) { ?><?php bloginfo('name'); ?> | <?php wp_title(''); ?><?php } ?>
		<?php if ( is_category() ) { ?><?php bloginfo('name'); ?> | Archivo por Categoria | <?php single_cat_title(); ?><?php } ?>
		<?php if ( is_month() ) { ?><?php bloginfo('name'); ?> | Archivo por Mes | <?php the_time('F'); ?><?php } ?>
		<?php if ( is_search() ) { ?><?php bloginfo('name'); ?> | Resultados<?php } ?>
		<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?> | Archivo por Tag | <?php  single_tag_title("", true);
			} }
		?>
	</title>
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/scripts/nivo-slider.css" media="screen" />
	
	 <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/scripts/themes/default/default.css" type="text/css" media="screen" />
	 
 	
</head>
<html>
<body>
	<div style="max-width: 960px; margin: 0 auto 0 auto">
		<div id="img_cabezera" class="row-fluid">
			<center><img src="<?php bloginfo('template_url'); ?>/img/header.png" /></center>
		</div>
		<div class="row-fluid">
			<div clas="span12">
				<div class="navbar hidden-phone"  >
					<div class="navbar-inner" >
						<div class="container-fluid" >
							<?php wp_nav_menu(array('container' => false, 'items_wrap' => '<ul id="menu" class="nav pull-right">%3$s</ul>', 'theme_location' => 'menu')); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- </div> continua en el index.php--> 