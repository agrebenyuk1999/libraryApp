<?php 
$connectionInfo = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('library');
if(!$connectionInfo || !$db){
		exit(mysql_error());
	}
?>