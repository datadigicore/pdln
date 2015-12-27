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
<br>
<table>
  <tr>
      <td>Nomor</td>
      <td align="right">:</td>
      <td>/A2.3/I.N/2015</td>
      <td align="right" width="36%">20 April 2015</td>
  </tr>
  <tr>
      <td>Lampiran</td>
      <td align="right">:</td>
      <td>1(Satu) Berkas</td>
  </tr>
  <tr>
      <td valign="top">Hal</td>
      <td align="right" valign="top" width="20px">:</td>
      <td>Permohonan Paspor Dinas, Exit Permit dan Rekomendasi Visa</td>
  </tr>
</table>
<br><br>
Yth. Direktur Konsuler<br>
Kementerian Luar Negeri RI<br>
Jalan Taman Pejambon 6<br>
Jakarta<br>
<br>
<p align="justify">Bersama ini kami mohon dengan hormat bantuan Saudara untuk memberikan Paspor Dinas, Exit Permit dan Rekomendasi Visa:</p>
<p><u>Indriani Dewi Anggraini, M.Hum</u> NIP. 196605231990021001<br>Deputi Direktur Administrasi, SEAMEO QITEP in Language</p>
<p align="justify">Akan menghadiri 6<sup>th</sup> Annual International Conference on TESOL di SEAMEO RETRAC, Ho Chi Minh City, Vietnam pada tanggal 13 s.d. 15 Agustus 2015. Sumber pendanaan dari Manajemen Pelayanan Pendidikan SEAMOLEC.</p>
<p align="justify">Sebagai bahan pertimbangan Saudara, bersama ini dilampirkan daftar riwayat hidup yang bersangkutan.</p>
<p>Atas perhatian dan kerjasama Saudara, kami ucapkan terima kasih.</p>
<br>
<table width="100%">
  <tr>
	<td width="56%"></td>
	<td>
	  A.n Kepala Biro Perencanaan dan Kerjasama Luar Negeri<br>
	  Kepala Bagian Kerjasama Luar Negeri<br>
	  <br><br><br>
	  Evy Margaretha<br>
	  NIP. 197903302005012002<br>
	</td>
  </tr>
</table>
<br><br>
Tembusan Yth.:<br>
1. Sesjen Kemdikbud<br>
2. Dir Konsuler Kemlu<br>
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
$mpdf->Output('filename.pdf','F');
$mpdf->Output();

exit;
//==============================================================
//==============================================================
//==============================================================
//==============================================================
//==============================================================


?>