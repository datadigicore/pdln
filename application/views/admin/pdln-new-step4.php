<!--main content start-->
  <section id="main-content">
    <section class="wrapper site-min-height">
      <div class="row mt">
        <div class="col-lg-12">
          <div class="form-panel">
            
            <!-- Steping Wizard -->
            <ul class="nav nav-wizard">
              <li><a><span class="badge">1</span> Data Diri</a></li>
              <li><a><span class="badge">2</span> Surat Instansi Asal</a></li>
              <li><a><span class="badge">3</span> Surat Unit Utama</a></li>
              <li class="active"><a><span class="badge">4</span> Surat Undangan Kunjungan</a></li>
            </ul>
            
            <form class="form-horizontal style-form" method="post" action="<?php echo base_url();?>admin">
              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">No Surat</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="no_surat_udangan" placeholder="No Surat">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Tanggal Surat</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="tgl_surat_undangan" placeholder="Tanggal Surat">
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
                    <input type="text" class="form-control" name="negara" placeholder="Negara Tujuan">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Waktu Kegiatan</label>
                  <div class="col-sm-4">
                    <input type="date" class="form-control" name="waktu_awal_kegiatan" placeholder="Waktu Mulai Kegiatan">
                  </div>
                  <div class="col-sm-4">
                    <input type="date" class="form-control" name="waktu_akhir_kegiatan" placeholder="Waktu Akhir Kegiatan">
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
                    <select class="form-control" name="sumber_dana">
                        <option>APBN (Pemerintah)</option>
                        <option>Pribadi (Dana Sendiri)</option>
                        <option>Pengundang (Sponsor)</option>
                        <option>Lain-lain (Seniman )</option>
                    </select>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Keterangan Sumber Dana</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="ket_sumber_dana" placeholder="Mis : Beasiswa Ditjen Dikti">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Surat Undangan</label>
                  <div class="col-sm-9">
                    <input type="file" name="surat_undangan" class="form-control" style="width: auto;">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Surat Perjanjian</label>
                  <div class="col-sm-9">
                    <input type="file" name="surat_perjanjian" class="form-control" style="width: auto;">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label"></label>
                  <div class="col-sm-9">
                    <!--<button type="submit" class="btn pdln-btn">Lanjut</button>-->
                    <input type="hidden" name="content" value="view">
                    <a class="btn pdln-btn" title="Add new item" onclick="$(this).closest('form').submit()"> Selesai</a>
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