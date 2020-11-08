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

  $dbname = "postgres";

  $db = pg_connect("host = $host dbname = $dbname user = $dbuser password = $dbpass port = 5432");



if(isset($_POST['up'])){
	$name = $_POST["name"];
	$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
	

	$query = "INSERT INTO userok values ('$name', '$password')";

	$result = pg_query($db,$query);


	unset($_POST['up']);

}

if(isset($_POST['in'])){

	$query = "select password from userok where login = '".$_POST['name']."'";

	$password = $_POST["password"];

	$result = pg_query($db,$query);
	$pass = pg_fetch_row($result);


	if (password_verify($password, $pass[0]))
		//header ('Location: file.php');
		
	unset($_POST['in']);

}
pg_close($db);

?>	