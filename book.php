<?php
require_once("product.php");
class Book extends Product
{

	public $weight,$date , $input;
	
	function getWeight()
	{
		return $this->weight;
	}

	function setWeight($weight)
	{
		$this->weight = $weight;
	}
	
	public function __construct($input)
	{
		//$this->input = $input;
		parent::__construct($input);
		$this->setWeight($input['weight']);
	}
}
$input = ['sku'=>'1', 'namese'=>'Narnia', 'price'=>'10 rub', 'weight'=>'500g'];
$book = new Book($input); 

echo "This is a Book with sku:{$book->getSKU()}, namese:{$book->getNamese()}, price:{$book->getPrice()}, weight:{$book->getWeight()};<br>"
?>