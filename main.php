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
  
  
</div>
<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);

require("connect.php");

$sched = $_SESSION['sched'];
$query = "select schedule from schedule where login = '".$_SESSION['login']."'";
$result = pg_query($db, $query);
$resScheds = pg_fetch_all($result);
$scheds = [];
for($j=0; $j<count($resScheds); $j++):
    $query = "select * from task where schedule = '".$resScheds[$j]['schedule']."'";

    $result = pg_query($db, $query);
    $resObj = pg_fetch_all($result);
    $del_task = $resObj[0]['task'];
    
    $i=0; 
    ?>
    <ul id="myUL">
      <?php foreach($resObj as $task):?>
      
      <li><?= '<div class="task-name">'.$task['task'].' </div> <div class="subj">'.$task['subject'].' </div>  <div class="time">'.$task['time'].' </div> <div class="desc"> '. $task['description'] .' </div>  <div class="deadline">' . $task['deadline'].'</div>  <img class="img" src="'. $task['img'] .'""> <div class="delete" style="grid-row: 1/2;
    grid-column: 7/8;">
       <form  method="post">
          <button class="delete" type="submit" name="delete" style="background-color: #6699cc;
  color: white;
  font-size: 13pt;
  padding: 5px;
  border: 2px solid #6699cc;">Удалить</button>
        </form> 
</div>';?></li>
    
    <?php endforeach;?>

  <?php 
    if(isset($_POST['delete'])){
  $query = "delete from task where task = '$del_task'";
  $result = pg_query($db, $query);

  unset($_POST['delete']);
  header("Refresh:0");

}
endfor;?>
    </ul>
</body>
</html>
