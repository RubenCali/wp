<?php

function laadStijlBlad(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');

}
add_action('init', 'laadStijlBlad');


function registreerMenu(){
    $argumenten = array(
        'hoofdmenu' => __('Hoofd menu')
    );
    register_nav_menus();
}
add_action('init', 'registreerMenu');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'init', 'register_navwalker' );
?>