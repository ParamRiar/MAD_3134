<?php
class student{
	var $stdid;
	var $stdname;
	function _construct()
	{
		echo "<h1> Hi</h1>";
	}
	function setData($id,$name)
	{
		$this->stdid= $id;
		$this->stdname=$name;
	}
	function getData()
	{
		//echo "<br>" .$this->stdid;
		//echo "<br>" .$this->stdname;
		return array($this->stdid, $this->stdname);
	}
	function _destruct()
	{
	echo "<h1>Bye</h1>";
	}
	
}
$s1= new student;
$s1->stdid=70;
$s1->stdname="prabh";
echo "<br>" .$s1->stdid;
		echo "<br>" .$s1->stdname;
		
		$s1->setData(200,"test name");
		$s1->getData();
?>
