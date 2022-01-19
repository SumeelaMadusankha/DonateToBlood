<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <!-- Bootstrap Styles-->
    <link href="../Public/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="../Public/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="../Public/assets/css/custom-styles.css" rel="stylesheet" />
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
        <?php include "bo_header.php";; ?>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="viewDashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a class="active-menu" href="viewUpdateDonorDetails"><i class="fa fa-desktop"></i> Update Donate Details</a>
                    </li>
                    <li>
                        <a href="../Login/logout"><i class="fa fa-desktop"></i>logout</a>
                    </li>



                </ul>

            </div>

        </nav>
        <div id="page-wrapper">
            <div id="page-inner">

                <form class="form-inline md-form mr-auto mb-4" action='updateUserBloodRecord' method='POST' id="form_nic">
                    <div class="row">
                        <input class="form-control mr-lg-2" type="text" placeholder="Enter NIC" aria-label="Search" id="inp_nic" name="inp_nic">
                        <input type="submit" id="search_nic" class="btn btn-primary" value="Add Officer" name="search_b">
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
                        >Previously Registerd User!</strong>
                        <br>
                        <br> 
                        </div>
                      
                      </div>";
                      }
                if ($data["status"]) {

                ?>
                    <div class='row'>
                    <?php
                } else {
                    ?>
                        <div class='row' style='display: none;'>
                        <?php
                    }
                        ?>


                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Update Donor Details
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <?php echo "<form method='POST' action='updateDonorRecord?nic=" . $data["nic"] . "'" ?>
                                            <div class="form-group">
                                                <label for="date">Donating Date<span class="description-date">:Please use the YYYY-MM-DD format.</span></label>
                                                <input name="d_date" class="form-control" type="date" id="date" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Donating Centre</label>
                                                <input name="d_centre" class="form-control">
                                            </div>
                                            <input type="submit" class="btn btn-primary" value="Update" name="update_b">
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        </div>
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