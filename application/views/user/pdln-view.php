<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">
            <form class="form-horizontal style-form">
            <input type="hidden" id="id" class="form-control" value="<?php echo $id_data_diri ?>">
            <div class="row">
                <div class="col-sm-3">
                    <img src="<?php base_url();?>files/foto/<?php echo $foto_pemohon ?>" class="img-responsive">
                </div>
                <div class="col-sm-9">
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Nama</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $nama_pemohon ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>NIP</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $nip_pemohon ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>No. Telepon</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $no_hp_pemohon ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>No. Passport</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $no_passport_pemohon ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Tanggal Habis Masa Berlaku Passport</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $tgl_valid_passport ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Pekerjaan</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $pekerjaan_pemohon ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Instansi</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $instansi_pemohon ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Jabatan</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $jabatan_pemohon ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>CV</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><a href="#" >Unduh</a></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Kartu Pegawai</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><a href="#">Unduh</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <h2>Surat Unit Utama</h2>
            <br>

            <div class="row">
                <div class="col-sm-12">

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Nomor Surat Unit Utama</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $no_surat_unit_utama ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Tanggal Surat Unit Utama</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $tgl_surat_unit_utama ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Instansi Surat Unit Utama</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $instansi_unit_utama ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Perihal</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $perihal_surat_unit_utama ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Penanggung Jawab Surat Unit Utama</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $penandatangan_surat_unit_utama ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Surat Unit Utama</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><a href="#">Unduh</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <h2>Surat Undangan</h2>
            <br>

            <div class="row">
                <div class="col-sm-12">

                <div class="form-group">
                    <label class="col-lg-4 col-sm-4 control-label"><strong>Nomor Surat Undangan</strong></label>
                    <div class="col-lg-8">
                        <p class="form-control-static"><?php echo $no_surat_undangan ?></p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 col-sm-4 control-label"><strong>Tanggal Surat Undangan</strong></label>
                    <div class="col-lg-8">
                        <p class="form-control-static"><?php echo $tgl_surat_undangan ?></p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 col-sm-4 control-label"><strong>Instansi Surat Undangan</strong></label>
                    <div class="col-lg-8">
                        <p class="form-control-static"><?php echo $instansi_pengundang ?></p>
                    </div>        
                </div>

                <div class="form-group">
                    <label class="col-lg-4 col-sm-4 control-label"><strong>Negara Tujuan</strong></label>
                    <div class="col-lg-8">
                        <p class="form-control-static"><?php echo $negara_tujuan ?></p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 col-sm-4 control-label"><strong>Waktu Kegiatan</strong></label>
                    <div class="col-lg-8">
                        <p class="form-control-static"><?php echo $tgl_awal_kegiatan ?> <br> <?php echo $tgl_akhir_kegiatan ?></p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 col-sm-4 control-label"><strong>Kegiatan</strong></label>
                    <div class="col-lg-8">
                        <p class="form-control-static"><?php echo $rincian_kegiatan ?></p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 col-sm-4 control-label"><strong>Sumber Dana</strong></label>
                    <div class="col-lg-8">
                        <p class="form-control-static"><?php echo $sumber_dana_kegiatan ?></p>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-4 col-sm-4 control-label">Keterangan Sumber Dana</label>
                  <div class="col-lg-8">
                    <p class="form-control-static"><?php echo $keterangan_sumber_dana_kegiatan ?></p>
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 col-sm-4 control-label"><strong>Surat Udangan</strong></label>
                    <div class="col-lg-8">
                        <p class="form-control-static"><a href="#">Unduh</a></p>
                    </div>
                </div>

                </div>
            </div>

          </form>
         </div>
        </div>

        <!-- <a id="btn-terima" title="Terima" class="btn btn-success mb" data-toggle="modal"><i class="fa fa-check"></i> Terima</a>
        <a data-toggle="modal" id="btn-tolak" title="Tolak" class="btn btn-danger mb" ><i class="fa fa-close"></i> Tolak</a> -->
        
        <a id="btn-menlu" title="Cetak Surat ke Setneg" class="btn btn-warning mb"><i class="fa fa-print"></i> Cetak Surat ke Setneg</a>
        <a id="btn-setneg" title="Cetak Surat ke Menlu" class="btn btn-warning mb"><i class="fa fa-print"></i> Cetak Surat ke Menlu</a>
        <!-- <a id="btn-tambahdata" class="btn pdln-btn mb" title="Edit this item"><i class="fa fa-plus-square"></i> Sunting</a> -->

      </div>
    </div>
  </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
<!--main content end-->

<script type="text/javascript">
    
    $("#btn-terima").click(function(){ 
        id = $("#id").val(); 
         $.ajax({
                type: "post",
                url : "<?php echo base_url('home/process') ?>",
                data: {manage:'terima_data',key:id
                },                
                success: function(data)
                {                    
                    var $form=$(document.createElement('form')).css({display:'none'}).attr("method","POST").attr("action","<?php echo base_url('home') ?>");
                    var $input=$(document.createElement('input')).css({display:'none'}).attr('name','id').val(id);                    
                    $form.append($input);
                    $("body").append($form);
                    $form.submit();
                }
              });
              return false;   
    });

    $("#btn-tolak").click(function(){ 
        id = $("#id").val(); 
         $.ajax({
                type: "post",
                url : "<?php echo base_url('home/process') ?>",
                data: {manage:'tolak_data',key:id
                },                
                success: function(data)
                {                    
                    var $form=$(document.createElement('form')).css({display:'none'}).attr("method","POST").attr("action","<?php echo base_url('home') ?>");
                    var $input=$(document.createElement('input')).css({display:'none'}).attr('name','id').val(id);                    
                    $form.append($input);
                    $("body").append($form);
                    $form.submit();
                }
              });
              return false;   
    });         

    $("#btn-menlu").click(function(){         
         $.ajax({
                type: "post",
                url : "<?php echo base_url('c_mpdf') ?>",
                data: {manage:'menlu'},
                success: function(data)
                {                    
                    var $form=$(document.createElement('form')).css({display:'none'}).attr("method","POST").attr("action","<?php echo base_url('c_mpdf') ?>");
                    var $input=$(document.createElement('input')).css({display:'none'}).attr('name','id').val(id);                    
                    $form.append($input);
                    $("body").append($form);
                    $form.submit();
                }
              });
              return false;   
    });

    $("#btn-setneg").click(function(){         
         $.ajax({
                type: "post",
                url : "<?php echo base_url('c_mpdf') ?>",
                data: {manage:'menlu'},
                success: function(data)
                {                    
                    var $form=$(document.createElement('form')).css({display:'none'}).attr("method","POST").attr("action","<?php echo base_url('c_mpdf') ?>");
                    var $input=$(document.createElement('input')).css({display:'none'}).attr('name','id').val(id);                    
                    $form.append($input);
                    $("body").append($form);
                    $form.submit();
                }
              });
              return false;   
    });




</script>