<?php
/*REQUIRES*/
//Register custom navigation walker
require_once get_template_directory() . '/template-parts/navbar.php';

/*FUNCTIONS */
//Load JS and CSS
function sudosu_agregar_css_js()
{
    wp_enqueue_style('style', get_stylesheet_uri()); //Style.css

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css', false, '1.1', 'all');

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap/bootstrap.bundle.min.js', array('jquery'), true);

    wp_enqueue_script('app-js', get_template_directory_uri() . '/js/app.js', array('bootstrap-js'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'sudosu_agregar_css_js');

function sudosu_setup()
{

    //Allows to add post-thumbnails
    if (function_exists('add_theme_support')) {
        add_theme_support('post-thumbnails');
    }

    //Adds the title of the page we are on
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'sudosu_setup');

//Sidebar
function sudosu_sidebar()
{
    register_sidebar(array(
        'id' => 'sidebar-derecha',
        'name' => __('Sidebar Derecha'),
        'description' => __('Barra lateral del tema Sudo Su. Arrastra tus Widgets!'),
        //HTML divs for sidebar
        'before_widget' => '<div class="card-body bluu_wi pb-0">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4><hr>',
    ));
}
add_action('widgets_init', 'sudosu_sidebar');

// Menu - navbar
function sudosu_register_my_menus()
{
    register_nav_menus(
        array(
            'menu-principal' => __('Menú Superior'),
        )
    );
}
add_action('init', 'sudosu_register_my_menus');

// Title tag 
add_theme_support('title-tag');

//Customized logo
add_theme_support('custom-logo', array(
    'height'      => 50,
    'width'       => 250,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array('site-title', 'site-description'),
));

//Add class to images
add_filter('get_image_tag_class', 'wpse302130_add_image_class');

function wpse302130_add_image_class($class)
{
    $class .= ' img-fluid';
    return $class;
}
