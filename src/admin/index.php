<?php
	session_start();

	if(!isset($_SESSION["login"])) {

		echo "ログインしてください";
		exit;
	}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>myModel01 | 管理画面トップ</title>
</head>
<body>
	<?php include(__DIR__ . "/inc/header.php"); ?>

	<h2>トップページ</h2>
	<div class="contactContainer">
		<a href="contactform_list_get.php">お問い合わせ履歴</a>
	</div>

	<?php include(__DIR__ . "/inc/footer.php"); ?>
</body>
</html>