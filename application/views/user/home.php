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
                      <th>NIP Pemohon</th>
                      <th>Instansi</th>
                      <th>Sub Instansi</th>
                      <th>Negara</th>
                      <th>Waktu Awal Kegiatan</th>
                      <th>Waktu Akhir Kegiatan</th>
                      <th>Kegiatan</th>
                      <th>Sumber Dana</th>                      
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
                {"targets" : 9},
                {"orderable": false,
                 "data": null,
                 "defaultContent":  '<div class="text-center">'+
                                    '<a style="margin:0 2px;" id="btn-view" class="btn btn-primary"><i class="fa fa-search"></i></a>'+
                                    '<a style="margin:0 2px;" id="btn-edit" class="btn btn-success"><i class="fa fa-edit"></i></a>'+
                                    '</div>',
                 "targets": 10}
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