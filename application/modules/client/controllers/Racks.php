<?php

require_once( dirname(__FILE__).'/Client.php' );

class Racks extends Client
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('RacksModel');
    }

    public function index()
    {
        $data = RacksModel::leftJoin('books', 'books.rack_id', '=', 'racks.id', 'left outer')
                            ->selectRaw('racks.*, count(books.rack_id) as books_count')
                            ->groupBy('racks.id')
                            ->orderBy('racks.id', 'desc')
                            ->paginate(8, ['*'], 'page', $this->input->get('page'));        
        
        $this->smarty->view( 'racks/list.tpl', [ 'title' => 'Racks', 'data' => count($data) ? $data->toArray():[] ] );
    }

    public function books($rackId)
    {
        $data = BooksModel::where('rack_id', $rackId)
                            ->orderBy('book.id', 'desc')
                            ->paginate(5, ['*'], 'page', $this->input->get('page'));        
        
        $this->smarty->view( 'book/list.tpl', [ 'title' => 'Racks', 'data' => count($data) ? $data->toArray():[] ] );
    }
}