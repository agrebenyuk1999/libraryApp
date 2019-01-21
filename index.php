<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>phpsql</title>
</head>
<body>
	<a href="add_book.php">Добавить книгу</a>
	<?php 
	include_once('db.php');
	$books_list = mysql_query("SELECT `id`, `title`, `author`, `year_publisher`, `name_publisher`, `genre` FROM `books` ORDER BY `id` DESC");
	mysql_close();
	while($row = mysql_fetch_assoc($books_list))
	{?>
		<p>Книга называется "<?php echo $row['title'] ?>"</p>
		<p>Автор книги - <?php echo $row['author'] ?></p>
		<p>Год публикации книги - <?php echo $row['year_publisher'] ?></p>
		<p>Опубликовано - <?php echo $row['name_publisher'] ?></p>
		<p>Жанр - <?php echo $row['genre'] ?></p>
		<div><a href="edit.php?id=<?php echo $row['id'] ?>">Редактировать информацию о книге</a></div>
		<div><a href="delete.php?id=<?php echo $row['id']?>">Удалить книгу</a></div>
		<hr>
	<?php } ?>
</body>
</html>