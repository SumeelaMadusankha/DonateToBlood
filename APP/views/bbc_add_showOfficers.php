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
    <link href="../Public/assets/css/custom-styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="../Public/assets/css/bbc_user_reg.css">
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                    <a href="showBloodData"><i class="fa fa-qrcode"></i> Shortage of Blood</a>
                </li>
                </li>
                <li>
                    <a class="active-menu" href="view_Add_ShowOfficer"><i class="fa fa-desktop"></i> Add Officers</a>
                </li>
                <li>
                        <a href="viewOfficer_Data><i class="fa fa-desktop"></i>Show Officer Data</a>
                </li>
                <li>
                    <a href="../Login/logout"><i class="fa fa-desktop"></i>logout</a>
                </li>



            </ul>

        </div>

    </nav>
    <div id="page-wrapper">
        <div id="page-inner">
            <form class="form-inline md-form mr-auto mb-4" action='getOfficerNIC' method='POST' id="form_nic">
                <div class="row">
                    <input class="form-control mr-lg-2" type="text" placeholder="Enter Officer NIC" aria-label="Search" id="inp_nic" name="inp_nic">
                    <input type="submit" id="search_nic" class="btn btn-primary" value="Search" name="search_b">
                </div>

            </form>
            <?php

            if (isset($_SESSION['ERROR'])) {


                unset($_SESSION['ERROR']);

                echo "<div class='flag note note--error'>
                    <div class='flag__image note__icon'>
                        <i class='fa fa-times'></i>
                    </div> <div class='flag__body note__text'>
                    Invalid NIC! 
                    </div>
                    <a href='#' class='note__close'>
                        <i class='fa fa-times'></i>
                    </a>
                    </div>";
            }elseif (isset($_SESSION['MSG'])) {
                unset($_SESSION['MSG']);
                echo "<div class='flag note note--success'
                        <br>
                        <br>
                        
                        <div class='flag__body note__text'>
                        <strong style='color:green';
                        >Previously Registerd  Officer!</strong>
                        <br>
                        <br> 
                        </div>
                      
                      </div>";
            }









            ?>
            
                <!-- /. ROW  -->

        </div>
            <!-- /. PAGE INNER  -->
    </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->

    <script src="../Public/assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="../Public/assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="../Public/assets/js/jquery.metisMenu.js"></script>
    <!-- Custom Js -->
    <script src="../Public/assets/js/custom-scripts.js"></script>
    <script src="../Public/assets/js/bbc_user_reg.js"></script>


</body>

</html>