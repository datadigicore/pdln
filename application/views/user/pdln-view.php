<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <div class="row mt">
        <div class="col-lg-12">
            <form target="blank" method="POST" action="<?php echo base_url();?>c_mpdf/cetak_surat" style="float:left; margin-right:12px">
                <input type="hidden" name="iduser" value="<?php echo $data['id_data_diri']?>">
                <input type="hidden" name="kategori" value="setneg">
                <input type="hidden" name="noaplikasi" value="<?php echo $data['no_aplikasi_data_diri'] ?>">
                <a onclick="$(this).closest('form').submit()" title="Cetak Surat ke Setneg" class="btn btn-warning mb"><i class="fa fa-print"></i> Cetak Surat ke Setneg</a>
              </form>
            <form target="blank" method="POST" action="<?php echo base_url();?>c_mpdf/cetak_surat">
                <input type="hidden" name="iduser" value="<?php echo $data['id_data_diri']?>">
                <input type="hidden" name="kategori" value="menlu">
                <a onclick="$(this).closest('form').submit()" title="Cetak Surat ke Menlu" class="btn btn-warning mb"><i class="fa fa-print"></i> Cetak Surat ke Menlu</a>
              </form>          
        </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs pdln-tab" role="tablist">
            <li role="presentation" class="active"><a href="#datadiri" aria-controls="datadiri" role="tab" data-toggle="tab">Data Diri</a></li>
            <li role="presentation"><a href="#unitutama" aria-controls="unitutama" role="tab" data-toggle="tab">Surat Unit Utama</a></li>
            <li role="presentation"><a href="#undangan" aria-controls="undangan" role="tab" data-toggle="tab">Surat Undangan Kunjungan</a></li>
        </ul>

        <!-- Tab panes -->
        <form class="form-horizontal style-form">
            <!-- Hidden Input -->
            <input type="hidden" id="id" class="form-control" value="<?php echo $data['id_data_diri']?>">

            <div class="tab-content pdln-panel">
                <div role="tabpanel" class="tab-pane active" id="datadiri">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="form-group">
                                <label class="col-lg-4 col-sm-4 control-label"><strong>Nama</strong></label>
                                <div class="col-lg-8">
                                    <p class="form-control-static"><?php echo $data['nama_pemohon'] ?></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 col-sm-4 control-label"><strong>NIP</strong></label>
                                <div class="col-lg-8">
                                    <p class="form-control-static"><?php echo $data['nip_pemohon'] ?></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 col-sm-4 control-label"><strong>No. Telepon</strong></label>
                                <div class="col-lg-8">
                                    <p class="form-control-static"><?php echo $data['no_hp_pemohon'] ?></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 col-sm-4 control-label"><strong>No. Passport</strong></label>
                                <div class="col-lg-8">
                                    <p class="form-control-static"><?php echo $data['no_passport_pemohon'] ?></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 col-sm-4 control-label"><strong>Tanggal Terbit Passport</strong></label>
                                <div class="col-lg-8">
                                    <p class="form-control-static"><?php echo $data['tgl_terbit_passport'] ?></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 col-sm-4 control-label"><strong>Tanggal Kadaluarsa Passport</strong></label>
                                <div class="col-lg-8">
                                    <p class="form-control-static"><?php echo $data['tgl_habis_passport'] ?></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 col-sm-4 control-label"><strong>Pekerjaan</strong></label>
                                <div class="col-lg-8">
                                    <p class="form-control-static"><?php echo $data['pekerjaan_pemohon'] ?></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 col-sm-4 control-label"><strong>Instansi</strong></label>
                                <div class="col-lg-8">
                                    <p class="form-control-static"><?php echo $data['instansi_pemohon'] ?></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 col-sm-4 control-label"><strong>Sub Instansi</strong></label>
                                <div class="col-lg-8">
                                    <p class="form-control-static"><?php echo $data['sub_instansi_pemohon'] ?></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 col-sm-4 control-label"><strong>Jabatan</strong></label>
                                <div class="col-lg-8">
                                    <p class="form-control-static"><?php echo $data['jabatan_pemohon'] ?></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 col-sm-4 control-label"><strong>CV</strong></label>
                                <div class="col-lg-8">
                                    <p class="form-control-static"><a href="<?php echo base_url();?>home/download/<?php echo $data['cv_pemohon'] ?>" class="btn pdln-btn"><i class="fa  fa-download"></i> Unduh</a></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 col-sm-4 control-label"><strong>Kartu Pegawai</strong></label>
                                <div class="col-lg-8">
                                    <p class="form-control-static"><a href="<?php echo base_url(); ?>home/download/<?php echo $data['karpeg_pemohon'] ?>" class="btn pdln-btn"><i class="fa  fa-download"></i> Unduh</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <img src="<?php echo '../files/other/'.$data['foto_pemohon']; ?>" class="img-responsive img-thumbnail">                            
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="unitutama">
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Nomor Surat Unit Utama</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $data['no_surat_unit_utama'] ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Tanggal Surat Unit Utama</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $data['tgl_surat_unit_utama'] ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Instansi Surat Unit Utama</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $data['instansi_unit_utama'] ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Sub Instansi Surat Unit Utama</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $data['sub_instansi_unit_utama'] ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Perihal</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $data['perihal_surat_unit_utama'] ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Penanggung Jawab Surat Unit Utama</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $data['penandatangan_surat_unit_utama'] ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Surat Unit Utama</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><a href="<?php echo base_url();?>home/download/<?php echo $data['surat_unit_utama'] ?>" class="btn pdln-btn"><i class="fa  fa-download"></i> Unduh</a></p>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="undangan">
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Nomor Surat Undangan</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $data['no_surat_undangan'] ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Tanggal Surat Undangan</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $data['tgl_surat_undangan'] ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Instansi Surat Undangan</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $data['instansi_pengundang'] ?></p>
                        </div>        
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Negara Tujuan</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $data['negara_tujuan'] ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Waktu Kegiatan</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $data['tgl_awal_kegiatan'] ?> <br> <?php echo $data['tgl_akhir_kegiatan'] ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Kegiatan</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $data['rincian_kegiatan'] ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Sumber Dana</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><?php echo $data['sumber_dana_kegiatan'] ?></p>
                        </div>
                    </div>

                    <div class="form-group">
                      <label class="col-lg-4 col-sm-4 control-label">Keterangan Sumber Dana</label>
                      <div class="col-lg-8">
                        <p class="form-control-static"><?php echo $data['keterangan_sumber_dana_kegiatan'] ?></p>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Surat Udangan</strong></label>
                        <div class="col-lg-8">
                            <p class="form-control-static"><a href="<?php echo base_url();?>home/download/<?php echo $data['surat_undangan'] ?>" class="btn pdln-btn"><i class="fa  fa-download"></i> Unduh</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
      </div>

        <!-- <a id="btn-terima" title="Terima" class="btn btn-success mb" data-toggle="modal"><i class="fa fa-check"></i> Terima</a>
        <a data-toggle="modal" id="btn-tolak" title="Tolak" class="btn btn-danger mb" ><i class="fa fa-close"></i> Tolak</a> -->
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