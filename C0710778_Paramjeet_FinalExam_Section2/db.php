<?php
$servername = "localhost";
  $user = "root";
  $pass = "";
  $database="MVC";
// Create connection
  $conn = new mysqli($servername, $user, $pass);

// Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  $sql = "CREATE DATABASE MVC";
  if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
  }
  else
  {
    echo  "Error creating database: " . $conn->error;
}// use database
$sql=" USE MVC";
if ($conn->query($sql) === TRUE) {
  echo "Databse change successfully";

}
else
{
  echo  "Error using database: " . $conn->error;
}




 ?>