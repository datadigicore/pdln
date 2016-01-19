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
            
            <form class="form-horizontal style-form" method="post" action="<?php echo base_url();?>home/process" enctype="multipart/form-data">

            <!-- HIDDEN INPUT -->
              <input type="hidden" name="manage" value="add_data_diri">
              <input type="hidden" name="kondisi" value="tambah">

              <?php if (isset($error_message)){?>
                <input type="hidden" class="form-control" name="no_aplikasi" value="<?php echo $error_message['no_aplikasi_data_diri'];?>">
              <?php } ?> 

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Identitas</h3>
                </div>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="col-lg-3 col-sm-3 control-label">Nama</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nama_pemohon" placeholder="Nama" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 col-sm-3 control-label">No. Telepon</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="no_hp_pemohon" placeholder="No. Telepon">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 col-sm-3 control-label">Pekerjaan</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="pekerjaan_pemohon" name="pekerjaan_pemohon">
                          <option value="-">---Pilih Pekerjaan---</option>
                          <option value="PNS">PNS</option>
                          <option value="Swasta">Swasta</option>
                          <option value="Lainnya">Lainnya</option>
                      </select>
                        <input type="text" class="form-control" id="pekerjaan_lain" name="pekerjaan_lainnya" placeholder="Pekerjaan" style="margin-top: 15px;">
                    </div>
                  </div>

                  <div class="form-group" id="nip">
                    <label class="col-lg-3 col-sm-3 control-label">NIP</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="nip_pemohon" name="nip_pemohon" placeholder="NIP" min="0" max="999999999999999999">
                    </div>
                  </div>

                  <div class="form-group" id="instansi">
                    <label class="col-lg-3 col-sm-3 control-label">Instansi</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="instansi_pemohon" name="instansi_pemohon">
                          <!-- query dari db -->
                          <option value="16">---Pilih Instansi Unit Utama---</option>
                          <?php foreach ($instansi as $key => $value) {
                            echo '<option value="'.$value['id'].'">'.$value['nama_instansi'].'</option>';                          
                          }?>
                          <!-- <option value="Lainnya">Lain-lain</option> -->
                      </select>

                      <select class="form-control" id="sub_instansi_pemohon" name="sub_instansi_pemohon" style="margin-top: 15px;">
                          <!-- query dari db -->
                          <option value="54">---Pilih Sub Instansi Unit Utama---</option>
                          <!-- <option value="lainnya">Lain-lain</option> -->
                      </select>
                      <div id="result"></div>
                     
                    </div>
                  </div>

                  <div class="form-group" id="jabatan">
                    <label class="col-lg-3 col-sm-3 control-label">Jabatan</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="jabatan_pemohon" name="jabatan_pemohon" onchange="jabatan_pemohon(this.value)">
                          <option value="-">---Pilih Jabatan---</option>
                          <option value="Eselon 1">Eselon 1</option>
                          <option value="Eselon 2">Eselon 2</option>
                          <option value="Eselon 3">Eselon 3</option>
                          <option value="Eselon 4">Eselon 4</option>
                          <option value="Auditor">Auditor</option>
                          <option value="Fungsional">Fungsional</option>
                          <option value="Fungsional Umum">Fungsional Umum</option>
                          <option value="Lainnya">Lain-lain</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group" id="jabatan_lain">
                    <label class="col-lg-3 col-sm-3 control-label">Keterangan Jabatan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="jabatan_lain" placeholder="Jabatan">
                    </div>
                  </div>

                </div>
              </div>
              
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Informasi Paspor</h3>
                </div>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="col-lg-3 col-sm-3 control-label">No. Paspor</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="no_passport_pemohon" placeholder="No. Passport">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 col-sm-3 control-label">Tanggal Terbit</label>
                    <div class="col-sm-9">
                      <input class="form-control" name="tgl_terbit_passport_pemohon" data-provide="datepicker" placeholder="yyyy/mm/dd" data-date-format="yyyy/mm/dd">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 col-sm-3 control-label">Tanggal Kadaluarsa</label>
                    <div class="col-sm-9">
                      <input class="form-control" name="tgl_habis_passport_pemohon" data-provide="datepicker" placeholder="yyyy/mm/dd" data-date-format="yyyy/mm/dd">
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
                    <label class="col-lg-3 col-sm-3 control-label">Curiculum Vitae</label>
                    <div class="col-sm-9">
                      <input type="file" name="upl_files1" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 col-sm-3 control-label">Foto</label>
                    <div class="col-sm-9">
                      <input type="file" name="upl_files2" class="form-control">
                    </div>
                  </div>

                  <div class="form-group" id="kartupegawai">
                    <label class="col-lg-3 col-sm-3 control-label">Kartu Pegawai</label>
                    <div class="col-sm-9">
                      <input type="file" id="karpeg" name="upl_files3" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 col-sm-3 control-label">Surat Tugas</label>
                    <div class="col-sm-9">
                      <input type="file" name="upl_files4" class="form-control">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 col-sm-3 control-label">KTP</label>
                    <div class="col-sm-9">
                      <input type="file" name="upl_files5" class="form-control">
                    </div>
                  </div>

                </div>

              </div>

              <div class="form-group">
                <div class="col-sm-9">      
                    <input type="submit" class="btn btn-success mb" name="tambah" value="tambah" title="Tambah data baru">
                    <input type="submit" class="btn btn-info mb" name="lanjut" value="lanjut" title="Lanjut">
                </div>
              </div>
            </form>   

          <!--            
            <form class="form-horizontal style-form" method="post" action="<?php echo base_url();?>home/process" enctype="multipart/form-data">
              <input type="hidden" name="manage" value="add_data_diri">
              <input type="hidden" name="kondisi" value="tambah">            
              <a class="btn btn-success mb" title="Tambah data baru" onclick="$(this).closest('form').submit()"><i class="fa fa-plus-square"></i> Tambah Data Lain</a>
            </form>
          -->

          </div>
        </div>
      </div>
    </section><! --/wrapper -->
  </section><!-- /MAIN CONTENT -->

  <script type="text/javascript">

    $(document).ready(function()
    {

    /*$('.fromdate').datepicker({
      dateFormat: 'yy-mm-dd',
      changeMonth: true,
      changeYear: true,
    });*/
     
      $("#pekerjaan_pemohon").change(function(){
      if($(this).val() == "Lainnya"){
       $("#jabatan").hide();
       $("#pekerjaan_lain").show();
       $("#nip").hide();
       $("#instansi").hide();
       $("#sub_instansi_pemohon").hide();
       $("#kartupegawai").hide();
       $('#nip_pemohon').prop('required',false);
       $('#karpeg').prop('required',false);       
       $("#jabatan_lain").show();    
      }else if ($(this).val()=="PNS"){
       $("#jabatan").show();
       $("#pekerjaan_lain").hide();
       $("#nip").show();
       $("#kartupegawai").show();
       $('#nip_pemohon').prop('required',true);
       $('#karpeg').prop('required',true);
       $("#instansi").show(); 
       $("#jabatan_lain").hide();
      }
      else{
       $("#jabatan").hide();
       $("#pekerjaan_lain").hide();
       $("#nip").hide();
       $("#instansi").hide();
       $("#sub_instansi_pemohon").hide();
       $("#kartupegawai").hide();
       $('#nip_pemohon').prop('required',false);
       $('#karpeg').prop('required',false);       
       $("#jabatan_lain").show();
      }          
     });
     $("#jabatan").hide();
     $('#nip_pemohon').prop('required',false);
     $('#karpeg').prop('required',false);
     $("#pekerjaan_lain").hide();
     $("#nip").hide();
     $("#instansi").hide();
     $("#sub_instansi_pemohon").hide();
     $("#kartupegawai").hide();
     $("#jabatan_lain").hide();

    $("#jabatan_pemohon").change(function(){
      if($(this).val() == "Lainnya"){
       $("#jabatan_lain").show();
      }
      else{
       $("#jabatan_lain").hide();
      }         
     });
    $("#jabatan_lain").hide();

     $("#instansi_pemohon").change(function(){
      if ($(this).val() != "-") {
        $("#sub_instansi_pemohon").show();
        id = $("#instansi_pemohon").val();      
        $.ajax({
          type: "post",
          url : "<?php echo base_url('home/process') ?>",
          data: {manage:'select_data',key:id},
          success: function(result)
          {
            //document.write(result);
            $("#sub_instansi_pemohon").html(result);
            //$("#result").html(result);
          }
        });
        return false;
      }else{
        $("#sub_instansi_pemohon").hide();   
      }      
      });
     $("#sub_instansi_pemohon").hide();


     $(document).on("click", "#btn-new", function (){              
              kondisi = 'tambah';
              manage = 'add_data_diri';
              var $form=$(document.createElement('form')).css({display:'none'}).attr("method","POST").attr("action","<?php echo base_url('home/process') ?>");              
              var $input2=$(document.createElement('input')).css({display:'none'}).attr('name','manage').val(manage);
              var $input3=$(document.createElement('input')).css({display:'none'}).attr('name','kondisi').val(kondisi);
              $form.append($input2).append($input3);
              $("body").append($form);
              $form.submit();
            });

  /*  $(document).on('submit', '#tambah_data_baru', function (e) {

      var formURL = $(this).attr("action");
      var addData = new FormData(this);

      $.ajax({
        type: "post",
        data: addData,
        url : formURL,
        contentType: false,
        cache: false,  
        processData: false,
        success: function(data)
        {
          $("#success-alert").alert();
          $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
          $("#success-alert").alert('close');
          });
          setTimeout("location.href = redirectURL;",redirectTime);
        }
      });
      return false;
    });*/
     

  });

</script>
