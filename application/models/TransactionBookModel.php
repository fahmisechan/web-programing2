<?php
class TransactionBookModel extends CI_Model {
	public function __construct() {
        parent::__construct();
        $this->load->database();
    }
	
    public function getData() {
		$query = $this->db->get('transactions');
        return $query->result();
    }
	public function createTransactionBook($data){
		$this->db->insert('transaction_book',$data);
	}
	public function createTransactions($data){
		$query = $this->db->insert('transactions',$data);
		return $query;

	}
	public function delete($id){
		$this->db->where('id',$id);
		return $this->db->delete('publisher');
	}
	public function getDataId($id){
		$this->db->where('id', $id);
		$query = $this->db->get('transactions');
		if ($query->num_rows() > 0) {
			return $query->row(); // For a single row as an object
		} else {
			return null;
		}
	}
	public function getDataCode($code){
		$this->db->where('code', $code);
		$query = $this->db->get('transactions');
		return $query->row(); // For a single row as an object
	}
	public function getDataCodeBook($code){
		$this->db->where('code', $code);
		$query = $this->db->get('transaction_book');
		return $query->result_array(); // For a single row as an object
	}
	public function update($data){
		$this->db->where('id', $data['id']);
		return $this->db->update('publisher', $data);
	}
}
