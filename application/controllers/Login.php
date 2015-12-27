<?php
// Provided By Yohanes Christomas Daimler
// Email yohanes.christomas@gmail.com
defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('m_login');
	}
	public function index() {
		$content = $this->input->post('content');
		switch ($content) {
			case 'process':
			if(isset($this->session->userdata['logged'])) {
				redirect('home');
			}
			else {
				$this->form_validation->set_rules('usernames', 'Username', 'required');
				$this->form_validation->set_rules('passwords', 'Password', 'required');
				if ($this->form_validation->run() == FALSE) {
					$data = array(
						'error_message' => 'Masukkan Username dan Password',
						'alert_type' => 'warning'
						);
					$this->load->view('login',$data);
				}
				else {
					$usercheck = $this->input->post('usernames', TRUE);
					if (strpos($usercheck,'@') !== false && strpos($usercheck,'.com') !== false) {
						$data['email']= $usercheck;
					}
					else {
						$data['username']= $usercheck;	
					}
					$data['password'] = md5($this->input->post('passwords', TRUE));
					$result = $this->m_login->get_login($data);
					if ($result == TRUE) {
						$session_data = array(
							'nama' => $result->nama,
							'username' => $result->username,
							'status' => $result->status,
							'level' => $result->level,
							'email' => $result->email,
							'alamat' => $result->alamat,
							'notelp' => $result->no_telp
							);
						switch ($session_data['status']) {
							case '1':
							$this->session->set_userdata('logged', $session_data);
							if ($session_data['level'] == 1) {
								redirect('admin');
							}
							else {
								redirect('home');
							}	
							break;
							default:
							$data = array(
								'error_message' => 'Akun Anda Belum Aktif, Hubungi Administrator',
								'alert_type' => 'danger'
								);
							$this->load->view('login', $data);
							break;
						}
					}
					else {
						$data = array(
							'error_message' => 'Username dan Password Tidak Sesuai',
							'alert_type' => 'danger'
							);
						$this->load->view('login', $data);
					}
				}
			}
			break;
			case 'logout':
			$this->session->sess_destroy();
			$this->session->unset_userdata('logged');
			$data = array(
				'error_message' => 'Anda Telah Mengakhiri Sesi Ini',
				'alert_type' => 'success'
				);
			$this->load->view('login', $data);
			break;
			case 'create':
			$this->load->view('create');
			break;
			case 'addnew':
			$data = array(
				'nama' => $this->input->post('fullname'),
				'alamat' => $this->input->post('address'),
				'no_telp' => $this->input->post('phones', TRUE),
				'email' => $this->input->post('emails', TRUE),
				'username' => $this->input->post('usernames', TRUE),
				'password' => md5($this->input->post('passwords', TRUE))
				);
			$result = $this->m_login->add_user($data);
			if ($result == TRUE) {
				$data = array(
					'error_message' => 'Anda Berhasil Melakukan Registrasi',
					'alert_type' => 'success'
					);
				$this->load->view('login',$data);
			}
			else {
				$data = array(
					'error_message' => 'Terjadi Kesalahan Pada Input Data',
					'alert_type' => 'danger'
					);
				$this->load->view('login',$data);
			}
			break;
			default:
			if(isset($this->session->userdata['logged'])) {
				if ($_SESSION['logged']['level'] == 1) {
					redirect('admin');
				}
				else {
					redirect('home');
				}	
			}
			else {
				if (!empty($this->session->flashdata('error_message'))) {
					$data = array(
						'error_message' => 'Anda Harus Login Terlebih Dahulu',
						'alert_type' => 'danger'
						);
					$this->load->view('login',$data);
				}
				else{
					$this->load->view('login');
				}
			}
			break;
		}
	}
}
