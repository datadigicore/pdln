<?php
// Provided By Yohanes Christomas Daimler
// Email yohanes.christomas@gmail.com
defined('BASEPATH') OR exit('No direct script access allowed');
class home extends CI_Controller {
  public function __construct() {
	parent::__construct();
	$this->load->library('l_datatable');
	$this->load->model('m_user');
	$ceksession = $this->session->userdata('logged');
	if ( ! $ceksession) {   
      $this->session->set_flashdata('error_message', 'Authentication failed');
	  redirect('login');
	}
	elseif ($ceksession['level'] != 0) {
	  redirect('login');
	}
  }
  public function index() {
  	if (!empty($this->session->flashdata('error_message'))) {
	  $data = array(
		'error_message' => $this->session->flashdata('error_message'),
		'alert_type' => 'success'
	  );
	  $content = $this->session->flashdata('content');
	}
	else{
	  $content = $this->input->post('content');
	}
    $this->load->view('template/meta');
    $this->load->view('template/javascript');
	$this->load->view('template/header');
	$this->load->view('template/sidebar');
	switch ($content) {
	  case 'step1':
		$this->load->view('user/pdln-new-step1');
	  break;
	  case 'step2':
	  	$this->load->view('user/pdln-new-step2', $data);
	  break;
	  case 'step3':
	  	$this->load->view('user/pdln-new-step3', $data);
	  break;
	  case 'step4':
	  	$this->load->view('user/pdln-new-step4', $data);
	  break;
	  case 'view':
	  	$this->load->view('user/pdln-view');
	  break;
	  case 'edit':
	  	$this->load->view('user/pdln-edit');
	  break;
	  case 'proses_permohonan':
	  	$this->load->view('user/proses_permohonan');
	  	break;
	  case 'cetak_surat':
	  	$this->load->view('user/cetak_surat');
	  	break;
	  case 'excel':
		$this->load->view('user/excel');
	  break;
	  case 'grafik':
		$this->load->view('user/grafik');
	  break;
	  default:
		$this->load->view('user/home');
	  break;
	}
	$this->load->view('template/footer');
  }

