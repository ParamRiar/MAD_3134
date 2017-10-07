<html>
<head>
	<title>Add Data</title>
</head>

<body>

<?php
//including the database connection file
include_once("payroll.php");

$servername = "localhost";
$username = "root";
$password = "";
$dbname="C0710778_paramjeet";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['Submit'])) {	
	
	$employeeName = mysqli_real_escape_string($conn, $_POST['employeeName']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$BirthDate = mysqli_real_escape_string($conn, $_POST['BirthDate']);
	$Address = mysqli_real_escape_string($conn, $_POST['Address']);
	$City = mysqli_real_escape_string($conn, $_POST['City']);
	$Province = mysqli_real_escape_string($conn, $_POST['Province']);
	$Postalcode = mysqli_real_escape_string($conn, $_POST['Postalcode']);
		$Emailaddress = mysqli_real_escape_string($conn, $_POST['Emailaddress']);
	$websitelink = mysqli_real_escape_string($conn, $_POST['websitelink']);	
		$Joiningdate = mysqli_real_escape_string($conn, $_POST['Joiningdate']);
			$Annualbasicpay = mysqli_real_escape_string($conn, $_POST['Annualbasicpay']);
	// checking empty fields
	if (empty($employeeName) || empty($gender) || empty($BirthDate)|| empty($Address)
		|| empty($City) || empty($Province) || empty($Postalcode) || empty($Emailaddress) || empty($websitelink) 
	|| empty($Joiningdate) || empty($Annualbasicpay)) {
				
				
		if(empty($employeeName)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($gender)) {
			echo "<font color='red'>Gender field is empty.</font><br/>";
		}
		
		if(empty($BirthDate)) {
			echo "<font color='red'>BirthDate field is empty.</font><br/>";
		}
		
		
		if(empty($Address)) {
			echo "<font color='red'>Address field is empty.</font><br/>";
		}
		
		if(empty($City)) {
			echo "<font color='red'>City field is empty.</font><br/>";
		}
		
		if(empty($Province)) {
			echo "<font color='red'>Province field is empty.</font><br/>";
		}
		
		if(empty($Postalcode)) {
			echo "<font color='red'>Postalcode field is empty.</font><br/>";
		}
		if(empty($Emailaddress)) {
			echo "<font color='red'>Emailaddress field is empty.</font><br/>";
		}
		if(empty($websitelink)) {
			echo "<font color='red'>websitelink field is empty.</font><br/>";
		}
		if(empty($Joiningdate)) {
			echo "<font color='red'>Joiningdate field is empty.</font><br/>";
		}
		if(empty($Annualbasicpay)) {
			echo "<font color='red'>Annualbasicpay field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO employee_master ( employeeName, gender, BirthDate,Address,City,Province,Postalcode,
Emailaddress,websitelink,Joiningdate,Annualbasicpay) VALUES (  '$employeeName', '$gender', '$BirthDate','$Address','$City','$Province','$Postalcode',
'$Emailaddress','$websitelink','$Joiningdate','$Annualbasicpay')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='payroll2.php'>View Result</a>";
	}
}
?>
</body>
</html>
