<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class m_mpdf extends CI_Model {
	function __construct() {
        parent::__construct();
	}
	function get_pdln() {
		$query = $this->db->get('data_pdln');
		return $query->row_array();
	}
} 
