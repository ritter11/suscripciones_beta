<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content=""text/html; charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> <?php if ( is_home() ) { ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?><?php } ?> </title>
		<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
		<?php wp_head(); ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/scripts/nivo-slider.css" media="screen" />
		<!-- CSS PARA LA BARRA DE MENU -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/ubermenu/twotone_silver_black.css" media="screen" />	
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/ubermenu/basic.css" media="screen" />	
	
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
		<script>
			$('#megaMenu').click(function(e) {
				alert("holaa");
				/*$('#megaMenu li').removeClass('current-menu-item');
				 var $this = $(this);
				 if (!$this.hasClass('current-menu-item')) {
				 $this.addClass('current-menu-item');
				 }
				 e.preventDefault();*/
			});
		</script>

	</head>

	<body>
		<div style="max-width: 960px; margin: 0 auto 0 auto; background-color: rgb(255,255,255);">
			<div id="img_cabezera" class="row-fluid" style="padding-bottom: 3px">
				<a href="<?php bloginfo('url'); ?>"> <img src="<?php header_image(); ?>" height="<?php echo get_custom_header() -> height; ?>" width="<?php echo get_custom_header() -> width; ?>" alt="" /> </a>
			</div>
			<div class="row-fluid">
				<div clas="span12">
					<div id="megaMenu" class="megaMenuContainer megaResponsive megaFullWidth wpmega-preset-tt-silver megaMenuHorizontal megaMenuOnHover wpmega-withjs wpmega-noconflict megaMenu-withjs">
						<ul id="megaUber" class="megaMenu">
							<li class="menu-item menu-item-type-custom menu-item-object-custom ss-nav-menu-item-0 ss-nav-menu-item-depth-0 ss-nav-menu-reg ss-nav-menu-mega-floatRight">
								<a id="atencion_cliente" href="#myModal"><span class="wpmega-link-title">Atencion al Cliente</span></a>
							</li>
							<li class="menu-item menu-item-type-custom menu-item-object-custom ss-nav-menu-item-1 ss-nav-menu-item-depth-0 ss-nav-menu-reg ss-nav-menu-mega-floatRight">
								<a id="preguntas" href="#"><span><span class="wpmega-link-title">Preguntas Frecuentes</span></span></a>
							</li>
							<li id="inicio" class="current-menu-item menu-item menu-item-type-custom menu-item-object-custom ss-nav-menu-item-2 ss-nav-menu-item-depth-0 ss-nav-menu-reg ss-nav-menu-mega-floatRight">
								<a href="#"><span><span class="wpmega-link-title">Inicio</span></span></a>
							</li>
						</ul>
					</div> 
					<?php// delicate_show_navigation ('menu', 'delicate_show_pagemenu'); ?>
				</div>
				<div class="navbar hidden-phone"  >
					<div class="container-fluid" >
						<ul id="menu" class="nav nav-pills pull-right">

						</ul>
					</div>
				</div>
			</div>

			<!-- </div> continua en el index.php-->
