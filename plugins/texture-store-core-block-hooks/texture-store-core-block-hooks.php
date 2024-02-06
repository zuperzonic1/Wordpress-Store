<?php

/*
* Plugin Name: Texture Store Core Block Hooks
*/

function texture_enqueue_block_editor_assets()
{
    wp_enqueue_script(
        'texture-store-core-block-hooks',
        plugins_url('plugin.js', __FILE__),
        array('wp-blocks', 'wp-dom-ready', 'wp-edit-post'),
        filemtime(plugin_dir_path(__FILE__) . '/plugin.js')
    );
}
add_action('enqueue_block_editor_assets', 'texture_enqueue_block_editor_assets');
