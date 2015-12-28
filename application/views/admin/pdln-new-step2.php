main content start-->
  <section id="main-content">
    <section class="wrapper site-min-height">
      <div class="row mt">
        <div class="col-lg-12">
          <div class="form-panel">
            
            <!-- Steping Wizard -->
            <ul class="nav nav-wizard">
              <li><a><span class="badge">1</span> Data Diri</a></li>
              <li class="active"><a><span class="badge">2</span> Surat Instansi Asal</a></li>
              <li><a><span class="badge">3</span> Surat Unit Utama</a></li>
              <li><a><span class="badge">4</span> Surat Undangan Kunjungan</a></li>
            </ul>

            <form class="form-horizontal style-form" method="post" action="<?php echo base_url();?>admin">

              <?php if (isset($error_message)){print_r($error_message);
                echo "Ini darta nya loh";?>
                <input type="text" class="form-control" name="no_aplikasi" placeholder="<?php echo $error_message['no_aplikasi'];?>" value="<?php echo $error_message['no_aplikasi'];?>">
              <?php } ?> 

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">No Surat</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="no_surat_instansi_awal" placeholder="No Surat">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Tanggal Surat</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="tgl_surat_instansi_awal" placeholder="Tanggal Surat">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Penanggung Jawab</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="penanggung_jawab" placeholder="Penanggung Jawab">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Instansi Surat Asal</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="instansi_surat_asal" placeholder="Instansi Surat Asal">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Perihal</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="perihal" placeholder="Perihal">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Surat Instansi Awal</label>
                  <div class="col-sm-9">
                    <input type="file" name="surat_instansi_awal" class="form-control" style="width: auto;">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label"></label>
                  <div class="col-sm-9">
                    <!--<button type="submit" class="btn pdln-btn">Lanjut</button>-->
                    <input type="hidden" name="content" value="step3">
                    <a class="btn pdln-btn" title="Add new item" onclick="$(this).closest('form').submit()"> Lanjut</a>
                    <!-- <a href="<?php echo $base_url;?>pdln-new-step3.php" class="btn pdln-btn">Lanjut</a> -->
                  </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </section><! --/wrapper -->
  </section><!-- /MAIN CONTENT -->
<!--main content end