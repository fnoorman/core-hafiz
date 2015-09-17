<?php

use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<link href="<?=Url::base(true)?>/css/custom.css" rel="stylesheet">

<div class="site-index">

    <!-- start graph -->
    <div class="row  border-bottom white-bg dashboard-header" style="background-color:#fff">

                    <div class="col-sm-3">
                        <h2>Welcome <?=ucfirst(Yii::$app->user->identity->username)?></h2>
                        <small>You have 42 messages and 6 notifications. </small>
                        <ul class="list-group clear-list m-t">
                            <li class="list-group-item fist-item">
                                <span class="pull-right">
                                    09:00 pm
                                </span>
                                <span class="label label-success">1</span> Please contact me
                            </li>
                            <li class="list-group-item">
                                <span class="pull-right">
                                    10:16 am
                                </span>
                                <span class="label label-info">2</span> Sign a contract
                            </li>
                            <li class="list-group-item">
                                <span class="pull-right">
                                    08:22 pm
                                </span>
                                <span class="label label-primary">3</span> Open new shop
                            </li>
                            <li class="list-group-item">
                                <span class="pull-right">
                                    11:06 pm
                                </span>
                                <span class="label label-default">4</span> Call back to Sylvia
                            </li>
                            <li class="list-group-item">
                                <span class="pull-right">
                                    12:00 am
                                </span>
                                <span class="label label-primary">5</span> Write a letter to Sandra
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <div class="flot-chart dashboard-chart">
                            <div class="flot-chart-content" id="flot-dashboard-chart" style="padding: 0px; position: relative;">
                              <canvas class="flot-base" width="515" height="180" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 515px; height: 180px;">
                              </canvas>
                              <div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                  <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 64px; top: 164px; left: 11px; text-align: center;">0.0</div>
                                  <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 64px; top: 164px; left: 86px; text-align: center;">2.5</div>
                                  <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 64px; top: 164px; left: 162px; text-align: center;">5.0</div>
                                  <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 64px; top: 164px; left: 238px; text-align: center;">7.5</div>
                                  <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 64px; top: 164px; left: 311px; text-align: center;">10.0</div>
                                  <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 64px; top: 164px; left: 387px; text-align: center;">12.5</div>
                                  <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 64px; top: 164px; left: 463px; text-align: center;">15.0</div>
                                </div>
                                <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                  <div class="flot-tick-label tickLabel" style="position: absolute; top: 152px; left: 7px; text-align: right;">0</div>
                                  <div class="flot-tick-label tickLabel" style="position: absolute; top: 114px; left: 1px; text-align: right;">10</div>
                                  <div class="flot-tick-label tickLabel" style="position: absolute; top: 76px; left: 1px; text-align: right;">20</div>
                                  <div class="flot-tick-label tickLabel" style="position: absolute; top: 38px; left: 1px; text-align: right;">30</div>
                                  <div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 1px; text-align: right;">40</div>
                                </div>
                              </div>
                              <canvas class="flot-overlay" width="515" height="180" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 515px; height: 180px;">
                              </canvas>
                            </div>
                        </div>
                        <div class="row text-left">
                            <div class="col-xs-4">
                                <div class=" m-l-md">
                                <span class="h4 font-bold m-t block">$ 406,100</span>
                                <small class="text-muted m-b block">Sales marketing report</small>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <span class="h4 font-bold m-t block">$ 150,401</span>
                                <small class="text-muted m-b block">Annual sales revenue</small>
                            </div>
                            <div class="col-xs-4">
                                <span class="h4 font-bold m-t block">$ 16,822</span>
                                <small class="text-muted m-b block">Half-year revenue margin</small>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="statistic-box">
                        <h4>
                            Project Beta progress
                        </h4>
                        <p>
                            You have two project with not compleated task.
                        </p>
                            <div class="row text-center">
                                <div class="col-lg-6">
                                    <canvas id="polarChart" width="80" height="80" style="width: 80px; height: 80px;"></canvas>
                                    <h5>Kolter</h5>
                                </div>
                                <div class="col-lg-6">
                                    <canvas id="doughnutChart" width="78" height="78" style="width: 78px; height: 78px;"></canvas>
                                    <h5>Maxtor</h5>
                                </div>
                            </div>
                            <div class="m-t">
                                <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                            </div>

                        </div>
                    </div>

            </div>
    <!-- end graph -->

    <div class="body-content">

      <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-lg-4">
                  <div class="ibox-content">
                    <div class="ibox">
                      <div class="widget-head-color-box navy-bg p-lg text-center">
                          <div class="m-b-md">
                          <h2 class="font-bold no-margins">
                              <?=ucfirst(Yii::$app->user->identity->username)?>
                          </h2>

                          </div>
                          <img src="<?=Url::base(true)?>/img/a4.jpg" class="img-circle circle-border m-b-md" alt="profile" style="border-radius: 50%">
                          <div>


                            <label title="Upload image file" for="inputImage" class="btn btn-primary">
                                      <input type="file" accept="image/*" name="file" id="inputImage" class="hide">
                                     Change Avatar
                                  </label>
                          </div>
                      </div>
                      <!-- <div class="widget-text-box"> -->
                          <div class="ibox float-e-margins">

                            <a class="collapse-link btn btn-outline btn-link" style="border:none">Change Password</a>
                            <div class="ibox-content collapse">

                                <div class="row">
                                        <form role="form" method="post">
                                            <div class="form-group"><label>Old Password</label> <input type="password" placeholder="Old Password" class="form-control"></div>
                                            <div class="form-group"><label>New Password</label> <input type="password" placeholder="New Password" class="form-control"></div>
                                            <div>
                                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Update</strong></button>
                                            </div>
                                        </form>
                                </div>

                            </div>
                          </div>
                        <!-- </div> -->
                    </div>
                  </div>

                </div>

                <div class="col-lg-4">
                    <div class="ibox-content">

                      <h2>Package Purchased</h2>
                      <div class="ibox float-e-margins" >
                          <div class="ibox-title"  style=" border-left: solid #f8ac59; border-bottom: solid 1px #e7eaec;">
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-down"></i>
                                </a>

                            </div>
                              <p>
                              <h3>Free Package</h3>
                              <table class="table">
                                <tbody>
                                 <tr>
                                   <td>
                                     Total Callouts :
                                   </td>
                                   <td align="right">
                                     50
                                   </td>
                                 </tr>
                                 <tr>
                                   <td>
                                     Balance Callouts :
                                   </td>
                                   <td align="right">
                                     20
                                   </td>
                                 </tr>
                                 <tr>
                                   <td>
                                     Expired Date :
                                   </td>
                                   <td align="">
                                     <span class="label label-warning" style="float:right">03-09-2015</span>
                                   </td>
                                 </tr>
                                </tbody>
                              </table>


                              </p>

                          </div>

                          <div class="ibox-content collapse" style=" border-left: solid #f8ac59; border-bottom: 1px #e7eaec; border-top: 1px #e7eaec;">
                            <h3>  Hybrizy Code </h3>
                            1254 <br>
                            1285 <br>
                            1478 <br>
                            1463 <br>
                            1499
                          </div>
                      </div>


                      <div class="ibox float-e-margins" >
                          <div class="ibox-title"  style=" border-left: solid #ff0000; border-bottom: solid 1px #e7eaec;">
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-down"></i>
                                </a>

                            </div>
                              <p>

                              <h3>Package 1</h3>
                              <table class="table">
                                <tbody>
                                 <tr>
                                   <td>
                                     Total Callouts :
                                   </td>
                                   <td align="right">
                                     1500
                                   </td>
                                 </tr>
                                 <tr>
                                   <td>
                                     Balance Callouts :
                                   </td>
                                   <td align="right">
                                     200
                                   </td>
                                 </tr>
                                 <tr>
                                   <td>
                                     Expired Date :
                                   </td>
                                   <td align="">
                                     <span class="label label-danger"  style="float:right">03-08-2015</span>
                                   </td>
                                 </tr>
                                </tbody>
                              </table>



                              </p>
                          </div>

                          <div class="ibox-content collapse" style=" border-left: solid #ff0000; border-bottom: 1px #e7eaec; border-top: 1px #e7eaec;">
                            <h3>  Hybrizy Code </h3>

                            3454 <br>
                            3585 <br>
                            3678 <br>
                            3763 <br>
                            3899
                          </div>
                      </div>

                      <div class="ibox float-e-margins" >
                          <div class="ibox-title"  style=" border-left: solid #1ab394; border-bottom: solid 1px #e7eaec;">
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-down"></i>
                                </a>

                            </div>
                              <p>
                              <h3>Package 2</h3>
                              <table class="table">
                                <tbody>
                                 <tr>
                                   <td>
                                     Total Callouts :
                                   </td>
                                   <td align="right">
                                     5000
                                   </td>
                                 </tr>
                                 <tr>
                                   <td>
                                     Balance Callouts :
                                   </td>
                                   <td align="right">
                                     1200
                                   </td>
                                 </tr>
                                 <tr>
                                   <td>
                                     Expired Date :
                                   </td>
                                   <td align="">
                                     <span class="label label-primary" style="float:right">03-12-2016</span>
                                   </td>
                                 </tr>
                                </tbody>
                              </table>

                              </p>
                          </div>
                          <div class="ibox-content collapse" style=" border-left: solid #1ab394; border-bottom: 1px #e7eaec; border-top: 1px #e7eaec;">
                            <h3>  Hybrizy Code </h3>
                            4454 <br>
                            4585 <br>
                            4678 <br>
                            4763 <br>
                            4899
                          </div>
                      </div>

                    </div>

            </div>
            <div class="col-lg-4">

              <div class="ibox-content">

                <h2>Hybrizy Code</h2>

                    <div class="ibox-title"  style=" border-left: solid #1c84c6; border-bottom: solid 1px #e7eaec;">
                        <p>1255</p>
                    </div><br>

                    <div class="ibox-title"  style=" border-left: solid #1c84c6; border-bottom: solid 1px #e7eaec;">
                        <p>1256</p>
                    </div><br>

                    <div class="ibox-title"  style=" border-left: solid #1c84c6; border-bottom: solid 1px #e7eaec;">
                        <p>1257</p>
                    </div><br>

                    <div class="ibox-title"  style=" border-left: solid #1c84c6; border-bottom: solid 1px #e7eaec;">
                        <p>1258</p>
                    </div>
              </div>

            </div>

        </div>

    </div>
