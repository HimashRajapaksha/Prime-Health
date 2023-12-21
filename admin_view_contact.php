<!DOCTYPE html>
<html>
<head>
    <title>View Contact Details</title>
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
    <!-- admin nav bar end -->
    <div style="margin-left:20%;padding:1px 16px;height:1000px;">
        <h2>Submitted Contact Details</h2>

        <?php
        // Database connection
        include("con_db.php");

        // Retrieve contact details
        $sql = "SELECT * FROM contact";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            // Display contact details in a table
            echo "<table>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                    </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["firstname"] . "</td>
                        <td>" . $row["lastname"] . "</td>
                        <td>" . $row["email"] . "</td>
                        <td>" . $row["msg"] . "</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "No contact details found.";
        }

        $con->close();
        ?>
    </div>
</body>
</html>

