<?php
include_once 'stdclass.php';
$s2 =new student();
$sData =[];

$s2 -> setData(101, "Pn");
$sData= $s2->getData();
foreach ($sData as $i){
	echo "$i <br>";
}
for($i=0; $i<count($sData);$i++){
	echo $sData[$i] ." " ;
}
?>
