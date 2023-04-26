<?php


/**
 * Add a new dashboard widget.
 */
function reactwordpress_dashboard_init() {
wp_add_dashboard_widget( 'dashboard_widget', 'React wordpress', 'reactwordpress_widget_init' );
}




/**
 * Init Widget function
 * 
 */
function reactwordpress_widget_init() {
    require_once  REACTWORDPRESS__PLUGIN_DIR. 'templates/main.php';


}