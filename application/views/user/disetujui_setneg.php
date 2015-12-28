<!--main content start-->
  <section id="main-content">
    <section class="wrapper site-min-height">
      <h3><i class="fa fa-angle-right"></i> Disetujui Setneg</h3>
      <div class="row mt">
        <div class="col-lg-12">
          <div class="pdln-panel">
            <table class="table  table-striped table-bordered pdln-table table-curved" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      <th>Id</th>
                      <th>Nama</th>                      
                      <th>No SP Setneg</th>
                      <th>Tanggal SP Setneg </th>
                      <th>Sumber Dana</th>
                      <th style="width: 15%;">Aksi</th>
                  </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </section>

<script type="text/javascript">
          $(document).ready(function(){
            var table = $(".table").DataTable();
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
        <label class="col-lg-4 col-sm-4 control-label"><strong>No SP Setneg</strong></label>
        <div class="col-lg-8">
            <input type="text" id="no_sp_setneg" name="no_sp_setneg" disabled="true">
        </div>
        <br>            
        <label class="col-lg-4 col-sm-4 control-label"><strong>Tanggal SP Setneg</strong></label>
        <div class="col-lg-8">
            <input type="text" id="tgl_sp_setneg" name="tgl_sp_setneg" disabled="true">
        </div>
        <br>
        <label class="col-lg-4 col-sm-4 control-label"><strong>Sumber Dana</strong></label>
        <div class="col-lg-8">
            <input type="text" id="sumber_dana" name="sumber_dana" disabled="true">
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