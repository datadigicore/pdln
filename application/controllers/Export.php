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
		$data['negara'] = $this->input->post('negara');
		$data['sumber'] = $this->input->post('sumber');
		$data['nip'] = $this->input->post('nip');
		$data['waktu_awal'] = $this->input->post('waktu_awal');
		$data['waktu_akhir'] = $this->input->post('waktu_akhir');
		$data['pekerjaan'] = $this->input->post('pekerjaan');
		$data['kegiatan'] = $this->input->post('kegiatan');
		if (isset($data['negara'])) {
			$result['query'] = $this->m_user->select_export_negara($data['negara']);
		}
		elseif (isset($data['sumber'])) {
			$result['query'] = $this->m_user->select_export_sumber($data['sumber']);
		}
		elseif (isset($data['nip'])) {
			$result['query'] = $this->m_user->select_export_nip();
		}
		elseif (isset($data['waktu_awal']) && isset($data['waktu_akhir'])) {
			$result['query'] = $this->m_user->select_export_tanggal($data);
		}
		elseif (isset($data['pekerjaan'])) {
			$result['query'] = $this->m_user->select_export_pekerjaan($data['pekerjaan']);
		}
		elseif (isset($data['kegiatan'])) {
			$result['query'] = $this->m_user->select_export_kegiatan($data['kegiatan']);
		}
		else {
			$result['query'] = $this->m_user->select_data_pdln();
		}
		$html = $this->load->view('user/table_excel', $result);
		$nama = 'Export-File-'.date("dmY");
		$this->l_toexcel->excel_export($nama);
	}
}