<!DOCTYPE HTML>
<html>
<body>
<?php
 // include the connection object from the DBConnection.php
 //session_start();
include_once 'connection.php'; 
if (isset($_POST['sas']))
{
	$inFullname = $_POST["FullName"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[]
	 $inUsername = $_POST["UserName"];
	 $inEmail = $_POST["Email"];
	 $inPassword = $_POST["Password"];
	 $inUsertype = $_POST["role"];
	 if($inUsertype=='Admin'){

	//$encryptPassword = password_hash($inPassword, PASSWORD_DEFAULT);
	 
	 $sql="INSERT INTO profile(FULLNAME,USERNAME,EMAIL,PASSWORDS,USERTYPE) VALUES ('$inFullname','$inUsername','$inEmail','$inPassword','$inUsertype')";
	 if (mysqli_query($conn, $sql)) {
		include_once 'E-Ticket Booking System.html';
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	}


	if($inUsertype=='Customer'){

		//$encryptPassword = password_hash($inPassword, PASSWORD_DEFAULT);
		 
		 $sql="INSERT INTO profiles(FULLNAME,USERNAME,EMAIL,PASSWORD,USERTYPE) VALUES ('$inFullname','$inUsername','$inEmail','$inPassword','$inUsertype')";
		 if (mysqli_query($conn, $sql)) {
			include_once 'E-Ticket Booking System.html';
		 } else {
			echo "Error: " . $sql . "
	" . mysqli_error($conn);
		 }
		}

	 mysqli_close($conn);
	}


	
?>
</body> 
</html>