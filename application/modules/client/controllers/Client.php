<?php

class Client extends MY_Controller
{
    public function __construct()
    {
        if (!$this->session->has_userdata('user')) {
            redirect(base_url());
        }

        $this->load->library(['form_validation', 'mysmartie' => 'smarty']);
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
    }

    public function index()
    {
        $this->smarty->view('home.tpl', ['title' => 'Client Portal']);
    }
}