<?php
class Publisher extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('PublisherModel');
    }

    public function index() {
        $this->load->view('template/template', ['content' => $this->load->view('publisher/publisher','', true) , 'script' => TRUE]);
    }

	public function getData() {
        $query = $this->PublisherModel->getData();
		echo json_encode($query);
    }
	public function create() {
		$data = array(
			'name' =>  $this->input->post('name'),
			'address' =>  $this->input->post('address')
			);
		$this->PublisherModel->create_data($data);
		redirect('publisher');
    }
	public function delete() {
		$id = $this->input->post('id');
		$this->PublisherModel->delete($id);
    }
	public function getDataId(){
		$data = $this->PublisherModel->getDataId($this->input->post('id'));
		echo json_encode($data);
	}
	public function update(){
		$data = array(
			'id' =>  $this->input->post('id'),
			'name' =>  $this->input->post('name'),
			'address' =>  $this->input->post('address')
			);
		$data = $this->PublisherModel->update($data);
		redirect('publisher');
	}
}
?>


