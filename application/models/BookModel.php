<?php
class BookModel extends CI_Model {
	public function __construct() {
        parent::__construct();
        $this->load->database();
    }
	
    public function getData() {
		$query = $this->db->get('books');
        return $query->result();
    }
}
