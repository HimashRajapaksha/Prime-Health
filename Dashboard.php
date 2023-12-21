<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="css/Header.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
    <link rel="stylesheet" href="css/dashboard.css" type="text/css">

    <style>
      body {
        background-image: url('img/dashboardbg.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed; 
        background-size: 100% 100%;
        margin: 0;
      }
      </style>

</head>
<body style="margin:0;">
<!-- navigation bar -->
<?php
    include("php/header.php");
?>
<!-- navigation bar end -->

<div class="dashbody">
    <?php

        // Check if the user is logged in
        if (!isset($_SESSION['email'])) {
            // Redirect to the login page if not logged in
            header("Location: login.php");
            exit();
        }

        // Check if the user has logged out
        if (isset($_POST['logout'])) {
            // Destroy the session and redirect to the login page
            session_destroy();
            header("Location: login.php");
            exit();
        }

        // Database connection
        include("con_db.php");

        // Retrieve user information
        $email = $_SESSION['email'];
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
    ?>

    <img src="logo/dashboard.jpg" alt="Dashboard Logo" class="dashboard-logo">
    <h1>Welcome to the Dashboard</h1>
    <hr>
    <table style="text-align:center;" class="dashtable">
        <tr>
            <td>First Name</td>
            <td>:</td>
            <td><?php echo $row['first_name']; ?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td>:</td>
            <td><?php echo $row['last_name']; ?></td>
        </tr>
        <tr>
            <td>Email Address</td>
            <td>:</td>
            <td><?php echo $row['email']; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td>:</td>
            <td><?php echo $row['address']; ?></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td>:</td>
            <td><?php echo $row['phone_number']; ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>:</td>
            <td><?php echo $row['gender']; ?></td>
        </tr>
        <tr>
            <td>Policy ID</td>
            <td>:</td>
            <td><?php echo $row['id']; ?></td>
        </tr>
    </table>

    <p> If you want to change your details please contact the administrator </p>

    <?php
        } else {
            echo "No user found.";
        }

        mysqli_close($con);
    ?>
</div>

<!-- footer -->
<?php
    include("php/footer.php");
?>
<!-- footer end -->
</body>
</html>