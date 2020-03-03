<?php

function bridgestreet_files() {
  
  wp_enqueue_style('bridgestreet_styles', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'bridgestreet_files');