<?php
/*
 * Plugin Name: Documentos Loterias 
 * Description: Añade shortcode para mostrar pdf´s  Documentos 
 * Version: 1.0.0
 * Author: kncepto.com
 * Author URI: https://kncepto.com/
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: Document add shorcode Loteria Medellin
*/


if (!defined('ABSPATH')) {
  exit;
}

if (!defined('DSLT_PLUGIN_URL')) {
  define('DSLT_PLUGIN_URL', plugin_dir_url(__FILE__));
}

if (!defined('DSLT_NS')) {
  define('DSLT_NS', 'Document_shorcode_loteria');
}

// Include settings 
include 'includes/wp_settings_page.php';

// Include taxonomy
include 'includes/taxonomies/wp_ano_taxonomy.php';
include 'includes/taxonomies/wp_categorydoc_taxonomy.php';
include 'includes/taxonomies/settings/wp_admin_filter.php';

// Include enqueue scripts functions
include 'includes/wp_enqueue_scripts.php';

// Include shortcode functions
include 'includes/wp_shortcode.php';
include  'includes/settings/wp_settings_shorcode.php';
