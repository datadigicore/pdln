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
      <td><?php for ($i=0; $i < 20; $i++) { echo "&nbsp;"; } echo "/A1.3/LN/".date("Y") ?></td>
  </tr>
  <tr>
      <td>Lampiran</td>
      <td align="right">:</td>
      <td>Satu Berkas</td>
  </tr>
  <tr>
      <td valign="top">Hal</td>
      <td align="right" valign="top">:</td>
      <td>Persetujuan Perjalanan Dinas Luar Negeri</td>
  </tr>
</table>
<br>
Yth. Kepala Biro Kerja Sama Teknik Luar Negeri<br>
Kementerian Sekretariat Negara RI<br>
Jalan Veteran III No. 9<br>
Jakarta<br>
<p align="justify" style="margin-bottom:0;">Sehubungan dengan surat Kepala Biro Perencanaan dan Kerja Sama Luar Negeri,
Kementerian Pendidikan dan Kebudayaan nomor 100707/A1.3/LN/2015 tanggal 4 Desember 2015 hal seperti tersebut pada pokok surat,
dengan hormat mohon persetujuan Saudara atas penugasan <?php echo count(array_filter($query)); ?> orang peserta dari <?php echo $query[0]['instansi_pengundang'] ?> 
yang akan mengikuti kegiatan <?php echo $query[0]['rincian_kegiatan'] ?>, di <i><?php echo $query[0]['negara_tujuan'] ?></i>, mulai tanggal 
<?php echo strftime("%d", strtotime($query[0]['tgl_awal_kegiatan']))." s.d. ".strftime("%d %B %Y", strtotime($query[0]['tgl_akhir_kegiatan']));?> 
atas biaya <?php echo $query[0]['sumber_dana_kegiatan'] ?>, <?php echo $query[0]['keterangan_sumber_dana_kegiatan'] ?>.
<br>
<p align="justify">Sebagai bahan pertimbangan Saudara, bersama ini dilampirkan berkas yang berkaitan dengan penugasan mereka.</p>
<p align="justify">Atas perhatian dan kerja sama Saudara, kami menyampaikan terima kasih.</p><br>
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
<br><br>
Tembusan Yth.:<br>
1. Sesjen Kemdikbud<br>
2. Dir. Ditendik Ditjen Dikti<br>
3. Dir. Konsuler, Kemenlu<br>