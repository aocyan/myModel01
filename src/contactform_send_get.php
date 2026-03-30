<?php
	require_once(__DIR__ . "/require/data.php");
	require_once(__DIR__ . "/require/validate.php");

	contactVaridate();

	$dbh = openDB();
	$name = $_POST["Name"];
	$tel = $_POST["Tel"];
	$email = $_POST["Email"];
	$subject = $_POST["Subject"];
	$description = $_POST["Description"];

	$contact = new Contacts();
	$result = $contact->insert($dbh, $name, $tel, $email, $subject, $description);

	if ($result) {

		header("Location: /contactform_complete.php");

	} else {

		echo "データの挿入に失敗しました。";
	}
?>