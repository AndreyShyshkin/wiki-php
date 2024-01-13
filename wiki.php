<!doctype html>

<head>
	<?php require $_SERVER["DOCUMENT_ROOT"] . "/module/head.php"; ?>
</head>

<body>

	<?php
	$sql = "SELECT * FROM `articles`";
	$result = mysqli_query($conn, $sql);
	$current_url = "$_SERVER[REQUEST_URI]";


	while ($row = $result->fetch_assoc()) {
		if ($row['link'] == $current_url) {
			echo $current_url;
			$found = true;
			break;
		}
	}

	if (!$found) {
		echo "404";
	}
	?>

	<?php require $_SERVER["DOCUMENT_ROOT"] . "/module/scripts.php"; ?>
</body>

</html>