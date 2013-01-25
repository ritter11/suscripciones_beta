<?php
register_nav_menus(array('menu' => 'Menu principal', 'menu_lateral' => 'Menu lateral'));
/* Mi jQuery */
/* Mi jQuery */
function my_init_method() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', '/wp-content/themes/suscripciones_beta/scripts/jquery-1.7.2.min.js');
		wp_enqueue_script('jquery');
	}
}

add_action('init', 'my_init_method');

add_theme_support('post-thumbnails');
add_image_size('homepage-thumb', 260, 180, true);
add_image_size('homepage-slider', 500, 300, true);
?>