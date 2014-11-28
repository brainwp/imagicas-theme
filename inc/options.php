<?php
$odin_theme_options = new Odin_Theme_Options(
		'imagicas-options', // Slug/ID da página (Obrigatório)
		__( 'Opções do tema', 'imagicas-theme' ), // Titulo da página (Obrigatório)
		'manage_options' // Nível de permissão (Opcional) [padrão é manage_options]
		);
$odin_theme_options->set_tabs(
	array(
		array(
			'id' => 'geral_options',
			'title' => __( 'Geral', 'imagicas-theme' )
			),
		array(
						'id' => 'home_options', // ID da aba e nome da entrada no banco de dados.
						'title' => __( 'Home', 'imagicas-theme' ), // Título da aba.
				),
		array(
						'id' => 'clientes_options', // ID da aba e nome da entrada no banco de dados.
						'title' => __( 'Clientes', 'imagicas-theme' ), // Título da aba.
						),
		array(
						'id' => 'contato_options', // ID da aba e nome da entrada no banco de dados.
						'title' => __( 'Contato', 'imagicas-theme' ), // Título da aba.
						),
		array(
						'id' => 'laboratorio_options', // ID da aba e nome da entrada no banco de dados.
						'title' => __( 'Laboratório', 'imagicas-theme' ), // Título da aba.
				),
		array(
				'id' => 'social_options', // ID da aba e nome da entrada no banco de dados.
				'title' => __( 'Social', 'imagicas-theme' ), // Título da aba.
				),
		)
	);
