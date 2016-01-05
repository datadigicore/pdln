<table width="100%">
  <tr>
  <td align="left" valign="middle"><img width="14%" src="<?php base_url();?>img/logo_kemdikbud.jpg"></td>
  <td align="center" valign="middle" width="85%">
    <h3>KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN</h3>
    Jalan Jenderal Sudirman, Senayan, Jakarta 10270<br>
    Telepon: 021-5711144 (Hunting)<br>
    Laman: www.kemdikbud.go.id<br>
  </td>
  </tr>
</table>
<hr/>
<br>
<br>
<table>
  <tr>
      <td width="15%">Nomor </td>
      <td width="5%" align="right">:</td>
      <td><?php for ($i=0; $i < 20; $i++) { echo "&nbsp;"; } echo "/A1.3/LN/".date("Y") ?></td>
  </tr>
  <tr>
      <td>Lampiran</td>
      <td align="right">:</td>
      <td>1(Satu) Berkas</td>
  </tr>
  <tr>
      <td valign="top">Hal</td>
      <td align="right" valign="top">:</td>
      <td><?php echo $rincian_kegiatan?><br>
      <?php echo $nama_pemohon?></td>
  </tr>
</table>
<br>
Yth. Direktur Konsuler<br>
Kementerian Luar Negeri<br>
Jln. Taman Pejambon 6<br>
Jakarta<br>
<p align="justify">Dengan hormat kami mohon dengan hormat bantuan Saudara agar dapat kiranya diberikan paspor dinas, <i>exit permit</i> dan rekomendasi visa bagi:</p>
<p><?php echo $nama_pemohon?> NIP. <?php echo $nip_pemohon?><br>
<?php echo $nama_instansi?>, <?php echo $nama_sub_instansi?>, <?php echo $jabatan_pemohon?>.</p>
<p align="justify">Untuk mengikuti <?php echo $rincian_kegiatan?> pada tanggal <?php echo date("d", strtotime($tgl_awal_kegiatan));?> S.D. <?php echo strftime("%d %B %Y", strtotime($tgl_akhir_kegiatan));?>. Sumber pendanaan dari <?php echo $sumber_dana_kegiatan?>.</p>
<p>Atas perhatian dan kerja sama Saudara, kami menyampaikan terima kasih.</p>
<br>
<table width="100%">
  <tr>
  <td width="56%"></td>
  <td>
    A.n Kepala Biro Perencanaan dan Kerjasama Luar Negeri<br>
    Kepala Bagian Kerjasama Luar Negeri<br>
    u.b<br>
    <br><br><br>
    Evy Margaretha<br>
    NIP. 197903302005012002<br>
  </td>
  </tr>
</table>
<br><br>
Tembusan :<br>
Karo Perencanaan dan KLN