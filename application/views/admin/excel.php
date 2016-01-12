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
                <option value="pekerjaan">Pekerjaan</option>
                <option value="kegiatan">Kategori Kegiatan</option>
                <option value="waktu">Waktu Berkunjung</option>
            </select>
          </div>
        </div>
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
    $("#kegiatan").remove();
    $("#pekerjaan").remove();
  }
  $("#pilihexport").change(function(){
    if($(this).val() == "negara"){
      clear();
      $("<select class='form-control' id='negara' name='negara' required></select>").insertAfter( $( "#pilihexport" ) );
      $.ajax({
        type: "post",
        url : "<?php echo base_url('admin/process') ?>",
        data: {manage:'select_country'},
        success: function(result)
        {
          $("#negara").html(result);
        }
      });
    }
    else if ($(this).val()=="nip"){
     clear();
     $("<input type='hidden' class='form-control' id='nip' name='nip' value='nip'>").insertAfter( $( "#pilihexport" ) );
    }
    else if ($(this).val()=="sumber"){
     clear();
     $("<select class='form-control' id='sumber' name='sumber' required></select>").insertAfter( $( "#pilihexport" ) );
      $.ajax({
        type: "post",
        url : "<?php echo base_url('admin/process') ?>",
        data: {manage:'select_sumber'},
        success: function(result)
        {
          $("#sumber").html(result);
        }
      });
    }
    else if ($(this).val() == "pekerjaan"){
      clear();
      $("<select class='form-control' id='pekerjaan' name='pekerjaan' required></select>").insertAfter( $( "#pilihexport" ) );
      $.ajax({
        type: "post",
        url : "<?php echo base_url('admin/process') ?>",
        data: {manage:'select_pekerjaan'},
        success: function(result)
        {
          $("#pekerjaan").html(result);
        }
      });
    }
    else if ($(this).val() == "kegiatan"){
      clear();
      $("<select class='form-control' id='kegiatan' name='kegiatan' required></select>").insertAfter( $( "#pilihexport" ) );
      $.ajax({
        type: "post",
        url : "<?php echo base_url('admin/process') ?>",
        data: {manage:'select_kegiatan'},
        success: function(result)
        {
          $("#kegiatan").html(result);
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