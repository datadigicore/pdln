<!--main content start-->
  <section id="main-content">
    <section class="wrapper site-min-height">
      <h3><i class="fa fa-angle-right"></i> Proses Permohonan</h3>
      <div class="row mt">
        <div class="col-lg-12">
          <div class="pdln-panel">
            <a data-toggle="modal" title="Terima" class="open-ApproveData btn btn-warning" href="#modal-ApproveData"><i class="fa fa-check-square-o"> Terima</i></a>

            <a data-toggle="modal" title="Tolak" class="open-ApproveData btn btn-danger" href="#modal-CancelData"><i class="fa fa-remove"> Tolak</i></a>

            <table class="table  table-striped table-bordered pdln-table table-curved table-checkable" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      <th style="width: 5%;" class="text-center">
                        <input type="checkbox">
                      </th>
                      <th>Nama</th>
                      <th>Status</th>
                      <th>Lembaga</th>
                      <th>Kegiatan</th>
                      <th>Tanggal Kegiatan</th>
                      <th>Unit Utama</th>
                      <th>Negara</th>
                      <th>Sumber Dana</th>
                      <th style="width: 15%;">Aksi</th>
                  </tr>
              </thead>
       
              <!-- <tbody>
                  <tr>
                      <th style="width: 5%;" class="text-center">
                        <input type="checkbox">
                      </th>
                      <td>Nama 1</td>
                      <td><i>Ditunda</i></td>
                      <td>Universitas Pendidikan Ganesha</td>
                      <td>Mengikuti dan mempresentasikan di TRI-LELE International Conference Toward Global English Horizon di Bangkok</td>
                      <td>20 - 21 Januari 2015</td>
                      <td class="text-center">
                        <a href="pdln-view.php" class="btn btn-primary" title="Detail"><i class="fa fa-search"></i></a>
                        <a href="#" class="btn btn-success" title="Sunting"><i class="fa fa-edit"></i></a>
                        <a data-toggle="modal" title="Terima" class="open-ApproveData btn btn-warning" href="#modal-ApproveData"><i class="fa fa-check-square-o"></i></a>
                      </td>
                  </tr>
                  <tr>
                      <th style="width: 5%;" class="text-center">
                        <input type="checkbox">
                      </th>
                      <td>Nama 2</td>
                      <td><i>Ditolak</i></td>
                      <td>Universitas Pendidikan Ganesha</td>
                      <td>Mengikuti dan mempresentasikan di TRI-LELE International Conference Toward Global English Horizon di Bangkok</td>
                      <td>20 - 21 Januari 2015</td>
                      <td class="text-center">
                        <a href="pdln-view.php" class="btn btn-primary" title="Detail"><i class="fa fa-search"></i></a>
                        <a href="#" class="btn btn-success" title="Sunting"><i class="fa fa-edit"></i></a>
                        <a data-toggle="modal" title="Terima" class="open-ApproveData btn btn-warning" href="#modal-ApproveData"><i class="fa fa-check-square-o"></i></a>
                      </td>
                  </tr> -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section><! --/wrapper -->
  </section><!-- /MAIN CONTENT -->
<!--main content end-->

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
                {"orderable": false,
                 "data": null,
                 "defaultContent":  '<div class="text-center">'+
                                    '<a href="pdln-view.php" class="btn btn-primary" title="Detail"><i class="fa fa-search"></i></a>'+
                                    '<a href="#" class="btn btn-success" title="Sunting"><i class="fa fa-edit"></i></a>'+
                                    '<a data-toggle="modal" title="Terima" class="open-ApproveData btn btn-warning" href="#modal-ApproveData"><i class="fa fa-check-square-o"></i></a>'+
                                    '</div>',
                 "targets": 8 }
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