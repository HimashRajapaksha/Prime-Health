<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Complaint</title>
    <link rel="stylesheet" type="text/css" href="css/edit_complaint.css">
	<link rel="stylesheet" href="css/Header.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
	
</head>
<body>
<!-- navigation bar -->
<?php
    include("php/header.php");
?>
<!-- navigation bar end -->
    <?php
    // Connect to the database
    include 'con_db.php';

    // Check if the complaint ID is provided in the URL
    if (isset($_GET['id'])) {
        $complaintID = $_GET['id'];

        // Retrieve the complaint from the database
        $sql = "SELECT * FROM comm WHERE id = ?";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, "i", $complaintID);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        // Fetch the complaint data
        $complaint = mysqli_fetch_assoc($result);

        // Close the statement
        mysqli_stmt_close($stmt);

        // Display the form with pre-filled values for editing
        ?>
        <h1>Edit Complaint</h1>
        <form method="post" action="update_complaint.php">
            <input type="hidden" name="id" value="<?php echo $complaint['id']; ?>">
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $complaint['name']; ?>">
            <label>Address:</label>
            <textarea name="address"><?php echo $complaint['address']; ?></textarea>
            <label>Mobile:</label>
            <input type="text" name="mobile" value="<?php echo $complaint['mobile']; ?>">
			<label>Home:</label>
            <input type="text" name="home" value="<?php echo $complaint['home']; ?>">
			<label>Work:</label>
            <input type="text" name="work" value="<?php echo $complaint['work']; ?>">
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $complaint['email']; ?>">
			<label>Policyholder Name:</label>
            <input type="text" name="policyholderName" value="<?php echo $complaint['policyholderName']; ?>">
			<label>Insurance ID:</label>
            <input type="text" name="insuranceID" value="<?php echo $complaint['insuranceID']; ?>">
			<label>Claim ID:</label>
            <input type="text" name="claimID" value="<?php echo $complaint['claimID']; ?>">
			<label>Incident Date:</label>
            <input type="date" name="incidentDate" value="<?php echo $complaint['incidentDate']; ?>">
			<label>Complaint:</label>
            <textarea name="complaint"><?php echo $complaint['complaint']; ?> </textarea>
			
            <button type="submit">Update</button>
        </form>
        <?php
    } else {
        // If no complaint ID is provided, display an error message or redirect
        echo "Invalid complaint ID.";
    }

    // Close the database connection
    mysqli_close($con);
    ?>
	<!-- footer -->
<?php
    include("php/footer.php");
?>
<!-- footer end -->

</body>
</html>
