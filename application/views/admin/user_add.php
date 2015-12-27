<!--main content start-->
        <section id="main-content">
          <section class="wrapper site-min-height">
            <div class="row mt">
              <div class="col-lg-12">
                <div class="form-panel">
                  <h4 class="mb"><i class="fa fa-angle-right"></i> Tambah Pengguna</h4>
                  <?php if (isset($error_message)){?>
                    <div class="alert alert-<?php echo $alert_type;?> fade in">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Perhatian!</strong><br><?php echo $error_message; ?>
                    </div>
                  <?php } ?>
                  <form class="form-horizontal style-form" method="post" action="<?php echo base_url();?>admin/process">
                    <input type="hidden" name="manage" value="add_user">
                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="fullname" placeholder="Nama Lengkap" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label">Alamat</label>
                        <div class="col-sm-9">
                          <textarea type="text" class="form-control nonresize" name="address" placeholder="Alamat"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="emails" placeholder="Email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label">No. Telepon</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="phones" placeholder="Nomor Telepon" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label">Username</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="usernames" placeholder="Username" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label">Password</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="passwords" placeholder="Password" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label">Ketik Ulang Password</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="repasswords" placeholder="Ketik Ulang Password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label">Status</label>
                        <div class="col-sm-9">
                          <select class="form-control" name="stats">
                              <option value="1">Aktif</option>
                              <option value="0">Non-Aktif</option>
                          </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                          <button type="submit" class="btn pdln-btn">Tambahkan</button>
                        </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </section><! --/wrapper -->
        </section><!-- /MAIN CONTENT -->
      <!--main content end-->