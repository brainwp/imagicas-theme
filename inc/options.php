<?php
$odin_theme_options = new Odin_Theme_Options(
    'imagicas-options', // Slug/ID da página (Obrigatório)
    __( 'Opções do tema', 'imagicas-theme' ), // Titulo da página (Obrigatório)
    'manage_options' // Nível de permissão (Opcional) [padrão é manage_options]
);
$odin_theme_options->set_tabs(
    array(
        array(
            'id' => 'home_options', // ID da aba e nome da entrada no banco de dados.
            'title' => __( 'Home', 'imagicas-theme' ), // Título da aba.
        ),
        array(
            'id' => 'contato-options',
            'title' => __( 'Contato', 'imagicas-theme' )
        )
    )
);
$odin_theme_options->set_fields(
    array(
        'home_section' => array(
            'tab'   => 'home_options', // Sessão da aba odin_general
            'title' => __( 'Configurações da página inicial', 'imagicas-theme' ),
            'fields' => array(
                array(
                    'id' => 'logo_home',
                    'label' => __( 'Logo', 'imagicas-theme' ),
                    'type' => 'image',
                    'description' => __( 'Imagem do logo no home', 'imagicas-theme' )
                ),
                array(
                    'id' => 'field2',
                    'label' => __( 'Field 2', 'imagicas-theme' ),
                    'type' => 'text'
                )
            )
        ),
        'adsense_top_section' => array(
            'tab'   => 'contato-options', // Sessão da aba odin_adsense
            'title' => __( 'Blocos Adsense Homepage', 'imagicas-theme' ),
            'fields' => array(
                array(
                    'id' => 'banner1',
                    'label' => __( 'Banner 1', 'imagicas-theme' ),
                    'type' => 'textarea',
                    'default' => 'Default text',
                    'description' => __( 'Descrition Example', 'imagicas-theme' )
                ),
            )
        ),
    )
);


