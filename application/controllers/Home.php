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
  public function download($image_name){
    //$image_name = "yohanes.png";
    $image_path =  FCPATH."../files/other/$image_name";
    header('Content-Type: application/octet-stream');
    header("Content-Disposition: attachment; filename=$image_name");
    ob_clean();
    flush();
    readfile($image_path);
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
	  	if (!empty($data)) {
	  		$this->load->view('user/pdln-new-step1loop',$data);
	  	}else{
	  	$table = 'instansi';
      	$data['instansi'] = $this->m_user->select_data($table);
      	//print_r($data);
		$this->load->view('user/pdln-new-step1',$data);
		}
	  break;
	  case 'step2':	  	
      	$table = 'instansi';
      	$data['instansi'] = $this->m_user->select_data($table);
	  	$this->load->view('user/pdln-new-step2', $data);
	  break;
	  case 'step3':
	  	$table = 'countries';
	  	$data['countries'] = $this->m_user->select_data($table);
	  	$this->load->view('user/pdln-new-step3', $data);
	  break;

	  case 'view':
	  	//ini load data dari data diri nya udh bener
	      $no_aplikasi_data_diri = array('no_aplikasi_data_diri' => $this->input->post('id'));
	      $no_aplikasi = array('no_aplikasi' => $this->input->post('id'));
	      $table1='data_diri';
	      $table2='surat_unit_utama';
	      $table3='surat_undangan';
	      $kondisi = array('kondisi' => $this->input->post('kondisi'));
	      $datadiri = $this->m_user->get_data_pdln($table1,$no_aplikasi_data_diri);
	      $data_surat_unit_utama = $this->m_user->get_data_pdln($table2,$no_aplikasi);
	      $data_surat_undangan = $this->m_user->get_data_pdln($table3,$no_aplikasi);
	      //print_r($datadiri);
	      /*print_r($data_surat_unit_utama);
	      print_r($data_surat_undangan);*/
	      //if ($result == true) {
	        $data = array(
	          'id_data_diri' => $datadiri->id_data_diri,
	          'id_user' => $datadiri->id_user,
	          'no_aplikasi_data_diri' => $datadiri->no_aplikasi_data_diri,
	          'nama_pemohon' => $datadiri->nama_pemohon,
	          'pekerjaan_pemohon' => $datadiri->pekerjaan_pemohon,
	          'nip_pemohon' => $datadiri->nip_pemohon,
	          'no_hp_pemohon' => $datadiri->no_hp_pemohon,
	          'no_passport_pemohon' => $datadiri->no_passport_pemohon,
	          'tgl_terbit_passport' => $datadiri->tgl_terbit_passport,
	          'tgl_habis_passport' => $datadiri->tgl_habis_passport,
	          'instansi_pemohon' => $datadiri->instansi_pemohon,
	          'jabatan_pemohon' => $datadiri->jabatan_pemohon,
	          'cv_pemohon' => $datadiri->cv_pemohon,
	          'foto_pemohon' => $datadiri->foto_pemohon,
	          'karpeg_pemohon' => $datadiri->karpeg_pemohon,
	          'surat_tugas_pemohon' => $datadiri->surat_tugas_pemohon,
	          'no_surat_unit_utama' => $data_surat_unit_utama->no_surat_unit_utama,
	          'tgl_surat_unit_utama' => $data_surat_unit_utama->tgl_surat_unit_utama,
	          'penandatangan_surat_unit_utama' => $data_surat_unit_utama->penandatangan_surat_unit_utama,
	          'instansi_unit_utama' => $data_surat_unit_utama->instansi_unit_utama,
	          'perihal_surat_unit_utama' => $data_surat_unit_utama->perihal_surat_unit_utama,
	          'surat_unit_utama' => $data_surat_unit_utama->surat_unit_utama,
	          'no_surat_undangan' => $data_surat_undangan->no_surat_undangan,
	          'tgl_surat_undangan' => $data_surat_undangan->tgl_surat_undangan,
	          'instansi_pengundang' => $data_surat_undangan->instansi_pengundang,
	          'negara_tujuan' => $data_surat_undangan->negara_tujuan,
	          'tgl_awal_kegiatan' => $data_surat_undangan->tgl_awal_kegiatan,
	          'tgl_akhir_kegiatan' => $data_surat_undangan->tgl_akhir_kegiatan,
	          'rincian_kegiatan' => $data_surat_undangan->rincian_kegiatan,
	          'sumber_dana_kegiatan' => $data_surat_undangan->sumber_dana_kegiatan,
	          'keterangan_sumber_dana_kegiatan' => $data_surat_undangan->keterangan_sumber_dana_kegiatan,
	          'surat_undangan' => $data_surat_undangan->surat_undangan,
	          'surat_perjanjian' => $data_surat_undangan->surat_perjanjian	          
	        );

			if($kondisi['kondisi']=='view'){
	        	$this->load->view('user/pdln-view',$data);
			}elseif ($kondisi['kondisi']=='edit') {
				$this->load->view('user/pdln-edit',$data);
			}
			

	     // }
	  break;
	  case 'edit':
	  	$this->load->view('user/pdln-edit');
	  break;
	  case 'proses_permohonan':
	  	$this->load->view('user/proses_permohonan');
	  	break;
	  case 'update_bpkln':
	  	$this->load->view('user/update_bpkln');
	  	break;
	  case 'disetujui_setneg':
	  	$this->load->view('user/disetujui_setneg');
	  	break;
	  case 'cetak_surat':
      $result['query'] = $this->m_user->list_user_surat();
      // print('<pre>');
      // print_r($result);
	  	$this->load->view('user/cetak_surat', $result);
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
      	echo '<option value="-">---Pilih Sub Instansi</option>';
      	foreach ($result as $item) {
      	      		echo '<option value="'.$item["id_sub_instansi"].'">'.$item["nama_sub_instansi"]."</option>";
      	      	} 
      	/*echo '<option value="lainnya">Lainnya</option>';     	*/
      	//print_r($result);
      break;

  	  case 'add_data_diri': 

  	  	$kondisi = $this->input->post('kondisi');
  	  	$max= $this->m_user->max_no_aplikasi();
	  	$no_aplikasi = $max->no_aplikasi_data_diri+1;
		
  		//upload
  	  	$config['upload_path'] = FCPATH.'../files/other';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['encrypt_name'] = TRUE;
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

        $pekerjaan_pemohon = $this->input->post('pekerjaan_pemohon',TRUE);
        if ($pekerjaan_pemohon=="PNS") {
        	$pekerjaan_lainnya = "PNS";
        }else if ($pekerjaan_pemohon == "Swasta") {
        	$pekerjaan_lainnya = "Swasta";
        }else{
        	$pekerjaan_lainnya = $this->input->post('pekerjaan_lainnya',TRUE);
        }

        $datadiri = array(
  		  'id_user' => $_SESSION['logged']['id_user'],
  		  'no_aplikasi_data_diri' => $no_aplikasi,
		  'nama_pemohon' => $this->input->post('nama_pemohon', TRUE),
		  'nip_pemohon' => $this->input->post('nip_pemohon', TRUE),
		  'no_hp_pemohon' => $this->input->post('no_hp_pemohon', TRUE),
		  'instansi_pemohon' => $this->input->post('instansi_pemohon', TRUE),
		  'sub_instansi_pemohon' => $this->input->post('sub_instansi_pemohon', TRUE),
		  'jabatan_pemohon' => $this->input->post('jabatan_pemohon', TRUE),
		  'pekerjaan_pemohon' => $this->input->post('pekerjaan_pemohon',TRUE),
		  'pekerjaan_lainnya' => $pekerjaan_lainnya,
		  'no_passport_pemohon' => $this->input->post('no_passport_pemohon', TRUE),
		  'tgl_terbit_passport' => $this->input->post('tgl_terbit_passport_pemohon', TRUE),
		  'tgl_habis_passport' => $this->input->post('tgl_habis_passport_pemohon', TRUE),
		  'cv_pemohon' => $cv_pemohon,
		  'foto_pemohon' => $foto_pemohon,
		  'karpeg_pemohon' => $karpeg_pemohon,
		  'surat_tugas_pemohon' => $surat_tugas,
		  'status' => 'Permohonan'
		  
		);

		$data_surat =array(
			'id_user' => $_SESSION['logged']['id_user'],
  	  		'no_aplikasi' => $no_aplikasi
			);


        $result= $this->db->insert('data_diri',$datadiri);
        $result_surat_unit_utama = $this->db->insert('surat_unit_utama', $data_surat);
        $result_surat_undangan = $this->db->insert('surat_undangan', $data_surat);
        $result_surat_bpkln = $this->db->insert('surat_bpkln', $data_surat);

        //buat redirect ke halaman lain
        
        if ($result == TRUE ) {
        	if ($kondisi=="lanjut") {
	  	  		$this->session->set_flashdata('error_message', $datadiri);
	  	  		$this->session->set_flashdata('content','step2');
	  	  		redirect('home'); 	  	
	  	  	}elseif ($kondisi=="tambah") {	  	  		
	  	  		//print_r($max->no_aplikasi);
	  	  		//print_r($no_aplikasi);
	  	  		$this->session->set_flashdata('error_message', $datadiri);
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
  	  	//print_r($_FILES);
  	  	$config['upload_path'] = FCPATH.'../files/surat_unit_utama';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $result_array = array();

        $surat_unit_utama = $_FILES['upl_files1']['name'];
        $no_aplikasi = $this->input->post('no_aplikasi');
        $table = 'surat_unit_utama';
        $id_user = $_SESSION['logged']['id_user'];          
	    
		if (!empty($_FILES['upl_files1']['name'])) {
			if (!$this->upload->do_upload('upl_files1')) {
			  $error = $this->upload->display_errors();			  
			}
			else {
			  $this->upload->data();
			}
		}

        //insert 	              
  	  	$data = array(
					'no_surat_unit_utama' => $this->input->post('no_surat_unit_utama',TRUE),					
  	  				'tgl_surat_unit_utama' => $this->input->post('tgl_surat_unit_utama',TRUE),
  	  				'instansi_unit_utama' => $this->input->post('instansi_unit_utama',TRUE),
  	  				'sub_instansi_unit_utama' => $this->input->post('sub_instansi_unit_utama',TRUE),
  	  				'penandatangan_surat_unit_utama' => $this->input->post('penandatangan_surat_unit_utama',TRUE),
  	  				'perihal_surat_unit_utama' => $this->input->post('perihal_surat_unit_utama',TRUE),
  	  				
  	  				 ); 
  	  	if (!empty($surat_unit_utama)) {
  	  		$data['surat_unit_utama'] = $surat_unit_utama;
  	  	}

  	  	$result= $this->m_user->update_surat($table,$data,$id_user,$no_aplikasi);  	  	
	    if ($result == TRUE) {
	      $this->session->set_flashdata('error_message', $no_aplikasi);
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
  	  	$config['upload_path'] = FCPATH.'../files/surat_undangan';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['encrypt_name'] = TRUE;
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
        $no_aplikasi = $this->input->post('no_aplikasi');
        $table = 'surat_undangan';
        $id_user = $_SESSION['logged']['id_user'];

  	  	$data = array(  	  			    
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

  	  	$result= $this->m_user->update_surat($table,$data,$id_user,$no_aplikasi);
  	  	if ($result == TRUE) {	    
	      $this->session->set_flashdata('error_message', $data);
		  //buat redirect ke halaman lain
		  $this->session->set_flashdata('content','home');
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
	    array( 'db' => 'no_aplikasi_data_diri', 			'dt' => 0),
	    array( 'db' => 'nama_pemohon', 						'dt' => 1),
	    array( 'db' => 'nip_pemohon', 						'dt' => 2),
	    array( 'db' => 'nama_instansi', 					'dt' => 3),
	    array( 'db' => 'nama_sub_instansi', 				'dt' => 4),
	    array( 'db' => 'negara_tujuan', 					'dt' => 5),
	    array( 'db' => 'tgl_awal_kegiatan', 				'dt' => 6),
	    array( 'db' => 'tgl_akhir_kegiatan', 				'dt' => 7),
	    array( 'db' => 'rincian_kegiatan', 					'dt' => 8),
	    array( 'db' => 'keterangan_sumber_dana_kegiatan', 	'dt' => 9)
	    
	 	 );
      	$where = "instansi.id = data_diri.instansi_pemohon AND sub_instansi.id_sub_instansi = data_diri.sub_instansi_pemohon AND data_diri.no_aplikasi_data_diri = surat_unit_utama.no_aplikasi AND data_diri.no_aplikasi_data_diri = surat_undangan.no_aplikasi";
    	$this->l_datatable->get_table_join_6($table1, $table2, $table3, $table4, $table5, $key, $column, $where);
	  break;

  	  case 'tab_proses_pdln':
	  	$table1 = "data_diri";
	    $table2 = "surat_unit_utama";
	    $table3 = "surat_bpkln";
	    $table4 = "instansi";
		$table5 = "sub_instansi";
		$key = "id_data_diri";
	  	$column = array(
	      array( 'db' => 'no_aplikasi_data_diri',				'dt' => 0),
	      array( 'db' => 'nama_pemohon', 						'dt' => 1),
	      array( 'db' => 'no_surat_unit_utama',				 	'dt' => 2),
	      array( 'db' => 'no_surat_bpkln_setneg',				'dt' => 3),
	      array( 'db' => 'tgl_surat_bpkln_setneg',			 	'dt' => 4),
	      array( 'db' => 'no_surat_setneg', 					'dt' => 5),
	      array( 'db' => 'tgl_surat_setneg', 		 			'dt' => 6),
	      array( 'db' => 'data_lain_bpkln', 		 			'dt' => 7),
	      array( 'db' => 'status', 								'dt' => 8)     
	    );
	    $where = "instansi.id = data_diri.instansi_pemohon AND sub_instansi.id_sub_instansi = data_diri.sub_instansi_pemohon 
	    AND data_diri.no_aplikasi_data_diri = surat_unit_utama.no_aplikasi AND data_diri.no_aplikasi_data_diri = surat_bpkln.no_aplikasi";
    	$this->l_datatable->get_table_join_6($table1, $table2, $table3, $table4, $table5, $key, $column, $where);
  	  break;

  	  case 'tab_persetujuan_setneg':
	  	$table1 = "data_diri";
	    $table2 = "surat_undangan";
	    $table3 = "surat_bpkln";
	    $table4 = "instansi";
		$table5 = "sub_instansi";
		$key = "id_data_diri";
	  	$column = array(
	      array( 'db' => 'no_aplikasi_data_diri',				'dt' => 0),
	      array( 'db' => 'nama_pemohon', 						'dt' => 1),	      
	      array( 'db' => 'no_surat_setneg', 					'dt' => 2),
	      array( 'db' => 'tgl_surat_setneg', 		 			'dt' => 3),
	      array( 'db' => 'keterangan_sumber_dana_kegiatan',		'dt' => 4),
	      array( 'db' => 'data_lain_bpkln', 		 			'dt' => 5)
	    );
	    $where = "instansi.id = data_diri.instansi_pemohon AND sub_instansi.id_sub_instansi = data_diri.sub_instansi_pemohon AND data_diri.no_aplikasi_data_diri = surat_undangan.no_aplikasi AND data_diri.no_aplikasi_data_diri = surat_bpkln.no_aplikasi AND data_diri.status='Diterima'";
    	$this->l_datatable->get_table_join_6($table1, $table2, $table3, $table4, $table5, $key, $column, $where);
  	  break;

  	  case 'tab_update_bpkln':
  	  	$table1 = "data_diri";
	    $table2 = "surat_unit_utama";
	    $table3 = "surat_bpkln";
	    $table4 = "instansi";
		$table5 = "sub_instansi";
		$key = "id_data_diri";
	  	$column = array(
	      array( 'db' => 'no_aplikasi_data_diri',				'dt' => 0),
	      array( 'db' => 'nama_pemohon', 						'dt' => 1),	      
	      array( 'db' => 'no_surat_unit_utama',				 	'dt' => 2),
	      array( 'db' => 'no_surat_bpkln_setneg',				'dt' => 3),
	      array( 'db' => 'tgl_surat_bpkln_setneg',			 	'dt' => 4),
	      array( 'db' => 'no_surat_bpkln_kemlu', 				'dt' => 5),
	      array( 'db' => 'tgl_surat_bpkln_kemlu',				'dt' => 6),
	    );
	   	$where = "instansi.id = data_diri.instansi_pemohon AND sub_instansi.id_sub_instansi = data_diri.sub_instansi_pemohon AND data_diri.no_aplikasi_data_diri = surat_unit_utama.no_aplikasi AND data_diri.no_aplikasi_data_diri = surat_bpkln.no_aplikasi";
    	$this->l_datatable->get_table_join_6($table1, $table2, $table3, $table4, $table5, $key, $column, $where);
  	  break;
  	 
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
  	  	//$no_aplikasi = $this->input->post('key');  	  	
  	  	/*echo gettype($id);*/
  	  	//echo "masuk data 22";
  	  	echo "<pre>";
  	  	print_r($_POST);
  	  	echo "</pre>";
  	  	$no_aplikasi = $this->input->post('no_aplikasi_data_diri',TRUE);
		$id_user = $_SESSION['logged']['id_user'];
	    $table1='data_diri';
	    $table2='surat_unit_utama';
	    $table3='surat_undangan';
	    $table4='surat_bpkln';

      	$datadiri = array(
	      'nama_pemohon' => $this->input->post('nama_pemohon',TRUE),
	      'pekerjaan_pemohon' => $this->input->post('pekerjaan_pemohon',TRUE),
	      'nip_pemohon' => $this->input->post('nip_pemohon',TRUE),
	      'no_hp_pemohon' => $this->input->post('no_hp_pemohon',TRUE),
	      'no_passport_pemohon' => $this->input->post('no_passport_pemohon',TRUE),
	      'tgl_terbit_passport' => $this->input->post('tgl_terbit_passport',TRUE),
	      'tgl_habis_passport' => $this->input->post('tgl_habis_passport',TRUE),
	      'instansi_pemohon' => $this->input->post('instansi_pemohon',TRUE),
	      'jabatan_pemohon' => $this->input->post('jabatan_pemohon',TRUE)
	      );

	  	$data_surat_unit_utama = array(
	      'no_surat_unit_utama' => $this->input->post('no_surat_unit_utama',TRUE),
	      'tgl_surat_unit_utama' => $this->input->post('tgl_surat_unit_utama',TRUE),
	      'penandatangan_surat_unit_utama' => $this->input->post('penandatangan_surat_unit_utama',TRUE),
	      'instansi_unit_utama' => $this->input->post('instansi_unit_utama',TRUE),
	      'perihal_surat_unit_utama' => $this->input->post('perihal_surat_unit_utama',TRUE)	      
	      );

	    $data_surat_undangan = array(
	      'no_surat_undangan' => $this->input->post('no_surat_undangan',TRUE),
	      'tgl_surat_undangan' => $this->input->post('tgl_surat_undangan',TRUE),
	      'instansi_pengundang' => $this->input->post('instansi_pengundang',TRUE),
	      'negara_tujuan' => $this->input->post('negara_tujuan',TRUE),
	      'tgl_awal_kegiatan' => $this->input->post('tgl_awal_kegiatan',TRUE),
	      'tgl_akhir_kegiatan' => $this->input->post('tgl_akhir_kegiatan',TRUE),
	      'rincian_kegiatan' => $this->input->post('rincian_kegiatan',TRUE),
	      'sumber_dana_kegiatan' => $this->input->post('sumber_dana_kegiatan',TRUE),
	      'keterangan_sumber_dana_kegiatan' => $this->input->post('keterangan_sumber_dana_kegiatan',TRUE)	      
	      );
  
	    $config['upload_path'] = FCPATH.'../files/other';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $result_array = array(); 
	    
	    for ($i = 1; $i <= 7; $i++) {
	    	$nama_file="";
	    	$data_file=$this->input->post('txt_upl_files'.$i);
	    	$nama_file=$data_file;
	    	if($data_file==""){

			          if (!empty($_FILES['upl_files'.$i]['name'])) {
			          		//echo "masukkk ".$_FILES['upl_files'.$i]['name'];
			            if (!$this->upload->do_upload('upl_files'.$i)) {
			              $error = $this->upload->display_errors();
			              //$nama_file=$_FILES['upl_files'.$i]['name'];
			            }
			            else {
			              $this->upload->data();
			            }
			            $nama_file=$_FILES['upl_files'.$i]['name'];
			          }
			}else echo "data== $data_file <br/>";

			if($i==1){
					$datadiri['foto_pemohon']=$nama_file;
			}else if($i==2){
					$datadiri['cv_pemohon']=$nama_file;
			}else if($i==3){
					$datadiri['karpeg_pemohon']=$nama_file;	
			}else if($i==4){
					$data_surat_unit_utama['surat_unit_utama']=$nama_file;	
			}else if($i==5){
					$data_surat_undangan['surat_undangan']=$nama_file;	
			}else if($i==6){
					$data_surat_undangan['surat_perjanjian']=$nama_file;	
			}else if($i==7){
					$datadiri['surat_tugas_pemohon']=$nama_file;	
			}
        }

        $result_datadiri= $this->m_user->update_data_diri($table1,$datadiri,$id_user,$no_aplikasi);
		echo "<pre>";	  	  	
	  	print_r($datadiri);
	  	print_r($table1);
	  	print_r($id_user);
	  	print_r($no_aplikasi);	  	
	  	echo "</pre>";
	    	  	
	  	/*$result_surat_unit_utama= $this->m_user->update_surat($table2,$data_surat_unit_utama,$id_user,$no_aplikasi);
	  	$result_surat_undangan= $this->m_user->update_surat($table3,$data_surat_undangan,$id_user,$no_aplikasi);  	
	  	echo "<pre>";	  
	  	print_r($result_datadiri);
	  	echo "</pre>";*/
	  	/*if ($result_surat_bpkln == TRUE) {	    
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
  	  	$config['upload_path'] = FCPATH.'../files/surat_setneg';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $result_array = array();        
        
        if (!empty($_FILES['surat_setneg']['name'])) {
          if (!$this->upload->do_upload('surat_setneg')) {
            $error = $this->upload->display_errors();
            $datasurat = array('surat_setneg' => $_FILES['surat_setneg']['name'] );            
          }
          else {
            $this->upload->data();
          }
        }
        


  	  	$no_aplikasi = $this->input->post('key');
  	  	$id_user = $_SESSION['logged']['id_user'];
  	  	$table = 'surat_bpkln';
  	  	$table1= 'data_diri';
	  	$data_surat_bpkln = array(
		  'no_surat_setneg' => $this->input->post('no_surat_setneg',TRUE),
		  'tgl_surat_setneg' => $this->input->post('tgl_surat_setneg',TRUE),
		  'data_lain_bpkln' => $this->input->post('data_lain_bpkln', TRUE)		  
		);

		$datadiri= array('status' =>'Diterima');

		if (!empty($datasurat)) {
			$this->m_user->update_surat($table,$datasurat,$id_user,$no_aplikasi);
		}

		$this->m_user->update_surat($table,$data_surat_bpkln,$id_user,$no_aplikasi);
		$this->m_user->update_data_diri($table1,$datadiri,$id_user,$no_aplikasi);


	  	//$this->m_user->upd_data_pdln($no_aplikasi, $data);
  	  break;

  	  case 'tambah_surat_bpkln':
        
  	  	$config['upload_path'] = FCPATH.'../files/surat_bpkln/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $result_array = array();

        $surat_bpkln_setneg = $_FILES['upl_file1']['name'];
        $surat_bpkln_kemlu = $_FILES['upl_file2']['name'];
        $no_aplikasi = $this->input->post('key');
        $table = 'surat_bpkln';
        $id_user = $_SESSION['logged']['id_user'];          
        
		for ($i = 1; $i <= 2; $i++) {
          if (!empty($_FILES['upl_file'.$i]['name'])) {
            if (!$this->upload->do_upload('upl_file'.$i)) {
              $error = $this->upload->display_errors();

            }
            else {
              $this->upload->data();
            }
          }
        }
        //insert 	              
  	  	$data = array(
					'no_surat_bpkln_setneg' => $this->input->post('no_surat_bpkln_setneg',TRUE),					
  	  				'tgl_surat_bpkln_setneg' => $this->input->post('tgl_surat_bpkln_setneg',TRUE),
  	  				'surat_bpkln_setneg' => $surat_bpkln_setneg,
  	  				'no_surat_bpkln_kemlu' => $this->input->post('no_surat_bpkln_kemlu',TRUE),
  	  				'tgl_surat_bpkln_kemlu' => $this->input->post('tgl_surat_bpkln_kemlu',TRUE),
  	  				'surat_bpkln_kemlu' => $surat_bpkln_kemlu
  	  				 );  	

  	  	$result= $this->m_user->update_surat($table,$data,$id_user,$no_aplikasi);  	  	
	    if ($result == TRUE) {
	      $this->session->set_flashdata('error_message', $no_aplikasi);
		  //$this->session->set_flashdata('error_message', 'Data Pengguna Berhasil di Tambahkan ke Dalam Database');
		  //buat redirect ke halaman lain
		  $this->session->set_flashdata('content','step3');
		  redirect('home');
		}
		else {
		  redirect('home');
		}
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
