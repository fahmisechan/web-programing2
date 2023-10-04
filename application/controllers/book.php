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
	public function create() {
		$data = array(
			'title' =>  $this->input->post('title'),
			'author' => $this->input->post('author'),
			'description' =>  $this->input->post('description')
			);
		$this->BookModel->create_data($data);
		redirect('book');
    }
	public function delete() {
		$id = $this->input->post('id');
		$this->BookModel->delete($id);
    }
	public function getDataId(){
		$data = $this->BookModel->getDataId($this->input->post('id'));
		echo json_encode($data);
	}
	public function update(){
		$data = array(
			'id' =>  $this->input->post('id'),
			'title' =>  $this->input->post('title'),
			'author' => $this->input->post('author'),
			'description' =>  $this->input->post('description')
			);
		$data = $this->BookModel->update($data);
		redirect('book');
	}
}
?>


