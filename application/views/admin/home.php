<!--main content start-->
        <section id="main-content">
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Data PDLN</h3>
            <div class="row mt">
              <div class="col-lg-12">
                <form method="POST" action="<?php echo base_url();?>admin">
                  <input type="hidden" name="content" value="step1">
                  <a class="btn pdln-btn mb" title="Add new item" onclick="$(this).closest('form').submit()"><i class="fa fa-plus-square"></i> Tambah Data</a>
                </form>
                <div class="pdln-panel">
                  <table class="table  table-striped table-bordered pdln-table table-curved" cellspacing="0" width="100%">
                    <thead>
                        <tr>
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
             
                    <tbody>
                        <tr>
                            <td>Nama 1</td>
                            <td><i>Ditunda</i></td>
                            <td>Universitas Pendidikan Ganesha</td>
                            <td>Mengikuti dan mempresentasikan di TRI-LELE International Conference Toward Global English Horizon di Bangkok</td>
                            <td>20 - 21 Januari 2015</td>
                            <td>Kemdikbud</td>
                            <td>Zimbabwe</td>
                            <td>Pebi</td>
                            <td class="text-center">
                              <a href="pdln-view.php" class="btn btn-primary" title="Detail"><i class="fa fa-search"></i></a>
                              <a href="#" class="btn btn-success" title="Sunting"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama 2</td>
                            <td><i>Ditolak</i></td>
                            <td>Universitas Pendidikan Ganesha</td>
                            <td>Mengikuti dan mempresentasikan di TRI-LELE International Conference Toward Global English Horizon di Bangkok</td>
                            <td>20 - 21 Januari 2015</td>
                            <td>Kemdikbud</td>
                            <td>Zimbabwe</td>
                            <td>Pebi</td>
                            <td class="text-center">
                              <a href="pdln-view.php" class="btn btn-primary" title="Detail"><i class="fa fa-search"></i></a>
                              <a href="#" class="btn btn-success" title="Sunting"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama 3</td>
                            <td><i>Dibatalkan</i></td>
                            <td>Universitas Pendidikan Ganesha</td>
                            <td>Mengikuti dan mempresentasikan di TRI-LELE International Conference Toward Global English Horizon di Bangkok</td>
                            <td>20 - 21 Januari 2015</td>
                            <td>Kemdikbud</td>
                            <td>Zimbabwe</td>
                            <td>Pebi</td>
                            <td class="text-center">
                              <a href="pdln-view.php" class="btn btn-primary" title="Detail"><i class="fa fa-search"></i></a>
                              <a href="#" class="btn btn-success" title="Sunting"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama 4</td>
                            <td><i>Diterima</i></td>
                            <td>Universitas Pendidikan Ganesha</td>
                            <td>Mengikuti dan mempresentasikan di TRI-LELE International Conference Toward Global English Horizon di Bangkok</td>
                            <td>20 - 21 Januari 2015</td>
                            <td>Kemdikbud</td>
                            <td>Zimbabwe</td>
                            <td>Pebi</td>
                            <td class="text-center">
                              <a href="pdln-view.php" class="btn btn-primary" title="Detail"><i class="fa fa-search"></i></a>
                              <a href="#" class="btn btn-success" title="Sunting"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section><! --/wrapper -->
        </section><!-- /MAIN CONTENT -->
      <!--main content end-->


<!-- Modal Delete Project-->
<div class="modal fade" id="modal-deleteProject" tabindex="-1" data-backdrop="static" data-keyboard="false">
  <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Hapus Topik</h4>
      </div>
      <div class="modal-body">
        <p>Apa Anda yakin ingin menghapus?</p>
      </div>
      <div class="modal-footer">
        <a href="" id="deleteProject" class="btn btn-danger">Hapus</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
      </div>
    </div>
</div>