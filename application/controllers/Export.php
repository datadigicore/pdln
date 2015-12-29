<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class export extends CI_Controller {
	public function index() {
		$this->load->model('m_user');
		$result = $this->m_user->select_data_pdln();
		$this->load->view('user/export_excel');
	}
	public function process(){
		$this->load->library('l_toexcel');
		$this->load->model('m_user');
		$result['query'] = $this->m_user->select_data_pdln();
		// print('<pre>');
		// print_r($result);
		$html = $this->load->view('user/table_excel', $result);
		$nama = "File_output";
		$this->l_toexcel->excel_export($nama);
	}
}