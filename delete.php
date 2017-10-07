<?php
include_once("payroll.php");

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
else{
echo "";
}
if(isset($_POST['Delete']))
  {
	  $id = $_GET['id'];

$query  = "DELETE FROM employee_master WHERE employeeId='$id';";
	$sql = mysql_query($query,$conn);
		//$sql = $conn->query($query);
		
	echo "$query";
			
			
			
	//echo $query;
		
    if($sql)
    {
      echo "Record Added Successfully";
        //<script>
           // alert('Employee had been successfully added.');
            
        //</script>
		
		header("Location: payroll2.php");
      
    }

    else
    {
       echo "error";
       // <script>
           // alert('Invalid.');
            
       // </script>
       
    }
  }
?>