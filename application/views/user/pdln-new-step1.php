<!--main content start-->
  <section id="main-content">
    <section class="wrapper site-min-height">
      <div class="row mt">
        <div class="col-lg-12">
          <div class="form-panel">
            
            <!-- Steping Wizard -->
            <ul class="nav nav-wizard">
              <li class="active"><a><span class="badge">1</span> Data Diri</a></li>              
              <li><a><span class="badge">2</span> Surat Unit Utama</a></li>
              <li><a><span class="badge">3</span> Surat Undangan Kunjungan</a></li>
            </ul>

            <?php if (isset($error_message)){?>
              <div class="alert alert-<?php echo $alert_type;?> fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Perhatian!</strong><br><?php echo $error_message; ?>
              </div>
            <?php } ?>            
            

            <form class="form-horizontal style-form" method="post" action="<?php echo base_url();?>home/process" enctype="multipart/form-data">
            <input type="hidden" name="manage" value="uji_upload_file">
            <!-- <input type="hidden" name="id_user" value="2"> -->
            <!-- <form class="form-horizontal style-form" method="post" action="<?php echo base_url();?>home"> -->
              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">No Aplikasi</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" id="no_aplikasi" name="no_aplikasi" placeholder="No Aplikasi" min="0" max="999999999999999999">
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Nama</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama_pemohon" placeholder="Nama">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Pekerjaan</label>
                  <div class="col-sm-9">
                    <select class="form-control" id="pekerjaan_pemohon" name="pekerjaan_pemohon">
                        <option value="">---Pilih Pekerjaan---</option>
                        <option value="PNS">PNS</option>
                        <option value="Swasta">Swasta</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                      <input type="text" class="form-control" id="pekerjaan_lain" name="pekerjaan_lain" placeholder="Pekerjaan">
                  </div>
              </div>

              <div class="form-group" id="nip">
                  <label class="col-lg-3 col-sm-3 control-label">NIP</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" id="nip_pemohon" name="nip_pemohon" placeholder="NIP" min="0" max="999999999999999999">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">No. Telepon</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" name="no_hp_pemohon" placeholder="No. Telepon">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">No. Passport</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id = "sub_instansi_pemohon" name="no_passport_pemohon" placeholder="No. Passport">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Tanggal Habis Masa Berlaku Passport</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="tgl_passport_pemohon">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Instansi</label>
                  <div class="col-sm-9">
                    <select class="form-control" id="instansi_pemohon" name="instansi_pemohon">
                        <!-- query dari db -->
                        <option value="">---Pilih Instansi Unit Utama---</option>
                        <?php foreach ($instansi as $key => $value) {
                          echo '<option value="'.$value['id'].'">'.$value['nama_instansi'].'</option>';                          
                        }?>
                        <option value="Lainnya">Lain-lain</option>
                    </select>

                    <select class="form-control" id="sub_instansi_pemohon" name="sub_instansi_pemohon" >
                        <!-- query dari db -->
                        <option value="">---Pilih Sub Instansi Unit Utama---</option>
                        <option value="lainnya">Lain-lain</option>
                    </select>
                    <div id="result"></div>
                   
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Jabatan</label>
                  <div class="col-sm-9">
                    <select class="form-control" id="jabatan_pemohon" name="jabatan_pemohon" onchange="jabatan_pemohona(this.value)">
                        <option value="">---Pilih Jabatan---</option>
                        <option value="Eselon 1">Eselon 1</option>
                        <option value="Eselon 2">Eselon 2</option>
                        <option value="Eselon 3">Eselon 3</option>
                        <option value="Eselon 4">Eselon 4</option>
                        <option value="Auditor">Auditor</option>
                        <option value="Fungsional">Fungsional</option>
                        <option value="Pembantu Pimpinan">Pembantu Pimpinan</option>
                        <option value="Lainnya">Lain-lain</option>
                    </select>
                    <input type="text" class="form-control" id="jabatan_lain" name="jabatan_lain" placeholder="Jabatan">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Curiculum Vitae</label>
                  <div class="col-sm-9">
                    <input type="file" name="upl_files1" class="form-control" style="width: auto;">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Foto</label>
                  <div class="col-sm-9">
                    <input type="file" name="upl_files2" class="form-control" style="width: auto;">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Kartu Pegawai</label>
                  <div class="col-sm-9">
                    <input type="file" name="upl_files3" class="form-control" style="width: auto;">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Surat Tugas</label>
                  <div class="col-sm-9">
                    <input type="file" name="upl_files4" class="form-control" style="width: auto;">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label"></label>
                  <div class="col-sm-9">
                      <a class="btn pdln-btn mb" title="Tambah data baru" onclick="$(this).closest('form').submit()"><i class="fa fa-plus-square"></i> Tambah Data Lain</a>
                      <a class="btn pdln-btn mb" title="Lanjut" onclick="$(this).closest('form').submit()"> Lanjut</a>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><! --/wrapper -->
  </section><!-- /MAIN CONTENT -->
