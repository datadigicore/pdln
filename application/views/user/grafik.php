<!--main content start-->
  <section id="main-content">
    <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Laporan</h3>

        <div class="form-group">
          <label class="col-lg-3 col-sm-3 control-label">Filter</label>
          <div class="col-sm-9">
            <select class="form-control" id="grafik" name="lembaga">
                <option value="" disabled selected>-- Pilih Grafik Berdasarkan --</option>
                <option value="golongan">Golongan</option>
                <option value="orang">Orang</option>
                <option value="lainlain">Dll</option>
            </select>
          </div>
        </div>

        <!-- page start-->
        <div class="tab-pane" id="chartjs">
            <div class="row mt">
                <div class="col-lg-6">
                    <div class="content-panel">
                        <h4><i class="fa fa-angle-right"></i> Doughnut</h4>
                        <div class="panel-body text-center">
                            <canvas id="doughnut" height="300" width="400"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-panel">
                        <h4><i class="fa fa-angle-right"></i> Line</h4>
                        <div class="panel-body text-center">
                            <canvas id="line" height="300" width="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt">
                <div class="col-lg-6">
                    <div class="content-panel">
                        <h4><i class="fa fa-angle-right"></i> Radar</h4>
                        <div class="panel-body text-center">
                            <canvas id="radar" height="300" width="400"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-panel">
                        <h4><i class="fa fa-angle-right"></i> Polar Area</h4>
                        <div class="panel-body text-center">
                            <canvas id="polarArea" height="300" width="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt">
                <div class="col-lg-6">
                    <div class="content-panel">
                        <h4><i class="fa fa-angle-right"></i> Bar</h4>
                        <div class="panel-body text-center">
                            <canvas id="bar" height="300" width="400"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-panel">
                        <h4><i class="fa fa-angle-right"></i> Pie</h4>
                        <div class="panel-body text-center">
                            <canvas id="pie" height="300" width="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page end-->
    </section>          
</section><!-- /MAIN CONTENT -->
<!--main content end-->

<!--script for this page-->
  <script src="<?php echo base_url(); ?>js/chart-master/Chart.js"></script>
  <script src="<?php echo base_url(); ?>js/chartjs-conf.js"></script>
<script type="text/javascript">
    var chart = this;

    $("#grafik").change(function(){
        $.ajax({
            type: "post",
            url : "<?php echo base_url('home/process') ?>",
            data: {manage:'select_grafik_doughnut'},
            dataType: "json",
            success: function(result)
            {
                new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(result); 
            }
          });
        $.ajax({
            type: "post",
            url : "<?php echo base_url('home/process') ?>",
            data: {manage:'select_grafik_line'},
            dataType: "json",
            success: function(result)
            {
                var lineChartData = {
                    labels : [],
                    datasets : [
                        {
                            fillColor : "rgba(220,220,220,0.5)",
                            strokeColor : "rgba(220,220,220,1)",
                            pointColor : "rgba(220,220,220,1)",
                            pointStrokeColor : "#fff",
                            data : []
                        },
                    ]
                };
                $.each(result.nmjabatan, function(key, val) {
                  if (result.nmjabatan) {
                    lineChartData.labels.push(val); 
                  } else {
                    lineChartData.labels.push('');
                  }
                });
                $.each(result.jmljabatan, function(key, val) {
                  lineChartData.datasets[0].data.push(val);
                });
                new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
            }
          });
    })
</script>