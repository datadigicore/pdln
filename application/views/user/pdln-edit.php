<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">
            <form class="form-horizontal style-form"  id='form-pdln'>
                <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Identitas</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">            
                            <input type="hidden" name="no_aplikasi_data_diri" class="form-control" value="<?php echo $data['no_aplikasi_data_diri'] ?>">
                            <input type="hidden" name="id_user" class="form-control" value="<?php echo $data['id_user'] ?>">
                            <input type="hidden" name="id_data_diri" class="form-control" value="<?php echo $data['id_data_diri'] ?>">
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <label class="col-lg-4 col-sm-4 control-label"><strong>Nama</strong></label>
                                    <div class="col-lg-8">
                                        <input type="text" name="nama_pemohon" class="form-control" value="<?php echo $data['nama_pemohon'] ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 col-sm-4 control-label"><strong>NIP</strong></label>
                                    <div class="col-lg-8">
                                        <input type="number" name="nip_pemohon" class="form-control" value="<?php echo $data['nip_pemohon'] ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 col-sm-4 control-label"><strong>No. Telepon</strong></label>
                                    <div class="col-lg-8">
                                        <input type="number" name="no_hp_pemohon" class="form-control" value="<?php echo $data['no_hp_pemohon'] ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 col-sm-4 control-label"><strong>Pekerjaan</strong></label>
                                    <div class="col-lg-8">
                                      <select class="form-control" name="pekerjaan_pemohon" name="pekerjaan_pemohon">
                                        <option value="<?php echo $data['pekerjaan_pemohon'] ?>"><?php echo $data['pekerjaan_pemohon'] ?></option>
                                        <option value="<?php echo $data['pekerjaan_pemohon'] ?>">---------</option>
                                        <option value="PNS">PNS</option>
                                        <option value="Swasta">Swasta</option>
                                        <option value="Lainnya">Lainnya</option>
                                      </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                <label class="col-lg-4 col-sm-4 control-label"><strong>Instansi</strong></label>
                                <div class="col-sm-8">
                                  <select class="form-control" id="instansi_pemohon" name="instansi_pemohon">
                                      <!-- query dari db -->
                                      <option value="<?php echo $data['id_instansi_pemohon']?>"><?php echo $data['instansi_pemohon']?></option>                                      
                                      <option value="-">---Pilih Instansi Unit Utama---</option>
                                      <?php echo "ini datanya";print_r($instansi); foreach ($instansi as $key => $value) {
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

                                <div class="form-group">
                                    <label class="col-lg-4 col-sm-4 control-label"><strong>Jabatan</strong></label>
                                    <div class="col-lg-8">
                                        <input type="text" name="jabatan_pemohon" class="form-control"value="<?php echo $data['jabatan_pemohon'] ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 col-sm-4 control-label"><strong>CV</strong></label>
                                    <div class="col-lg-8">
                                        <div id="links2">
                                        <?php if ($data['cv_pemohon']!=""){ 
                                            echo '<input type="hidden" id="text2" name="txt_upl_files2" value="'.$data["cv_pemohon"].'">';
                                            echo '<a class="btn btn-danger" id="hapus2" title="Hapus" ><i class="fa fa-remove"> CV PEMOHON </i></a>';                                            
                                        }else{
                                            echo '<a class="btn btn-success mb" id="tambah2" title="Tambah" ><i class="fa fa-plus-square"></i> CV PEMOHON </a>';
                                        }
                                        ?>
                                        <input type="file" id="data2" name="upl_files2" class="form-control">
                                    </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 col-sm-4 control-label"><strong>Kartu Pegawai</strong></label>
                                    <div class="col-lg-8">
                                        <div id="links3">
                                        <?php if ($data['karpeg_pemohon']!=""){ 
                                            echo '<input type="hidden" id="text3" name="txt_upl_files3" value="'.$data['karpeg_pemohon'].'">';
                                            echo "<a class='btn btn-danger' id='hapus3' title='Hapus' ><i class='fa fa-remove'> KARPEG PEMOHON  </i></a>";

                                        }else{
                                            echo '<a class="btn btn-success mb" id="tambah3" title="Tambah" ><i class="fa fa-plus-square"></i> KARPEG PEMOHON </a>';
                                        }
                                        ?>
                                        <input type="file" id="data3" name="upl_files3" class="form-control">
                                    </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 col-sm-4 control-label"><strong>Surat Tugas</strong></label>
                                    <div class="col-lg-8">
                                        <div id="links7">
                                        <?php if ($data['surat_tugas_pemohon']!=""){ 
                                            echo '<input type="hidden" id="text7" name="txt_upl_files7" value="'.$data['surat_tugas_pemohon'].'">';
                                            echo "<a class='btn btn-danger'id='hapus7' title='Hapus' ><i class='fa fa-remove'> SURAT TUGAS PEMOHON </i></a>";
                                        }else{
                                            echo '<a class="btn btn-success mb" id="tambah7" title="Tambah" ><i class="fa fa-plus-square"></i> SURAT TUGAS PEMOHON</a>';
                                        }
                                        ?>
                                        <input type="file" id="data7" name="upl_files7" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="col-sm-3">
                                <?php echo '<input type="hidden" id="text1" name="txt_upl_files1" value="'.$data["foto_pemohon"].'"> <br>'; ?>                                
                                <?php if ($data['foto_pemohon']!=""){ ?>
                                <img src="<?php echo '../files/other/'.$data['foto_pemohon']; ?>" class="img-responsive"> 
                                <?php                                        
                                /*echo "<input type='file' name='upl_files1' class='form-control' style='width: auto;'' disable='true'>";*/
                                echo '<a class="btn btn-danger" id="hapus1" title="Hapus" ><i class="fa fa-remove"> FOTO PEMOHON </i></a>';
                                }else{
                                    echo '<a class="btn btn-success mb" id="tambah1" title="Tambah" ><i class="fa fa-plus-square"></i> FOTO PEMOHON </a>';
                                }
                                ?>
                                <input type="file" id="data1" name="upl_files1" class="form-control">
                        </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Paspor</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-lg-4 col-sm-4 control-label"><strong>No. Passport</strong></label>
                            <div class="col-lg-8">
                                <input type="text" name="no_passport_pemohon" class="form-control" value="<?php echo $data['no_passport_pemohon'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-sm-4 control-label"><strong>Tanggal Terbit Passport</strong></label>
                            <div class="col-lg-8">                                
                                <input class="form-control hasDatepicker" readonly="1" style="cursor:pointer" name="tgl_terbit_passport" value="<?php echo $data['tgl_terbit_passport'] ?>">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-sm-4 control-label"><strong>Tanggal Kadaluarsa Passport</strong></label>
                            <div class="col-lg-8">
                                <input class="form-control hasDatepicker" readonly="1" style="cursor:pointer" name="tgl_habis_passport" value="<?php echo $data['tgl_habis_passport'] ?>">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Surat Unit Utama</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-lg-4 col-sm-4 control-label"><strong>Nomor Surat Unit Utama</strong></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="no_surat_unit_utama" placeholder="No Surat" value="<?php echo $data['no_surat_unit_utama'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 col-sm-4 control-label"><strong>Tanggal Surat Unit Utama</strong></label>
                                <div class="col-lg-8">
                                    <input class="form-control hasDatepicker" readonly="1" style="cursor:pointer" name="tgl_surat_unit_utama" placeholder="Tanggal Surat" value="<?php echo $data['tgl_surat_unit_utama'] ?>">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>

                            <div class="form-group">
                            <label class="col-lg-4 col-sm-4 control-label"><strong>Instansi</strong></label>
                            <div class="col-sm-8">
                              <select class="form-control" id="instansi_unit_utama" name="instansi_unit_utama">
                                  <!-- query dari db -->
                                  <option value="<?php echo $data['id_instansi_unit_utama'] ?>"><?php echo $data['instansi_unit_utama'] ?></option>
                                  <option value="-">---Pilih Instansi Unit Utama---</option>
                                  <?php echo "ini datanya";print_r($instansi); foreach ($instansi as $key => $value) {
                                    echo '<option value="'.$value['id'].'">'.$value['nama_instansi'].'</option>';                          
                                  }?>
                                  <!-- <option value="Lainnya">Lain-lain</option> -->
                              </select>

                              <select class="form-control" id="sub_instansi_unit_utama" name="sub_instansi_unit_utama" style="margin-top: 15px;">
                                  <!-- query dari db -->
                                  <option value="-">---Pilih Sub Instansi Unit Utama---</option>
                                  <!-- <option value="lainnya">Lain-lain</option> -->
                              </select>
                              <div id="result"></div>
                             
                            </div>
                          </div>


                            <div class="form-group">
                                <label class="col-lg-4 col-sm-4 control-label"><strong>Perihal</strong></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="perihal_surat_unit_utama" placeholder="Perihal" value="<?php echo $data['perihal_surat_unit_utama'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 col-sm-4 control-label"><strong>Penanggung Jawab Surat Unit Utama</strong></label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="penandatangan_surat_unit_utama" placeholder="Penanggung Jawab" value="<?php echo $data['penandatangan_surat_unit_utama'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 col-sm-4 control-label"><strong>Surat Unit Utama</strong></label>
                                <div class="col-lg-8">
                                    <div id="links4">
                                    <?php if ($data['surat_unit_utama']!=""){ 
                                        echo '<input type="hidden" id="text4" name="txt_upl_files4" value="'.$data['surat_unit_utama'].'">';                                
                                        echo "<a class='btn btn-danger' id='hapus4' title='Hapus' ><i class='fa fa-remove'>SURAT UNIT UTAMA</i></a>";
                                    }else{
                                        echo '<a class="btn btn-success mb" id="tambah4" title="Tambah" ><i class="fa fa-plus-square"></i> SURAT UNIT UTAMA</a>';
                                    }
                                    ?>
                                    <input type="file" id="data4" name="upl_files4" class="form-control">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Surat Undangan</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">

                        <div class="form-group">
                            <label class="col-lg-4 col-sm-4 control-label"><strong>Nomor Surat Undangan</strong></label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="no_surat_undangan" placeholder="No Surat" value="<?php echo $data['no_surat_undangan'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-sm-4 control-label"><strong>Tanggal Surat Undangan</strong></label>
                            <div class="col-lg-8">
                                <input class="form-control hasDatepicker" readonly="1" style="cursor:pointer" name="tgl_surat_undangan" placeholder="Tanggal Surat" value="<?php echo $data['tgl_surat_undangan'] ?>">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-sm-4 control-label"><strong>Instansi Surat Undangan</strong></label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="instansi_pengundang" placeholder="Instansi Unit Utama" value="<?php echo $data['instansi_pengundang'] ?>">
                            </div>        
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-sm-4 control-label"><strong>Negara Tujuan</strong></label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="negara_tujuan" placeholder="Negara Tujuan" value="<?php echo $data['negara_tujuan'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-4 col-sm-4 control-label"><strong>Waktu Kegiatan</strong></label>
                          <div class="col-sm-4">
                            <input class="form-control hasDatepicker" readonly="1" style="cursor:pointer" name="tgl_awal_kegiatan" placeholder="Waktu Mulai Kegiatan" value="<?php echo $data['tgl_awal_kegiatan'] ?>">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                          </div>
                          <div class="col-sm-4">
                            <input class="form-control hasDatepicker" readonly="1" style="cursor:pointer" name="tgl_akhir_kegiatan" placeholder="Waktu Akhir Kegiatan" value="<?php echo $data['tgl_akhir_kegiatan'] ?>">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                          </div>
                        </div> 

                        <div class="form-group">
                            <label class="col-lg-4 col-sm-4 control-label"><strong>Kegiatan</strong></label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="rincian_kegiatan" placeholder="Rincian_Kegiatan" value="<?php echo $data['rincian_kegiatan'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-sm-4 control-label"><strong>Sumber Dana</strong></label>
                            <div class="col-lg-8">
                            <select class="form-control" name="sumber_dana_kegiatan">
                                <option value="<?php echo $data['sumber_dana_kegiatan'] ?>"><?php echo $data['sumber_dana_kegiatan'] ?></option>
                                <option value="<?php echo $data['sumber_dana_kegiatan'] ?>">---Pilih Sumber Dana---</option>
                                <option value="APBN">APBN (Pemerintah)</option>
                                <option value="Pribadi">Pribadi (Dana Sendiri)</option>
                                <option value="Pengundang">Pengundang (Sponsor)</option>
                                <option value="lain-lain">Lain-lain (Seniman )</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-4 col-sm-4 control-label"><strong>Keterangan Sumber Dana</strong></label>
                          <div class="col-lg-8">
                            <input type="text" class="form-control" name="keterangan_sumber_dana_kegiatan" placeholder="Mis : Beasiswa Ditjen Dikti" value="<?php echo $data['keterangan_sumber_dana_kegiatan'] ?>">
                          </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-sm-4 control-label"><strong>Surat Udangan</strong></label>
                            <div class="col-lg-8">
                                <div id="links5">
                                <?php if ($data['surat_undangan']!=""){ 
                                echo '<input type="hidden" id="text5" name="txt_upl_files5" value="'.$data['surat_undangan'].'">';
                                echo '<a class="btn btn-danger" id="hapus5" title="Hapus" ><i class="fa fa-remove"> SURAT UNDANGAN </i></a>';
                                }else{
                                    echo '<a class="btn btn-success mb" id="tambah5" title="Tambah" ><i class="fa fa-plus-square"></i> SURAT UNDANGAN</a>';
                                }
                                ?>
                                <input type="file" id="data5" name="upl_files5" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 col-sm-4 control-label"><strong>Surat Perjanjian</strong></label>
                            <div class="col-lg-8">
                                <div id="links6">
                                <?php if ($data['surat_perjanjian']!=""){ 
                                echo '<input type="hidden" id="text6" name="txt_upl_files6" value="'.$data['surat_perjanjian'].'">';
                                echo '<a class="btn btn-danger" id="hapus6" title="Hapus" ><i class="fa fa-remove"> SURAT PERJANJIAN </i></a>';
                                }else{
                                    echo '<a class="btn btn-success mb" id="tambah6" title="Tambah" ><i class="fa fa-plus-square"></i> SURAT PERJANJIAN</a>';
                                }
                                ?>
                                <input type="file" id="data6" name="upl_files6" class="form-control">
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

            
            <input type="hidden" name="manage" value="edit_data_pdln" />
          </form>
        <a class="btn btn-success pull-left" title="Update" id="editdata" style="margin-right: 15px;" onclick="$(this).closest('form').submit()"><i class="fa fa-check-square-o"></i>Update</a>
        <form class="form-horizontal style-form" method="post" action="<?php echo base_url();?>home">
            <input type="hidden" name="content" value="home">
            <a class="btn btn-danger" title="Cancel" onclick="$(this).closest('form').submit()"><i class="fa fa-remove"></i>Cancel</a>
        </form>
        
         </div>
        </div>

      </div>
    </div>
  </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
<!--main content end-->

<script type="text/javascript">
    $(document).ready(function()
    {
     
      $(document).on("click", "#hapus1", function (){        
        /*$("#data1").prop('disabled',false);*/
        $("#data1").show();
        $("#text1").prop('value',null);
     });
      $("#data1").hide();
     
     $(document).on("click", "#tambah1", function (){        
        /*$("#data1").prop('disabled',false);*/
        $("#data1").show();
     });      
     
     $(document).on("click", "#hapus2", function (){
        $("#data2").show();
        $("#text2").prop('value',null);
     });
     $("#data2").hide();

     $(document).on("click", "#tambah2", function (){        
        /*$("#data1").prop('disabled',false);*/
        $("#data2").show();
     });

     $(document).on("click", "#hapus3", function (){
        $("#data3").show();
        $("#text3").prop('value',null);
     });
     $("#data3").hide();

     $(document).on("click", "#tambah3", function (){        
        /*$("#data1").prop('disabled',false);*/
        $("#data3").show();
     });

     $(document).on("click", "#hapus4", function (){
        $("#data4").show();
        $("#text4").prop('value',null);
     });
     $("#data4").hide();

     $(document).on("click", "#tambah4", function (){        
        /*$("#data1").prop('disabled',false);*/
        $("#data4").show();
     });

     $(document).on("click", "#hapus5", function (){
        $("#data5").show();
        $("#text5").prop('value',null);
     });
     $("#data5").hide();

     $(document).on("click", "#tambah5", function (){        
        /*$("#data1").prop('disabled',false);*/
        $("#data5").show();
     });

     $(document).on("click", "#hapus6", function (){
        $("#data6").show();
        $("#text6").prop('value',null);
     });
     $("#data6").hide();

     $(document).on("click", "#tambah6", function (){        
        /*$("#data1").prop('disabled',false);*/
        $("#data6").show();
     });
     
     $(document).on("click", "#hapus7", function (){
        $("#data7").show();
        $("#text7").prop('value',null);
     });
     $("#data7").hide();

     $(document).on("click", "#tambah7", function (){        
        /*$("#data1").prop('disabled',false);*/
        $("#data7").show();
     });

    $("#jabatan_pemohon").change(function(){
      if($(this).val() == "Lainnya"){
       $("#jabatan_lain").show();
      }
      else{
       $("#jabatan_lain").hide();
      }         
     });
    $("#jabatan_lain").hide();

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

     $("#instansi_unit_utama").change(function(){
      if ($(this).val() != "") {
        $("#sub_instansi_unit_utama").show();
        id = $("#instansi_unit_utama").val();      
        $.ajax({
                type: "post",
                url : "<?php echo base_url('home/process') ?>",
                data: {manage:'select_data',key:id},
                success: function(result)
                {
                  //document.write(result);
                  $("#sub_instansi_unit_utama").html(result);
                  //$("#result").html(result);
                }
              });
              return false;
      }else{
        $("#sub_instansi_unit_utama").hide();   
      }      
      });
     $("#sub_instansi_unit_utama").hide();

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
            var $form=$(document.createElement('form')).css({display:'none'}).attr("method","POST").attr("action","<?php echo base_url('home') ?>");
            var $input=$(document.createElement('input')).css({display:'none'}).attr('name','id_user').val();                    
            $form.append($input);
            $("body").append($form);
            $form.submit();

        }); 
     });
    });

</script>