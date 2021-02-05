<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>RegistrationForm_v1 by Colorlib</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <!-- MATERIAL DESIGN ICONIC FONT -->
        <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

        <!-- STYLE CSS -->
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
            <div class="inner">
                <div class="image-holder">
                    <img src="images/login.png" alt="">
                </div>
                <form action="#" method="post">
                    <h3>Registration Form</h3>
                    <div class="form-group">
                        <input type="text" placeholder="First Name" class="form-control" name="firstname">
                        <input type="text" placeholder="Last Name" class="form-control" name="lastname">
                    </div>
                    <div class="form-wrapper">
                        <input type="text" placeholder="Username" class="form-control" name="username">
                        <i class="zmdi zmdi-account"></i>
                    </div>
                    <div class="form-wrapper">
                        <input type="Email" placeholder="Email Address" class="form-control" name="email">
                        <i class="zmdi zmdi-email"></i>
                    </div>
                    <div class="form-wrapper">
                        <select name="" id="" class="form-control" name="gender">
                            <option value="" disabled selected>Gender</option>
                            <option value="male">Male</option>
                            <option value="femal">Female</option>
                            <option value="other">Other</option>
                        </select>
                        <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
                    </div>
                    <div class="form-wrapper">
                        <input type="password" placeholder="Password" class="form-control" name="pass">
                        <i class="zmdi zmdi-lock"></i>
                    </div>
                    <div class="form-wrapper">
                        <input type="password" placeholder="Confirm Password" class="form-control" name="confpass">
                        <i class="zmdi zmdi-lock"></i>
                    </div>
                    <button type="submit" name="submit" value="submit">
                        <a style="text-decoration: none;color: white;" >Register
                        <i class="zmdi zmdi-arrow-right"></i>
                        </a>
                   
                    </button>
                </form>
            </div>
        </div>
       
    </body>
</html>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sketo";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 

$sql="INSERT INTO info (f_name,l_name,u_name,e_mail,g_der,pass,c_pass) VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[email]','$_POST[gender]','$_POST[pass]','$_POST[confpass]')";

 
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 

