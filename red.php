<?php session_start();?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Создание</title>
  <link rel="stylesheet" type="text/css" href="table.css">
  <style>
    html{
      background: linear-gradient(45deg, #EECFBA, #C5DDE8);
      height: 100%;
    }
    .dayName{
      display: inline-block;
      width: 45%;
    }
    #mainForm{
      margin-left: 1%;
      float: left;
    }



    input[type="submit"] {
      display: inline-block;
      width: 6em;
      height: 2em;
      line-height: 2em;
      vertical-align: middle;
      text-align: center;
      text-decoration: none;
      user-select: none;
      color: rgb(0,0,0);
      outline: none;
      border: 1px solid rgba(0,0,0,.4);
      border-top-color: rgba(0,0,0,.3);
      border-radius: 2px;
      background: linear-gradient(45deg, #c58b77, #a29995);
      box-shadow:
       0 0 3px rgba(0,0,0,0) inset,
       0 1px 1px 1px rgba(255,255,255,.2),
       0 -1px 1px 1px rgba(0,0,0,0);
      transition: .2s ease-in-out;
    }
    input[type="submit"]hover:not(:active) {

      box-shadow:
       0 0 3px rgba(0,0,0,0) inset,
       0 1px 1px 1px rgba(0,255,255,.5),
       0 -1px 1px 1px rgba(0,255,255,.5);
    }
    input[type="submit"]:active {
      background: linear-gradient(#856, #635);
      box-shadow:
       0 0 3px rgba(0,0,0,.5) inset,
       0 1px 1px 1px rgba(255,255,255,.4),
       0 -1px 1px 1px rgba(0,0,0,.1);
    }
  </style>

</head>
<body>
 
 	<form id="mainForm" name="add" method="POST" action="">
 		<h2>Добавить предмет</h2><br>
 		<p>Название:</p><br>
 		<input type="text" name="subj" size="40"><br>
    
 		<span class="dayName">Дни недели:</span> 
    <span>номера пар</span>
  			<p><span class="dayName">Понедельник  </span>
        <input type="checkbox" name="monTime[]" value="0">
        <input type="checkbox" name="monTime[]" value="1">
        <input type="checkbox" name="monTime[]" value="2">
        <input type="checkbox" name="monTime[]" value="3">
        <input type="checkbox" name="monTime[]" value="4">

        <Br>
  			<span class="dayName">Вторник  </span>
        <input type="checkbox" name="tueTime[]" value="0">
        <input type="checkbox" name="tueTime[]" value="1">
        <input type="checkbox" name="tueTime[]" value="2">
        <input type="checkbox" name="tueTime[]" value="3">
        <input type="checkbox" name="tueTime[]" value="4">
        <Br>
  			<span class="dayName">Среда  </span>
        <input type="checkbox" name="wedTime[]" value="0">
        <input type="checkbox" name="wedTime[]" value="1">
        <input type="checkbox" name="wedTime[]" value="2">
        <input type="checkbox" name="wedTime[]" value="3">
        <input type="checkbox" name="wedTime[]" value="4">
        <Br>
  			<span class="dayName">Четверг  </span>
        <input type="checkbox" name="thuTime[]" value="0">
        <input type="checkbox" name="thuTime[]" value="1">
        <input type="checkbox" name="thuTime[]" value="2">
        <input type="checkbox" name="thuTime[]" value="3">
        <input type="checkbox" name="thuTime[]" value="4">
        <Br>
  			<span class="dayName">Пятница  </span>
        <input type="checkbox" name="friTime[]" value="0"
>        <input type="checkbox" name="friTime[]" value="1">
        <input type="checkbox" name="friTime[]" value="2">
        <input type="checkbox" name="friTime[]" value="3">
        <input type="checkbox" name="friTime[]" value="4">
        <Br>
  			<span class="dayName">Суббота  </span>
        <input type="checkbox" name="satTime[]" value="0">
        <input type="checkbox" name="satTime[]" value="1">
        <input type="checkbox" name="satTime[]" value="2">
        <input type="checkbox" name="satTime[]" value="3">
        <input type="checkbox" name="satTime[]" value="4">
        <Br></p>
  			<p><input type="submit" name="save" value="Добавить/обновить"></p>
  			<p><input type="submit" name="del"  value="Удалить"></p>
  	</form>
 <h1 align="CENTER">Расписание</h1>
 <p align="CENTER">
<table border="0" cellspacing="30" align="CENTER"><tr><td>
<div class="card-deck">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Понедельник</h5>
      <p class="card-text">
        <table border="1" name="pn">
    <tr>
    <td>№</td> <td width=300px>Пара</td> <td>Время</td>
    </tr>
    <td>1</td > <td id="mon0"></td> <td></td>
    </tr>
    <td>2</td> <td id="mon1"></td> <td></td>
    </tr>
    <td>3</td> <td id="mon2"></td> <td></td>
    </tr>
    <td>4</td> <td id="mon3"></td> <td></td>
    </tr>
    <td>5</td> <td id="mon4"></td> <td></td>
    </tr>
    </table>
  </p>
    </div>
  </div>
 </td><td>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Вторник</h5>
      <p class="card-text">
        <table border="1" name="vt">
    <tr>
    <td>№</td> <td width=300px>Пара</td> <td>Время</td>
    </tr>
    <td>1</td> <td id="tue0"></td> <td></td>
    </tr>
    <td>2</td> <td id="tue1"></td> <td></td>
    </tr>
    <td>3</td> <td id="tue2"></td> <td></td>
    </tr>
    <td>4</td> <td id="tue3"></td> <td></td>
    </tr>
    <td>5</td> <td id="tue4"></td> <td></td>
    </tr>
    </table>
  </p>
    </div>
  </div>
</td><td>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Среда</h5>
      <p class="card-text">
        <table border="1" name="sr">
    <tr>
    <td>№</td> <td width=300px>Пара</td> <td>Время</td>
    </tr>
    <td>1</td> <td id="wed0"></td> <td></td>
    </tr>
    <td>2</td> <td id="wed1"></td> <td></td>
    </tr>
    <td>3</td> <td id="wed2"></td> <td></td>
    </tr>
    <td>4</td> <td id="wed3"></td> <td></td>
    </tr>
    <td>5</td> <td id="wed4"></td> <td></td>
    </tr>
    </table>
  </p>
    </div>
  </div>
</div>
</td>
</tr>
<tr>
  <td>
<div class="card-deck">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Четверг</h5>
      <p class="card-text">
        <table border="1" name="ch">
    <tr>
    <td>№</td> <td width=300px>Пара</td> <td>Время</td>
    </tr>
    <td>1</td> <td id="thu0"></td> <td></td>
    </tr>
    <td>2</td> <td id="thu1"></td> <td></td>
    </tr>
    <td>3</td> <td id="thu2"></td> <td></td>
    </tr>
    <td>4</td> <td id="thu3"></td> <td></td>
    </tr>
    <td>5</td> <td id="thu4"></td> <td></td>
    </table>
  </p>
    </div>
  </div>
 </td><td>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Пятница</h5>
      <p class="card-text">
        <table border="1" name="pt">
    <tr>
    <td>№</td> <td width=300px>Пара</td> <td>Время</td>
    </tr>
    <td>1</td> <td id="fri0"></td> <td></td>
    </tr>
    <td>2</td> <td id="fri1"></td> <td></td>
    </tr>
    <td>3</td> <td id="fri2"></td> <td></td>
    </tr>
    <td>4</td> <td id="fri3"></td> <td></td>
    </tr>
    <td>5</td> <td id="fri4"></td> <td></td>
    </tr>
    </table>
  </p>
    </div>
  </div>
</td><td>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Суббота</h5>
      <p class="card-text">
        <table border="1" name="sub">
    <tr>
    <td>№</td> <td width=300px>Пара</td> <td>Время</td>
    </tr>
    <td>1</td> <td id="sat0"></td> <td></td>
    </tr>
    <td>2</td> <td id="sat1"></td> <td></td>
    </tr>
    <td>3</td> <td id="sat2"></td> <td></td>
    </tr>
    <td>4</td> <td id="sat3"></td> <td></td>
    </tr>
    <td>5</td> <td id="sat4"></td> <td></td>
    </tr>
    </table>
  </p>
    </div>
  </div>
</div>
</td>
</tr>
</table>
<a href="show.php">смотреть</a>
<?php
include("func.php");
/*ini_set('error_reporting', E_ALL);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);

*/
$dbuser = "postgres";

$dbpass = "2001";

$host = "localhost";

$dbname = "postgres";

$db = pg_connect("host = $host dbname = $dbname user = $dbuser password = $dbpass port = 5432");

$sched = $_SESSION['sched'];
echo "---".$sched;

  $monday    = ["","","","","",""];
  $tuesday   = ["","","","","",""];
  $wednesday = ["","","","","",""];
  $thursday  = ["","","","","",""];
  $friday    = ["","","","","",""];
  $saturday  = ["","","","","",""];


getSubjs();
getDays();

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