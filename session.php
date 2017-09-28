<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php 
$_SESSION["name"]="JK";
$_SESSION["favanimal"]="cat";
echo "Session variables are set.<br>";?>
<h1>"Hello"</h1>
<?php
echo $_SESSION["name"]."'s favourite animal is" .$_SESSION["favanimal"] .".<br>";

$_SESSION["favanimal"]="Lion";
echo "<br>";
print_r($_SESSION);
echo "<br>";
?>
<h2>"Bye"</h2>
<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();

echo "All session variables are now removed, and the session is destroyed." 
?>