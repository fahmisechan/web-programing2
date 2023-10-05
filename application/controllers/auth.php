<?php
class Auth extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('UserModel');
	  }

	public function index(){
	if($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
		redirect('dashboard'); // Redirect ke page home

	$this->load->view('auth/login'); 
	}

	public function postLogin(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$user = $this->UserModel->get($username);
		if(empty($user)){
		  $this->session->set_flashdata('message', 'Username tidak ditemukan');
		  redirect('auth'); 
		}else{
		  if($password == $user->password){
			$session = array(
			  'authenticated'=>true,
			  'username'=>$user->username, 
			  'role'=>$user->role
			);
			$this->session->set_userdata($session);
			redirect('dashboard');
		  }else{
			$this->session->set_flashdata('message', 'Password salah');
			redirect('auth');
		  }
		}
	  }

	public function logout(){
		$this->session->sess_destroy();
		redirect('auth');
	}
	public function register(){
		$this->load->view('auth/register');
	}
}
