<?php


 if ( function_exists('register_sidebar') )
       register_sidebar(array(
		'name'=>'form_widget',
        'before_widget' => '<div id="%1$s" class="container-fluid %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
  ));
function delicate_show_navigation($args, $func) {
  wp_nav_menu( array( 'container' => '', 'menu_class' => 'topnav fl fr sf-js-enabled sf-shadow', 'menu_id' => 'nav-ie', 'theme_location' => $args, 'link_before' => '<span>', 'link_after' => '</span>', 'fallback_cb' => $func ) );
}
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
add_image_size('sliders', 763, 300, true);
add_image_size('promocion-activa', 670, 220, true);

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

/*respuesta ajax para las preguntas frecuentes*/
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

/*respuesta ajax para el principal*/
add_action('wp_ajax_principal', 'principal');
add_action('wp_ajax_nopriv_principal', 'principal');
function principal() {
     $nonce = $_POST['nonce'];
    if ( ! wp_verify_nonce( $nonce, 'myajax-post-comment-nonce' ) ){
        die ( 'No intentes hacer algo indebido!');
	}
	get_template_part('principal');
    die(); // Siempre hay que terminar con die
}

/*respuesta ajax para planes de antofagasta*/
add_action('wp_ajax_antofagasta', 'planes_antofagasta');
add_action('wp_ajax_nopriv_antofagasta', 'planes_antofagasta');
function planes_antofagasta() {
     $nonce = $_POST['nonce'];
    if ( ! wp_verify_nonce( $nonce, 'myajax-post-comment-nonce' ) ){
        die ( 'No intentes hacer algo indebido!');
	}
	get_template_part('./web/ciudades_template/antofagasta');
    die(); // Siempre hay que terminar con die
}

/*respuesta ajax para planes de arica*/
add_action('wp_ajax_arica', 'planes_arica');
add_action('wp_ajax_nopriv_arica', 'planes_arica');
function planes_arica() {
     $nonce = $_POST['nonce'];
    if ( ! wp_verify_nonce( $nonce, 'myajax-post-comment-nonce' ) ){
        die ( 'No intentes hacer algo indebido!');
	}
	get_template_part('./web/ciudades_template/arica');
    die(); // Siempre hay que terminar con die
}

/*respuesta ajax para planes de iquique*/
add_action('wp_ajax_iquique', 'planes_iquique');
add_action('wp_ajax_nopriv_iquique', 'planes_iquique');
function planes_iquique() {
     $nonce = $_POST['nonce'];
    if ( ! wp_verify_nonce( $nonce, 'myajax-post-comment-nonce' ) ){
        die ( 'No intentes hacer algo indebido!');
	}
	get_template_part('./web/ciudades_template/iquique');
    die(); // Siempre hay que terminar con die
}

/*respuesta ajax para planes de calama*/
add_action('wp_ajax_calama', 'planes_calama');
add_action('wp_ajax_nopriv_calama', 'planes_calama');
function planes_calama() {
     $nonce = $_POST['nonce'];
    if ( ! wp_verify_nonce( $nonce, 'myajax-post-comment-nonce' ) ){
        die ( 'No intentes hacer algo indebido!');
	}
	get_template_part('./web/ciudades_template/calama');
    die(); // Siempre hay que terminar con die
}

/*respuesta ajax para planes de tocopilla*/
add_action('wp_ajax_tocopilla', 'planes_tocopilla');
add_action('wp_ajax_nopriv_tocopilla', 'planes_tocopilla');
function planes_tocopilla() {
     $nonce = $_POST['nonce'];
    if ( ! wp_verify_nonce( $nonce, 'myajax-post-comment-nonce' ) ){
        die ( 'No intentes hacer algo indebido!');
	}
	get_template_part('./web/ciudades_template/calama');
    die(); // Siempre hay que terminar con die
}

/*respuesta ajax para planes de copiapo*/
add_action('wp_ajax_copiapo', 'planes_copiapo');
add_action('wp_ajax_nopriv_copiapo', 'planes_copiapo');
function planes_copiapo() {
     $nonce = $_POST['nonce'];
    if ( ! wp_verify_nonce( $nonce, 'myajax-post-comment-nonce' ) ){
        die ( 'No intentes hacer algo indebido!');
	}
	get_template_part('./web/ciudades_template/copiapo');
    die(); // Siempre hay que terminar con die
}

/*respuesta ajax para servicio al cliente*/
add_action('wp_ajax_servicio', 'servicio_cliente');
add_action('wp_ajax_nopriv_servicio', 'servicio_cliente');
function servicio_cliente() {
     $nonce = $_POST['nonce'];
    if ( ! wp_verify_nonce( $nonce, 'myajax-post-comment-nonce' ) ){
        die ( 'No intentes hacer algo indebido!');
	}
	get_template_part('servicio_cliente');
    die(); // Siempre hay que terminar con die
}

/*respuesta ajaxk para la promocion especial*/
add_action('wp_ajax_promo', 'promocion_especial');
add_action('wp_ajax_nopriv_promo', 'promocion_especial');
function promocion_especial() {
     $nonce = $_POST['nonce'];
    if ( ! wp_verify_nonce( $nonce, 'myajax-post-comment-nonce' ) ){
        die ( 'No intentes hacer algo indebido!');
	}
	get_template_part('promocion_especial');
    die(); // Siempre hay que terminar con die
}

/*Funcion que retorna codigo para generar los contactos*/
function print_frecuent_question(){
       
               query_posts('category_name=Concursos');
               global $post;
               if(have_posts()){
                       echo "<div class='accordion' id='accordion2'>";
                       while(have_posts()):the_post();
                                       //impreme todos los post con categoria preguntas frecuentes
                                       //en un panel colapsable
                                       echo "<!-tab arica->";
                                       echo "<div class='accordion-group'>";
                                               echo"<div class='accordion-heading'>";
                                                       echo"<a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#post-";
                                                       echo the_ID();
                                                       echo "'>";                                                        
                                                       echo "<h5>".the_title()."</h5> </a>";
                                               echo"</div>";
                                                       echo "<div id='post-";
                                                       echo the_ID();
                                                       echo "' class='accordion-body collapse'>";
                                                               echo "<div class='accordion-inner'>";
                                                                       the_content();
                                                               echo"</div>";
                                                       echo "</div>";
                                       echo "</div>";
                                       //fin del loop de imprecion 
                       endwhile;
                       echo "</div>";
               
               }

}
/*agreagar funcion para editar la cabecera de la pagina*/
$defaults = array(
    'default-image'          => '', # No hay URL a imagen por defecto
    'random-default'         => false, # La imagen mostrada deberá ser seleccionada manualmente
    'width'                  => 960, # No hay ancho definido - podrá ser elegido al recortar
    'height'                 => 90, # No hay altura definida - podrá ser elegido al recortar
    'flex-width'             => true, # Ancho flexible desactivado
    'flex-height'            => true, # Altura flexible desactivada
    'default-text-color'     => '', # El color del texto en el header debe elegirse
    'header-text'            => false, # Se mostrará el texto del header (título + descripción)
    'uploads'                => true, # Pueden subirse imágenes nuevas
    'wp-head-callback'       => '', 
    'admin-head-callback'    => '',
    'admin-preview-callback' => '',
);
add_theme_support( 'custom-header' , $defaults );

?>