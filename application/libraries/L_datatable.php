<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
// Provided By Yohanes Christomas Daimler
// Email yohanes.christomas@gmail.com
class l_datatable {
    function __construct() {
        $this->ci =& get_instance();
    }
    function get_table($tabel, $kunci, $kolom){
        $table = $tabel;
        $primaryKey = $kunci;
        $columns = $kolom;
        $sql_details = array(
            'user' => $this->ci->db->username,
            'pass' => $this->ci->db->password,
            'db'   => $this->ci->db->database,
            'host' => $this->ci->db->hostname
        ); 
        require( 'ssp.class.php' );
        echo json_encode(
            SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
        );        
    }
    function get_table_join_6($table1, $table2, $table3, $table4, $table5, $table6, $primaryKey, $columns, $where){
        $sql_details = array(
            'user' => $this->ci->db->username,
            'pass' => $this->ci->db->password,
            'db'   => $this->ci->db->database,
            'host' => $this->ci->db->hostname
        ); 
        require( 'ssp.class.php' );
        echo json_encode(
            SSP::more_complex( $_POST, $sql_details, $table1, $table2, $table3, $table4, $table5, $table6, $primaryKey, $columns, $where)
        );        
    }
}
