<!doctype html>

<head>
	<?php require $_SERVER["DOCUMENT_ROOT"] . "/module/head.php"; ?>
</head>

<body>
	<div class="container">
		<?php require $_SERVER["DOCUMENT_ROOT"] . "/module/header.php"; ?>

		<?php
		$sql = "SELECT * FROM `articles`";
		$result = mysqli_query($conn, $sql);
		$current_url = "$_SERVER[REQUEST_URI]";

		while ($row = $result->fetch_assoc()) {
			if ($row['link'] == $current_url) { ?>
				<a href="/pages/editArticlesPage.php?id=<?= $row['id'] ?>">Edit</a>
				<div>
					<h1 class="show">
						<?= $row["title"] ?>
					</h1>
					<p>
						<span>Description:</span><br>
					<p class="show">
						<?= $row["description"] ?>
					</p>

					</p>
					<p>To share this article: <a class='show' href="<?= $row["link"] ?>">wiki-php
							<?= $row["link"] ?>
						</a>
					</p>
				</div>

				<?php
				$found = true;
				break;
			}
		}

		if (!$found) {
			require $_SERVER["DOCUMENT_ROOT"] . "/404.php";
		}
		?>
	</div>

	<?php require $_SERVER["DOCUMENT_ROOT"] . "/module/scripts.php"; ?>
</body>

</html>