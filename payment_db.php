<?php
// Create a connection to the database
include ("con_db.php");

// Retrieve form data
$policy_no = $_POST['policy_no'];
$amount = $_POST['amount'];
$contact_no = $_POST['contact_no'];
$pay_mode = $_POST['pay_mode'];

// Check the connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Prepare and execute the SQL statement to insert the form data
$sql = "INSERT INTO payment (policy_no, amount, contact_no, pay_mode) VALUES ('$policy_no', '$amount', '$contact_no', '$pay_mode')";

if ($con->query($sql) === TRUE) {
    echo "<script type = 'text/javascript'> alert('Payment details inserted successfully.')</script>";
            echo "<script>window.location.href = 'payment.php';</script>";
            exit();
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

// Close the database connection
$con->close();
?>
