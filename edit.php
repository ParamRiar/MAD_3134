

<?php
//including the database connection file
include_once("payroll.php");

$servername = "localhost";
$username = "root";
$password = "";
$dbname="C0710778_paramjeet";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['update'])) {	
	
	$employeeId =  mysqli_real_escape_string($conn, $_GET['employeeId']);
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
		//echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database
		$query ="UPDATE employee_master SET employeeName='$employeeName', gender='$gender', BirthDate='$BirthDate'
		,Address='$Address',City='$City',Province='$Province',Postalcode='$Postalcode',
Emailaddress='$Emailaddress',websitelink='$websitelink',Joiningdate='$Joiningdate'
,Annualbasicpay='$Annualbasicpay' WHERE employeeId='$employeeId'";
		
		//echo $query;
		$result = mysqli_query($conn, $query);
		
		//display success message
		echo "<font color='green'>Edit  Data successfully.";
		header("Location: payroll2.php");
	}
}
?>
<?php
//getting id from url
$employeeId = $_GET['employeeId'];
$radiobtn=$rd1=$rd2="";

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM employee_master WHERE employeeId=$employeeId");

while($res = mysqli_fetch_array($result))
{
	
	$employeeName = $res['employeeName'];
	$gender = $res['gender'];
	if($res['gender']=="Male"){
		$rd1="checked";
	}elseif($res['gender']=="Female"){
		$rd2="checked";
	}
	$BirthDate = $res['BirthDate'];
	$Address = $res['Address'];
	$City = $res['City'];
	$Province = $res['Province'];
	$Postalcode = $res['Postalcode'];
	$Emailaddress = $res['Emailaddress'];
	$websitelink = $res['websitelink'];
	$Joiningdate = $res['Joiningdate'];
	$Annualbasicpay = $res['Annualbasicpay'];
	
}
?>
<html>
<head>	
	<title>Edit Data</title>
	
</head>
<link rel="stylesheet" type="text/css" href="payroll.css"><br>

<body>
<h2> Edit Employee Information</h2>
	
	<br/><br/>
	
	<form action="" method="post" name="form1">
		<table border="0">
			<tr> 
				<td> <label for="employeeName"> Name:</label></td>
				<td><input type="text" name="employeeName" value="<?php echo $employeeName;?>"></td>
			</tr>
			<tr> 
				<td><label for="gender"> Gender:</label></td>
				
            <td> <input type="radio" name="gender" value="Male"<?php echo $rd1;?>><label> Male</label><br /></td>
            <td> <input type="radio" name="gender" value="Female"<?php echo $rd2;?>><label> Female</label><br /></td>
				
			</tr>
			<tr> 
				<td><label for="BirthDate">DOB:</label></td>
				<td><input type="text" name="BirthDate" value="<?php echo $BirthDate;?>"></td>
			</tr>
			<tr> 
				<td><label for="Address">Address:</label></td>
				<td><input type="text" name="Address" value="<?php echo $Address;?>"></td>
			</tr>
			<tr> 
				<td> <label for="City">City:</label></td>
				<td><input type="text" name="City" value="<?php echo $City;?>"></td>
			</tr>
			<tr> 
				<td><label for="Province">Province:</label></td>
				<td><input type="text" name="Province" value="<?php echo $Province;?>"></td>
			</tr>
			<tr> 
				<td>  <label for="Postalcode">Postalcode:</label></td>
				<td><input type="text" name="Postalcode" value="<?php echo $Postalcode;?>"></td>
			</tr>
			<tr> 
				<td> <label for="Emailaddress">Emailaddress:</label></td>
				<td><input type="text" name="Emailaddress" value="<?php echo $Emailaddress;?>"></td>
			</tr>
			<tr> 
				<td> <label for="websitelink">Websitelink:</label></td>
				<td><input type="text" name="websitelink" value="<?php echo $websitelink;?>"></td>
			</tr>
						<tr> 
				<td>
  <label for="Joiningdate">Joiningdate:</label></td>
				<td><input type="text" name="Joiningdate" value="<?php echo $Joiningdate;?>"></td>
			</tr>
			<tr> 
				<td><label for="Annualbasicpay">AnnualBasicpay:</label></td>
				<td><input type="text" name="Annualbasicpay" value="<?php echo $Annualbasicpay;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="employeeId" value=<?php echo $_GET['employeeId'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
