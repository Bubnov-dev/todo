<!DOCTYPE HTML>
<html>
 <head>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="keywords" content="Расписание, домашняя работа, планировщик, распорядок">
  <meta name="description" content="PLANIRATOR 9000 - это сервис, напрвленный на повышение успеваемости студентов и школьников. Сайт поможет наладить распорядок дня каждого пользователя, что способствует повышению вашей работоспособности.">
  <link rel="stylesheet" type="text/css" href="table.css">
  <link rel="stylesheet" type="text/css" href="ss.css">
  <script src="main.js"></script>
  
  <title>Просмотр</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" rel="stylesheet">
</head>
<header>
<div class = "H_Name"><b>PLANIRATOR 9000<b></div>
<p class = "H_menu">
<a href="show.php" class="link">Расписание</a>
<a href = "main.html" class="link">Задания</a>
<a href = "#" class="link">Профиль</a>
</ul>
</header>
<body>
<div id="myDIV" class="header">
  <h2>Задачи</h2>
  <input type="text" id="myInput" placeholder="Title...">
  <span onclick="newElement()" class="addBtn">Добавить</span>
</div>
<?php
$dbuser = "postgres";

$dbpass = "2001";

$host = "localhost";

$dbname = "postgres";

$db = pg_connect("host = $host dbname = $dbname user = $dbuser password = $dbpass port = 5432");

$sched = "itmo";

$query = "select * from task";

$result = pg_query($db, $query);
$resObj = pg_fetch_all($result);
$i=0;
?>
<ul id="myUL">
  <?php foreach($resObj as $task):?>
  <li><?php echo $resObj['name']." | ".$resObj['deadline']?></li>
<?php endforeach;?>
</ul>
</body>