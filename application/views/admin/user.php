<!--main content start-->
        <section id="main-content">
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Data Pengguna</h3>
            <div class="row mt">
              <div class="col-lg-12">
                <form method="POST" action="<?php echo base_url();?>admin">
                  <input type="hidden" name="content" value="add_user">
                  <a class="btn pdln-btn mb" title="Add new item" onclick="$(this).closest('form').submit()"><i class="fa fa-plus-square"></i> Tambah Pengguna</a>
                </form>
                <div class="pdln-panel">
                  <table class="table table-striped table-bordered pdln-table table-curved" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th style="width: 15%;">Nama</th>
                            <th style="width: 5%;">Status</th>
                            <th style="width: 30%;">Alamat</th>
                            <th style="width: 20%;">Email</th>
                            <th style="width: 10%;">No Telepon</th>
                            <th style="width: 15%;">Aksi</th>
                        </tr>
                    </thead>
                  </table>
                </div>
              </div> 
            </div>
          </section><! --/wrapper -->
        </section><!-- /MAIN CONTENT -->
        <script type="text/javascript">
          $(document).ready(function(){
            var table = $(".table").DataTable({
              "processing": true,
              "serverSide": true,
              "ajax": {
                "url": "<?php echo base_url('admin/process') ?>",
                "data": {manage:'tab_user'},
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
                {"orderable": false,
                 "data": null,
                 "defaultContent":  '<div class="text-center">'+
                                      '<a style="margin:0 2px;" id="btn-edt" href="#modal-editProject" class="btn btn-success btn-sm" data-toggle="modal"><i class="fa fa-edit"></i> Edit</a>'+
                                      '<a style="margin:0 2px;" id="btn-del" href="#modal-deleteProject" class="open-deleteProject btn btn-danger btn-sm" data-toggle="modal"><i class="fa fa-trash-o"></i> Hapus</a>'+
                                    '</div>',
                 "targets": 6 }
              ],
              "order": [[ 0, "desc" ]]
            });
            var tabrow;

            $(document).on("click", "#btn-edt", function (){
              var tr = $(this).closest('tr');
              tabrow = table.row( tr );
              $("#fullname").val(tabrow.data()[1]);
              $("#address").val(tabrow.data()[3]);
              $("#emails").val(tabrow.data()[4]);
              $("#phones").val(tabrow.data()[5]);
            });

            $("#editProject").click(function(){
              row_id = tabrow.data()[0];
              row_nm = $("#fullname").val();
              row_almt = $("#address").val();
              row_eml = $("#emails").val();
              row_phn = $("#phones").val();
              $.ajax({
                type: "post",
                url : "<?php echo base_url('admin/process') ?>",
                data: {
                        manage:'edt_user',
                        key:row_id,
                        fullname:row_nm,
                        address:row_almt,
                        emails:row_eml,
                        phones:row_phn
                      },
                success: function(data)
                {
                  table.draw();
                  $("#modal-editProject").modal('hide');
                }
              });
              return false;
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

<div class="modal fade" id="modal-editProject" tabindex="-1" data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header" style="background-color:green;">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" name="content" value="addnew">
        <input type="text" class="form-control" placeholder="Nama" autofocus id="fullname" name="fullname" required>
        <br>
        <textarea type="text" class="form-control" placeholder="Alamat" autofocus id="address" name="address" style="resize:none;"></textarea>
        <br>
        <input type="email" class="form-control" placeholder="Email" autofocus id="emails" name="emails" required>
        <br>
        <input type="text" class="form-control" placeholder="No. Telepon" autofocus id="phones" name="phones">
      </div>
      <div class="modal-footer">
        <a id="editProject" class="btn btn-success">Submit</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
      </div>
    </div>
</div>