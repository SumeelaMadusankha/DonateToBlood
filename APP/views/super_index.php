<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../Public/css/super_admin_style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <!-- <script>
        $(function(){
            $('#super_header').load('super_header.php')
        })
    </script> -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../Public/css/super_admin_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">      
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
                    <a href="../SuperAdmin/index" class="active"><span class="las la-igloo"></span>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="../SuperAdmin/RegisterFormLoad" ><span class="las la-users"></span>
                        <span>Register Admin</span>
                    </a>
                </li>
                <li>
                    <a href="../SuperAdmin/viewDistrictAdminList" ><span class="las la-clipboard-list"></span>
                        <span>View Blood Bank Coordinators</span>
                    </a>
                </li>
                <a href='../Login/logout' class='active3'><span class='las la-lock'></span>
                        <span>Logout</span>
                    </a>
            </ul>
        </div>
    </div>
    <div class="header-content">
        <header>
            <h2>
                <label for="">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here">
            </div>
            <div class="user-wrapper">
                <img src="../Public/images/img2.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4>Nisanya Pathirana</h4>
                    <small>Super admin</small>
                </div>
            </div>
        </header>
    </div>
    </div>
    <div class="main-content">
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>24</h1>
                        <span>Blood Bank Coordinators</span>
                    </div>
                    <div>
                        <span class="las la-user-circle"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>24</h1>
                        <span>Districts</span>
                    </div>
                    <div>
                        <span class="las la-home"></span>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
</body>
</html>
