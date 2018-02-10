<?php

class Admin extends MY_Controller
{
    public function __construct()
    {
        if ($this->session->has_userdata('user')) {
            if ($this->session->userdata['user']['role'] !== 1 ) {
                redirect(base_url());
            }
        } else {
            redirect(base_url());
        }


    }

    public function index()
    {
        echo"I m Admin!!!";
    }

    public function listRacks()
    {
        $this->load->model('Racks'); 
        dd(Racks::all());
        $this->smarty->view( 'racks/list.tpl', ['title' => 'list racks'] );
    }

    public function migrations()
    {
            $this->load->library('migration');

            if ($this->migration->current() === FALSE)
            {
                show_error($this->migration->error_string());
            } else 
            {
                echo"Migration run successfully!!!";
            }
    }
}