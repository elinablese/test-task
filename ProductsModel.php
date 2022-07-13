<?php
class ProductsModel
{
	public function getDBConnection()
	{
		return $this->dbConnection;
	}
	public function __construct()
	{
		$this->dbConnection = new mysqli('127.0.0.1:3306','root','elina)','testtask');
		//$this->dbConnection->set_charset('utf8');
	}
	public function addProduct($product)
	{
		
		$typese = get_class($product);
 		
		$attributes = ['sku', 'namese', 'price', 'height', 'length', 'weight','size','width']; 

		foreach ($attributes as $attribute) 
		{
			${$attribute} = method_exists($product, $method = "get{$attribute}") ? $product->$method() : 'NULL';
		}
		

		$query = "
					INSERT INTO products (sku,namese,price,typese,weight,size,length,width,height) 
					VALUES ('{$sku}','{$namese}',$price, '{$typese}', $weight, $size, $length, $width,$height)
		";
//echo $query;
		$this->getDBConnection()->query($query);
		
	}
	public function getProducts()
	{
		$product = [];

		$query = 'SELECT * FROM product ORDER BY sku ASC';
		
		$queryReselt = $this->getDBConnection()->query($query);

		while ($row = $queryReselt->fetch_assoc()) 
		{
			$product[] = new $row['typese']($row);
		}
		return $product;
	}
	
	public function deleteProducts(array $skus)
	{
		$sku_str = "'" . implode("','", $skus) . "'";
		$query = "DELETE FROM products WHERE sku IN($sku_str)";
		//echo $query;
		$this->getDBConnection()->query($query);

	}
}

	$bookInput1 = [
		'sku' => '1',
		'namese' => 'Book1',
		'price' => 25,
		'weight' => '1'
	];

	$bookInput2 = [
		'sku' => '2',
		'namese' => 'Book2',
		'price' => 20,
		'weight' => '2',
	];

	$bookInput3 = [
		'sku' => '3',
		'namese' => 'Book2',
		'price' => 25,
		'weight' => '2',
	];

	$dvdInput1 = [
		'sku' => '4',
		'namese' => 'dvd1',
		'price' => 100,
		'size' => 4096,
	];

	$dvdInput2 = [
		'sku' => '5',
		'namese' => 'dvd2',
		'price' => 200,
		'size' => 4096,
	];

	$dvdInput3 = [
		'sku' => '6',
		'namese' => 'dvd3',
		'price' => 100,
		'size' => 4096,
	];

$book1 = new Book($bookInput1);
$book2 = new Book($bookInput2);
$book3 = new Book($bookInput3);

$dvd1 = new DVD($dvdInput1);
$dvd2 = new DVD($dvdInput2);
$dvd = new DVD($dvdInput3);

$pm = new ProductsModel();

$pm->addProduct($book2);
$pm->addProduct($dvd2);

//Tracer::trace($book1);

$pm->deleteProducts(['2','4']);
?>