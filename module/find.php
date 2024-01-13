<form action="<?= $_SERVER['PHP_SELF'] ?>" method="get" id='find'>
	<div>
		<p>Find Article</p>
		<input type="text" name="search" id="searchArticle">
		<input type="submit" value="Find" id="findBtn">
	</div>
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
?>
<div class="founded">
	<?php
	function countArticles($result)
	{
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				?>
				<p><a href='<?= $row['link']; ?>'>
						<?= $row['title']; ?>
					</a></p>
				<?php "<br>";
			}
		} else {
			?>
			<p>Not found</p>
			<?php
		}
	}
	?>
</div>
<hr>