<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>

    <link rel="stylesheet" href="css/Header.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
    <link rel="stylesheet" href="css/regform.css" type="text/css">

</head>
<body style = "margin:0">

<!-- navigation bar -->
<?php
    include("php/header.php");
?>
<!-- navigation bar end -->

<!-- registration form -->
<div class="regformbody" style="margin-top: 200px;">
    <h1 style="text-align: center; margin-bottom: 50px;">Create New Account</h1>
    <hr>
    <div class="container" style="padding: 10px; margin-left: 20%; margin-right: 15%;">
        <div style="width: 100%;">
            <form action = "registration.php" method="POST">
            <table>
                <tr>
                <td><label for="first_name">First Name:</label></td>
                <td><input type="text" id="first_name" name="first_name" required></td>
                </tr>
                <tr>
                <td><label for="last-name">Last Name:</label></td>
                <td><input type="text" id="last_name" name="last_name" required></td>
                </tr>
                <tr>
                <td><label for="email">Email Address</label></td>
                <td><input type="email" id="email" name="email" required></td>
                </tr>
                <tr>
                <td><label for="address">Address:</label></td>
                <td><textarea id="address" name="address" rows="4" required></textarea></td>
                </tr>
                <tr>
                <td><label for="phone_number">Phone Number:</label></td>
                <td><input type="tel" id="phone_number" name="phone_number" required></td>
                </tr>
                <tr>
                <td><label for="gender">Gender:</label></td>
                <td>
                    <select id="gender" name="gender" required>
                    <option value="">Select</option>
                    <option value="m" id="male">Male</option>
                    <option value="f" id="female">Female</option>
                    </select>
                </td>
                </tr>
                <tr>
                <td><label for="password">Password:</label></td>
                
                <td>
                    <input type="password" id="password" name="password" required>
                    <input type="checkbox" onclick="myFunction()">Show
                    <script src="js/passwordshow.js"></script>
                </td>
                    
                </tr>
                <tr>
                <td></td>
                <td>
                    <input type="submit" value="Create Account">
                    <input type="reset" value="Reset">
                </td>
                </tr>
            </table>
            </form>
        </div>
        <div class="login-container">
            <h2>Or Login With</h2>
            <br>
            <a href="www.google.com"><img src="logo/googlesignin.png" width="70%"></a>
            <a href="www.facebook.com"><img src="logo/fbsignin.png" width="70%"></a>
            <a href="www.twitter.com"><img src="logo/twitsignin.png" width="70%"></a>
        </div>
    </div>
</div>
<!-- registration form end -->

<!-- footer -->
<?php
    include("php/footer.php");
?>
<!-- footer end -->
    
</body>
</html>