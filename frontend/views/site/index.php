<?php

use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<div class="site-index">

    <!-- start graph -->
    <div class="row  border-bottom white-bg dashboard-header" style="background-color:#fff">
      <div class="form-group" id="data_5" align="right">
        <label class="font-noraml">Range select</label>
          <div class="input-daterange input-group" id="datepicker">
            <input type="text" class="input-sm form-control" name="start" value="">
            <span class="input-group-addon">to</span>
            <input type="text" class="input-sm form-control" name="end" value="">
          </div>
      </div>
      <div class="ibox-title">
          <h5>Hybrizy Code Callout </h5>

          <div class="ibox-tools">
              <!-- <a class="collapse-link">
                  <i class="fa fa-chevron-up"></i>
              </a>
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  <i class="fa fa-wrench"></i>
              </a>
              <ul class="dropdown-menu dropdown-user">
                  <li><a href="#">Config option 1</a>
                  </li>
                  <li><a href="#">Config option 2</a>
                  </li>
              </ul>
              <a class="close-link">
                  <i class="fa fa-times"></i>
              </a> -->

              <button type="button" class="btn btn-primary btn-xs">Day</button>
              <button type="button" class="btn btn-primary btn-xs">Week</button>
              <button type="button" class="btn btn-primary btn-xs">Month</button>
          </div>
      </div>
      <div class="ibox-content">
          <div id="morris-one-line-chart"></div>
      </div>



    </div>

    <div class="row  border-bottom white-bg dashboard-header" style="background-color:#fff;">
      <div class="col-lg-6">
        <div class="ibox-title">
            <h5>User / Visitor </h5>
            <div class="ibox-tools">
            </div>
        </div>
        <div class="ibox-content" style="position: relative">
            <div id="morris-area-chart"></div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="ibox-title">
            <h5>Total Visitor </h5>
            <div class="ibox-tools">
            </div>
        </div>
        <div class="ibox-content" style="position: relative">
            <div id="morris-area-chart2"></div>
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
                          <!-- <div class="ibox float-e-margins">

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
                          </div> -->
                        <!-- </div> -->

                <div class="ibox float-e-margins">
                    <div class="ibox-title" style="border-bottom: solid 1px #e7eaec;">

                        <h5>Password</h5>

                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-down"></i>
                            </a>

                        </div>
                    </div>
                    <div class="ibox-content collapse" style=" border-bottom: 1px #e7eaec; border-top: 1px #e7eaec;">
                      <!--  -->
                      <div class="row">
                      <label id="pass1">Your Password : xxxxxx</label>   <div class="ibox-tools" style="margin-top: -0px; margin-right:7px;"><i class="fa fa-edit fa-lg" id="show"></i></div>
                      </div>
                      <div class="row" id="form" style="display:none;">
                        <div class="ibox-tools">
                            <a >
                                <i class="fa fa-times fa-lg" id="cancel" style=" margin-right:10px;"></i>
                            </a>

                        </div>
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

                <div class="ibox float-e-margins" style="margin-top:-24px">
                    <div class="ibox-title" style="border-bottom: solid 1px #e7eaec;">
                        <h5>Billing Information</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-down"></i>
                            </a>

                        </div>
                    </div>
                    <div class="ibox-content collapse" style=" border-bottom: 1px #e7eaec; border-top: 1px #e7eaec;">
                      <div class="row" id="add1">
                      <label >Address 1 : 44, Jalan Manis Manja</label>   <div class="ibox-tools" style="margin-top: -0px; margin-right:7px;"><i class="fa fa-edit fa-lg" id="show2"></i></div>
                      <label >Address 2 : Taman Manja Lara</label><br>
                      <label >Postcode : 53000</label> <br>
                      <label >District : Kuala Lipis</label><br>
                      <label >State : Pahang</label>
                      </div>
                      <div class="row" id="form2" style="display:none;">
                        <div class="ibox-tools">
                            <a >
                                <i class="fa fa-times fa-lg" id="cancel2" style=" margin-right:10px;"></i>
                            </a>

                        </div>
                        <form role="form" method="post">
                            <div class="form-group"><label>Address 1</label> <input type="text" placeholder="Address 1" class="form-control"></div>
                            <div class="form-group"><label>Address 2</label> <input type="text" placeholder="Address 2" class="form-control"></div>
                            <div class="form-group"><label>Postcode</label> <input type="text" placeholder="Postcode" class="form-control" style="width:85px;"></div>
                            <div class="form-group"><label>District</label> <input type="text" placeholder="District" class="form-control"></div>
                            <div class="form-group"><label>State</label> <input type="text" placeholder="State" class="form-control"></div>
                            <div>
                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Update</strong></button>
                            </div>
                        </form>
                      </div>
                    </div>
                </div>

                <div class="ibox float-e-margins" style="margin-top:-24px">
                    <div class="ibox-title" style="border-bottom: solid 1px #e7eaec;">
                        <h5>My Profile</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-down"></i>
                            </a>

                        </div>
                    </div>
                    <div class="ibox-content collapse" style=" border-bottom: 1px #e7eaec; border-top: 1px #e7eaec;">
                      <div class="row" id="profile">
                      <label >Name : <?=ucfirst(Yii::$app->user->identity->username)?></label>   <div class="ibox-tools" style="margin-top: -0px; margin-right:7px;"><i class="fa fa-edit fa-lg" id="show3"></i></div>
                      <br><label >Username : <?=ucfirst(Yii::$app->user->identity->username)?></label><br>
                      <label >Email : <?=Yii::$app->user->identity->email?></label>
                      </div>
                      <div class="row" style="display:none;" id="form3">
                        <div class="ibox-tools">
                            <a >
                                <i class="fa fa-times fa-lg" id="cancel3" style=" margin-right:10px;"></i>
                            </a>

                        </div>
                        <form role="form" method="post">
                            <div class="form-group"><label>Name</label> <input type="text" placeholder="Name" class="form-control"></div>
                            <div class="form-group"><label>Username</label> <input type="text" placeholder="Username" class="form-control"></div>
                            <div class="form-group"><label>Email</label> <input type="text" placeholder="Email" class="form-control"></div>
                            <div>
                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Update</strong></button>
                            </div>
                        </form>
                      </div>
                    </div>
                </div>

                    </div>
                  </div>

                </div>

                <div class="col-lg-4">
                    <div class="ibox-content">
                      <div class="ibox-title">
                          <h5>Code 7845</h5> <span class="label label-warning" style="float:right">Active</span>
                      </div>

                      <div class="ibox float-e-margins" >
                          <div class="ibox-title"  style=" border-left: solid #f8ac59; border-bottom: solid 1px #e7eaec;">

                              <p>

                              <table class="table">
                                <tbody >
                                  <tr>
                                    <td>
                                      Campaign Title :
                                    </td>
                                    <td align="right">
                                      Video Contest
                                    </td>
                                  </tr>
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
                                     Purchased Date :
                                   </td>
                                   <td align="right">
                                     03-02-2015
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

                                 <tr>
                                   <td>
                                     Campaign Type :
                                   </td>
                                   <td align="right">
                                     Video
                                   </td>
                                 </tr>
                                </tbody>
                              </table>
                              <div class="ibox-tools" style="margin-top:-15px; margin-right:-10px;">

                                <a class="collapse-link">
                                    <i class="fa fa-chevron-down"></i>
                                </a>
                              </div>

                              </p>

                          </div>

                          <div class="ibox-content collapse" style=" border-left: solid #f8ac59; border-bottom: 1px #e7eaec; border-top: 1px #e7eaec;">
                            <h3>  Campaign Description </h3>
                            Description
                          </div>
                      </div>

                      <div class="ibox-title">
                          <h5>Code 6398</h5> <span class="label label-danger" style="float:right">Inactive</span>
                      </div>
                      <div class="ibox float-e-margins" >
                          <div class="ibox-title"  style=" border-left: solid #ff0000; border-bottom: solid 1px #e7eaec;">

                              <p>


                              <table class="table">
                                <tbody>
                                  <tr>
                                    <td>
                                      Campaign Title :
                                    </td>
                                    <td align="right">
                                      Customers Reviews
                                    </td>
                                  </tr>
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
                                     Purchased Date :
                                   </td>
                                   <td align="right">
                                     03-03-2015
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

                                 <tr>
                                   <td>
                                     Campaign Type :
                                   </td>
                                   <td align="right">
                                     Reviews
                                   </td>
                                 </tr>
                                </tbody>
                              </table>
                              <div class="ibox-tools" style="margin-top:-15px; margin-right:-10px;">

                                <a class="collapse-link">
                                    <i class="fa fa-chevron-down"></i>
                                </a>
                              </div>


                              </p>
                          </div>

                          <div class="ibox-content collapse" style=" border-left: solid #ff0000; border-bottom: 1px #e7eaec; border-top: 1px #e7eaec;">
                            <h3>  Campaign Description </h3>

                            Description
                          </div>
                      </div>

                      <div class="ibox-title">
                          <h5>Code 1234 </h5> <span class="label label-primary" style="float:right">Active</span>
                      </div>
                      <div class="ibox float-e-margins" >
                          <div class="ibox-title"  style=" border-left: solid #1ab394; border-bottom: solid 1px #e7eaec;">

                              <p>

                              <table class="table">
                                <tbody>
                                  <tr>
                                    <td>
                                      Campaign Title :
                                    </td>
                                    <td align="right">
                                     Product Reviews
                                    </td>
                                  </tr>
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
                                     Purchased Date :
                                   </td>
                                   <td align="right">
                                     03-12-2016
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

                                 <tr>
                                   <td>
                                     Campaign Type :
                                   </td>
                                   <td align="right">
                                     Reviews
                                   </td>
                                 </tr>
                                </tbody>
                              </table>
                              <div class="ibox-tools" style="margin-top:-15px; margin-right:-10px;">

                                <a class="collapse-link">
                                    <i class="fa fa-chevron-down"></i>
                                </a>
                              </div>

                              </p>
                          </div>
                          <div class="ibox-content collapse" style=" border-left: solid #1ab394; border-bottom: 1px #e7eaec; border-top: 1px #e7eaec;">
                            <h3>  Campaign Description </h3>
                            Description
                          </div>
                      </div>

                    </div>

            </div>
            <div class="col-lg-4">
              <div class="ibox-content">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Hybrizy Code Analytics </h5>
                        <div class="ibox-tools">
                            <!-- <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a> -->

                        </div>
                    </div>
                    <div class="ibox-content">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Code</th>
                                <th>View</th>
                                <th>Data</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>1245</td>
                                <td class="text-navy"> <i class="fa fa-level-up"></i> 40% </td>
                                <td><span class="line" style="display: none;">5,3,2,-1,-3,-2,2,3,5,2</span><svg class="peity" height="16" width="32"><polygon fill="#1ab394" points="0 9.375 0 0.5 3.5555555555555554 4.25 7.111111111111111 6.125 10.666666666666666 11.75 14.222222222222221 15.5 17.77777777777778 13.625 21.333333333333332 6.125 24.888888888888886 4.25 28.444444444444443 0.5 32 6.125 32 9.375"></polygon><polyline fill="transparent" points="0 0.5 3.5555555555555554 4.25 7.111111111111111 6.125 10.666666666666666 11.75 14.222222222222221 15.5 17.77777777777778 13.625 21.333333333333332 6.125 24.888888888888886 4.25 28.444444444444443 0.5 32 6.125" stroke="#169c81" stroke-width="1" stroke-linecap="square"></polyline></svg></td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>1256</td>
                                <td class="text-warning"> <i class="fa fa-level-down"></i> -20% </td>
                                <td><span class="line" style="display: none;">5,3,9,6,5,9,7,3,5,2</span><svg class="peity" height="16" width="32"><polygon fill="#1ab394" points="0 15 0 7.166666666666666 3.5555555555555554 10.5 7.111111111111111 0.5 10.666666666666666 5.5 14.222222222222221 7.166666666666666 17.77777777777778 0.5 21.333333333333332 3.833333333333332 24.888888888888886 10.5 28.444444444444443 7.166666666666666 32 12.166666666666666 32 15"></polygon><polyline fill="transparent" points="0 7.166666666666666 3.5555555555555554 10.5 7.111111111111111 0.5 10.666666666666666 5.5 14.222222222222221 7.166666666666666 17.77777777777778 0.5 21.333333333333332 3.833333333333332 24.888888888888886 10.5 28.444444444444443 7.166666666666666 32 12.166666666666666" stroke="#169c81" stroke-width="1" stroke-linecap="square"></polyline></svg></td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td>1478</td>
                                <td class="text-navy"> <i class="fa fa-level-up"></i> 26% </td>
                                <td><span class="line" style="display: none;">1,6,3,9,5,9,5,3,9,6,4</span><svg class="peity" height="16" width="32"><polygon fill="#1ab394" points="0 15 0 13.833333333333334 3.2 5.5 6.4 10.5 9.600000000000001 0.5 12.8 7.166666666666666 16 0.5 19.200000000000003 7.166666666666666 22.400000000000002 10.5 25.6 0.5 28.8 5.5 32 8.833333333333332 32 15"></polygon><polyline fill="transparent" points="0 13.833333333333334 3.2 5.5 6.4 10.5 9.600000000000001 0.5 12.8 7.166666666666666 16 0.5 19.200000000000003 7.166666666666666 22.400000000000002 10.5 25.6 0.5 28.8 5.5 32 8.833333333333332" stroke="#169c81" stroke-width="1" stroke-linecap="square"></polyline></svg></td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
            </div>

        </div>

    </div>
