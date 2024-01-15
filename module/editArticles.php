<?php
if (!empty($_POST)) {
	$title = $_POST['Title'];
	$description = $_POST['Description'];
	$link = $_POST['Link'];

	$sql = "UPDATE `articles` SET `title` = '$title', `description` = '$description', `link` = '$link' WHERE `articles`.`id` = $current_id";

	if (mysqli_query($conn, $sql)) {
		echo "<script>alert('Record edited successfully')</script>";
		echo '<script>window.location.href = "' . $link . '";</script>';
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
