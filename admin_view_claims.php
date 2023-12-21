<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Calims</title>
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
    <diV style="margin-left:20%;padding:1px 16px;height:1000px;">
    <h1>View Claims</h1>
    
    <?php
    // Check connection
    include ("con_db.php");

    // Fetch data from the "claims" table
    $sql = "SELECT * FROM claims";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Description</th>
                </tr>";

        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["name"]."</td>
                    <td>".$row["address"]."</td>
                    <td>".$row["description"]."</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No claims found.";
    }

    // Close the database connection
    $con->close();
    ?>
    </div>
</body>
</html>