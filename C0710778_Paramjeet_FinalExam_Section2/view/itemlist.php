<html>
<head></head>
<style>
input[type=button], input[type=submit], input[type=text] ,input[type=password]{
    background-color:Lightpink;
     border: 2px solid white;
	 border-radius: 15px;
    color: black;
    padding: 10px;
    font-size:20px;
	text-align:center;
    margin: 4px 2px;
    cursor: pointer;
	font-weight: bold;
	label:20px;
	
}

body {
	border:4px solid Pink ;
	border-radius:25px;
    background-image: url(p3.jpg);
    background-position: left top;
    background-repeat: repeat;
    padding: 15px;
	
}select{
	border-radius: 15px;
    border: 2px solid #73AD21;
    padding: 20px;
margin-bottom:10px;	
     
}

div{
	text-align:center;
	font-size: 50px;
	text-shadow: 4px 2px red ;
	margin-bottom:1-px;
	color:blue;
}
label{
	color: green;
	  font-size: 30px;
}

input{
	  border-radius: 15px;
    border: 2px solid lightgreen;
    padding: 20px; 
      margin-bottom:10px;
	
}

table{

	border-radius:25px;
}
th,td{
	
	 padding:20px;
	  font-size: 18px;
	
}
th{
	color:red;
}
a{
	color:red;
}

</style>
<body>
<table>
<tr><td> Title</td>
<td>Name</td>
<td> Brand</td>
<td>Model</td>
</tr>
<?php 
foreach ($items as $title=>$item){
	echo '<tr><td><a href ="index.php?item='.$item->title.'">'.$item->title.'</a></td>
	<td>'.$item->price.'</td><td>'.$item->brand.'</td><td>'.$item->edition.'</td></tr>';
	
}
?>
</table>
</body>
</html>