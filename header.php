<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content=""text/html; charset="UTF-8"/>
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
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if IE]>
		<script type="text/javascript">
			document.createElement("article");
			document.createElement("nav");
			document.createElement("section");
			document.createElement("header");
			document.createElement("aside");
			document.createElement("figure");
			document.createElement("legend");
			document.createElement("footer");
		</script>
	<![endif] -->
	 
 	
</head>
<html>
<body>
	<div style="max-width: 960px; margin: 0 auto 0 auto; background-color: rgb(255,255,255);">
		<div id="img_cabezera" class="row-fluid" style="padding-bottom: 3px">
			<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
		</div>
		<div class="row-fluid">
			<div clas="span12">
				<?php delicate_show_navigation ('menu', 'delicate_show_pagemenu'); ?>				
			</div>
			<div class="navbar hidden-phone"  >
				<div class="container-fluid" >
					<ul id="menu" class="nav nav-pills pull-right">
						
					</ul>
					</div>
					</div>
		</div>
		
	<!-- </div> continua en el index.php--> 