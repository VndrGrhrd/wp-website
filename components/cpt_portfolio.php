<?php
// Custom post de Portfólios

add_action('init', 'vg_theme_ctp_protfolio');
function vg_theme_ctp_protfolio()
{
	register_post_type('portfólios', array(
		'label' => 'Portfólios',
		'description' => 'Portfólios',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'portfólios', 'with_front' => true),

		'query_var' => true,
		'supports' => array('title', 'page-attributes', 'post-formats'),
		'labels' => array(
			'name' => 'Portfólios',
			'singular_name' => 'Portfólio',
			'menu_name' => 'Portfólios',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Portfólio',
			'edit' => 'Editar',
			'edit_item' => 'Editar Portfólio',
			'new_item' => 'Novo Portfólio',
			'view' => 'Ver Portfólio',
			'view_item' => 'Ver Portfólio',
			'search_items' => 'Procurar Portfólios',
			'not_found' => 'Nenhum Portfólio Encontrado',
			'not_found_in_trash' => 'Nenhum Portfólio Encontrado no Lixo',
			'parent' => 'Parent Portfólio',
		)
	));
}

// Final dos custom posts