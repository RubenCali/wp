<?php

function laadStijlBlad(){
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('init', 'laadStijlBlad');


function registreerMenu(){
    $argumenten = array(
        'hoofdmenu' => __('Hoofd menu')
    );
    register_nav_menus();
}
add_action('init', 'registreetMenu');
?>