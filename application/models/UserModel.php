<?php
class UserModel extends CI_Model {
	public function __construct() {
        parent::__construct();
        $this->load->database();
    }

	public function get($username){
        $this->db->where('username', $username);
        $result = $this->db->get('users')->row();
        return $result;
    }
	
    public function getData() {
		$query = $this->db->get('users');
        return $query->result();
    }
	public function create_data($data){
		$this->db->insert('users',$data);
	}
	public function delete($id){
		$this->db->where('id',$id);
		return $this->db->delete('users');
	}
	public function getDataId($id){
		$this->db->where('id', $id);
		$query = $this->db->get('users');
		if ($query->num_rows() > 0) {
			return $query->row(); // For a single row as an object
		} else {
			return null;
		}
	}
	public function update($data){
		$this->db->where('id', $data['id']);
		return $this->db->update('users', $data);
	}
}
