<?php

use App\PostTypes\Agenda;
use App\ACF\Fields\AgendaFields;

add_action('init', [Agenda::class, 'register']);
add_action('acf/init', [AgendaFields::class, 'register']);

function myblocks_agenda_block_init() {
	// wp_register_block_types_from_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
	register_block_type(__DIR__ . '/build/agenda');
}
add_action( 'init', 'myblocks_agenda_block_init' );

// function get_agenda_posts() {
//     $arg = [
//             'post_type' => 'agenda',
//             'numberposts' => '5'
//         ];

//     $agendas = get_posts($arg);

//     foreach ($agendas as $agenda) {
//         $data[$i]['id'] = $agenda->ID;
//         $data[$i]['title'] = $agenda->post_title;

//         $i++;
//     }
// }

// function hfm_acf_init_block_types() {
// add_action('acf/init', function() {
//     if ( function_exists('acf_register_block_type') ) {
//         acf_register_block_type( [
//             'name' => 'agenda',
//             'title' => 'Agenda Block',
//             'render_template' => 'blocks/agenda/agenda.php',
//             'category' => 'formatting',
//             'icon' => 'calendar',
//             'keywords' => ['agenda', 'evenement'],
//             'location' => [
//                     [
//                         'param' => 'post_type',
//                         'operator' => '==',
//                         'value' => 'agenda',
//                     ]
//             ]
//         ]);
//     }
// });
