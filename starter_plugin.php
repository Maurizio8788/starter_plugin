<?php
/*
Plugin Name: starter Plugin
Plugin URI:  https://name_plugin_site
Description: Codice base per progettazione plugin
Version:     1.0
Author:      Maurizio Strazzullo
Author URI:  https://www.stramadesign.it
Text Domain: starter_plugin
Domain Path: /languages
License:     GPL2
*/
namespace starter_plugin;

if (!defined('WPINC')) {
  die;
}

Define(PLUGIN_DIR , dirname(__FILE__));






register_activation_hook( __FILE__, __NAMESPACE__ . '\\activation' );
  function activation(){
    require_once PLUGIN_DIR. '/includes/class-activator.php';
    Activator::attivazione();

  }


register_deactivation_hook( __FILE__,  __NAMESPACE__ .'\\deactivation' );
function deactivation(){
  require_once PLUGIN_DIR. 'includes/class-deactivator.php';
  Deactivator::disattivazione();
}

require_once PLUGIN_DIR. '/includes/class-plugin.php';
$starter = new starter_plugin();

?>
