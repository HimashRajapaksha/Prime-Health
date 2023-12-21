<?php
// Database configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'registration_db';

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
}

// Retrieve the user ID from the query string
$user_id = $_GET['id'];

// Delete the user data from the database
$query = "DELETE FROM users WHERE id = $user_id";

if (mysqli_query($conn, $query)) {
    echo "<script type = 'text/javascript'> alert('User deleted successfully.')</script>";
    echo "<script>window.location.href = 'admindashboard.php';</script>";
    exit();
            
    
} else {
    echo 'Error deleting user: ' . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
