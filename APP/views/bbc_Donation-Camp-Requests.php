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
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
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
                        <a href="viewBloodRequests"><i class="fa fa-desktop"></i> Blood Requests</a>
                    </li>
					<li>
                        <a class="active-menu" href="viewCampRequests"><i class="fa fa-bar-chart-o"></i> Donation Camp Requests</a>
                    </li>
                    <li>
                        <a  href="showBloodData"><i class="fa fa-qrcode"></i> Blood Levels</a>
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
        <div id="page-wrapper">
            <div id="page-inner">
            <div class="table-responsive">
                                <table class="table table-hover ex1">
                                  <thead>
                                    <tr>
                                      <th></th>
                                      <th>Contact Person's Name</th>
                                      <th>Camp Date</th>
                                      <th></th>                                   
                                      <th>Request Status</th>
                                  </tr>
                              </thead>
                              <tbody>
                            <?php
                           $scrpt="";
                            $count=1;
                            $stat="";
                            $btn="";
                            $rs="";
                            foreach ($data as $row) {
                             
                                if ($row['status']=="pending") {
                                    $rs=" <td><span class='label label-primary' style='font-size: 18px;display:block'>Pending</span></td>";
                                   $stat=" <a href='acceptCampRequest?id={$row['requestId']}&nic={$_SESSION['nic']}' id='modal-closed{$count}'>Accept</a>
                                   <a href='declienCampRequest?id={$row['requestId']}&nic={$_SESSION['nic']}' id='modal-closed{$count}'>Decline</a>";

                                   $btn="<a href='acceptCampRequest?id={$row['requestId']}&nic={$row['nic']}' id='modal-closed{$count}'>Accept</a>
                                   <a href='declienCampRequest?id={$row['requestId']}&nic={$_SESSION['nic']}' id='modal-closed{$count}'>Decline</a>";
                                   
                                   
                                }elseif($row['status']=="accepted"){
                                    $stat="<a href='cancelCampRequest?id={$row['requestId']}&nic={$_SESSION['nic']}' id='modal-closed{$count}'>Cancel</a>";
                                    $btn="<a href='cancelCampRequest?id={$row['requestId']}&nic={$_SESSION['nic']}' id='modal-closed{$count}'>Cancel</a>
                                    ";
                                    $rs=" <td><span class='label label-success' style='font-size: 18px;display:block'>Success</span></td>";
                                }
                                echo "
                                <script>
                           function initMap{$count}() { 
                                let marker;
                              const map= new google.maps.Map(document.getElementById('map{$count}'), {
                                zoom: 10,
                                center: { lat: {$row['lat']}, lng: {$row['lng']} },
                              });
                            
                              marker = new google.maps.Marker({
                                map,
                                draggable: true,
                                animation: google.maps.Animation.DROP,
                                position: { lat: {$row['lat']}, lng: {$row['lng']} },
                              });
                              marker.addListener('click', function(){
                                if (marker.getAnimation() !== null) {
                                marker.setAnimation(null);
                              } else {
                                marker.setAnimation(google.maps.Animation.BOUNCE);
                              }
                              });
                            }
                            </script>
                            ";


                                echo "<tr>
                                <td>{$count}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['campDate']}</td>
                                <td>
                                {$stat}
                                <a href='#modal-opened{$count}' id='modal-closed{$count}'>view</a>
                                </td>                     
                               {$rs}
                             </tr>

                             <div class='modal-container body' id='modal-opened{$count}'>
                <div class='modal-demo' >
                
                  <div class='modal__details'>
                  

                   

                    

                    
                  
                    <h1 class='modal__title'><b>Request Details</b></h1>
                    <p class='modal__description'>{$row['description']}
                    </p>
                  </div>
              
                  <div class='modal__text'>
                    
                   <div class='outer-extra-class' > <b class= 'extra-class'>Contact Person :</b>  <p class='inner-extra-class'> {$row['name']}</p></div>
                    <p class='outer-extra-class'> <b class= 'extra-class'>Contact Number :</b>  <p class='inner-extra-class'> {$row['conNumber']}</p></p>
                    <p class='outer-extra-class'> <b class= 'extra-class'>Email :</b>  <p class='inner-extra-class'> {$row['email']}</p></p>
                    <p class='outer-extra-class'> <b class= 'extra-class'>Address :</b>  <p class='inner-extra-class'> {$row['dateTime']}</p></p>
                    <p class='outer-extra-class'> <b class= 'extra-class'>Schedule Date and time :</b>  <p class='inner-extra-class'> {$row['address']}</p></p>
                    <div class='cls'>Location of the place:</div>
                    <div id='map{$count}' class='map-class'></div>



                   

                    <a href='downloadFile?file={$row['attachment']}' 

                    

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
                            $func="";
                            for ($i=1; $i < $count+1; $i++) { 
                              $func=$func.
                               "initMap{$i}();";
                            }
                            echo "
                            <script>
                            function init(){
                              {$func}
                            }
                            </script>";
                            
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
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDB9QFyUSZ75iGCi9yhjubJM8H0yw2koqE&callback=init&v=weekly"
      async
    ></script> 
                   
    
          
        
        
         
        
</body>

</html>