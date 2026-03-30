<?php
	session_start();

	require_once(__DIR__ . "/../require/data.php");
	include(__DIR__ . "/inc/functions.php");

	if (!isset($_SESSION["login"])) {

		echo "ログインしてください";
		exit;
	}

	$id = isset($_GET["id"]) ? $_GET["id"] : "";

	$dbh = openDB();
	$contact = new Contacts();
	$data = $contact->selectSingle($dbh, $id);

	if (!$data) {

		echo "不正な値です。";
		exit;
	}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>myModel01 | お問い合わせ詳細</title>
</head>
<body>
	<?php include(__DIR__ . "/inc/header.php"); ?>

	<h2>お問い合わせ詳細</h2>

	<div class="contactContainer">
		<table>
			<tr>
				<th>ID</th>
				<td><?php echo $data["ContactID"]; ?></td>
			</tr>
			<tr>
				<th>件名</th>
				<td><?php echo str2html($data["Subject"]); ?></td>
			</tr>
			<tr>
				<th>氏名</th>
				<td><?php echo str2html($data["Name"]); ?></td>
			</tr>
			<tr>
				<th>電話番号</th>
				<td><?php echo $data["Tel"]; ?></td>
			</tr>
			<tr>
				<th>メールアドレス</th>
				<td><?php echo str2html($data["Email"]); ?></td>
			</tr>
			<tr>
				<th>本文</th>
				<td><?php echo str2html($data["Description"]); ?></td>
			</tr>
			<tr>
				<th>日時</th>
				<td><?php echo $data["Created"]; ?></td>
			</tr>
		</table>
	</div>

	<?php include(__DIR__ . "/inc/footer.php"); ?>
</body>
</html>