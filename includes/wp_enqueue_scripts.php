<?php
//Global  Variables
$js_data_passed = array('ajax_url' => admin_url('admin-ajax.php'));

// Incluir scripts y estilos del frontend
add_action('wp_enqueue_scripts', 'dslt_enequeue_scripts_and_styles', 100);
function dslt_enequeue_scripts_and_styles()
{
  global $js_data_passed;
  //wp_enqueue_script( 'dslt-frontend', DSLT_PLUGIN_URL . '/assets/js/script.js', array('jquery'), '1.0.0', true );
  // wp_localize_script( 'dslt-frontend', 'dslt', $js_data_passed);
  wp_enqueue_style('dslt-frontend-style', DSLT_PLUGIN_URL . '/assets/css/style.css', array(), '1.0.2');
}

// Incluir scripts y estilos del administrador

add_action('admin_enqueue_scripts', 'dslt_enqueue_admin_scripts_and_styles');
function dslt_enqueue_admin_scripts_and_styles()
{
  global $js_data_passed;
  wp_enqueue_script('dslt-settings', DSLT_PLUGIN_URL . '/assets/js/script.js', array('jquery'), '1.0.2', true);
  wp_localize_script('dslt-settings', 'dslt', $js_data_passed);
}