</div>


<?php $this->beginBlock('JavascriptInit'); ?>
<!-- graph scripts -->

<script src="<?=Url::base(true)?>/js/raphael-2.1.0.min.js"></script>
<script src="<?=Url::base(true)?>/js/morris.js"></script>
<script src="<?=Url::base(true)?>/js/data.js"></script>

<!-- Data picker -->
<script src="<?=Url::base(true)?>/js/bootstrap-datepicker.js"></script>

<script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("#form").hide();
    });
    $("#cancel").click(function(){
        $("#pass1").show();
        $("#show").show();
        $("#form").hide();
    });

    $("#show").click(function(){
        $("#form").show();
        $("#pass1").hide();
        $("#show").hide();
    });

    $("#cancel2").click(function(){
        $("#add1").show();
        $("#show2").show();
        $("#form2").hide();
    });

    $("#show2").click(function(){
        $("#form2").show();
        $("#add1").hide();
        //$("#show").hide();
    });

    $("#cancel3").click(function(){
        $("#profile").show();
        $("#form3").hide();
        $("#cancel3").hide();
    });

    $("#show3").click(function(){
        $("#form3").show();
        $("#profile").hide();
        $("#cancel3").show();
        //$("#show").hide();
    });

    $('#data_5 .input-daterange').datepicker({
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true
    });
});

</script>

<?php $this->endBlock('JavascriptInit'); ?>
