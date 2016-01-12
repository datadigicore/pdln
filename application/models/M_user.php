<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class m_user extends CI_Model {
	function __construct() {
        parent::__construct();
	}
    function get_golongan() {   
    $this->db->select('jabatan_pemohon,count(jabatan_pemohon)');
    $this->db->from('data_diri');
    $this->db->group_by("jabatan_pemohon");
    $query = $this->db->get();
    return $query->result_array();
    }
	function select_data_pdln() {		
    $this->db->select('*');
    $this->db->from('data_diri, instansi, sub_instansi, surat_undangan, surat_unit_utama');
    $this->db->where('data_diri.instansi_pemohon = instansi.id');
    $this->db->where('data_diri.sub_instansi_pemohon = sub_instansi.id_sub_instansi');
    $this->db->where('data_diri.no_aplikasi_data_diri = surat_undangan.no_aplikasi');
    $this->db->where('data_diri.no_aplikasi_data_diri = surat_unit_utama.no_aplikasi');
    $query = $this->db->get();
    return $query->result_array();
	}
  function select_export_negara($data) {   
    $this->db->select('*');
    $this->db->from('data_diri, instansi, sub_instansi, surat_undangan, surat_unit_utama');
    $this->db->where('data_diri.instansi_pemohon = instansi.id');
    $this->db->where('data_diri.sub_instansi_pemohon = sub_instansi.id_sub_instansi');
    $this->db->where('data_diri.no_aplikasi_data_diri = surat_undangan.no_aplikasi');
    $this->db->where('data_diri.no_aplikasi_data_diri = surat_unit_utama.no_aplikasi');
    $this->db->where('surat_undangan.negara_tujuan = "'.$data.'"');
    $query = $this->db->get();
    return $query->result_array();
  }
  function select_export_sumber($data) {   
    $this->db->select('*');
    $this->db->from('data_diri, instansi, sub_instansi, surat_undangan, surat_unit_utama');
    $this->db->where('data_diri.instansi_pemohon = instansi.id');
    $this->db->where('data_diri.sub_instansi_pemohon = sub_instansi.id_sub_instansi');
    $this->db->where('data_diri.no_aplikasi_data_diri = surat_undangan.no_aplikasi');
    $this->db->where('data_diri.no_aplikasi_data_diri = surat_unit_utama.no_aplikasi');
    $this->db->where('surat_undangan.sumber_dana_kegiatan = "'.$data.'"');
    $query = $this->db->get();
    return $query->result_array();
  }
  function select_export_pekerjaan($data) {   
    $this->db->select('*');
    $this->db->from('data_diri, instansi, sub_instansi, surat_undangan, surat_unit_utama');
    $this->db->where('data_diri.instansi_pemohon = instansi.id');
    $this->db->where('data_diri.sub_instansi_pemohon = sub_instansi.id_sub_instansi');
    $this->db->where('data_diri.no_aplikasi_data_diri = surat_undangan.no_aplikasi');
    $this->db->where('data_diri.no_aplikasi_data_diri = surat_unit_utama.no_aplikasi');
    $this->db->where('data_diri.pekerjaan_pemohon = "'.$data.'"');
    $query = $this->db->get();
    return $query->result_array();
  }
  function select_export_kegiatan($data) {   
    $this->db->select('*');
    $this->db->from('data_diri, instansi, sub_instansi, surat_undangan, surat_unit_utama');
    $this->db->where('data_diri.instansi_pemohon = instansi.id');
    $this->db->where('data_diri.sub_instansi_pemohon = sub_instansi.id_sub_instansi');
    $this->db->where('data_diri.no_aplikasi_data_diri = surat_undangan.no_aplikasi');
    $this->db->where('data_diri.no_aplikasi_data_diri = surat_unit_utama.no_aplikasi');
    $this->db->where('surat_undangan.kategori_kegiatan = "'.$data.'"');
    $query = $this->db->get();
    return $query->result_array();
  }
  function get_grafik_sumber() {   
    $this->db->select('surat_undangan.sumber_dana_kegiatan');
    $this->db->from('data_diri, instansi, sub_instansi, surat_undangan, surat_unit_utama');
    $this->db->where('data_diri.instansi_pemohon = instansi.id');
    $this->db->where('data_diri.sub_instansi_pemohon = sub_instansi.id_sub_instansi');
    $this->db->where('data_diri.no_aplikasi_data_diri = surat_undangan.no_aplikasi');
    $this->db->where('data_diri.no_aplikasi_data_diri = surat_unit_utama.no_aplikasi');
    $query = $this->db->get();
    return $query->result_array();
  }
  function get_grafik_pekerjaan() {   
    $this->db->select('data_diri.pekerjaan_pemohon');
    $this->db->from('data_diri, instansi, sub_instansi, surat_undangan, surat_unit_utama');
    $this->db->where('data_diri.instansi_pemohon = instansi.id');
    $this->db->where('data_diri.sub_instansi_pemohon = sub_instansi.id_sub_instansi');
    $this->db->where('data_diri.no_aplikasi_data_diri = surat_undangan.no_aplikasi');
    $this->db->where('data_diri.no_aplikasi_data_diri = surat_unit_utama.no_aplikasi');
    $query = $this->db->get();
    return $query->result_array();
  }
  function get_grafik_kegiatan() {   
    $this->db->select('surat_undangan.kategori_kegiatan');
    $this->db->from('data_diri, instansi, sub_instansi, surat_undangan, surat_unit_utama');
    $this->db->where('data_diri.instansi_pemohon = instansi.id');
    $this->db->where('data_diri.sub_instansi_pemohon = sub_instansi.id_sub_instansi');
    $this->db->where('data_diri.no_aplikasi_data_diri = surat_undangan.no_aplikasi');
    $this->db->where('data_diri.no_aplikasi_data_diri = surat_unit_utama.no_aplikasi');
    $query = $this->db->get();
    return $query->result_array();
  }
  function get_grafik_negara() {   
    $this->db->select('negara_tujuan');
    $this->db->from('surat_undangan');
    // $this->db->from('data_diri, instansi, sub_instansi, surat_undangan, surat_unit_utama');
    // $this->db->where('data_diri.instansi_pemohon = instansi.id');
    // $this->db->where('data_diri.sub_instansi_pemohon = sub_instansi.id_sub_instansi');
    // $this->db->where('data_diri.no_aplikasi_data_diri = surat_undangan.no_aplikasi');
    // $this->db->where('data_diri.no_aplikasi_data_diri = surat_unit_utama.no_aplikasi');
    $query = $this->db->get();
    return $query->result_array();
  }
  function get_grafik_nip() {   
    $this->db->select('data_diri.nip_pemohon');
    $this->db->from('data_diri, instansi, sub_instansi, surat_undangan, surat_unit_utama');
    $this->db->where('data_diri.instansi_pemohon = instansi.id');
    $this->db->where('data_diri.sub_instansi_pemohon = sub_instansi.id_sub_instansi');
    $this->db->where('data_diri.no_aplikasi_data_diri = surat_undangan.no_aplikasi');
    $this->db->where('data_diri.no_aplikasi_data_diri = surat_unit_utama.no_aplikasi');
    $query = $this->db->get();
    return $query->result_array();
  }
  function select_export_nip() {   
    $this->db->select('*');
    $this->db->from('data_diri, instansi, sub_instansi, surat_undangan, surat_unit_utama');
    $this->db->where('data_diri.instansi_pemohon = instansi.id');
    $this->db->where('data_diri.sub_instansi_pemohon = sub_instansi.id_sub_instansi');
    $this->db->where('data_diri.no_aplikasi_data_diri = surat_undangan.no_aplikasi');
    $this->db->where('data_diri.no_aplikasi_data_diri = surat_unit_utama.no_aplikasi');
    $query = $this->db->get();
    return $query->result_array();
  }
  function select_export_tanggal($data) {   
    
    $this->db->select('*');
    $this->db->from('data_diri, instansi, sub_instansi, surat_undangan, surat_unit_utama');
    $this->db->where('data_diri.instansi_pemohon = instansi.id');
    $this->db->where('data_diri.sub_instansi_pemohon = sub_instansi.id_sub_instansi');
    $this->db->where('data_diri.no_aplikasi_data_diri = surat_undangan.no_aplikasi');
    $this->db->where('data_diri.no_aplikasi_data_diri = surat_unit_utama.no_aplikasi');
    $this->db->where('surat_undangan.tgl_awal_kegiatan >= "'.$data['waktu_awal'].'"');
    $this->db->where('surat_undangan.tgl_akhir_kegiatan <= "'.$data['waktu_akhir'].'"');
    $query = $this->db->get();
    return $query->result_array();
  }
  function get_grafik_waktu($data) {
    $this->db->select('data_diri.nama_pemohon');
    $this->db->from('data_diri, instansi, sub_instansi, surat_undangan, surat_unit_utama');
    $this->db->where('data_diri.instansi_pemohon = instansi.id');
    $this->db->where('data_diri.sub_instansi_pemohon = sub_instansi.id_sub_instansi');
    $this->db->where('data_diri.no_aplikasi_data_diri = surat_undangan.no_aplikasi');
    $this->db->where('data_diri.no_aplikasi_data_diri = surat_unit_utama.no_aplikasi');
    $this->db->where('surat_undangan.tgl_awal_kegiatan >= "'.$data['awal'].'"');
    $this->db->where('surat_undangan.tgl_akhir_kegiatan <= "'.$data['akhir'].'"');
    $query = $this->db->get();
    return $query->result_array();
  }
  function list_user_surat() {   
    $query = $this->db->select('*');
    $query = $this->db->from('data_diri, instansi, sub_instansi, surat_undangan');
    $query = $this->db->where('data_diri.instansi_pemohon = instansi.id');
    $query = $this->db->where('data_diri.sub_instansi_pemohon = sub_instansi.id_sub_instansi');
    $query = $this->db->where('data_diri.no_aplikasi_data_diri = surat_undangan.no_aplikasi');
    $query = $this->db->get();
    return $query->result_array();
  }

  function list_user_surat_cari($no_surat_bpkln_setneg) {   
    $query = $this->db->select('*');
    $query = $this->db->from('data_diri, instansi, sub_instansi, surat_undangan, surat_bpkln');
    $query = $this->db->where('data_diri.instansi_pemohon = instansi.id');
    $query = $this->db->where('data_diri.sub_instansi_pemohon = sub_instansi.id_sub_instansi');
    $query = $this->db->where('data_diri.no_aplikasi_data_diri = surat_undangan.no_aplikasi');
    $query = $this->db->where('data_diri.no_aplikasi_data_diri = surat_bpkln.no_aplikasi');
    $query = $this->db->where('no_surat_bpkln_setneg="'.$no_surat_bpkln_setneg.'"');
    $query = $this->db->get();
    return $query->result_array();
  }
	function get_data_pdln($table,$no_aplikasi) {		
		$query = $this->db->get_where($table,$no_aplikasi);
		return $query->row();
	}

    function get_data_diri($table,$no_aplikasi,$id_data_diri) {       
        $query = $this->db->get_where($table,$no_aplikasi,$id_data_diri);
        return $query->row();
    }

	function add_data_pdln($data) {
		$query = $this->db->insert('data_pdln', $data);
		return $query;
	}
	function del_user($id) {
		$query = $this->db->delete('user', array('id_user'=>$id));
		return $query;
	}
	function upd_data_pdln($id,$data) {
		/*print_r($data);*/
		$this->db->where('id', $id);		
		$query = $this->db->update('data_pdln', $data);		
		return $query;
	}

	function select_table(){
		$data   =   array(
                'data_diri.no_aplikasi', 
                'surat_unit_utama.no_aplikasi', 
                'surat_undangan.no_aplikasi', 
                'surat_bpkln.no_aplikasi',
                'instansi.id',
                'sub_instansi.id_instansi',
		);
		$this->db->select($data);
		$this->db->from('data_diri');
		$this->db->join('instansi', 'instansi.id=data_diri.instansi_pemohon');
		$this->db->join('sub_instansi', 'sub_instansi.id_sub_instansi=data_diri.sub_instansi_pemohon');
		$this->db->join('surat_unit_utama','data_diri.no_aplikasi=surat_unit_utama.no_aplikasi','inner');
		$this->db->join('surat_undangan', 'data_diri.no_aplikasi=surat_unit_utama.no_aplikasi','inner');
		
		$this->db->order_by('no_aplikasi','DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result_array();
	}

	function select_data($table) {
		$data = array();
        $query = $this->db->get($table);
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        //print_r($data);
        return $data;
	}
	function select_data_sub_instansi(){
		$data = array();
        $query = $this->db->get('sub_instansi');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        //print_r($data);
        return $data;	
	}

	function get_data_sub_instansi($id) {
		$query = $this->db->get_where('sub_instansi',array('id_instansi' => $id));
		return $query->result_array();
	}
  function get_country() {
    $query = $this->db->get('countries');
    return $query->result_array();
  }
  function get_nip() {
    $query = $this->db->get('data_diri');
    return $query->result_array();
  }
  function get_sumber() {
    $this->db->select('sumber_dana_kegiatan');
    $this->db->from('surat_undangan');
    $this->db->group_by("sumber_dana_kegiatan");
    $query = $this->db->get();
    return $query->result_array();
  }
  function get_pekerjaan() {
    $this->db->select('pekerjaan_pemohon');
    $this->db->from('data_diri');
    $this->db->group_by("pekerjaan_pemohon");
    $query = $this->db->get();
    return $query->result_array();
  }
  function get_kegiatan() {
    $this->db->select('kategori_kegiatan');
    $this->db->from('surat_undangan');
    $this->db->group_by("kategori_kegiatan");
    $query = $this->db->get();
    return $query->result_array();
  }
	function max_no_aplikasi(){
		$this->db->select_max('no_aplikasi_data_diri');
		$query = $this->db->get('data_diri');
		return $query->row();
	}

	function update_surat($table,$data,$id_user,$no_aplikasi){
		$query = $this->db->update($table, $data, array('id_user'=> $id_user,'no_aplikasi' => $no_aplikasi));
		return $query;
	}

	function update_data_diri($table,$data,$id_user,$no_aplikasi,$id_data_diri){
		$query = $this->db->update($table, $data, array('id_data_diri' => $id_data_diri, 'id_user'=> $id_user,'no_aplikasi_data_diri' => $no_aplikasi));
		return $query;
	}

    function update_status($table,$data,$id_user,$no_aplikasi){
        $query = $this->db->update($table, $data, array('id_user'=> $id_user,'no_aplikasi_data_diri' => $no_aplikasi));
        return $query;
    }

	function joindatadiri($id_data_diri){
		$query = $this->db->query('SELECT * FROM data_diri a, instansi b , sub_instansi c WHERE a.instansi_pemohon=b.id AND c.id_sub_instansi = a.sub_instansi_pemohon AND a.id_data_diri='.$id_data_diri);
		return $query->row();
	}

    function joinsurat($no_aplikasi){
        $query = $this->db->query('SELECT * FROM surat_unit_utama a, instansi b , sub_instansi c WHERE a.instansi_unit_utama=b.id AND c.id_sub_instansi = a.sub_instansi_unit_utama AND a.no_aplikasi='.$no_aplikasi);
        return $query->row();
    }
} 
