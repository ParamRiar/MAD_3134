<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="class";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/*$sql=" USE class";
if ($conn->query($sql) === TRUE) {
    echo "Databse change successfully";

}*/
/*
$sql = "CREATE DATABASE class";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
}
	$sql="CREATE TABLE student(". "studId int(4) AUTO_INCREMENT PRIMARY KEY,"
	."studName varchar(40),"."gender varchar(6),"."age int(2))";
	if ($conn->query($sql) === TRUE) {
    echo "Table student created successfully";

}
$sql = "INSERT INTO student(studName,gender,age)VALUES('Prabh','Female',20);";
$sql .= "INSERT INTO student(studName,gender,age)VALUES('jaspreet','Female',21);";
if ($conn->multi_query($sql) === TRUE) {
	$last_id=$conn->insert_id;
    echo " new record created successfully" .$last_id. "<br>";
}

else
{
echo  "Error creating database: " . $conn->error;
}*/
$sql = "SELECT studId, studName, gender FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Id: " . $row["studId"]. " - Name: " . $row["studName"]. "-Gender " . $row["gender"]. "<br>";
    }
} else {
    echo "0 result";
}
$conn->close();
?>