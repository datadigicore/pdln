<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class m_login extends CI_Model {
	function __construct() {
        parent::__construct();
	}
	function get_login($data) {
		$query = $this->db->get_where('user', $data);
		return $query->row();
	}
	function add_user($data) {
		$query = $this->db->insert('user', $data);
		return $query;
	}
} 
