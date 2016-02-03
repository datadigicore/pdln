<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_doc extends CI_Controller {
	public function index() {
		setlocale (LC_TIME, 'id_ID');
		$this->load->helper('date');
		$timenow = unix_to_human(now('Asia/Jakarta'), TRUE, 'us');
		$time = date("Ymd-Hi", strtotime($timenow));
		$this->load->model('m_mpdf');
		$nosurat = $this->input->post('hasilsearch', TRUE);
		$banyak = $this->input->post('banyak', TRUE);
		$noaplikasi = $this->input->post('no_aplikasi', TRUE);
		$jenis = $this->input->post('jenis', TRUE);
		if (!empty($nosurat)) {
			if ($jenis == "setneg") {
				$result['query'] = $this->m_mpdf->get_pdln_more($noaplikasi,$nosurat);
				$nip = $result['query'][0]['nip_pemohon'];
				$html1=$this->load->view('mpdf_template/surat_setneg_2', $result, true); 
				$html2=$this->load->view('mpdf_template/surat_setneg_2_page2', $result, true); 
			}
			elseif ($jenis == "menlu") {
				$result['query'] = $this->m_mpdf->get_pdln_more($noaplikasi,$nosurat);
				$nip = $result['query'][0]['nip_pemohon'];
				$html1=$this->load->view('mpdf_template/surat_menlu_2', $result, true); 
				$html2=$this->load->view('mpdf_template/surat_menlu_2_page2', $result, true); 
			}
			$filename=$time.'-'.$jenis.'-'.$nip;
			header("Content-Type: application/vnd.ms-word");
			header("Expires: 0");
			header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
			header("Content-disposition: attachment; filename=".$filename.'.doc');
			echo $html1;
			echo '<br clear="all" style="page-break-before:always" />';
			echo $html2;
		}
		else{
			echo "Maaf Anda Belum Melakukan Pencarian Nomor Surat";
		}
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
				$result = $this->m_mpdf->get_pdln_user3($iduser,$noaplikasi);
				$nip = $result['nip_pemohon'];
				$html=$this->load->view('mpdf_template/surat_setneg', $result, true); 
			}
			$filename=$time.'-'.$kategori.'-'.$nip;
			header("Content-Type: application/vnd.ms-word");
			header("Expires: 0");
			header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
			header("Content-disposition: attachment; filename=".$filename.'.doc');
			echo $html;
		}

	function tab_cetak_surat(){
		$this->load->model('m_mpdf');
		$query['query'] = $this->m_mpdf->get_pdln_cari();

		$this->session->set_flashdata('error_message', $query);
	  	 $this->session->set_flashdata('content','cetak_surat');
		//$this->load->view('user/cetak_surat', $query);
	}
}