<?php
class TransactionBook extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('BookModel');
        $this->load->model('VoucherModel');
        $this->load->model('TransactionBookModel');
		$this->load->library('cart');
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
	public function checkVoucher() {
		try{
			$query = $this->VoucherModel->getVoucher($this->input->post('voucher'));
			if($query == 'berhasil'){
				http_response_code(200); 
				echo json_encode(['response' => 'Selamat Anda mendapatkan diskon.']);
			}else{
				http_response_code(400); 
				echo json_encode(['response' => 'Diskon tidak ada']);
			}
		}catch(Exception $e){
			echo $e;
		}
    }
	public function create(){
		$code = 'B'.date("his");
		$voucher = $this->VoucherModel->getDataName($this->input->post('voucher'));
		foreach ($this->cart->contents() as $item){
			$data = [
				'code'    => $code,
				'book_id' => $item['book_id'],
				'name'    => $item['name'],
				'quantity'=> $item['qty'],
				'price'   => $item['price'],
				'sub_total'   => $item['price'] * $item['qty'],
			];
			$this->TransactionBookModel->createTransactionBook($data);
		}

		$discount = ($voucher->discount / 100) * $this->cart->total();
		$trx = [
			'user_id'    => $this->session->userdata('id'),
			'code'       =>   $code,
			'total'      => $this->cart->total() - $discount ?? 0,
			'payment'    => $this->input->post('payment'),
			'returned'   => $this->input->post('return'),
			'customer'   => $this->input->post('customer'),
			'voucher'    => $voucher->name ?? '',
		];
		$this->TransactionBookModel->createTransactions($trx);
		$this->cart->destroy();
		redirect('transactionBook');
	}
}
?>


