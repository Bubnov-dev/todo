<?php session_start();
  if ($_SESSION['auth']!=1) {
    header("Location: start.php");
  }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Расписание</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="keywords" content="Расписание, домашняя работа, планировщик, распорядок">
  <meta name="description" content="PLANIRATOR 9000 - это сервис, напрвленный на повышение успеваемости студентов и школьников. Сайт поможет наладить распорядок дня каждого пользователя, что способствует повышению вашей работоспособности.">
  <link rel="stylesheet" type="text/css" href="css/table.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
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
                  <a href="red.php" class="page">Предметы</a>
                  <a href = "main.php" class="page">Задания</a>
                  <a href = "logout.php" class="page">Выход</a>
                 </p>  
              </div>    
        </div>
      </div>
    </div>
    <div>
       <form method="POST">
    <select id="schedForm" name="select_sched">

    </select>
    <input type="submit" name="choose_sched" value="choose">
  </form>
      <form method="POST">
        <input type="text" name="sch">
    <input type="submit" name="create" value="создать">
      </form>
    </div>
    <div class="text"><h1>Моё расписание</h1></div>
    <hr align="content" class="hrr">
    <div id="openModal" class="modal">
        <div class="modal-header">
          <h2 class="modal-title">Информация</h2> 
          <hr class="modal-hr">
        </div>
        <div class="modal-body"> 
            <form method="POST" enctype='multipart/form-data'>
            <div class="field"><label>Предмет:</label><input id="modalName" type="text" name="modalName" class="modalName" ></div><br>
            <input style="display: none" id="autorf" type="submit" value="refresh" name="refresh">
            <div class="field"><label for="task-field">Задание:</label><input type="text" name="task" placeholder="задание" id="task-field"></div><br>
            <div class="field"><label for="deadlineDate-field">День сдачи:</label><input type="date" name="deadlineDate" placeholder="deadline(date)" id="deadlineDate-field"></div>
            <div class="field"><label for="deadlineTime-field">Время:</label><input type="time" name="deadlineTime" placeholder="deadline(time)" id="deadlineTime-field"></div><br>
            <div class="field"><label for="img-field">Изображение:</label><input type="text" name="img" placeholder="cсылка на изображение" id="img-field"></div><br>
            <div class="field"><label for="description-field">Описание:</label><br><textarea name="description" placeholder="Текст комментария" rows="5" cols="50" id="description-field"></textarea></div><br>
            <div class="field"><input type="submit" value="Сохранить" name="saveInfo"></div>
            <div class="field"><input type="submit" value="Удалить" name="delInfo"></div>
            </form>
        </div>
  </div>
  <div class="tables">
    <div class="table1" name="pn">
      <div class="day">Понедельник</div>
      <div class="table-info">
        <div class="row row1">
              <div class="cell cell1">№</div>
              <div class="cell cell2">Пара</div>
              <div class="cell cell3">Время</div>
            </div>
        <div class="row">
              <div class="cell cell1">1</div>
              <div class="cell cell2"><a class="click" id="mon0" href="#openModal" rel="modal:open"></a></div>
              <div class="cell cell3"></div>
            </div>
        <div class="row">
              <div class="cell cell1">2</div>
              <div class="cell cell2"><a class="click" id="mon1" href="#openModal" rel="modal:open"></a></div>
              <div class="cell cell3"></div>
            </div>
        <div class="row">
              <div class="cell cell1">3</div>
              <div class="cell cell2"><a class="click" id="mon2" href="#openModal" rel="modal:open"></a></div>
              <div class="cell cell3" ></div>
            </div>
            <div class="row">
              <div class="cell cell1">4</div>
              <div class="cell cell2"><a class="click" id="mon3" href="#openModal" rel="modal:open"></a></div>
              <div class="cell cell3"></div>
            </div>
            <div class="row">
              <div class="cell cell1">5</div>
              <div class="cell cell2"><a class="click" id="mon4" href="#openModal" rel="modal:open"></a></div>
              <div class="cell cell3"></div>
            </div>
      </div>
    </div>
      <div class="table2" name="vt">
        <div class="day">Вторник</div>
        <div class="table-info">
          <div class="row row1">
                <div class="cell cell1">№</div>
                <div class="cell cell2">Пара</div>
                <div class="cell cell3">Время</div>
              </div>
          <div class="row">
                <div class="cell cell1">1</div>
                <div class="cell cell2"><a class="click" id="tue0" href="#openModal" rel="modal:open"></a></div>
                <div class="cell cell3"></div>
              </div>
          <div class="row">
                <div class="cell cell1">2</div>
                <div class="cell cell2"><a class="click" id="tue1" href="#openModal" rel="modal:open"></a></div>
                <div class="cell cell3"></div>
              </div>
          <div class="row">
                <div class="cell cell1">3</div>
                <div class="cell cell2"><a class="click" id="tue2" href="#openModal" rel="modal:open"></a></div>
                <div class="cell cell3"></div>
              </div>
              <div class="row">
                <div class="cell cell1">4</div>
                <div class="cell cell2"><a class="click" id="tue3" href="#openModal" rel="modal:open"></a></div>
                <div class="cell cell3"></div>
              </div>
              <div class="row">
                <div class="cell cell1">5</div>
                <div class="cell cell2"><a class="click" id="tue4" href="#openModal" rel="modal:open"></a></div>
                <div class="cell cell3"></div>
              </div>
        </div>
      </div>
    <div class="table3" name="sr">
        <div class="day">Среда</div>
        <div class="table-info">
          <div class="row row1">
                <div class="cell cell1">№</div>
                <div class="cell cell2">Пара</div>
                <div class="cell cell3">Время</div>
              </div>
          <div class="row">
                <div class="cell cell1">1</div>
                <div class="cell cell2"><a class="click" id="wed0" href="#openModal" rel="modal:open"></a></div>
                <div class="cell cell3"></div>
              </div>
          <div class="row">
                <div class="cell cell1">2</div>
                <div class="cell cell2"><a class="click" id="wed1" href="#openModal" rel="modal:open"></a></div>
                <div class="cell cell3"></div>
              </div>
          <div class="row">
                <div class="cell cell1">3</div>
                <div class="cell cell2"><a class="click" id="wed2" href="#openModal" rel="modal:open"></a></div>
                <div class="cell cell3"></div>
              </div>
              <div class="row">
                <div class="cell cell1">4</div>
                <div class="cell cell2"><a class="click" id="wed3" href="#openModal" rel="modal:open"></a></div>
                <div class="cell cell3"></div>
              </div>
              <div class="row">
                <div class="cell cell1">5</div>
                <div class="cell cell2"><a class="click" id="wed4" href="#openModal" rel="modal:open"></a></div>
                <div class="cell cell3"></div>
              </div>
        </div>
      </div>
      <div class="table4" name="ch">
        <div class="day">Четверг</div>
        <div class="table-info">
          <div class="row row1">
                <div class="cell cell1">№</div>
                <div class="cell cell2">Пара</div>
                <div class="cell cell3">Время</div>
              </div>
          <div class="row">
                <div class="cell cell1">1</div>
                <div class="cell cell2"><a class="click" id="thu0" href="#openModal" rel="modal:open"></a></div>
                <div class="cell cell3"></div>
              </div>
          <div class="row">
                <div class="cell cell1">2</div>
                <div class="cell cell2"><a class="click" id="thu1" href="#openModal" rel="modal:open"></a></div>
                <div class="cell cell3"></div>
              </div>
          <div class="row">
                <div class="cell cell1">3</div>
                <div class="cell cell2"><a class="click" id="thu2" href="#openModal" rel="modal:open"></a></div>
                <div class="cell cell3" ></div>
              </div>
              <div class="row">
                <div class="cell cell1">4</div>
                <div class="cell cell2"><a class="click" id="thu3" href="#openModal" rel="modal:open"></a></div>
                <div class="cell cell3"></div>
              </div>
              <div class="row">
                <div class="cell cell1">5</div>
                <div class="cell cell2"><a class="click" id="thu4" href="#openModal" rel="modal:open"></a></div>
                <div class="cell cell3"></div>
              </div>
        </div>
      </div>
      <div class="table5" name="pt">
        <div class="day">Пятница</div>
        <div class="table-info">
          <div class="row row1">
                <div class="cell cell1">№</div>
                <div class="cell cell2">Пара</div>
                <div class="cell cell3">Время</div>
              </div>
          <div class="row">
                <div class="cell cell1">1</div>
                <div class="cell cell2"><a class="click" id="fri0" href="#openModal" rel="modal:open"></a></div>
                <div class="cell cell3"></div>
              </div>
          <div class="row">
                <div class="cell cell1">2</div>
                <div class="cell cell2"><a class="click" id="fri1" href="#openModal" rel="modal:open"></a></div>
                <div class="cell cell3"></div>
              </div>
          <div class="row">
                <div class="cell cell1">3</div>
                <div class="cell cell2"><a class="click" id="fri2" href="#openModal" rel="modal:open"></a></div>
                <div class="cell cell3"></div>
              </div>
              <div class="row">
                <div class="cell cell1">4</div>
                <div class="cell cell2"><a class="click" id="fri3" href="#openModal" rel="modal:open"></a></div>
                <div class="cell cell3"></div>
              </div>
              <div class="row">
                <div class="cell cell1">5</div>
                <div class="cell cell2"><a class="click" id="fri4" href="#openModal" rel="modal:open"></a></div>
                <div class="cell cell3"></div>
              </div>
        </div>
      </div>
      <div class="table6" name="sub">
        <div class="day">Суббота</div>
        <div class="table-info">
          <div class="row row1">
                <div class="cell cell1">№</div>
                <div class="cell cell2">Пара</div>
                <div class="cell cell3">Время</div>
              </div>
          <div class="row">
                <div class="cell cell1">1</div>
                <div class="cell cell2"><a class="click" id="sat0" href="#openModal" rel="modal:open"></a></div>
                <div class="cell cell3"></div>
              </div>
          <div class="row">
                <div class="cell cell1">2</div>
                <div class="cell cell2"><a class="click" id="sat1" href="#openModal" rel="modal:open"></a></div>
                <div class="cell cell3"></div>
              </div>
          <div class="row">
                <div class="cell cell1">3</div>
                <div class="cell cell2"><a class="click" id="sat2" href="#openModal" rel="modal:open"></a></div>
                <div class="cell cell3"></div>
            </div>
              <div class="row">
                <div class="cell cell1">4</div>
                <div class="cell cell2"><a class="click" id="sat3" href="#openModal" rel="modal:open"></a></div>
                <div class="cell cell3"></div>
              </div>
           <div class="row">
                <div class="cell cell1">5</div>
                <div class="cell cell2"><a class="click" id="sat4" href="#openModal" rel="modal:open"></a></div>
            <div class="cell cell3"></div>
          </div>
        </div>
      </div>
  </div>


  
