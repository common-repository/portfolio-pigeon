<?php
/*
Plugin Name: Portfolio Pigeon
Plugin URI: https://chrisbuckmaster.xyz/pinecone-apps/
Description: Registers a "Portfolio" and "Case Studies" custom post type, which have separate taxonomies for tags and categories, allowing for easy organisation.
Version: 1.0.2
Author: Pinecone Apps
Author URI: https://chrisbuckmaster.xyz/pinecone-apps/
License: GPL3
*/

 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Run away.
}

// Load required files

  include( plugin_dir_path( __FILE__ ) . '/includes/portfolio.php');
  include( plugin_dir_path( __FILE__ ) . '/includes/case-studies.php');
  include( plugin_dir_path( __FILE__ ) . '/includes/quick-view.php');
