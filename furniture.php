<?php
require_once("product.php");
class Furniture extends Product 
{
	public $length, $width, $height;

	function getLength()
	{	
		return $this->length;
	}
	function getWidth()
	{
		return $this->width;
	}
	function getHeight()
	{
		return $this->height;
	}

	function setLenght($length)
	{
		$this->length = $length;
	}
	function setWidth($width)
	{
		$this->width = $width;
	}
	function setHeight($height)
	{
		$this->height = $height;
	}

	function __construct($input)
	{
		parent::__construct($input);
		$this->setLenght($input['length']);
		$this->setWidth($input['width']);
		$this->setHeight($input['height']);
	}

}
$input1 = ['sku'=>'1', 'namese'=>'bad', 'price'=>'103$', 'length'=>'500g', 'width'=> '150','height'=>'100']; 
$input2 = ['sku'=>'2', 'namese'=>'sofa', 'price'=>'100$', 'length'=>'1000g', 'width'=> '2000','height'=>'500'];

$function = new Furniture($input1);
echo "This is a Furniture with sku:{$function->getSKU()}, namese:{$function->getNamese()}, price:{$function->getPrice()}, length:{$function->getLength()}, width:{$function->getWidth()}, height:{$function->getHeight()};<br>";    
$function1 = new Furniture($input2);
echo "This is a Furniture1 with sku:{$function1->getSKU()}, namese:{$function1->getNamese()}, price:{$function1->getPrice()}, length:{$function1->getLength()}, width:{$function1->getWidth()}, height:{$function1->getHeight()};<br>";
#Как отследить с помошь  Tracer::trace
?>