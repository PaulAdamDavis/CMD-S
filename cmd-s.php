<?php
/*
Plugin Name: CMD-S Save
Description: A dirty way to save a post, page or <abbr title="Custom post type">cpt</abbr> by hijacking the <code>cmd-s</code> key combination in most good browsers.
Version: 1.0
Author: Paul Adam Davis
Author URI: http://pauladamdvais.com
*/

function load_custom_wp_admin_style() {
    wp_enqueue_script( 'cbm_smd_s', plugins_url('/save.js', __FILE__), array('jquery'), '1.0', true);
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );