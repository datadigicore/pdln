<!--main content start-->
  <section id="main-content">
    <section class="wrapper site-min-height">
      <h3><i class="fa fa-angle-right"></i> Surat Unit Utama</h3>
      <div class="row mt">
        <div class="col-lg-12">
          <div class="pdln-panel">
          
            <!--  tanya ka ena dulu maksudnya apa??? <a id="btn-terima" href="#modal-terimadata" class="open-terimadata btn btn-warning" data-toggle="modal"><i class="fa fa-check-square-o"> Terima</i></a>

            <a data-toggle="modal" title="Tolak" class="open-ApproveData btn btn-danger" href="#modal-CancelData"><i class="fa fa-remove"> Tolak</i></a> -->

            <table class="table  table-striped table-bordered pdln-table table-curved table-checkable" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      <th>No Aplikasi</th>                      
                      <th>No. Surat Unit Utama</th>
                      <th>Jumlah Pemohon</th>                      
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
                "url": "<?php echo base_url('admin/process') ?>",
                "data": {manage:'tab_surat_unit'},
                "type": "POST"
              },
              "columnDefs" : [
                {"targets" : 0,
                 "visible" : false},
                {"targets" : 1},
                {"targets" : 2},
                {"orderable": false,
                 "data": null,
                 "defaultContent":  '<div class="text-center">'+
                                    '<a style="margin:0 2px;" id="btn-view" class="btn btn-primary"><i class="fa fa-search"></i></a>'+
                                    '<a style="margin:0 2px;" id="btn-edit" class="btn btn-success"><i class="fa fa-edit"></i></a>'+
                                    '</div>',
                 "targets": 3}
              ],
              "order": [[ 0, "desc" ]]
            });
            var tabrow;

          /*$(document).on("click", "#btn-view", function (){
              content = 'view_unit_utama';
              var tr = $(this).closest('tr');
              tabrow = table.row(tr);
              row_id = tabrow.data()[0];
              row_no_surat_unit_utama = tabrow.data()[1];
              kondisi = 'view';
              var $form=$(document.createElement('form')).css({display:'none'}).attr("method","POST").attr("action","<?php echo base_url('home') ?>");
              var $input=$(document.createElement('input')).css({display:'none'}).attr('name','id').val(row_id);
              var $input1=$(document.createElement('input')).css({display:'none'}).attr('name','no_surat_unit_utama').val(row_no_surat_unit_utama);
              var $input2=$(document.createElement('input')).css({display:'none'}).attr('name','content').val(content);
              var $input3=$(document.createElement('input')).css({display:'none'}).attr('name','kondisi').val(kondisi);
              $form.append($input).append($input1).append($input2).append($input3);
              $("body").append($form);
              $form.submit();
              table.draw();
            });*/

          $(document).on("click", "#btn-view", function (){
              var tr = $(this).closest('tr');
              tabrow = table.row( tr );
              row_id = tabrow.data()[0];
              row_no_surat_unit_utama = tabrow.data()[1];
              $.ajax({
                type: "post",
                url : "<?php echo base_url('admin/process') ?>",
                data: {manage:'tab_pdln_unit_utama',
                      key:row_id,
                      no_surat_unit_utama:row_no_surat_unit_utama},
                success: function(data)
                {
                  //table.draw(data);
                  document.write(data);
                }
              });
              return false;
            })

          
         });

        </script>

      <!--main content end-->
