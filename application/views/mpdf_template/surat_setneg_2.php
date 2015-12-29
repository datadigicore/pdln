<table width="100%">
  <tr>
	<td align="left" valign="middle"><img width="14%" src="<?php echo base_url()?>img/logo_kemdikbud.jpg"></td>
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
<table>
  <tr>
      <td width="15%">Nomor</td>
      <td width="5%" align="right">:</td>
      
  </tr>
  <tr>
      <td>Lampiran</td>
      <td align="right">:</td>
      <td>2(Dua) Berkas</td>
  </tr>
  <tr>
      <td valign="top">Hal</td>
      <td align="right" valign="top">:</td>
      <td><?php echo $query['0']['rincian_kegiatan']?>
  </tr>
</table>
<br>
Yth. Kepala Biro Kerja Sama Teknik Luar Negeri<br>
Kementerian Sekretariat Luar Negeri RI<br>
Jalan Veteran No. 17 - 18<br>
Jakarta
<br>
<p align="justify" style="margin-bottom:0;">Sesuai dengan surat Kepala Pusat Pengembangan dan Perlindungan,
Badan Pengembangan dan Pembinaan Bahasa Kemendikbud No. 0690/I2/LN/2015, tanggal 3 September 2015, hal seperti tersebut pada Pokok surat,
dengan hormat mohon persetujuan Saudara atas penugasan <?php echo count(array_filter($query)); ?> orang staf teknis dari Pengembangan dan Perlindungan, Badan Pengembangan
dan Pembinaan Bahasa yakni:
<br>
<br>
<table>
  <?php $i = 1; foreach ($query as $item) { ?>
    <tr>
      <td style="padding-left:20px"><?php echo $i; ?></td>
      <td><?php echo $item['nama_pemohon']; ?>,</td>
      <td>/</td>
      <td>NIP. <?php echo $item['nip_pemohon']?></td>
    </tr>  
  <?php $i++; } ?>
</table><br>
<?php echo $query['0']['rincian_kegiatan']?> mulai tanggal <?php echo date("d", strtotime($query[0]['tgl_awal_kegiatan']));?> s.d. <?php echo strftime("%d %B %Y", strtotime($query[0]['tgl_akhir_kegiatan']));?>. Sumber pendanaan dari <?php echo $query[0]['sumber_dana_kegiatan']?>.
<p align="justify">Sebagai bahan pertimbangan Saudara, bersama ini kami lampirkan berkas yang berkaitan dengan penugasan mereka.<br><br>
Atas perhatian dan kerjasama Saudara, kami ucapkan terima kasih.</p>
<br>
<table width="100%">
  <tr>
    <td width="56%"></td>
    <td>
      A.n Sekretaris Jenderal<br>
      Kepala Biro Perencanaan dan Kerjasama Luar Negeri<br>
      <br><br><br>
      Suharti<br>
      NIP. 196410191990021001<br>
    </td>
  </tr>
</table>
<br>
Tembusan Yth.:<br>
1. Sesjen Kemdikbud;<br>
2. Kepala Bidang Pengembangan dan Pembinaan Bahasa.