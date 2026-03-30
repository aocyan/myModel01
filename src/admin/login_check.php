<?php
	session_start();

	require_once(__DIR__ . "/../require/data.php");
	include(__DIR__ . "/inc/functions.php");

	if (!isset($_POST["Name"]) && !isset($_POST["Password"])) {

		echo "データが不正です。";
		exit;

	} else {

		$name = $_POST["Name"];
		$pass = $_POST["Password"];

		try {

			$dbh = openDB();
			$member = new Members();
			$result = $member->login($dbh, $name, $pass);

			if ($result) {

				session_regenerate_id(true);
				$_SESSION["login"] = true;
				header("Location: index.php");
			}

		} catch (PDOException $e) {

			echo "エラー:" . str2html($e->getMessage());
			exit;
		}
	}
?>