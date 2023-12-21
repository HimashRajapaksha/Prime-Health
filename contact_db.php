<?php
    session_start();

    include ("con_db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];

        if(!empty($firstname) && !empty($lastname) && !empty($msg))
        {
            $query = "insert into contact (firstname, lastname, email, msg) values ('$firstname','$lastname','$email','$msg')";

            mysqli_query($con, $query);

            echo "<script type = 'text/javascript'> alert('Successfully Submitted')</script>";
            echo "<script>window.location.href = 'contactus.php';</script>";
            exit();

            
        }
        else
        {
            echo "<script type = 'text/javascript'> alert ('Please Enter Valid Information')</script>";
        }

    }
?>
