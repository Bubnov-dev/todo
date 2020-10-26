<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Создание</title>
  <style>
    body {
      font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      font-size: 16px;
      font-weight: 400;
      line-height: 1.5;
      color: #292b2c;
      background-color: #fff;
      margin: 0;
      padding: 0;
    }


    .modal {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1050;
      opacity: 0;
      -webkit-transition: opacity 400ms ease-in;
      -moz-transition: opacity 400ms ease-in;
      transition: opacity 400ms ease-in;
      pointer-events: none;
    }



    .modal:target {
      opacity: 1;
      pointer-events: auto;
      overflow-y: auto;
    }


    .modal-dialog {
      position: relative;
      width: auto;
      margin: 10px;
    }

    @media (min-width: 576px) {
      .modal-dialog {
        max-width: 500px;
        margin: 30px auto;
      }
    }


    .modal-content {
      position: relative;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      background-color: #fff;
      -webkit-background-clip: padding-box;
      background-clip: padding-box;
      border: 1px solid rgba(0, 0, 0, .2);
      border-radius: .3rem;
      outline: 0;
    }

    @media (min-width: 768px) {
      .modal-content {
        -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
        box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
      }
    }


    .modal-header {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: justify;
      -webkit-justify-content: space-between;
      -ms-flex-pack: justify;
      justify-content: space-between;
      padding: 15px;
      border-bottom: 1px solid #eceeef;
    }

    .modal-title {
      margin-top: 0;
      margin-bottom: 0;
      line-height: 1.5;
      font-size: 1.25rem;
      font-weight: 500;
    }


    .close {
      float: right;
      font-family: sans-serif;
      font-size: 24px;
      font-weight: 700;
      line-height: 1;
      color: #000;
      text-shadow: 0 1px 0 #fff;
      opacity: .5;
      text-decoration: none;
    }


    .close:focus,
    .close:hover {
      color: #000;
      text-decoration: none;
      cursor: pointer;
      opacity: .75;
    }


    .modal-body {
      position: relative;
      -webkit-box-flex: 1;
      -webkit-flex: 1 1 auto;
      -ms-flex: 1 1 auto;
      flex: 1 1 auto;
      padding: 15px;
      overflow: auto;
    }
  </style>
