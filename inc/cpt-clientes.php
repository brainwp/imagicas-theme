<?php
function cpt_clientes() {
	$cpt = new Odin_Post_Type(
        'Clientes', // Nome (Singular) do Post Type.
        'clientes' // Slug do Post Type.
        );

	$cpt->set_labels(
		array(
			'menu_name' => __( 'Clientes', 'imagicas-theme' ),
			'name'      => __( 'Clientes', 'imagicas-theme' ),
			'menu_name'           => __( 'Clientes', 'imagicas-theme' ),
			'parent_item_colon'   => __( 'Item parente', 'imagicas-theme' ),
			'all_items'           => __( 'Todos clientes', 'imagicas-theme' ),
			'view_item'           => __( 'Ver item', 'imagicas-theme' ),
			'add_new_item'        => __( 'Adicionar novo cliente', 'imagicas-theme' ),
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
			'menu_icon' => 'dashicons-groups',
			'menu_position' => 5,
			)
		);
}

//meta box
$clientes_img = new Odin_Metabox(
    'clientes_box', // Slug/ID do Metabox (obrigatório)
    'Clientes', // Nome do Metabox  (obrigatório)
    'clientes', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'high' // Prioridade (opções: high, core, default ou low) (opcional)
    );
$clientes_img->set_fields(
	array(
		array(
    'id'          => 'clientes_imgs', // Obrigatório
    'label'       => __( 'Galeria de imagens', 'imagicas-theme' ), // Obrigatório
    'type'        => 'image_plupload', // Obrigatório
    'default'     => '', // Opcional (deve ser o id de uma imagem em mídia)
    'description' => __( 'Selecione as imagens para a página de clientes', 'imagicas-theme' ), // Opcional
    )
		)
	);

add_action( 'init', 'cpt_clientes', 1 );
function change_order_clientes( $query ) {
	if(is_post_type_archive('clientes')){
		$query->set('orderby','rand');
	}
}
add_action( 'pre_get_posts', 'change_order_clientes' );
