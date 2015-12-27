<!--main content start-->
  <section id="main-content">
    <section class="wrapper site-min-height">
      <h3><i class="fa fa-angle-right"></i> Laporan</h3>
      
      <form class="form-horizontal style-form" method="post" action="<?php echo base_url(); ?>export/process">
        <div class="form-group">
          <label class="col-lg-3 col-sm-3 control-label">Filter berdasarkan</label>
          <div class="col-sm-9">
            <select class="form-control" name="lembaga">
                <option>Pilih salah satu</option>
                <option>Negara</option>
                <option>NIP</option>
                <option>Sumber Dana</option>
                <option>Unitutama/option>
                <option>Waktu Berkunjung</option>
            </select>
          </div>
        </div>

        <!-- <div class="form-group">
          <label class="col-lg-3 col-sm-3 control-label">Filter berdasarkan Unitutama</label>
          <div class="col-sm-9">
            <select class="form-control" name="lembaga">
                <option>Pilih salah satu</option>
                <option>Golongan</option>
                <option>Orang</option>
                <option>Dll</option>
            </select>
          </div>
        </div> -->

        <div class="form-group">
            <label class="col-lg-3 col-sm-3 control-label"></label>
            <div class="col-sm-9">
              <button type="submit" class="btn pdln-btn">Download</button>
            </div>
        </div>
      </form>

      </div>
    </section><! --/wrapper -->
  </section><!-- /MAIN CONTENT -->
<!--main content end