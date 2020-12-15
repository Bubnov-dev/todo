<?php session_start();
  if ($_SESSION['auth']!=1) {
    header("Location: start.php");
  }
?>
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

  <style type="text/css">
    li{
      display: grid;
      grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
      grid-template-rows: 1fr;
      width: 100%;
      height: 80px;
    }
    .task-name{
      grid-row: 1/2;
      grid-column: 1/2;
    }
    .desc{
      grid-row: 1/2;

      grid-column: 2/3;
    }
    .deadline{
      grid-row: 1/2;
      grid-column: 3/4;
    }
    .subj{
      grid-row: 1/2;
      grid-column: 4/5;
    }
    .time{
      grid-row: 1/2;
      grid-column: 5/6;
    }
    .img{
      width: 100%
      grid-row: 1/2;
      grid-column: 6/7;
    }
    img.img{
      height: 100%;
    }
  </style>
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
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);

$dbuser = "postgres";

$dbpass = "2001";

$host = "localhost";

$dbname = "postgres";

$db = pg_connect("host = $host dbname = $dbname user = $dbuser password = $dbpass port = 5432");

$sched = $_SESSION['sched'];
$query = "select schedule from schedule where login = '".$_SESSION['login']."'";
$result = pg_query($db, $query);
$resScheds = pg_fetch_all($result);
$scheds = [];
for($j=0; $j<count($resScheds); $j++):
    $query = "select * from task where schedule = '".$resScheds[$j]['schedule']."'";

    $result = pg_query($db, $query);
    $resObj = pg_fetch_all($result);
    $i=0; 
    ?>
    <ul id="myUL">
      <?php foreach($resObj as $task):?>
      
      <li><?php echo '<div class="task-name">'.$task['task'].' </div> <div class="subj">'.$task['subject'].' </div>  <div class="time">'.$task['time'].' </div> <div class="desc"> '. $task['description'] .' </div>  <div class="deadline">' . $task['deadline'].'</div>  <img class="img" src="'. $task['img'] .'"">';?></li>
    <?php endforeach;?>
  <?php endfor;?>
    </ul>
</body>
<div></div>