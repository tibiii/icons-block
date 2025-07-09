<?php
/**
 * Plugin Name: Icons Block
 * Update URI: false
 */
function icons_register_icons() {
    register_block_type(__DIR__ . '/build');
}

add_action('init', 'icons_register_icons');