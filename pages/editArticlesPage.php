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
		$current_id = $_GET["id"];

		require $_SERVER["DOCUMENT_ROOT"] . "/module/editArticles.php";

		while ($row = $result->fetch_assoc()) {
			if ($row['id'] == $current_id) { ?>
				<a href="<?= $row['link'] ?>">Go back</a>
				<form action="#" method="POST">
					<input name="Title" type="text" placeholder="Title" value="<?= $row["title"] ?>">
					<p>
						<span>Description:</span><br>

						<input name="Description" type="text" placeholder="Description" value="<?= $row["description"] ?>">
					</p>
					<p>To share this article:
						<input name="Link" type="text" placeholder="Link" value="<?= $row["link"] ?>">
					</p>
					<button type="submit" name="submit">EDIT</button>
				</form>

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