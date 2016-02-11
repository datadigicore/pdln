<!--main content start-->
  <section id="main-content">
    <section class="wrapper site-min-height">
      <h3><i class="fa fa-angle-right"></i> Surat Setneg</h3>
      <div class="row mt">
        <div class="col-lg-12">
          <div class="pdln-panel">
          
            <!--  tanya ka ena dulu maksudnya apa??? <a id="btn-terima" href="#modal-terimadata" class="open-terimadata btn btn-warning" data-toggle="modal"><i class="fa fa-check-square-o"> Terima</i></a>

            <a data-toggle="modal" title="Tolak" class="open-ApproveData btn btn-danger" href="#modal-CancelData"><i class="fa fa-remove"> Tolak</i></a> -->

            <table class="table  table-striped table-bordered pdln-table table-curved table-checkable" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      <th>No Aplikasi</th>
                      <th>Nama</th>                      
                      <th>No. Surat Unit Utama</th>
                      <th>No. Surat BPKLN (setneg)</th>
                      <th>Tgl. Surat BPKLN (setneg)</th>
                      <th>No. Surat Setneg </th>
                      <th>Tgl. Surat Setneg </th>
                      <th>Keterangan</th>                      
                      <th>Status</th>
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
              "oLanguage": {
                "sInfoFiltered": ""
              },
              "processing": true,
              "serverSide": true,
              "ajax": {
                "url": "<?php echo base_url('home/process') ?>",
                "data": {manage:'tab_proses_pdln'},
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
                                    '<a style="margin:0 2px;" id="btn-edit" href="#modal-tambahdata" class="btn btn-success btn-sm" data-toggle="modal"><i class="fa fa-edit"></i></a>'+
                                    /*'<a id="btn-terima" title="Terima" href="#modal-terimadata" class="open-terimadata btn btn-warning" data-toggle="modal"><i class="fa fa-check-square-o"></i></a>'+
                                    '<a data-toggle="modal" id="btn-tolak" title="Tolak" class="open-tolakdata btn btn-danger" href="#modal-tolakdata"><i class="fa fa-remove"></i></a>'+*/
                                    '</div>',
                 "targets": 9}
              ],
              "order": [[ 0, "desc" ]]
            });
            var tabrow;

            $(document).on("click", "#btn-tolak", function (){
              var tr = $(this).closest('tr');
              tabrow = table.row( tr );
            });

            $("#tolakdata").click(function(){
              row_id = tabrow.data()[0];
              $.ajax({
                type: "post",
                url : "<?php echo base_url('home/process') ?>",
                data: {manage:'tolak_data',key:row_id},
                success: function(data)
                {
                  table.draw();
                  $("#modal-tolakdata").modal('hide');
                }
              });
              return false;
            });


            $(document).on("click", "#btn-terima", function (){
              var tr = $(this).closest('tr');
              tabrow = table.row( tr );
            });

            $("#terimadata").click(function(){
              row_id = tabrow.data()[0];
              $.ajax({
                type: "post",
                url : "<?php echo base_url('home/process') ?>",
                data: {manage:'terima_data',key:row_id},
                success: function(data)
                {
                  table.draw();
                  $("#modal-terimadata").modal('hide');
                }
              });
              return false;
            });

            $(document).on("click", "#btn-edit", function (){
              var tr = $(this).closest('tr');
              tabrow = table.row( tr );
              $("#row_no_aplikasi").val(tabrow.data()[0]);
              $("#no_surat_setneg").val(tabrow.data()[5]);
              $("#tgl_surat_setneg").val(tabrow.data()[6]);
              $("#data_lain_bpkln").val(tabrow.data()[7]);
            });

            $("#uploadForm").submit(function(e){
            e.preventDefault();
            $.ajax({
              url: $(this).attr("action"),
              type: "POST",
              data:  new FormData(this),
              contentType: false,
              cache: false,
              processData:false,
              success: function(data){
                table.draw();
                $("#modal-tambahdata").modal('hide');
              },
              error: function(){}           
            });
            });
            
          });


        </script>
      <!--main content end-->


<!-- Modal Terima Data-->
<div class="modal fade" id="modal-terimadata" tabindex="-1" data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
      </div>
      <div class="modal-body">
        <p>Apa Anda yakin ingin menerima?</p>
      </div>
      <div class="modal-footer">
        <a id="terimadata" class="btn btn-danger">Terima</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
      </div>
    </div>
</div>

<!-- Modal Tolak Data-->
<div class="modal fade" id="modal-tolakdata" tabindex="-1" data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
      </div>
      <div class="modal-body">
        <p>Apa Anda yakin ingin menolak permohonan?</p>
      </div>
      <div class="modal-footer">
        <a id="tolakdata" class="btn btn-danger">Tolak</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
      </div>
    </div>
</div>

<div class="modal fade" id="modal-tambahdata" tabindex="-1" data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
    <form id="uploadForm" action="<?php echo base_url('home/process') ?>" method="post" enctype="multipart/form-data">
      <div class="modal-header" style="background-color:green;">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data Surat Dari Setneg</h4>
      </div>      
      <div class="modal-body">
        <input type="hidden" name="manage" value="tambah_surat_pdln">
        <input type="hidden" name="key" id="row_no_aplikasi">
        <label>No. Surat Setneg</label>
        <input type="text" class="form-control" placeholder="Nomor Surat Setneg" autofocus id="no_surat_setneg" name="no_surat_setneg" required>
        <br>
        <label>Tgl. Surat Setneg</label>
        <div class="input-group">
          <input class="form-control hasDatepicker" readonly="1" style="cursor:pointer" name="tgl_surat_setneg" id="tgl_surat_setneg" placeholder="Tgl. Surat Setneg" required>
          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
        </div>
        <br>
        <label>Keterangan Surat Setneg</label>
        <input type="text" class="form-control" placeholder="Keterangan yang mendapat SP Setneg" autofocus id="data_lain_bpkln" name="data_lain_bpkln" required>        
        <br>
        <label>Surat Setneg</label>
        <input type="file" class="form-control" autofocus id="upl_files1" name="upl_files1" onchange="ValidateSingleInput(this);" required>        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
      </div>
    </form>
    </div>
</div>

<script type="text/javascript">
  var _validFileExtensions = [".jpg", ".jpeg", ".pdf", ".png"];
  function ValidateSingleInput(oInput) {
      if (oInput.type == "file") {
          var sFileName = oInput.value;
           if (sFileName.length > 0) {
              var blnValid = false;
              for (var j = 0; j < _validFileExtensions.length; j++) {
                  var sCurExtension = _validFileExtensions[j];
                  if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                      blnValid = true;
                      break;
                  }
              }
               
              if (!blnValid) {
                  alert("Sorry allowed extensions are: " + _validFileExtensions.join(", "));
                  oInput.value = "";
                  return false;
              }
          }
      }
      return true;
  }
  
</script>