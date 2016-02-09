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
              <li class="active"><a><span class="badge">3</span> Surat Undangan Kunjungan</a></li>
            </ul>
            
            <form class="form-horizontal style-form" method="post" action="<?php echo base_url();?>home/process" enctype="multipart/form-data">
            
              <?php if (isset($error_message)){?>
                <input type="hidden" class="form-control" name="no_aplikasi" value="<?php echo $error_message;?>">
              <?php } ?> 

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Surat Undangan Kunjungan</h3>
                </div>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="col-lg-3 col-sm-3 control-label">No Surat Undangan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="no_surat_undangan" placeholder="No Surat">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 col-sm-3 control-label">Tanggal Surat Undangan</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input class="form-control hasDatepicker" name="tgl_surat_undangan" readonly="1" style="cursor:pointer" placeholder="Tanggal Surat Undangan">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 col-sm-3 control-label">Instansi Pengundang</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="instansi_pengundang" placeholder="Instansi Pengundang">
                    </div>
                  </div>
                </div>
              </div>
                
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Informasi Kegiatan</h3>
                </div>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="col-lg-3 col-sm-3 control-label">Negara Tujuan</label>                  
                    <div class="col-sm-9">
                      <select class="form-control" id="negara_tujuan" name="negara_tujuan">
                          <!-- query dari db -->
                          <option value="">---Pilih Negara Tujuan---</option>
                          <?php foreach ($countries as $key => $value) {
                            echo '<option value="'.$value['country_name'].'">'.$value['country_name'].'</option>';                          
                          }?>
                          <!-- <option value="Lainnya">Lain-lain</option> -->
                      </select>                  
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 col-sm-3 control-label">Waktu Kegiatan</label>
                    <div class="col-sm-4">
                      <div class="input-group">
                        <input class="form-control hasDatepicker" name="tgl_awal_kegiatan" readonly="1" style="cursor:pointer" placeholder="Mulai">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                      </div>
                    </div>
                    <div class="col-sm-1"><p class="text-center" style="margin: 5px 0;">s/d</p></div>
                    <div class="col-sm-4">
                      <div class="input-group">
                        <input class="form-control hasDatepicker" name="tgl_akhir_kegiatan" readonly="1" style="cursor:pointer" placeholder="Berakhir">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <label class="col-lg-3 col-sm-3 control-label">Kategori Kegiatan</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="kategori_kegiatan">
                          <option value="-">---Pilih Kegiatan---</option>
                          <option value="Workshop">Workshop</option>
                          <option value="Seminar">Seminar</option>
                          <option value="Belajar">Belajar</option>
                          <option value="Conferrence">Konferensi</option>
                          <option value="Pertemuan">Pertemuan</option>
                          <option value="Pelatihan">Pelatihan</option>
                          <option value="Lainnya">Lainnya</option>
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
                          <option value="-">---Pilih Sumber Dana---</option>
                          <option value="APBN">APBN (Pemerintah)</option>
                          <option value="Pribadi">Pribadi (Dana Sendiri)</option>
                          <option value="Pengundang">Pengundang (Sponsor)</option>
                          <option value="lain-lain">Lain-lain</option>
                      </select>
                    </div>
                  </div>

                <div class="form-group">
                    <label class="col-lg-3 col-sm-3 control-label">Keterangan Sumber Dana</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="keterangan_sumber_dana_kegiatan" placeholder="Mis : JICA dan Kemendikbud">
                    </div>
                </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Dokumen Pendukung</h3>
                </div>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="col-lg-3 col-sm-3 control-label">Surat Undangan</label>
                    <div class="col-sm-9">
                      <input type="file" name="upl_files1" class="form-control" onchange="ValidateSingleInput(this);">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 col-sm-3 control-label">Surat Perjanjian</label>
                    <div class="col-sm-9">
                      <input type="file" name="upl_files2" class="form-control" onchange="ValidateSingleInput(this);">
                    </div>
                  </div>
                </div>
              </div>

                <div class="form-group">
                  <div class="col-sm-9">
                    <!--<button type="submit" class="btn pdln-btn">Lanjut</button>-->
                    <input type="hidden" name="manage" value="add_surat_undangan">
                    <a class="btn btn-primary" title="Selesai" onclick="$(this).closest('form').submit()"><i class="fa fa-check-square-o"></i> Selesai</a>
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
<script type="text/javascript">
  var _validFileExtensions = [".jpg", ".jpeg", ".pdf", ".png"];
  function ValidateSingleInput(oInput) {
      if (oInput.type == "file") {
          var sFileName = oInput.value;
           if (sFileName.length > 0) {
              var blnValid = false;
              for (var j = 0; j < _validFileExtensions.length; j++) {
                  var sCurExtension = _validFileExtensions[j];
                  if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                      blnValid = true;
                      break;
                  }
              }
               
              if (!blnValid) {
                  alert("Sorry allowed extensions are: " + _validFileExtensions.join(", "));
                  oInput.value = "";
                  return false;
              }
          }
      }
      return true;
  }
  
</script>