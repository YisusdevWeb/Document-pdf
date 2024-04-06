<?php


/*----------- Años -----------*/
function custom_filter_by_anio()
{
    

    global $typenow;
    if ($typenow == 'documento') {
        $taxonomy = 'anio';
        $selected = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
       
        // Obtiene los términos de la taxonomía
        $terms = get_terms([
            'taxonomy' => $taxonomy,
            'hide_empty' => true, // Esta opción excluye los términos que no tienen entradas asociadas
        ]);

       
       
        if (!empty($terms)) {
        $args = array(
            'show_option_all' => __("Mostrar todos los años", DSLT_NS),
            'taxonomy' => $taxonomy,
            'name' => $taxonomy,
            'orderby' => 'name',
            'selected' => $selected,
            'show_count' => true,
            'hide_empty' => true,
            'value_field' => 'slug',
        );
        wp_dropdown_categories($args);
    }
    };
}
add_action('restrict_manage_posts', 'custom_filter_by_anio');

/*----------- categoria_documento -----------*/
function custom_filter_by_categoria_documento() {

    global $typenow;
    if ($typenow == 'documento') {
        $taxonomy = 'categoria_documento';
        $selected = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
        
        // Obtiene los términos de la taxonomía
        $terms = get_terms([
            'taxonomy' => $taxonomy,
            'hide_empty' => true, // Esta opción excluye los términos que no tienen entradas asociadas
        ]);

        // Verifica si hay términos en la taxonomía
        if (!empty($terms)) {
            $args = array(
                'show_option_all' => __("Mostrar todas las categorías de documento", DSLT_NS),
                'taxonomy' => $taxonomy,
                'name' => $taxonomy,
                'orderby' => 'name',
                'selected' => $selected,
                'show_count' => true,
                'hide_empty' => true,
                'value_field' => 'slug',
            );
            wp_dropdown_categories($args);
        }
    }
}