<?php
class Product
{
	public $sku,$namese,$price;

	function getSKU()
	{
		return $this->sku;
	}
	function getNamese()
	{
		return $this->namese;
	}
	function getPrice()
	{
		return $this->price;
	}
	function setSKU($sku)
	{
		$this->sku = $sku;
	}
	function setNamese($name)
	{
		$this->namese = $name;
	}
	function setPrice($price)
	{
		$this->price = $price;
	}
	function __construct($input)
	{
		//$this->input = $input;
		//if($input != null){
		$this->setSKU($input['sku']);
		$this->setNamese($input['namese']);
		$this->setPrice($input['price']);
		//}
	}
}
//$product = new Product();
?>