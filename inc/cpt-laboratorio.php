<?php
//cpt lab
function cpt_lab() {
	$cpt = new Odin_Post_Type(
        'Laboratório', // Nome (Singular) do Post Type.
        'laboratorio' // Slug do Post Type.
        );

	$cpt->set_labels(
		array(
			'menu_name' => __( 'Laboratório', 'imagicas-theme' ),
			'name'      => __( 'Laboratório', 'imagicas-theme' ),
			'parent_item_colon'   => __( 'Item parente', 'imagicas-theme' ),
			'all_items'           => __( 'Todos itens', 'imagicas-theme' ),
			'view_item'           => __( 'Ver item', 'imagicas-theme' ),
			'add_new_item'        => __( 'Adicionar novo item', 'imagicas-theme' ),
			'add_new'             => __( 'Adicionar novo', 'imagicas-theme' ),
			'edit_item'           => __( 'Editar item', 'imagicas-theme' ),
			'update_item'         => __( 'Atualizar item', 'imagicas-theme' ),
			'search_items'        => __( 'Buscar item', 'imagicas-theme' ),
			'not_found'           => __( 'Não encontrado', 'imagicas-theme' ),
			'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'imagicas-theme' ),
			)
		);

	$cpt->set_arguments(
		array(
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			'menu_icon' => 'dashicons-feedback',
			'menu_position' => 5,
			)
		);
	$tax = new Odin_Taxonomy(
    'Tipo de item', // Nome (Singular) da nova Taxonomia.
    'lab_tax', // Slug do Taxonomia.
    'laboratorio' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
   );
   $tax->set_labels(
   	array(
   		'name'                       => _x( 'Tipo de itens', 'Taxonomy General Name', 'imagicas-theme' ),
		'singular_name'              => _x( 'Tipo de item', 'Taxonomy Singular Name', 'imagicas-theme' ),
		'menu_name'                  => __( 'Tipo de itens', 'imagicas-theme' ),
		'all_items'                  => __( 'Todos tipos', 'imagicas-theme' ),
		'parent_item'                => __( 'Item parente', 'imagicas-theme' ),
		'parent_item_colon'          => __( 'Item parente:', 'imagicas-theme' ),
		'new_item_name'              => __( 'Adicionar novo', 'imagicas-theme' ),
		'add_new_item'               => __( 'Adicionar novo', 'imagicas-theme' ),
		'edit_item'                  => __( 'Adicionar tipo', 'imagicas-theme' ),
		'update_item'                => __( 'Atualizar tipo', 'imagicas-theme' ),
		'separate_items_with_commas' => __( 'Separe os tipos com virgula', 'imagicas-theme' ),
		'search_items'               => __( 'Buscar tipos', 'imagicas-theme' ),
		'add_or_remove_items'        => __( 'Adicionar ou remover tipos', 'imagicas-theme' ),
		'choose_from_most_used'      => __( 'Escolhe pelo mais usado', 'imagicas-theme' ),
		'not_found'                  => __( 'Não encontrado', 'imagicas-theme' ),
		)
   	);
}

add_action( 'init', 'cpt_lab', 1 );