    public function process(){
  	$manage = $this->input->post('manage');
  	switch ($manage) {
  	  case 'add_data_diri':  	  	
  		$data = array(
		  'nama_pemohon' => $this->input->post('nama_pemohon', TRUE),
		  'pekerjaan_pemohon' => $this->input->post('pekerjaan_pemohon',TRUE),
		  'nip_pemohon' => $this->input->post('nip_pemohon', TRUE),
		  'no_hp_pemohon' => $this->input->post('no_hp_pemohon', TRUE),
		  'no_passport_pemohon' => $this->input->post('no_passport_pemohon', TRUE),
		  'valid_passport_pemohon' => $this->input->post('tgl_passport_pemohon', TRUE),
		  'instansi_pemohon' => $this->input->post('instansi_pemohon', TRUE),
		  'jabatan_pemohon' => $this->input->post('jabatan_pemohon', TRUE),
		  'cv_pemohon' => $this->input->post('cv_pemohon', TRUE),
		  'foto_pemohon' => $this->input->post('foto_pemohon', TRUE),		  
		  'karpeg_pemohon' => $this->input->post('karpeg_pemohon', TRUE),
		  'id_user' => $this->input->post('id_user',TRUE),
		  'tgl_input_data_diri' => date('Y-m-d H:i:s')
		);
		//$result = $this->m_user->add_data_pdln($data);		
	    //if ($result == TRUE) {
	    if(isset($data)){
	      $this->session->set_flashdata('error_message', $data);
		  /*$this->session->set_flashdata('error_message', 'Data Pengguna Berhasil di Tambahkan ke Dalam Database');*/
		  //buat redirect ke halaman lain
		  $this->session->set_flashdata('content','step2');
		  redirect('home');
		}
		else {
		  redirect('home');
		}
  	  break;
  	  case 'add_surat_asal':
  	  	$datadiri = $this->input->post('datadiri[]');
  	  	$data = array(
  	  				'nama_pemohon' => $datadiri[0],
					'pekerjaan_pemohon' => $datadiri[1],
					'nip_pemohon' => $datadiri[2],
					'no_hp_pemohon' => $datadiri[3],
					'no_passport_pemohon' => $datadiri[4],
					'valid_passport_pemohon' => $datadiri[5],
					'instansi_pemohon' => $datadiri[6],
					'jabatan_pemohon' => $datadiri[7],
					'cv_pemohon' => $datadiri[8],
					'foto_pemohon' => $datadiri[9],					
					'karpeg_pemohon' => $datadiri[10],
					'id_user' => $datadiri[11],
					'tgl_input_data_diri' => $datadiri[12],
  	  				'no_surat_asal' => $this->input->post('no_surat_asal',TRUE),
  	  				'tgl_surat_asal' => $this->input->post('tgl_surat_asal',TRUE),
  	  				'penanggung_jawab_surat_asal' => $this->input->post('penanggung_jawab_surat_asal',TRUE),
  	  				'instansi_surat_asal' => $this->input->post('instansi_surat_asal',TRUE),
  	  				'perihal_surat_asal' => $this->input->post('perihal_surat_asal',TRUE),
  	  				'surat_instansi_asal' => $this->input->post('surat_instansi_asal',TRUE),
  	  				'tgl_input_surat_instansi_asal' => date('Y-m-d H:i:s')
  	  				 );  	  	
  	  	/*$result = $this->m_user->add_data_pdln($data);
  	  	if ($result == TRUE) {*/
	    if(isset($data)){	
	    print_r($data);   
	      $this->session->set_flashdata('error_message', $data);
		  //$this->session->set_flashdata('error_message', 'Data Pengguna Berhasil di Tambahkan ke Dalam Database');
		  //buat redirect ke halaman lain
		  $this->session->set_flashdata('content','step3');
		  redirect('home');
		}
		else {
		  redirect('home');
		}
  	  	break;

  	  case 'add_surat_unit_utama':
  	    $datadiri = $this->input->post('datadiri[]');
  	  	$data = array(
  	  				'nama_pemohon' => $datadiri[0],
					'pekerjaan_pemohon' => $datadiri[1],
					'nip_pemohon' => $datadiri[2],
					'no_hp_pemohon' => $datadiri[3],
					'no_passport_pemohon' => $datadiri[4],
					'valid_passport_pemohon' => $datadiri[5],
					'instansi_pemohon' => $datadiri[6],
					'jabatan_pemohon' => $datadiri[7],
					'cv_pemohon' => $datadiri[8],
					'foto_pemohon' => $datadiri[9],					
					'karpeg_pemohon' => $datadiri[10],
					'id_user' => $datadiri[11],
					'tgl_input_data_diri' => $datadiri[12],
  	  				'no_surat_asal' => $datadiri[13],
  	  				'tgl_surat_asal' => $datadiri[14],
  	  				'penanggung_jawab_surat_asal' => $datadiri[15],
  	  				'instansi_surat_asal' => $datadiri[16],
  	  				'perihal_surat_asal' => $datadiri[17],
  	  				'surat_instansi_asal' => $datadiri[18],
  	  				'tgl_input_surat_instansi_asal' => $datadiri[19],
  	  				'no_surat_unit_utama' => $this->input->post('no_surat_unit_utama',TRUE),
  	  				'tgl_surat_unit_utama' => $this->input->post('tgl_surat_unit_utama',TRUE),
  	  				'Penanggung_jawab_surat_unit_utama' => $this->input->post('Penanggung_jawab_surat_unit_utama',TRUE),
  	  				'instansi_unit_utama' => $this->input->post('instansi_unit_utama',TRUE),
  	  				'perihal_surat_unit_utama' => $this->input->post('perihal_surat_unit_utama',TRUE),
  	  				'surat_unit_utama' => $this->input->post('surat_unit_utama',TRUE),
  	  				'tgl_input_surat_unit_utama' => date('Y-m-d H:i:s')
  	  				 );  

  	  	/*$result = $this->m_user->upd_data_pdln($id_user,$tgl_input_data_diri, $data);
  	  	print_r($result);

  	  	if ($result == TRUE) {*/
	    if(isset($data)){
	    	print_r($data);
	      $this->session->set_flashdata('error_message', $data);
		  //$this->session->set_flashdata('error_message', 'Data Pengguna Berhasil di Tambahkan ke Dalam Database');
		  //buat redirect ke halaman lain
		  $this->session->set_flashdata('content','step4');
		  redirect('home');
		}
		else {
		  redirect('home');
		}
  	  	break;

  	  case 'add_surat_undangan':
  	    $datadiri = $this->input->post('datadiri[]');
  	  	$data = array(
  	  				'nama_pemohon' => $datadiri[0],
					'pekerjaan_pemohon' => $datadiri[1],
					'nip_pemohon' => $datadiri[2],
					'no_hp_pemohon' => $datadiri[3],
					'no_passport_pemohon' => $datadiri[4],
					'valid_passport_pemohon' => $datadiri[5],
					'instansi_pemohon' => $datadiri[6],
					'jabatan_pemohon' => $datadiri[7],
					'cv_pemohon' => $datadiri[8],
					'foto_pemohon' => $datadiri[9],					
					'karpeg_pemohon' => $datadiri[10],
					'id_user' => $datadiri[11],
					'tgl_input_data_diri' => $datadiri[12],
  	  				'no_surat_asal' => $datadiri[13],
  	  				'tgl_surat_asal' => $datadiri[14],
  	  				'penanggung_jawab_surat_asal' => $datadiri[15],
  	  				'instansi_surat_asal' => $datadiri[16],
  	  				'perihal_surat_asal' => $datadiri[17],
  	  				'surat_instansi_asal' => $datadiri[18],
  	  				'tgl_input_surat_instansi_asal' => $datadiri[19],
  	  				'no_surat_unit_utama' => $datadiri[20],
  	  				'tgl_surat_unit_utama' => $datadiri[21],
  	  				'Penanggung_jawab_surat_unit_utama' => $datadiri[22],
  	  				'instansi_unit_utama' => $datadiri[23],
  	  				'perihal_surat_unit_utama' => $datadiri[24],
  	  				'surat_unit_utama' => $datadiri[25],
  	  				'tgl_input_surat_unit_utama' => $datadiri[26],
  	  				'no_surat_undangan' => $this->input->post('no_surat_undangan',TRUE),
  	  				'tgl_surat_undangan' => $this->input->post('tgl_surat_undangan',TRUE),
  	  				'instansi_pengundang' => $this->input->post('instansi_pengundang',TRUE),
  	  				'negara_tujuan' => $this->input->post('negara_tujuan',TRUE),
  	  				'waktu_awal_kegiatan' => $this->input->post('waktu_awal_kegiatan',TRUE),
  	  				'waktu_akhir_kegiatan' => $this->input->post('waktu_akhir_kegiatan',TRUE),
  	  				'keterangan_kegiatan' => $this->input->post('keterangan_kegiatan',TRUE),
  	  				'sumber_dana_kegiatan' => $this->input->post('sumber_dana_kegiatan',TRUE),
  	  				'keterangan_sumber_dana_kegiatan' => $this->input->post('keterangan_sumber_dana_kegiatan',TRUE),
  	  				'surat_undangan' => $this->input->post('surat_undangan',TRUE),
  	  				'surat_perjanjian' => $this->input->post('surat_perjanjian',TRUE),
  	  				'tgl_input_undangan' => date('Y-m-d H:i:s')
  	  				 );

  	  				 print_r($data);  

  	  	$result = $this->m_user->add_data_pdln($data);
  	  	//print_r($result);

  	  	if ($result == TRUE) {	    
	      $this->session->set_flashdata('error_message', $data);
		  //buat redirect ke halaman lain
		  $this->session->set_flashdata('content','view');
		  redirect('home');
		}
		else {
		  redirect('home');
		}
  	  	break;

  	  case 'tab_user':
	  	$table = "pengguna";
	  	$key = "id";
	  	$column = array(
	      array( 'db' => 'id', 	    'dt' => 0 ),
	      array( 'db' => 'nama', 	'dt' => 1 ),
	      array( 'db' => 'status',  'dt' => 2, 'formatter' => function($d,$row){ 
		   	if($d==1){
		      return '<button id="aktif" class="btn btn-flat btn-success btn-xs"><i class="fa fa-check-circle"></i> Aktif</button>';
		    }
		    else{
		      return '<button id="nonaktif" class="btn btn-flat btn-danger btn-xs"><i class="fa fa-warning"></i> Belum Aktif</button>';
		    }
		  }),
	      array( 'db' => 'alamat',  'dt' => 3 ),
	      array( 'db' => 'email',   'dt' => 4 ),
	      array( 'db' => 'no_telp', 'dt' => 5 )
	    );
	  	$this->l_datatable->get_table($table, $key, $column);
  	  break;
  	  case 'del_user':
	  	$id = $this->input->post('key');
	  	$this->m_admin->del_user($id);
  	  break;
  	  case 'act_user':
	  	$id = $this->input->post('key');
	  	$data = array('status' => '1');
	  	$this->m_admin->upd_user($id, $data);
  	  break;
  	  case 'edt_user':
	  	$id = $this->input->post('key');
	  	$data = array(
		  'nama' => $this->input->post('fullname'),
		  'alamat' => $this->input->post('address'),
		  'no_telp' => $this->input->post('phones', TRUE),
		  'email' => $this->input->post('emails', TRUE),
		);
	  	$this->m_admin->upd_user($id, $data);
  	  break;
  	  default:
  		redirect('admin');
  	  break;
  	}
  }

}
