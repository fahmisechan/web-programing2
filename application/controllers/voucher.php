<?php
class Voucher extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('VoucherModel');
		if($this->session->userdata('role') != 'admin')
      	show_404();
    }

    public function index() {
        $this->load->view('template/template', ['content' => $this->load->view('voucher/voucher','', true) , 'script' => TRUE]);
    }

	public function getData() {
        $query = $this->VoucherModel->getData();
		echo json_encode($query);
    }
	public function create() {
		$data = array(
			'name' =>  $this->input->post('name'),
			'start_date' =>  $this->input->post('start_date'),
			'end_date' =>  $this->input->post('end_date'),
			'amount' =>  $this->input->post('amount'),
			'discount' =>  $this->input->post('discount'),
			);
		$this->VoucherModel->create_data($data);
		redirect('voucher');
    }
	public function delete() {
		$id = $this->input->post('id');
		$this->VoucherModel->delete($id);
    }
	public function getDataId(){
		$data = $this->VoucherModel->getDataId($this->input->post('id'));
		echo json_encode($data);
	}
	public function update(){
		$data = array(
			'id' =>  $this->input->post('id'),
			'name' =>  $this->input->post('name'),
			'start_date' =>  $this->input->post('start_date'),
			'end_date' =>  $this->input->post('end_date'),
			'amount' =>  $this->input->post('amount'),
			'discount' =>  $this->input->post('discount'),
			);
		$data = $this->VoucherModel->update($data);
		redirect('voucher');
	}
}
?>


