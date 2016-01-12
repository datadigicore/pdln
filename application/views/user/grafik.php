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
              <option value="pekerjaan">Pekerjaan</option>
              <option value="kegiatan">Kategori Kegiatan</option>
              <option value="waktu">Waktu Berkunjung</option>
            </select>
          </div>
        </div>
        <div class="tab-pane" id="chartjs">
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
      grafik('sumber_negara');
    }
    else if ($(this).val()=="nip"){
     clear();
     grafik('sumber_nip');
    }
    else if ($(this).val()=="sumber"){
     clear();
     grafik('sumber_dana');
    }
    else if ($(this).val()=="pekerjaan"){
     clear();
     grafik('sumber_pekerjaan');
    }
    else if ($(this).val()=="kegiatan"){
     clear();
     grafik('sumber_kegiatan');
    }
    else if ($(this).val()=="waktu"){
     clear();
     var now = new Date();
      var day = ("0" + now.getDate()).slice(-2);
      var month = ("0" + (now.getMonth() + 1)).slice(-2);
      var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
     $("<input type='date' id='waktu_awal' class='form-control' name='waktu_awal'>").insertAfter( $( "#pilihexport" ) );
     $("#waktu_awal").val(today);
     $("<input type='date' id='waktu_akhir' class='form-control' name='waktu_akhir'>").insertAfter( $( "#waktu_awal" ) );
     $("#waktu_akhir").val(today);
     $("#waktu_awal").change(function(){
      grafiktime('sumber_waktu',$(this).val(),$("#waktu_akhir").val());
     });
     $("#waktu_akhir").change(function(){
      grafiktime('sumber_waktu',$("#waktu_awal").val(),$(this).val());
     });
    }
  });
function grafik(data){
  $.ajax({
    type: "post",
    url : "<?php echo base_url('home/process') ?>",
    data: {manage:data},
    dataType: "json",
    success: function(result)
    {
      chartbar.series[0].setData(result);
      chartpie.series[0].setData(result);
    }
  });
}
function grafiktime(data,waktuawal,waktuakhir){
  $.ajax({
    type: "post",
    url : "<?php echo base_url('home/process') ?>",
    data: {manage:data,awal:waktuawal,akhir:waktuakhir},
    dataType: "json",
    success: function(result)
    {
      chartbar.series[0].setData(result);
      chartpie.series[0].setData(result);
    }
  });
}
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