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
  <?php $i = 1; foreach ($query as $item) { if ($i == 1) { ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $item['nama_pemohon']; ?><br>NIP. <?php echo $item['nip_pemohon']; ?></td>
      <td><?php echo $item['jabatan_pemohon']; ?></td>
      <td rowspan="<?php echo count(array_filter($query)); ?>"><?php echo $item['rincian_kegiatan']; ?></td>
      <td rowspan="<?php echo count(array_filter($query)); ?>"><?php echo date("d", strtotime($item['tgl_awal_kegiatan']));?> s.d. <?php echo strftime("%d %B %Y", strtotime($item['tgl_akhir_kegiatan']));?></td>
      <td rowspan="<?php echo count(array_filter($query)); ?>"><?php echo $item['negara_tujuan']; ?></td>
    </tr>
  <?php } else { ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $item['nama_pemohon']; ?><br>NIP. <?php echo $item['nip_pemohon']; ?></td>
        <td><?php echo $item['jabatan_pemohon']; ?></td>
      </tr>
  <?php } $i++; }?>
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