<?php

class Client extends MY_Controller
{
    public function __construct()
    {
        if (!$this->session->has_userdata('user')) {
            redirect(base_url());
        }

        $this->load->library(['form_validation', 'mysmartie' => 'smarty']);
    }

    public function index()
    {
        echo "I m Client!!!";
    }

    public function listRacks()
    {
        //$this->load->model('Racks');
        //dd(Racks::all());
        $this->smarty->view( 'racks/list.tpl', ['title' => 'list racks'] );
    }
}