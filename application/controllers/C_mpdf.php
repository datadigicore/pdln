<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_mpdf extends CI_Controller {
	public function index() {
		setlocale (LC_TIME, 'id_ID');
		$this->load->helper('date');
		$timenow = unix_to_human(now('Asia/Jakarta'), TRUE, 'us');
		$time = date("Ymd-Hi", strtotime($timenow));
		$this->load->model('m_mpdf');
		$result = $this->m_mpdf->get_pdln();
		// print('<pre>');
		// print_r($result);
		// print('</pre>');
		// die;
		$menset = "setneg";
		$jenis = "setneg2";
		$nip = $result['nip_pemohon'];
		if ($menset == "menlu") {
			$html=$this->load->view('mpdf_template/surat_menlu', $result, true);
		}
		else{
			switch ($jenis) {
				case 'setneg2':
					$html1=$this->load->view('mpdf_template/surat_setneg_2', $result, true); 
					$html2=$this->load->view('mpdf_template/surat_setneg_2_page2', $result, true); 
				break;
				case 'setneg2es2':
					$html=$this->load->view('mpdf_template/surat_setneg_2_es2', $result, true); 
				break;
				default:
					$html=$this->load->view('mpdf_template/surat_setneg', $result, true); 
				break;
			}
		}
		$filename=$time.'-'.$menset.'-'.$nip;
		$this->load->library('l_mpdf');
		$mpdf = $this->l_mpdf->load();
		$mpdf=new mPDF('','A4','','',30,20,20,25); 
		if ($jenis == 'setneg2') {
			$mpdf->WriteHTML($html1);
			$mpdf->AddPage();
			$mpdf->WriteHTML($html2);
		}
		else {
			$mpdf->WriteHTML($html);
		}
		if ($filename != "") {
			$mpdf->Output(FCPATH.'../files/'.$filename.'.pdf','F');	
		}
		$mpdf->Output();
	}
}