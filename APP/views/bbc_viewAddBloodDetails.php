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
    <link href="../Public/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="../Public/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="../Public/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="../Public/assets/js/quantitydetails.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    

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
                        <a class="active-menu" href="viewAddBloodDetails"><i class="fa fa-desktop"></i> Add Blood Details</a>
                    </li>
                    <li>
                        <a href="viewOfficer_Data"><i class="fa fa-desktop"></i> Show Officer Data</a>
                    </li>



                </ul>

            </div>

        </nav>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Blood Details Editor
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Update Blood Details
                                </div>

                               <div>
                               <?php
                                 if (isset($_SESSION['error'])) {
        
    
                                    unset($_SESSION['error']); 
                                
                                    echo "<div class='flag note note--error'>
                                    <div class='flag__image note__icon'>
                                      <i class='fa fa-times'></i>
                                    </div> <div class='flag__body note__text'>
                                    Available quentity cannot be exceeded the maximum quentity! 
                                    </div>
                                    <a href='#' class='note__close'>
                                      <i class='fa fa-times'></i>
                                    </a>
                                  </div>";}
                                ?>
                               </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <?php echo "<form role='form' method='POST' action='../BloodDetails /updateBloodDetails?id=" . $_GET['id'] . "'" . "  id='shortage_form'>" ?>
                                            <div class="form-group">
                                                <h2><label><p class="text-danger"><?php echo $data[0]['BloodGroup'] ?></p></label></h2>
                                            </div>
                                            <div class="form-group">
                                                <label for="m_quantity">Maximum Quantity<span>(Enter in Blood Pints) </span></label>
                                                <input type="number" step="any" class="form-control"  placeholder="Maximum Quantity for given Blood Type" name="m_quantity" id="m_quantity" <?php echo "value=" . $data[0]['MaximumQuantity'] ?> 
                                            </div>
                                            <div class="form-group">
                                                <label for="a_quantity">Available Quantity <span>(Enter in Blood Pints) </span> </label>
                                                <input type="number" step="any" class="form-control" placeholder="Available Quantity for given Blood Type" name="a_quantity" id="a_quantity" <?php echo "value=" . $data[0]['AvailableQuantity'] ?>>
                                            </div>

                                                <input type="submit" value="Update Blood Data" class="btn btn-primary" name="add_blood_btn">
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