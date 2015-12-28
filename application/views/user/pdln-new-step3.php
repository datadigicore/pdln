<!--main content start-->
  <section id="main-content">
    <section class="wrapper site-min-height">
      <div class="row mt">
        <div class="col-lg-12">
          <div class="form-panel">
            
            <!-- Steping Wizard -->
            <ul class="nav nav-wizard">
              <li><a><span class="badge">1</span> Data Diri</a></li>
              <li><a><span class="badge">2</span> Surat Unit Utama</a></li>
              <li class="active"><a><span class="badge">4</span> Surat Undangan Kunjungan</a></li>
            </ul>
            
            <form class="form-horizontal style-form" method="post" action="<?php echo base_url();?>home/process" enctype="multipart/form-data">
            
               <?php if (isset($error_message)){?>
                <input type="hidden" class="form-control" name="no_aplikasi" value="<?php echo $error_message['no_aplikasi'];?>">
              <?php } ?> 

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">No Surat Undangan</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="no_surat_undangan" placeholder="No Surat">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Tanggal Surat Undangan</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="tgl_surat_undangan" placeholder="Tanggal Surat">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Instansi Pengundang</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="instansi_pengundang" placeholder="Instansi Unit Utama">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Negara Tujuan</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="negara_tujuan" placeholder="Negara Tujuan">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Waktu Kegiatan</label>
                  <div class="col-sm-4">
                    <input type="date" class="form-control" name="tgl_awal_kegiatan" placeholder="Waktu Mulai Kegiatan">
                  </div>
                  <div class="col-sm-4">
                    <input type="date" class="form-control" name="tgl_akhir_kegiatan" placeholder="Waktu Akhir Kegiatan">
                  </div>
              </div> 

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Kategori Kegiatan</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="kategori_kegiatan">
                        <option value="APBN">Workshop</option>
                        <option value="Pribadi">Seminar</option>
                        <option value="Pengundang">Belajar</option>
                        <option value="lain-lain">Confference</option>
                        <option value="lain-lain">Pertemuan</option>
                        <option value="lain-lain">Pelatihan</option>
                    </select>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Rincian Kegiatan</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="rincian_kegiatan" placeholder="Rincian_Kegiatan">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Sumber Dana</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="sumber_dana_kegiatan">
                        <option value="APBN">APBN (Pemerintah)</option>
                        <option value="Pribadi">Pribadi (Dana Sendiri)</option>
                        <option value="Pengundang">Pengundang (Sponsor)</option>
                        <option value="lain-lain">Lain-lain (Seniman )</option>
                    </select>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Keterangan Sumber Dana</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="keterangan_sumber_dana_kegiatan" placeholder="Mis : Beasiswa Ditjen Dikti">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Surat Undangan</label>
                  <div class="col-sm-9">
                    <input type="file" name="upl_files1" class="form-control" style="width: auto;">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Surat Perjanjian</label>
                  <div class="col-sm-9">
                    <input type="file" name="upl_files2" class="form-control" style="width: auto;">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label"></label>
                  <div class="col-sm-9">
                    <!--<button type="submit" class="btn pdln-btn">Lanjut</button>-->
                    <input type="hidden" name="manage" value="add_surat_undangan">
                    <a class="btn pdln-btn" title="Selesai" onclick="$(this).closest('form').submit()"> Selesai</a>
                    <!-- <a href="<?php echo $base_url;?>pdln-view.php" class="btn pdln-btn">Selesai</a> -->
                  </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </section><! --/wrapper -->
  </section><!-- /MAIN CONTENT -->
<!--main content end-->