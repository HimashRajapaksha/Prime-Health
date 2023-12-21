
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Complaint</title>
	
	<link rel="stylesheet" type="text/css" href="css/complaint_ss.css">
	 <link rel="stylesheet" href="css/Header.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
	
</head>

<body style = "margin:0;">
<!-- navigation bar -->
<?php
    include("php/header.php");
?>
<!-- navigation bar end -->

<div style="margin-top: 150px;">
<button type="button" id="view" onclick="window.location.href='view_complaints.php'">My Complaints</button>

<!---form-->
    <form method="post" action="complaint.php" id="complaint-form">

	<fieldset>
	<legend>Contact Information</legend>
    	<label>Name: *</label>
    	<input type="text" placeholder="Enter your name" name="name" required>
    
    	<label>Address: *</label>
    	<textarea name="address" placeholder="Enter your address"required></textarea>
		 <label>Contact Number (mobile): *</label>
          <input type="text" placeholder="Enter your mobile contact number" name="mobile"required>

          <label>Contact Number (home):</label>
          <input type="text" placeholder="Enter your home contact number" name="home">

          <label>Contact Number (work):</label>
          <input type="text" placeholder="Enter your work contact number" name="work">

          <label>E-mail: *</label>
          <input type="email" placeholder="Enter valid email address" name="email"required>
		  
		  <p>Policyholder Information (if complaint against other party's insurance)</p>
          <label>Name of the Policyholder:</label>
          <input type="text" placeholder="Enter Policyholder's name" name="policyholderName">
    </fieldset>
    <br><br>
	<fieldset>
	<legend>Insurance Information</legend>
	      <label for="insuranceID">Insurance ID: *</label>
          <input type="text" placeholder="Enter your insurance ID" name="insuranceID"required>
          <label for="claimID">Claim ID: *</label>
          <input type="text" placeholder="Enter claim ID" name="claimID"required>

          <label for="incidentDate" >Date of Incident: *</label>
          <input type="date" name="incidentDate"required>

          <label for="complaint">Complaint: *</label>
		  
          <textarea placeholder="Write your complaint" name="complaint"required></textarea>
		  
		<div style="text-align: center;">
		<button type="button" id="Cancel" onclick="window.location.href='complaint.html'">Cancel</button>
	    <button type="submit" id ="Submit" name="submit">Submit</button>
		
		</div>
    </fieldset>
    	
    </form>
</div>

<!-- footer -->
<?php
    include("php/footer.php");
?>
<!-- footer end -->

</body>
</html>