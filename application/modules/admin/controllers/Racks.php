<?php

require_once( dirname(__FILE__).'/Admin.php' );

class Racks extends Admin
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('RacksModel');
    }

    public function index()
    {
        $data = RacksModel::orderBy('id', 'desc')->paginate(10, ['*'], 'page', $this->input->get('page'));

        $this->smarty->view( 'racks/list.tpl', [ 'title' => 'Racks', 'data' => count($data) ? $data->toArray():[] ] );
    }

    public function add()
    {
        $data['title'] = 'Add New Racks';

        $inputs = $this->input->post();
        
        if (count($inputs)) {
            $rules = [
                [
                    'field' => 'name',
                    'label' => 'Name',
                    'rules' => 'trim|required',
                ]
            ];

            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() == false) {
                $data['errors'] = validation_errors();
            } else {
                RacksModel::insert(['name' => $inputs['name']]);

                redirect(base_url()."admin/racks");
            }
        }

        $this->smarty->view( 'racks/add.tpl', $data );
    }

    public function edit($id)
    {
        $data['title'] = 'Update Rack';

        $inputs = $this->input->post();

        $getRack = RacksModel::where('id', $id)->first();
        $data['rack'] = $getRack;

        if (count($inputs)) {
            $rules = [
                [
                    'field' => 'name',
                    'label' => 'Name',
                    'rules' => 'trim|required',
                ]
            ];

            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() == false) {
                $data['errors'] = validation_errors();
            } else {
                $getRack->name = $inputs['name'];
                $getRack->update();

                redirect(base_url()."admin/racks");
            }
        }

        $this->smarty->view( 'racks/edit.tpl', $data );
    }

    public function delete($id)
    {
        RacksModel::where('id', $id)->delete();

        redirect(base_url()."admin/racks");
    }
}