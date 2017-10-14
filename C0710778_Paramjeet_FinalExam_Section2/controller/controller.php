<?php
include_once("model/model.php");
class controller{
	public $model;
	public function  __construct()
	{
		$this->model = new Model();
	}
	public function invoke(){
		if(!isset($_GET['item']))
		{
			$items = $this->model->getItemList();
			include 'view/itemlist.php';
		}
		else{
			$item = $this->model->getItem($_GET['item']);
			include 'view/viewitem.php';
		}
	}

}
?>