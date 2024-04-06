<?php

function registrar_taxonomia_anio()
{
/**	 * Taxonomy: Años.	 */

	$labels = [
		"name" => esc_html__("Años", DSLT_NS),
		"singular_name" => esc_html__("Año", DSLT_NS),
		"menu_name" => esc_html__("Años", DSLT_NS),
		"all_items" => esc_html__("Todos los Años", DSLT_NS),
		"edit_item" => esc_html__("Editar Año", DSLT_NS),
		"view_item" => esc_html__("Ver Año", DSLT_NS),
		"update_item" => esc_html__("Actualizar nombre del Año", DSLT_NS),
		"add_new_item" => esc_html__("Agregar nuevo Año", DSLT_NS),
		"new_item_name" => esc_html__("Nombre del nuevo Año", DSLT_NS),
		"parent_item" => esc_html__("Año padre", DSLT_NS),
		"parent_item_colon" => esc_html__("Año padre:", DSLT_NS),
		"search_items" => esc_html__("Buscar Años", DSLT_NS),
		"popular_items" => esc_html__("Años populares", DSLT_NS),
		"separate_items_with_commas" => esc_html__("Separar Años con comas", DSLT_NS),
		"add_or_remove_items" => esc_html__("Agregar o quitar Años", DSLT_NS),
		"choose_from_most_used" => esc_html__("Elegir de los Años más usados", DSLT_NS),
		"not_found" => esc_html__("No se encontraron Años", DSLT_NS),
		"no_terms" => esc_html__("No hay Años", DSLT_NS),
		"items_list_navigation" => esc_html__("Navegación de lista de Años", DSLT_NS),
		"items_list" => esc_html__("Lista de Años", DSLT_NS),
		"back_to_items" => esc_html__("Volver a Años", DSLT_NS),
		"name_field_description" => esc_html__("El nombre es cómo aparece en tu sitio.", DSLT_NS),
		"parent_field_description" => esc_html__("Asigna un término padre para crear una jerarquía. El término Jazz, por ejemplo, sería el padre de Bebop y Big Band.", DSLT_NS),
		"slug_field_description" => esc_html__("El slug es la versión del nombre que es amigable para URL. Normalmente está todo en minúsculas y solo contiene letras, números y guiones.", DSLT_NS),
		"desc_field_description" => esc_html__("La descripción no es prominente por defecto; sin embargo, algunos temas pueden mostrarla.", DSLT_NS),

	];


	$args = [
		"label" => esc_html__("Años", DSLT_NS),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => ['slug' => 'anio', 'with_front' => true,  'hierarchical' => true,],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => true,
		"rest_base" => "anio",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy("anio", ["documento"], $args);

	if (taxonomy_exists('anio')) {
		add_action('restrict_manage_posts', 'custom_filter_by_anio');
	}
}
add_action('init', 'registrar_taxonomia_anio');
