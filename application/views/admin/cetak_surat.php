<!--main content start-->
  <section id="main-content">
    <section class="wrapper site-min-height">
      <div class="row mt">
        <div class="col-lg-12">
          <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Cetak Surat</h4>
            <form class="form-horizontal style-form" method="POST" action="<?php echo base_url();?>admin">                
              <div class="form-group">
                  <input type="hidden" name="content" value="cetak_surat"> 
                  <input type="hidden" name="kondisi" value="cari">
        
                  <label class="col-lg-3 col-sm-3 control-label">No Surat Unit Utama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="no_surat_bpkln_setneg" placeholder="No Surat Unit Utama">
                    <a style="margin:0 2px;" onclick="$(this).closest('form').submit()" class="btn btn-primary"><i class="fa fa-search"></i></a>
                  </div>

                  <div class="col-sm-1">                    
                  </div>
              </div>
            </form>

            <h4>Hasil Pencarian</h4>
            <?php if(count(array_filter($query))!=0){?>            
            <div class="text-center">
              <form target="blank" method="POST" action="<?php echo base_url();?>c_doc">
                <input type="hidden" name="hasilsearch" value="<?php 
                if (isset($query[0]['no_surat_unit_utama'])) {
                  echo $query[0]['no_surat_unit_utama'];
                }else{}?>">
                <input type="hidden" name="banyak" value="<?php echo count(array_filter($query)); ?>">
                <input type="hidden" name="no_aplikasi" value="<?php echo $query[0]['no_aplikasi_data_diri']; ?>">
                <button class="btn btn-warning" type="submit" name="jenis" value="setneg" style="margin:0 10px"><i class="fa fa-print"></i> Cetak Surat Setneg</button>
                <button class="btn btn-warning" type="submit" name="jenis" value="menlu" style="margin:0 10px"><i class="fa fa-print"></i> Cetak Surat Kemlu</button>
              </form>
            </div>           
            <br>
            <table class="table  table-striped table-bordered pdln-table table-curved" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      <th style="width: 15%;">Nama</th>
                      <th style="width: 10%;">Lembaga</th>
                      <th style="width: 30%;">Kegiatan</th>
                      <th style="width: 15%;">Tanggal Awal Kegiatan</th>
                  </tr>
              </thead>
       
              <tbody>
                  <?php foreach ($query as $item) { ?>
                    <tr>
                      <td><?php echo $item['nama_pemohon']; ?></td>
                      <td><?php echo $item['nama_instansi']; ?></td>
                      <td><?php echo $item['rincian_kegiatan']; ?></td>
                      <td><?php echo $item['tgl_awal_kegiatan']; ?> s/d <br><?php echo $item['tgl_akhir_kegiatan']; ?></td>
                    </tr>
                  <?php } ?>
              </tbody>
            </table>

          </div>
           <?php }
            else {
              echo "<label>Data Kosong</label>";
            }?>
        </div>
      </div>
    </section><! --/wrapper -->
  </section><!-- /MAIN CONTENT -->
<!--main content end-->