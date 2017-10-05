<?php
$cookie_name1 = "user1";
$cookie_value1 = "Prabh";
setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/"); // 86400 = 1 day
$cookie_name2 = "user";
$cookie_value2 = "jaspreet";
setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name1])) {
    echo "Cookie named '" . $cookie_name1 . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name1 . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name1];
}
if(!isset($_COOKIE[$cookie_name2])) {
    echo "Cookie named '" . $cookie_name2 . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name2 . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name2];
}
/*echo"<br><br>";
//echo readfile("file.txt");

$myfile = fopen("file.txt", "r") or die("Unable to open file!");
/*echo fread($myfile,filesize("file.txt"));
fclose($myfile);

while(!feof($myfile)){
	echo "Line :". fgets($myfile). "<br>";
	//echo "character :" .fgetc($myfile)."<br>";
}*/
$myfile = fopen("file.txt", "w") or die("Unable to open file!");
$txt = "prabh Riar\n";


fwrite($myfile, $txt);
fclose($myfile);
?>

</body>
</html>