<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="css/loginform.css" type="text/css">
    <link rel="stylesheet" href="css/formbody.css" type="text/css">
    <link rel="stylesheet" href="css/Header.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">

    <style>
      body {
        background-image: url('img/customerlgbg.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed; 
        background-size: 100% 100%;
      }
      </style>

</head>

<body style = "margin:0">

<!-- navigation bar -->
<?php
    include("php/header.php");
?>
<!-- navigation bar end -->

<!-- Login form -->
<div class="formbody" style="margin-top: 180px;">
    <h2 style="text-align: center;">Login Form</h2>
    
    <form action="login.php" method="POST" id ="myForm">
    <div class="formimgcontainer">
        <img src="logo/avatar.png" alt="Avatar" class="formavatar">
    </div>

    <div class="formcontainer">
        <label for="email"><b>Username</b></label>
        <input type="email" placeholder="Enter Username or Email" name="email" required id="email">

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required id="password">
        <input type="checkbox" onclick="myFunction()">Show
        <script src="js/passwordshow.js"></script>
            
        <button type="submit" class="formbutton">Login</button>
    </div>

    <div class="formcontainer" style="background-color:#c1c1c1">
        <button type="button" class="formbutton formcancelbtn" onclick="resetForm()">Cancel</button>
        <script src="js/resetbutton.js"></script>
        <span class="psw">Login as <a href="adminlgpage.php">Admin</a></span>
    </div>
    </form>
</div>
<!-- Login form end -->

<!-- footer -->
<?php
    include("php/footer.php");
?>
<!-- footer end -->

</body>
</html>