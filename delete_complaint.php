<?php
// Connect to the database
include 'con_db.php';

// Check if the complaint ID is provided in the URL
if (isset($_GET['id'])) {
    $complaintID = $_GET['id'];

    // Delete the complaint from the database
    $sql = "DELETE FROM comm WHERE id = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "i", $complaintID);
    mysqli_stmt_execute($stmt);

    // Check if the deletion was successful
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "<script>alert('Complaint deleted successfully!');</script>";
        echo "<script>window.location.href = 'view_complaints.php';</script>";// Redirect to the view_complaints page
        exit();
    } else {
        echo "<script>alert('Failed to delete the complaint!');</script>";
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($con);
?>
