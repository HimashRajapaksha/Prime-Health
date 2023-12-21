<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View Complaints</title>
	<link rel="stylesheet" href="css/admindashboard.css" type="text/css">
</head>
<body>
    <h2 style="text-align:center;">Administrator Dashboard</h2>

    <!-- admin nav bar -->
    <ul>
        <li><a class="active" href="#home">Admin Panal</a></li>
        <li><a href="admindashboard.php">User Data</a></li>
        <li><a href="admin_complaints.php">View Complaints</a></li>
        <li><a href="admin_view_contact.php">View Contact Massages</a></li>
        <li><a href="admin_view_claims.php">View Subbmited Claims</a></li>
        <li><a href="logout.php" style="text-decoration: none;">Logout</a></li>
    </ul>
    <!-- admin nav bar end-->

    <div style="margin-left:20%;padding:1px 16px;height:1000px;">
	<h2>My Complaints</h2>
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
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['mobile'] . "</td>";
            echo "<td>" . $row['home'] . "</td>";
            echo "<td>" . $row['work'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['policyholderName'] . "</td>";
            echo "<td>" . $row['insuranceID'] . "</td>";
            echo "<td>" . $row['claimID'] . "</td>";
            echo "<td>" . $row['incidentDate'] . "</td>";
            echo "<td>" . $row['complaint'] . "</td>";
            echo "</tr>";
        }

        // Close the database connection
        mysqli_close($con);
        ?>
		</tbody>
	</table>
    </div>
</body>
</html>
