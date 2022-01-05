<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../Public/css/super_admin_style_register.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../Public/css/super_admin_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
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

                <a href='../Login/logout' class='active3'><span class='las la-lock'></span>
                        <span>Logout</span>
                    </a>
                
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
          <!-- <tr>
            <td>Sumeela</td>
            <td>Matara</td>
            <td>1000</td>
            <td>
                <button type="button">
                    <span class="button-text">Remove</span>
                </button>
            </td>
          </tr>
          <tr class="active-row">
            <td>Nuwan</td>
            <td>Matara</td>
            <td>1001</td>
            <td>
                <button type="button">
                    <span class="button-text">Remove</span>
                </button>
            </td>
          </tr>
          <tr>
            <td>Dinuka</td>
            <td>Matara</td>
            <td>1002</td>
            <td>
                <button type="button">
                    <span class="button-text">Remove</span>
                </button>
            </td>
          </tr> -->
          <?php
          
          foreach ($data as $row){
              echo "
                <tr>
                    <td>{$row['name']}</td>
                    <td>{$row['district']}</td>
                    <td>{$row['nic']}</td>
                    <td>
                    <button type='button' class='button-list'>Remove</button>
                    
                  </td>
                </tr>";


          }
          ?>
        </tbody>
      </table>
    

</body>
</html>