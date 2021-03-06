<?php

if (isset($_SESSION['jobtype'])) {
    if ($_SESSION['jobtype']=='superAdmin') {
       
    }else {
        header("Location:http://localhost/DonateToBlood/Login/mustLogout");
    }
}else {
    header("Location:http://localhost/DonateToBlood/Login/mustLogout");
}
?>


<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../Public/css/super_admin_style_register.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../Public/css/super_admin_style.css">
</head>
<body>
    <div id="super_header">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span>Donate to Heal</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="../SuperAdmin/index" ><span class="las la-igloo"></span>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="../SuperAdmin/RegisterFormLoad" ><span class="las la-users"></span>
                        <span>Register Admin</span>
                    </a>
                </li>
                <li>
                    <a href="../SuperAdmin/viewAdminData" class="active"><span class="las la-clipboard-list"></span>
                        <span>View Blood Bank Coordinators</span>
                    </a>
                </li>
                <li>
                    <a href='../Login/logout' class='active3'><span class='las la-lock'></span>
                        <span>Logout</span>
                    </a>
                </li>
                
                
            </ul>
        </div>
    </div>
    <div class="header-content">
        <header>
            <h1>
                <label for="">
                    <span class="las la-bars"></span>
                </label>
                Admin Dashboard
            </h1>
            <div class="user-wrapper">
                <!-- <img src="../Public/images/img2.jpg" width="40px" height="40px" alt=""> -->
                <div>
                    <h4>Nisanya Pathirana</h4>
                    <small>Super admin</small>
                </div>
            </div>
        </header>
    </div>
    </div>
    <table class="content-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>District</th>
                    <th>ID Number</th>
                    <th></th>
                </tr>
            </thead>
           

            <tbody>
       
         <?php
          if(is_array($data)){
             
            foreach ($data as $row){
                echo "
                  <tr>
                      <td> <b> {$row['firstName']} </b></td>
                      <td> <b>{$row['district']} </b></td>
                      <td> <b>{$row['nic']} </b></td>
                      <td>
                      
                      <a href='../SuperAdmin/removeAdmin?nic={$row['nic']}'>
                      <button type='button' class='button-list'>Remove</button>
                      </a>
                       
                    </td>
                  </tr>";
  
  
            }

          }

          ?>
        </tbody>
      </table>
    
      
</body>
</html>