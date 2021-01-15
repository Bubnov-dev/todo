<?php session_start();
  if ($_SESSION['auth']!=1) {
    header("Location: start.php");
  }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Предметы</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="keywords" content="Расписание,предметы, домашняя работа, планировщик, распорядок">
  <meta name="description" content="PLANIRATOR 9000 - это сервис, напрвленный на повышение успеваемости студентов и школьников. Сайт поможет наладить распорядок дня каждого пользователя, что способствует повышению вашей работоспособности.">
  <link rel="stylesheet" type="text/css" href="css/red.css">
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
                  <a href = "main.php" class="page">Задания</a>
                  <a href = "logout.php" class="page">Выход</a>
                 </p>  
              </div>    
        </div>
      </div>
    </div>
    <div class="text"><h1>Мои предметы</h1></div>
    <hr align="content" class="hrr">
  <div class="Add">
    <form id="mainForm" name="add" method="POST" action="">
      <h2>Добавить предмет</h2><br>
      <div class="lesson" ><label for="id_lesson">Предмет:</label><input type="text" name="subj" size="30" id="id_lesson" placeholder="Название предмета"></div><br>
      <div class="AddLesson">
      <div class="AddRow">
      <div class="dayName DN AddCell">День недели:</div> 
      <div class="lessonNumber AddCell">Номер пары</div>
      </div>
        <div class="AddRow">
          <div class="dayName AddCell">Понедельник  </div>
          <div class="AddCell">
            <input type="checkbox" class="custom-checkbox" id="M0" name="monTime[]" value="0">
            <label for="M0"></label>
            <input type="checkbox" class="custom-checkbox" id="M1" name="monTime[]" value="1">
            <label for="M1"></label>
            <input type="checkbox" class="custom-checkbox" id="M2" name="monTime[]" value="2">
            <label for="M2"></label>
            <input type="checkbox" class="custom-checkbox" id="M3" name="monTime[]" value="3">
            <label for="M3"></label>
            <input type="checkbox" class="custom-checkbox" id="M4" name="monTime[]" value="4">
            <label for="M4"></label>
          </div>
        </div>
        <div class="AddRow">
          <div class="dayName AddCell">Вторник  </div>
            <div class="AddCell">
              <input type="checkbox" class="custom-checkbox" id="T0" name="tueTime[]" value="0">
              <label for="T0"></label>
              <input type="checkbox" class="custom-checkbox" id="T1" name="tueTime[]" value="1">
              <label for="T1"></label>
              <input type="checkbox" class="custom-checkbox" id="T2" name="tueTime[]" value="2">
              <label for="T2"></label>
              <input type="checkbox" class="custom-checkbox" id="T3" name="tueTime[]" value="3">
              <label for="T3"></label>
              <input type="checkbox" class="custom-checkbox" id="T4" name="tueTime[]" value="4">
              <label for="T4"></label>
            </div>
          </div>
          <div class="AddRow ">
          <div class="dayName AddCell">Среда  </div>
            <div class="AddCell">
              <input type="checkbox" class="custom-checkbox" id="W0" name="wedTime[]" value="0">
              <label for="W0"></label>
              <input type="checkbox" class="custom-checkbox" id="W1" name="wedTime[]" value="1">
              <label for="W1"></label>
              <input type="checkbox" class="custom-checkbox" id="W2" name="wedTime[]" value="2">
              <label for="W2"></label>
              <input type="checkbox" class="custom-checkbox" id="W3" name="wedTime[]" value="3">
              <label for="W3"></label>
              <input type="checkbox" class="custom-checkbox" id="W4" name="wedTime[]" value="4">
              <label for="W4"></label>
            </div>
          </div>
          <div class="AddRow">
          <div class="dayName AddCell">Четверг</div>
            <div class="AddCell">
              <input type="checkbox" class="custom-checkbox" id="Th0" name="thuTime[]" value="0">
              <label for="Th0"></label>
              <input type="checkbox" class="custom-checkbox" id="Th1" name="thuTime[]" value="1">
              <label for="Th1"></label>
              <input type="checkbox" class="custom-checkbox" id="Th2" name="thuTime[]" value="2">
              <label for="Th2"></label>
              <input type="checkbox" class="custom-checkbox" id="Th3" name="thuTime[]" value="3">
              <label for="Th3"></label>
              <input type="checkbox" class="custom-checkbox" id="Th4" name="thuTime[]" value="4">
              <label for="Th4"></label>
            </div>
          </div>
          <div class="AddRow">
          <div class="dayName AddCell">Пятница  </div>
            <div class="AddCell">
              <input type="checkbox" class="custom-checkbox" id="F0" name="friTime[]" value="0">
              <label for="F0"></label>
              <input type="checkbox" class="custom-checkbox" id="F1" name="friTime[]" value="1">
              <label for="F1"></label>
              <input type="checkbox" class="custom-checkbox" id="F2" name="friTime[]" value="2">
              <label for="F2"></label>
              <input type="checkbox" class="custom-checkbox" id="F3" name="friTime[]" value="3">
              <label for="F3"></label>
              <input type="checkbox" class="custom-checkbox" id="F4" name="friTime[]" value="4">
              <label for="F4"></label>
            </div>
          </div>
          <div class="AddRow">
          <div class="dayName AddCell">Суббота</div>
            <div class="AddCell">
              <input type="checkbox" class="custom-checkbox" id="S0" name="satTime[]" value="0">
              <label for="S0"></label>
              <input type="checkbox" class="custom-checkbox" id="S1" name="satTime[]" value="1">
              <label for="S1"></label>
              <input type="checkbox" class="custom-checkbox" id="S2" name="satTime[]" value="2">
              <label for="S2"></label>
              <input type="checkbox" class="custom-checkbox" id="S3" name="satTime[]" value="3">
              <label for="S3"></label>
              <input type="checkbox" class="custom-checkbox" id="S4" name="satTime[]" value="4">
              <label for="S4"></label>
            </div>
          </div>
        </div>
          <div class="batton">
          <input type="submit" name="save" value="Добавить">
          <input type="submit" name="del"  value="Удалить">
        </div>
    </form>
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
              <div class="cell cell2"><a class="click" id="mon0"></a></div>
              <div class="cell cell3"></div>
            </div>
        <div class="row">
              <div class="cell cell1">2</div>
              <div class="cell cell2"><a class="click" id="mon1"></a></div>
              <div class="cell cell3"></div>
            </div>
        <div class="row">
              <div class="cell cell1">3</div>
              <div class="cell cell2"><a class="click" id="mon2"></a></div>
              <div class="cell cell3" ></div>
            </div>
            <div class="row">
              <div class="cell cell1">4</div>
              <div class="cell cell2"><a class="click" id="mon3"></a></div>
              <div class="cell cell3"></div>
            </div>
            <div class="row">
              <div class="cell cell1">5</div>
              <div class="cell cell2"><a class="click" id="mon4"></a></div>
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
              <div class="cell cell2"><a class="click" id="tue0"></a></div>
              <div class="cell cell3"></div>
            </div>
        <div class="row">
              <div class="cell cell1">2</div>
              <div class="cell cell2"><a class="click" id="tue1"></a></div>
              <div class="cell cell3"></div>
            </div>
        <div class="row">
              <div class="cell cell1">3</div>
              <div class="cell cell2"><a class="click" id="tue2"></a></div>
              <div class="cell cell3"></div>
            </div>
            <div class="row">
              <div class="cell cell1">4</div>
              <div class="cell cell2"><a class="click" id="tue3"></a></div>
              <div class="cell cell3"></div>
            </div>
            <div class="row">
              <div class="cell cell1">5</div>
              <div class="cell cell2"><a class="click" id="tue4"></a></div>
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
              <div class="cell cell2"><a class="click" id="wed0"></a></div>
              <div class="cell cell3"></div>
            </div>
        <div class="row">
              <div class="cell cell1">2</div>
              <div class="cell cell2"><a class="click" id="wed1"></a></div>
              <div class="cell cell3"></div>
            </div>
        <div class="row">
              <div class="cell cell1">3</div>
              <div class="cell cell2"><a class="click" id="wed2"></a></div>
              <div class="cell cell3"></div>
            </div>
            <div class="row">
              <div class="cell cell1">4</div>
              <div class="cell cell2"><a class="click" id="wed3"></a></div>
              <div class="cell cell3"></div>
            </div>
            <div class="row">
              <div class="cell cell1">5</div>
              <div class="cell cell2"><a class="click" id="wed4"></a></div>
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
              <div class="cell cell2"><a class="click" id="thu0"></a></div>
              <div class="cell cell3"></div>
            </div>
        <div class="row">
              <div class="cell cell1">2</div>
              <div class="cell cell2"><a class="click" id="thu1"></a></div>
              <div class="cell cell3"></div>
            </div>
        <div class="row">
              <div class="cell cell1">3</div>
              <div class="cell cell2"><a class="click" id="thu2"></a></div>
              <div class="cell cell3" ></div>
            </div>
            <div class="row">
              <div class="cell cell1">4</div>
              <div class="cell cell2"><a class="click" id="thu3"></a></div>
              <div class="cell cell3"></div>
            </div>
            <div class="row">
              <div class="cell cell1">5</div>
              <div class="cell cell2"><a class="click" id="thu4"></a></div>
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
              <div class="cell cell2"><a class="click" id="fri0"></a></div>
              <div class="cell cell3"></div>
            </div>
        <div class="row">
              <div class="cell cell1">2</div>
              <div class="cell cell2"><a class="click" id="fri1"></a></div>
              <div class="cell cell3"></div>
            </div>
        <div class="row">
              <div class="cell cell1">3</div>
              <div class="cell cell2"><a class="click" id="fri2"></a></div>
              <div class="cell cell3"></div>
            </div>
            <div class="row">
              <div class="cell cell1">4</div>
              <div class="cell cell2"><a class="click" id="fri3"></a></div>
              <div class="cell cell3"></div>
            </div>
            <div class="row">
              <div class="cell cell1">5</div>
              <div class="cell cell2"><a class="click" id="fri4"></a></div>
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
              <div class="cell cell2"><a class="click" id="sat0"></a></div>
              <div class="cell cell3"></div>
            </div>
        <div class="row">
              <div class="cell cell1">2</div>
              <div class="cell cell2"><a class="click" id="sat1"></a></div>
              <div class="cell cell3"></div>
            </div>
        <div class="row">
              <div class="cell cell1">3</div>
              <div class="cell cell2"><a class="click" id="sat2"></a></div>
              <div class="cell cell3"></div>
          </div>
            <div class="row">
              <div class="cell cell1">4</div>
              <div class="cell cell2"><a class="click" id="sat3"></a></div>
              <div class="cell cell3"></div>
            </div>
         <div class="row">
              <div class="cell cell1">5</div>
              <div class="cell cell2"><a class="click" id="sat4"></a></div>
          <div class="cell cell3"></div>
        </div>
      </div>
    </div>
  </div>

