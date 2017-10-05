<?php
class payroll{
	var $result;
	
	function getresult(){
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
$this->result = $conn->query($sql);
		return $this->result;
}
function connection(){
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
echo "Connected successfully";
}

// Create database
/* $sql = "CREATE DATABASE C0710778_paramjeet";
if ($conn->query($sql) === TRUE) {
       echo "Database created successfully";
} */	


	// use database
$sql=" USE C0710778_paramjeet";
if ($conn->query($sql) === TRUE) {
    echo "Databse change successfully";

}
else
{
echo  "Error using database: " . $conn->error;
}
	
	
//create table

	$sql="CREATE TABLE Employee_Master(". "employeeId int(4) AUTO_INCREMENT PRIMARY KEY,"
	."employeeName varchar(40),"."gender varchar(6),"."BirthDate varchar(60),"."Address varchar(60),"."City varchar(40),
	"."Province varchar(40),"."Postalcode varchar(40),"."
	Emailaddress varchar(60),"." websitelink varchar(60),"." Joiningdate varchar(60),"."
Annualbasicpay varchar(60))";
	if ($conn->query($sql) === TRUE) {
    echo "Table Employee_Master created successfully";

	}
	else
{
echo  "Error creating table : " . $conn->error;
}

}
function insert(){
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
	
	
// prepare and bind
$stmt = $conn->prepare("INSERT INTO Employee_Master (employeeName, gender, BirthDate,Address,City,Province,Postalcode,
Emailaddress,websitelink,Joiningdate,Annualbasicpay) VALUES (?, ?, ?, ?, ? , ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssssss", $employeeName, $gender, $BirthDate,$Address,$City,$Province,$Postalcode,
$Emailaddress,$websitelink,$Joiningdate,$Annualbasicpay);
// set parameters and execute
$employeeName ="Rohan";
$gender ="Male";
$BirthDate = "15-09-1992";
$Address = "431, Letty ave";
$City ="Brampton";
$Province ="On";
$Postalcode = "L6Y5E3";
$Emailaddress ="rohan@gmail.com";
$websitelink ="www.rohan.co.in";
$Joiningdate ="12-01-2004";
$Annualbasicpay= "$20000";
$stmt->execute();



echo "New records created successfully";

$stmt->close();
}
function select(){
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
	
$sql = "SELECT  employeeId,employeeName, gender, BirthDate,Address,City,Province,Postalcode,
Emailaddress,websitelink,Joiningdate,Annualbasicpay FROM Employee_Master";
$this->result = $conn->query($sql);

if ($this->result->num_rows > 0) {
    // output data of each row
    while($row = $this->result->fetch_assoc()) {
        echo "Id: " . $row["employeeId"]. " - Name: " . $row["employeeName"]. "-Gender: " . $row["gender"].  "-DOB: " .$row["BirthDate"].
		 "-Address:" .$row["Address"]. "-City:" .$row["City"]. "-Province:" .$row["Province"]. "-Postalcode:" .$row["Postalcode"]. "-Emailaddress:" .$row["Emailaddress"].
		"-Websitelink:" .$row["websitelink"]. "-Joiningdate:" .$row["Joiningdate"]. "-Annualbasicpay:" .$row["Annualbasicpay"].
		"<br>";
    }
} else {
    echo "0 result";
}
}
//$conn->close();
}



?>