<?php
require $_SERVER["DOCUMENT_ROOT"] . "/config/BD_connect.php";
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

	$result = mysqli_query($conn, $sql);

	$sql = "INSERT INTO `articles` (`id`, `title`, `description`, `link`) VALUES (NULL, '" . $articleTitle . "', '" . $articleDescription . "', '/" . $articleLink . "');";

	if (mysqli_query($conn, $sql)) {
		?>
		<script>alert("New record created successfully")</script>
		<?php
	} else {
		?>
		<script>alert("ERROR")</script>
		<?php
	}
}
?>