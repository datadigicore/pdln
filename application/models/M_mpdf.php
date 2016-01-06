<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class m_mpdf extends CI_Model {
	function __construct() {
        parent::__construct();
	}
	function get_pdln() {
    $no_surat_bpkln_setneg = $this->input->post('no_surat_bpkln_setneg');
		// $query = $this->db->get_where('data_diri');
    $query = $this->db->select('*');
    $query = $this->db->from('data_diri, instansi, sub_instansi, surat_undangan, surat_unit_utama');
    $query = $this->db->where('data_diri.instansi_pemohon = instansi.id');
    $query = $this->db->where('data_diri.sub_instansi_pemohon = sub_instansi.id_sub_instansi');
    $query = $this->db->where('data_diri.no_aplikasi_data_diri = surat_undangan.no_aplikasi');
    $query = $this->db->where('data_diri.no_aplikasi_data_diri = surat_unit_utama.no_aplikasi');
    //$query = $this->db->where('surat_bpkln.no_aplikasi' = $no_surat_bpkln_setneg);
    $query = $this->db->get();
		return $query->row_array();
	}

    function get_pdln_user($data) {
    $no_surat_bpkln_setneg = $this->input->post('no_surat_bpkln_setneg');
    $query = $this->db->select('*');
    $query = $this->db->from('data_diri, instansi, sub_instansi, surat_undangan, surat_unit_utama');
    $query = $this->db->where('data_diri.id_data_diri = '.$data);
    $query = $this->db->where('data_diri.instansi_pemohon = instansi.id');
    $query = $this->db->where('data_diri.sub_instansi_pemohon = sub_instansi.id_sub_instansi');
    $query = $this->db->where('data_diri.no_aplikasi_data_diri = surat_undangan.no_aplikasi');
    $query = $this->db->where('data_diri.no_aplikasi_data_diri = surat_unit_utama.no_aplikasi');
    $query = $this->db->get();
        return $query->row_array();
    }
    function get_pdln_user2($data,$no_aplikasi) {
    $no_surat_bpkln_setneg = $this->input->post('no_surat_bpkln_setneg');
    $query = $this->db->select('*');
    $query = $this->db->from('data_diri, instansi, sub_instansi, surat_undangan, surat_unit_utama');
    $query = $this->db->where('data_diri.id_data_diri = '.$data);
    $query = $this->db->where('data_diri.instansi_pemohon = instansi.id');
    $query = $this->db->where('data_diri.sub_instansi_pemohon = sub_instansi.id_sub_instansi');
    $query = $this->db->where($no_aplikasi.' = surat_undangan.no_aplikasi');
    $query = $this->db->where($no_aplikasi.' = surat_unit_utama.no_aplikasi');
    $query = $this->db->get();
        return $query->result_array();
    }

    function get_pdln_cari() {
    $no_surat_bpkln_setneg = $this->input->post('no_surat_bpkln_setneg');
    print_r($no_surat_bpkln_setneg);
        // $query = $this->db->get_where('data_diri');
    $query = $this->db->select('*');
    $query = $this->db->from('data_diri, instansi, sub_instansi, surat_undangan, surat_unit_utama,surat_bpkln');
    $query = $this->db->where('data_diri.instansi_pemohon = instansi.id');
    $query = $this->db->where('data_diri.sub_instansi_pemohon = sub_instansi.id_sub_instansi');
    $query = $this->db->where('data_diri.no_aplikasi_data_diri = surat_undangan.no_aplikasi');
    $query = $this->db->where('data_diri.no_aplikasi_data_diri = surat_bpkln.no_aplikasi');
    $query = $this->db->where('surat_bpkln.no_aplikasi = 2');
    $query = $this->db->get();
        return $query->row_array();
    }

    function get_pdln_more($no_aplikasi) {
        // $query = $this->db->get_where('data_diri');
    $query = $this->db->select('*');
    $query = $this->db->from('data_diri, instansi, sub_instansi, surat_undangan, surat_unit_utama');
    $query = $this->db->where('data_diri.instansi_pemohon = instansi.id');
    $query = $this->db->where('data_diri.sub_instansi_pemohon = sub_instansi.id_sub_instansi');
    $query = $this->db->where($no_aplikasi.' = surat_undangan.no_aplikasi');
    $query = $this->db->where($no_aplikasi.' = surat_unit_utama.no_aplikasi');
    $query = $this->db->get();
        return $query->result_array();

    }
} 
