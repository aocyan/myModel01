<?php
	session_start();

	require_once(__DIR__ . "/../require/data.php");
	include(__DIR__ . "/inc/functions.php");

	if (!isset($_SESSION["login"])) {

		echo "ログインしてください";
		exit;
	}

	$dbh = openDB();
	$contact = new Contacts();
	$data = $contact->selectPage($dbh);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>myModel01 | お問い合わせ履歴</title>
</head>
<body>
	<?php include(__DIR__ . "/inc/header.php"); ?>

	<h2>お問い合わせ履歴</h2>
	<div class="contactContainer">
		<table>
			<thead>
				<tr>
					<th>&nbsp;&nbsp;</th>
					<th>ID</th>
					<th>件名</th>
					<th>氏名</th>
					<th>電話番号</th>
					<th>メールアドレス</th>
					<th>日時</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data as $row) { ?>
					<tr>
						<td><a href="contactform_detail.php?id=<?php echo $row["ContactID"]; ?>">詳細</a></td>
						<td><?php echo $row["ContactID"]; ?></td>
						<td><?php echo str2html($row["Subject"]); ?></td>
						<td><?php echo str2html($row["Name"]); ?></td>
						<td><?php echo $row["Tel"]; ?></td>
						<td><?php echo str2html($row["Email"]); ?></td>
						<td><?php echo date("Y-m-d H:i", strtotime($row["Created"])); ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

	<?php include(__DIR__ . "/inc/footer.php"); ?>
</body>
</html>