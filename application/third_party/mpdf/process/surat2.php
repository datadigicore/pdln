<?php


define('_MPDF_URI','../'); 	// must be  a relative or absolute URI - not a file system path



$html = '
<table width="100%">
  <tr>
	<td align="left" valign="middle"><img width="14%" src="logo_kemdikbud.jpg"></td>
	<td align="center" valign="middle" width="85%">
	  <h3>KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN</h3>
	  Jalan Jenderal Sudirman, Senayan, Jakarta 10270<br>
	  Telepon: 021-5725681, 5725055, Fax 57900083<br>
	  Laman: www.kemdikbud.go.id<br>
	</td>
  </tr>
</table>
<hr/>
<br>
<table>
  <tr>
      <td>Nomor</td>
      <td align="right">:</td>
      <td>/A2.3/I.N/2015</td>
      <td align="right" width="36%">30 November 2015</td>
  </tr>
  <tr>
      <td>Lampiran</td>
      <td align="right">:</td>
      <td>1(Satu) Berkas</td>
  </tr>
  <tr>
      <td valign="top">Hal</td>
      <td align="right" valign="top" width="20px">:</td>
      <td>Permohonan Persetujuan Penugasan ke Kuala Lumpur, Malaysia<br>
      A.n. Hendry Murti Susanto
      </td>
  </tr>
</table>
<br>
Yth. Kepala Biro Kerja Sama Teknik Luar Negeri<br>
Kementerian Sekretariat Luar Negeri RI<br>
Jalan Veteran No. 17 - 18<br>
Jakarta
<br>
<p align="justify">Merujuk surat Kepala Perwakilan RI Kuala Lumpur nomor 99255/PS-ITO/2015 tanggal 27 November 2015, perihal tersebut pada pokok surat dengan hormat kami mengharapkan persetujuan Saudara atas penugasan ke luar negeri bagi:</p>
<table width="100%" border="1" style="border-collapse: collapse;">
  <tr>
    <td align="center">No</td>
    <td align="center">Nama</td>
    <td align="center">NIP</td>
    <td align="center">Jabatan / Instansi</td>
  </tr>
  <tr>
    <td align="center">1.</td>
    <td align="center">Hendry Murti Susanto</td>
    <td align="center">1921200041410041</td>
    <td align="center">Eksportir Umum / ERIENSI BPOM</td>
  </tr>
  <tr>
    <td align="center">2.</td>
    <td align="center">Yuana Yurita</td>
    <td align="center">1921200012344049</td>
    <td align="center">Eksportir Umum / ERIENSI BPOM</td>
  </tr>
  <tr>
    <td align="center">3.</td>
    <td align="center">Wulan Cahyaningsih</td>
    <td align="center">1921201238667909</td>
    <td align="center">Eksportir Umum / ERIENSI BPOM</td>
  </tr>
  <tr>
    <td align="center">4.</td>
    <td align="center">Nazaruddin</td>
    <td align="center">1921200012344049</td>
    <td align="center">Eksportir Umum / ERIENSI BPOM</td>
  </tr>
</table>
<br>
yang akan bertugas sebagai petugas pelaksana Ujian Kompetensi Guru (UKG) offline di Sekolah Indonesia Kuala Lumpur pada tanggal 10 s.d. 13 Desember 2015.<br>
Adapun Kegiatan yang akan dilaksanakan yaitu:
<table width="100%">
  <tr>
    <td align="center" valign="top">1.</td>
    <td align="justify" valign="middle" width="95%">Melaksanakan Uji Komptensi guru (UKG) secara offline bagi 35 (tiga puluh lima) guru pada Sekolah Indonesia Kuala Lumpur;</td>
  </tr>
  <tr>
    <td align="center" valign="top">2.</td>
    <td align="justify" valign="middle" width="95%">Melaksanakan pemetaan kebutuhan guru dan tenaga kependidikan sesuai dengan jumlah rombongan belajar (rombel) yang dimiliki oleh Sekolah Indonesia Kuala Lumpur.</td>
  </tr>
</table>
Atas perhatian dan kerjasama Saudara, kami ucapkan terima kasih.<br>
<br>
<table width="100%">
  <tr>
	<td width="56%"></td>
	<td>
	  A.n Kepala Biro Perencanaan dan Kerjasama Luar Negeri<br>
	  <br><br><br>
	  Faiturahman<br>
	  NIP. 196410191990021001<br>
	</td>
  </tr>
</table>
Tembusan Yth.:<br>
1. Sesjen Kemdikbud;<br>
2. Atase Pendidikan KBRI Kuala Lumpur;<br>
3. Kepala Sekolah SI Kuala Lumpur
';

//==============================================================
//==============================================================
//==============================================================

include("../mpdf.php");

// $mpdf=new mPDF('','A4','',''); 
$mpdf=new mPDF('','A4','','',30,20,20,25); 
$mpdf->progbar_altHTML = '<html><body>
	<div style="margin-top: 5em; text-align: center; font-family: Verdana; font-size: 12px;"><img style="vertical-align: middle" src="loading.gif" /> Membuat Document. Mohon Tunggu Sejenak...</div>';
$mpdf->StartProgressBarOutput();

$mpdf->mirrorMargins = 1;
$mpdf->SetDisplayMode('fullpage','two');
$mpdf->list_number_suffix = ')';

$mpdf->debug  = true;

$mpdf->WriteHTML($html);

$mpdf->Output();

exit;
//==============================================================
//==============================================================
//==============================================================
//==============================================================
//==============================================================


?>