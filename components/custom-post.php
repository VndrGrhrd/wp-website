<?php
// Custom Posts Types Vão Aqui

// Custom post de Produtos

add_action('init', 'cptui_register_my_cpt_produtos');
function cptui_register_my_cpt_produtos() {
register_post_type('produtos', array(
'label' => 'Produtos',
'description' => 'Produtos',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'produtos', 'with_front' => true),

'query_var' => true,
'supports' => array('title','page-attributes','post-formats'),
'labels' => array (
	'name' => 'Produtos',
	'singular_name' => 'Produto',
	'menu_name' => 'Produtos',
	'add_new' => 'Adicionar Novo',
	'add_new_item' => 'Adicionar Novo Produto',
	'edit' => 'Editar',
	'edit_item' => 'Editar Produto',
	'new_item' => 'Novo Produto',
	'view' => 'Ver Produto',
	'view_item' => 'Ver Produto',
	'search_items' => 'Procurar Produtos',
	'not_found' => 'Nenhum Produto Encontrado',
	'not_found_in_trash' => 'Nenhum Produto Encontrado no Lixo',
	'parent' => 'Parent Produto',
)
) ); }

// Final dos custom posts