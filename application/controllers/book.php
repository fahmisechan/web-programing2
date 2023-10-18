<?php
class Book extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('BookModel');
        $this->load->model('CategoryModel');
        $this->load->model('PublisherModel');
		if($this->session->userdata('role') != 'admin')
      		redirect('auth');
    }

    public function index() {
		$category = $this->CategoryModel->getData();
		$publisher = $this->PublisherModel->getData();
        $this->load->view('template/template', ['content' => $this->load->view('book/book',['category' => $category , 'publisher' => $publisher], true) , 'script' => TRUE]);
    }

	public function getData() {
        $query = $this->BookModel->getData();
		echo json_encode($query);
    }
	public function create() {
		$data = [
			'title' =>  $this->input->post('title'),
			'author' => $this->input->post('author'),
			'category_id' => $this->input->post('category_id'),
			'publisher_id' => $this->input->post('publisher_id'),
			'stock' => $this->input->post('stock'),
			'price' => $this->input->post('price'),
			'description' =>  $this->input->post('description')
		];

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
		try{
			$data = [
				'id' =>  $this->input->post('id'),
				'title' =>  $this->input->post('title'),
				'author' => $this->input->post('author'),
				'category_id' => $this->input->post('category_id'),
				'publisher_id' => $this->input->post('publisher_id'),
				'stock' => $this->input->post('stock'),
				'price' => $this->input->post('price'),
				'description' =>  $this->input->post('description')
			];
			
			$data = $this->BookModel->update($data);
			redirect('book');
		}catch(Exception $e){
			echo $e;
		}
	}
}
?>


