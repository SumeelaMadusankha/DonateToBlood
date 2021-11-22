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
    <!-- Custom Styles-->
    <link href="/DonateToBlood/Public/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<div id="wrapper">
    <?php include "bbc_header.php"; ?>
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
                        <a href="viewCampRequests"><i class="fa fa-bar-chart-o"></i> Donation Camp Requests</a>
                    </li>
                    <li>
                        <a class="active-menu" href="viewShortageBloodTypes"><i class="fa fa-qrcode"></i> Shortage of Blood</a>
                    </li>
                    <li>
                        <a href="viewRegisterDonor"><i class="fa fa-dashboard"></i> Register Donor</a>
                    </li>
                    <li>
                        <a href="viewUpdateDonorDetails"><i class="fa fa-desktop"></i> Update Donate Details</a>
                    </li>



                </ul>

            </div>

        </nav>
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Shortage of Blood
                    </h1>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Blood Type Details
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Blood Type</th>
                                            <th>Maximum</th>
                                            <th>Available Quantity</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>O-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button>View</button>
                                                <button>Edit</button>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>O+</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button>View</button>
                                                <button>Edit</button>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>B-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button>View</button>
                                                <button>Edit</button>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>B+</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button>View</button>
                                                <button>Edit</button>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>A-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button>View</button>
                                                <button>Edit</button>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>A+</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button>View</button>
                                                <button>Edit</button>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>AB-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button>View</button>
                                                <button>Edit</button>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>AB+</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button>View</button>
                                                <button>Edit</button>
                                            </td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- End  Kitchen Sink -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            </div>
            <!-- /. ROW  -->
            <?php include "bbc_footer.php" ?>
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
<!-- Custom Js -->
<script src="assets/js/custom-scripts.js"></script>


</body>
</html>