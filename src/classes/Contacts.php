<?php
	class Contacts {

		function selectPage($dbh) {

			$sql = <<<EOD
			SELECT	contacts.*
			FROM	contacts
			ORDER BY ContactID
EOD;
			$stmt = $dbh->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

			if (!$result) {

				return $result = array();

			} else {

				return $result;
			}
		}

		function selectSingle($dbh, $id) {

			$sql = <<<EOD
			SELECT	contacts.*
			FROM	contacts
			WHERE	ContactID = :ContactID
			ORDER BY ContactID
EOD;
			$stmt = $dbh->prepare($sql);
			$stmt->bindParam(":ContactID", $id, PDO::PARAM_INT);
			$stmt->execute();
			$result = $stmt->fetch(PDO::FETCH_ASSOC);

			return $result;
		}

		function insert($dbh, $name, $tel, $email, $subject, $description) {

			$sql = <<<EOD
			INSERT INTO		contacts
							(
								ContactID,
								Name,
								Tel,
								Email,
								Subject,
								Description
							)
					VALUES	(
								NULL,
								:Name,
								:Tel,
								:Email,
								:Subject,
								:Description
							)
EOD;
			$stmt = $dbh->prepare($sql);
			$stmt->bindParam(":Name", $name, PDO::PARAM_STR);
			$stmt->bindParam(":Tel", $tel, PDO::PARAM_STR);
			$stmt->bindParam(":Email", $email, PDO::PARAM_STR);
			$stmt->bindParam(":Subject", $subject, PDO::PARAM_STR);
			$stmt->bindParam(":Description", $description, PDO::PARAM_STR);
			$result = $stmt->execute();

			return $result;
		}
	}
?>