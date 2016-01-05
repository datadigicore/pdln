<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">
            <form class="form-horizontal style-form"  id='form-pdln'>
            <div class="row">            
                <div class="col-sm-3">
                    <div id="links">                        
                        <img src="<?php echo '../files/other/'.$foto_pemohon; ?>" class="img-responsive">
                        <?php if ($foto_pemohon!=""){ 
                            echo "<input type='hidden' name='txt_upl_files1' value='$foto_pemohon'> <br>";
                            /*echo "<input type='file' name='upl_files1' class='form-control' style='width: auto;'' disable='true'>";*/
                            echo "$foto_pemohon   <a class='btn btn-danger' title='Hapus' ><i class='fa fa-remove'></i></a>";
                            }else{?>
                                <input type="file" name="upl_files1" class="form-control">
                            <?php
                            }
                            ?>
                    </div>
                    
                </div>
                <input type="hidden" name="no_aplikasi_data_diri" class="form-control" value="<?php echo $no_aplikasi_data_diri ?>">
                <input type="hidden" name="id_user" class="form-control" value="<?php echo $id_user ?>">
                <div class="col-sm-9">
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Nama</strong></label>
                        <div class="col-lg-8">
                            <input type="text" name="nama_pemohon" class="form-control" value="<?php echo $nama_pemohon ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>NIP</strong></label>
                        <div class="col-lg-8">
                            <input type="number" name="nip_pemohon" class="form-control" value="<?php echo $nip_pemohon ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>No. Telepon</strong></label>
                        <div class="col-lg-8">
                            <input type="number" name="no_hp_pemohon" class="form-control" value="<?php echo $no_hp_pemohon ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>No. Passport</strong></label>
                        <div class="col-lg-8">
                            <input type="text" name="no_passport_pemohon" class="form-control" value="<?php echo $no_passport_pemohon ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Tanggal Terbit Passport</strong></label>
                        <div class="col-lg-8">
                            <input type="date" name="tgl_terbit_passport" class="form-control" value="<?php echo $tgl_terbit_passport ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Tanggal Kadaluarsa Passport</strong></label>
                        <div class="col-lg-8">
                            <input type="date" name="tgl_habis_passport" class="form-control" value="<?php echo $tgl_habis_passport ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Pekerjaan</strong></label>
                        <div class="col-lg-8">
                          <select class="form-control" name="pekerjaan_pemohon" name="pekerjaan_pemohon">
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
                            <input type="text" name="instansi_pemohon" class="form-control" value="<?php echo $instansi_pemohon ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Jabatan</strong></label>
                        <div class="col-lg-8">
                            <input type="text" name="jabatan_pemohon" class="form-control"value="<?php echo $jabatan_pemohon ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>CV</strong></label>
                        <div class="col-lg-8">
                            <?php if ($cv_pemohon!=""){ 
                                echo "<input type='hidden' name='txt_upl_files2' value='$cv_pemohon'>";
                                echo "$cv_pemohon   "; echo "<a class='btn btn-danger' title='Hapus' ><i class='fa fa-remove'></i></a>";
                            }else{?>
                                <input type="file" name="upl_files2" class="form-control" style="width: auto;">
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Kartu Pegawai</strong></label>
                        <div class="col-lg-8">
                            <?php if ($karpeg_pemohon!=""){ 
                                echo "<input type='hidden' name='txt_upl_files3' value='$karpeg_pemohon'>";
                                echo "$karpeg_pemohon   "; echo "<a class='btn btn-danger' title='Hapus' ><i class='fa fa-remove'></i></a>";
                            }else{?>
                                <input type="file" name="upl_files3" class="form-control" style="width: auto;">
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Surat Tugas</strong></label>
                        <div class="col-lg-8">
                            <?php if ($surat_tugas_pemohon!=""){ 
                                echo "<input type='hidden' name='txt_upl_files7' value='$surat_tugas_pemohon'>";
                                echo "$surat_tugas_pemohon   "; echo "<a class='btn btn-danger' title='Hapus' ><i class='fa fa-remove'></i></a>";
                            }else{?>
                                <input type="file" name="upl_files7" class="form-control" style="width: auto;">
                            <?php
                            }
                            ?>
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
                            <input type="text" class="form-control" name="no_surat_unit_utama" placeholder="No Surat" value="<?php echo $no_surat_unit_utama ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Tanggal Surat Unit Utama</strong></label>
                        <div class="col-lg-8">
                            <input type="date" class="form-control" name="tgl_surat_unit_utama" placeholder="Tanggal Surat" value="<?php echo $tgl_surat_unit_utama ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Instansi</strong></label>
                        <div class="col-lg-8">
                            <input type="text" name="instansi_pemohon" class="form-control" value="<?php echo $instansi_unit_utama ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Perihal</strong></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="perihal_surat_unit_utama" placeholder="Perihal" value="<?php echo $perihal_surat_unit_utama ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Penanggung Jawab Surat Unit Utama</strong></label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="penandatangan_surat_unit_utama" placeholder="Penanggung Jawab" value="<?php echo $penandatangan_surat_unit_utama ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label"><strong>Surat Unit Utama</strong></label>
                        <div class="col-lg-8">
                            <?php if ($surat_unit_utama!=""){ 
                                echo "<input type='hidden' name='txt_upl_files4' value='$surat_unit_utama'>";
                                echo "$surat_unit_utama   "; echo "<a class='btn btn-danger' title='Hapus' ><i class='fa fa-remove'></i></a>";
                            }else{?>
                                <input type="file" name="upl_files4" class="form-control" style="width: auto;">
                            <?php
                            }
                            ?>

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
                        <input type="text" class="form-control" name="no_surat_undangan" placeholder="No Surat" value="<?php echo $no_surat_undangan ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 col-sm-4 control-label"><strong>Tanggal Surat Undangan</strong></label>
                    <div class="col-lg-8">
                        <input type="date" class="form-control" name="tgl_surat_undangan" placeholder="Tanggal Surat" value="<?php echo $tgl_surat_undangan ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 col-sm-4 control-label"><strong>Instansi Surat Undangan</strong></label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="instansi_pengundang" placeholder="Instansi Unit Utama" value="<?php echo $instansi_pengundang ?>">
                    </div>        
                </div>

                <div class="form-group">
                    <label class="col-lg-4 col-sm-4 control-label"><strong>Negara Tujuan</strong></label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="negara_tujuan" placeholder="Negara Tujuan" value="<?php echo $negara_tujuan ?>">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-4 col-sm-4 control-label">Waktu Kegiatan</label>
                  <div class="col-sm-4">
                    <input type="date" class="form-control" name="tgl_awal_kegiatan" placeholder="Waktu Mulai Kegiatan" value="<?php echo $tgl_awal_kegiatan ?>">
                  </div>
                  <div class="col-sm-4">
                    <input type="date" class="form-control" name="tgl_akhir_kegiatan" placeholder="Waktu Akhir Kegiatan" value="<?php echo $tgl_akhir_kegiatan ?>">
                  </div>
                </div> 

                <div class="form-group">
                    <label class="col-lg-4 col-sm-4 control-label"><strong>Kegiatan</strong></label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="rincian_kegiatan" placeholder="Rincian_Kegiatan" value="<?php echo $rincian_kegiatan ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 col-sm-4 control-label"><strong>Sumber Dana</strong></label>
                    <div class="col-lg-8">
                    <select class="form-control" name="sumber_dana_kegiatan">
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
                    <input type="text" class="form-control" name="keterangan_sumber_dana_kegiatan" placeholder="Mis : Beasiswa Ditjen Dikti" value="<?php echo $keterangan_sumber_dana_kegiatan ?>">
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 col-sm-4 control-label"><strong>Surat Udangan</strong></label>
                    <div class="col-lg-8">
                        <?php if ($surat_undangan!=""){ 
                            echo "<input type='hidden' name='txt_upl_files5' value='$surat_undangan'>";
                            echo "$surat_undangan   "; echo "<a class='btn btn-danger' title='Hapus' ><i class='fa fa-remove'></i></a>";
                            }else{?>
                                <input type="file" name="upl_files5" class="form-control" style="width: auto;">
                            <?php
                            }
                            ?>
                        
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 col-sm-4 control-label"><strong>Surat Perjanjian</strong></label>
                    <div class="col-lg-8">
                        <?php if ($surat_perjanjian!=""){ 
                            echo "<input type='hidden' name='txt_upl_files6' value='$surat_perjanjian'>";
                            echo "$surat_perjanjian   "; echo "<a class='btn btn-danger' title='Hapus' ><i class='fa fa-remove'></i></a>";
                            }else{?>
                                <input type="file" name="upl_files6" class="form-control" style="width: auto;">
                            <?php
                            }
                            ?>
                    </div>
                </div>
              </div>
            </div>
            <input type="hidden" name="manage" value="edit_data_pdln" />
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

         console.log("submit event");
            var fd = new FormData(document.getElementById("form-pdln"));
           
            $.ajax({
              url : "<?php echo base_url('home/process') ?>",
              type: "POST",
              data: fd,
              enctype: 'multipart/form-data',
              processData: false,  // tell jQuery not to process the data
              contentType: false   // tell jQuery not to set contentType
            }).done(function( data ) {
                /*var $form=$(document.createElement('form')).css({display:'none'}).attr("method","POST").attr("action","<?php echo base_url('home') ?>");
                var $input=$(document.createElement('input')).css({display:'none'}).attr('name','id_user').val();                    
                $form.append($input);
                $("body").append($form);
                $form.submit();*/

            }); 
    });

</script>