<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_mpdf extends CI_Controller {
	public function index() {
		setlocale (LC_TIME, 'id_ID');
		$this->load->helper('date');
		$timenow = unix_to_human(now('Asia/Jakarta'), TRUE, 'us');
		$time = date("Ymd-Hi", strtotime($timenow));
		$this->load->model('m_mpdf');
		$banyak = $this->input->post('banyak', TRUE);
		$noaplikasi = $this->input->post('no_aplikasi', TRUE);
		$menset = "";
		$jenis = "setneg2";
		if ($banyak == 1) {
			$result = $this->m_mpdf->get_pdln();
			$nip = $result['nip_pemohon'];
			$html=$this->load->view('mpdf_template/surat_menlu', $result, true);
		}
		else {
			$result['query'] = $this->m_mpdf->get_pdln_more($noaplikasi);
			$nip = $result['query'][0]['nip_pemohon'];
			switch ($jenis) {
				case 'setneg2':
					$html1=$this->load->view('mpdf_template/surat_setneg_2', $result, true); 
					$html2=$this->load->view('mpdf_template/surat_setneg_2_page2', $result, true); 
				break;
				case 'setneg2es2':
					$html=$this->load->view('mpdf_template/surat_setneg_2_es2', $result, true); 
				break;
				default:
					$html1=$this->load->view('mpdf_template/surat_setneg_2', $result, true); 
					$html2=$this->load->view('mpdf_template/surat_setneg_2_page2', $result, true); 
				break;
			}
		}
		$filename=$time.'-'.$menset.'-'.$nip;
		$this->load->library('l_mpdf');
		$mpdf = $this->l_mpdf->load();
		$mpdf=new mPDF('','A4','','',30,20,20,25); 
		if ($banyak == 1 or $jenis == "setneg2es2") {
			$mpdf->WriteHTML($html);
		}
		else {
			$mpdf->WriteHTML($html1);
			$mpdf->AddPage();
			$mpdf->WriteHTML($html2);
		}
		if ($filename != "") {
			$mpdf->Output(FCPATH.'../files/'.$filename.'.pdf','F');	
		}
		$mpdf->Output();
	}

	public function cetak_surat() {
			setlocale (LC_TIME, 'id_ID');
			$this->load->helper('date');
			$timenow = unix_to_human(now('Asia/Jakarta'), TRUE, 'us');
			$time = date("Ymd-Hi", strtotime($timenow));
			$this->load->model('m_mpdf');
			$iduser = $this->input->post('iduser', TRUE);
			$kategori = $this->input->post('kategori', TRUE);
			$noaplikasi = $this->input->post('noaplikasi', TRUE);
			if ($kategori == "menlu") {
				$result = $this->m_mpdf->get_pdln_user($iduser);
				$nip = $result['nip_pemohon'];
				$html=$this->load->view('mpdf_template/surat_menlu', $result, true);
			}
			else {
				$result['query'] = $this->m_mpdf->get_pdln_user2($iduser,$noaplikasi);
				$nip = $result['query'][0]['nip_pemohon'];
				$html1=$this->load->view('mpdf_template/surat_setneg_2', $result, true); 
				$html2=$this->load->view('mpdf_template/surat_setneg_2_page2', $result, true); 
			}
			$filename=$time.'-'.$menset.'-'.$nip;
			$this->load->library('l_mpdf');
			$mpdf = $this->l_mpdf->load();
			$mpdf=new mPDF('','A4','','',30,20,20,25); 
			if ($kategori == "menlu") {
				$mpdf->WriteHTML($html);
			}
			else {
				$mpdf->WriteHTML($html1);
				$mpdf->AddPage();
				$mpdf->WriteHTML($html2);
			}
			if ($filename != "") {
				$mpdf->Output(FCPATH.'../files/'.$kategori.'.pdf','F');	
			}
			$mpdf->Output();
		}

	function tab_cetak_surat(){
		$this->load->model('m_mpdf');
		$query['query'] = $this->m_mpdf->get_pdln_cari();

		$this->session->set_flashdata('error_message', $query);
	  	 $this->session->set_flashdata('content','cetak_surat');
		//$this->load->view('user/cetak_surat', $query);
	}
}