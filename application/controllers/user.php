<?php
class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
		if($this->session->userdata('role') != 'admin')
      	show_404();
    }

    public function index() {
        $this->load->view('template/template', ['content' => $this->load->view('user/user','', true) , 'script' => TRUE]);
    }

	public function getData() {
        $query = $this->UserModel->getData();
		echo json_encode($query);
    }
	public function create() {
		$data = array(
			'username' =>  $this->input->post('username'),
			'password' => $this->input->post('password'),
			'role' => $this->input->post('role'),
			'email' => $this->input->post('email'),
			'description' =>  $this->input->post('description')
			);
		$this->UserModel->create_data($data);
		redirect('user');
    }
	public function delete() {
		$id = $this->input->post('id');
		$this->UserModel->delete($id);
    }
	public function getDataId(){
		$data = $this->UserModel->getDataId($this->input->post('id'));
		echo json_encode($data);
	}
	public function update(){
		$data = array(
			'id' =>  $this->input->post('id'),
			'username' =>  $this->input->post('username'),
			'password' => $this->input->post('password'),
			'role' => $this->input->post('role'),
			'email' => $this->input->post('email'),
			'description' =>  $this->input->post('description')
			);
		$data = $this->UserModel->update($data);
		redirect('user');
	}
}
?>


