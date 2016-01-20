<table>
  <tr>
  <td align="left" valign="middle" width="10%"><img style="margin-top:15px;margin-left:15px" width="90" height="90" src="<?php echo base_url()?>img/logo_kemdikbud.jpg"></td>
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
<p>Nomor<?php for ($i=0; $i < 14; $i++) { echo "&nbsp;"; }?>: <?php for ($i=0; $i < 20; $i++) { echo "&nbsp;"; } echo "/A1.3/LN/".date("Y") ?><br>
Lampiran<?php for ($i=0; $i < 10; $i++) { echo "&nbsp;"; }?>: <br>
Tanggal<?php for ($i=0; $i < 13; $i++) { echo "&nbsp;"; }?>: </p><br>
<p align="center" style="text-transform: uppercase;font-weight: bold;">Daftar Peserta <?php echo $query[0]['rincian_kegiatan'] ?><br>
Tanggal <?php echo strftime("%d", strtotime($query[0]['tgl_awal_kegiatan']))." S.D. ".strftime("%d %B %Y", strtotime($query[0]['tgl_akhir_kegiatan']));?></p>
<br>
<table>
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
      <td align="center"><?php echo $i; ?></td>
      <td><?php echo $item['nama_pemohon']; ?><br>NIP. <?php echo $item['nip_pemohon']; ?></td>
      <td><?php echo $item['jabatan_pemohon']; ?></td>
      <td rowspan="<?php echo count(array_filter($query)); ?>"><?php echo $item['rincian_kegiatan']; ?></td>
      <td rowspan="<?php echo count(array_filter($query)); ?>"><?php echo date("d", strtotime($item['tgl_awal_kegiatan']));?> s.d. <?php echo strftime("%d %B %Y", strtotime($item['tgl_akhir_kegiatan']));?></td>
      <td rowspan="<?php echo count(array_filter($query)); ?>"><?php echo $item['negara_tujuan']; ?></td>
    </tr>
  <?php } else { ?>
    <tr>
        <td align="center"><?php echo $i; ?></td>
        <td><?php echo $item['nama_pemohon']; ?><br>NIP. <?php echo $item['nip_pemohon']; ?></td>
        <td><?php echo $item['jabatan_pemohon']; ?></td>
      </tr>
  <?php } $i++; }?>
</table>
<br>
<table width="100%">
  <tr>
    <td width="60%"></td>
    <td>
      A.n Sekretaris Jenderal<br>
      Kepala Biro Perencanaan dan <br>
      Kerja Sama Teknik Luar Negeri<br>
      <br><br><br>
      Suharti<br>
      NIP. 196911211992032002
    </td>
  </tr>
</table>