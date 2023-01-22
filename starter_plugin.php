<?php
/*
Plugin Name: Cnc Design Servizi
Plugin URI:  https://name_plugin_site
Description: Plugin per la gestione dei servizi di cnc design
Version:     1.0
Author:      Maurizio Strazzullo
Author URI:  https://www.stramadesign.it
Text Domain: cnc_design_servizi
Domain Path: /languages
License:     GPL2
*/
namespace cnc_design_servizi;

if (!defined('WPINC')) {
  die;
}

define( 'MY_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'MY_PLUGIN_URL', plugin_dir_url( __FILE__ ) );



register_activation_hook( __FILE__, __NAMESPACE__ . '\\activation' );
  function activation(){
    require_once MY_PLUGIN_PATH . '/includes/class-activator.php';
    Activator::attivazione();
  }


register_deactivation_hook( __FILE__,  __NAMESPACE__ .'\\deactivation' );
function deactivation(){
  require_once MY_PLUGIN_PATH. 'includes/class-deactivator.php';
  Deactivator::disattivazione();
}

require_once MY_PLUGIN_PATH . '/includes/class-plugin.php';
$starter = new CncDesignServizi();

?>
