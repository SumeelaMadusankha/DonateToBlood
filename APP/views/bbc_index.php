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
    <title>DonateToHeal</title>
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

    
<link rel="stylesheet" type="text/css" href="../Public/css/demo.css" />
	<link rel="stylesheet" type="text/css" href="../Public/css/alert.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	 <script type="text/javascript">
        $( document ).ready(function() {
        $(".note__close").click(function() {
          $(this).parent()
          .animate({ opacity: 0 }, 250, function() {
            $(this)
            .animate({ marginBottom: 0 }, 250)
            .children()
            .animate({ padding: 0 }, 250)
            .wrapInner("<div />")
            .children()
            .slideUp(250, function() {
              $(this).closest(".note").remove();
            });
          });
        });
        });
    </script>

    <link rel="stylesheet" href="../Public/assets/css/bbc_index.css">

</head>

<body>
    <div id="wrapper">
        <?php include "bbc_header.php" ?>
      
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../BB_Coordinater/viewDashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="../BB_Coordinater/viewBloodRequests"><i class="fa fa-desktop"></i> Blood Requests</a>
                    </li>
					<li>
                        <a href="../BB_Coordinater/viewCampRequests"><i class="fa fa-bar-chart-o"></i> Donation Camp Requests</a>
                    </li>
                    <li>
                        <a href="../BB_Coordinater/showBloodData"><i class="fa fa-qrcode"></i> Blood Levels</a>
                    </li>
                       
                    <li>
                        <a href="../BB_Coordinater/view_Add_ShowOfficer"><i class="fa fa-desktop"></i> Add Officers</a>
                    </li>

                    <li>
                        <a href="../BB_Coordinater/viewOfficer_Data"><i class="fa fa-desktop"></i> Show Officer Data</a>
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

                <header>
                        <div class="title">
                            <h1><?php echo $data[0]['firstName']." ".$data[0]['lastName']; ?></h1>                            
                            <h2>Blood Bank Coordinater</h2>
                            <h4><?php echo $data[0]['district']; ?></h3>

              <div class="ex1">
              <div class="row" >
                    <div class="col-md-12 ">
                        <h1 class="page-header ">
                            Blood Bank <small>Updates</small>
                        </h1>
                    </div>
                    <?php
                    if (isset($_SESSION['success'] ) ) {
                        unset($_SESSION['success']); 
                        echo "<div class='flag note note--success'>
                        <div class='flag__image note__icon'>
                          <i class='fa fa-check-circle'></i>
                        </div>
                        <div class='flag__body note__text'>
                          Bloodbank officer added Successfully!. 
                        </div>
                        <a href='#' class='note__close'>
                          <i class='fa fa-times'></i>
                        </a>
                      </div>";}
                    ?>
                </div>

                <!-- /. ROW  -->

                
                
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