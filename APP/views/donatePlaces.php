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
               echo " <li><a  href='../RegisteredUser/index'>Home</a></li>";
             }else {
               echo " <li><a  href='../'>Home</a></li>" ;
             }
             ?>
   
               <?php
             
               if (isset($_SESSION['nic'])) {
                 echo "<li><a  href='loadCampRequestForm'>Request Camp</a></li>";
               }else {
                  
               }
               ?>
               <?php
              
              if (isset($_SESSION['nic'])) {
                echo " <li><a  href='loadBRForm' >Request Blood</a></li>";
              }else {
                 
              }
              ?>
              <?php
              
              if (isset($_SESSION['nic'])) {
                echo " <li><a class='active' href='loadCampPost'>Where to Donate</a></li>";
              }else {
                 echo " <li><a class='active' href='loadCampPost'>Where to Donate</a></li>";
              }
              ?>

<?php
              
              if (isset($_SESSION['nic'])) {
                echo " <li><a href='loadBloodPost'>Blood adverticement</a></li>";
              }else {
                 echo " <li><a href='loadBloodPost'>Blood adverticement</a></li>";
              }
              ?>
              


              <?php
              
               if (isset($_SESSION['nic'])) {
                 
                 echo " <div class='dropdown'>
              
                 <i class='fas fa-user' style='color:white'></i>
                 <div class='dropdown-content'>
                 <a href='../RegisteredUser/viewUserProfile'> <b> PROFILE</b></a>
                 <a href='../RegisteredUser/donationHistoryLoad'><b> HISTORY</b> </a>
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
      
      <form action="filterCampPost" method="POST">
      <div class="row ">
        <div class="col-md-8 col-xs-14 ">
         
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
     

        <div class="col-md-4 col-xs-8 cls">
         
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
      

      $scrpt="";
      
{
   
}
while ($data->valid()) {
  $key = $data->key();
  $row = $data->current();
  $data->next();
       echo "
        <script>
      function initMap{$count}() { 
        let marker;
        
      const map = new google.maps.Map(document.getElementById('map{$count}'), {
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
      </script>";


      echo "
      <script>
      function initMapInner{$count}() { 
        let marker;
        
      const map = new google.maps.Map(document.getElementById('mapin{$count}'), {
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
    </script> ";


   
        $post="<div class='col-xs-12 col-sm-6 col-md-3 col-lg-3 '>
        <a href='#modal-opened{$count}' id='modal-closed{$count}'>
          <div class='card-flyer'>
            <div class='text-box' >
                <div class='image-box' >
                <div  id='map{$count}' style='height:200px'></div>
                </div>
                <div class='text-container'>
                <div class='row'>
                <div class='col-md-4 col-xs-8 '>
                <h6 >Date:</h6>
              </div> 
              <div class='col-md-8 col-xs-16 '>
              <h6 >{$row['campDate']}</h6>
                </div> 
                </div>
                <div class='row'>
                <div class='col-md-4 col-xs-8 '>
                <h6 > <h5 style='text-align: left; padding-left: 15px;'>District </h5></h6>
              </div> 
              <div class='col-md-8 col-xs-16 '>
              <h6 > <h5 style='text-align: left; padding-left: 15px;'>{$row['district']}   </h5></h6>
                </div> 
                </div>
                <div class='row'>
                <div class='col-md-4 col-xs-8 '>
                <h6 ><h5 style='text-align: left; padding-left: 15px;'>Contact No:</h5></h6>
              </div> 
              <div class='col-md-8 col-xs-16 '>
              <h6 ><h5 style='text-align: left; padding-left: 15px;'>{$row['conNumber']}</h5></h6>
                </div> 
                </div>
                <div class='row'>
                <div class='col-md-4 col-xs-8 '>
                <h6 ><h5 style='text-align: left; padding-left: 15px;'>City:</h5></h6>
              </div> 
              <div class='col-md-8 col-xs-16 '>
              <h6 ><h5 style='text-align: left; padding-left: 15px;'>{$row['city']}</h5></h6>
                </div> 
                </div> 
                    
                </div>
                
             </div>
          </div>
        </a>
        
        
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
            <p class='outer-extra-class'> <b class= 'extra-class'>Schedule Date :</b>  <p class='inner-extra-class'> {$row['campDate']}</p></p>
            <p class='outer-extra-class'> <b class= 'extra-class'>Schedule Stating Time :</b>  <p class='inner-extra-class'> {$row['startingTime']}</p></p>
            <p class='outer-extra-class'> <b class= 'extra-class'>Address :</b>  <p class='inner-extra-class'> {$row['address']}</p></p>
            <div class='cls'>Location of the place:</div>
            <div id='mapin{$count}' class='map-class'></div>
           

            <a href='downloadFile?file={$row['attachment']}' 

            

            <button class='btn'><i class='fa fa-download' ></i> Download Attachment</button>
            </a>
         
           
          </div>
          <a href='#modal-closed' class='link-2'></a>
      
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
$func="";
      for ($i=1; $i < $count+1; $i++) { 
        $func=$func.
         "initMap{$i}();
          initMapInner{$i}();";
      }
      $dataScr="
      <script>
      function init(){
        {$func}
      }
      </script>";
     
      echo $fCode;
      echo $dataScr;
     
      ?>





          
  </div>

  </div>
  </div>
  </div>
 
  
    <script
      src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDB9QFyUSZ75iGCi9yhjubJM8H0yw2koqE&callback=init&v=weekly'
      async
    ></script>
</body>
</html>