<?php
if (isset($_SESSION['jobtype'])) {
  if ($_SESSION['jobtype']=='registeredUser') {
     # code...
  }else {
   header("Location:http://localhost/DonateToBlood/Login/mustLogout");
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/bootstrap.min.css">
    <!-- style css -->
    
    <!-- Responsive-->
    <link rel="stylesheet" href="../Public/css/responsive.css">
    <!-- fevicon -->
    
    <!-- fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Scrollbar Custom CSS -->
    
    <link rel="stylesheet" href="../Public/css/hd.css">
   
    <link rel="stylesheet" href="../Public/css/places.css">
    <link rel="stylesheet" href="../Public/css/whereToDonate.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" type="text/css" href="../Public/css/demo.css" />
	<link rel="stylesheet" type="text/css" href="../Public/css/alert.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- ---------------------------------------- -->
 
    

    
    <title>Document</title>



    
</head>
<body>
<header>
         
         <nav>
            <input type="checkbox" id="check-1">
            <label for="check-1" class="checkbtn">
               <i class="fas fa-bars"></i>
            </label>
            <label class="logo">DonateToBlood</label>
            <ul>
           
            <?php
             
             if (isset($_SESSION['nic'])) {
               echo " <li><a  href='../Index/index'>Home</a></li>";
             }else {
               echo " <li><a  href='../'>Home</a></li>" ;
             }
             ?>
           
               <?php
             
               if (isset($_SESSION['nic'])) {
                 echo "<li><a  href='../RegisteredUser/loadCampRequestForm'>Request Camp</a></li>";
               }else {
                  
               }
               ?>
               <?php
              
              if (isset($_SESSION['nic'])) {
                echo " <li><a  href='../RegisteredUser/loadBRForm' >Request Blood</a></li>";
              }else {
                 
              }
              ?>
              <?php
              
              if (isset($_SESSION['nic'])) {
                echo " <li><a href='../RegisteredUser/loadCampPost'>Where to Donate</a></li>";
              }else {
                 echo " <li><a href=' loadCampPost'>Where to Donate</a></li>";
              }
              ?>

<?php
              
              if (isset($_SESSION['nic'])) {
                echo " <li><a class='active' href='../RegisteredUser/loadBloodPost'>Blood adverticement</a></li>";
              }else {
                 echo " <li><a class='active' href=' loadBloodPost'>Blood adverticement</a></li>";
              }
              ?>

                <?php
              
               if (isset($_SESSION['nic'])) {
                 echo " <div class='dropdown'>
              
               
               
                 <i class='fa fa-user-circle' style='font-size:60px;'></i>
                 <div class='dropdown-content'>
                    <a href='../RegisteredUser/viewUserProfile'> <b> PROFILE</b></a>
                    <a href='#'><b> HISTORY</b> </a>
                    <a href='../Login/logout'><b>LOGOUT</b> </a>
                 </div>
                 </div>";
               }else {
                  echo "<li><a href='../Login/index'>Login</a></li>";
               }
               ?>

             
            </ul>
         </nav>
         
      </header>
      <div class="body">
  <div class="container outer-request" >
    <div class="filter-mod">
      
      <form action="filterBloodPost" method="POST">
      <div class="row ">
        <div class="col-md-5 col-xs-10 ">
         
            <b><h4 style="font-weight: bold;">Filter acording to district</h4>  </b>
            <select id = "sell1"  class="form-control dis" name="district">
            <option value="all"
            <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="all") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>
            > All District </option>
            <option value="Ampara" <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Ampara") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>>Ampara </option>
            <option  value="" <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Anuradhapura") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>> Anuradhapura </option>
            <option value="Badulla " <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Badulla") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>> Badulla </option>
            <option value="Batticalo" <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Batticalo") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>>Batticalo </option>
            <option value="Colombo " <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Colombo") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>> Colombo </option>
            <option value="Galle" <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Galle") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>> Galle </option>
            <option value=" Gampaha" <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Gampaha") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>> Gampaha</option>
            <option value="Hambantota" <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Hambantota") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>> Hambantota</option>
            <option value="Jafna" <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Jafna") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>> Jafna </option>
            <option value="Kalutara" <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Kalutara") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>> Kalutara </option>
            <option value="Kandy" <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Kandy") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>> Kandy</option>
            <option value="Kagalla" <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Kagalla") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>> Kagalla </option>
            <option value="Kilinochchi" <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Kilinochchi") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>> Kilinochchi </option>
            <option value="Kurunagala" <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Kurunagala") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>> Kurunagala</option>
            <option value="Mannar" <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Mannar") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>> Mannar </option>
            <option value="Matale " <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Matale") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>> Matale </option>
            <option value="Matara " <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Matara") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>>Matara </option>
            <option value="Moneragala" <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Moneragala") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>> Moneragala </option>
            <option value=" Mulativu" <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Mulativu") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>> Mulativu </option>
            <option value="Nuwara Elliya " <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Nuwara Elliya") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>> Nuwara Elliya </option>
            <option value=" Polonnaruwa" <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Polonnaruwa") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>> Polonnaruwa </option>
            <option value=" Puttalam" <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Puttalam") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>> Puttalam </option>
            <option value="Ratnapura" <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Ratnapura") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>> Ratnapura </option>
            <option value="Trincomalee" <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Trincomalee") {
                unset($_SESSION['select']);
                echo "selected";
              }
             
            }?>> Trincomalee </option >
            <option value="Vavuniya" <?php if (isset($_SESSION['select'])) {
              if ($_SESSION['select']=="Vavuniya") {
                unset($_SESSION['select']);
                echo "selected";
                
              }
             
            }?>> Vavuniya </option>
            </select>
           
           
        </div>
        <div class="col-md-5 col-xs-10 ">
        
            <b><h4 style="font-weight: bold;"> Filter acording to blood type</h4> </b>
            <select id = "sell2"  class="form-control bType" name="bloodType">
            <option value="all" <?php if (isset($_SESSION['selectb'])) {
              if ($_SESSION['selectb']=="all") {
                unset($_SESSION['selectb']);
                echo "selected";
              }
             
            }?>>All BloodTypes </option>
            <option value="A+" <?php if (isset($_SESSION['selectb'])) {
              if ($_SESSION['selectb']=="A+") {
                unset($_SESSION['selectb']);
                echo "selected";
              }
             
            }?>> A+ </option>
            <option value="A-" <?php if (isset($_SESSION['selectb'])) {
              if ($_SESSION['selectb']=="A-") {
                unset($_SESSION['selectb']);
                echo "selected";
              }
             
            }?>> A- </option>
            <option value="AB+" <?php if (isset($_SESSION['selectb'])) {
              if ($_SESSION['selectb']=="AB+") {
                unset($_SESSION['selectb']);
                echo "selected";
              }
             
            }?>> AB+ </option>
            <option value="AB-" <?php if (isset($_SESSION['selectb'])) {
              if ($_SESSION['selectb']=="AB-") {
                unset($_SESSION['selectb']);
                echo "selected";
              }
             
            }?>> AB- </option>
            <option value="B+" <?php if (isset($_SESSION['selectb'])) {
              if ($_SESSION['selectb']=="B+") {
                unset($_SESSION['selectb']);
                echo "selected";
              }
             
            }?>> B+ </option>
            <option value="B-" <?php if (isset($_SESSION['selectb'])) {
              if ($_SESSION['selectb']=="B-") {
                unset($_SESSION['selectb']);
                echo "selected";
              }
             
            }?>> B- </option>
            <option value="O+" <?php if (isset($_SESSION['selectb'])) {
              if ($_SESSION['selectb']=="O+") {
                unset($_SESSION['selectb']);
                echo "selected";
              }
             
            }?>> O+ </option>
            <option value="O-" <?php if (isset($_SESSION['selectb'])) {
              if ($_SESSION['selectb']=="O-") {
                unset($_SESSION['selectb']);
                echo "selected";
              }
             
            }?>> O- </option>
            </select var>

          
        </div>

        <div class="col-md-2 col-xs-4 ">
           <b><h4 style="font-weight: bold;visibility:hidden"> Filter pe</h4> </b>
           <input type="submit" value="Search" id="sell" name="search">

          
        </div> 
            
        
      </div>
      </form>
    </div>
      
    
 
            <!-- Topic Cards -->
    <div id="cards_landscape_wrap-2">
      <div class="container-fluid" outer-request  >
      <?php
      $startRow=" <div class='row' >";
      $pRow="";
      $fCode="";
      $post="";
      $count=1;
      $d=1;
      
      foreach ($data as $row) {
        $post="<div class='col-xs-12 col-sm-6 col-md-3 col-lg-3 '>
        <a href='#modal-opened{$count}' id='modal-closed{$count}'>
          <div class='card-flyer'>
            <div class='text-box'>
                <div class='image-box'>
                  <img class ='image-prop' src='../Public/images/bloods/{$row['bloodType']}.png' alt='' />
                </div>
                <div class='text-container'>
                    <h6 >BLOOD GROUP {$row['bloodType']}</h6>
                    <h5 style='text-align: left; padding-left: 15px;'>District  :{$row['district']}   </h5>
                    <h5 style='text-align: left; padding-left: 15px;'>Contact No:{$row['mobileNo']}</h5>
                </div>
                
             </div>
          </div>
        </a>
        
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
              
              

              <a href='downloadFile?file={$row['attachment']}' 

              

              <button class='btn'><i class='fa fa-download' ></i> Download Attachment</button>
              </a>
              
            </div>

            <a href='#modal-closed{$count}' class='link-2'></a>
        
          </div>
        </div>     
      </div>";
      if ($d==1) {
        $fCode=$fCode.$startRow;
      }
      $fCode=$fCode.$post;
      $d+=1;
      if ($d==5) {
        $fCode=$fCode." </div>";
        $d=1;
      }
     $count+=1;
      }
      echo $fCode;
      ?>





          
  </div>

  </div>
  </div>
    
    
</body>
</html>