<!DOCTYPE html>
<html>
<body>

<?php
echo "My first PHP script!";
echo "<br>";
$x = 5;
$y = 9;
$txt = "google.com";
echo "<br>";
echo $x + $y .$txt;
echo "<br>";


echo str_word_count("Hello world good morning");
echo "<br>";
echo strlen("Hello");
echo "<br>";
/*$a=10;
$b=20;

function myclass(){
	global $a,$b,$c;
	$c=$a + $b ;
}*/

function myclass(){
	$a=10;
	$b=20;
	//global $a,$b,$c;
	print $c=$a + $b ;
}
myclass();
//echo $c;
echo "<br>";

class drink{
	function drink(){
$this->cold= "coffee";
}}
$drink1 = new drink;
echo  $drink1->cold;

echo "<br>";
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
echo "<br>";
		$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

echo "<br>";
$cars1 = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars1);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars1[$x];
    echo "<br>";
}
$grade = array("prabh"=>"90", "jassu"=>"80", "manpreet"=>"100" ,"rohan"=>"79");

foreach($grade as $i => $i_grade1) {
    echo "Key=" . $i . ", Value=" . $i_grade1;
    echo "<br>";
}



?>

</body>
</html>