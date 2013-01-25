<?php
register_nav_menus( array(
'menu' => 'Menu principal',
'menu_lateral' => 'Menu lateral'
));

add_theme_support( 'post-thumbnails' );
add_image_size( 'homepage-thumb', 260, 180, true );
?>