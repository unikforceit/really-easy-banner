<?php

namespace UnikForce\REB\Frontend;

class Frontend
{

    public function __construct()
    {
        add_action('wp_enqueue_scripts', 'enqueue_assets');
    }

    public function enqueue_assets(){
        wp_register_style('reb-frontend', REB_DIR_URL.'frontend/assets/css/main.min.css', 'media', filemtime(UNIKFORCE_PLUGIN_DIR_NAME . 'frontend/assets/css/main.min.css'), 'all');
        wp_register_script('reb-frontend', REB_DIR_URL.'frontend/assets/js/main.min.js', ['jquery'], filemtime(UNIKFORCE_PLUGIN_DIR_NAME . 'frontend/assets/js/main.min.css'), true);

        wp_enqueue_script('reb-frontend');
        wp_enqueue_style('reb-frontend');
    }
}