<?php
//header("location: /red.php/");
/*
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
*/
include("func.php");
include("push.php");
  $dbuser = "postgres";

  $dbpass = "2001";

  $host = "localhost";

  $dbname = "postgres";

  $db = pg_connect("host = $host dbname = $dbname user = $dbuser password = $dbpass port = 5432");

$login = $_SESSION['login'];

getActualTasks($db);
  
  if(isset($_POST['create'])){
    $query = "INSERT INTO schedule values ('".$_POST['sch']."','$login')";
    $result = pg_query($db, $query);
    unset($_POST['create']);
  }

  if($_SESSION['sched']!=null){
    $sched=$_SESSION['sched'];
  }
  $_SESSION['sched']= $sched;
  $query = "select schedule from schedule where login = '$login'";
  $result = pg_query($db, $query);


 
  $rows=pg_fetch_all_columns($result);
  $i=0;
  foreach ($rows as $tmp) {
    $scheds[$i] = $tmp;
    echo "<script>document.getElementById('schedForm').innerHTML += '<option name=\"".$scheds[$i]."\">".$scheds[$i]."</option>';
          </script>";
    $i++;

  }
if (isset($_POST['choose_sched'])){
     $sched = $_POST['select_sched'];
     $_SESSION['sched']= $sched;

    }
