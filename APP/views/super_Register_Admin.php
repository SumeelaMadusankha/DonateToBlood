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
                    <a href="../SuperAdmin/RegisterFormLoad" class="active"><span class="las la-users"></span>
                        <span>Register Admin</span>
                    </a>
                </li>
                <li>
                    <a href="../SuperAdmin/viewAdminData"><span class="las la-clipboard-list"></span>
                        <span>View Blood Bank Coordinators</span>
                    </a>
                </li>
                <?php
                
                if (isset($_SESSION['nic'])) {
                    echo "<li>
                    <a href='../Login/logout' class='active3'><span class='las la-lock'></span>
                        <span>Logout</span>
                    </a>
                </li>";
                }else {
                    echo "<li>
                    <a href='../Login/login' class='active3'><span class='las la-lock'></span>
                        <span>Login</span>
                    </a>
                </li>";
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="header-content">
        <header>
            <h2>
                <label for="">
                    <span class="las la-bars"></span>
                </label>
                Register District Admins
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here">
            </div>
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
    <div class="container">
        <div class="title">Register Admin</div>
        <form role="form" method="POST" action="../superAdmin/addAdmin">
            <div class="user-details">
                <div class="input-box">



                    <span class="details">First Name</span>
                    <input type="text" placeholder="Enter your first name" name="fname" id="fname" required>
                </div>


                <div class="input-box">

                    <span class="details">Last Name</span>
                    <input type="text" placeholder="Enter your last name" name="lname" id="lname" required>
                </div>

                
                <div class="input-box">

                    <span class="details">NIC</span>
                    <input type="text" placeholder="Enter your NIC number" name="nic" id="nic" required>
                    
                </div>

                <div class="input-box">

                    <span class="details">District</span>

                    
                    


                    <select name="district" id="district">
                        <option value="Ampara">Ampara</option>
                        <option value="Anuradhapura">Anuradhapura</option>
                        <option value="Badulla">Badulla</option>
                        <option value="Batticaloa">Batticaloa</option>
                        <option value="Colombo">Colombo</option>
                        <option value="Galle">Galle</option>
                        <option value="Galle">Galle</option>
                        <option value="Gampaha">Gampaha</option>
                        <option value="Hambantota">Hambantota</option>
                        <option value="Jaffna">Jaffna</option>
                        <option value="Kandy">Kandy</option>
                        <option value="Kegalle">Kegalle</option>
                        <option value="Kilinochchi">Kilinochchi</option>
                        <option value="Kurunegala">Kurunegala</option>
                        <option value="Mannar">Mannar</option>
                        <option value="Matale">Matale</option>
                        <option value="Matara">Matara</option>
                        <option value="Moneragala">Moneragala</option>
                        <option value="Mullativ">Mullativ</option>
                        <option value="Nuwara Eliya">Nuwara Eliya</option>
                        <option value="Polonnaruwa">Polonnaruwa</option>
                        <option value="Puttalam">Puttalam</option>
                        <option value="Ratnapura">Ratnapura</option>
                        <option value="Trincomalee">Trincomalee</option>
                        <option value="Vavuniya">Vavuniya</option>

                    </select>     
                </div>


                <div class="input-box">
                    <span class="details">City</span>
                    <input type="text" placeholder="Enter your city" name="city" id="city" required>
                    
                </div>


                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" placeholder="Enter your address" name="address" id="address" required>

                    
                </div>
                
                
                <div class="input-box">

                    <span class="details">Email Address</span>
                    <input type="text" placeholder="Enter your email" name="email" id="email" required>
                    
                </div>
                <div class="input-box">
                    <span class="details">Contact Number</span>
                    <input type="text" placeholder="Enter your number" name="phone" id="phone" required>
                    
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Enter your password" name="pword" id="pword" required>
                    
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" placeholder="Re-Enter the password" name="confirm" id="confirm" required>


                    
                </div>
            </div>
            <div class="gender-details">


              
                <input type="radio" name="gender" id="dot-1" value="Male">
                <input type="radio" name="gender" id="dot-2" value="Female">
                <input type="radio" name="gender" id="dot-3" value="Other" checked>
                <span class="gender-title">Gender</span>


                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender">Male</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">Female</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="gender">Other</span>
                    </label>
                </div>
                <div class="button">
                    <input type="submit" value="Register" onclick="true" name="register_btn">
                </div>
            </div>
        </form> 

    </div>


</body>
</html>