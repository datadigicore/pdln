<!--main content start-->
  <section id="main-content">
    <section class="wrapper site-min-height">
      <div class="row mt">
        <div class="col-lg-12">
          <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Cetak Surat ke Setneg</h4>
            <form class="form-horizontal style-form" method="get">
              <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">No Surat Unit Utama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="no_surat_unit_utama" placeholder="No Surat Unit Utama">
                  </div>
                  <div class="col-sm-1">                    
                  </div> 
              </div>
            </form>

            <h4>Hasil Pencarian</h4>

            <div class="text-center">
              <form method="POST" action="<?php echo base_url();?>c_mpdf">
                <input type="hidden" name="content" value="step1">
                <a class="btn btn-warning" title="Tambah data baru" onclick="$(this).closest('form').submit()"><i class="fa fa-print"></i> Cetak Surat</a>
              </form>              
            </div>

            <table class="table  table-striped table-bordered pdln-table table-curved" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      <th style="width: 15%;">Nama</th>
                      <th style="width: 10%;">Status</th>
                      <th style="width: 10%;">Lembaga</th>
                      <th style="width: 30%;">Kegiatan</th>
                      <th style="width: 15%;">Tanggal Kegiatan</th>
                  </tr>
              </thead>
       
              <tbody>
                  <tr>
                      <td>Nama 1</td>
                      <td><i>Diterima</i></td>
                      <td>Universitas Pendidikan Ganesha</td>
                      <td>Mengikuti dan mempresentasikan di TRI-LELE International Conference Toward Global English Horizon di Bangkok</td>
                      <td>20 - 21 Januari 2015</td>
                  </tr>
                  <tr>
                      <td>Nama 2</td>
                      <td><i>Diterima</i></td>
                      <td>Universitas Pendidikan Ganesha</td>
                      <td>Mengikuti dan mempresentasikan di TRI-LELE International Conference Toward Global English Horizon di Bangkok</td>
                      <td>20 - 21 Januari 2015</td>
                  </tr>
                  <tr>
                      <td>Nama 3</td>
                      <td><i>Diterima</i></td>
                      <td>Universitas Pendidikan Ganesha</td>
                      <td>Mengikuti dan mempresentasikan di TRI-LELE International Conference Toward Global English Horizon di Bangkok</td>
                      <td>20 - 21 Januari 2015</td>
                  </tr>
                  <tr>
                      <td>Nama 4</td>
                      <td><i>Diterima</i></td>
                      <td>Universitas Pendidikan Ganesha</td>
                      <td>Mengikuti dan mempresentasikan di TRI-LELE International Conference Toward Global English Horizon di Bangkok</td>
                      <td>20 - 21 Januari 2015</td>
                  </tr>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </section><! --/wrapper -->
  </section><!-- /MAIN CONTENT -->
<!--main content end-->