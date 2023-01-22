<?php

/**
* classe principale starter plugin
**/
namespace starter_plugin;
require_once PLUGIN_DIR. '/includes/class-info.php';

class Starter_plugin{

  private $versione;


      function __construct(){
        $this->versione = Info::VERSIONE;
        //inserire gli hooks che preferisci

      }

}
