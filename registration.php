<?php
    session_start();

    include ("con_db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone_number = $_POST['phone_number'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];

        if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($address) && !empty($phone_number) && !empty($gender) && !empty($password))
        {
            $query = "insert into users (first_name, last_name, email, address, phone_number, gender, password) values ('$first_name','$last_name','$email','$address','$phone_number','$gender','$password')";

            mysqli_query($con, $query);

            echo "<script type = 'text/javascript'> alert('Successfully Registered')</script>";
            echo "<script>window.location.href = 'Login Page.php';</script>";
            exit();
            
        }
        else
        {
            echo "<script type = 'text/javascript'> alert ('Please Enter Valid Information ')</script>";
        }


    }
?>