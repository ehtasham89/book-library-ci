<?php

class Admin extends MY_Controller
{
    public function index()
    {
        echo"I m Admin!!!";
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