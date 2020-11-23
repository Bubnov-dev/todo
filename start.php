		<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>start</title>
	<link rel="stylesheet" type="text/css" href="start.css">
</head>
<body >
	<video loop muted autoplay>
	
		<source src="Motion.mp4"></source>
	</video>

	<div>
		<form method="POST">
		<p class="field">имя -    <input type = "text" name = "name" ></input></p>

		<p class="field">пароль - <input type = "text" name = "password" ></input></p>

		<input class="buttons" type = "submit" name = "in" value = "Sign in">

		<input class="buttons" type = "submit" name = "up" value = "Sign up">
		
		</form>
	</div>
</body>
</html>


<?php

$dbuser = "postgres";

$dbpass = "2001";

$host = "localhost";

$dbname = "todo";

$db = pg_connect("host = $host dbname = $dbname user = $dbuser password = $dbpass");



if(isset($_POST['up'])){

	$query = "INSERT INTO userok values ('$_POST[name]','$_POST[password]')";

	$result = pg_query($db,$query);


	unset($_POST['up']);

}

if(isset($_POST['in'])){

	$query = "select password from userok where login = $_POST[login]";

	$result = pg_query($db,$query);

	if ($result = $_POST[password])
		 header ('Location: login.php');

	unset($_POST['in']);

}
pg_close($db);

?>	