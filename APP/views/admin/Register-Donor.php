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
    <?php include "header.php"; include "sidebar.php" ; ?>
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Register Donor
                    </h1>
                </div>
                <form class="form-inline md-form mr-auto mb-4" style="margin-bottom: 10px;">
                    <input class="form-control mr-lg-2" type="text" placeholder="Enter ID" aria-label="Search">
                    <button type="button" class="btn btn-primary" class="btn btn-elegant btn-rounded btn-lg my-0" type="submit">Search</button>
                </form>      
    <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Add a Donor
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>NIC Number</label>
                                                <input class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Contact Number</label>
                                                <input class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Blood Type</label>
                                                <input class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <input class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-default">Add Donor</button>
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
            <!-- /. ROW  -->
            <?php include "footer.php" ?>
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
