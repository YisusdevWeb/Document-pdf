<?php

function registrar_taxonomia_documento_categoria()
{
/**	 * Taxonomy: Categorías de Documento.	 */

	$labels = [
		"name" => esc_html__("Categorías de Documento", DSLT_NS),
		"singular_name" => esc_html__("Categoría de Documento", DSLT_NS),
		"menu_name" => esc_html__("Categorías de Documento", DSLT_NS),
		"all_items" => esc_html__("Todas las Categorías de Documento", DSLT_NS),
		"edit_item" => esc_html__("Editar Categoría de Documento", DSLT_NS),
		"view_item" => esc_html__("Ver Categoría de Documento", DSLT_NS),
		"update_item" => esc_html__("Actualizar", DSLT_NS),
		"add_new_item" => esc_html__("Agregar nueva categoría ", DSLT_NS),
		"new_item_name" => esc_html__("Nombre de la nueva Categoría de Documento", DSLT_NS),
		"parent_item" => esc_html__("Categoría de Documento padre", DSLT_NS),
		"parent_item_colon" => esc_html__("Categoría de Documento padre:", DSLT_NS),
		"search_items" => esc_html__("Buscar Categorías de Documento", DSLT_NS),
		"popular_items" => esc_html__("Categorías de Documento populares", DSLT_NS),
		"separate_items_with_commas" => esc_html__("Separar Categorías de Documento con comas", DSLT_NS),
		"add_or_remove_items" => esc_html__("Agregar o quitar Categorías ", DSLT_NS),
		"choose_from_most_used" => esc_html__("Elegir de las Categorías de Documento más usadas", DSLT_NS),
		"not_found" => esc_html__("No se encontraron Categorías de Documento", DSLT_NS),
		"no_terms" => esc_html__("No hay Categorías de Documento", DSLT_NS),
		"items_list_navigation" => esc_html__("Navegación de lista de Categorías de Documento", DSLT_NS),
		"items_list" => esc_html__("Lista de Categorías de Documento", DSLT_NS),
		"back_to_items" => esc_html__("Volver a las Categorías de Documento", DSLT_NS),
		"name_field_description" => esc_html__("El nombre es cómo aparece en tu sitio.", DSLT_NS),
		"parent_field_description" => esc_html__("Asigna un término padre para crear una jerarquía. Por ejemplo, el término Jazz sería el padre de Bebop y Big Band.", DSLT_NS),
		"slug_field_description" => esc_html__("El slug es la versión del nombre que es amigable para URL. Normalmente está todo en minúsculas y solo contiene letras, números y guiones.", DSLT_NS),
		"desc_field_description" => esc_html__("La descripción no es prominente por defecto; sin embargo, algunos temas pueden mostrarla.", DSLT_NS),
	];

	$args = [
		"label" => esc_html__("Categorías de Documento", DSLT_NS),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => ['slug' => 'categoria-documento', 'with_front' => true,  'hierarchical' => true,],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => true,
		"rest_base" => "categoria-documento",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy("categoria_documento", ["documento"], $args);

	// Agrega el filtro de categoría de documento solo si la taxonomía existe
	if (taxonomy_exists('categoria_documento')) {
		add_action('restrict_manage_posts', 'custom_filter_by_categoria_documento');
	}
}
add_action('init', 'registrar_taxonomia_documento_categoria');