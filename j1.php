<html>
<title></title>
<head>
</head>
<body>
<?php
$myFile= "j.json";
$arr_data =array();
try{
	$formdata = array(
	'firstName'=>$_POST['firstName'],
	'lastName'=>$_POST['lastName'],
	);
	$jsondata =file_get_contents($myFile);
	$arr_data =json_decode($jsondata, true);
	array_push($arr_data,$formdata);
	$jsondata= json_encode($arr_data, JSON_PRETTY_PRINT);
	if(file_put_contents($myFile,$jsondata)){
		echo"data addded";
	}
	else
		echo"error";
	
}
catch(Exception $e){
	echo 'Caught :',$e->getMessage(), "\n";
}
</body>
</html>