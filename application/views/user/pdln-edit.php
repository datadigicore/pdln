<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">
            <form class="form-horizontal style-form" >
            <div class="row">
                <div class="col-sm-3">
                    <div id="links">                        
                        <img src="<?php base_url();?>files/foto/<?php echo $foto_pemohon ?>" class="img-responsive">
                        <input type="file" id="foto_pemohon" class="form-control" style="width: 50;" value="<?php $foto_pemohon?>">
                    </div>
                    
                </div>
                <input type="hidden" id="no_aplikasi" class="form-control" value="<?php echo $id_data_diri ?>">
                <input type="hidden" id="id_user" class="form-control" value="<?php echo $id_user ?>">
                <div class="col-sm-9">
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Nama</strong></label>
                        <div class="col-lg-8">
                            <input type="text" id="nama_pemohon" class="form-control" value="<?php echo $nama_pemohon ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>NIP</strong></label>
                        <div class="col-lg-8">
                            <input type="number" id="nip_pemohon" class="form-control" value="<?php echo $nip_pemohon ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>No. Telepon</strong></label>
                        <div class="col-lg-8">
                            <input type="number" id="no_hp_pemohon" class="form-control" value="<?php echo $no_hp_pemohon ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>No. Passport</strong></label>
                        <div class="col-lg-8">
                            <input type="text" id="no_passport_pemohon" class="form-control" value="<?php echo $no_passport_pemohon ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Tanggal Terbit Passport</strong></label>
                        <div class="col-lg-8">
                            <input type="date" id="tgl_terbit_passport" class="form-control" value="<?php echo $tgl_terbit_passport ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Tanggal Kadaluarsa Passport</strong></label>
                        <div class="col-lg-8">
                            <input type="date" id="tgl_habis_passport" class="form-control" value="<?php echo $tgl_habis_passport ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Pekerjaan</strong></label>
                        <div class="col-lg-8">
                          <select class="form-control" id="pekerjaan_pemohon" name="pekerjaan_pemohon">
                            <option value="<?php echo $pekerjaan_pemohon ?>"><?php echo $pekerjaan_pemohon ?></option>
                            <option value="<?php echo $pekerjaan_pemohon ?>">---------</option>
                            <option value="PNS">PNS</option>
                            <option value="Swasta">Swasta</option>
                            <option value="Lainnya">Lainnya</option>
                          </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Instansi</strong></label>
                        <div class="col-lg-8">
                            <input type="text" id="instansi_pemohon" class="form-control" value="<?php echo $instansi_pemohon ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Jabatan</strong></label>
                        <div class="col-lg-8">
                            <input type="text" id="jabatan_pemohon" class="form-control"value="<?php echo $jabatan_pemohon ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>CV</strong></label>
                        <div class="col-lg-8">                            
                            <input type="file" id="cv_pemohon" class="form-control" style="width: auto;" value="<?php echo $cv_pemohon ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Kartu Pegawai</strong></label>
                        <div class="col-lg-8">
                            <input type="file" id="karpeg_pemohon" class="form-control" style="width: auto;" value="<?php echo $karpeg_pemohon ?>">
                        </div>
                    </div>
                </div>
            </div>

            <h4>Surat Unit Utama</h4>

            <div class="row">
                <div class="col-sm-12">

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Nomor Surat Unit Utama</strong></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="no_surat_unit_utama" placeholder="No Surat" value="<?php echo $no_surat_unit_utama ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Tanggal Surat Unit Utama</strong></label>
                        <div class="col-lg-8">
                            <input type="date" class="form-control" id="tgl_surat_unit_utama" placeholder="Tanggal Surat" value="<?php echo $tgl_surat_unit_utama ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Instansi</strong></label>
                        <div class="col-lg-8">
                            <input type="text" id="instansi_pemohon" class="form-control" value="<?php echo $instansi_unit_utama ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Perihal</strong></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="perihal_surat_unit_utama" placeholder="Perihal" value="<?php echo $perihal_surat_unit_utama ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Penanggung Jawab Surat Unit Utama</strong></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="penandatangan_surat_unit_utama" placeholder="Penanggung Jawab" value="<?php echo $penandatangan_surat_unit_utama ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Surat Unit Utama</strong></label>
                        <div class="col-lg-8">
                            <input type="file" id="surat_unit_utama" class="form-control" style="width: auto;" value="<?php echo $surat_unit_utama ?>">

                        </div>
                    </div>
                </div>
            </div>

            <h4>Surat Undangan</h4>

            <div class="row">
                <div class="col-sm-12">

                <div class="form-group">
                    <label class="col-lg-4 col-sm-4 control-label"><strong>Nomor Surat Undangan</strong></label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="no_surat_undangan" placeholder="No Surat" value="<?php echo $no_surat_undangan ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 col-sm-4 control-label"><strong>Tanggal Surat Undangan</strong></label>
                    <div class="col-lg-8">
                        <input type="date" class="form-control" id="tgl_surat_undangan" placeholder="Tanggal Surat" value="<?php echo $tgl_surat_undangan ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 col-sm-4 control-label"><strong>Instansi Surat Undangan</strong></label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="instansi_pengundang" placeholder="Instansi Unit Utama" value="<?php echo $instansi_pengundang ?>">
                    </div>        
                </div>

                <div class="form-group">
                    <label class="col-lg-4 col-sm-4 control-label"><strong>Negara Tujuan</strong></label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="negara_tujuan" placeholder="Negara Tujuan" value="<?php echo $negara_tujuan ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-4 col-sm-4 control-label">Waktu Kegiatan</label>
                  <div class="col-sm-4">
                    <input type="date" class="form-control" id="tgl_awal_kegiatan" placeholder="Waktu Mulai Kegiatan" value="<?php echo $tgl_awal_kegiatan ?>">
                  </div>
                  <div class="col-sm-4">
                    <input type="date" class="form-control" id="tgl_akhir_kegiatan" placeholder="Waktu Akhir Kegiatan" value="<?php echo $tgl_akhir_kegiatan ?>">
                  </div>
                </div> 

                <div class="form-group">
                    <label class="col-lg-4 col-sm-4 control-label"><strong>Kegiatan</strong></label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" id="rincian_kegiatan" placeholder="Rincian_Kegiatan" value="<?php echo $rincian_kegiatan ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 col-sm-4 control-label"><strong>Sumber Dana</strong></label>
                    <div class="col-lg-8">
                    <select class="form-control" id="sumber_dana_kegiatan">
                        <option value="<?php echo $sumber_dana_kegiatan ?>"><?php echo $sumber_dana_kegiatan ?></option>
                        <option value="<?php echo $sumber_dana_kegiatan ?>">--------</option>
                        <option value="APBN">APBN (Pemerintah)</option>
                        <option value="Pribadi">Pribadi (Dana Sendiri)</option>
                        <option value="Pengundang">Pengundang (Sponsor)</option>
                        <option value="lain-lain">Lain-lain (Seniman )</option>
                    </select>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-4 col-sm-4 control-label">Keterangan Sumber Dana</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" id="keterangan_sumber_dana_kegiatan" placeholder="Mis : Beasiswa Ditjen Dikti" value="<?php echo $keterangan_sumber_dana_kegiatan ?>">
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 col-sm-4 control-label"><strong>Surat Udangan</strong></label>
                    <div class="col-lg-8">
                        <input type="file" id="surat_undangan" class="form-control" style="width: auto;" value="<?php echo $surat_undangan ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 col-sm-4 control-label"><strong>Surat Perjanjian</strong></label>
                    <div class="col-lg-8">
                        <input type="file" id="surat_perjanjian" class="form-control" style="width: auto;" value="<?php echo $surat_perjanjian ?>">
                    </div>
                </div>
              </div>
            </div>
          </form>
         </div>
        </div>

        <a class="btn btn-success" title="Update" id="editdata"><i class="fa fa-check-square-o"></i>Update</a>
        <form class="form-horizontal style-form" method="post" action="<?php echo base_url();?>home">
            <input type="hidden" name="content" value="home">
            <a class="btn btn-danger" title="Update" onclick="$(this).closest('form').submit()"><i class="fa fa-remove"></i>Cancel</a>
        </form>

      </div>
    </div>
  </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
