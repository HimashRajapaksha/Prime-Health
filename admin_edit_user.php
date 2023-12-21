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

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the user ID from the form
    $user_id = $_POST['user_id'];

    // Retrieve the updated user data from the form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    // Update the user data in the database
    $query = "UPDATE users SET 
                first_name = '$first_name',
                last_name = '$last_name',
                email = '$email',
                address = '$address',
                phone_number = '$phone_number',
                gender = '$gender',
                password = '$password'
              WHERE id = $user_id";

    if (mysqli_query($conn, $query)) {
        echo 'User data updated successfully.';
    } else {
        echo 'Error updating user data: ' . mysqli_error($conn);
    }
}

// Retrieve the user ID from the query string
$user_id = $_GET['id'];

// Query to retrieve the user data
$query = "SELECT * FROM users WHERE id = $user_id";
$result = mysqli_query($conn, $query);

// Check if the user exists
if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Edit User</title>
        <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            margin-bottom: 20px;
        }

        form {
            width: 400px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table td {
            padding: 5px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    </head>
    <body>
    <h2>Edit User</h2>
    <form method="POST" action="">
        <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
        <table>
            <tr>
                <td><label for="first_name">First Name:</label></td>
                <td><input type="text" name="first_name" value="<?php echo $user['first_name']; ?>"></td>
            </tr>
            <tr>
                <td><label for="last_name">Last Name:</label></td>
                <td><input type="text" name="last_name" value="<?php echo $user['last_name']; ?>"></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" name="email" value="<?php echo $user['email']; ?>"></td>
            </tr>
            <tr>
                <td><label for="address">Address:</label></td>
                <td><input type="text" name="address" value="<?php echo $user['address']; ?>"></td>
            </tr>
            <tr>
                <td><label for="phone_number">Phone Number:</label></td>
                <td><input type="text" name="phone_number" value="<?php echo $user['phone_number']; ?>"></td>
            </tr>
            <tr>
                <td><label for="gender">Gender:</label></td>
                <td><input type="text" name="gender" value="<?php echo $user['gender']; ?>"></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" name="password" value="<?php echo $user['password']; ?>"></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Update">
    </form>
</body>
    </html>
    <?php
} else {
    echo 'User not found.';
}

// Close the database connection
mysqli_close($conn);
?>
