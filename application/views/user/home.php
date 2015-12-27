<!--main content start-->
  <section id="main-content">
    <section class="wrapper site-min-height">
      <h3><i class="fa fa-angle-right"></i> Data Permohonan</h3>
      <div class="row mt">
        <div class="col-lg-12">
          <form method="POST" action="<?php echo base_url();?>home">
            <input type="hidden" name="content" value="step1">
            <a class="btn pdln-btn mb" title="Tambah data baru" onclick="$(this).closest('form').submit()"><i class="fa fa-plus-square"></i> Tambah Data</a>
          </form>
          <div class="pdln-panel">
            <table class="table  table-striped table-bordered pdln-table table-curved" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      <th>Id</th>
                      <th>Nama</th>                      
                      <th>Instansi</th>
                      <th>Negara </th>
                      <th>Waktu Awal Kegiatan</th>
                      <th>Waktu Akhir Kegiatan</th>
                      <th>Kegiatan</th>
                      <th>Sumber Dana</th>
                      <th>Status</th>
                      <th style="width: 15%;">Aksi</th>
                  </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </section>
  </section>

<script type="text/javascript">
          $(document).ready(function(){
            var table = $(".table").DataTable({
              "processing": true,
              "serverSide": true,
              "ajax": {
                "url": "<?php echo base_url('home/process') ?>",
                "data": {manage:'tab_pdln'},
                "type": "POST"
              },
              "columnDefs" : [
                {"targets" : 0,
                 "visible" : false},
                {"targets" : 1},
                {"targets" : 2},
                {"targets" : 3}, 
                {"targets" : 4},
                {"targets" : 5},
                {"targets" : 6},
                {"targets" : 7},
                {"targets" : 8},
                {"orderable": false,
                 "data": null,
                 "defaultContent":  '<div class="text-center">'+
                                    '<a style="margin:0 2px;" id="btn-view" class="btn btn-primary"><i class="fa fa-search"></i></a>'+
                                    '<a style="margin:0 2px;" id="btn-edit" class="btn btn-success"><i class="fa fa-edit"></i></a>'+
                                    '</div>',
                 "targets": 9}
              ],
              "order": [[ 0, "desc" ]]
            });
            var tabrow;

            $(document).on("click", "#btn-view", function (){
              content = 'view';
              var tr = $(this).closest('tr');
              tabrow = table.row(tr);
              row_id = tabrow.data()[0];
              kondisi = 'view';
              var $form=$(document.createElement('form')).css({display:'none'}).attr("method","POST").attr("action","<?php echo base_url('home') ?>");
              var $input=$(document.createElement('input')).css({display:'none'}).attr('name','id').val(row_id);
              var $input2=$(document.createElement('input')).css({display:'none'}).attr('name','content').val(content);
              var $input3=$(document.createElement('input')).css({display:'none'}).attr('name','kondisi').val(kondisi);
              $form.append($input).append($input2).append($input3);
              $("body").append($form);
              $form.submit();
            });

            $(document).on("click", "#btn-edit", function (){
              content = 'view';
              var tr = $(this).closest('tr');
              tabrow = table.row(tr);
              row_id = tabrow.data()[0];
              kondisi = 'edit';
              var $form=$(document.createElement('form')).css({display:'none'}).attr("method","POST").attr("action","<?php echo base_url('home') ?>");
              var $input=$(document.createElement('input')).css({display:'none'}).attr('name','id').val(row_id);
              var $input2=$(document.createElement('input')).css({display:'none'}).attr('name','content').val(content);
              var $input3=$(document.createElement('input')).css({display:'none'}).attr('name','kondisi').val(kondisi);
              $form.append($input).append($input2).append($input3);
              $("body").append($form);
              $form.submit();
            });


            $(document).on("click", "#btn-del", function (){
              var tr = $(this).closest('tr');
              tabrow = table.row( tr );
            });

            $("#deleteProject").click(function(){
              row_id = tabrow.data()[0];
              $.ajax({
                type: "post",
                url : "<?php echo base_url('admin/process') ?>",
                data: {manage:'del_user',key:row_id},
                success: function(data)
                {
                  table.draw();
                  $("#modal-deleteProject").modal('hide');
                }
              });
              return false;
            });
            
            $(document).on("click", "#nonaktif", function (){
              var tr = $(this).closest('tr');
              tabrow = table.row( tr );
              row_id = tabrow.data()[0];
              $.ajax({
                type: "post",
                url : "<?php echo base_url('admin/process') ?>",
                data: {manage:'act_user',key:row_id},
                success: function(data)
                {
                  table.draw();
                }
              });
              return false;
            })
          });
        </script>
      <!--main content end-->


<!-- Modal Delete Project-->
<div class="modal fade" id="modal-deleteProject" tabindex="-1" data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
      </div>
      <div class="modal-body">
        <p>Apa Anda yakin ingin menghapus?</p>
      </div>
      <div class="modal-footer">
        <a id="deleteProject" class="btn btn-danger">Hapus</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
      </div>
    </div>
</div>


