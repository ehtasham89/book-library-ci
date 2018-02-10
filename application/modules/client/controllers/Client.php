<?php

class Client extends MY_Controller
{
    public function __construct()
    {
        if (!$this->session->has_userdata('user')) {
            redirect(base_url());
        }
    }

    public function index()
    {
        echo "I m Client!!!";
    }
}