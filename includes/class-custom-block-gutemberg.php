<?php

namespace cnc_design_servizi;

if (!defined('WPINC')) {
    die;
  }

class CustomBlockGutemberg
{

    public function __construct() {
        add_action("acf/init", array($this, "acf_init_block_types"));
    }

    public function acf_init_block_types() {
        if( function_exists("register_block_type") ) {
            register_block_type( MY_PLUGIN_PATH  . "/template-parts/blocks/servicesLoop/blocks.json" );
        }
      
        if( function_exists("acf_register_block_type") ) {
            acf_register_block_type( array(
                "name" => "servicesLoop",
                "title" => "Loop dei servizi",
                "description" => "Loop per la visualizzazione delle card dei servizi",
                "render_template" => MY_PLUGIN_PATH . "/template-parts/blocks/servicesLoop/servicesLoop.php",
                "category" => "theme",
                "icon"=> "html",
                "keywords" => array("cpt", "servizi", "loop"),
            ));
        }
      }
    
}
