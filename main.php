<?php session_start();
  if ($_SESSION['auth']!=1) {
    header("Location: start.php");
  }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Задания</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="keywords" content="Расписание, задания, домашняя работа, планировщик, распорядок">
  <meta name="description" content="PLANIRATOR 9000 - это сервис, напрвленный на повышение успеваемости студентов и школьников. Сайт поможет наладить распорядок дня каждого пользователя, что способствует повышению вашей работоспособности.">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script src="js/main.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" rel="stylesheet">
</head>
<body>
    <div class="hader">
        <div class="layout-positioner">
            <div class=layout-hader>
              <div><img src="img/logo-2.png"></div>
              <div class="PLANIRATOR hader-content"><a>PLANIRATOR</a></div>
              <div class="menu hader-content">
                <p>
                  <a href="show.php" class="page">Расписание</a>
                  <a href = "red.php" class="page">Предметы</a>
                  <a href = "logout.php" class="page">Выход</a>
                 </p>  
              </div>    
        </div>
      </div>
    </div>
    <div>
<div id="myDIV" class="header">
  <h1>Задачи</h1>
  <hr align="content" class="hrr">
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
</html>