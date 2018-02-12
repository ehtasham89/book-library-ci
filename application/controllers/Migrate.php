<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends MY_Controller {

	public function index()
    {
        $this->load->library('migration');

        if ($this->migration->current() === FALSE)
        {
            show_error($this->migration->error_string());
        } else 
        {
            echo"Migration run successfully!!!";

            $users = new Users();

            $users->createUsers();
        }
    }
}
