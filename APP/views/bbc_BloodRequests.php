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
                        <a href="showBloodData"><i class="fa fa-qrcode"></i> Shortage of Blood</a>
                    </li>
                    <li>
                        <a href="viewRegisterDonor"><i class="fa fa-dashboard"></i> Register Donor</a>
                    </li>
                    <li>
                        <a href="viewUpdateDonorDetails"><i class="fa fa-desktop"></i> Update Donate Details</a>
                    </li>
                    <li>
                        <a href="viewAddBloodDetails"><i class="fa fa-desktop"></i> Add Blood Details</a>
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
                            foreach ($data as $row) {
                                
                                echo "                  <tr>
                                <td>{$count}</td>
                                <td>{$row['bloodType']}</td>
                                <td>{$row['duedate']}</td>
                                <td>
                                <button class='btn-b' type='button' class='btn btn-success'>Accept</button>
                                <button class='btn-b' type='button' class='btn btn-danger'>Decline</button>
                                <a href='#modal-opened' id='modal-closed'>view</a>
                                </td>                     
                                <td><span class='label label-danger' style='font-size: 18px;display:block'>declined</span></td>
                             </tr>

                             <div class='modal-container body' id='modal-opened'>
                <div class='modal-demo' >
                  
                  <div class='modal__details'>
                    

                    <img src='../Public/images/blood-types/blood-B+.png'  class='post-image-class' alt=''>

                    

                    
                  
                    <h1 class='modal__title'><b>Blood Type : B+</b></h1>
                    <p class='modal__description'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                      Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer 
                      took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                       but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s 
                       with the release of Letraset sheets containing Lorem
                    </p>
                  </div>
              
                  <div class='modal__text'>
                    
                   <div class='outer-extra-class' > <b class= 'extra-class'>Contact Person :</b>  <p class='inner-extra-class'> Nuwan Jayasanka</p></div>
                    <p class='outer-extra-class'> <b class= 'extra-class'>Contact Number :</b>  <p class='inner-extra-class'> 0769152313</p></p>
                    <p class='outer-extra-class'> <b class= 'extra-class'>Due Date :</b>  <p class='inner-extra-class'> 2022-03-28</p></p>
                    
                    <!-- <button class='btn'><i class='fa fa-download' ></i> Download Attachment</button> -->

                    <a href='../Public/images/blood-types/blood-A+.png' 

                    

                    <button class='btn'><i class='fa fa-download' ></i> Download Attachment</button>
                    </a>
                    
                  </div>

              
                 
              
                  <a href='#modal-closed' class='link-2'></a>
              
                </div>
              </div>     
            </div>";
            $count += 1;
                            }
                            ?>













                                

                               <div class="modal-container body" id="modal-opened">
                  <div class="modal-demo" >
                    
                    <div class="modal__details">
                      

                      <img src="../Public/images/blood-types/blood-B+.png"  class="post-image-class" alt="">

                      

                      
                    
                      <h1 class="modal__title"><b>Blood Type : B+</b></h1>
                      <p class="modal__description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer 
                        took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                         but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s 
                         with the release of Letraset sheets containing Lorem
                      </p>
                    </div>
                
                    <div class="modal__text">
                      
                     <div class="outer-extra-class" > <b class= "extra-class">Contact Person :</b>  <p class="inner-extra-class"> Nuwan Jayasanka</p></div>
                      <p class="outer-extra-class"> <b class= "extra-class">Contact Number :</b>  <p class="inner-extra-class"> 0769152313</p></p>
                      <p class="outer-extra-class"> <b class= "extra-class">Due Date :</b>  <p class="inner-extra-class"> 2022-03-28</p></p>
                      
                      <!-- <button class="btn"><i class="fa fa-download" ></i> Download Attachment</button> -->

                      <a href="../Public/images/blood-types/blood-A+.png" 

                      

                      <button class="btn"><i class="fa fa-download" ></i> Download Attachment</button>
                      </a>
                      
                    </div>

                
                   
                
                    <a href="#modal-closed" class="link-2"></a>
                
                  </div>
                </div>     
              </div>





                             
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