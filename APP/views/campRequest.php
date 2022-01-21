<?php
  if (!isset($_SESSION['nic'])) {
   header("Location:../");
  }
?>
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
    <link rel="stylesheet" href="user_reg.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>User_Reg</title>
    
    <!-- <link rel="stylesheet" href="css/responsive.css">
      fevicon
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      fonts-->
      <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      Scrollbar Custom CSS -->
     
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
       <link rel="stylesheet" href="../Public/css/owl.carousel.min.css"> 
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen"> -->
      <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
      <link rel="stylesheet" href="../Public/css/notification.css">

      <link rel="stylesheet" href="../Public/css/user_reg.css">
      <link rel="stylesheet" href="../Public/css/hd.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
      <script src="../Public/js/user_reg.js"></script>


     


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
   
</head>
<body>

      <header>
         
         <nav>
            <input type="checkbox" id="check-1">
            <label for="check-1" class="checkbtn">
               <i class="fas fa-bars"></i>
            </label>
            <label class="logo">DonateToHeal</label>
            <ul>
            <li><a  href="../RegisteredUser/index">Home</a></li>
               <?php
             
               if (isset($_SESSION['nic'])) {
                 echo "<li><a class='active' href='../RegisteredUser/loadCampRequestForm'>Request Camp</a></li>";
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
                 echo " <li><a href=' UnregisteredUser/loadCampPost'>Where to Donate</a></li>";
              }
              ?>

<?php
              
              if (isset($_SESSION['nic'])) {
                echo " <li><a href='../RegisteredUser/loadBloodPost'>Blood adverticement</a></li>";
              }else {
                 echo " <li><a href=' UnregisteredUser/loadBloodPost'>Blood adverticement</a></li>";
              }
              ?>
              

                <?php
              
               if (isset($_SESSION['nic'])) {
                 echo " <div class='dropdown'>
              
               
               
                 <i class='fa fa-user-circle' style='font-size:60px;'></i>
                 <div class='dropdown-content'>
                    <a href='../RegisteredUser/viewUserProfile'> <b> PROFILE</b></a>
                    <a href='../RegisteredUser/donationHistoryLoad'><b> HISTORY</b> </a>
                    <a href='../Login/logout'><b>LOGOUT</b> </a>
                 </div>
                 </div>";
               }else {
                  echo "<li><a href='Login/index'>Login</a></li>";
               }
               ?>

       
            </ul>
         </nav>
         
      </header>
   <!-- ----------------------------------------------  -->
 
  <div class="outer_class">
  <div class="body">
<div class="ex">
<div class="form" >


    

        <form action="../CampRequest/addRequest" method="POST" id="req_form">
        <div id="note">
      <b> Notification message </b>
