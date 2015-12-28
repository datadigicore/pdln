<!--main content start-->
  <section id="main-content">
    <section class="wrapper site-min-height">
      <div class="row mt">
        <div class="col-lg-12">
          <div class="form-panel">
            
            <!-- Steping Wizard -->
            <ul class="nav nav-wizard">
              <li><a><span class="badge">1</span> Data Diri</a></li>              
              <li class="active"><a><span class="badge">2</span> Surat Unit Utama</a></li>
              <li><a><span class="badge">3</span> Surat Undangan Kunjungan</a></li>
            </ul>
            
            <form class="form-horizontal style-form" method="post" action="<?php echo base_url();?>home/process" enctype="multipart/form-data">

               <?php if (isset($error_message)){?>
                <input type="text" class="form-control" name="no_aplikasi" value="<?php echo $error_message['no_aplikasi'];?>">
              <?php } ?> 

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">No Surat Unit Utama</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="no_surat_unit_utama" placeholder="No Surat Unit Utama">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Tanggal Surat Unit Utama</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="tgl_surat_unit_utama" placeholder="Tanggal Surat Unit Utama">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Instansi Unit Utama</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="instansi_unit_utama" placeholder="Instansi Unit Utama">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Pejabat Penandatangan Surat</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="penandatangan_surat_unit_utama" placeholder="Pejabat Penandatangan Surat">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Perihal Surat</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="perihal_surat_unit_utama" placeholder="Perihal Surat">
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Surat Unit Utama</label>
                  <div class="col-sm-9">
                    <input type="file" name="upl_files1" class="form-control" style="width: auto;">
                  </div>
              </div>


              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label"></label>
                  <div class="col-sm-9">
                    <!--<button type="submit" class="btn pdln-btn">Lanjut</button>-->
                    <input type="hidden" name="manage" value="add_surat_unit_utama">
                    <a class="btn pdln-btn" title="Lanjut" onclick="$(this).closest('form').submit()"> Lanjut</a>
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