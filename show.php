<?php session_start();?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Создание</title>
  <link rel="stylesheet" type="text/css" href="table.css">
  <style type="text/css">
    html{
      background: linear-gradient(45deg, #EECFBA, #C5DDE8);
      height: 100%;
    }
    body {
      font-family: -apple-system, system-ui, garamond, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      font-size: 16px;
      font-weight: 400;
      line-height: 1.5;
      color: #292b2c;
      margin: 0;
      padding: 0;
    }
  </style>

</head>
<body>
  <form method="POST">
    <select id="schedForm" name="select_sched">

    </select>
    <input type="submit" name="choose_sched" value="choose">
  </form>
 <h1 align="CENTER">Расписание</h1>
  <div id="openModal" class="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Информация</h3>
          
          <a href="#close" title="Close" class="close">×</a>
        </div>
        <div class="modal-body">   
          <p id="modal-text"> 
            k
          </p>
          <p>
            <form method="POST">
            <input id="modalName" type="text" name="modalName">
            <input style="display: none" id="autorf" type="submit" value="refresh" name="refresh">
            <input type="text" name="task">
            <input type="text" name="deadline">
            <input type="text" name="description"><br>
            <input type="submit" value="Сохранить" name="saveInfo">
            <input type="submit" value="Уыдалить" name="delInfo">
            </form>
          </p>
        </div>
      </div>
    </div>
  </div>
  <p>

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
		<td>1</td> <td><a id="mon0" href="#openModal"></a></td> <td></td>
		</tr>
		<td>2</td> <td><a id="mon1" href="#openModal"></a></td> <td></td>
		</tr>
		<td>3</td> <td><a id="mon2" href="#openModal"></a></td> <td></td>
		</tr>
		<td>4</td> <td><a id="mon3" href="#openModal"></a></td> <td></td>
		</tr>
		<td>5</td> <td><a id="mon4" href="#openModal"></a></td> <td></td>
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
		<td>1</td> <td><a id="tue0" href="#openModal"></a></td> <td></td>
		</tr>
		<td>2</td> <td><a id="tue1" href="#openModal"></a></td> <td></td>
		</tr>
		<td>3</td> <td><a id="tue2" href="#openModal"></a></td> <td></td>
		</tr>
		<td>4</td> <td><a id="tue3" href="#openModal"></a></td> <td></td>
		</tr>
		<td>5</td> <td><a id="tue4" href="#openModal"></a></td> <td></td>
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
		<td>1</td> <td><a id="wed0" href="#openModal"></a></td> <td></td>
		</tr>
		<td>2</td> <td><a id="wed1" href="#openModal"></a></td> <td></td>
		</tr>
		<td>3</td> <td><a id="wed2" href="#openModal"></a></td> <td></td>
		</tr>
		<td>4</td> <td><a id="wed3" href="#openModal"></a></td> <td></td>
		</tr>
		<td>5</td> <td><a id="wed4" href="#openModal"></a></td> <td></td>
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
		<td>1</td> <td><a id="thu0" href="#openModal"></a></td> <td></td>
		</tr>
		<td>2</td> <td><a id="thu1" href="#openModal"></a></td> <td></td>
		</tr>
		<td>3</td> <td><a id="thu2" href="#openModal"></a></td> <td></td>
		</tr>
		<td>4</td> <td><a id="thu3" href="#openModal"></a></td> <td></td>
		</tr>
		<td>5</td> <td><a id="thu4" href="#openModal"></a></td> <td></td>
		</tr>
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
		<td>1</td> <td><a id="fri0" href="#openModal"></a></td> <td></td>
		</tr>
		<td>2</td> <td><a id="fri1" href="#openModal"></a></td> <td></td>
		</tr>
		<td>3</td> <td><a id="fri2" href="#openModal"></a></td> <td></td>
		</tr>
		<td>4</td> <td><a id="fri3" href="#openModal">ваыва</a></td> <td></td>
		</tr>
		<td>5</td> <td><a id="fri4" href="#openModal"></a></td> <td></td>
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
		<td>1</td> <td><a id="sat0" href="#openModal"></a></td> <td></td>
		</tr>
		<td>2</td> <td><a id="sat1" href="#openModal"></a></td> <td></td>
		</tr>
		<td>3</td> <td><a id="sat2" href="#openModal"></a></td> <td></td>
		</tr>
		<td>4</td> <td><a id="sat3" href="#openModal"></a></td> <td></td>
		</tr>
		<td>5</td> <td><a id="sat4" href="#openModal"></a></td> <td></td>
		</tr>
		</table>
	</p>
    </div>
  </div>
</div>
</td>
</tr>
</table>
<div id="openModal" class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title">Информация</h3>
            <a href="#close" title="Close" class="close">×</a>
          </div>
          <div class="modal-body">
          </div>
        </div>
      </div>
    </div>
  </div>
<a href="red.php">Главная</a>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    document.addEventListener("DOMContentLoaded", function () {
      var scrollbar = document.body.clientWidth - window.innerWidth + 'px';
      console.log(scrollbar);
      var allOpen = document.querySelectorAll('[href="#openModal"]');
      var allClose = document.querySelectorAll('[href="#close"]');
      for(let elem of allOpen){
        elem.addEventListener('click', function () {
          alert("ok");
          document.getElementById("modalName").value = elem.innerHTML;
          document.body.style.overflow = 'hidden';
          document.querySelector('#openModal').style.marginLeft = scrollbar;
          //document.getElementById("autorf").click();

          var tmp = PHP;
        });
      }
      for (let elem of allClose){
        elem.addEventListener('click', function () {
          //document.getElementById('save').setAttribute ("name", "close");
          document.body.style.overflow = 'visible';
          document.querySelector('#openModal').style.marginLeft = '0px';
        });
    }
    });
  </script>
<?php

//header("location: /red.php/");

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);

