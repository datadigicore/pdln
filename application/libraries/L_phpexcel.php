<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
// Provided By Yohanes Christomas Daimler
// Email yohanes.christomas@gmail.com
class l_phpexcel {
    function l_phpexcel() {
        $CI = & get_instance();
    }
    function load($param=NULL) {
        include_once APPPATH.'/third_party/phpexcel/Classes/PHPExcel.php';
        return new PHPExcel($param);
    }
}