</head>
<body>
 <h1 align="CENTER">Расписание</h1>
  <div id="openModal" class="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Информация</h3>
          
          <a href="#close" title="Close" class="close">×</a>
        </div>
        <div class="modal-body">    
          <p>
            <form method="POST">
            <input style="display: none" id="modalName" type="text" name="modal">
            <input id="autorf" type="submit" value="refresh" name="refresh">
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
		<td>1</td> <td><a id="mon1" href="#openModal">all</a></td> <td></td>
		</tr>
		<td>2</td> <td><a id="mon2" href="#openModal">test2</a></td> <td></td>
		</tr>
		<td>3</td> <td><a id="mon3" href="#openModal"></a></td> <td></td>
		</tr>
		<td>4</td> <td><a id="mon4" href="#openModal"></a></td> <td></td>
		</tr>
		<td>5</td> <td><a id="mon5" href="#openModal"></a></td> <td></td>
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
		<td>1</td> <td><a id="tue1" href="#openModal"></a></td> <td></td>
		</tr>
		<td>2</td> <td><a id="tue2" href="#openModal"></a></td> <td></td>
		</tr>
		<td>3</td> <td><a id="tue3" href="#openModal"></a></td> <td></td>
		</tr>
		<td>4</td> <td><a id="tue4" href="#openModal"></a></td> <td></td>
		</tr>
		<td>5</td> <td><a id="tue5" href="#openModal"></a></td> <td></td>
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
		<td>1</td> <td><a id="wed1" href="#openModal"></a></td> <td></td>
		</tr>
		<td>2</td> <td><a id="wed2" href="#openModal"></a></td> <td></td>
		</tr>
		<td>3</td> <td><a id="wed3" href="#openModal"></a></td> <td></td>
		</tr>
		<td>4</td> <td><a id="wed4" href="#openModal"></a></td> <td></td>
		</tr>
		<td>5</td> <td><a id="wed5" href="#openModal"></a></td> <td></td>
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
		<td>1</td> <td><a id="thu1" href="#openModal"></a></td> <td></td>
		</tr>
		<td>2</td> <td><a id="thu2" href="#openModal"></a></td> <td></td>
		</tr>
		<td>3</td> <td><a id="thu3" href="#openModal"></a></td> <td></td>
		</tr>
		<td>4</td> <td><a id="thu4" href="#openModal"></a></td> <td></td>
		</tr>
		<td>5</td> <td><a id="thu5" href="#openModal"></a></td> <td></td>
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
		<td>1</td> <td><a id="fri1" href="#openModal"></a></td> <td></td>
		</tr>
		<td>2</td> <td><a id="fri2" href="#openModal"></a></td> <td></td>
		</tr>
		<td>3</td> <td><a id="fri3" href="#openModal"></a></td> <td></td>
		</tr>
		<td>4</td> <td><a id="fri4" href="#openModal">ваыва</a></td> <td></td>
		</tr>
		<td>5</td> <td><a id="fri5" href="#openModal"></a></td> <td></td>
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
		<td>1</td> <td><a id="sat1" href="#openModal"></a></td> <td></td>
		</tr>
		<td>2</td> <td><a id="sat2" href="#openModal">авыва</a></td> <td></td>
		</tr>
		<td>3</td> <td><a id="sat3" href="#openModal"></a></td> <td></td>
		</tr>
		<td>4</td> <td><a id="sat4" href="#openModal"></a></td> <td></td>
		</tr>
		<td>5</td> <td><a id="sat5" href="#openModal"></a></td> <td></td>
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
<a href="ds.html">Главная</a>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var scrollbar = document.body.clientWidth - window.innerWidth + 'px';
      console.log(scrollbar);
      var allOpen = document.querySelectorAll('[href="#openModal"]');
      var allClose = document.querySelectorAll('[href="#close"]');
      for(let elem of allOpen){
        elem.addEventListener('click', function () {
          document.getElementById("modalName").value = elem.innerHTML;
          document.body.style.overflow = 'hidden';
          document.querySelector('#openModal').style.marginLeft = scrollbar;
          //document.getElementById("autorf").click();
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
function pg_array_parse($s, $start = 0, &$end = null)
{
    if (empty($s) || $s[0] != '{') return null;
    $return = array();
    $string = false;
    $quote='';
    $len = strlen($s);
    $v = '';
    for ($i = $start + 1; $i < $len; $i++) {
        $ch = $s[$i];

        if (!$string && $ch == '}') {
            if ($v !== '' || !empty($return)) {
                $return[] = $v;
            }
            $end = $i;
            break;
        } elseif (!$string && $ch == '{') {
            $v = pg_array_parse($s, $i, $i);
        } elseif (!$string && $ch == ','){
            $return[] = $v;
            $v = '';
        } elseif (!$string && ($ch == '"' || $ch == "'")) {
            $string = true;
            $quote = $ch;
        } elseif ($string && $ch == $quote && $s[$i - 1] == "\"") {
            $v = substr($v, 0, -1) . $ch;
        } elseif ($string && $ch == $quote && $s[$i - 1] != "\"") {
            $string = false;
        } else {
            $v .= $ch;
        }
    }

    return $return;
}

function findTime($day, $array){
  $timeArr[0] = null;
  foreach ($array as $theDay) {
    if ($day == $theDay[0]){
      for ($i = 1; $i<sizeof($theDay); $i++){
        $timeArr[$i-1] = $theDay[$i];
      }
    }
  }
  return $timeArr;
}

  $dbuser = "postgres";

  $dbpass = "2001";

  $host = "localhost";

  $dbname = "postgres";

  $db = pg_connect("host = $host dbname = $dbname user = $dbuser password = $dbpass port = 5432");

  $sched = "itmo";


$monday    = ["","","","","",""];
$tuesday   = ["","","","","",""];
$wednesday = ["","","","","",""];
$thursday  = ["","","","","",""];
$friday    = ["","","","","",""];
$saturday  = ["","","","","",""];

$query = "select * from subjectok where 'mon' = any (days)";
$result = pg_query($db,$query);
$resSubjs = pg_fetch_all($result);
foreach ($resSubjs as $subject) {
  $tmp = findTime ('mon', pg_array_parse($subject['time'])); //finding number of subject in the day
  foreach ($tmp as $value) {
    $monday[$value] = $subject['subject'];
  }
}

$query = "select * from subjectok where 'tue' = any (days)";
$result = pg_query($db,$query);
$resSubjs = pg_fetch_all($result);
foreach ($resSubjs as $subject) {
  $tmp = findTime ('tue', pg_array_parse($subject['time'])); //finding number of subject in the day
  foreach ($tmp as $value) {
    $tuesday[$value] = $subject['subject'];
  }
}
$query = "select * from subjectok where 'wed' = any (days)";
$result = pg_query($db,$query);
$resSubjs = pg_fetch_all($result);
foreach ($resSubjs as $subject) {
  $tmp = findTime ('wed', pg_array_parse($subject['time'])); //finding number of subject in the day
  foreach ($tmp as $value) {
    $wednesday[$value] = $subject['subject'];
  }
}
$query = "select * from subjectok where 'thu' = any (days)";
$result = pg_query($db,$query);
$resSubjs = pg_fetch_all($result);
foreach ($resSubjs as $subject) {
  $tmp = findTime ('thu', pg_array_parse($subject['time'])); //finding number of subject in the day
  foreach ($tmp as $value) {
    $thursday[$value] = $subject['subject'];
  }
}
$query = "select * from subjectok where 'fri' = any (days)";
$result = pg_query($db,$query);
$resSubjs = pg_fetch_all($result);
foreach ($resSubjs as $subject) {
  $tmp = findTime ('fri', pg_array_parse($subject['time'])); //finding number of subject in the day
  foreach ($tmp as $value) {
    $friday[$value] = $subject['subject'];
  }
}
$query = "select * from subjectok where 'sat' = any (days)";
$result = pg_query($db,$query);
$resSubjs = pg_fetch_all($result);
foreach ($resSubjs as $subject) {
  $tmp = findTime ('sat', pg_array_parse($subject['time'])); //finding number of subject in the day
  foreach ($tmp as $value) {
    $saturday[$value] = $subject['subject'];
  }
}

  for($i = 1; $i<6; $i++){
      echo '<script> document.getElementById("mon'.$i.'").innerHTML =  "' . $monday[$i]    . '";' . ' </script>';
      echo '<script> document.getElementById("tue'.$i.'").innerHTML =  "' . $tuesday[$i]   . '";' . ' </script>';
      echo '<script> document.getElementById("wed'.$i.'").innerHTML =  "' . $wednesday[$i] . '";' . ' </script>';
      echo '<script> document.getElementById("thu'.$i.'").innerHTML =  "' . $thursday[$i]  . '";' . ' </script>';
      echo '<script> document.getElementById("fri'.$i.'").innerHTML =  "' . $friday[$i]    . '";' . ' </script>';
      echo '<script> document.getElementById("sat'.$i.'").innerHTML =  "' . $saturday[$i]  . '";' . ' </script>';
  }

  
    if(isset($_POST['refresh'])){
      echo "auto refreshing";
      unset($_POST['refresh']);
    }

    if(isset($_POST['saveInfo'])){
      $task = $_POST['task'];
      $deadline = $_POST['deadline'];
      $description = $_POST['description'];
      $subj = $_POST['modal'];
      $query ="INSERT INTO TASK VALUES ('".$task."', '".$subj. "', '".$deadline."', '".$description."')";
      echo $query;
      $result = pg_query($db, $query);
      //echo "<script> alert('kek: ".$subj."');</script>";
      unset($_POST['saveInfo']);
    }


  ?>

</body>
</html>