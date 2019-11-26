<?php
$id_ok = "user01";
$password_ok = "pass01";

session_start();

$id = "";
if (isset($_REQUEST["id"])){
    $id = $_REQUEST["id"];
}
$password = "";
if (isset($_REQUEST["password"])){
    $password = $_REQUEST["password"];
}

if (($id === $id_ok) and ($password === $password_ok)) {
    $_SESSION["id"] = $id;
} else {
    print("もう一度チェックしてください");
    $title = "back";
    print '<br/><a href="UserEntry.php">'.$title.'</a><br/>';
    exit(0);
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
	<p>ようこそ、<?= $id ?></p>
	<p><a href="entry.php">ショッピングする</a></p>
	<p><a href="logout.php">ログアウトする</a></p>
	<footer>
		<div id="copyright">(C) 2019 The Advanced Course on Web System Development</div>
	</footer>
	
</body>
</html>