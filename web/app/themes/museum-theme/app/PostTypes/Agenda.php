<?php

namespace App\PostTypes;

class Agenda {
    public static function register() {
        register_post_type('agenda', [
            'label' => 'Agenda',
            'public' => true,
            'supports' => ['title', 'thumbnail'],
            'menu_icon' => 'dashicons-calendar',

            // 'show_in_rest' => true,
            // 'rest_base' => 'agenda'
        ]);
    }
}