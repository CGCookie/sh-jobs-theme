<?php
add_action( 'wp_enqueue_scripts', 'superhivejobs_enqueue_styles' );

function superhivejobs_enqueue_styles() {
	wp_enqueue_style( 
		'superhive-jobs-style', 
		get_stylesheet_uri()
	);
}
?>