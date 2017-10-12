<html>
<head>
</head>
<body>
<?php
include 'connection.php';
try{
	$dbConnect= new Connection();
	$conn =$dbConnect->Open();
	if($conn){
		echo 'connected';
		$sql="Select * from Employee_master";
		$re=$conn->query($sql);
		foreach($conn->query($sql) as $row){
		echo $row['employeeId']."<br>";
				echo $row['employeeName']."<br>";
					echo $row['gender']."<br>";
						echo $row['BirthDate']."<br>";
		}
	}
	else{
		echo $conn;
	}
}
	catch (PDOException $ex){
	echo $ex->getMessage();
	}

?>
</body>
</html>