<?php

namespace App\PostTypes;

class Actualite {
    public static function register() {
        register_post_type('actualite', [
            'label' => 'Actualités',
            'public' => true,
            'supports' => ['title', 'thumbnail', 'editor'],
            'menu_icon' => 'dashicons-excerpt-view'
        ]);
    }
}