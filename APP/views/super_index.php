<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
    <script>
        $(document).ready(function(){
            columnChart();
            
            function columnChart(){
                var item = $('.chart', '.column-chart').find('.item'),
                itemWidth = 100 / item.length;
                item.css('width', itemWidth + '%');
                
                $('.column-chart').find('.item-progress').each(function(){
                    var itemProgress = $(this),
                    itemProgressHeight = $(this).parent().height() * ($(this).data('percent') / 100);
                    itemProgress.css('height', itemProgressHeight);
                });
            };
        });
    </script> 
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
                    <a href="../SuperAdmin/viewAdminData" ><span class="las la-clipboard-list"></span>
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
            <h2>
                <label for="">
                    <span class="las la-bars"></span>
                </label>
                Homepage
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
    <div class="main-content">
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>25</h1>
                        <span>Blood Bank Coordinators</span>
                    </div>
                    <div>
                        <span class="las la-user-circle"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>25</h1>
                        <span>Districts</span>
                    </div>
                    <div>
                        <span class="las la-home"></span>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="dashboard">
                    <div class="card">
                        <div class="header">
                            <h2>Dashboard</h2>
                            <div class="container">
                            <form method="POST" action="../SuperAdmin/displayBlood">
                                <div class="search-wrapper-2">
                                    <span class="las la-search"></span>
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
                                <div class="button-admin">
                                    <input type="submit" value="Go" onclick="true" name="sbmt_btn">
                                </div>
                            </form>

                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="container-2">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center text-uppercase">
                                    <h2>Blood Availability</h2>
                                </div>
                                <!-- //.text-center -->
                                
                                <div class="column-chart">
                                    <div class="legend legend-left hidden-xs">
                                        <h5 class="legend-title"> Quantity</h5>
                                    </div>
                                    <!-- //.legend -->
                                
                                    <div class="legend legend-right hidden-xs">
                                        <div class="item">
                                            <h4>High</h4>
                                        </div>
                                        <!-- //.item -->
                                
                                        <div class="item">
                                            <h4>Average</h4>
                                        </div>
                                        <!-- //.item -->
                                
                                        <div class="item">
                                            <h4>Low</h4>
                                        </div>
                                        <!-- //.item -->
                                
                                        <div class="item">
                                            <h4>Extremely Low</h4>
                                        </div>

                                        <!-- //.item -->
                                    </div>
                                    <!-- //.legend -->
                                
                                    <div class="chart clearfix">
                                        <div class="item">
                                            <div class="bar">
                                                <?php
                                                $total=0;
                                                    foreach ($data as $row){
                                                        if ($row['BloodGroup'] == 'A+'){
                                                            $total += $row['AvailableQuantity'];  
                                                        }   
                                                    }
                                                    
                                                    $final = round(($total/120)*100);
                                                    
                                                    echo"
                                                    <span class='percent'> $final% </span>
                                
                                                    <div class='item-progress' data-percent='$final'>
                                                    <span class='title'>A+</span>
                                                    </div>
                                                    ";
                                                ?>
                                                
                                                <!-- //.item-progress -->
                                            </div>
                                            <!-- //.bar -->
                                        </div>
                                        <!-- //.item -->
                                
                                        <div class="item">
                                            <div class="bar">
                                                <?php
                                                        $total=0;
                                                        foreach ($data as $row){
                                                            if ($row['BloodGroup'] == 'A-'){
                                                                $total += $row['AvailableQuantity'];  
                                                            }   
                                                        }
                                                        
                                                        $final = round(($total/120)*100);
                                                        
                                                        echo"
                                                        <span class='percent'> $final% </span>
                                    
                                                        <div class='item-progress' data-percent='$final'>
                                                        <span class='title'>A-</span>
                                                        </div>
                                                        ";
                                                ?>
                                            
                                            </div>
                                            <!-- //.bar -->
                                        </div>
                                        <!-- //.item -->
                                
                                        <div class="item">
                                            <div class="bar">
                                                <?php
                                                        $total=0;
                                                        foreach ($data as $row){
                                                            if ($row['BloodGroup'] == 'B+'){
                                                                $total += $row['AvailableQuantity'];  
                                                            }   
                                                        }
                                                        
                                                        $final = round(($total/120)*100);
                                                        
                                                        echo"
                                                        <span class='percent'> $final% </span>
                                    
                                                        <div class='item-progress' data-percent='$final'>
                                                        <span class='title'>B+</span>
                                                        </div>
                                                        ";
                                                ?>
                                                <!-- //.item-progress -->
                                            </div>
                                            <!-- //.bar -->
                                        </div>
                                        <!-- //.item -->
                                
                                        <div class="item">
                                            <div class="bar">
                                                <?php
                                                        $total=0;
                                                        foreach ($data as $row){
                                                            if ($row['BloodGroup'] == 'B-'){
                                                                $total += $row['AvailableQuantity'];  
                                                            }   
                                                        }
                                                        
                                                        $final = round(($total/120)*100);
                                                        
                                                        echo"
                                                        <span class='percent'> $final% </span>
                                    
                                                        <div class='item-progress' data-percent='$final'>
                                                        <span class='title'>B-</span>
                                                        </div>
                                                        ";
                                                ?>
                                                <!-- //.item-progress -->
                                            </div>
                                            <!-- //.bar -->
                                        </div>
                                        <!-- //.item -->
                                
                                        <div class="item">
                                            <div class="bar">
                                                <?php
                                                        $total=0;
                                                        foreach ($data as $row){
                                                            if ($row['BloodGroup'] == 'AB+'){
                                                                $total += $row['AvailableQuantity'];  
                                                            }   
                                                        }
                                                        
                                                        $final = round(($total/120)*100);
                                                        
                                                        echo"
                                                        <span class='percent'> $final% </span>
                                    
                                                        <div class='item-progress' data-percent='$final'>
                                                        <span class='title'>AB+</span>
                                                        </div>
                                                        ";
                                                ?>
                                                <!-- //.item-progress -->
                                            </div>
                                            <!-- //.bar -->
                                        </div>
                                        <!-- //.item -->

                                        <div class="item">
                                            <div class="bar">
                                                <?php
                                                        $total=0;
                                                        foreach ($data as $row){
                                                            if ($row['BloodGroup'] == 'AB-'){
                                                                $total += $row['AvailableQuantity'];  
                                                            }   
                                                        }
                                                        
                                                        $final = round(($total/120)*100);
                                                        
                                                        echo"
                                                        <span class='percent'> $final% </span>
                                    
                                                        <div class='item-progress' data-percent='$final'>
                                                        <span class='title'>AB+</span>
                                                        </div>
                                                        ";
                                                ?>
                                            </div>
                                            <!-- //.bar -->
                                        </div>

                                        <div class="item">
                                            <div class="bar">
                                                <?php
                                                        $total=0;
                                                        foreach ($data as $row){
                                                            if ($row['BloodGroup'] == 'O+'){
                                                                $total += $row['AvailableQuantity'];  
                                                            }   
                                                        }
                                                        
                                                        $final = round(($total/120)*100);
                                                        
                                                        echo"
                                                        <span class='percent'> $final% </span>
                                    
                                                        <div class='item-progress' data-percent='$final'>
                                                        <span class='title'>O+</span>
                                                        </div>
                                                        ";
                                                ?>
                                                <!-- //.item-progress -->
                                            </div>
                                            <!-- //.bar -->
                                        </div>

                                        <div class="item">
                                            <div class="bar">
                                                    <?php
                                                        $total=0;
                                                        foreach ($data as $row){
                                                            if ($row['BloodGroup'] == 'O-'){
                                                                $total += $row['AvailableQuantity'];  
                                                            }   
                                                        }
                                                        
                                                        $final = round(($total/120)*100);
                                                        
                                                        echo"
                                                        <span class='percent'> $final% </span>
                                    
                                                        <div class='item-progress' data-percent='$final'>
                                                        <span class='title'>O-</span>
                                                        </div>
                                                        ";
                                                    ?>
                                                <!-- //.item-progress -->
                                            </div>
                                            <!-- //.bar -->
                                        </div>
                                    </div>
                                    <!-- //.chart -->
                                </div>
                                <!-- //.column-chart -->
                            </div>
                            <!-- //.col-md-6 -->
                        </div>
                        <!-- //.row -->
                    </div>
                    
                </div>
            </div>
        </main>
    </div>
    
    
</body>
</html>
