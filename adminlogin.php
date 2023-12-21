<?php
session_start();

// Check connection
include ("con_db.php");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and execute the query
    $stmt = $con->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a matching record is found
    if ($result->num_rows == 1) {
        // Successful login, store username in session
        $_SESSION['email'] = $username;
        header("Location: admindashboard.php");
        exit();
    } else {
        echo "<script type='text/javascript'>alert('Please Enter Valid Information')</script>";
    }

    $stmt->close();
}

?>