<?php
// Custom post de Cursos

add_action('init', 'vg_theme_ctp_cursos');
function vg_theme_ctp_cursos()
{
	register_post_type('cursos', array(
		'label' => 'Cursos',
		'description' => 'Cursos',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'cursos', 'with_front' => true),

		'query_var' => true,
		'supports' => array('title', 'page-attributes', 'post-formats'),
		'labels' => array(
			'name' => 'Cursos',
			'singular_name' => 'Curso',
			'menu_name' => 'Cursos',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Curso',
			'edit' => 'Editar',
			'edit_item' => 'Editar Curso',
			'new_item' => 'Novo Curso',
			'view' => 'Ver Curso',
			'view_item' => 'Ver Curso',
			'search_items' => 'Procurar Cursos',
			'not_found' => 'Nenhum Curso Encontrado',
			'not_found_in_trash' => 'Nenhum Curso Encontrado no Lixo',
			'parent' => 'Parent Curso',
		)
	));
}

// Final dos custom posts