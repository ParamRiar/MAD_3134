<!DOCTYPE HTML>  
<html>
<head>
</head>
<body> 
<?php 
$errorname="";
$name="";
$erroraddress="";
$address="";
$erroremail="";
$email="";
$errorlinkein="";
$linkein="";
$rdo1="";
$rdo2="";
$rdo3="";
$errorfrequency="";
$tech=array();

if($_SERVER["REQUEST_METHOD"]=="POST"){
if(isset ($_POST["name"])){
	if (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) {
  $errorname = "Only letters and white space allowed"; 
}
else{
	$name=$_POST["name"];
}
}
if(empty($_POST["name"])){
$errorname="Please enter name ";
}
if(isset ($_POST["address"])){
$address=$_POST["address"];
}
if(empty($_POST["address"])){
$erroraddress="Please enter address ";
}
if(isset ($_POST["email"])){
	if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
  $erroremail = "Invalid email format"; 
}
else{
$email=$_POST["email"];
}
}
if(empty($_POST["email"])){
$erroremail="Please enter email ";
}
if(isset ($_POST["linkein"])){
	if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST["linkein"])) {
      $errorlinkein = "Invalid URL"; 
    }
else{	
$linkein=$_POST["linkein"];
}}
if(empty($_POST["linkein"])){
$errorlinkein="Please enter linkein ";
}
if(isset($_POST["frequency"])){
	if($_POST["frequency"]=="weekly"){
		$rdo1="Checked";
	}

	if($_POST["frequency"]=="monthly"){
		$rdo2="Checked";
	}


	if($_POST["frequency"]=="occasionaly"){
		$rdo3="Checked";
	}
}
else {
	$errorfrequency="Please select any one option";
}

$tech= array();
if(isset($_POST["tech"])){
	$tech=$_POST["tech"];
}


}
?>

	
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  Name: <input type="text" name="name" value="<?php echo htmlspecialchars($name);?>">
  <span class="error"><?php echo $errorname;?></span>
  <br><br>
 Address: <textarea type="text" name="address"  rows="5" cols="40" value="<?php echo htmlspecialchars($address);?>"></textarea>
 <span class="error"><?php echo $erroraddress;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo htmlspecialchars($email);?>">
  <span class="error"><?php echo $erroremail;?></span>
  <br><br>
  LinkeIn Profile: <input type="text" name="linkein" value="<?php echo htmlspecialchars($linkein);?>">
  <span class="error"><?php echo $errorlinkein;?></span>
  <br><br>
   Which technology you are intersted in?<br>
  <select name="tech[]" size=5>
  <?php $techList= array("PHP","Java","ios","HTML","Android");
  $cnt=count($techList);
  for($i=0;$i<$cnt;$i++){
	  echo '<option value="' .$techList[$i] . '"';
	  if(in_array($techList[$i],$tech)){
	  echo "Selected";
	  }
	  echo '>' .$techList[$i] .'</option>';
  }
  ?>
  </select><br><br>
  
  Would you like to subscribe our newsletter?
  <input type="checkbox" name="checkbox">
  <br>
  <br>
  
 How frequent do you want to receive the newslettes?<br><br>
  <input type="radio" name="frequency" value="weekly"<?php echo htmlspecialchars($rdo1);?>>Weekly
  <br>
  <br>
  <input type="radio" name="frequency" value="monthly" <?php echo htmlspecialchars($rdo2);?>>Monthly
  <br><br>
  <input type="radio" name="frequency" value="occasionaly" <?php echo htmlspecialchars($rdo3);?>>Occasionaly
  <br><br>
  <span class="error"><?php echo $errorfrequency;?></span><br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>