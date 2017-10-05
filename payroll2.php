
<html>
<head>
<title>
Home Page
</title>
<style>
body
{
background-image: url("b1.jpg");
}
form{
	padding: 40px;
	margin: 220px;
	width: 350px;
	background-color: #fcbd68;
}
</style>

	
</head>
<body>
<h1> Employee Information</h1><?php
include "payroll.php"; 

	$servername = "localhost";
$username = "root";
$password = "";
$dbname="C0710778_paramjeet";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	
$sql = "SELECT  employeeId,employeeName, gender, BirthDate,Address,City,Province,Postalcode,Emailaddress,websitelink,Joiningdate,Annualbasicpay FROM employee_master";
$result = $conn->query($sql);

?>
<table border = 1;
 border-spacing: 5px;
    border-color: black;>

<tr>
<th>Id</th>
<th>Name</th>
<th>Gender</th>

<th>Birth</th>
<th>Address</th>
<th>City</th>
<th>Province</th>
<th>PostalCode</th>
<th>Email</th>
<th>Website</th>
<th>Joiningdate</th>
<th>AnnualPay</th>
<th> </th>
<th></th>
</tr>

<?php

	if ($result->num_rows > 0) {
    	// output data of each row
   	 while($row = $result->fetch_assoc()) {
        
        echo "<tr>";
		echo "<td>";
        	echo $row["employeeId"];
        echo "</td>";
        echo "<td>";
        	echo $row["employeeName"];
        echo "</td>";
        echo "<td>";
        echo $row['gender'];
        echo "</td>";
        
        echo "<td>";
        echo $row['BirthDate'];
        echo "</td>";
        echo "<td>";
        echo $row['Address'];
        echo "</td>";
        echo "<td>";
        echo $row['City'];
        echo "</td>";
        echo "<td>";
        echo $row['Province'];
        echo "</td>";
        echo "<td>";
        echo $row['Postalcode'];
        echo "</td>";
		echo "<td>";
        echo $row['Emailaddress'];
        echo "</td>";
        echo "<td>";
        echo $row['websitelink'];
        echo "</td>";
        echo "<td>";
        echo $row['Joiningdate'];
        echo "</td>";
		echo "<td>";
        echo $row['Annualbasicpay'];
        echo "</td>";
       echo "<td>";
        echo "<input type='button' name ='Edit' value ='Edit'>";
        echo "</td>";
		echo "<td>";
        echo "<input type='button' name ='Delete' value ='Delete'>";
        echo "</td>";
        echo "</tr>";
    }
	} else {
   	 echo "0 results";
	}
	
	
	
		
	//$stmt->close();
	//$conn->close();
?>
</table>
</body>
</html>