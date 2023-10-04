<?php
class Dashboard extends CI_Controller{
	public function index(){
		$this->load->view('template/template', ['content' => $this->load->view('dashboard/dashboard', '', true)]);
	}
}