</div>


<?php $this->beginBlock('JavascriptInit'); ?>
<!-- Mainly scripts -->

<script src="<?=Url::base(true)?>/js/bootstrap.min.js"></script>
<script src="<?=Url::base(true)?>/js/jquery.metisMenu.js"></script>
<script src="<?=Url::base(true)?>/js/jquery.slimscroll.min.js"></script>

<!-- Flot -->
<script src="<?=Url::base(true)?>/js/jquery.flot.js"></script>
<script src="<?=Url::base(true)?>/js/jquery.flot.tooltip.min.js"></script>
<script src="<?=Url::base(true)?>/js/jquery.flot.resize.js"></script>
<script src="<?=Url::base(true)?>/js/jquery.flot.spline.js"></script>
<script src="<?=Url::base(true)?>/js/jquery.flot.pie.js"></script>

<script src="<?=Url::base(true)?>/js/Chart.min.js"></script>

<script>
    $(document).ready(function() {
        setTimeout(function() {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
            };
            toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');

        }, 1300);


        var data1 = [
            [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
        ];
        var data2 = [
            [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
        ];
        $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
            data1, data2
        ],
                {
                    series: {
                        lines: {
                            show: false,
                            fill: true
                        },
                        splines: {
                            show: true,
                            tension: 0.4,
                            lineWidth: 1,
                            fill: 0.4
                        },
                        points: {
                            radius: 0,
                            show: true
                        },
                        shadowSize: 2
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        tickColor: "#d5d5d5",
                        borderWidth: 1,
                        color: '#d5d5d5'
                    },
                    colors: ["#1ab394", "#464f88"],
                    xaxis:{
                    },
                    yaxis: {
                        ticks: 4
                    },
                    tooltip: false
                }
        );

        var doughnutData = [
            {
                value: 300,
                color: "#a3e1d4",
                highlight: "#1ab394",
                label: "App"
            },
            {
                value: 50,
                color: "#dedede",
                highlight: "#1ab394",
                label: "Software"
            },
            {
                value: 100,
                color: "#b5b8cf",
                highlight: "#1ab394",
                label: "Laptop"
            }
        ];

        var doughnutOptions = {
            segmentShowStroke: true,
            segmentStrokeColor: "#fff",
            segmentStrokeWidth: 2,
            percentageInnerCutout: 45, // This is 0 for Pie charts
            animationSteps: 100,
            animationEasing: "easeOutBounce",
            animateRotate: true,
            animateScale: false,
        };

        var ctx = document.getElementById("doughnutChart").getContext("2d");
        var DoughnutChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);

        var polarData = [
            {
                value: 300,
                color: "#a3e1d4",
                highlight: "#1ab394",
                label: "App"
            },
            {
                value: 140,
                color: "#dedede",
                highlight: "#1ab394",
                label: "Software"
            },
            {
                value: 200,
                color: "#b5b8cf",
                highlight: "#1ab394",
                label: "Laptop"
            }
        ];

        var polarOptions = {
            scaleShowLabelBackdrop: true,
            scaleBackdropColor: "rgba(255,255,255,0.75)",
            scaleBeginAtZero: true,
            scaleBackdropPaddingY: 1,
            scaleBackdropPaddingX: 1,
            scaleShowLine: true,
            segmentShowStroke: true,
            segmentStrokeColor: "#fff",
            segmentStrokeWidth: 2,
            animationSteps: 100,
            animationEasing: "easeOutBounce",
            animateRotate: true,
            animateScale: false,
        };
        var ctx = document.getElementById("polarChart").getContext("2d");
        var Polarchart = new Chart(ctx).PolarArea(polarData, polarOptions);

    });
</script>

<?php $this->endBlock('JavascriptInit'); ?>
