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
<table>
  <tr>
      <td width="15%">Nomor</td>
      <td width="5%" align="right">:</td>
      <td width="65%"><?php echo $no_surat_asal?></td>
      <td width="25%" align="right"><?php echo strftime("%d %B %Y", strtotime(date("Y-m-d")));?></td>
  </tr>
  <tr>
      <td>Lampiran</td>
      <td align="right">:</td>
      <td>1(Satu) Berkas</td>
  </tr>
  <tr>
      <td valign="top">Hal</td>
      <td align="right" valign="top">:</td>
      <td><?php echo $keterangan_kegiatan?><br>
      <?php echo $nama_pemohon?></td>
  </tr>
</table>
<br>
Yth. Sekretaris Menteri Sekretariat Negara<br>
Kementerian Sekretariat Negera RI<br>
di Jakarta
<br>
<p align="justify" style="margin-bottom:0;">Sesuai dengan surat Lembar Disposisi Menteri Pendidikan dan Kebudayaan RI,
Nomor 03643/ASLI/MENT/2015, tanggal 9 Oktober 2015, serta merujuk surat Kedutaan Besar Republik Indonesia Riyadh, Saudi Arabia,
Nomor : 098/atdik/XII/2015, tanggal 1 Desember 2015, perihal seperti tersebut pada pokok surat, dengan hormat mohon persetujuan
Saudara, bagi:
<br>
<br>
<table>
  <tr>
    <td style="padding-left:20px">1. </td>
    <td><?php echo $nama_pemohon?>, / </td>
    <td>NIP. <?php echo $nip_pemohon?></td>
  </tr>
  <tr>
    <td style="padding-left:20px">2. </td>
    <td><?php echo $nama_pemohon?>, / </td>
    <td>NIP. <?php echo $nip_pemohon?></td>
  </tr>
</table><br>
<?php echo $keterangan_kegiatan?> mulai tanggal <?php echo date("d", strtotime($waktu_awal_kegiatan));?> s.d. <?php echo strftime("%d %B %Y", strtotime($waktu_akhir_kegiatan));?>. Sumber pendanaan dari <?php echo $sumber_dana_kegiatan?>.
<p align="justify">Sebagai bahan pertimbangan Saudara, bersama ini kami lampirkan berkas yang berkaitan dengan penugasan mereka.<br><br>
Atas perhatian dan kerjasama Saudara, kami ucapkan terima kasih.</p>
<br>
<table width="100%">
  <tr>
    <td width="70%"></td>
    <td>
      A.n Sekretaris Jenderal<br>
      <br>
      <br><br><br>
      Didik Suhardi<br>
      NIP. 196410191990021001<br>
    </td>
  </tr>
</table>
<br>
Tembusan Yth.:<br>
1. Bapak Mendikbud RI (Sebagai Laporan);<br>
2. Karo PKLN Kemendikbud RI.