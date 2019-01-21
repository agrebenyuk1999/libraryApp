<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Добавление книги</title>
</head>
<body>
	<?php 
	include_once('db.php');
	$id = $_GET[id];
	$books_list = mysql_query("SELECT `title`, `author`, `year_publisher`, `name_publisher`, `genre` FROM `books` WHERE `id` = $id;");
	$row = mysql_fetch_assoc($books_list);
	if (isset($_POST['save'])) {
		$title = strip_tags(trim($_POST['title']));
		$author = strip_tags(trim($_POST['author']));
		$year_publisher = strip_tags(trim($_POST['year_publisher']));
		$name_publisher = strip_tags(trim($_POST['name_publisher']));
		$genre = strip_tags(trim($_POST['genre']));
		}
	$edit_db = mysql_query("UPDATE `books` SET `title` = '$title', `author` = '$author', `year_publisher` = '$year_publisher', `name_publisher` = '$name_publisher', `genre` = '$genre' WHERE `id` = '$id'");
	 ?>
	<form method = 'post' action="edit.php?id=<?php echo $id; ?>">
		<div>Введите название книги</div>
		<div><input type="text" name="title" value="<?php echo $row['title']; ?>" placeholder="Название книги"></div>
		<div>Введите автора книги</div>
		<div><input type="" name="author" value="<?php echo $row['author']; ?>" placeholder="Автор книги"></div>
		<div>Введите год публикации книги</div>
		<div><input type="text" name="year_publisher" value="<?php echo $row['year_publisher']; ?>" placeholder="Год публикации книги"></div>
		<div>Введите название издательства книги</div>
		<div><input type="text" name="name_publisher" value="<?php echo $row['name_publisher']; ?>" placeholder="Издатель"></div>
		<div>Введите жанр книги</div>
		<div><input type="text" name="genre" value="<?php echo $row['genre']; ?>" placeholder="Жанр"></div>
		<div><input type="submit" name="save" value="Сохранить"></div>
	</form>
	<a href="/">Вернуться к списку книг</a>
</body>
</html>