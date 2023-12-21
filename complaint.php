<?php  
if (isset($_POST['name']) && isset($_POST['address']) && isset($_POST['mobile']) && isset($_POST['home']) && isset($_POST['work']) && isset($_POST['email']) && isset($_POST['policyholderName']) && isset($_POST['insuranceID']) && isset($_POST['claimID']) && isset($_POST['incidentDate']) && isset($_POST['complaint'])) {
	include 'con_db.php';

	function validate($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$name = validate($_POST['name']);
	$address = validate($_POST['address']);
	$mobile = validate($_POST['mobile']);
	$home = validate($_POST['home']);
	$work = validate($_POST['work']);
	$email = validate($_POST['email']);
	$policyholderName = validate($_POST['policyholderName']);
	$insuranceID = validate($_POST['insuranceID']);
	$claimID = validate($_POST['claimID']);
	$incidentDate = validate($_POST['incidentDate']);
	$complaint = validate($_POST['complaint']);

	if (empty($insuranceID) || empty($claimID) || empty($incidentDate) || empty($complaint) || empty($email) || empty($mobile) || empty($address) || empty($name)) {
		header("Location: complaint_s.php");
		exit();
	} else {
		$sql = "INSERT INTO comm (name, address, mobile, home, work, email, policyholderName, insuranceID, claimID, incidentDate, complaint) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$stmt = mysqli_prepare($con,$sql);
		mysqli_stmt_bind_param($stmt, "sssssssssss", $name, $address, $mobile, $home, $work, $email, $policyholderName, $insuranceID, $claimID, $incidentDate, $complaint);
		mysqli_stmt_execute($stmt);

		if (mysqli_stmt_affected_rows($stmt) > 0) {
			echo "<script>alert('successfully submitted');</script>";
            echo "<script>window.location.href = 'complaint_s.php';</script>";
            exit();
			
		} else {
			echo "Your message could not be submitted!";
		}

		mysqli_stmt_close($stmt);
		mysqli_close($con);
	}
} else {
	header("Location: complaint_s.php");
	exit();
}
?>
