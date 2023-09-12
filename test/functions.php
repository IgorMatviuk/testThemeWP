<?php

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'styles', get_template_directory_uri() . '/styles.css' );
    wp_enqueue_style( 'revealator', get_template_directory_uri() . '/plugins/fm.revealator.jquery.min.css' );
    wp_enqueue_style( 'rangeslider', get_template_directory_uri() . '/plugins/rangeslider.css' );

    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.7.1.min.js');
	wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'rangeslider', get_template_directory_uri() . '/plugins/rangeslider.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'revealator', get_template_directory_uri() . '/plugins/fm.revealator.jquery.min.js', array('jquery'), true );
});

?>