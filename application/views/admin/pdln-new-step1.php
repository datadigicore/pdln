<!--main content start-->
  <section id="main-content">
    <section class="wrapper site-min-height">
      <div class="row mt">
        <div class="col-lg-12">
          <div class="form-panel">
            
            <!-- Steping Wizard -->
            <ul class="nav nav-wizard">
              <li class="active"><a><span class="badge">1</span> Data Diri</a></li>
              <li><a><span class="badge">2</span> Surat Instansi Asal</a></li>
              <li><a><span class="badge">3</span> Surat Unit Utama</a></li>
              <li><a><span class="badge">4</span> Surat Undangan Kunjungan</a></li>
            </ul>

            <form class="form-horizontal style-form" method="post" action="<?php echo base_url();?>admin">
              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Nama</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" placeholder="Nama">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Pekerjaan</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="pekerjaan">
                        <option>PNS</option>
                        <option>Swasta</option>
                        <option>Lainnya</option>
                    </select>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">NIP</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" name="nip" placeholder="NIP">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">No. Telepon</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" name="telp" placeholder="No. Telepon">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">No. Passport</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="no_passport" placeholder="No. Passport">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Tanggal Habis Masa Berlaku Passport</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="tgl_passport">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Instansi</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="instansi" placeholder="Instansi">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Jabatan</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="jabatan" placeholder="Jabatan">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Curiculum Vitae</label>
                  <div class="col-sm-9">
                    <input type="file" name="cv" class="form-control" style="width: auto;">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Foto</label>
                  <div class="col-sm-9">
                    <input type="file" name="foto" class="form-control" style="width: auto;">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Kartu Pegawai</label>
                  <div class="col-sm-9">
                    <input type="file" name="kartu_pegawai" class="form-control" style="width: auto;">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Surat Tugas</label>
                  <div class="col-sm-9">
                    <input type="file" name="surat_tugas" class="form-control" style="width: auto;">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label"></label>
                  <div class="col-sm-9">
                    <!--<button type="submit" class="btn pdln-btn">Lanjut</button>-->
                      <input type="hidden" name="content" value="step2">
                      <a class="btn pdln-btn" title="Add new item" onclick="$(this).closest('form').submit()"> Lanjut</a>
                    <!-- <a href="<?php echo $base_url;?>pdln-new-step2.php" class="btn pdln-btn">Lanjut</a> -->
                  </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </section><! --/wrapper -->
  </section><!-- /MAIN CONTENT -->
<!--main content end-->