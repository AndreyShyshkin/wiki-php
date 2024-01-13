<!doctype html>

<head>
	<?php require $_SERVER["DOCUMENT_ROOT"] . "/module/head.php"; ?>
</head>

<body id="homePage">
	<div class="container">
		<div class="info">
			<h1>Wiki</h1>
			<p><a href="/pages/addArticles.php">Create a your Article</a></p>
			<p>OR</p>
			<?php require $_SERVER["DOCUMENT_ROOT"] . "/module/find.php"; ?>
		</div>
		<div class="lastArticle">
			<h2>Last Article</h2>
			<?php
			$sql = "SELECT * FROM `articles`";
			$result = mysqli_query($conn, $sql);

			while ($row = $result->fetch_assoc()) {
				?>
				<p><a href='<?= $row['link']; ?>'>
						<?= $row['title']; ?>
					</a></p>
				<?php "<br>";
			}
			?>
		</div>
	</div>
	<?php require $_SERVER["DOCUMENT_ROOT"] . "/module/scripts.php"; ?>
</body>

</html>