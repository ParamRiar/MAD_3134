<?php
class Item{
	public $title;
	public $price;
	public $brand;
	public $edition;
	public function __construct($title, $price, $brand,$edition){
		$this->title =$title;
		$this->price=$price;
		$this-> brand=$brand;
		$this-> edition=$edition;
	}
}
?>