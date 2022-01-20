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




    <link rel="stylesheet" href="../Public/css/whereToDonate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <a class="active-menu" href="viewBloodRequests"><i class="fa fa-desktop"></i> Blood Requests</a>
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
                        <a href="../Login/logout"><i class="fa fa-desktop"></i>logout</a>
                    </li>
                    <li>
                        <a href="viewOfficer_Data"><i class="fa fa-desktop"></i> Show Officer Data</a>
                    </li>



                </ul>

            </div>

        </nav>
        <div id="page-wrapper">
            <div id="page-inner">
            <div class="table-responsive">
                                <table class="table table-hover ex1">
                                  <thead>
                                    <tr>
                                      <th></th>
                                      <th>Blood Group</th>
                                      <th>Due date</th>
                                      <th></th>                                   
                                      <th>Request Status</th>
                                  </tr>
                              </thead>
                              <tbody>
                            <?php
                           
                            $count=1;
                            $stat="";
                            $btn="";
                            $rs="";
                            foreach ($data as $row) {
                               
                                if ($row['status']=="pending") {
                                    $rs=" <td><span class='label label-primary' style='font-size: 18px;display:block'>Pending</span></td>";
                                   $stat=" <a href='acceptBloodRequest?id={$row['requestId']}' id='modal-closed{$count}'>Accept</a>
                                   <a href='declienBloodRequest?id={$row['requestId']}' id='modal-closed{$count}'>Decline</a>";

                                   $btn="<a href='acceptBloodRequest?id={$row['requestId']}' id='modal-closed{$count}'>Accept</a>
                                   <a href='declienBloodRequest?id={$row['requestId']}' id='modal-closed{$count}'>Decline</a>";
                                   
                                   
                                }elseif($row['status']=="accepted"){
                                    $stat="<a href='cancelBloodRequest?id={$row['requestId']}' id='modal-closed{$count}'>Cancel</a>";
                                    $btn="<a href='cancelBloodRequest?id={$row['requestId']}' id='modal-closed{$count}'>Cancel</a>
                                    ";
                                    $rs=" <td><span class='label label-success' style='font-size: 18px;display:block'>Success</span></td>";
                                }

                                echo "<tr>
                                <td>{$count}</td>
                                <td>{$row['bloodType']}</td>
                                <td>{$row['duedate']}</td>
                                <td>
                                {$stat}
                                <a href='#modal-opened{$count}' id='modal-closed{$count}'>view</a>
                                </td>                     
                               {$rs}
                             </tr>

                             <div class='modal-container body' id='modal-opened{$count}'>
                <div class='modal-demo' >
                  
                  <div class='modal__details'>
                    

                    <img src='../Public/images/blood-types/blood-{$row['bloodType']}.png'  class='post-image-class' alt=''>

                    

                    
                  
                    <h1 class='modal__title'><b>Blood Type : B+</b></h1>
                    <p class='modal__description'>{$row['description']}
                    </p>
                  </div>
              
                  <div class='modal__text'>
                    
                   <div class='outer-extra-class' > <b class= 'extra-class'>Contact Person :</b>  <p class='inner-extra-class'> {$row['fullName']}</p></div>
                    <p class='outer-extra-class'> <b class= 'extra-class'>Contact Number :</b>  <p class='inner-extra-class'> {$row['mobileNo']}</p></p>
                    <p class='outer-extra-class'> <b class= 'extra-class'>Due Date :</b>  <p class='inner-extra-class'> {$row['duedate']}</p></p>
                    
                    <!-- <button class='btn'><i class='fa fa-download' ></i> Download Attachment</button> -->

                    <a href='{$row['attachment']}' download target='_blank'

                    

                    <button class='btn'><i class='fa fa-download' ></i> Download Attachment</button>
                    </a>
                    <div class='cls-btn'> {$btn}</div>
                   
                  </div>
                  <a href='#modal-closed' class='link-2'></a>
              
                </div>
              </div>     
            </div>";
            $count += 1;
                            }
                            ?>
     
                               




                             
                          </tbody>
                      </table>
                  </div>
             </div>
				<?php include "bbc_footer.php";?>
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