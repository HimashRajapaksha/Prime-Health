<?php
// Connect to the database
include 'con_db.php';

// Check if the complaint ID is provided in the form data
if (isset($_POST['id'])) {
    $complaintID = $_POST['id'];
    
    // Retrieve the updated complaint information from the form
    $updatedName = $_POST['name'];
    $updatedAddress = $_POST['address'];
    $updatedMobile = $_POST['mobile'];
    $updatedhome = ($_POST['home']);
    $updatedwork = ($_POST['work']);
    $updatedEmail =($_POST['email']);
    $updatedpolicyholderName = ($_POST['policyholderName']);
    $updatedinsuranceID =($_POST['insuranceID']);
    $updatedclaimID =($_POST['claimID']);
    $updatedincidentDate =($_POST['incidentDate']);
    $updatedcomplaint =($_POST['complaint']);

    // Update the complaint in the database
    $sql = "UPDATE comm SET name=?, address=?, mobile=?, home=?, work=?, email=?, policyholderName=?, insuranceID=?, claimID=?, incidentDate=?, complaint=? WHERE id=?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "sssssssssssi", $updatedName, $updatedAddress, $updatedMobile, $updatedhome, $updatedwork, $updatedEmail, $updatedpolicyholderName, $updatedinsuranceID, $updatedclaimID, $updatedincidentDate, $updatedcomplaint, $complaintID);
    $result = mysqli_stmt_execute($stmt);

    // Check if the update was successful
    if ($result) {
        echo "<script>alert('Complaint updated successfully!');</script>";
        echo "<script>window.location.href = 'view_complaints.php';</script>";// Redirect to the view_complaints page
        exit();
    } else {
        echo "Failed to update the complaint.";
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($con);
?>