getSubjs();

    if(isset($_POST['delInfo'])){
      $query = "delete from task where subject = ".$_POST['modal'];
      $result = pg_query($db, $query);
    }


  if (isset($_POST["saveInfo"])){
    
      $query = "insert into task values ('".$_POST['task']."', '".$_POST['modalName']."', '".$_POST['description']."', '".$_POST['deadlineDate']."', '".$_POST['deadlineTime']."' , '".$_POST['img']."', '".$sched."')";
      echo "alert('".$query."');";
    $result = pg_query($db, $query);
    
    
    unset($_POST['saveInfo']);

  } 


  $query = "select * from task where schedule='$sched'";
  $result = pg_query($db ,$query);
  $tasks = pg_fetch_all_columns($result);
  $tasks2 = pg_fetch_all($result);
  foreach ($tasks2 as $task) {
    $taskName = $task['task'];
    $taskSubj = $task['subject'];
    $taskDeadline = $task['deadline'];
    $taskImg = "no image";

    echo "<script>document.getElementById('tasks').innerHTML +=  '<div class=\\\"task\\\"><span class=\\\"taskName\\\">".$taskName." on ".$taskSubj."</span><span class=\\\"taskDeadline\\\">".$taskDeadline."</span><span class=\\\"taskImg\\\">".$taskImg."</span></div>';
          </script>";

  }
  ?>

<script type="text/javascript">
      
    document.addEventListener("DOMContentLoaded", function () {
      var allOpen = document.getElementsByClassName('click');
      for(i=0; i<allOpen.length; i++){
      }
      for(let elem of allOpen){
        elem.addEventListener('click', function () {
          document.getElementById("modalName").value = elem.innerHTML;
       });
      }
    }
    );
  </script>


</body> 
</html>