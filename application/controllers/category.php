<?php
class Category extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('CategoryModel');
    }

    public function index() {
        $this->load->view('template/template', ['content' => $this->load->view('category/category','', true) , 'script' => TRUE]);
    }

	public function getData() {
        $query = $this->CategoryModel->getData();
		echo json_encode($query);
    }
	public function create() {
		$data = array(
			'category' =>  $this->input->post('category'),
			'description' =>  $this->input->post('description')
			);
		$this->CategoryModel->create_data($data);
		redirect('category');
    }
	public function delete() {
		$id = $this->input->post('id');
		$this->CategoryModel->delete($id);
    }
	public function getDataId(){
		$data = $this->CategoryModel->getDataId($this->input->post('id'));
		echo json_encode($data);
	}
	public function update(){
		$data = array(
			'id' =>  $this->input->post('id'),
			'category' =>  $this->input->post('category'),
			'description' =>  $this->input->post('description')
			);
		$data = $this->CategoryModel->update($data);
		redirect('category');
	}
}
?>


