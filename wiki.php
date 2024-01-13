<!doctype html>

<head>
	<?php require $_SERVER["DOCUMENT_ROOT"] . "/module/head.php"; ?>
</head>

<body>
	<div class="container">
		<p><a href="/">Home</a></p>
		<?php
		$sql = "SELECT * FROM `articles`";
		$result = mysqli_query($conn, $sql);
		$current_url = "$_SERVER[REQUEST_URI]";


		while ($row = $result->fetch_assoc()) {
			if ($row['link'] == $current_url) { ?>

				<div>
					<h1>
						<?= $row["title"] ?>
					</h1>
					<p>
						<span>Description:</span><br>
						<?= $row["description"] ?>
					</p>
					<p>To share this article: <a href="<?= $row["link"] ?>">wiki-php
							<?= $row["link"] ?>
						</a></p>
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