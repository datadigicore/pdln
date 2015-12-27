<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class l_toexcel {
    public function excel_export($nama) {
      header("Content-type: application/vnd.ms-excel");
      header("Content-Disposition: attachment; filename=".$nama.".xls");
      echo ' <html xmlns:o="urn:schemas-microsoft-com:office:office"
          xmlns:x="urn:schemas-microsoft-com:office:excel"
          xmlns="http://www.w3.org/TR/REC-html40">
          <head>
          <title>Perjalanan Dinas Luar Negeri</title>
          <META HTTP-EQUIV="Content-Type" Content="application/vnd.ms-excel; charset=utf-8">
          <style>
          @page
          { mso-page-orientation:landscape; margin:.25in .25in .5in .20in; mso-header-margin:.5in; mso-footer-margin:.25in; mso-footer-data:"&R&P of &N"; mso-horizontal-page-align:center;}
          </style>
          <!--[if gte mso 9]><xml>
          <x:ExcelWorkbook>
          <x:ExcelWorksheets>
          <x:ExcelWorksheet>
          <x:Name>Laporan PDLN</x:Name>
          <x:WorksheetOptions>
          <x:Print>
          <x:ValidPrinterInfo/>
          </x:Print>
          </x:WorksheetOptions>
          </x:ExcelWorksheet>
          </x:ExcelWorksheets>
          </x:ExcelWorkbook>
          </xml><![endif]-->';
    }
}