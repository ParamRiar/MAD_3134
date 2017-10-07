<html>
<title></title>
<head>
</head>
<body>
<?php 
$content =file_get_contents("j.json");
$json=json_decode($content, true);
echo "<pre>".print_r($json,true) . "</pre>";
echo $json['phoneNumbers'][0]['type']." :" .$json['phoneNumbers'][0]['number'];
?>

</body>
</html>