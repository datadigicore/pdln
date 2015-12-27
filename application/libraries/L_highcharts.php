<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
// Provided By Yohanes Christomas Daimler
// Email yohanes.christomas@gmail.com
class l_highcharts {
    function l_highcharts() {
        $CI = & get_instance();
    }
    function load($param=NULL) {
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
        if ($params == NULL) {
            $param = '"en-GB-x","A4","","",10,10,10,10';
        }
        return new mPDF($param);
    }
}