<!--main content end-->

<script type="text/javascript">
    $("#pekerjaan_pemohon").change(function(){
      if($(this).val() == "Lainnya"){
       $("#pekerjaan_lain").show();
      }else if ($(this).val()=="PNS"){
       $("#pekerjaan_lain").hide();
       $("#nip").show(); 
      }
      else{
       $("#pekerjaan_lain").hide();
       $("#nip").hide();
      }          
     });
     $("#pekerjaan_lain").hide();
     $("#nip").hide();

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
      if ($(this).val() != "") {
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

    $("#editdata").click(function(){ 

        no_aplikasi = $("#no_aplikasi").val(); 
        id_user = $("#id_user").val(); 
        nama_pemohon = $("#nama_pemohon").val(); 
        pekerjaan_pemohon = $("#pekerjaan_pemohon").val(); 
        nip_pemohon = $("#nip_pemohon").val(); 
        no_hp_pemohon = $("#no_hp_pemohon").val(); 
        no_passport_pemohon = $("#no_passport_pemohon").val(); 
        tgl_terbit_passport = $("#tgl_terbit_passport").val(); 
        tgl_habis_passport = $("#tgl_habis_passport").val(); 
        instansi_pemohon = $("#instansi_pemohon").val(); 
        sub_instansi_pemohon = $("#sub_instansi_pemohon").val(); 
        jabatan_pemohon = $("#jabatan_pemohon").val(); 
        cv_pemohon = $("#cv_pemohon").val(); 
        foto_pemohon = $("#foto_pemohon").val(); 
        karpeg_pemohon = $("#karpeg_pemohon").val(); 
        no_surat_unit_utama = $("#no_surat_unit_utama").val(); 
        tgl_surat_unit_utama = $("#tgl_surat_unit_utama").val(); 
        penandatangan_surat_unit_utama = $("#penandatangan_surat_unit_utama").val(); 
        instansi_unit_utama = $("#instansi_unit_utama").val(); 
        sub_instansi_unit_utama = $("#sub_instansi_unit_utama").val(); 
        perihal_surat_unit_utama = $("#perihal_surat_unit_utama").val(); 
        surat_unit_utama = $("#surat_unit_utama").val(); 
        no_surat_undangan = $("#no_surat_undangan").val(); 
        tgl_surat_undangan = $("#tgl_surat_undangan").val(); 
        instansi_pengundang = $("#instansi_pengundang").val(); 
        negara_tujuan = $("#negara_tujuan").val(); 
        tgl_awal_kegiatan = $("#tgl_awal_kegiatan").val(); 
        tgl_akhir_kegiatan = $("#tgl_akhir_kegiatan").val(); 
        rincian_kegiatan = $("#rincian_kegiatan").val(); 
        sumber_dana_kegiatan = $("#sumber_dana_kegiatan").val(); 
        keterangan_sumber_dana_kegiatan = $("#keterangan_sumber_dana_kegiatan").val(); 
        surat_undangan = $("#surat_undangan").val(); 
        surat_perjanjian = $("#surat_perjanjian").val();

        $.ajax({
                type: "post",
                url : "<?php echo base_url('home/process') ?>",
                data: {
                        manage:'edit_data_pdln',
                        key:no_aplikasi,
                        nama_pemohon:nama_pemohon,
                        pekerjaan_pemohon:pekerjaan_pemohon,
                        nip_pemohon:nip_pemohon,
                        no_hp_pemohon:no_hp_pemohon,
                        no_passport_pemohon :no_passport_pemohon, 
                        tgl_terbit_passport:tgl_terbit_passport,
                        tgl_habis_passport:tgl_habis_passport,
                        instansi_pemohon :instansi_pemohon, 
                        jabatan_pemohon :jabatan_pemohon, 
                        cv_pemohon :cv_pemohon, 
                        foto_pemohon :foto_pemohon, 
                        karpeg_pemohon :karpeg_pemohon, 
                        no_surat_unit_utama :no_surat_unit_utama, 
                        tgl_surat_unit_utama :tgl_surat_unit_utama, 
                        penandatangan_surat_unit_utama :penandatangan_surat_unit_utama, 
                        instansi_unit_utama :instansi_unit_utama, 
                        perihal_surat_unit_utama :perihal_surat_unit_utama, 
                        surat_unit_utama :surat_unit_utama, 
                        no_surat_undangan :no_surat_undangan, 
                        tgl_surat_undangan :tgl_surat_undangan, 
                        instansi_pengundang :instansi_pengundang, 
                        negara_tujuan :negara_tujuan, 
                        tgl_awal_kegiatan :tgl_awal_kegiatan, 
                        tgl_akhir_kegiatan :tgl_akhir_kegiatan, 
                        rincian_kegiatan :rincian_kegiatan, 
                        sumber_dana_kegiatan :sumber_dana_kegiatan, 
                        keterangan_sumber_dana_kegiatan :keterangan_sumber_dana_kegiatan, 
                        surat_undangan :surat_undangan, 
                        surat_perjanjian :surat_perjanjian,

                      },

                success: function(data)
                {                    
                    var $form=$(document.createElement('form')).css({display:'none'}).attr("method","POST").attr("action","<?php echo base_url('home') ?>");
                    var $input=$(document.createElement('input')).css({display:'none'}).attr('name','id').val(no_aplikasi);                    
                    $form.append($input);
                    $("body").append($form);
                    $form.submit();
                }
              });
              return false;   
    });

</script>