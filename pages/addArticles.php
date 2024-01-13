<!doctype html>

<head>
	<?php require $_SERVER["DOCUMENT_ROOT"] . "/module/head.php"; ?>
</head>

<body>
	<p><a href="/">Home</a></p>
	<form enctype="multipart/form-data" action="#" method="POST" id="addArticle">
		<div>
			<label for="title">Title</label>
			<input placeholder="Title" type="text" id="title" name="articleTitle" />
		</div>

		<div>
			<label for="description">Description</label>

			<textarea placeholder="Description" rows="8" id="description" name="articleDescription"></textarea>
		</div>

		<div>
			<label for="link">Link</label>

			<textarea placeholder="Link" rows="8" id="link" name="articleLink"></textarea>
		</div>

		<div>
			<button type="submit">
				Send
			</button>
		</div>
	</form>
	<?php require $_SERVER["DOCUMENT_ROOT"] . "/module/submit.php"; ?>


	<?php require $_SERVER["DOCUMENT_ROOT"] . "/module/scripts.php"; ?>
</body>