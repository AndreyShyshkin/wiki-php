<form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
	<p>Find Article <input type="text" name="search" id="searchArticle"> <input type="submit" value="Поиск"></p>
</form>

<?php
require $_SERVER["DOCUMENT_ROOT"] . "/config/BD_connect.php";

if (isset($_GET['search'])) {
	$inputSearch = $_GET['search'];

	$sql = "SELECT * FROM `articles` WHERE `title` = ? OR `description` = ? OR `link` = ?";

	$stmt = mysqli_prepare($conn, $sql);
	mysqli_stmt_bind_param($stmt, "sss", $inputSearch, $inputSearch, $inputSearch);
	mysqli_stmt_execute($stmt);

	$result = mysqli_stmt_get_result($stmt);

	countArticles($result);
}

function countArticles($result)
{
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			echo "Title: " . $row['title'] . "<br>Link: " ?> <a href='<?= $row['link']; ?>'>link</a>
			<?php "<br>";
		}
	} else {
		echo "not found";
	}
}
?>

<hr>