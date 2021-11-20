<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <style>
      body {font-family: Arial, Helvetica, sans-serif;}
      
      /* The Modal (background) */
      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width:50%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      }
      
      /* Modal Content */
      .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        border: 1px solid #888;
        width: 80%;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s;
        display: flex;
        flex-wrap: nowrap;
        
      }
      
      /* Add Animation */
      @-webkit-keyframes animatetop {
        from {top:-300px; opacity:0} 
        to {top:0; opacity:1}
      }
      
      @keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
      }
      
      /* The Close Button */
      .close {
       
        color: rgb(5, 3, 3);
        align-items: flex-end;
        float: right;
        font-size: 28px;
        font-weight: bold;
      }
      
      .close:hover,
      .close:focus {
        color: rgb(2, 1, 1);
        text-decoration: none;
        cursor: pointer;
      }
      
      .modal-header {
        padding: 2px 16px;
    
        color: white;
      }
      
      .modal-body {padding: 2px 16px;}
      
      .modal-footer {
        padding: 2px 16px;
        
        color: white;
      }
      </style>
    <!-- Responsive-->
    <link rel="stylesheet" href="../../Public/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="../../Public/images/fevicon.png" type="image/gif" />
    <!-- fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
     <link rel="stylesheet" href="../../Public/css/owl.carousel.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Public/css/header.css">
   
    <link rel="stylesheet" href="../../Public/css/whereToDonate.css">
    <!-- ---------------------------------------- -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    
    <title>Document</title>
</head>
<body>
    <header class="header-area">
            
        <div class="container">
           <div class="row d_flex">
              <div class="col-sm-3 logo_sm">
                 <div class="logo">
                    <a href="index.html"> </a>
                 </div>
              </div>
              <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
                 <div class="navbar-area">
                    <nav class="site-navbar">
                       <ul>
                          <li><a class="active" href="index.html">Home</a></li>
                          <li><a href="about.html">Request Camp</a></li>
                          <li><a href="action.html">Request Blood</a></li>
                          <li><a href="news.html">Where to Donate</a></li> 
                          <li><a href="contact.html">Blood adverticement </a></li>
                          <div class="login-div"><li><a href="contact.html">LOGIN</a></li></div>
                       </ul>
                       <button class="nav-toggler">
                       <span></span>
                       </button>
                    </nav>
                 </div>
              </div>
           </div>
        </div>
     </header>

  <div class="container outer-request" >
    <div class="filter-mod">
      <div class="row ">
       
        <div class="col-md-6 col-xs-12 ">
          <form>
            <b><h4 style="font-weight: bold;">Filter acording to district</h4>  </b>
            <select id = "sell" onchange = "favTutorial()" class="form-control ">
            <option> ---Choose District--- </option>
            <option>Ampara </option>
            <option> Anuradhapura </option>
            <option> Badulla </option>
            <option>Batticalo </option>
            <option> Colombo </option>
            <option> Galle </option>
            <option> Gampaha</option>
            <option> Hambantota</option>
            <option> Jafna </option>
            <option> Kalutara </option>
            <option> Kandy</option>
            <option> Kagalla </option>
            <option> Kilinochchi </option>
            <option> Kurunagala</option>
            <option> Mannar </option>
            <option> Matale </option>
            <option>Matara </option>
            <option> Moneragala </option>
            <option> Mulativu </option>
            <option> Nuwara Elliya </option>
            <option> Polonnaruwa </option>
            <option> Puttalam </option>
            <option> Ratnapura </option>
            <option> Trincomalee </option>
            <option> Vavuniya </option>
            </select>
           
            </form>
        </div>
        <div class="col-md-6 col-xs-12 ">
          <form>
            <b><h4 style="font-weight: bold;"> Filter acording to blood type</h4> </b>
            <select id = "sell" onchange = "favTutorial()"  class="form-control">
            <option> ---Choose Blood Type--- </option>
            <option> A+ </option>
            <option> A- </option>
            <option> AB+ </option>
            <option> AB- </option>
            <option> B+ </option>
            <option> B- </option>
            <option> O+ </option>
            <option> O- </option>
            </select>
            </form>
        </div>
      </div>
      
    </div>
      
     
 
            <!-- Topic Cards -->
    <div id="cards_landscape_wrap-2">
      <div class="container-fluid" outer-request  >
          <div class="row" >
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
                  
                      <div class="card-flyer">
                          <div class="text-box">
                              <div class="image-box">
                                <img src="../../Public/images/test1.jpg" alt="" />
                              </div>
                              <div class="text-container">
                                  <h6>BLOOD GROUP AB+</h6>
                                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                              </div>
                              <button id="myBtn">Open Modal</button>
                          </div>
                      </div>
                 
                  <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                      <div class="modal-header">
                        <span class="close">&times;</span>
                        <h2>Modal Header</h2>
                      </div>
                      <div class="modal-body">
                        <p>Some text in the Modal Body</p>
                        <p>Some other text...</p>
                      </div>
                      <div class="modal-footer">
                        <h3>Modal Footer</h3>
                      </div>
                    </div>
                  
                  </div>
                  
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <a href="">
                      <div class="card-flyer">
                          <div class="text-box">
                              <div class="image-box">
                                <img src="../../Public/images/test1.jpg" alt="" />
                              </div>
                              <div class="text-container">                                    
                                  <h6>Title 02</h6>
                                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                              </div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <a href="">
                      <div class="card-flyer">
                          <div class="text-box">
                              <div class="image-box">
                                  <img src="../../Public/images/test1.jpg" alt="" />
                              </div>

                              <div class="text-container">
                                  <h6>Title 03</h6>
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                              </div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <a href="">
                      <div class="card-flyer">
                          <div class="text-box">
                              <div class="image-box">
                                <img src="../../Public/images/test1.jpg" alt="" />
                              </div>
                              <div class="text-container">
                                  <h6>Title 04</h6>
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                              </div>
                          </div>
                      </div>
                  </a>
              </div>
          </div>
      </div>
      <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <a href="">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                              <img src="../User/images/test1.jpg" alt="" />
                            </div>
                            <div class="text-container">
                                <h6>Title 01</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <a href="">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                              <img src="../../Public/images/test1.jpg" alt="" />
                            </div>
                            <div class="text-container">                                    
                                <h6>Title 02</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <a href="">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="../../Publicr/images/test1.jpg" alt="" />
                            </div>

                            <div class="text-container">
                                <h6>Title 03</h6>
                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <a href="">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                              <img src="../../Public/images/test1.jpg" alt="" />
                            </div>
                            <div class="text-container">
                                <h6>Title 04</h6>
                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
  </div>

  <script>
    // Get the modal
    var modal = document.getElementById("myModal");
    
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>
    
    
</body>
</html>