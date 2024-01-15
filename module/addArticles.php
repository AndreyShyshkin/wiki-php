<?php
if (!empty($_POST)) {

	$articleTitle = $_POST['articleTitle'];
	$articleDescription = $_POST['articleDescription'];
	$articleLink = $_POST['articleLink'];

	function RandomString()
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randstring = '';
		for ($i = 0; $i < 10; $i++) {
			$randstring = $characters[rand(0, strlen($characters) - 1)];
		}
		return $randstring;
	}

	$sql = "INSERT INTO `articles` (`id`, `title`, `description`, `link`) VALUES (NULL, '" . $articleTitle . "', '" . $articleDescription . "', '/" . $articleLink . "');";

	if (mysqli_query($conn, $sql)) {
		echo '<script>alert("New record created successfully")</script>';
		echo '<script>window.location.href = "/' . $articleLink . '";</script>';
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
