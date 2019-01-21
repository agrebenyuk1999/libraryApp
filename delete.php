<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Удалено</title>
</head>
<body>
	<?php 
		include_once('db.php');
		$id = $_GET['id'];
		mysql_query("DELETE FROM `books` WHERE `id` = '$id'");
		mysql_close();
		echo 'Книга успешно удалена!';
	?>
	<a href="/">Вернуться к списку книг</a>
</body>
</html>