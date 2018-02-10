<?php

class MY_Controller extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function logout()
    {
        $this->session->unset_userdata(['user']);

        redirect(base_url());
    }
}