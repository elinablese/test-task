<?php
class Template{
	public $page;
	public function __construct($filepath,$varg=null)
    {
		if (is_array($varg) && !empty($varg['title'])) {
    		extract($varg);
  		}
		ob_start();
	    require_once($filepath);
	    $this->page = ob_get_contents();
	    ob_clean();
    }

	// public function render($filepath,$varg=null)
	// {
	// 	if (is_array($varg) && !empty($varg['title'])) {
 //    		extract($varg);
 //  		}
	// 	ob_start();
	//     include_once($filepath);
	//     $page = ob_get_contents();
	//     //ob_clean();
	//     return $page;
	// }

	public function __toString()
    {
        return $this->page;
    }
}
//$t = new Template();
//$page_arr = ['title' => 'Add Product', 'content' => 'Here is the content of Add Product'];
//$main_page = $_SERVER['DOCUMENT_ROOT'] . "/templates/main.php";
$layout_page = $_SERVER['DOCUMENT_ROOT'] . "/templates/layout.php";
//$t->render($layout_page,$page_arr);

echo 
$book_arr = ['title' => 'Add Book', 'content' => 'Here is the content of Add Book'];
//$str = $t->render($layout_page,$book_arr);
echo new Template($layout_page,$book_arr);
?>