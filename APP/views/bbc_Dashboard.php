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
                        <a href="viewBloodRequests"><i class="fa fa-desktop"></i> Blood Requests</a>
                    </li>
                    <li>
                        <a href="viewCampRequests"><i class="fa fa-bar-chart-o"></i> Donation Camp Requests</a>
                    </li>
                    <li>

                        <a href="showBloodData"><i class="fa fa-qrcode"></i> Blood Levels</a>

                    </li>
                    <li>
                        <a href="viewAddOfficerLayer"><i class="fa fa-desktop"></i> Add Officers</a>
                    </li>
                    <li>
                        <a href="../Login/logout"><i class="fa fa-desktop"></i>logout</a>
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
                            Distric Blood Bank Division <small>Updates</small>
                        </h1>
                    </div>
                </div>
                <div class='row'>
                <?php
                    
                    foreach ($data as $raw) {

                        $percentage=round(($raw['AvailableQuantity']/ $raw['MaximumQuantity'])*100);
                        if ( $percentage<10) {
                        echo" 
                        <div class='col-md-4 col-sm-12 col-xs-12'>
                                <div class='panel panel-primary text-center no-boder bg-color-red'>
                                    <div class='panel-body'>
                                        <i class='fa fa-medkit fa-5x'></i>
                                        <h3>{$raw['BloodGroup']}</h3>
                                    </div>
                                    <div class='panel-footer back-footer-red'>
                                    <strong>{$raw['AvailableQuantity']} Blood Pints</strong>
        
                                    </div>
                                </div>
                            </div>
                        ";}
                        else{
                            echo" 
                            <div class='col-md-4 col-sm-12 col-xs-12'>
                                    <div class='panel panel-primary text-center no-boder bg-color-blue'>
                                        <div class='panel-body'>
                                            <i class='fa fa-medkit fa-5x'></i>
                                            <h3>{$raw['BloodGroup']}</h3>
                                        </div>
                                        <div class='panel-footer back-footer-blue'>
                                        <strong>{$raw['AvailableQuantity']} Blood Pints</strong>
            
                                        </div>
                                    </div>
                                </div>
                            ";
                        }
                    
                    };

                    ?>
                    </div>
                    <?php
                        foreach ($data as $raw) {
                            $percentage=round(($raw['AvailableQuantity']/ $raw['MaximumQuantity'])*100);
                        echo 
                        "<div class='panel-body'><!-- /. PAnel body  -->
                        <div>
                            <h3><strong>{$raw['BloodGroup']}</strong></h3>
                            <h3><strong>{$percentage}%</strong></h3>
                        </div><br>";
                            
                        if ( $percentage>10) {
                            echo " 
                            <div class='progress progress-striped active'>
                            <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow='{$percentage}' aria-valuemin='0' aria-valuemax='100' style='width: {$percentage}%'>
                            </div>
                            </div>";
                        }
                        else {
                            echo " 
                            <div class='progress progress-striped active'>
                            <div class='progress-bar progress-bar-danger' role='progressbar' aria-valuenow='{$percentage}' aria-valuemin='0' aria-valuemax='100' style='width: {$percentage}%'>
                            </div>
                            </div>";
                        }
                           echo "       
                </div>
                ";}

                ?>
                

           
                

                
            </div>
            <!-- /. PAGE INNER  -->
        </div><!-- /. PAGE INNER  -------------------->
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