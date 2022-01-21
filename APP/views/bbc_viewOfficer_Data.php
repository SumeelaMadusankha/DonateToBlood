
<?php
if (!isset($_SESSION['nic'])) {
    header("Location:http://localhost/DonateToBlood/Login/index");
}
if (isset($_SESSION['jobtype'])) {
    if ($_SESSION['jobtype']=='bloodBankCordinator') {
       
    }else {
        header("Location:http://localhost/DonateToBlood/Login/mustLogout");
    }
}else {
    header("Location:http://localhost/DonateToBlood/Login/mustLogout");
}
?>
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
                        <a href="viewDashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="viewBloodRequests"><i class="fa fa-desktop"></i> Blood Requests</a>
                    </li>
                    <li>
                        <a href="viewCampRequests"><i class="fa fa-bar-chart-o"></i> Donation Camp Requests</a>
                    </li>
                    <li>
                        <a href="showBloodData"><i class="fa fa-qrcode"></i> Blood Levels</a>
                    </li>
                    <li>
                        <a href="view_Add_ShowOfficer"><i class="fa fa-desktop"></i> Add Officers</a>
                    </li>
                    <li>
                        <a class="active-menu"  href="viewOfficer_Data"><i class="fa fa-desktop"></i>Show Officer Data</a>
                    </li>
                  
                    <li>
                        <a href="../Login/logout"><i class="fa fa-desktop"></i>logout</a>
                    </li>



                </ul>

            </div>

        </nav>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Officer Data
                        </h1>
                    </div>

                    <!-- /. ROW  -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Blood Bank Officer Data
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>NIC</th>
                                                    <th>City</th>
                                                    <th>Mobile No</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($data as $raw) {
                                                    echo "
                                                <tr>
                                                <td>" . $raw['nic'] . "</td>
                                                <td>" . $raw['city'] . "</td>
                                                <td>" . $raw['mobileNo'] . "</td>
                                                <td>
                                                
       
                                                <a class='anc_button' href='../BB_Coordinater/view_Userprofile?id=" . $raw['nic'] . "'>View More</a>
                                                </td>
                                                </tr>";
                                                }
                                                ?>

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