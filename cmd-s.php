<?php
/*
Plugin Name: CMD-S Save
Description: Saves a pos by hijacking the cmd-s key combination
Version: 0.1
Author: Paul Adam Davis
Author URI: http://pauladamdvais.com
*/

function load_cmds_js() {
    $url = get_option('siteurl');
    $url = bloginfo("wpurl") . '/wp-content/plugins/cmd-s/save.js';
    echo '"<script type="text/javascript" src="'. $url . '"></script>"';
}
add_action('admin_footer', 'load_cmds_js');
