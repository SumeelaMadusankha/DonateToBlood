<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <!-- Bootstrap Styles-->
    <link href="/DonateToBlood/Public/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="/DonateToBlood/Public/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="/DonateToBlood/Public/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="/DonateToBlood/Public/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
    <?php include "bbc_header.php";?>
    <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="viewDashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="viewBloodRequests"><i class="fa fa-desktop"></i> Blood Requests</a>
                    </li>
					<li>
                        <a class="active-menu" href="viewCampRequests"><i class="fa fa-bar-chart-o"></i> Donation Camp Requests</a>
                    </li>
                    <li>
                        <a  href="showBloodData"><i class="fa fa-qrcode"></i> Shortage of Blood</a>
                    </li>
                    <li>
                        <a href="viewRegisterDonor"><i class="fa fa-dashboard"></i> Register Donor</a>
                    </li>
                    <li>
                        <a href="viewUpdateDonorDetails"><i class="fa fa-desktop"></i> Update Donate Details</a>
                    </li>
                    <li>
                        <a href="viewAddBloodDetails"><i class="fa fa-desktop"></i> Add Blood Details</a>
                    </li>



                </ul>

            </div>

        </nav>
        <div id="page-wrapper" >
            <div id="page-inner" >
            <div class="table-responsive">
                                <table class="table table-hover ">
                                  <thead>
                                    <tr>
                                      <th></th>
                                      <th>Request</th>
                                      <th>Confirm/Decline</th>                                   
                                      <th>Request Status</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>To Held  A Camp in Beruwala</td>
                                  <td>
                                  <button type="button" class="btn btn-success">Accept</button>
                                  <button type="button" class="btn btn-danger">Decline</button>
                                  </td>                     
                                  <td><span class="label label-danger" style="font-size: 18px;display:block">declined</span></td>
                               </tr>
                               <tr>
                                  <td>1</td>
                                  <td>To Held  A Camp in Gampaha</td>
                                  <td>
                                  <button type="button" class="btn btn-success">Accept</button>
                                  <button type="button" class="btn btn-danger">Decline</button>
                                  </td>                     
                                  <td><span class="label label-success" style="font-size: 18px;display:block">posted successfully</span></td>
                               </tr>
                               <tr>
                                  <td>1</td>
                                  <td>To Held  A Camp in Maradana</td>
                                  <td>
                                  <button type="button" class="btn btn-success">Accept</button>
                                  <button type="button" class="btn btn-danger">Decline</button>
                                  </td>                     
                                  <td><span class="label label-primary" style="font-size: 18px;display:block">in progress</span></td>
                               </tr>
                             
                          </tbody>
                      </table>
                  </div>
             </div>
				<?php include "bbc_footer.php";?>
            </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="/assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>