<?php
// Database configuration
include("con_db.php");

// Query to retrieve all users
$query = "SELECT * FROM users";
$result = mysqli_query($con, $query);

// Check if there are any users
if (mysqli_num_rows($result) > 0) {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Administrator Dashboard</title>
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
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Gender</th>
            <th>Password</th>
            <th>Actions</th>
        </tr>
        <?php
        // Loop through each row of data
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['phone_number']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td>
                    <a class="edit-link" href="admin_edit_user.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a class="delete-link" href="admin_delete_user.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    </div>
    </body>
    </html>
<?php
} else {
    echo 'No users found.';
}

// Close the database connection
mysqli_close($con);
?>
