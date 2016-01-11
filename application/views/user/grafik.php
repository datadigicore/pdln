<!--main content start-->
<style type="text/css">
  @media print {
    .noprint {display:none !important;}
    a:link:after, a:visited:after {  
      display: none;
      content: "";    
    }
  }
</style>
  <section id="main-content">
    <section class="wrapper">
      <h3 class="rem"><i class="fa fa-angle-right"></i> Laporan</h3>
        <div class="form-group rem">
          <label class="col-lg-3 col-sm-3 control-label">Filter</label>
          <div class="col-sm-9">
            <select class="form-control" id="pilihexport" name="pilihexport" required>
              <option value="" disabled selected>Pilih salah satu</option>
              <option value="negara">Negara</option>
              <option value="nip">NIP</option>
              <option value="sumber">Sumber Dana</option>
              <!-- <option>Unit Utama</option> -->
              <option value="waktu">Waktu Berkunjung</option>
            </select>
          </div>
        </div>
        <div class="tab-pane" id="chartjs">
          <!-- <div class="row mt">
            <div class="col-lg-6">
              <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Doughnut</h4>
                <div class="panel-body text-center">
                  <div id="doughnut" height="300" width="400"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Line</h4>
                <div class="panel-body text-center">
                  <div id="line" height="300" width="400"></div>
                </div>
              </div>
            </div>
          </div>
            <div class="row mt">
              <div class="col-lg-6">
                <div class="content-panel">
                  <h4><i class="fa fa-angle-right"></i> Radar</h4>
                  <div class="panel-body text-center">
                    <div id="radar" height="300" width="400"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="content-panel">
                  <h4><i class="fa fa-angle-right"></i> Polar Area</h4>
                  <div class="panel-body text-center">
                    <div id="polarArea" height="300" width="400"></div>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="row mt">
              <div class="col-lg-6">
                <div class="content-panel">
                  <h4><i class="fa fa-angle-right"></i> Bar</h4>
                  <div class="panel-body text-center">
                    <div id="bar" height="300" width="400"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="content-panel">
                  <h4><i class="fa fa-angle-right"></i> Pie</h4>
                  <div class="panel-body text-center">
                    <div id="pie" height="300" width="400"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- <button id="printButton" class="btn btn-primary">Cetak</button> -->
    </section>          
  </section>
<script src="<?php echo base_url();?>js/highcharts.js"></script>
<script src="<?php echo base_url();?>js/highcharts-3d.js"></script>
<script src="<?php echo base_url();?>js/highcharts-more.js"></script>
<script src="<?php echo base_url();?>js/modules/exporting.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
      function clear(){
        $("#negara").remove();
        $("#nip").remove();
        $("#sumber").remove();
        $("#waktu_awal").remove();
        $("#waktu_akhir").remove();
      }
      $("#pilihexport").change(function(){
    if($(this).val() == "negara"){
      clear();
      $.ajax({
        type: "post",
        url : "<?php echo base_url('home/process') ?>",
        data: {manage:'sumber_negara'},
        dataType: "json",
        success: function(result)
        {
          chartbar.series[0].setData(result);
          chartpie.series[0].setData(result);
        }
      });
    }
    else if ($(this).val()=="nip"){
     clear();
     $.ajax({
        type: "post",
        url : "<?php echo base_url('home/process') ?>",
        data: {manage:'sumber_nip'},
        dataType: "json",
        success: function(result)
        {
          chartbar.series[0].setData(result);
          chartpie.series[0].setData(result);
        }
      });
    }
    else if ($(this).val()=="sumber"){
     clear();
     $.ajax({
        type: "post",
        url : "<?php echo base_url('home/process') ?>",
        data: {manage:'sumber_dana'},
        dataType: "json",
        success: function(result)
        {
          chartbar.series[0].setData(result);
          chartpie.series[0].setData(result);
        }
      });
    }
    else if ($(this).val()=="waktu"){
     clear();
     $("<input type='date' id='waktu_awal' class='form-control' name='waktu_awal' required>").insertAfter( $( "#pilihexport" ) );
     $("<input type='date' id='waktu_akhir' class='form-control' name='waktu_akhir' required>").insertAfter( $( "#waktu_awal" ) );
    }
  });
var chartbar = new Highcharts.Chart({
        chart: {
            renderTo: 'bar',
            type: 'column',
            margin: 75,
            options3d: {
                enabled: true,
                alpha: 15,
                beta: 15,
                depth: 50,
                viewDistance: 25
            }
        },
        title: {
            text: 'Data Statistik'
        },
        subtitle: {
            text: '3D Bar Diagram'
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        series: [{
            data: [
                ['Example 1', 8],
                ['Example 2', 3],
                ['Example 3', 1],
                ['Example 4', 6],
                ['Example 5', 8],
                ['Example 6', 4],
                ['Example 7', 4],
                ['Example 8', 1],
                ['Example 9', 1]
            ]
        }]
    });        
var chartpie = new Highcharts.Chart({
        chart: {
            renderTo: 'pie',
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45
            }
        },
        title: {
            text: 'Data Statistik'
        },
        subtitle: {
            text: '3D Donut Diagram'
        },
        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: 'Delivered amount',
            data: [
                ['Example 1', 8],
                ['Example 2', 3],
                ['Example 3', 1],
                ['Example 4', 6],
                ['Example 5', 8],
                ['Example 6', 4],
                ['Example 7', 4],
                ['Example 8', 1],
                ['Example 9', 1]
            ]
        }]
    });
});
</script>