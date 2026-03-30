<?php
	class Members {

		function login($dbh, $name, $pass) {

			$sql = <<<EOD
			SELECT	members.Password
			FROM	members
			WHERE	members.Name = :Name
EOD;
			$stmt = $dbh->prepare($sql);
			$stmt->bindParam(":Name", $name, PDO::PARAM_STR);
			$stmt->execute();
			$result = $stmt->fetch(PDO::FETCH_ASSOC);

			if (!$result) {

				echo "ログインに失敗しました。";
				exit;
			}

			if (password_verify($pass, $result["Password"])) {

				return $result;

			} else {

				echo "パスワードの認証に失敗しました。";
				exit;
			}
		}
	}
?>