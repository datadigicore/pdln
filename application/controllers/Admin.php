<?php
// Provided By Yohanes Christomas Daimler
// Email yohanes.christomas@gmail.com
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
  public function __construct() {
	parent::__construct();
    $this->load->library('l_datatable');
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
		$this->load->view('admin/pdln-new-step1');
	  break;
	  case 'step2':
	  	$this->load->view('admin/pdln-new-step2');
	  break;
	  case 'step3':
	  	$this->load->view('admin/pdln-new-step3');
	  break;
	  case 'step4':
	  	$this->load->view('admin/pdln-new-step4');
	  break;
	  case 'view':
	  	$this->load->view('admin/pdln-view');
	  break;
	  case 'proses_permohonan':
	  	$this->load->view('admin/proses_permohonan');
	  	break;
	  case 'cetak_surat':
	  	$this->load->view('admin/cetak_surat');
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