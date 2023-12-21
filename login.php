<?php
session_start();

// Check connection
include ("con_db.php");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the query
    $stmt = $con->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a matching record is found
    if ($result->num_rows == 1) {
        // Successful login, store email in session
        $_SESSION['email'] = $email;
        header("Location: Dashboard.php");
        exit();
    } else {
        echo "<script type = 'text/javascript'> alert('Please Enter Valid Information')</script>";
        echo "<script>window.location.href = 'Login Page.php';</script>";
    }

    $stmt->close();
}

?>

