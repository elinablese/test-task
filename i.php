<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>	
<?php

$a = 'World';
echo "Hello, {$a}";
$array = ['greeting' => 'Hello','noun' => 'World'];
echo"{$array['greeting']}, {$array['noun']}";
function greet($noun)
{
     echo "<h2>Hello $noun</h2>";
}
greet("World");

require_once 'classes/tracer.php';

require_once 'classes/product.php';
require_once 'classes/book.php';
require_once 'classes/dvd.php';
require_once 'classes/furniture.php';
require_once 'classes/ProductsModel.php';
require_once 'classes/template.php';

?>

</body>
</html>