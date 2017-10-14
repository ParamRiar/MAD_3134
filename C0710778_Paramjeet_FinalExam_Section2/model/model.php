<?php
include_once("model/Item.php");
class Model{
	public function getItemList(){
		return array(
		"Car"=> new Item("Car", "$2400","Ford",2003),
		"iPhone"=> new Item("iPhone","$678","Apple",2017),
		"Shoes"=> new Item("Shoes","$67","Jorden",2016),
		"Jacket"=> new Item("Jacket","$78","Ck",2005),
		 "Maggie"=> new Item("Maggie","$1","Great quality",2010));
	}
	public function getItem($title)
	{
		$allItems =$this->getItemList();
	return $allItems[$title];
	}	
	
		
}
?>