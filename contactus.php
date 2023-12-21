<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <link rel="stylesheet" href="css/Header.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
    <link rel="stylesheet" href="css/contactusbody.css" type="text/css">
	<link rel="stylesheet" href="css/loginform.css" type="text/css">
	<link rel="stylesheet" href="css/contact us.css" type="text/css">
    
	<style>
        /* Set up a container to hold the two parts */
        .container {
          display: flex;
          justify-content: space-between;
        }
    
        /* Style the left and right parts */
        .left-part, .right-part {
          flex-basis: 50%;
          padding: 50px;
        }
		.center {
        text-align: center;
        color: black;
    }
      </style>
</head>

<body background="img/contactus background.jpg" class="formbgimg" style = "margin:0">

<!-- navigation bar -->
<?php
    include("php/header.php");
?>
<!-- navigation bar end -->

<!-- Contact us -->
<div style="background-color: #e8ded1bd; border-radius: 30px; width: 95%; margin-top: 150px; margin-left: 40px; margin-right: 10px;padding-top: 20px;">
    <div class="center">
        <h1>Contact Us</h1>
        <h3>Get in touch with Prime Health, whether it be through our dedicated Call<br/>
            Centre, by visiting our Prime Headquarters in Colombo 07,
            or any of our branches <br/>around the island.</h3>
    </div>
    <div class="container">
        <div class="left-part">
            <!-- Content for the left part -->
            <h2>Contact Form</h2>
            <div class="container" style="width:100%;">
                <form action="contact_db.php" method="post">
                    <p>
                        <label for="fname"><b>First Name:</b></label>
                        <input type="text" id="firstname" name="firstname" placeholder="Your first name..">
                    </p>

                    <p>
                        <label for="lname"><b>Last Name:</b></label>
                        <input type="text" id="lastname" name="lastname" placeholder="Your last name..">
                    </p>

                    <p>
                        <label for="email"><b>Email:</b></label>
                        <input type="email" id="email" name="email" placeholder="Enter your email address..">
                    </p>

                    <p>
                        <label for="subject"><b>Subject:</b></label>
                    </p>
                    <textarea placeholder="Type your subject here..." rows="6" cols="100" name="msg"></textarea>

                    <input type="submit" value="Submit" class="formbutton">
                </form>
            </div>
        </div>
        <div class="right-part">
            <!-- Content for the right part -->
            <div style="padding:10px; margin-top:100px;">
                <table style="width:100%">

                    <tr>
                        <td style="padding:20px;text-align: center;">
                            <img src="logo/branch.png" alt="Branch Logo" class="logo-image">
                            <div>
                                <span class="logo-text">Branch Locator</span><br>
                                <button type="button" class="collapsible">Visit</button>
                                <div class="detailscontent">
                                    <p>Visit us at any of our branches islandwide.</p>
                                </div>
                            </div>
                        </td>
                        <td style="padding:20px;text-align: center;">
                            <img src="logo/office.png" alt="Office Logo" class="logo-image">
                            <div>
                                <span class="logo-text">Corporate Office</span><br>
                                <button type="button" class="collapsible">Visit</button>
                                <div class="detailscontent">
                                    <p>No. 35, Wihara Mawatha,<br> Colombo 07,</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:20px;text-align: center;">
                            <img src="logo/call.png" alt="Call Logo" class="logo-image">
                            <div>
                                <span class="logo-text">Call Us</span><br>
                                <button type="button" class="collapsible">Visit</button>
                                <div class="detailscontent">
                                    <p>TEL: +94 112 729 729</p>
                                </div>
                            </div>
                        </td>
                        <td style="padding:20px;text-align: center;">
                            <img src="logo/mail.png" alt="Mail Logo" class="logo-image">
                            <div >
                                <span class="logo-text">E-Mail Us</span><br>
                                <button type="button" class="collapsible" >Visit</button>
                                <div class="detailscontent">
                                    <p>primehealthinsrance@prime.com</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
                <script src="js/contactus.js"></script>
            </div>
        </div>
    </div>
</div>
<!-- Contact us end -->



<!-- footer -->
<?php
    include("php/footer.php");
?>
<!-- footer end -->

</body>
</html>