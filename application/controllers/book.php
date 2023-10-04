<?php
class Book extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('BookModel');
    }

    public function index() {
        $this->load->view('template/template', ['content' => $this->load->view('book/book','', true) , 'script' => TRUE]);
    }

	public function getData() {
        $query = $this->BookModel->getData();
		echo json_encode($query);
    }
}
?>


