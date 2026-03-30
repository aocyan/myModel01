<?php
	foreach (glob(__DIR__ . "/../classes/*.php") as $classesFile) {

		require_once($classesFile);
	}

	function openDB() :PDO {

		$user = "myModel01User";
		$password = "myModel01User";

		$opt = [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_EMULATE_PREPARES => false,
			PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
		];
		$dbh = new PDO("mysql:host=myModel01_db; dbname=myModel01_db", $user, $password, $opt);

		return $dbh;
	}
?>