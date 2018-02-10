<?php

class Login extends MY_Controller 
{
    private $users;

    public function __construct()
    {
        parent::__construct();
        
        $this->users = new Users();
        $this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
    }

    public function index()
    {
        if (!$this->session->has_userdata('user')) {
            $data['title'] = 'Login::Library System';
            $inputs = $_POST;

            if (count($inputs)) {
                $rules = [
                    [
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'trim|required|valid_email',
                    ],
                    [
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'trim|required',
                    ],
                ];

                $this->form_validation->set_rules($rules);

                if ($this->form_validation->run()==false) {
                    $data['errors'] = validation_errors();
                    $this->smarty->view( 'login.tpl', $data );
                } else {
                    $options = [
                        'email' => $inputs['email'],
                        'password' => md5($inputs['password'])
                    ];

                    $user = $this->users->getUser($options);
                    
                    if (count($user)) {
                        $user = $user->toArray();
                        
                        $user['type'] = $user['role'] == 1 ? 'admin':'client';
                        
                        $this->session->set_userdata(['user' => $user]);

                        redirect(base_url().$user['type']);
                    } else {
                        $data['error'] = 'Email or password is not correct!';
                        $this->smarty->view( 'login.tpl', $data );
                    }
                }
            } else {
                $this->smarty->view( 'login.tpl', $data );
            }
        } else {
            redirect(base_url().$this->session->userdata['user']['type']);
        }
    }
}