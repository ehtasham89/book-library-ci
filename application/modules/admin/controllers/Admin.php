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

        $this->load->library(['form_validation', 'mysmartie' => 'smarty']);
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
    }

    public function index()
    {
        $this->smarty->view('home.tpl', ['title' => 'Dashboard']);
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