</div>
           <h1 class="topic" >Camp Request Form</h1>

           <?php
           
           
      if (isset($_SESSION['msg'])) {
        unset($_SESSION['msg']); 
    
        echo "<div class='flag note note--success'>
                <div class='flag__image note__icon'>
                  <i class='fa fa-check-circle'></i>
                </div>
                <div class='flag__body note__text'> Dear 
                  Your request has been sent  Successfully! 
                </div>
                <a href='#' class='note__close'>
                  <i class='fa fa-times'></i>
                </a>
              </div>";
     
      }elseif(isset($_SESSION['error'])) {
         unset($_SESSION['error']); 
    
         echo "<div class='flag note note--error'>
         <div class='flag__image note__icon'>
           <i class='fa fa-times'></i>
         </div> <div class='flag__body note__text'>
         Your request has not been sent. Try again! 
         </div>
         <a href='#' class='note__close'>
           <i class='fa fa-times'></i>
         </a>
       </div>";
      } 
        
         ?>

        <div class="container" >
            
            
            <hr>
           
           

            <div class="field fullName">
            <label for="flname"><b>Contact Person's Full Name</b></label><br>
            <input type="text" placeholder="Full Name" name="flname" id="flname" >
            <div class="error error-text"> Name can't be blank</div><br>
            </div>
            



            <div class="field address"> 
            <label for="address"><b>Location Address</b></label><br>
            <!-- <textarea name="address" id="address" cols="50" rows="3" placeholder="Address"></textarea> -->
            <input type="text" placeholder="Address" name="address" id="address" >
            <div class="error error-text"> Address can't be blank</div><br>
          
            </div>
            <div class="field district"> 
            <label for="district"><b>District</b></label><br>
                <select name="district" id="district">
                    <option value="matara">Matara</option>
                    <option value="galle">Galle</option>
                    <option value="jaffna">Jaffna</option>
                    <option value="colombo">Colombo</option>
                </select><br>
            <!-- <input type="text" placeholder="Address" name="address" id="address" > -->
            
          
            </div>
            <div class="field mobNum">
            <label for="num"><b>Contact Number</b></label><br>
            <input type="text" placeholder="Contact Number" name="num" id="num" >
            <div class="error error-text"> Mobile Number can't be blank</div><br>
            </div>

            

            <div class="field description"> 
            <label for="description"><b>Description</b></label><br>
            <!-- <textarea name="description" id="description" cols="50" rows="3" placeholder="Description regarding the request"></textarea> -->
            <input type="text" placeholder="Description" name="description" id="description" >
            <div class="error error-text"> Description can't be blank</div><br>
          
            </div>
            
          
            <div class="field attachment">
            <label for="att"><b>Attachment</b></label><br>
            <input type="file" placeholder="attachment" name="att" id="att" ><br>
            <div class="error error-text"> Attachment can't be blank</div><br>
            </div>

            
            <div class="field dueDate">

            <label for="duedate"><b>Date </b></label><br>
            <input type="date" placeholder="Due Date" name="duedate" id="duedate" >
            <div class="error error-text"> Due Date can't be blank</div><br>
            </div>

            <div class="field time">
            <label for="time"><b>Starting time </b></label><br>
            <input type="time" placeholder="Time" name="time" id="time" min="08:00" max="12:00">
            <div class="error error-text"> Startingtime can't be blank</div><br>

            </div>
            

             
            
            <div class="mapform" >
            <label for="duedate"><b>Mark location on following map</b></label><br>
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder=" latitude" name="lat" id="lat" style="display: none;">
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="longitude " name="lng" id="lng" style="display: none;">
                        </div>
                    </div>

                    <div id="map" style="height:400px" class="my-3"></div>

                    <script>
                        let map;
                        function initMap() {
                            map = new google.maps.Map(document.getElementById("map"), {
                                center: { lat: 5.95492, lng: 80.554956 },
                                zoom: 10,
                                scrollwheel: true,
                            });

                            const ex = { lat: 5.95492, lng: 80.554956 };
                            let marker = new google.maps.Marker({
                                position: ex,
                                map: map,
                                draggable: true
                            });

                            google.maps.event.addListener(marker,'position_changed',
                                function (){
                                    let lat = marker.position.lat()
                                    let lng = marker.position.lng()
                                    $('#lat').val(lat)
                                    $('#lng').val(lng)
                                })

                            google.maps.event.addListener(map,'click',
                            function (event){
                                pos = event.latLng
                                marker.setPosition(pos)
                                infowindowContent.children["place-name"].textContent = place.name;
            infowindowContent.children["place-address"].textContent =
              place.formatted_address;
            infowindow.open(map, marker);
                            })
                        }
                    </script>
                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSrUrvFB7-sGbuP_VZG5ADl9tZswY7XN8&callback=initMap"
                            type="text/javascript"></script>
                </div>


</div>
    
        <input type="submit" value="Submit" class="registerbtn" name="sbmt_btn"  onclick="return    ( submitRequestForm() && dateVal() && timeVal())">
        

       
        
        

        </form>
          
    
</div>

</div> 

  </div>
  </div>
  <script src="../Public/js/camp_request_val.js"></script>
        <script src="../Public/js/jquery.min.js"></script>
        <script src="../Public/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
        <script src="../Public/js/owl.carousel.min.js"></script>
        <!-- <script src="../Public/js/custom.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>