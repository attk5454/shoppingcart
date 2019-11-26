<?php
$ca = $_GET['category'];
#print $ca;

if($ca == "book"){
        require_once "class/createBooks.php";
        $books = createBooks();
#        print $ca;print("book");
    }elseif($ca == "dvd"){
        require_once "class/createDVDs.php";
        $dvds = createDVDs();
#        print $ca;print("dvd");
    }
#    exit(0); 

session_start();
$id = "";
if (isset($_SESSION["id"])){
    $id = $_SESSION["id"];
    print("<p>ようこそ、");print($id);print(" </p>");
    print("<p><a href='logout.php'>ログアウトする</a></p>");
}

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
		<article id="result">
			<h2>商品検索 - 検索結果</h2>
			<section>
				<h3>商品一覧</h3>
				<table>
					<caption><a href="entry.php">検索画面に戻る</a>　カートの中身を見る</caption>
					<tr>
						<th>書籍名</th>
						<th>価格</th>
						<th>著者</th>
						<th>ISBN</th>
						<th></th>
					</tr>
					<?php if ($ca=="book") { ?>
					<?php for ($i=0; $i<count($books); $i++) { ?>
					<tr>
						<td><?= $books[$i]->getName() ?></td>
						<td><?= $books[$i]->getPrice() ?></td>
						<td><?= $books[$i]->getAuthor() ?></td>
						<td><?= $books[$i]->getCode() ?></td>
						<td>カートに入れる</td>
					</tr>
					<?php } ?>
					
					<?php } elseif ($ca=="dvd") { ?>
					<?php for ($i=0; $i<count($dvds); $i++) { ?>
					<tr>
						<td><?= $dvds[$i]->getName() ?></td>
						<td><?= $dvds[$i]->getPrice() ?></td>
						<td><?= $dvds[$i]->getTime() ?></td>
						<td>カートに入れる</td>
					</tr>
					<?php } ?>
					<?php } ?>
				</table>
			</section>
		</article>
	</main>

	<footer>
		<div id="copyright">(C) 2019 The Advanced Course on Web System Development</div>
	</footer>
</body>

</html>