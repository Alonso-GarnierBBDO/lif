<?php

    /**
     * All javascript scripts are executed in this file.
     */

    function javascript_settings(){
        wp_enqueue_script('settings_javascript', get_template_directory_uri() . '/dist/javascript/global.js', '1.0.0', true);
    }
    
    add_action('wp_enqueue_scripts', 'javascript_settings');