include("func.php");
  $dbuser = "postgres";

  $dbpass = "2001";

  $host = "localhost";

  $dbname = "postgres";

  $db = pg_connect("host = $host dbname = $dbname user = $dbuser password = $dbpass port = 5432");

  $sched = "itmo";
  if($_SESSION['sched']!=null){
    $sched=$_SESSION['sched'];
  }
  $_SESSION['sched']= $sched;
  $query = "select schedule from schedule where login = 'Kolya'";
  $result = pg_query($db, $query);
  $rows=pg_fetch_all_columns($result);
  $i=0;
  foreach ($rows as $tmp) {
    $scheds[$i] = $tmp;
    echo $i." hey:".$scheds[$i]."<br>";
    echo "<script>document.getElementById('schedForm').innerHTML += '<option name=\"".$scheds[$i]."\">".$scheds[$i]."</option>';
          </script>";
    $i++;

  }
if (isset($_POST['choose_sched'])){
     echo $sched = $_POST['select_sched'];
     $_SESSION['sched']= $sched;
     echo "<br>|||||||".$_SESSION['sched'];

    }
getSubjs();
    if(isset($_POST['saveInfo'])){
      echo $_POST["check"];
      $task = $_POST['task'];
      $deadline = $_POST['deadline'];
      $description = $_POST['description'];
      $subj = $_POST['modal'];
      $query ="INSERT INTO TASK VALUES ('".$task."', '".$subj. "', '".$deadline."', '".$description."')";
      echo $query;
      $result = pg_query($db, $query);
      unset($_POST['saveInfo']);
    }

    if(isset($_POST['delInfo'])){
      $query = "delete from task where subject = ".$_POST['modal'];
      $result = pg_query($db, $query);
    }

   /* echo "
    <script>
    document.addEventListener(\"DOMContentLoaded\", function () {
      var scrollbar = document.body.clientWidth - window.innerWidth + 'px';
      console.log(scrollbar);
      var allOpen = document.querySelectorAll('[href=\"#openModal\"]');
      var allClose = document.querySelectorAll('[href=\"#close\"]');
      for(let elem of allOpen){
        elem.addEventListener('click', function () {
          document.getElementById(\"modal-text\").innerHTML = elem.innerHTML;
          document.getElementById(\"modalName\").value = elem.innerHTML;
          document.body.style.overflow = 'hidden';
          document.querySelector('#openModal').style.marginLeft = scrollbar;
          //document.getElementById(\"autorf\").click();
        });
      }
      for (let elem of allClose){
        elem.addEventListener('click', function () {
          //document.getElementById('save').setAttribute (\"name\", \"close\");
          document.body.style.overflow = 'visible';
          document.querySelector('#openModal').style.marginLeft = '0px';
        });
    }
    });
  </script>";*/
  $tmp = "";
 
  ?>

</body>
</html>