<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
include("func.php");
include("push.php");
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);



require("connect.php");

$sched = $_SESSION['sched'];

  $monday    = ["","","","","",""];
  $tuesday   = ["","","","","",""];
  $wednesday = ["","","","","",""];
  $thursday  = ["","","","","",""];
  $friday    = ["","","","","",""];
  $saturday  = ["","","","","",""];


getSubjs();
//getDays();

function format($str){
  echo $str;
  for($i=0; $i<(20-strlen($str)); $i++){
    echo "_";
  }
  echo " | ";
}
function getDays (){
  echo("<br>");
  for ($i = 0; $i< 6; $i++){
    format($GLOBALS['monday'][$i]);
    format($GLOBALS['tuesday'][$i]);
    format($GLOBALS['wednesday'][$i]);
    format($GLOBALS['thursday'][$i]);
    format($GLOBALS['friday'][$i]);
    format($GLOBALS['saturday'][$i]);
  echo("<br>");

  }
  echo("<br>");

  echo("<br>");

}

  if (isset($_POST['save'])){
    $weekdays = ["mon", "tue", "wed", "thu", "fri", "sat"];

    $time = "{";
    $days= "{";

    foreach ($weekdays as $day) {
      switch ($day) {
          case "mon":
            $tmp = $monday;
            break;
          case "tue":
            $tmp = $tuesday;
            break;
          case "wed":
            $tmp = $wednesday;
            break;
          case "thu":
            $tmp = $thursday;
            break;
          case "fri":
            $tmp = $friday;
            break;
          case "sat":
            $tmp = $saturday;
            break;
          default:
            echo "<script>alert('SWITCH ERROR')</script>";
            break;
        }
      $time = $time. "{".$day.",";
      $days = $days. $day.",";
      $AOI = $_POST[$day.'Time'];
      $n = sizeof($AOI);
      for ($i=0; $i < $n; $i++) { 
          if ($tmp[$AOI[$i]] == "")
            $time = $time . $AOI[$i].",";
          else $time = $time."-1,";
      }
      for ($i=$n; $i<6; $i++){
        $time = $time."-1,";
      }
      $time = substr($time,0,-1). "},";
    }

    $days = substr($days,0,-1)."}";
    $time = substr($time,0,-1)."}";

    echo "days: ".$days;
    echo "time: ".$time;

    $query = "select exists(select subject from subjectok where subject='".$_POST[subj]."');";
    $result = pg_query($db,$query);
    $exist = pg_fetch_row($result)[0];
    if ($exist=='f'){
      echo "NOT EXIST " ;
      $query = "INSERT INTO subjectok values ('$_POST[subj]','$sched','', '$days', '$time')";
      $result = pg_query($db,$query);
    }
    else {
      echo "EXIST " ;
      $query = "UPDATE subjectok SET days = '".$days."' where subject = '".$_POST[subj]."';" ;
      $result = pg_query($db,$query);
      $query = "UPDATE subjectok SET time = '".$time."' where subject = '".$_POST[subj]."';" ;
      $result = pg_query($db,$query);
    }


    unset($_POST['save']);
    getSubjs();
  }
  if (isset($_POST['del'])){
    
    $query = "delete from task where subject = '$_POST[subj]'";
    $result = pg_query($db,$query);


    $query = "delete from subjectok where subject = '$_POST[subj]'";
    $result = pg_query($db,$query);
    getSubjs();
    unset($_POST['del']);
  }
  ?>

</body>
</html>