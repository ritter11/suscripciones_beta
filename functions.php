<?php
register_nav_menus(array('menu' => 'Menu principal', 'menu_lateral' => 'Menu lateral'));

/* Mi jQuery */
function my_init_method() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', '/wp-content/themes/suscripciones_beta/scripts/jquery-1.7.2.min.js');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'my_init_method');

/*adherir bootstrap*/
function my_init_method2() {
	if (!is_admin()) {
		wp_deregister_script('bootstrap');
		wp_register_script('bootstrap', '/wp-content/themes/suscripciones_beta/scripts/bootstrap.min.js');
		wp_enqueue_script('bootstrap');
	}
}
add_action('init', 'my_init_method2');

/* soporte para los featured image de los post's */
add_theme_support('post-thumbnails');
add_image_size('homepage-thumb', 260, 180, true);
add_image_size('homepage-slider', 500, 300, true);
add_image_size('promocion-activa', 670, 100, true);

// incluir archivo .js con los llamados ajax.
wp_enqueue_script( 'mi-script-ajax',get_bloginfo('stylesheet_directory') . '/scripts/ajax.js', array( 'jquery' ) );
// ahora declaramos la variable MyAjax y le pasamos el valor url (wp-admin/admin-ajax.php) al script ajax.js. protegido con nonce
wp_localize_script( 'mi-script-ajax', 'MyAjax', array( 'url' => admin_url( 'admin-ajax.php' ), 'nonce' => wp_create_nonce( 'myajax-post-comment-nonce' )  ) );
 
//Para manejar admin-ajax tenemos que añadir estas dos acciones.
//IMPORTANTE!! Para que funcione reemplazar "buscar_posts" por vuestra action definida en ajax-search.js
 
add_action('wp_ajax_buscar_posts', 'buscar_posts_callback');
add_action('wp_ajax_nopriv_buscar_posts', 'buscar_posts_callback');
 
function buscar_posts_callback() {
     
    global $post;
	$nonce = $_POST['nonce'];
        if ( ! wp_verify_nonce( $nonce, 'myajax-post-comment-nonce' ) )
        die ( 'No intentes hacer algo indebido!');
    $args = array( 'numberposts' => 10, 's' => $_POST['cadena']);
     
    $myposts = get_posts( $args );
        echo '<ul>';
    foreach( $myposts as $post ) :  setup_postdata($post); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
           
        <?php endforeach; 
        echo '</ul>';
    die(); // Siempre hay que terminar con die
}

/*llamado ajax para las preguntas frecuentes*/
add_action('wp_ajax_preguntas', 'preguntas_frecuentes');
add_action('wp_ajax_nopriv_preguntas', 'preguntas_frecuentes');
function preguntas_frecuentes() {
     $nonce = $_POST['nonce'];
    if ( ! wp_verify_nonce( $nonce, 'myajax-post-comment-nonce' ) ){
        die ( 'No intentes hacer algo indebido!');
	}
	get_template_part('preguntas_frecuentes');
    die(); // Siempre hay que terminar con die
}

/*llamado ajax para el nivo slider*/
add_action('wp_ajax_slider', 'add_slider');
add_action('wp_ajax_nopriv_slider', 'add_slider');
function add_slider() {
     $nonce = $_POST['nonce'];
    if ( ! wp_verify_nonce( $nonce, 'myajax-post-comment-nonce' ) ){
        die ( 'No intentes hacer algo indebido!');
	}
	get_template_part('slider');
    die(); // Siempre hay que terminar con die
}

/*llamado ajax para planes de antofagasta*/
add_action('wp_ajax_antofagasta', 'planes_antofagasta');
add_action('wp_ajax_nopriv_antofagasta', 'planes_antofagasta');
function planes_antofagasta() {
     $nonce = $_POST['nonce'];
    if ( ! wp_verify_nonce( $nonce, 'myajax-post-comment-nonce' ) ){
        die ( 'No intentes hacer algo indebido!');
	}
	get_template_part('antofagasta');
    die(); // Siempre hay que terminar con die
}
?>