<?php 


/**
*
*Plugin Name: Star FaceBook Like Page
*/
// Exit if Acesses Directory
if(!defined('ABSPATH')){
	exit;
}
// Load Script
require_once(plugin_dir_path(__FILE__).'/inc/star-facebook-like-script.php');
require_once(plugin_dir_path(__FILE__).'/inc/star-facebook-like-class.php');

// Register Widget
	function register_star_facebook_page(){
		register_widget('star_facebook_page_widget' );
	}
	add_action('widgets_init', 'register_star_facebook_page');
