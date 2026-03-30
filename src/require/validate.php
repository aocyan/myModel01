<?php
	function contactVaridate() {

		if (empty($_POST["Name"])) {

			echo "氏名は必須です。";
			exit;
		}

		if (!preg_match('/\A[[:^cntrl:]]{1,100}\z/u', $_POST["Name"])) {

			echo "氏名は100文字までです。";
			exit;
		}

		if (empty($_POST["Tel"])) {

			echo "電話番号は必須です。";
			exit;
		}

		if (!preg_match('/\A\d{2,5}-\d{1,4}-\d{3,4}\z/', $_POST["Tel"])) {

			echo "電話番号は市街地局番からハイフン刻みで数字入力してください。";
			exit;
		}

		if (empty($_POST["Email"])) {

			echo "メールアドレスは必須です。";
			exit;
		}

		if (!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) {

			echo "正しいメールアドレスを入力してください。";
			exit;
		}

		if (!preg_match('/\A[[:^cntrl:]]{1,100}\z/', $_POST["Email"])) {

			echo "メールアドレスは100文字までです。";
			exit;
		}

		if (empty($_POST["Subject"])) {

			echo "件名は必須です。";
			exit;
		}

		if (!preg_match('/\A[[:^cntrl:]]{1,100}\z/u', $_POST["Subject"])) {

			echo "件名は100文字までです。";
			exit;
		}

		if (empty($_POST["Description"])) {

			echo "本文は必須です。";
			exit;
		}
	}
?>