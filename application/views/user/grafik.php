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
            </div>
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
        <button id="printButton" class="btn btn-primary">Cetak</button>
        <!-- page end-->
    </section>          
</section><!-- /MAIN CONTENT -->
<!--main content end-->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<!--script for this page-->
<script type="text/javascript">
    $(function () {

    $(document).ready(function () {

        // Build the chart
        $('#doughnut').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Browser market shares January, 2015 to May, 2015'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: 'Microsoft Internet Explorer',
                    y: 56.33
                }, {
                    name: 'Chrome',
                    y: 24.03,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Firefox',
                    y: 10.38
                }, {
                    name: 'Safari',
                    y: 4.77
                }, {
                    name: 'Opera',
                    y: 0.91
                }, {
                    name: 'Proprietary or Undetectable',
                    y: 0.2
                }]
            }]
        });
    });
$('#line').highcharts({
        title: {
            text: 'Monthly Average Temperature',
            x: -20 //center
        },
        subtitle: {
            text: 'Source: WorldClimate.com',
            x: -20
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Temperature (°C)'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Tokyo',
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
        }, {
            name: 'New York',
            data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
        }, {
            name: 'Berlin',
            data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
        }, {
            name: 'London',
            data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
        }]
    });
$('#polarArea').highcharts({

        chart: {
            polar: true
        },

        title: {
            text: 'Highcharts Polar Chart'
        },

        pane: {
            startAngle: 0,
            endAngle: 360
        },

        xAxis: {
            tickInterval: 45,
            min: 0,
            max: 360,
            labels: {
                formatter: function () {
                    return this.value + '°';
                }
            }
        },

        yAxis: {
            min: 0
        },

        plotOptions: {
            series: {
                pointStart: 0,
                pointInterval: 45
            },
            column: {
                pointPadding: 0,
                groupPadding: 0
            }
        },

        series: [{
            type: 'column',
            name: 'Column',
            data: [8, 7, 6, 5, 4, 3, 2, 1],
            pointPlacement: 'between'
        }, {
            type: 'line',
            name: 'Line',
            data: [1, 2, 3, 4, 5, 6, 7, 8]
        }, {
            type: 'area',
            name: 'Area',
            data: [1, 8, 2, 7, 3, 6, 4, 5]
        }]
    });
$('#radar').highcharts({

        chart: {
            polar: true,
            type: 'line'
        },

        title: {
            text: 'Budget vs spending',
            x: -80
        },

        pane: {
            size: '80%'
        },

        xAxis: {
            categories: ['Sales', 'Marketing', 'Development', 'Customer Support',
                    'Information Technology', 'Administration'],
            tickmarkPlacement: 'on',
            lineWidth: 0
        },

        yAxis: {
            gridLineInterpolation: 'polygon',
            lineWidth: 0,
            min: 0
        },

        tooltip: {
            shared: true,
            pointFormat: '<span style="color:{series.color}">{series.name}: <b>${point.y:,.0f}</b><br/>'
        },

        legend: {
            align: 'right',
            verticalAlign: 'top',
            y: 70,
            layout: 'vertical'
        },

        series: [{
            name: 'Allocated Budget',
            data: [43000, 19000, 60000, 35000, 17000, 10000],
            pointPlacement: 'on'
        }, {
            name: 'Actual Spending',
            data: [50000, 39000, 42000, 31000, 26000, 14000],
            pointPlacement: 'on'
        }]

    });
$('#bar').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Browser market shares. January, 2015 to May, 2015'
        },
        subtitle: {
            text: 'Click the columns to view versions. Source: <a href="http://netmarketshare.com">netmarketshare.com</a>.'
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Total percent market share'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f}%'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        },

        series: [{
            name: "Brands",
            colorByPoint: true,
            data: [{
                name: "Microsoft Internet Explorer",
                y: 56.33,
                drilldown: "Microsoft Internet Explorer"
            }, {
                name: "Chrome",
                y: 24.03,
                drilldown: "Chrome"
            }, {
                name: "Firefox",
                y: 10.38,
                drilldown: "Firefox"
            }, {
                name: "Safari",
                y: 4.77,
                drilldown: "Safari"
            }, {
                name: "Opera",
                y: 0.91,
                drilldown: "Opera"
            }, {
                name: "Proprietary or Undetectable",
                y: 0.2,
                drilldown: null
            }]
        }],
        drilldown: {
            series: [{
                name: "Microsoft Internet Explorer",
                id: "Microsoft Internet Explorer",
                data: [
                    [
                        "v11.0",
                        24.13
                    ],
                    [
                        "v8.0",
                        17.2
                    ],
                    [
                        "v9.0",
                        8.11
                    ],
                    [
                        "v10.0",
                        5.33
                    ],
                    [
                        "v6.0",
                        1.06
                    ],
                    [
                        "v7.0",
                        0.5
                    ]
                ]
            }, {
                name: "Chrome",
                id: "Chrome",
                data: [
                    [
                        "v40.0",
                        5
                    ],
                    [
                        "v41.0",
                        4.32
                    ],
                    [
                        "v42.0",
                        3.68
                    ],
                    [
                        "v39.0",
                        2.96
                    ],
                    [
                        "v36.0",
                        2.53
                    ],
                    [
                        "v43.0",
                        1.45
                    ],
                    [
                        "v31.0",
                        1.24
                    ],
                    [
                        "v35.0",
                        0.85
                    ],
                    [
                        "v38.0",
                        0.6
                    ],
                    [
                        "v32.0",
                        0.55
                    ],
                    [
                        "v37.0",
                        0.38
                    ],
                    [
                        "v33.0",
                        0.19
                    ],
                    [
                        "v34.0",
                        0.14
                    ],
                    [
                        "v30.0",
                        0.14
                    ]
                ]
            }, {
                name: "Firefox",
                id: "Firefox",
                data: [
                    [
                        "v35",
                        2.76
                    ],
                    [
                        "v36",
                        2.32
                    ],
                    [
                        "v37",
                        2.31
                    ],
                    [
                        "v34",
                        1.27
                    ],
                    [
                        "v38",
                        1.02
                    ],
                    [
                        "v31",
                        0.33
                    ],
                    [
                        "v33",
                        0.22
                    ],
                    [
                        "v32",
                        0.15
                    ]
                ]
            }, {
                name: "Safari",
                id: "Safari",
                data: [
                    [
                        "v8.0",
                        2.56
                    ],
                    [
                        "v7.1",
                        0.77
                    ],
                    [
                        "v5.1",
                        0.42
                    ],
                    [
                        "v5.0",
                        0.3
                    ],
                    [
                        "v6.1",
                        0.29
                    ],
                    [
                        "v7.0",
                        0.26
                    ],
                    [
                        "v6.2",
                        0.17
                    ]
                ]
            }, {
                name: "Opera",
                id: "Opera",
                data: [
                    [
                        "v12.x",
                        0.34
                    ],
                    [
                        "v28",
                        0.24
                    ],
                    [
                        "v27",
                        0.17
                    ],
                    [
                        "v29",
                        0.16
                    ]
                ]
            }]
        }
    });
$('#pie').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45
            }
        },
        title: {
            text: 'Contents of Highsoft\'s weekly fruit delivery'
        },
        subtitle: {
            text: '3D donut in Highcharts'
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
                ['Bananas', 8],
                ['Kiwi', 3],
                ['Mixed nuts', 1],
                ['Oranges', 6],
                ['Apples', 8],
                ['Pears', 4],
                ['Clementines', 4],
                ['Reddish (bag)', 1],
                ['Grapes (bunch)', 1]
            ]
        }]
    });
});
</script>