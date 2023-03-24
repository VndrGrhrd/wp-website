<?php
// Custom Posts Types Vão Aqui

// Custom post de Formações

add_action('init', 'vg_theme_ctp_formacao');
function vg_theme_ctp_formacao()
{
	register_post_type('formacoes', array(
		'label' => 'Formações',
		'description' => 'Formações',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'formacoes', 'with_front' => true),

		'query_var' => true,
		'supports' => array('title', 'page-attributes', 'post-formats'),
		'labels' => array(
			'name' => 'Formações',
			'singular_name' => 'Formação',
			'menu_name' => 'Formações',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Formação',
			'edit' => 'Editar',
			'edit_item' => 'Editar Formação',
			'new_item' => 'Novo Formação',
			'view' => 'Ver Formação',
			'view_item' => 'Ver Formação',
			'search_items' => 'Procurar Formações',
			'not_found' => 'Nenhum Formação Encontrado',
			'not_found_in_trash' => 'Nenhum Formação Encontrado no Lixo',
			'parent' => 'Parent Formação',
		)
	));
}

// Final dos custom posts