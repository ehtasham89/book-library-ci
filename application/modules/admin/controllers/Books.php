<?php

require_once( dirname(__FILE__).'/Admin.php' );

class Books extends Admin
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('BooksModel');
        $this->load->model('RacksModel');
    }

    public function index()
    {
        $data = BooksModel::select('books.*', 'racks.name as rack_name')
                            ->join('racks', 'racks.id', '=', 'books.rack_id')
                            ->orderBy('books.id', 'desc')
                            ->paginate(5, ['*'], 'page', $this->input->get('page'));
        
        $this->smarty->view( 'books/list.tpl', [ 'title' => 'Books', 'data' => count($data) ? $data->toArray():[] ] );
    }

    public function add()
    {
        $data['title'] = 'Add New Book';

        $inputs = $this->input->post();
        $data['racks'] = RacksModel::all()->toArray();
        
        if (count($inputs)) {
            $rules = [
                [
                    'field' => 'title',
                    'label' => 'Title',
                    'rules' => 'trim|required',
                ],
                [
                    'field' => 'author',
                    'label' => 'Author',
                    'rules' => 'trim|required',
                ],
                [
                    'field' => 'published_year',
                    'label' => 'Published Year',
                    'rules' => 'trim|required',
                ],
                [
                    'field' => 'rack_id',
                    'label' => 'Rack',
                    'rules' => 'trim|required',
                ]
            ];

            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() == false) {
                $data['errors'] = validation_errors();
            } else {
                $booksForRackId = BooksModel::where('rack_id', $inputs['rack_id'])->count();
                
                if ($booksForRackId < 2) {  
                    BooksModel::insert([
                        'title' => $inputs['title'],
                        'author' => $inputs['author'],
                        'published_year' => $inputs['published_year'],
                        'rack_id' => $inputs['rack_id']
                    ]);

                    redirect(base_url()."admin/books");
                } else {
                    $data['error'] = "Rack is full, You can only add 10 books in this rack, Select another rack.";
                }
            }
        }

        $this->smarty->view( 'books/add.tpl', $data );
    }

    public function edit($id)
    {
        $data['title'] = 'Update Book';

        $inputs = $this->input->post();
        $data['racks'] = RacksModel::all()->toArray();
        $data['book'] = BooksModel::where('id', $id)->first();
        
        if (count($inputs)) {
            $rules = [
                [
                    'field' => 'title',
                    'label' => 'Title',
                    'rules' => 'trim|required',
                ],
                [
                    'field' => 'author',
                    'label' => 'Author',
                    'rules' => 'trim|required',
                ],
                [
                    'field' => 'published_year',
                    'label' => 'Published Year',
                    'rules' => 'trim|required',
                ],
                [
                    'field' => 'rack_id',
                    'label' => 'Rack',
                    'rules' => 'trim|required',
                ]
            ];

            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() == false) {
                $data['errors'] = validation_errors();
            } else {
                BooksModel::where('id', $id)->update([
                    'title' => $inputs['title'],
                    'author' => $inputs['author'],
                    'published_year' => $inputs['published_year'],
                    'rack_id' => $inputs['rack_id']
                ]);

                redirect(base_url()."admin/books");
            }
        }

        $this->smarty->view( 'books/edit.tpl', $data );
    }

    public function delete($id)
    {
        BooksModel::where('id', $id)->delete();

        redirect(base_url()."admin/books");
    }
}