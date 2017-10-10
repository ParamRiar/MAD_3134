<?php
include_once("model/Book.php");
class Model{
	public function getBookList(){
		return array(
		"Jungle Book"=> new Book("Jungle Book", "R.Kipling","A classic bOok."),
		"MOonwalker"=> new Book("MOonwalker","j.walker","A nature based book"),
		 "PHP for Dummies"=> new Book("PHP for Dummies","R khana","About PHP"));
	}
	public function getBook($title)
	{
		$allBooks =$this->getBookList();
	return $allBooks[$title];
	}	
	
	
}
?>