<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
        
        	  <p class="text-center">
                <a href="profile.html"><img src="<?php echo base_url();?>img/kemdikbud.png" width="60"></a>
              </p>
        	  <h5 class="text-center">Admin</h5>
        	<?php if ($_SESSION['logged']['level'] == 1) {?>
            <li class="mt">
                <a class="active" href="<?php echo base_url();?>">
                    <i class="fa fa-dashboard"></i>
                    <span>Permohonan</span>
                </a>
            </li>

            <li>
                <form method="POST" action="<?php echo base_url();?>admin">
                    <input type="hidden" name="content" value="proses_permohonan">
                    <a onclick="$(this).closest('form').submit()">
                    <i class="fa fa-check-square-o"></i>
                        Proses Permohonan
                    </a>
                </form>
            </li>

            <li>
                <form method="POST" action="<?php echo base_url();?>admin">
                    <input type="hidden" name="content" value="cetak_surat">
                    <a onclick="$(this).closest('form').submit()">
                    <i class="fa fa-print"></i>
                        Cetak Surat
                    </a>
                </form>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa fa-book"></i>
                    <span>Laporan</span>
                </a>
                <ul class="sub">
                    <li class="cursor">
                        <form method="POST" action="<?php echo base_url();?>admin">
                            <input type="hidden" name="content" value="grafik">
                            <a onclick="$(this).closest('form').submit()">
                                Grafik / Chart
                            </a>
                        </form>
                    </li>
                    <li class="cursor">
                        <form method="POST" action="<?php echo base_url();?>admin">
                            <input type="hidden" name="content" value="excel">
                            <a onclick="$(this).closest('form').submit()">
                                PDF / Excel
                            </a>
                        </form>
                    </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa fa-gears"></i>
                    <span>Pengaturan</span>
                </a>
                <ul class="sub">
                    <li class="cursor">
                        <form method="POST" action="<?php echo base_url();?>admin">
                            <input type="hidden" name="content" value="user">
                            <a onclick="$(this).closest('form').submit()">
                                Pengaturan Pengguna
                            </a>
                        </form>
                    </li>
                </ul>
            </li>
            <?php } else {?>
            <li class="mt">
                <a class="active" href="<?php echo base_url();?>">
                    <i class="fa fa-dashboard"></i>
                    <span>Permohonan</span>
                </a>
            </li>

            <!-- <li>
                <form method="POST" action="<?php echo base_url();?>home">
                    <input type="hidden" name="content" value="update_pemohon">
                    <a onclick="$(this).closest('form').submit()">
                    <i class="fa fa-check-square-o"></i>
                        Update Data Pemohon
                    </a>
                </form>
            </li> -->

            <li>
                <form method="POST" action="<?php echo base_url();?>home">
                    <input type="hidden" name="content" value="update_bpkln">
                    <a onclick="$(this).closest('form').submit()">
                    <i class="fa fa-check-square-o"></i>
                        Update Surat BPKLN
                    </a>
                </form>
            </li>

            <li>
                <form method="POST" action="<?php echo base_url();?>home">
                    <input type="hidden" name="content" value="proses_permohonan">
                    <a onclick="$(this).closest('form').submit()">
                    <i class="fa fa-check-square-o"></i>
                        Update Surat Setneg
                    </a>
                </form>
            </li>

            <li>
                <form method="POST" action="<?php echo base_url();?>home">
                    <input type="hidden" name="content" value="disetujui_setneg">
                    <a onclick="$(this).closest('form').submit()">
                    <i class="fa fa-check-square-o"></i>
                        Disetujui Setneg
                    </a>
                </form>
            </li>

            <li>
                <form method="POST" action="<?php echo base_url();?>home">
                    <input type="hidden" name="content" value="cetak_surat">
                    <input type="hidden" name="kondisi" value="cetak">
                    <a onclick="$(this).closest('form').submit()">
                    <i class="fa fa-print"></i>
                        Cetak Surat
                    </a>
                </form>                
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa fa-book"></i>
                    <span>Laporan</span>
                </a>
                <ul class="sub">
                    <li class="cursor">
                        <form method="POST" action="<?php echo base_url();?>home">
                            <input type="hidden" name="content" value="grafik">
                            <a onclick="$(this).closest('form').submit()">
                                Grafik / Chart
                            </a>
                        </form>
                    </li>
                    <li class="cursor">
                        <form method="POST" action="<?php echo base_url();?>home">
                            <input type="hidden" name="content" value="excel">
                            <a onclick="$(this).closest('form').submit()">
                                PDF / Excel
                            </a>
                        </form>
                    </li>
                </ul>
            </li>
                </ul>
            </li>
            <?php } ?>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>