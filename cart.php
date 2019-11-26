<?php
require_once("funx.php");

session_start();
$cart = null;
if (isset($_SESSION["cart"])){
    $cart = $_SESSION["cart"];
} else {
    $cart = [];
}

$id=-1;
if (isset($_REQUEST["cart"])){
    $cart = $_REQUEST["cart"];
}

$items = createItems();
$items = $items[$id];

$cart[] = $items;

$_SESSION["cart"] = $cart;
?>

<!DOCTYPE html>
<html lang="ja">
    
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>課題・商品検索アプリケーション</title>
	<link rel="stylesheet" href="./css/style.css" />
	<link rel="stylesheet" href="./css/shoppingcart.css" />
</head>

<body id="products" class="list">
	<header>
		<h1>商品検索アプリケーション</h1>
	</header>
		<main>
		<article id="cart">
		    
		    
		    
		    
		</article>
	</main>

	<footer>
		<div id="copyright">(C) 2019 The Advanced Course on Web System Development</div>
	</footer>
</body>

</html>
	