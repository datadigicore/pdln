<?php
// Provided By Yohanes Christomas Daimler
// Email yohanes.christomas@gmail.com
defined('BASEPATH') OR exit('No direct script access allowed');
class home extends CI_Controller {
  public function __construct() {
	parent::__construct();
	$this->load->library('l_datatable');
	$this->load->library('upload');
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
  		$table = 'instansi';
      	$data['instansi'] = $this->m_user->select_data($table);
      	//print_r($data);
		$this->load->view('user/pdln-new-step1',$data);	  	
	  break;
	  case 'step2':
	  	$this->load->view('user/pdln-new-step2', $data);
	  break;
	  case 'step3':
	  	$this->load->view('user/pdln-new-step3', $data);
	  break;

	  case 'view':
	      $id = array('id' => $this->input->post('id'));
	      $kondisi = array('kondisi' => $this->input->post('kondisi'));
	      $result = $this->m_user->get_data_pdln($id);
	      if ($result == true) {
	        $data = array(
	          'id' => $result->id,
	          'id_user' => $result->id_user,
	          'nama' => $result->nama_pemohon,
	          'pekerjaan_pemohon' => $result->pekerjaan_pemohon,
	          'NIP' => $result->nip_pemohon,
	          'no_telp' => $result->no_hp_pemohon,
	          'no_passport' => $result->no_passport_pemohon,
	          'valid_passport' => $result->valid_passport_pemohon,
	          'instansi_pemohon' => $result->instansi_pemohon,
	          'jabatan_pemohon' => $result->jabatan_pemohon,
	          'cv_pemohon' => $result->cv_pemohon,
	          'foto_pemohon' => $result->foto_pemohon,
	          'karpeg_pemohon' => $result->karpeg_pemohon,
	          'no_surat_asal' => $result->no_surat_asal,
	          'tgl_surat_asal' => $result->tgl_surat_asal,
	          'penanggung_jawab_surat_asal' => $result->penanggung_jawab_surat_asal,
	          'instansi_surat_asal' => $result->instansi_surat_asal,
	          'perihal_surat_asal' => $result->perihal_surat_asal,
	          'surat_instansi_asal' => $result->surat_instansi_asal,
	          'no_surat_unit_utama' => $result->no_surat_unit_utama,
	          'tgl_surat_unit_utama' => $result->tgl_surat_unit_utama,
	          'penanggung_jawab_surat_unit_utama' => $result->penanggung_jawab_surat_unit_utama,
	          'instansi_unit_utama' => $result->instansi_unit_utama,
	          'perihal_surat_unit_utama' => $result->perihal_surat_unit_utama,
	          'tgl_surat_unit_utama' => $result->tgl_surat_unit_utama,
	          'instansi_unit_utama' => $result->instansi_unit_utama,
	          'perihal_surat_unit_utama' => $result->perihal_surat_unit_utama,
	          'surat_unit_utama' => $result->surat_unit_utama,
	          'no_surat_undangan' => $result->no_surat_undangan,
	          'tgl_surat_undangan' => $result->tgl_surat_undangan,
	          'instansi_pengundang' => $result->instansi_pengundang,
	          'negara_tujuan' => $result->negara_tujuan,
	          'waktu_awal_kegiatan' => $result->waktu_awal_kegiatan,
	          'waktu_akhir_kegiatan' => $result->waktu_akhir_kegiatan,
	          'keterangan_kegiatan' => $result->keterangan_kegiatan,
	          'sumber_dana_kegiatan' => $result->sumber_dana_kegiatan,
	          'keterangan_sumber_dana_kegiatan' => $result->keterangan_sumber_dana_kegiatan,
	          'surat_undangan' => $result->surat_undangan,
	          'surat_perjanjian' => $result->surat_perjanjian,
	          'status' => $result->status,
	          'keterangan_status' => $result->keterangan_status
	        );

			if($kondisi['kondisi']=='view'){
	        	$this->load->view('user/pdln-view',$data);
			}elseif ($kondisi['kondisi']=='edit') {
				$this->load->view('user/pdln-edit',$data);
			}
			

	      }
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

      case 'select_data':      
      	$id = $this->input->post('key');      	
      	$result = $this->m_user->get_data_sub_instansi($id);
      	foreach ($result as $item) {
      	      		echo '<option value="'.$item["id_sub_instansi"].'">'.$item["nama_sub_instansi"]."</option>";
      	      	} 
      	/*echo '<option value="lainnya">Lainnya</option>';     	*/
      	//print_r($result);
      break;

  	  case 'add_data_diri': 

  	  	$kondisi = $this->input->post('kondisi');
  	  	$max= $this->m_user->max_no_aplikasi();
	  	$no_aplikasi = $max->no_aplikasi+1;
		
  		//upload
  	  	$config['upload_path'] = FCPATH.'../files/other';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $result_array = array();
        for ($i = 1; $i <= 4; $i++) {
          if (!empty($_FILES['upl_files'.$i]['name'])) {
            if (!$this->upload->do_upload('upl_files'.$i)) {
              $error = $this->upload->display_errors();

            }
            else {
              $this->upload->data();
            }
          }
        }

        //insert        
        $cv_pemohon = $_FILES['upl_files1']['name'];
        $foto_pemohon = $_FILES['upl_files2']['name'];
        $karpeg_pemohon = $_FILES['upl_files3']['name'];
        $surat_tugas = $_FILES['upl_files4']['name'];

        $data = array(
  		  'id_user' => $_SESSION['logged']['id_user'],
  		  'no_aplikasi' => $no_aplikasi,
		  'nama_pemohon' => $this->input->post('nama_pemohon', TRUE),
		  'nip_pemohon' => $this->input->post('nip_pemohon', TRUE),
		  'no_hp_pemohon' => $this->input->post('no_hp_pemohon', TRUE),
		  'instansi_pemohon' => $this->input->post('instansi_pemohon', TRUE),
		  'sub_instansi_pemohon' => $this->input->post('sub_instansi_pemohon', TRUE),
		  'jabatan_pemohon' => $this->input->post('jabatan_pemohon', TRUE),
		  'pekerjaan_pemohon' => $this->input->post('pekerjaan_pemohon',TRUE),
		  'no_passport_pemohon' => $this->input->post('no_passport_pemohon', TRUE),
		  'tgl_valid_passport' => $this->input->post('tgl_passport_pemohon', TRUE),
		  'cv_pemohon' => $cv_pemohon,
		  'foto_pemohon' => $foto_pemohon,
		  'karpeg_pemohon' => $karpeg_pemohon,
		  'surat_tugas_pemohon' => $surat_tugas,
		  'status' => '1'
		  
		);
        
        $result= $this->db->insert('data_diri',$data);

        //buat redirect ke halaman lain
        
        if ($result == TRUE) {
        	if ($kondisi=="lanjut") {
	  	  		$this->session->set_flashdata('error_message', $data);
	  	  		$this->session->set_flashdata('content','step2');
	  	  		redirect('home'); 	  	
	  	  	}elseif ($kondisi=="tambah") {	  	  		
	  	  		//print_r($max->no_aplikasi);
	  	  		//print_r($no_aplikasi);
	  	  		$this->session->set_flashdata('error_message', 'Silahkan Input Data Selanjutnya');
	  	  		$this->session->set_flashdata('content','step1');
	  	  		redirect('home'); 	  	
	  	  	}	     
		}
		else {
		  redirect('home');
		}
            /*if ($result=1) {
                    echo "<script>alert('Data berhasil di simpan');window.location.href='http://localhost/dikbud/pdln/'</script>";
            }*/
  	  break;  	  

      case 'uji_upload_file':
        $config['upload_path'] = FCPATH.'../files/other';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $result_array = array();        
        for ($i = 1; $i <= 4; $i++) {
          if (!empty($_FILES['upl_files'.$i]['name'])) {
            if (!$this->upload->do_upload('upl_files'.$i)) {
              $error = $this->upload->display_errors();

            }
            else {
              $this->upload->data();
            }
          }
        }
        // Nanti load view nya diluar for.
      break;

  	  case 'add_surat_unit_utama': 
  	  	//upload
  	  	print_r($_FILES);
  	  	$config['upload_path'] = FCPATH.'../files/surat_unit_utama';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $result_array = array();           
	    for ($i = 1; $i <= 4; $i++) {
          if (!empty($_FILES['upl_files'.$i]['name'])) {
            if (!$this->upload->do_upload('upl_files'.$i)) {
              $error = $this->upload->display_errors();

            }
            else {
              $this->upload->data();
            }
          }
        }	

        //insert 	      
        $surat_unit_utama = $_FILES['upl_files1']['name'];          
  	  	$data = array(  	  				
  	  				'id_user' => $_SESSION['logged']['id_user'],
  	  				'no_aplikasi' => $this->input->post('no_aplikasi',TRUE),
					'no_surat_unit_utama' => $this->input->post('no_surat_unit_utama',TRUE),					
  	  				'tgl_surat_unit_utama' => $this->input->post('tgl_surat_unit_utama',TRUE),
  	  				'instansi_unit_utama' => $this->input->post('instansi_unit_utama',TRUE),
  	  				'penandatangan_surat_unit_utama' => $this->input->post('penandatangan_surat_unit_utama',TRUE),
  	  				'perihal_surat_unit_utama' => $this->input->post('perihal_surat_unit_utama',TRUE),
  	  				'surat_unit_utama' => $surat_unit_utama
  	  				 );  

  	  	$result= $this->db->insert('surat_unit_utama',$data);
	    if ($result == TRUE) {	    	
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

  	  case 'add_surat_undangan':

  	  	//upload
  	  	print_r($_FILES);
  	  	$config['upload_path'] = FCPATH.'../files/surat_undangan';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $result_array = array();           
	    for ($i = 1; $i <= 4; $i++) {
          if (!empty($_FILES['upl_files'.$i]['name'])) {
            if (!$this->upload->do_upload('upl_files'.$i)) {
              $error = $this->upload->display_errors();

            }
            else {
              $this->upload->data();
            }
          }
        }

        //insert

        $surat_undangan = $_FILES['upl_files1']['name'];
        $surat_perjanjian = $_FILES['upl_files2']['name'];

  	  	$data = array(
  	  			    'id_user' => $_SESSION['logged']['id_user'],
  	  				'no_aplikasi' => $this->input->post('no_aplikasi',TRUE),
  	  				'no_surat_undangan' => $this->input->post('no_surat_undangan',TRUE),
  	  				'tgl_surat_undangan' => $this->input->post('tgl_surat_undangan',TRUE),
  	  				'instansi_pengundang' => $this->input->post('instansi_pengundang',TRUE),
  	  				'negara_tujuan' => $this->input->post('negara_tujuan',TRUE),
  	  				'tgl_awal_kegiatan' => $this->input->post('tgl_awal_kegiatan',TRUE),
  	  				'tgl_akhir_kegiatan' => $this->input->post('tgl_akhir_kegiatan',TRUE),
  	  				'kategori_kegiatan' => $this->input->post('kategori_kegiatan',TRUE),
  	  				'rincian_kegiatan' => $this->input->post('rincian_kegiatan',TRUE),
  	  				'sumber_dana_kegiatan' => $this->input->post('sumber_dana_kegiatan',TRUE),
  	  				'keterangan_sumber_dana_kegiatan' => $this->input->post('keterangan_sumber_dana_kegiatan',TRUE),
  	  				'surat_undangan' => $surat_undangan,
  	  				'surat_perjanjian' => $surat_perjanjian
  	  				 );

  	  	$result= $this->db->insert('surat_undangan',$data);  	  	
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
	  case 'tab_pdln':
      $table1 = "data_diri";
      $table2 = "surat_unit_utama";
      $table3 = "surat_undangan";
      $table4 = "instansi";
    	$table5 = "sub_instansi";
    	$key = "id_data_diri";
    	$column = array(
        array( 'db' => 'id_instansi', 	    							'dt' => 0),
        array( 'db' => 'nama_pemohon', 						'dt' => 1),
        array( 'db' => 'instansi_unit_utama', 				'dt' => 2),
        array( 'db' => 'negara_tujuan', 						'dt' => 3),
        array( 'db' => 'tgl_awal_kegiatan', 				'dt' => 4),
        array( 'db' => 'tgl_akhir_kegiatan', 				'dt' => 5),
        array( 'db' => 'rincian_kegiatan', 				'dt' => 6),
        array( 'db' => 'keterangan_sumber_dana_kegiatan', 	'dt' => 7),
        array( 'db' => 'nip_pemohon', 					'dt' => 8)
      );
      $where = "instansi.id = data_diri.instansi_pemohon AND sub_instansi.id_sub_instansi = data_diri.sub_instansi_pemohon AND data_diri.no_aplikasi = surat_unit_utama.no_aplikasi AND data_diri.no_aplikasi = surat_undangan.no_aplikasi";
    	$this->l_datatable->get_table_join_6($table1, $table2, $table3, $table4, $table5, $key, $column, $where);
	  break;

  	 //  case 'tab_proses_pdln':
	  	// $table = "data_pdln";
	  	// $key = "id";
	  	// $column = array(
	   //    array( 'db' => 'id', 	    							'dt' => 0),
	   //    array( 'db' => 'nama_pemohon', 						'dt' => 1),
	   //    array( 'db' => 'no_surat_unit_utama',				 	'dt' => 2),
	   //    array( 'db' => 'no_surat_setneg', 					'dt' => 3),
	   //    array( 'db' => 'tgl_surat_setneg', 		 			'dt' => 4),
	   //    array( 'db' => 'no_surat_kemlu', 						'dt' => 5),
	   //    array( 'db' => 'tgl_surat_kemlu', 					'dt' => 6),
	   //    array( 'db' => 'keterangan_status', 					'dt' => 7)
	   //  );
	  	// $this->l_datatable->get_table($table, $key, $column);
  	 //  break;
  	 
  	  case 'terima_data':
	  	$id = $this->input->post('key');
	  	$data = array('status' => '1', 'keterangan_status' => 'Diterima');
	  	$this->m_user->upd_data_pdln($id, $data);
  	  break;

  	  case 'tolak_data':
	  	$id = $this->input->post('key');
	  	$data = array('status' => '2', 'keterangan_status' => 'Ditolak');
	  	$this->m_user->upd_data_pdln($id, $data);
  	  break;

  	  case 'pending_data':
	  	$id = $this->input->post('key');
	  	$data = array('status' => '3', 'keterangan_status' => 'Dipending');
	  	$this->m_user->upd_data_pdln($id, $data);
  	  break;

  	  case 'edit_data_pdln':
  	  	$id = $this->input->post('key');  	  	
  	  	/*echo gettype($id);*/
	  	$data = array(
	      'nama_pemohon' => $this->input->post('nama_pemohon',TRUE),
	      'pekerjaan_pemohon' => $this->input->post('pekerjaan_pemohon',TRUE),
	      'nip_pemohon' => $this->input->post('nip_pemohon',TRUE),
	      'no_hp_pemohon' => $this->input->post('no_hp_pemohon',TRUE),
	      'no_passport_pemohon' => $this->input->post('no_passport_pemohon',TRUE),
	      'valid_passport_pemohon' => $this->input->post('valid_passport_pemohon',TRUE),
	      'instansi_pemohon' => $this->input->post('instansi_pemohon',TRUE),
	      'jabatan_pemohon' => $this->input->post('jabatan_pemohon',TRUE),
	      'cv_pemohon' => $this->input->post('cv_pemohon',TRUE),
	      'foto_pemohon' => $this->input->post('foto_pemohon',TRUE),
	      'karpeg_pemohon' => $this->input->post('karpeg_pemohon',TRUE),
	      'no_surat_asal' => $this->input->post('no_surat_asal',TRUE),
	      'tgl_surat_asal' => $this->input->post('tgl_surat_asal',TRUE),
	      'penanggung_jawab_surat_asal' => $this->input->post('penanggung_jawab_surat_asal',TRUE),
	      'instansi_surat_asal' => $this->input->post('instansi_surat_asal',TRUE),
	      'perihal_surat_asal' => $this->input->post('perihal_surat_asal',TRUE),
	      'surat_instansi_asal' => $this->input->post('surat_instansi_asal',TRUE),
	      'no_surat_unit_utama' => $this->input->post('no_surat_unit_utama',TRUE),
	      'tgl_surat_unit_utama' => $this->input->post('tgl_surat_unit_utama',TRUE),
	      'penanggung_jawab_surat_unit_utama' => $this->input->post('penanggung_jawab_surat_unit_utama',TRUE),
	      'instansi_unit_utama' => $this->input->post('instansi_unit_utama',TRUE),
	      'perihal_surat_unit_utama' => $this->input->post('perihal_surat_unit_utama',TRUE),	      
	      'surat_unit_utama' => $this->input->post('surat_unit_utama',TRUE),
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
		  'no_surat_bpkln_setneg' => $this->input->post('no_surat_bpkln_setneg',TRUE),
		  'tgl_surat_bpkln_setneg' => $this->input->post('tgl_surat_bpkln_setneg',TRUE),
		  'no_surat_bpkln_kemlu' => $this->input->post('no_surat_bpkln_kemlu', TRUE),
		  'tgl_surat_bpkln_kemlu' => $this->input->post('tgl_surat_bpkln_kemlu', TRUE),
		  'tgl_update_data' => date('Y-m-d H:i:s')
		);

		//print_r($data);
		//print_r($id);

	  	$result = $this->m_user->upd_data_pdln($id, $data);
	  	//print_r($result);
	  	/*
	  	if ($result == TRUE) {	    
	      $this->session->set_flashdata('error_message', $data);
		  //buat redirect ke halaman lain
		  $this->session->set_flashdata('content','home');
		  redirect('home');
		}
		else {
		  redirect('home');
		}*/
  	  break;

  	  case 'tambah_surat_pdln':
  	  	$id = $this->input->post('key');
	  	$data = array(
		  'no_surat_setneg' => $this->input->post('no_surat_setneg',TRUE),
		  'tgl_surat_setneg' => $this->input->post('tgl_surat_setneg',TRUE),
		  'no_surat_kemlu' => $this->input->post('no_surat_menlu', TRUE),
		  'tgl_surat_kemlu' => $this->input->post('tgl_surat_menlu', TRUE),
		);
	  	$this->m_user->upd_data_pdln($id, $data);
  	  break;

  	  case 'upload':
	  	$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('upload_success', $data);
		}
	  break;

  	  default:
  		redirect('admin');
  	  break;
  	}
  }

}
