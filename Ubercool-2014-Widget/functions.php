<?php
function register_menu() {
	register_nav_menu('Assigned Menu', __('Ubercoool'));
}
add_action('init', 'register_menu');

function ubercool_scripts() {
        wp_enqueue_style( 'ubercool-fontawesome', 'http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' );
        wp_enqueue_script( 'ubercool-search', get_template_directory_uri() . '/js/toggle-search.js', array('jquery'), '20140906', true );
}
add_action( 'wp_enqueue_scripts', 'ubercool_scripts' );

// indsæt her function der registrerer widget


?>