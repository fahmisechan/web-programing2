<?php
class Profile extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('UserModel');
		if($this->session->userdata('role') != 'admin')
      		redirect('auth');
	  }
	public function index(){
		$this->load->view('template/template', ['content' => $this->load->view('profile/profile','', true) , 'script' => TRUE]);
	}
}
