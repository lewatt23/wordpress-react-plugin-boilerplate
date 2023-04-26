<?php

/**
 * Enqueue scripts and styles.
 *
 * @return void
 */
function reactwordpress_enqueue_scripts() {
    wp_enqueue_style( 'reactwordpress-style', REACTWORDPRESS__PLUGIN_URL . '/build/index.css' );
    wp_enqueue_script( 'reactwordpress-script', REACTWORDPRESS__PLUGIN_URL. '/build/index.js', array( 'wp-element' ), '1.0.0', true );
}