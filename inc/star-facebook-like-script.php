<?php
	// Add Scripts
	function fpp_add_script(){
		wp_enqueue_style('fpp-main-style', plugins_url().'/star-facebook-like/css/style.css' );
		wp_enqueue_script('fpp-main-script', plugins_url().'/star-facebook-like/js/main.js', array('jquery') );
	}
	add_action('wp_enqueue_scripts', 'fpp_add_script');
