<?php
/**
 * Plugin Name:       React Wordpress
 * Description:       Simple plugin to display time using Reactjs and WP Rest.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Stanly Medjo
 * License:           MIT
 * License URI:       MIT
 * Text Domain:       reactwordpress
 */




// Basic plugin setup

define('REACTWORDPRESS__PLUGIN_FILE',__FILE__ );
define('REACTWORDPRESS__PLUGIN_DIR',plugin_dir_path( __FILE__ )  );
define('REACTWORDPRESS__PLUGIN_URL', plugins_url( '', REACTWORDPRESS__PLUGIN_FILE));



// Includes

require_once REACTWORDPRESS__PLUGIN_DIR. '/process/init.php';
require_once REACTWORDPRESS__PLUGIN_DIR. '/process/enqueue.php';

// Hooks


add_action( 'admin_enqueue_scripts', 'reactwordpress_enqueue_scripts' );
add_action( 'wp_dashboard_setup', 'reactwordpress_dashboard_init');