<?php
class BarangModel extends CI_Model {
	public function __construct() {
        parent::__construct();
        $this->load->database();
    }
	
    public function getData() {
		$query = $this->db->get('barang');
        return $query->result();
    }
	public function create_data($data){
		$this->db->insert('barang',$data);
	}
	public function delete($id){
		$this->db->where('id',$id);
		return $this->db->delete('barang');
	}
	public function getDataId($id){
		$this->db->where('id', $id);
		$query = $this->db->get('barang');
		if ($query->num_rows() > 0) {
			return $query->row(); // For a single row as an object
		} else {
			return null;
		}
	}
	public function update($data){
		$this->db->where('id', $data['id']);
		return $this->db->update('barang', $data);
	}
}
