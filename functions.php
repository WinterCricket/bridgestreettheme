<?php 

	function bridgestreet_files() {

		wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.3.1/css/all.css');
		wp_enqueue_style('bridgestreet_styles', get_stylesheet_uri());
		}

	add_action('wp_enqueue_scripts', 'bridgestreet_files');
