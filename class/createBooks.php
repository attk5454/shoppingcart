<?php
require_once "Book.php";
?>
<?php
/**
 * 商品の配列を生成する。
 * 
 */
function createBooks():array {
	$books = array(
		new Book("Head First PHP & MySQL", "Lynn Beighley", 4650, "978-4873114446"),
		new Book("リーダブルコード", "Dustin Boswell", 2600, "978-4873115658"), 
		new Book("Head First デザインパターン", "Eric Freeman", 5060, "978-4873112497"),
		new Book("PHPによるデザインパターン入門", "下岡秀幸", 2400, "978-4798015163"),
	);	
	return $books;
}
?>