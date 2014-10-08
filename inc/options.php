<?php
$odin_theme_options = new Odin_Theme_Options(
    'imagicas-options', // Slug/ID da página (Obrigatório)
    __( 'Opções do tema', 'imagicas-theme' ), // Titulo da página (Obrigatório)
    'manage_options' // Nível de permissão (Opcional) [padrão é manage_options]
);
$odin_theme_options->set_tabs(
    array(
        array(
            'id' => 'social_options', // ID da aba e nome da entrada no banco de dados.
            'title' => __( 'Social', 'imagicas-theme' ), // Título da aba.
        ),
        array(
            'id' => 'geral_options',
            'title' => __( 'Geral', 'imagicas-theme' )
        )
    )
);
$odin_theme_options->set_fields(
    array(
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
    )
);


