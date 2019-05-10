<?php


function enqueue_bootshop_file() {
	wp_enqueue_style( 'bootstrap-min', get_template_directory_uri().'//themes/bootshop/bootstrap.min.css' );
	wp_enqueue_style( 'animate-min', get_template_directory_uri().'/assets/css/animate.min.css' );

	wp_enqueue_script('bootstap-js-min',get_template_directory_uri().'/assets/js/bootstrap.min.js');
	wp_enqueue_script('checkbox-js',get_template_directory_uri().'/assets/js/bootstrap-checkbox-radio-switch.js');
}
?>