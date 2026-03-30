<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>myModel01 | お問い合わせフォーム</title>
</head>
<body>
	<?php include(__DIR__ . "/inc/header.php"); ?>

	<h2>入力事項</h2>
	<form action="contactform_send_get.php" method="post">
		<div class="inputContainer">
			<table>
				<tr>
					<th>氏名</th>
					<td><input name="Name" type="text" value=""></td>
				</tr>
				<tr>
					<th>電話番号</th>
					<td><input name="Tel" type="text" value=""></td>
				</tr>
				<tr>
					<th>メールアドレス</th>
					<td><input name="Email" type="email" value=""></td>
				</tr>
				<tr>
					<th>件名</th>
					<td><input name="Subject" type="text" value=""></td>
				</tr>
				<tr>
					<th>本文</th>
					<td><textarea name="Description"></textarea></td>
				</tr>
			</table>
			<input type="submit" value="送信する">
		</div>
	</form>

	<?php include(__DIR__ . "/inc/footer.php"); ?>
</body>
</html>