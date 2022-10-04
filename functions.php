<?php
/*REQUIRES*/
//Register custom navigation walker
require_once get_template_directory(). '/template-parts/navbar.php';



/*FUNCTIONS */
//Registrar estilos
function sudosu_agregar_css_js() {
    //Style.css
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    // Registrar bootstrap
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css',false,'1.1','all');
    //Registrar JQuery
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap/bootstrap.bundle.min.js', array( 'jquery' ),true );
    //JS personalizados
    wp_enqueue_script( 'app-js', get_template_directory_uri() . '/js/app.js', array('bootstrap-js'), '1.0',true);
}
add_action( 'wp_enqueue_scripts', 'sudosu_agregar_css_js');




//
function sudosu_setup(){

    //Permite añadir imagenes destacadas
    if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    }

    //Añade el title de la pagina en la que nos encontramos
    add_theme_support( 'title-tag' );

}
add_action( 'after_setup_theme', 'sudosu_setup');

//Registrar Sidebar
function sudosu_sidebar() {
    register_sidebar( array(
        'id' => 'sidebar-derecha',
        'name' => __('Sidebar Derecha'),
        'description' => __('Barra lateral del tema Sudo Su. Arrastra tus Widgets!'),
        //DIVs del sidebar en documento HTML
        'before_widget' => '<div class="card-body bluu_wi pb-0">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4><hr>',
    ) );
}
add_action( 'widgets_init', 'sudosu_sidebar' );

//Registrar Menu
function sudosu_register_my_menus() {
    register_nav_menus(
      array(
        'menu-principal' => __( 'Menú Superior' ),
       )
     );
}
add_action( 'init', 'sudosu_register_my_menus' );







// Etiqueta de titulo 
add_theme_support( 'title-tag' );






//Logo personalizado
add_theme_support( 'custom-logo', array(
    //ALTO
    'height'      => 50,
    //ANCHO
    'width'       => 250,
    //PERMITIR FLEXIBILIDAD EN EL TAMAÑO
	'flex-height' => true,
    'flex-width'  => true,
    //
	'header-text' => array( 'site-title', 'site-description' ),
) );    





//Añadir clase a imagenes
add_filter('get_image_tag_class','wpse302130_add_image_class');

function wpse302130_add_image_class ($class){
    $class .= ' img-fluid';
    return $class;
    }

?>