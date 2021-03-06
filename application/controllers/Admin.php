<?php
// Provided By Yohanes Christomas Daimler
// Email yohanes.christomas@gmail.com
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
  public function __construct() {
  parent::__construct();
    $this->load->library('l_datatable');
    $this->load->library('upload');
  $this->load->model('m_admin');
  $ceksession = $this->session->userdata('logged');
  if ( ! $ceksession) {   
      $this->session->set_flashdata('error_message', 'Authentication failed');
    redirect('login');
  }
  elseif ($ceksession['level'] != 1) {
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
      case 'addstep1':
          $data['no_aplikasi'] = $this->input->post('id');
          $table = 'instansi';
          $data['instansi'] = $this->m_admin->select_data($table);
          $this->load->view('admin/pdln-new-step1-lagi',$data);   
      break;
      case 'step1':
          $table = 'instansi';
          $data['instansi'] = $this->m_admin->select_data($table);
          $this->load->view('admin/pdln-new-step1',$data);   
      break;
      case 'step2':     
          $table = 'instansi';
          $data['instansi'] = $this->m_admin->select_data($table);
        $this->load->view('admin/pdln-new-step2', $data);
      break;
      case 'step3':
        $table = 'countries';
        $data['countries'] = $this->m_admin->select_data($table);
        $this->load->view('admin/pdln-new-step3', $data);
      break;
      case 'view':
        $table = 'instansi';
          $data['instansi'] = $this->m_admin->select_data($table);       
          //ini load data dari data diri nya udh bener
          $no_aplikasi_surat = $this->input->post('id');
          $no_aplikasi = array('no_aplikasi' => $this->input->post('id'));
          $id_data_diri= $this->input->post('id_data_diri');
          $table1='data_diri';
          $table2='surat_unit_utama';
          $table3='surat_undangan';
          $kondisi = array('kondisi' => $this->input->post('kondisi'));
          //$datadiri = $this->m_admin->get_data_pdln($table1,$no_aplikasi_data_diri);
          $datadiri = $this->m_admin->joindatadiri($id_data_diri);
          //$data_surat_unit_utama = $this->m_admin->get_data_pdln($table2,$no_aplikasi);
          $data_surat_unit_utama = $this->m_admin->joinsurat($no_aplikasi_surat);
          $data_surat_undangan = $this->m_admin->get_data_pdln($table3,$no_aplikasi);
          //print_r($id_data_diri);
          /*print_r($data_surat_unit_utama);
          print_r($data_surat_undangan);*/
          //if ($result == true) {
            $data['data'] = array(
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
              'instansi_pemohon' => $datadiri->nama_instansi,
              'id_instansi_pemohon' => $datadiri->instansi_pemohon,
              'sub_instansi_pemohon' => $datadiri->nama_sub_instansi,
              'jabatan_pemohon' => $datadiri->jabatan_pemohon,
              'cv_pemohon' => $datadiri->cv_pemohon,
              'foto_pemohon' => $datadiri->foto_pemohon,
              'karpeg_pemohon' => $datadiri->karpeg_pemohon,
              'surat_tugas_pemohon' => $datadiri->surat_tugas_pemohon,
              'no_surat_unit_utama' => $data_surat_unit_utama->no_surat_unit_utama,
              'tgl_surat_unit_utama' => $data_surat_unit_utama->tgl_surat_unit_utama,
              'penandatangan_surat_unit_utama' => $data_surat_unit_utama->penandatangan_surat_unit_utama,
              'instansi_unit_utama' => $data_surat_unit_utama->nama_instansi,
              'id_instansi_unit_utama' => $data_surat_unit_utama->instansi_unit_utama,
              'sub_instansi_unit_utama' => $data_surat_unit_utama->nama_sub_instansi,
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
          
        //print_r($datadiri);

        if($kondisi['kondisi']=='view'){
         $this->load->view('admin/pdln-view',$data);
        }elseif ($kondisi['kondisi']=='edit') {
          $this->load->view('admin/pdln-edit',$data);
        }
         // }
      break;
      case 'edit':
        $this->load->view('admin/pdln-edit');
      break;
      case 'proses_permohonan':
        $this->load->view('admin/proses_permohonan');
      break;
      case 'update_pemohon':
        $this->load->view('admin/update_pemohon');
      break;
      case 'view_unit_utama':
        $no_surat_unit_utama['data'] = $this->input->post('no_surat_unit_utama');
        //print_r($no_surat_unit_utama);
        $this->load->view('admin/view_unit_utama',$no_surat_unit_utama);
      break;
      case 'update_bpkln':
        $this->load->view('admin/update_bpkln');
      break;
      case 'disetujui_setneg':
        $this->load->view('admin/disetujui_setneg');
      break;
      case 'cetak_surat':
        $kondisi = $this->input->post('kondisi');
        $id_user = $_SESSION['logged']['id_user'];
        /*print($id_user);
        print($kondisi);*/
        if ($kondisi=="cari") {
          $no_surat_bpkln_setneg = $this->input->post('no_surat_bpkln_setneg');
          $result['query'] = $this->m_admin->list_user_surat_cari($no_surat_bpkln_setneg);          
          $this->load->view('admin/cetak_surat', $result);
        }elseif ($kondisi=="cetak") {
          $result['query'] = $this->m_admin->list_user_surat();          
          $this->load->view('admin/cetak_surat', $result);
        }
      break;
      case 'excel':
        $this->load->view('admin/excel');
      break;
      case 'grafik':
        $this->load->view('admin/grafik');
      break;
      case 'user':
        $this->load->view('admin/user');
      break;
      case 'add_user':
        isset($data) ? $this->load->view('admin/user_add', $data) : $this->load->view('admin/user_add');
      break;
      default:
        $this->load->view('admin/home');
      break;
    }
    $this->load->view('template/footer');
  }

  public function process(){
    $manage = $this->input->post('manage');
    switch ($manage) {
      case 'add_user':
        $data = array(
          'nama' => $this->input->post('fullname'),
          'alamat' => $this->input->post('address'),
          'no_telp' => $this->input->post('phones', TRUE),
          'email' => $this->input->post('emails', TRUE),
          'username' => $this->input->post('usernames', TRUE),
          'status' => $this->input->post('stats'),
          'password' => md5($this->input->post('passwords', TRUE))
        );
        $result = $this->m_admin->add_user($data);
         if ($result == TRUE) {
          $this->session->set_flashdata('error_message', 'Data Pengguna Berhasil di Tambahkan ke Dalam Database');
          //buat redirect ke halaman lain
          $this->session->set_flashdata('content', 'add_user');
          redirect('admin');
        }
        else {
          redirect('admin');
        }
      break;
      case 'tab_user':
        $table = "user";
        $key = "id_user";
        $column = array(
          array( 'db' => 'id_user',        'dt' => 0 ),
          array( 'db' => 'nama',           'dt' => 1 ),
          array( 'db' => 'status',         'dt' => 2, 'formatter' => function($d,$row){ 
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
      case 'select_data':      
        $id = $this->input->post('key');        
        $result = $this->m_admin->get_data_sub_instansi($id);
        echo '<option value="-">---Pilih Sub Instansi</option>';
        foreach ($result as $item) {
          echo '<option value="'.$item["id_sub_instansi"].'">'.$item["nama_sub_instansi"]."</option>";
        } 
        /*echo '<option value="lainnya">Lainnya</option>';      */
        //print_r($result);
      break;
      case 'select_country':      
        $result = $this->m_admin->get_country();
        echo '<option value="" selected disabled>--- Pilih Negara ---</option>';
        foreach ($result as $item) {
          echo '<option value="'.$item["country_name"].'">'.$item["country_name"]."</option>";
        } 
      break;
      case 'select_nip':
        $result = $this->m_admin->get_nip();
        echo '<option value="" selected disabled>--- Pilih NIP ---</option>';
        foreach ($result as $item) {
          echo '<option value="'.$item["nip_pemohon"].'">'.$item["nip_pemohon"]."</option>";
        } 
      break;
      case 'select_sumber':
        $result = $this->m_admin->get_sumber();
        echo '<option value="" selected disabled>--- Pilih Sumber Dana ---</option>';
        foreach ($result as $item) {
          echo '<option value="'.$item["sumber_dana_kegiatan"].'">'.$item["sumber_dana_kegiatan"]."</option>";
        } 
      break;
      case 'select_waktu':
        $result = $this->m_admin->get_sumber();
        echo '<option value="" selected disabled>--- Pilih Sumber Dana ---</option>';
        foreach ($result as $item) {
          echo '<option value="'.$item["sumber_dana_kegiatan"].'">'.$item["sumber_dana_kegiatan"]."</option>";
        } 
      break;
      case 'sumber_dana':      
        $results = $this->m_admin->get_grafik_sumber();
        $prev_value = array('value' => null, 'amount' => null);
        sort($results);
        foreach ($results as $data) {
          if ($prev_value['value'] != $data['sumber_dana_kegiatan']) {
              unset($prev_value);
              $prev_value = array('value' => $data['sumber_dana_kegiatan'], 'amount' => 0);
              $result[] =& $prev_value;
          }
          $prev_value['amount']++;
        }
        for ($i=0; $i < count($result) ; $i++) { 
          $newresult[$i][] =& $result[$i]['value'];
          $newresult[$i][] =& $result[$i]['amount'];
        }
        echo json_encode($newresult);
      break;
      case 'sumber_pekerjaan':      
        $results = $this->m_admin->get_grafik_pekerjaan();
        $prev_value = array('value' => null, 'amount' => null);
        sort($results);
        foreach ($results as $data) {
          if ($prev_value['value'] != $data['pekerjaan_pemohon']) {
              unset($prev_value);
              $prev_value = array('value' => $data['pekerjaan_pemohon'], 'amount' => 0);
              $result[] =& $prev_value;
          }
          $prev_value['amount']++;
        }
        for ($i=0; $i < count($result) ; $i++) { 
          $newresult[$i][] =& $result[$i]['value'];
          $newresult[$i][] =& $result[$i]['amount'];
        }
        echo json_encode($newresult);
      break;
      case 'sumber_kegiatan':      
        $results = $this->m_admin->get_grafik_kegiatan();
        $prev_value = array('value' => null, 'amount' => null);
        sort($results);
        foreach ($results as $data) {
          if ($prev_value['value'] != $data['kategori_kegiatan']) {
              unset($prev_value);
              $prev_value = array('value' => $data['kategori_kegiatan'], 'amount' => 0);
              $result[] =& $prev_value;
          }
          $prev_value['amount']++;
        }
        for ($i=0; $i < count($result) ; $i++) { 
          $newresult[$i][] =& $result[$i]['value'];
          $newresult[$i][] =& $result[$i]['amount'];
        }
        echo json_encode($newresult);
      break;
      case 'sumber_negara':      
        $results = $this->m_admin->get_grafik_negara();
        $prev_value = array('value' => null, 'amount' => null);
        sort($results);
        foreach ($results as $data) {
          if ($prev_value['value'] != $data['negara_tujuan']) {
              unset($prev_value);
              $prev_value = array('value' => $data['negara_tujuan'], 'amount' => 0);
              $result[] =& $prev_value;
          }
          $prev_value['amount']++;
        }
        for ($i=0; $i < count($result) ; $i++) { 
          $newresult[$i][] =& $result[$i]['value'];
          $newresult[$i][] =& $result[$i]['amount'];
        }
        echo json_encode($newresult);
      break;
      case 'sumber_waktu':
        $data['awal'] = $this->input->post('awal');
        $data['akhir'] = $this->input->post('akhir');
        $results = $this->m_admin->get_grafik_waktu($data);
        if ($results != null) {
          $prev_value = array('value' => null, 'amount' => null);
          sort($results);
          foreach ($results as $data) {
            if ($prev_value['value'] != $data['nama_pemohon']) {
                unset($prev_value);
                $prev_value = array('value' => $data['nama_pemohon'], 'amount' => 0);
                $result[] =& $prev_value;
            }
            $prev_value['amount']++;
          }
          for ($i=0; $i < count($result) ; $i++) { 
            $newresult[$i][] =& $result[$i]['value'];
            $newresult[$i][] =& $result[$i]['amount'];
          }
          echo json_encode($newresult);
        }
        else {}
      break;
      case 'sumber_nip':      
        $results = $this->m_admin->get_grafik_nip();
        $prev_value = array('value' => null, 'amount' => null);
        sort($results);
        foreach ($results as $data) {
          if ($prev_value['value'] != $data['nip_pemohon']) {
              unset($prev_value);
              $prev_value = array('value' => $data['nip_pemohon'], 'amount' => 0);
              $result[] =& $prev_value;
          }
          $prev_value['amount']++;
        }
        for ($i=0; $i < count($result) ; $i++) { 
          $newresult[$i][] =& $result[$i]['value'];
          $newresult[$i][] =& $result[$i]['amount'];
        }
        echo json_encode($newresult);
      break;
      case 'add_data_diri': 
        $cek = $this->input->post('no_aplikasi');
        if(isset($cek)){
          $no_aplikasi = $this->input->post('no_aplikasi');
        }else{
          $max= $this->m_admin->max_no_aplikasi();
        $no_aplikasi = $max->no_aplikasi_data_diri+1;
        }
        //$kondisi = $this->input->post('kondisi');       
    
        //upload
        $config['upload_path'] = FCPATH.'../files/other';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $result_array = array();

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
        'status' => 'Permohonan'
        
        );


        for ($i = 1; $i <= 5; $i++) {
          $nama_file="";
          if (!empty($_FILES['upl_files'.$i]['name'])) {
            if (!$this->upload->do_upload('upl_files'.$i)) {
              $error = $this->upload->display_errors();
            }
            else {
              $upload_data = $this->upload->data();
            }
            $nama_file=$upload_data['file_name'];
          }
            if($i==1){
          $datadiri['cv_pemohon']=$nama_file;
          }else if($i==2){
              $datadiri['foto_pemohon']=$nama_file;
          }else if($i==3){
              $datadiri['karpeg_pemohon']=$nama_file; 
          }else if($i==4){
              $datadiri['surat_tugas_pemohon']=$nama_file;  
          }else if($i==5){
              $datadiri['other_data']=$nama_file;  
          }
        }

        //insert    
        $data_surat =array(
        'id_user' => $_SESSION['logged']['id_user'],
            'no_aplikasi' => $no_aplikasi
        );

        $result= $this->db->insert('data_diri',$datadiri);
          //buat redirect ke halaman lain      
        if ($result == TRUE ) {
          if($this->input->post('tambah') == "tambah"){
          $kondisi = "tambah";
          /*print_r($kondisi);*/
          print_r($datadiri);
          $this->session->set_flashdata('error_message', $datadiri);
          $this->session->set_flashdata('content','step1');
          redirect('home');
          }
          if($this->input->post('lanjut')=="lanjut"){
            $result_surat_unit_utama = $this->db->insert('surat_unit_utama', $data_surat);
            $result_surat_undangan = $this->db->insert('surat_undangan', $data_surat);
            $result_surat_bpkln = $this->db->insert('surat_bpkln', $data_surat);
            $kondisi = "lanjut";
            /*print_r($kondisi);
            print_r($datadiri);*/
            $this->session->set_flashdata('error_message', $datadiri);
            $this->session->set_flashdata('content','step2');
            redirect('home');       
          }
          if($this->input->post('selesai')=="selesai"){
            $this->session->set_flashdata('error_message', $datadiri);
            $this->session->set_flashdata('content','home');
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
        $no_aplikasi = $this->input->post('no_aplikasi');
        $table = 'surat_unit_utama';
        $id_user = $_SESSION['logged']['id_user'];          
      
        $nama_file="";
        if (!empty($_FILES['upl_files1']['name'])) {
          if (!$this->upload->do_upload('upl_files1')) {
          $error = $this->upload->display_errors();       
          }
          else {
            $upload_data = $this->upload->data();
          }
          $nama_file=$upload_data['file_name'];
        }
      
        $surat_unit_utama=$nama_file;
        
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

        $result= $this->m_admin->update_surat($table,$data,$no_aplikasi);       
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
              'keterangan_sumber_dana_kegiatan' => $this->input->post('keterangan_sumber_dana_kegiatan',TRUE)
               );


        for ($i = 1; $i <= 2; $i++) {
          $nama_file="";
            if (!empty($_FILES['upl_files'.$i]['name'])) {
              if (!$this->upload->do_upload('upl_files'.$i)) {
                $error = $this->upload->display_errors();

              }
              else {
                $upload_data = $this->upload->data();
              }
              $nama_file=$upload_data['file_name'];
            }
              if($i==1){
                $data['surat_undangan']=$nama_file;
             }else if($i==2){
                $data['surat_perjanjian']=$nama_file;
           }
        }

        //insert
        $no_aplikasi = $this->input->post('no_aplikasi');
        $table = 'surat_undangan';
        $id_user = $_SESSION['logged']['id_user'];

        $result= $this->m_admin->update_surat($table,$data,$no_aplikasi);
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
        $id_user = $_SESSION['logged']['id_user'];
        $table1 = "data_diri";
        $table2 = "surat_unit_utama";
        $table3 = "surat_undangan";
        $table4 = "instansi";
        $table5 = "sub_instansi";
        $key = "id_data_diri";
        $column = array(      
          array( 'db' => 'no_aplikasi_data_diri',             'dt' => 0),
          array( 'db' => 'id_data_diri',                      'dt' => 1),
          array( 'db' => 'nama_pemohon',                      'dt' => 2),
          array( 'db' => 'nip_pemohon',                       'dt' => 3),
          array( 'db' => 'nama_instansi',                     'dt' => 4),
          array( 'db' => 'nama_sub_instansi',                 'dt' => 5),
          array( 'db' => 'negara_tujuan',                     'dt' => 6),
          array( 'db' => 'tgl_awal_kegiatan',                 'dt' => 7),
          array( 'db' => 'tgl_akhir_kegiatan',                'dt' => 8),
          array( 'db' => 'rincian_kegiatan',                  'dt' => 9),
          array( 'db' => 'keterangan_sumber_dana_kegiatan',   'dt' => 10)        
        );
        $where = "instansi.id = data_diri.instansi_pemohon AND sub_instansi.id_sub_instansi = data_diri.sub_instansi_pemohon AND data_diri.no_aplikasi_data_diri = surat_unit_utama.no_aplikasi AND data_diri.no_aplikasi_data_diri = surat_undangan.no_aplikasi";
        $this->l_datatable->get_table_join_6($table1, $table2, $table3, $table4, $table5, $key, $column, $where);
      break;

      case 'tab_proses_pdln':
        $id_user = $_SESSION['logged']['id_user'];
        $table1 = "data_diri";
        $table2 = "surat_unit_utama";
        $table3 = "surat_bpkln";
        $table4 = "instansi";
        $table5 = "sub_instansi";
        $key = "id_data_diri";
        $column = array(
          array( 'db' => 'no_aplikasi_data_diri',       'dt' => 0),
          array( 'db' => 'nama_pemohon',            'dt' => 1),
          array( 'db' => 'no_surat_unit_utama',         'dt' => 2),
          array( 'db' => 'no_surat_bpkln_setneg',       'dt' => 3),
          array( 'db' => 'tgl_surat_bpkln_setneg',        'dt' => 4),
          array( 'db' => 'no_surat_setneg',           'dt' => 5),
          array( 'db' => 'tgl_surat_setneg',          'dt' => 6),
          array( 'db' => 'data_lain_bpkln',           'dt' => 7),
          array( 'db' => 'status',                'dt' => 8)     
        );
        $where = "instansi.id = data_diri.instansi_pemohon AND sub_instansi.id_sub_instansi = data_diri.sub_instansi_pemohon 
        AND data_diri.no_aplikasi_data_diri = surat_unit_utama.no_aplikasi AND data_diri.no_aplikasi_data_diri = surat_bpkln.no_aplikasi";
        $this->l_datatable->get_table_join_6($table1, $table2, $table3, $table4, $table5, $key, $column, $where);
      break;

      case 'tab_persetujuan_setneg':
        $id_user = $_SESSION['logged']['id_user'];
        $table1 = "data_diri";
        $table2 = "surat_undangan";
        $table3 = "surat_bpkln";
        $table4 = "instansi";
        $table5 = "sub_instansi";
        $key = "id_data_diri";

        $column = array(
          array( 'db' => 'no_aplikasi_data_diri',             'dt' => 0),
          array( 'db' => 'nama_pemohon',                      'dt' => 1),       
          array( 'db' => 'no_surat_setneg',                   'dt' => 2),
          array( 'db' => 'tgl_surat_setneg',                  'dt' => 3),
          array( 'db' => 'keterangan_sumber_dana_kegiatan',   'dt' => 4),
          array( 'db' => 'data_lain_bpkln',                   'dt' => 5)
        );
        $where = "instansi.id = data_diri.instansi_pemohon AND sub_instansi.id_sub_instansi = data_diri.sub_instansi_pemohon 
        AND data_diri.no_aplikasi_data_diri = surat_undangan.no_aplikasi AND data_diri.no_aplikasi_data_diri = surat_bpkln.no_aplikasi 
        AND data_diri.status='Diterima'";
        $this->l_datatable->get_table_join_6($table1, $table2, $table3, $table4, $table5, $key, $column, $where);
      break;

      case 'tab_update_bpkln':
        $id_user = $_SESSION['logged']['id_user'];
        $table1 = "data_diri";
        $table2 = "surat_unit_utama";
        $table3 = "surat_bpkln";
        $table4 = "instansi";
        $table5 = "sub_instansi";
        $key = "id_data_diri";
        $column = array(
          array( 'db' => 'no_aplikasi_data_diri',       'dt' => 0),
          array( 'db' => 'nama_pemohon',                'dt' => 1),       
          array( 'db' => 'no_surat_unit_utama',         'dt' => 2),
          array( 'db' => 'no_surat_bpkln_setneg',       'dt' => 3),
          array( 'db' => 'tgl_surat_bpkln_setneg',      'dt' => 4),
          array( 'db' => 'no_surat_bpkln_kemlu',        'dt' => 5),
          array( 'db' => 'tgl_surat_bpkln_kemlu',       'dt' => 6),
        );
        $where = "instansi.id = data_diri.instansi_pemohon AND sub_instansi.id_sub_instansi = data_diri.sub_instansi_pemohon 
        AND data_diri.no_aplikasi_data_diri = surat_unit_utama.no_aplikasi AND data_diri.no_aplikasi_data_diri = surat_bpkln.no_aplikasi";
        $this->l_datatable->get_table_join_6($table1, $table2, $table3, $table4, $table5, $key, $column, $where);
      break;

      case 'tab_surat_unit':
        $id_user = $_SESSION['logged']['id_user'];
        $table1 = "data_diri";
        $table2 = "surat_unit_utama";
        $table3 = "surat_bpkln";
        $table4 = "instansi";
        $table5 = "sub_instansi";
        $key = "id_data_diri";
        $column = array(      
        array( 'db' => 'no_aplikasi_data_diri',             'dt' => 0),
        array( 'db' => 'no_surat_unit_utama',               'dt' => 1),
        array( 'db' => 'no_surat_unit_utama',               'dt' => 2, 'formatter' => function($table,$row){ 
        if($table=="data_diri"){
          return 'ada';
        }
        else{
          return 'ganti jd hasil count dari db';
        }
        })
        
       );        
        $where = "instansi.id = data_diri.instansi_pemohon AND sub_instansi.id_sub_instansi = data_diri.sub_instansi_pemohon 
        AND data_diri.no_aplikasi_data_diri = surat_unit_utama.no_aplikasi AND data_diri.no_aplikasi_data_diri = surat_bpkln.no_aplikasi";
        $this->l_datatable->get_table_join_6($table1, $table2, $table3, $table4, $table5, $key, $column, $where);
      break;

      case 'tab_pdln_unit_utama':
        $id_user = $_SESSION['logged']['id_user'];
        $no_surat_unit_utama = $this->input->post('no_surat_unit_utama');
        //print_r($no_surat_unit_utama);
        $table1 = "data_diri";
        $table2 = "surat_unit_utama";
        $table3 = "surat_undangan";
        $table4 = "instansi";
        $table5 = "sub_instansi";
        $key = "id_data_diri";
        $column = array(      
        array( 'db' => 'no_aplikasi_data_diri',             'dt' => 0),
        array( 'db' => 'id_data_diri',                      'dt' => 1),
        array( 'db' => 'nama_pemohon',                      'dt' => 2),
        array( 'db' => 'nip_pemohon',                       'dt' => 3),
        array( 'db' => 'nama_instansi',                     'dt' => 4),
        array( 'db' => 'nama_sub_instansi',                 'dt' => 5),
        array( 'db' => 'negara_tujuan',                     'dt' => 6),
        array( 'db' => 'tgl_awal_kegiatan',                 'dt' => 7),
        array( 'db' => 'tgl_akhir_kegiatan',                'dt' => 8),
        array( 'db' => 'rincian_kegiatan',                  'dt' => 9),
        array( 'db' => 'keterangan_sumber_dana_kegiatan',   'dt' => 10)
        
       );
          $where = "instansi.id = data_diri.instansi_pemohon AND sub_instansi.id_sub_instansi = data_diri.sub_instansi_pemohon 
          AND data_diri.no_aplikasi_data_diri = surat_unit_utama.no_aplikasi AND data_diri.no_aplikasi_data_diri = surat_undangan.no_aplikasi";
        $this->l_datatable->get_table_join_6($table1, $table2, $table3, $table4, $table5, $key, $column, $where);
      break;
     
      case 'terima_data':
        $id = $this->input->post('key');
        $data = array('status' => '1', 'keterangan_status' => 'Diterima');
        $this->m_admin->upd_data_pdln($id, $data);
      break;

      case 'tolak_data':
        $id = $this->input->post('key');
        $data = array('status' => '2', 'keterangan_status' => 'Ditolak');
        $this->m_admin->upd_data_pdln($id, $data);
      break;

      case 'pending_data':
          $id = $this->input->post('key');
          $data = array('status' => '3', 'keterangan_status' => 'Dipending');
          $this->m_admin->upd_data_pdln($id, $data);
      break;

      case 'edit_data_pdln':
        //$no_aplikasi = $this->input->post('key');       
        /*echo gettype($id);*/
        //echo "masuk data 22";
        /*echo "<pre>";
        print_r($_POST);
        echo "</pre>";*/
        $no_aplikasi = $this->input->post('no_aplikasi_data_diri',TRUE);
        $id_data_diri = $this->input->post('id_data_diri',TRUE);
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
                $upload_data = $this->upload->data();
              }
              $nama_file=$upload_data['file_name'];
              /*$upload_data = $this->upload->data();
              $data_ary = array(
                  'title'     => $upload_data['client_name'],
                  'file'      => $upload_data['file_name'],
                  'width'     => $upload_data['image_width'],
                  'height'    => $upload_data['image_height'],
                  'type'      => $upload_data['image_type'],
                  'size'      => $upload_data['file_size'],
                  'date'      => time(),
              );*/
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

        $result_datadiri= $this->m_admin->update_data_diri($table1,$datadiri,$id_user,$no_aplikasi,$id_data_diri);
        $result_surat_unit_utama= $this->m_admin->update_surat($table2,$data_surat_unit_utama,$id_user,$no_aplikasi);
        $result_surat_undangan= $this->m_admin->update_surat($table3,$data_surat_undangan,$id_user,$no_aplikasi);
        /*echo "<pre>";   
        print_r($datadiri);
        echo "</pre>";
        if ($result_surat_bpkln == TRUE) {      
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

        $data_surat_bpkln = array(
        'no_surat_setneg' => $this->input->post('no_surat_setneg',TRUE),
        'tgl_surat_setneg' => $this->input->post('tgl_surat_setneg',TRUE),
        'data_lain_bpkln' => $this->input->post('data_lain_bpkln', TRUE)      
        );

        $datadiri= array('status' =>'Diterima');

        $nama_file="";
        if (!empty($_FILES['upl_files1']['name'])) {
          if (!$this->upload->do_upload('upl_files1')) {
            $error = $this->upload->display_errors();            
          }
          else {
             $upload_data = $this->upload->data();
          }
            $nama_file=$upload_data['file_name'];
            $data_surat_bpkln['surat_setneg'] = $nama_file;
        }        


        $no_aplikasi = $this->input->post('key');
        $id_user = $_SESSION['logged']['id_user'];
        $table = 'surat_bpkln';
        $table1= 'data_diri';     
        
        // if (!empty($datasurat)) {
        //  $this->m_admin->update_surat($table,$datasurat,$id_user,$no_aplikasi);
        // }

        $this->m_admin->update_surat($table,$data_surat_bpkln,$id_user,$no_aplikasi);
        $this->m_admin->update_status($table1,$datadiri,$id_user,$no_aplikasi);    
      break;

      case 'tambah_surat_bpkln':
        
        $config['upload_path'] = FCPATH.'../files/surat_bpkln/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $result_array = array();
        
        $no_aplikasi = $this->input->post('key');
        $table = 'surat_bpkln';
        $id_user = $_SESSION['logged']['id_user']; 

        $data = array(
          'no_surat_bpkln_setneg' => $this->input->post('no_surat_bpkln_setneg',TRUE),          
          'tgl_surat_bpkln_setneg' => $this->input->post('tgl_surat_bpkln_setneg',TRUE),          
          'no_surat_bpkln_kemlu' => $this->input->post('no_surat_bpkln_kemlu',TRUE),
          'tgl_surat_bpkln_kemlu' => $this->input->post('tgl_surat_bpkln_kemlu',TRUE)         
         );          
        
        for ($i = 1; $i <= 2; $i++) {
          $nama_file="";
          if (!empty($_FILES['upl_file'.$i]['name'])) {
            if (!$this->upload->do_upload('upl_file'.$i)) {
              $error = $this->upload->display_errors();
            }
            else {
              $upload_data = $this->upload->data();
            }
            $nama_file=$upload_data['file_name'];
          }
            if($i==1){
              $data['surat_bpkln_setneg']=$nama_file;
           }else if($i==2){
              $data['surat_bpkln_kemlu']=$nama_file;
          }
        }
        //insert                
          

        $result= $this->m_admin->update_surat($table,$data,$id_user,$no_aplikasi);       
        if ($result == TRUE) {
          $this->session->set_flashdata('error_message', $no_aplikasi);
          //$this->session->set_flashdata('error_message', 'Data Pengguna Berhasil di Tambahkan ke Dalam Database');
          //buat redirect ke halaman lain
          $this->session->set_flashdata('content','step3');
          redirect('home');
        }else {
        redirect('home');
        }
      break;

      case 'upload':
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
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
