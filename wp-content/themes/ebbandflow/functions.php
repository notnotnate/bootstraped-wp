<?php 
	
	//Enque Bootstrap
	
	function enque_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', '//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css' );
	wp_enqueue_script( 'bootstrap-js', '//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js', array('jquery'), '3.0.3', true );
}

add_action( 'wp_enqueue_scripts', 'enque_bootstrap' );
	
	
?>