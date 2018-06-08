<?php

    // CARGA DE SCRIPTS Y WEBFONTS

    function enqueue_scripts_and_css()
    {
        // wp_enqueue_script ( 'jquery' );
        // wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js');
        // wp_enqueue_script( 'animstion', get_template_directory_uri() . '/js/animsition.js');
        // wp_enqueue_script( 'animstion', get_template_directory_uri() . '/js/maindefinitivo.js');
       
        // wp_enqueue_style('animate', get_template_directory_uri() . 'css/animate.css');
        // wp_enqueue_style('bootstrap-grid', get_template_directory_uri() . 'css/bootstrap-grid.min.css');
        // wp_enqueue_style ( 'font-work-sans', 'https://fonts.googleapis.com/css?family=Work+Sans:400,700' );
    }



    // SOPORTE PARA IMÁGENES DESTACADAS

    add_theme_support ( 'post-thumbnails' );




    // REGISTRO DE MENÚS

    register_nav_menu ( 'main-menu', 'Menú principal' );
    register_nav_menu ( 'footer-menu', 'Menú pie de página' );
    register_nav_menu ( 'social-menu', 'Menú redes sociales' );


    // ACTIVACIÓN DE LA PÁGINA DE OPCIONES DE ACF

    if ( function_exists ( 'acf_add_options_page') ) acf_add_options_page();


    // ACTIVAR IMÁGENES SVG 
    add_filter('upload_mimes', 'my_upload_mimes');
 
function my_upload_mimes($mimes = array()) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}






?>