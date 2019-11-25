<?php
#require_once "DVDs.php";
?>
<?php
/**
 * 商品の配列を生成する。
 * @return array Itemクラスのインスタンスを要素とする配列
 */
function createDVDs():array {
	$dvds = array(
		new DVD("The Net", 500, 114),
		new DVD("Star Wars: Force Awakens", 2800, 150), 
		new DVD("Outbreak", 900, 129),
	);	
	return $dvds;
}
?>