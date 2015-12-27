<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class m_admin extends CI_Model {
	function __construct() {
        parent::__construct();
	}
	function add_user($data) {
		$query = $this->db->insert('pengguna', $data);
		return $query;
	}
	function del_user($id) {
		$query = $this->db->delete('pengguna', array('id'=>$id));
		return $query;
	}
	function upd_user($id, $data) {
		print_r($data);
		$this->db->where('id', $id);
		$query = $this->db->update('pengguna', $data);
		return $query;
	}
} 
