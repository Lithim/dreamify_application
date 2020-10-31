<?php
function load_stylesheets(){
wp_register_style( 'styles', get_template_directory_uri() . '/style.css',false,'1.1','all');
wp_enqueue_style('styles');
}
add_action( 'wp_enqueue_scripts', 'load_stylesheets');
add_filter('acf/settings/remove_wp_meta_box', '__return_false');