<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class m_mpdf extends CI_Model {
	function __construct() {
        parent::__construct();
	}
	function get_pdln() {
		// $query = $this->db->get_where('data_diri');
    $query = $this->db->select('*');
    $query = $this->db->from('data_diri, instansi, sub_instansi, surat_undangan, surat_unit_utama');
    $query = $this->db->where('data_diri.instansi_pemohon = instansi.id');
    $query = $this->db->where('data_diri.sub_instansi_pemohon = sub_instansi.id_sub_instansi');
    $query = $this->db->where('data_diri.no_aplikasi_data_diri = surat_undangan.no_aplikasi');
    $query = $this->db->where('data_diri.no_aplikasi_data_diri = surat_unit_utama.no_aplikasi');
    $query = $this->db->get();
		return $query->row_array();
	}
} 
