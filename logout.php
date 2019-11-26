<?php
session_start();
if (isset($_SESSION["id"])){
    $_SESSION = [];
    session_destroy();
}
#print_r($_SESSION);
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
<body>
	<h1>簡単なユーザ認証</h1>
	<p>ログアウトしました。</p>
	<p><a href="UserEntry.php">ログインページへ</a></p>
	<footer>
		<div id="copyright">(C) 2019 The Advanced Course on Web System Development</div>
	</footer>
	
</body>
</html>