$odin_theme_options->set_fields(
	array(
		'geral_section' => array(
			'tab'   => 'geral_options',
			'title' => __( 'Opções gerais', 'imagicas-theme' ),
			'fields' => array(
				array(
					'id' => 'endereco_footer',
					'label' => __( 'Endereço e telefone', 'imagicas-theme' ),
					'type' => 'textarea',
					'default' => 'Imágicas Laboratório Fotográfico Analógico PB - Rua Arruda Alvim, 195 -  tel +55 11 3083-2461',
					),
				array(
					'id' => 'creditos',
					'label' => __( 'Créditos', 'imagicas-theme' ),
					'type' => 'textarea',
					'default' => 'Todos os direitos reservados, desenvolvido por Brasa.',
					),
				)
			),
		'social_section' => array(
						'tab'   => 'social_options', // Sessão da aba odin_general
						'title' => __( 'Social', 'imagicas-theme' ),
						'fields' => array(
							array(
								'id' => 'fb_link',
								'label' => __( 'Link para o facebook', 'imagicas-theme' ),
								'type' => 'text',
								),
							)
						),
		'clientes_section' => array(
						'tab'   => 'clientes_options', // Sessão da aba odin_general
						'title' => __( 'Clientes', 'imagicas-theme' ),
						'fields' => array(
							array(
													 'id'          => 'clientes_logo_ativar', // Obrigatório
													 'label'       => __( 'Deseja ativar o logo na página de clientes?', 'imagicas-theme' ), // Obrigatório
													 'type'        => 'radio', // Obrigatório
													 // 'attributes' => array(), // Opcional (atributos para input HTML/HTML5)
													 'default'     => 'false', // Opcional
													 //'description' => __( 'Descrition Example', 'odin' ), // Opcional
													 'options'     => array( // Obrigatório (adicione aque os ids e títulos)
														'true'   => 'Ativar',
														'false'   => 'Desativar'
														),
													 )
							)
						),
'contato_section' => array(
						'tab'   => 'contato_options', // Sessão da aba odin_general
						'title' => __( 'Contato', 'imagicas-theme' ),
						'fields' => array(
							array(
													 'id'          => 'contato_logo_ativar', // Obrigatório
													 'label'       => __( 'Deseja ativar o logo na página de contato?', 'imagicas-theme' ), // Obrigatório
													 'type'        => 'radio', // Obrigatório
													 // 'attributes' => array(), // Opcional (atributos para input HTML/HTML5)
													 'default'     => 'false', // Opcional
													 //'description' => __( 'Descrition Example', 'odin' ), // Opcional
													 'options'     => array( // Obrigatório (adicione aque os ids e títulos)
														'true'   => 'Ativar',
														'false'   => 'Desativar'
														),
													 ),
							array(
									'id'          => 'contato_bg', // Obrigatório
								'label'       => __( 'Imagem de fundo da página Contato', 'imagicas-theme' ), // Obrigatório
						'type'        => 'image', // Obrigatório
							 //   'default'     => '', // Opcional (deve ser o id de uma imagem em mídia)
						 //'description' => __( 'Descrition Example', 'odin' ), // Opcional
						 )

							)
),
'home_section' => array(
						'tab'   => 'home_options', // Sessão da aba odin_general
						'title' => __( 'Home / Página Inicial', 'imagicas-theme' ),
						'fields' => array(
							array(
									'id'          => 'home_bg', // Obrigatório
								'label'       => __( 'Imagem de fundo da página inicial', 'imagicas-theme' ), // Obrigatório
						'type'        => 'image', // Obrigatório
							 //   'default'     => '', // Opcional (deve ser o id de uma imagem em mídia)
						 //'description' => __( 'Descrition Example', 'odin' ), // Opcional
						 )

							)
),
'laboratorio_section' => array(
						'tab'   => 'laboratorio_options', // Sessão da aba odin_general
						'title' => __( 'Laboratório', 'imagicas-theme' ),
						'fields' => array(
														array(
													 'id'          => 'lab_logo_ativar', // Obrigatório
													 'label'       => __( 'Deseja ativar o logo na página de laboratório?', 'imagicas-theme' ), // Obrigatório
													 'type'        => 'radio', // Obrigatório
													 // 'attributes' => array(), // Opcional (atributos para input HTML/HTML5)
													 'default'     => 'false', // Opcional
													 //'description' => __( 'Descrition Example', 'odin' ), // Opcional
													 'options'     => array( // Obrigatório (adicione aque os ids e títulos)
														'true'   => 'Ativar',
														'false'   => 'Desativar'
														),
													 ),
							array(
									'id'          => 'lab_bg', // Obrigatório
								'label'       => __( 'Imagem de fundo da página laboratório', 'imagicas-theme' ), // Obrigatório
						'type'        => 'image', // Obrigatório
							 //   'default'     => '', // Opcional (deve ser o id de uma imagem em mídia)
						 //'description' => __( 'Descrition Example', 'odin' ), // Opcional
						 ),
							array(
									'id'          => 'lab_intro', // Obrigatório
								'label'       => __( 'Texto da página laboratório', 'imagicas-theme' ), // Obrigatório
						'type'        => 'editor', // Obrigatório
								'default'     => 'O Imágicas é um laboratório fotográfico que trabalha com revelação e ampliação em processo clássico (preto e branco e analógico). Foi fundado pela laboratorista Rosangela Andrade em 1992 e tem em seu portfólio trabalhos de fotógrafos como: Cristiano Mascaro, Ed Viggiani, Thomas Farkas, German Lorca, Paulo Velloso, Vânia Toledo, Pedro Martinelli, Tiago Santana, Sylvia Diez entre outros. Rosangela que é uma das maiores entusiastas do processo analógico em São Paulo, persevera há 24 anos nesta prática é também fotógrafa e fundadora do Clube do Analógico.', // Opcional (deve ser o id de uma imagem em mídia)
						 //'description' => __( 'Descrition Example', 'odin' ), // Opcional
						 'attributes' =>
												array(
												'style' => 'height:200px;'
												)
						 ),
							array(
									'id'          => 'lab_video_open', // Obrigatório
								'label'       => __( 'Coloque o link da página que quer ver destacada ao abrir', 'imagicas-theme' ), // Obrigatório
						'type'        => 'text', // Obrigatório
						 'description' => __( 'A página deverá estar marcada como modal (Reveal-Modal)', 'imagicas-theme' ), // Opcional
						 ),

							)
),
)
);
