<?php
// Custom Posts Types Vão Aqui

// Custom post de Experiencias

add_action('init', 'vg_theme_ctp_experiencias');
function vg_theme_ctp_experiencias()
{
	register_post_type('experiencias', array(
		'label' => 'Experiencias',
		'description' => 'Experiencias',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'experiencias', 'with_front' => true),

		'query_var' => true,
		'supports' => array('title', 'page-attributes', 'post-formats'),
		'labels' => array(
			'name' => 'Experiencias',
			'singular_name' => 'Experiencia',
			'menu_name' => 'Experiencias',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Experiencia',
			'edit' => 'Editar',
			'edit_item' => 'Editar Experiencia',
			'new_item' => 'Novo Experiencia',
			'view' => 'Ver Experiencia',
			'view_item' => 'Ver Experiencia',
			'search_items' => 'Procurar Experiencias',
			'not_found' => 'Nenhum Experiencia Encontrado',
			'not_found_in_trash' => 'Nenhum Experiencia Encontrado no Lixo',
			'parent' => 'Parent Experiencia',
		)
	));
}

// Final dos custom posts