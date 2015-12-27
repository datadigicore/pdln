<table width="100%">
  <tr>
	<td align="left" valign="middle"><img width="14%" src="<?php echo base_url()?>images/logo_kemdikbud.jpg"></td>
	<td align="center" valign="middle" width="85%">
	  <h3>KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN</h3>
	  Jalan Jenderal Sudirman, Senayan, Jakarta 10270<br>
	  Telepon: 021-5711144 (Hunting)<br>
	  Laman: www.kemdikbud.go.id<br>
	</td>
  </tr>
</table>
<hr/>
<br><br>
<p align="center">Lampiran Surat Sekretaris Kementerian Sekretariat Negara<br>
No: B-24488 / Kemensetneg/Setmen/KTLN/LN.00.00/12/2015<br>
Tanggal <?php echo strftime("%d %B %Y", strtotime(date("Y-m-d")));?>
Daftar Peserta</p>
<br>
<table border="1" cellpadding="8" style="border-collapse:collapse;">
  <tr>
    <th>No</th>
    <th>Nama/NIP</th>
    <th>Jabatan</th>
    <th>Kegiatan</th>
    <th>Jangka Waktu</th>
    <th>Tempat Penugasan</th>
  </tr>
  <tr>
    <td>1. </td>
    <td>Mellyanti<br>NIP. <?php echo $nip_pemohon?></td>
    <td><?php echo $jabatan_pemohon?></td>
    <td rowspan="4">Sebagai petugas pelaksana Ujian Kompetensi Guru</td>
    <td rowspan="4"><?php echo date("d", strtotime($waktu_awal_kegiatan));?> s.d. <?php echo strftime("%d %B %Y", strtotime($waktu_akhir_kegiatan));?></td>
    <td rowspan="4">Den Haag Belanda</td>
  </tr>
  <tr>
    <td>2. </td>
    <td>Etna Betty<br>NIP. <?php echo $nip_pemohon?>332132</td>
    <td>Perencanaan Kebutuhan</td>
  </tr>
  <tr>
    <td>3. </td>
    <td>Agus Subarianto<br>NIP. <?php echo $nip_pemohon?>54352</td>
    <td>Perencanaan Kebutuhan</td>
  </tr>
  <tr>
    <td>4. </td>
    <td>Firdaus Syah<br>NIP. <?php echo $nip_pemohon?>567722</td>
    <td>Perencanaan Kebutuhan</td>
  </tr>
</table>
<br>
<table width="100%">
  <tr>
    <td width="56%"></td>
    <td>
      A.n Sekretaris Kementerian Sekretariat Negara<br>
      Kepala Biro Kerja Sama Teknik Luar Negeri<br>
      <br><br><br>
      Rika Kiswardani<br>
    </td>
  </tr>
</table>