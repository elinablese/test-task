<?php
require_once("product.php");
class DVD extends Product
{
	public $size;

	
	function getSize()
	{
		return $this->size;
	}
	function setSize($size)
	{
		$this->size = $size;  
	}
	public function __construct($input)
	{
		//$this->input = $input;
		parent::__construct($input);
		$this->setSize($input['size']);
	}
}
$input = ['sku'=>'1', 'namese'=>'Av', 'price'=>'10 rub', 'size'=>'500g'];
$input1 = ['sku'=>'2', 'namese'=>'DV', 'price'=>'100$', 'size'=>'40g'];
$dvd = new DVD($input);
echo "This is a DVD with sku:{$dvd->getSKU()}, namese:{$dvd->getNamese()}, price:{$dvd->getPrice()}, weight:{$dvd->getSize()};<br>";
$dvd1 = new DVD($input1);
echo "This is a DVD with sku:{$dvd1->getSKU()}, namese:{$dvd1->getNamese()}, price:{$dvd1->getPrice()}, weight:{$dvd1->getSize()};<br>";

?>