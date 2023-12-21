<?php
// Check connection
include ("con_db.php");

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    
    // Prepare and bind the SQL statement
    $stmt = $con->prepare("INSERT INTO claims (name, address, description) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $address, $description);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "<script type = 'text/javascript'> alert('Claim submitted successfully.')</script>";
        echo "<script>window.location.href = 'My Claims.php';</script>";
        exit();
    } else {
        echo "<script type = 'text/javascript'> alert('Error submitting claim: .')</script>";
        echo "<script>window.location.href = 'My Claims.php';</script>";
        exit();
    }
    
    // Close the statement and connection
    $stmt->close();
    $con->close();
}
?>