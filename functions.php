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

function my_init_method2() {
	if (!is_admin()) {
		wp_deregister_script('bootstrap');
		wp_register_script('bootstrap', '/wp-content/themes/suscripciones_beta/scripts/bootstrap.min.js');
		wp_enqueue_script('bootstrap');
	}
}
add_action('init', 'my_init_method2');

add_theme_support('post-thumbnails');
add_image_size('homepage-thumb', 260, 180, true);
add_image_size('homepage-slider', 500, 300, true);
add_image_size('promocion-activa', 670, 100, true);

// Primero incluimos nuestro archivo javascript definido anteriormente
wp_enqueue_script( 'mi-script-ajax',get_bloginfo('stylesheet_directory') . '/scripts/ajax.js', array( 'jquery' ) );
// ahora declaramos la variable MyAjax y le pasamos el valor url (wp-admin/admin-ajax.php) al script ajax-search.js
wp_localize_script( 'mi-script-ajax', 'MyAjax', array( 'url' => admin_url( 'admin-ajax.php' ) ) );
 
//Para manejar admin-ajax tenemos que añadir estas dos acciones.
//IMPORTANTE!! Para que funcione reemplazar "buscar_posts" por vuestra action definida en ajax-search.js
 
add_action('wp_ajax_buscar_posts', 'buscar_posts_callback');
add_action('wp_ajax_nopriv_buscar_posts', 'buscar_posts_callback');
 
function buscar_posts_callback() {
     
    global $post;
    $args = array( 'numberposts' => 10, 's' => $_POST['cadena']);
     
    $myposts = get_posts( $args );
        echo '<ul>';
    foreach( $myposts as $post ) :  setup_postdata($post); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
           
        <?php endforeach; 
        echo '</ul>';
    die(); // Siempre hay que terminar con die
}

add_action('wp_ajax_preguntas', 'preguntas_frecuentes');
add_action('wp_ajax_nopriv_preguntas', 'preguntas_frecuentes');
function preguntas_frecuentes() {
     
    echo'<div class="accordion" id="accordion2">
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
					        <b>
						      1. Tipos de Suscripciones - Promociones
						    </b>
					      </a>
					    </div>
					    <div id="collapseOne" class="accordion-body collapse">
					      <div class="accordion-inner">					        
							Existen suscripciones anuales, semestrales y trimestrales, de Lunes a Domingo. 
							    <br></br>
							      
							Para tarifas y promociones disponibles ingresar a www.mercuriosuscripciones.cl y en la 
							    <br></br>
							      
							secci�n Zona Suscriptores �Comprar Suscripci�n�,  usted podr� encontrar todos nuestros productos.
					      </div>
					    </div>
					  </div>
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
					        <b>
						      2. Renovaci�n de Suscripciones
						    </b>
					      </a>
					    </div>
					    <div id="collapseTwo" class="accordion-body collapse">
					      <div class="accordion-inner">
					        Ingrese en nuestro portal www.mercuriosucripciones.cl y en la secci�n 
    						<br></br>
      
                			Zona Suscriptores �Renovar Suscripci�n� usted  podr� renovar en l�nea.
					      </div>
					    </div>
					  </div>
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
					        <b>3. Suscripciones Grandes Empresas</b>
					      </a>
					    </div>
					    <div id="collapseThree" class="accordion-body collapse">
					      <div class="accordion-inner">
					       	Contactar al 23301178 / 2330 1175 � al Fax: 29507333
					      </div>
					    </div>
					  </div>
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFourth">
					        <b>PAS: Pago Autom�tico de Suscripciones</b>
					      </a>
					    </div>
					    <div id="collapseFourth" class="accordion-body collapse">
					      <div class="accordion-inner">
					        Si desea cambiar su forma de pago banco o tarjeta de cr�dito, debe contactarse
							<br />	
							al 2242 1111 opci�n 4.
							<br />
							Si desea colocar t�rmino a un PAS debe enviar mail a terminodesuscripcion@mercurio.cl, los 15 primeros d�as de cada
					      	<br />
					      	mes para bloquear el cobro del mes siguiente, le recordamos que los cargos se env�an en forma anticipada al mes en
					      	<br />
					      	curso.
					      </div>
					    </div>
					  </div>
				</div>';
    die(); // Siempre hay que terminar con die
}
?>