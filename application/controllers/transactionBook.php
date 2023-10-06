<?php
class TransactionBook extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('BookModel');
		$this->load->library('cart');
		if($this->session->userdata('role') != 'admin')
      	show_404();
    }

    public function index() {
		$book = $this->BookModel->getData();
        $this->load->view('template/template', ['content' => $this->load->view('transaction/transaction-book',['book' => $book ], true) , 'script' => TRUE]);
    }

	public function addToCart() {
		$data = $this->BookModel->getDataId($this->input->post('book_id'));
		try{
			if($data->stock < $this->input->post('amount')){
				$this->session->set_flashdata('message', 'Stock kurang');
				redirect('transactionBook');
			}
			$data = array(
				'id'      => 'B'.date("his"),
				'qty'     => $this->input->post('amount'),
				'price'   => $data->price,
				'name'    => $data->title,
				'book_id' => $data->id,
			);
			$this->cart->insert($data);
			redirect('transactionBook');
		}catch(Exception $e){
			echo $e;
		}
    }
	public function remove($id) {
		try{
			$this->cart->remove($id);
			redirect('transactionBook');
		}catch(Exception $e){
			echo $e;
		}
    }
}
?>