<!-- Modal View Data-->
<div class="modal fade" id="modal-viewProject" tabindex="-1" data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header" style="background-color:green;">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Data PDLN</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" name="content" value="home">
        <br>        
        <img id="foto_pemohon" src="<?php base_url();?>img/img_person.jpg" class="img-responsive">
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Nama</strong></label>
        <div class="col-lg-8">
            <input type="text" id="nama_pemohon" name="nama_pemohon" disabled="true">
        </div>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>NIP</strong></label>
        <div class="col-lg-8">
            <input type="text" id="nip_pemohon" name="nip_pemohon" disabled="true">
        </div>
        <br>            
        <label class="col-lg-4 col-sm-4 control-label"><strong>No. Telepon</strong></label>
        <div class="col-lg-8">
            <input type="text" id="no_hp_pemohon" name="no_hp_pemohon" disabled="true">
        </div>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>No. Passport</strong></label>
        <div class="col-lg-8">
            <input type="text" id="no_passport_pemohon" name="no_passport_pemohon" disabled="true">
        </div>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Masa Berakhir Passport</strong></label>
        <div class="col-lg-8">
            <input type="text" id="valid_passport_pemohon" name="valid_passport_pemohon" disabled="true">
        </div>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Pekerjaan</strong></label>
        <div class="col-lg-8">
            <input type="text" id="pekerjaan_pemohon" name="pekerjaan_pemohon" disabled="true">
        </div>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Instansi</strong></label>
        <div class="col-lg-8">
            <input type="text" id="instansi_pemohon" name="instansi_pemohon" disabled="true">
        </div>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Jabatan</strong></label>
        <div class="col-lg-8">
            <input type="text" id="jabatan_pemohon" name="jabatan_pemohon" disabled="true">
        </div>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>CV</strong></label>
        <div class="col-lg-8">
            <p class="form-control-static"><a href="#">Unduh</a></p>
        </div>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Kartu Pegawai</strong></label>
        <div class="col-lg-8">
            <p class="form-control-static"><a href="#">Unduh</a></p>
        </div>
        <br>

        <h4>Surat Instansi Awal</h4>

        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>No. Surat Instansi Awal</strong></label>
        <div class="col-lg-8">
            <input type="text" id="no_surat_asal" name="no_surat_asal" disabled="true">
        </div>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Tanggal Surat Instansi Awal</strong></label>
        <div class="col-lg-8">
            <input type="text" id="tgl_surat_asal" name="tgl_surat_asal" disabled="true">
        </div>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Penanggung Jawab</strong></label>
        <div class="col-lg-8">
            <input type="text" id="penanggung_jawab_surat_asal" name="penanggung_jawab_surat_asal" disabled="true">
        </div>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Instansi Surat Asal</strong></label>
        <div class="col-lg-8">
            <input type="text" id="instansi_surat_asal" name="instansi_surat_asal" disabled="true">
        </div>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Perihal</strong></label>
        <div class="col-lg-8">
            <input type="text" id="perihal_surat_asal" name="perihal_surat_asal" disabled="true">
        </div>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Surat Instansi Awal</strong></label>
        <div class="col-lg-8">
            <p class="form-control-static"><a href="#">Unduh</a></p>
        </div>
        <br>

    <h4>Surat Unit Utama</h4>

        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Nomor Surat Unit Utama</strong></label>
        <div class="col-lg-8">
            <input type="text" id="no_surat_unit_utama" name="no_surat_unit_utama" disabled="true">
        </div>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Tanggal Surat Unit Utama</strong></label>
        <div class="col-lg-8">
            <input type="text" id="tgl_surat_unit_utama" name="tgl_surat_unit_utama" disabled="true">
        </div>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Instansi Surat Utama</strong></label>
        <div class="col-lg-8">
            <input type="text" id="instansi_surat_unit_utama" name="instansi_surat_unit_utama" disabled="true">
        </div>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Perihal</strong></label>
        <div class="col-lg-8">
            <input type="text" id="perihal_surat_unit_utama" name="perihal_surat_unit_utama" disabled="true">
        </div>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Penanggung Jawab</strong></label>
        <div class="col-lg-8">
            <input type="text" id="penanggung_jawab_surat_unit_utama" name="penanggung_jawab_surat_unit_utama" disabled="true">
        </div>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Surat Unit Utama</strong></label>
        <div class="col-lg-8">
            <p class="form-control-static"><a href="#">Unduh</a></p>
        </div>
        <br>

    <h4>Surat Undangan</h4>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Nomor Surat Undangan</strong></label>
        <div class="col-lg-8">
            <input type="text" id="no_surat_undangan" name="no_surat_undangan" disabled="true">
        </div>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Tanggal Surat Undangan</strong></label>
        <div class="col-lg-8">
            <input type="text" id="tgl_surat_undangan" name="tgl_surat_undangan" disabled="true">
        </div>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Instansi Surat Undangan</strong></label>
        <div class="col-lg-8">
            <input type="text" id="instansi_pengundang" name="instansi_pengundang" disabled="true">
        </div>        
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Negara Tujuan</strong></label>
        <div class="col-lg-8">
            <input type="text" id="negara_tujuan" name="negara_tujuan" disabled="true">
        </div>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Kegiatan</strong></label>
        <div class="col-lg-8">
            <input type="text" id="keterangan_kegiatan" name="keterangan_kegiatan" disabled="true">
        </div>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Sumber Dana</strong></label>
        <div class="col-lg-8">
            <input type="text" id="keterangan_sumber_dana_kegiatan" name="keterangan_sumber_dana_kegiatan" disabled="true">
        </div>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Surat Udangan</strong></label>
        <div class="col-lg-8">
            <p class="form-control-static"><a href="#">Unduh</a></p>
        </div>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Status</strong></label>
        <div class="col-lg-8">
            <input type="text" id="keterangan_status" name="keterangan_status" disabled="true">
        </div>
        <br>

      <div class="modal-footer">

        <a id="viewProject" class="btn btn-success">Terima</a>
      <!-- 
        <a id="viewProject" class="btn btn-success">Pending</a>
        <a id="viewProject" class="btn btn-success">Tolak</a> -->
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
      </div>
    </div>
</div>