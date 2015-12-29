<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ajax_return extends CI_Controller {
	public function index() {
		$this->load->model('m_user');
		$id = $this->input->post('key');
   	$result = $this->m_user->get_data_sub_instansi($id);
   	foreach ($result as $item) {
	   	echo '<option value="'. $item["id"] .'">' . $item["nama_sub_instansi"] . "</option>";
	  }
	  echo '<option value="lainnya">Lain-lain</option>';
	}
}