<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class m_user extends CI_Model {
	function __construct() {
        parent::__construct();
	}
	function select_data_pdln() {		
		$query = $this->db->select('data_pdln');
		return $query;
	}
	function get_data_pdln($id) {		
		$query = $this->db->get_where('data_pdln',$id);
		return $query->row();;
	}
	function add_data_pdln($data) {
		$query = $this->db->insert('data_pdln', $data);
		return $query;
	}
	function del_user($id) {
		$query = $this->db->delete('user', array('id'=>$id));
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
		$this->db->join('surat_unit_utama','data_diri.no_aplikasi=surat_unit_utama.no_aplikasi','inner');
		$this->db->join('surat_undangan', 'data_diri.no_aplikasi=surat_unit_utama.no_aplikasi','inner');
		$this->db->join('sub_instansi', 'instansi.id=sub_instansi.id_instansi','inner');
		$this->db->order_by('no_aplikasi','DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result_array();
	}

	function select_data() {
		$data = array();
        $query = $this->db->get('instansi');
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
		$this->db->select('*');
		$this->db->from('sub_instansi');		
		$this->db->where(array('id_instansi' => $id));
		$query = $this->db->get();
		if ($query->num_rows() > 0) 
		{
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
		return $query;
	}
} 
