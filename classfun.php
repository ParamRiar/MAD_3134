<?php

//inhertitance

class employee{
	var $empid;
	var $empname;
	
	function _construct()
	{
		echo "<h1> Hi</h1>";
	}
	function setData($id,$name)
	{
		$this->empid= $id;
		$this->empname=$name;
	}
	function getData()
	{
		echo "<br>" .$this->empid;
		echo "<br>" .$this->empname;
		//return array($this->empid, $this->empname);
	}
	function _destruct()
	{
	echo "<h1>Bye</h1>";
	}
	
}

class salary extends employee{
	var $basicpay;
	function _construct(){
		echo "<h1> Creating salary object</h1>";
	}
	function setsalary($pay){
		$this->basicpay= $pay;
	}
	function getsalary(){
		echo "<br>" .$this->basicpay;
	}
	function _destruct(){
		echo "<h1>  destroying salary object</h1>";
	}
}



$emp= new salary;
$emp->empid=70;
$emp->empname="prabh";
$emp ->basicpay= 700;
        echo "<br>" .$emp->empid;
		echo "<br>" .$emp->empname;
		echo "<br>". $emp->basicpay;
	$emp->setData(200,"test name");
		$emp->getData();



?>