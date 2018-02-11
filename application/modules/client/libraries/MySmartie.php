<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once( APPPATH.'/libraries/Smartie.php' );

class MySmartie extends Smartie {

    function __construct()
    {
        parent::__construct();

        $this->template_dir = APPPATH . "modules/client/views/templates";
        $this->compile_dir = APPPATH . "modules/client/views/templates_c";
    }
}
// END My Smartie Class
