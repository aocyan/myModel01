<header>
	<h1>管理画面</h1>

	<?php if (isset($_SESSION["login"])) { ?>
		<nav>
			<ul>
				<li><a href="logout.php">ログアウト</a></li>
			</ul>
		</nav>
	<?php } ?>
</header>