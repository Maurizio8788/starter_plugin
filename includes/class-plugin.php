<?php


/**
 * classe principale starter plugin
 **/
namespace cnc_design_servizi;
require_once MY_PLUGIN_PATH . '/includes/class-custom-post-type';
require_once MY_PLUGIN_PATH . '/includes/class-custom-block-gutemberg.php';

if (!defined('WPINC')) {
  die;
}

class CncDesignServizi{

      function __construct(){
        //verifico che acf sia installato
        if( class_exists('acf') ) { 
          $this->LoadDipendenze();
        } else {
          add_action( 'admin_notices', array( $this,'acf_pro_warning' ) );
        }
      }

      public function LoadDipendenze()
      {
          $cptServizi = new CncDesignCPT();
          $blockACF = new CustomBlockGutemberg();
      }

      function acf_pro_warning() {
        echo '<div class="notice notice-warning">';
        echo '<p>Il plugin ACF Pro non è attivo. Per utilizzare questa funzionalità, ti preghiamo di installare e attivare il plugin ACF Pro.</p>';
        echo '</div>';
      }

}
