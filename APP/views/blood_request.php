<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user_reg.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>User_Reg</title>
    <!-- --------------------------------------------------- -->
    <!-- <link rel="stylesheet" href="css/responsive.css">
      fevicon
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      fonts-->
      <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      Scrollbar Custom CSS -->
     
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
       <link rel="stylesheet" href="../Public/css/owl.carousel.min.css"> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">

      <link rel="stylesheet" href="../Public/css/user_reg.css">
      <link rel="stylesheet" href="../Public/css/hd.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
      <script src="../Public/js/user_reg.js"></script>




</head>
   
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
               <li><a class="active" href="index">Home</a></li>
               <li><a href="#">Request Camp</a></li>
               <li><a href="User/loadBRForm">Request Blood</a></li>
               <li><a href="#">Where to Donate</a></li>
               <li><a href="#">Blood adverticement</a></li>
               <li><a href="User/index">Login</a></li>
            </ul>
         </nav>
         
      </header>
   <!-- ----------------------------------------------  -->
  <div class="body">
  <div class="outer_class">
<div class="ex">
<div class="form" >

    
        <form action="../User/addRequest" method="POST" id="req_form">
           <h1 class="topic" >Blood Request</h1>
           <?php 
           echo $data;
           ?>

        <div class="container" >
            
            
            <hr>
            <label for="nic"><b>NIC Number</b></label><br>
            <input type="text" placeholder="NIC Number" name="nic" id="nic" ><br>

            <label for="flname"><b>Full Name</b></label><br>
            <input type="text" placeholder="Full Name" name="flname" id="flname" ><br>

            <div class="bloods">
                <label for="blood"><b>Blood Type</b></label><br>
            <select name="blood" id="blood">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select><br>
            </div>
            <div> 
            <label for="address"><b>Address</b></label><br>
            <textarea name="address" id="address" cols="50" rows="3" placeholder="Address"></textarea>
            </div>

            <label for="num"><b>Contact Number</b></label><br>
            <input type="text" placeholder="Contact Number" name="num" id="num" ><br>

            <label for="description"><b>Description</b></label><br>
            <input type="text" placeholder="Description regarding the request" name="description" id="description" ><br>

            <label for="att"><b>Attachment</b></label><br>
            <input type="file" placeholder="attachment" name="att" id="att" ><br>

            <label for="duedate"><b>Due Date to recieve blood</b></label><br>
            <input type="date" placeholder="Due Date" name="duedate" id="duedate" ><br>

        </div>    
        
        <input type="submit" value="Submit" class="registerbtn" name="sbmt_btn">
       
        
        

        </form>
          
    
</div>

</div> 

  </div>
  </div>
   
</body>
</html>