<!--main content start-->
  <section id="main-content">
    <section class="wrapper site-min-height">
      <h3><i class="fa fa-angle-right"></i> Laporan</h3>
      
      <form class="form-horizontal style-form" method="post" action="<?php echo base_url(); ?>export/process">
        <div class="form-group">
          <label class="col-lg-3 col-sm-3 control-label">Filter berdasarkan</label>
          <div class="col-sm-9">
            <select class="form-control" id="pilihexport" name="pilihexport" required>
                <option value="" disabled selected>Pilih salah satu</option>
                <option value="negara">Negara</option>
                <option value="nip">NIP</option>
                <option value="sumber">Sumber Dana</option>
                <!-- <option>Unit Utama</option> -->
                <option value="waktu">Waktu Berkunjung</option>
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
<script type="text/javascript">
  function clear(){
    $("#negara").remove();
    $("#nip").remove();
    $("#sumber").remove();
    $("#waktu_awal").remove();
    $("#waktu_akhir").remove();
  }
  $("#pilihexport").change(function(){
    if($(this).val() == "negara"){
      clear();
      $("<select class='form-control' id='negara' name='negara' required></select>").insertAfter( $( "#pilihexport" ) );
      $.ajax({
        type: "post",
        url : "<?php echo base_url('home/process') ?>",
        data: {manage:'select_country'},
        success: function(result)
        {
          $("#negara").html(result);
        }
      });
    }
    else if ($(this).val()=="nip"){
     clear();
     $("<select class='form-control' id='nip' name='nip' required></select>").insertAfter( $( "#pilihexport" ) );
      $.ajax({
        type: "post",
        url : "<?php echo base_url('home/process') ?>",
        data: {manage:'select_nip'},
        success: function(result)
        {
          $("#nip").html(result);
        }
      });
    }
    else if ($(this).val()=="sumber"){
     clear();
     $("<select class='form-control' id='sumber' name='sumber' required></select>").insertAfter( $( "#pilihexport" ) );
      $.ajax({
        type: "post",
        url : "<?php echo base_url('home/process') ?>",
        data: {manage:'select_sumber'},
        success: function(result)
        {
          $("#sumber").html(result);
        }
      });
    }
    else if ($(this).val()=="waktu"){
     clear();
     $("<input type='date' id='waktu_awal' class='form-control' name='waktu_awal' required>").insertAfter( $( "#pilihexport" ) );
     $("<input type='date' id='waktu_akhir' class='form-control' name='waktu_akhir' required>").insertAfter( $( "#waktu_awal" ) );
    }
  })
</script>