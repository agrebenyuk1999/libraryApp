<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Добавление книги</title>
</head>
<body>
	<form method = 'post' action="add_book.php">
		<div>Введите название книги</div>
		<div><input type="text" name="title" placeholder="Название книги"></div>
		<div>Введите автора книги</div>
		<div><input type="" name="author" placeholder="Автор книги"></div>
		<div>Введите год публикации книги</div>
		<div><input type="text" name="year_publisher" placeholder="Год публикации книги"></div>
		<div>Введите название издательства книги</div>
		<div><input type="text" name="name_publisher" placeholder="Издатель"></div>
		<div>Введите жанр книги</div>
		<div><input type="text" name="genre" placeholder="Жанр"></div>
		<div><input type="submit" name="add_book" value="Добавить кингу"></div>
	</form>
	<a href="/">Вернуться к списку книг</a>

	<?php 
	include_once('db.php');
	if (isset($_POST['add_book'])) {
		$title = strip_tags(trim($_POST['title']));
		$author = strip_tags(trim($_POST['author']));
		$year_publisher = strip_tags(trim($_POST['year_publisher']));
		$name_publisher = strip_tags(trim($_POST['name_publisher']));
		$genre = strip_tags(trim($_POST['genre']));

		mysql_query("INSERT INTO `books` (`title`, `author`, `year_publisher`,
		 `name_publisher`, `genre`) VALUES ('$title', '$author', '$year_publisher', '$name_publisher', '$genre')");	
		}
	mysql_close();
	 ?>
</body>
</html>