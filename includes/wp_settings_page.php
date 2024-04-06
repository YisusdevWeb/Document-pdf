<?php
function registrar_dslt_documentos()
{
    // Incluye el archivo donde se define $text_domain

    global $text_domain; // Globaliza la variable $text_domain

    $labels = array(
        'name'               => esc_html__('Documentos', $text_domain),
        'singular_name'      => esc_html__('Documento', $text_domain),
        'menu_name'          => esc_html__('Documentos', $text_domain),
        'add_new'            => esc_html__('Añadir Nuevo', $text_domain),
        'add_new_item'       => esc_html__('Añadir Nuevo Documento', $text_domain),
        'edit_item'          => esc_html__('Editar Documento', $text_domain),
        'new_item'           => esc_html__('Nuevo Documento', $text_domain),
        'view_item'          => esc_html__('Ver Documento', $text_domain),
        'search_items'       => esc_html__('Buscar Documentos', $text_domain),
        'not_found'          => esc_html__('No se encontraron documentos', $text_domain),
        'not_found_in_trash' => esc_html__('No se encontraron documentos en la papelera', $text_domain),
        'parent_item_colon'  => esc_html__('Documento Padre:', $text_domain),
        'all_items'          => esc_html__('Todos los Documentos', $text_domain),
        'archives'           => esc_html__('Archivo de Documentos', $text_domain),
        'insert_into_item'   => esc_html__('Insertar en el Documento', $text_domain),
        'uploaded_to_this_item' => esc_html__('Subido a este Documento', $text_domain),
        'filter_items_list'  => esc_html__('Filtrar lista de documentos', $text_domain),
        'items_list_navigation' => esc_html__('Navegación de lista de documentos', $text_domain),
        'items_list'         => esc_html__('Lista de Documentos', $text_domain),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'documentos'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'         =>  DSLT_PLUGIN_URL . 'assets/img/icon.png',
        'supports'           => array('title', 'editor', 'thumbnail'),
        'taxonomies'         => array('categoria_documento', 'anio'), // Asociación con varias taxonomías
    );

    register_post_type('documento', $args);
}

add_action('init', 'registrar_dslt_documentos');
