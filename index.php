<!doctype html>

<head>
	<?php require $_SERVER["DOCUMENT_ROOT"] . "/module/head.php"; ?>
</head>

<body>
	<?php
	$sql = "SELECT * FROM `articles`";
	$result = mysqli_query($conn, $sql);

	while ($row = $result->fetch_assoc()) {
		echo $row["title"];
		?><a href="<?php echo $row["link"]; ?>">link</a></br>
		<?php
	}

	?>
	<?php require $_SERVER["DOCUMENT_ROOT"] . "/module/scripts.php"; ?>
</body>

</html>