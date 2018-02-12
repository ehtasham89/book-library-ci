<?php

require_once( dirname(__FILE__).'/Client.php' );

class Books extends Client
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('BooksModel');
    }

    public function index()
    {
        $q = $this->input->get('q');
        if (!empty($q)) {
            $data = BooksModel::select('books.*', 'racks.name as rack_name')
                            ->join('racks', 'racks.id', '=', 'books.rack_id')
                            ->orderBy('books.id', 'desc')
                            ->where('title','like',"%$q%")
                            ->orWhere('author','like',"%$q%")
                            ->orWhere('published_year','like',"%$q%")
                            ->paginate(5, ['*'], 'page', $this->input->get('page'));  
        } else {
            $data = BooksModel::select('books.*', 'racks.name as rack_name')
                            ->join('racks', 'racks.id', '=', 'books.rack_id')
                            ->orderBy('books.id', 'desc')
                            ->paginate(5, ['*'], 'page', $this->input->get('page'));
        }      
        
        $this->smarty->view( 'books/list.tpl', [ 'title' => 'Books', 'data' => count($data) ? $data->toArray():[] ] );
    }

    public function rack($rackId)
    {
        $data = BooksModel::select('books.*', 'racks.name as rack_name')
                            ->join('racks', 'racks.id', '=', 'books.rack_id')
                            ->where('rack_id', $rackId)
                            ->orderBy('books.id', 'desc')
                            ->paginate(5, ['*'], 'page', $this->input->get('page'));        
        
        $this->smarty->view( 'books/list.tpl', [ 'title' => 'Books', 'data' => count($data) ? $data->toArray():[] ] );
    }
}