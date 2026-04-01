<?php
	session_start();

	if (isset($_SESSION["login"])) {

		header("Location: /");
	}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>myModel01 | ログイン</title>
</head>
<body>
	<?php include(__DIR__ . "/inc/header.php"); ?>

	<h2>ログインページ</h2>
	<form action="login_check.php" method="post">
		<table>
			<tr>
				<th>ユーザ名</th>
				<td><input name="Name" type="text"></td>
			</tr>
			<tr>
				<th>パスワード</th>
				<td><input name="Password" type="password"></td>
			</tr>
		</table>
		<input type="submit" value="送信">
	</form>

	<?php include(__DIR__ . "/inc/footer.php"); ?>
</body>
</html>