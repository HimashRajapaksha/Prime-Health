<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View Complaints</title>
	<link rel="stylesheet" type="text/css" href="css/view_complaint.css">
	<link rel="stylesheet" href="css/Header.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
</head>
<body>
<!-- navigation bar -->
<?php
    include("php/header.php");
?>
<div style="margin-top: 150px; margin-bottom: 180px;">
<button type="button" id="view" onclick="window.location.href='complaint_s.php'">My Complaints</button>
	<h1>My Complaints</h1>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Address</th>
				<th>Mobile</th>
				<th>Home</th>
				<th>Work</th>
				<th>Email</th>
				<th>Policyholder Name</th>
				<th>Insurance ID</th>
				<th>Claim ID</th>
				<th>Incident Date</th>
				<th>Complaint</th>
				<th>Actions</th>
				
			</tr>
		</thead>
		<tbody>
			<?php
			// Connect to the database
			$sname = "localhost";
            $uname = "root";
            $password = "";

            $db_name = "registration_db";

            $con = mysqli_connect($sname, $uname, $password, $db_name);

			if (!$con) {
				die("Connection failed: " . mysqli_connect_error());
			}

			// Retrieve complaints data
			$sql = "SELECT * FROM comm";
			$result = mysqli_query($con, $sql);

			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['address']."</td>";
				echo "<td>".$row['mobile']."</td>";
				echo "<td>".$row['home']."</td>";
				echo "<td>".$row['work']."</td>";
				echo "<td>".$row['email']."</td>";
				echo "<td>".$row['policyholderName']."</td>";
				echo "<td>".$row['insuranceID']."</td>";
				echo "<td>".$row['claimID']."</td>";
				echo "<td>".$row['incidentDate']."</td>";
				echo "<td>".$row['complaint']."</td>";
				echo "<td>";
				echo "<a href='editComplaint.php?id=".$row['id']."'>Edit</a>";
				echo "<a href='delete_complaint.php?id=".$row['id']."'>Delete</a>";
				echo "</td>";
				echo "</tr>";
			}

			// Close the database connection
			mysqli_close($con);
			?>
		</tbody>
	</table>
</div>

<!-- footer -->
<?php
    include("php/footer.php");
?>
<!-- footer end -->
</body>
</html>
