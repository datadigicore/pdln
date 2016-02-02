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
Nomor<?php for ($i=0; $i < 14; $i++) { echo "&nbsp;"; }?>: <?php for ($i=0; $i < 20; $i++) { echo "&nbsp;"; } echo "/A1.3/LN/".date("Y") ?><br>
Lampiran<?php for ($i=0; $i < 10; $i++) { echo "&nbsp;"; }?>: Satu Berkas<br>
Hal<?php for ($i=0; $i < 20; $i++) { echo "&nbsp;"; }?>: Permohonan paspor dinas, <i>exit permit</i><br>
<?php for ($i=0; $i < 28; $i++) { echo "&nbsp;"; }?>dan rekomendasi visa<br>
<br>
Yth. Direktur Konsuler<br>
Kementerian Luar Negeri<br>
Jln. Taman Pejambon 6<br>
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
  <td width="56%"></td>
  <td>
    A.n Kepala Biro Perencanaan dan Kerjasama Luar Negeri<br>
    Kepala Bagian Kerjasama Luar Negeri<br>
    u.b<br>
    <br><br><br>
    Yaya Sutarya<br>
    NIP. 197401122000121005
  </td>
  </tr>
</table>
<br><br>
Tembusan :<br>
Karo Perencanaan dan KLN