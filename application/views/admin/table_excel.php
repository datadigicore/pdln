<table>
    <thead>
            <tr>
                <th colspan="17">Rekapitulasi Data</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th colspan="17">Pejabat, Pegawai, Dosen, Guru dan Mahasiswa/Siswa ke Luar Negeri</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th colspan="17">Tahun Kegiatan <?php echo date("Y"); ?><br><br></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
</table>
<table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Surat Universitas</th>
                <th>Tanggal Surat Universitas</th>
                <th>Asal Surat Unit Kemdikbud</th>
                <th>Nomor Surat Unit Kemdikbud</th>
                <th>Tanggal Surat Unit Kemdikbud</th>
                <th>Nomor Surat BPKLN</th>
                <th>Tanggal Surat BPKLN</th>
                <th>Nomor Surat Setneg</th>
                <th>Tanggal Surat Setneg</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Lembaga</th>
                <th>Kegiatan/Acara</th>
                <th>Tempat Kegiatan</th>
                <th>Waktu Kegiatan</th>
                <th>Sumber Dana</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; foreach ($query as $item) { ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $item['perihal_surat_unit_utama']; ?></td>
                <td><?php echo $item['tgl_surat_undangan']; ?></td>
                <td><?php echo $item['instansi_unit_utama']; ?></td>
                <td><?php echo $item['no_surat_unit_utama']; ?></td>
                <td><?php echo $item['tgl_surat_unit_utama']; ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><?php echo $item['nama_pemohon']; ?></td>
                <td><?php echo $item['jabatan_pemohon']; ?></td>
                <td><?php echo $item['nama_instansi']; ?></td>
                <td><?php echo $item['rincian_kegiatan']; ?></td>
                <td><?php echo $item['negara_tujuan']; ?></td>
                <td><?php echo $item['tgl_awal_kegiatan']; ?></td>
                <td><?php echo $item['sumber_dana_kegiatan']; ?></td>
            </tr>
            <?php $i++; } ?>
        </tbody>
    </table>