<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Public/css/bootstrap.min.css">
      <!-- style css -->
      
      <!-- Responsive-->
      <link rel="stylesheet" href="../Public/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="../Public/images/fevicon.png" type="image/gif" />
      <!-- fonts-->
     
      <link rel="preconnect" href="https://fonts.googleapis.com">
 
      <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
       <link rel="stylesheet" href="../Public/css/owl.carousel.min.css"> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
      <link rel="stylesheet" href="../Public/css/header.css">
      <link rel="stylesheet" href="../Public/css/login.css">
      <link rel="stylesheet" href="../Public/css/hd.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">  


      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>




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
<header>
         
         <nav>
            <input type="checkbox" id="check-1">
            <label for="check-1" class="checkbtn">
               <i class="fas fa-bars"></i>
            </label>
            <label class="logo">DonateToBlood</label>
            <ul>
               <li><a  href="index">Home</a></li>
               <li><a href="#">Request Camp</a></li>
               <li><a href="User/loadBRForm">Request Blood</a></li>
               <li><a href="#">Where to Donate</a></li>
               <li><a href="#">Blood adverticement</a></li>
               <?php
              
               if (isset($_SESSION['nic'])) {
                 echo " <li><a href='logout'>Logout</a></li>";
               }else {
                  echo " <li><a href='index'>Login</a></li>";
               }
               ?>
            </ul>
         </nav>
         
      </header>
<div class="body">
     <div class="login">
      <div class="container">
      
      
              
        <div class="wrapper">
        <?php
      
      if (isset($_SESSION['error'])) {
        
      if ($_SESSION['error']=="Invalid Username or Password") {
        unset($_SESSION['error']); 
    
        echo "<div class='flag note note--error'>
        <div class='flag__image note__icon'>
          <i class='fa fa-times'></i>
        </div> <div class='flag__body note__text'>
        Invalid Username or Password! 
        </div>
        <a href='#' class='note__close'>
          <i class='fa fa-times'></i>
        </a>
      </div>";
     
      }else {
       
      } }
        
         ?>
          <header>Login Form</header>
          <form action="../User/login" method="POST">
            <div class="field email">
              <div class="input-area">
                <input type="text" placeholder="National Identity Card No" name="username">
                <i class='icon fas fa-user'></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
              </div>
              <div class="error error-txt">NIC can't be blank</div>
            </div>
            <div class="field password">
              <div class="input-area">
                <input type="password" placeholder="Password" name="password">
                <i class="icon fas fa-lock"></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
              </div>
              <div class="error error-txt">Password can't be blank</div>
            </div>
            <div class="pass-txt"><a href="#">Forgot password?</a></div>
            <input type="submit" value="Login" name="login" data-toggle="modal" data-target="#Mysmallmodal">
          </form>
          <div class="sign-txt">Not a member? <a href="#">Register Here</a></div>
        </div>
        <div class="modal fade" id="Mysmallmodal">
	<!-- <div class="ex modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
                	&times;
                </button> 
				                                                      
			</div> 
			<div class="modal-body">
     
			</div>   
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">
                	Close
                </button>
				<button type="button" class="btn btn-warning">
                	Ok
                </button>                                 
			</div>
		</div>                                                                       
	</div>                                       -->
</div>
        </div>
        <script src="../Public/js/login.js"></script>
     </div>
     </div>
</body>
</html>