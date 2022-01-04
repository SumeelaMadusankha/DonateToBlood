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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        <?php include "bbc_header.php"; ?>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="viewDashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="../viewBloodRequests"><i class="fa fa-desktop"></i> Blood Requests</a>
                    </li>
                    <li>
                        <a href="../viewCampRequests"><i class="fa fa-bar-chart-o"></i> Donation Camp Requests</a>
                    </li>
                    <li>
                        <a  href="../showBloodData"><i class="fa fa-qrcode"></i> Shortage of Blood</a>
                    </li>
                    <li>
                        <a href="../viewRegisterDonor"><i class="fa fa-dashboard"></i> Register Donor</a>
                    </li>
                    <li>
                        <a href="../viewUpdateDonorDetails"><i class="fa fa-desktop"></i> Update Donate Details</a>
                    </li>
                    <li>
                        <a href="../viewAddBloodDetails"><i class="fa fa-desktop"></i> Add Blood Details</a>
                    </li>



                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Blood Bank <small>Updates</small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="fa fa-bar-chart-o fa-5x"></i>
                                <h3>8,457</h3>
                            </div>
                            <div class="panel-footer back-footer-green">
                                Total Visits

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                                <i class="fa fa-book fa-5x"></i>
                                <h3>52,160 </h3>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                Camp Requests

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-body">
                                <i class="fa fa fa-comments fa-5x"></i>
                                <h3>15,823 </h3>
                            </div>
                            <div class="panel-footer back-footer-red">
                                Blood Requests

                            </div>
                        </div>
                    </div>
                </div>

                <div class="alert alert-primary" role="alert">
                <a href="showUserData" class="link-info" style="font-size: 30px;">View User Details</a>
                </div>
                <div class="alert alert-secondary" role="alert">
                <a href="showRequestData" class="link-success" style="font-size: 30px;">View All Blood Requests Details</a>
                </div>
                

                <?php include "bbc_footer.php"; ?>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
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