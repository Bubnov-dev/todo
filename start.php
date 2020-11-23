<?php session_start();
  if ($_SESSION['auth']==1) {
    header("Location: show.php");
  }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <title>Авторизация</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="style.css" type="text/css">
   <script src="script.js"></script>
</head>
<body>
<div class="dws-wrapper">
   <div class="dws-form">
   <label class="tab active" title="Вкладка 1">Authorization</label>
   <label class="tab" title="Вкладка 2">Registration</label>

   <form class="tab-form" method="POST">
   <input type="email" placeholder="Enter login" name="name">
   <input type="password" placeholder="Enter password" name="password">
   <input type="submit" class="button" name="in" value="Sign in">
</form>
<form class="tab-form del" method="POST">
   
   <input type="text" placeholder="Enter login" name="name">
   <input type="password" placeholder="Enter password" name="password">
   <input type="submit" class="button" name="up" value="Sign up">

</form>
</div>
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

	$login = $_POST['name'];
	$password = $_POST["password"];

	$result = pg_query($db,$query);
	$pass = pg_fetch_row($result);


	if (password_verify($password, $pass[0]))
		$_SESSION['auth'] = 1;
		$_SESSION['login'] = $login;
		header ('Location: show.php');
		
	unset($_POST['in']);

}
pg_close($db);

?>	