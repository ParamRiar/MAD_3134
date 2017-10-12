<?php 
function get_product_by_id($id)
{
	$product_info =array();
	switch($id){
		case 1:
		$product_info=array("product_name"=>"Hard Drive","product_price"=>"120","product_quantity"=>"2");
		break;
		case 2:$product_info=array("product_name"=>"Head Phones","product_price"=>"320","product_quantity"=>"5");
		break;
		
	}
	return $product_info;
}
function get_product_list(){
	$product_list= array(array("id"=>1,"name"=>"Hard Drive"),array("id"=>2,"name"=>"Head Phones"));
	return $product_list;
}
$possible_url=array("get_product_list","get_product");
$value="An error has occured";
if(isset($_GET["action"]) && in_array($_GET["action"],$possible_url))
{
	switch ($_GET["action"])
	{
		case "get_product_list":
		$value=get_product_list();
		break;
		case "get_product":
		if(isset($_GET["id"]))
		$value=get_product_by_id($_GET["id"]);
	else
		$value="Missing argument";
	}
}
exit(json_encode($value));
//http://localhost:8080/PHP/api.php?action=get_product_list
//http://localhost:8080/PHP/api.php?action=get_product&id=1
?>