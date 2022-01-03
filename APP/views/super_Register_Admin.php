<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="style_register.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <script>
        $(function(){
            $('#super_header').load('super_header.html')
        })
    </script>
</head>
<body>
    <div id="super_header"></div>
    <div class="container">
        <div class="title">Register Admin</div>
        <form action="#">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Enter your full name" required>

                </div>
                <div class="input-box">
                    <span class="details">District</span>
                    <select name="district" id="district">
                        <option value="Matara">Matara</option>
                        <option value="Matara">Galle</option>
                        <option value="Matara">Colombo</option>
                        <option value="Matara">Kandy</option>
                    </select>     
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" placeholder="Enter your username" required>
                    
                </div>
                <div class="input-box">
                    <span class="details">Email Address</span>
                    <input type="text" placeholder="Enter your email" required>
                    
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" placeholder="Enter your number" required>
                    
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="text" placeholder="Enter your password" required>
                    
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="text" placeholder="Re-Enter the password" required>
                    
                </div>
            </div>
            <div class="gender-details">
                <input type="radio" name="gender" id="dot-1">
                <input type="radio" name="gender" id="dot-2">
                <input type="radio" name="gender" id="dot-3" checked>
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
                    <input type="submit" value="Register">
                </div>
            </div>
        </form>

    </div>


</body>
</html>