<?php
class Barang extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('BarangModel');
    }

    public function index() {
		$kd = 'B'.date("his");
        $this->load->view('template/template', ['content' => $this->load->view('barang/barang',['kd' => $kd], true) , 'script' => TRUE]);
    }

	public function getData() {
        $query = $this->BarangModel->getData();
		echo json_encode($query);
    }
	public function create() {
		$data = array(
			'kode_barang' =>  $this->input->post('kode_barang'),
			'nama_barang' =>  $this->input->post('nama_barang'),
			'harga_barang' =>  $this->input->post('harga_barang'),
			'stok' =>  $this->input->post('stok')
			);
		$this->BarangModel->create_data($data);
		redirect('barang');
    }
	public function delete() {
		$id = $this->input->post('id');
		$this->BarangModel->delete($id);
    }
	public function getDataId(){
		$data = $this->BarangModel->getDataId($this->input->post('id'));
		echo json_encode($data);
	}
	public function update(){
		$data = array(
			'id' =>  $this->input->post('id'),
			'nama_barang' =>  $this->input->post('nama_barang'),
			'harga_barang' =>  $this->input->post('harga_barang'),
			'stok' =>  $this->input->post('stok')
			);
		$data = $this->BarangModel->update($data);
		redirect('barang');
	}
}
?>


