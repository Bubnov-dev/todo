<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Создание</title>
</head>
<body>
 <h1 align="CENTER">Расписание</h1>
 	<form name="add" method="POST" action="">
 		<h2>Добавить предмет</h2><br>
 		<p>Название:</p><br>
 		<input type="text" name="subj" size="40"><br>
    
 		<p>Дни недели:</p>
  			<p><input type="checkbox" name="Mon" value="1">Понедельник  
  			Пара:<select size="1" name="selectMon">
  				<option disabled selected>№</option>
  				<option value="1">1</option>
  				<option value="2">2</option>
  				<option value="3">3</option>
  				<option value="4">4</option>
  				<option value="5">5</option>
  			</select><Br>
  			<input type="checkbox" name="Tue" value="1">Втонрник  
  			Пара:<select size="1" name="selectTue">
  				<option disabled selected>№</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select><Br>
  			<input type="checkbox" name="Wed" value="1">Среда  
  			Пара:<select size="1" name="selectWed">
  				<option disabled selected>№</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
  			</select><Br>
  			<input type="checkbox" name="Thu" value="1">Четверг  
  			Пара:<select size="1" name="selectThu">
  				<option disabled selected>№</option>
  				<option disabled selected>№</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
  			</select><Br>
  			<input type="checkbox" name="Fri" value="1">Пятница  
  			Пара:<select size="1" name="selectFri">
  				<option disabled selected>№</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
  			</select><Br>
  			<input type="checkbox" name="Sat" value="1">Суббота  
  			Пара:<select size="1" name="selectSat">
  				<option disabled selected>№</option>
  			  <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>

  			</select><Br></p>
        <p><input type="submit" name="reboot" value="обновить"></p>
  			<p><input type="submit" name="save" value="Добавить"></p>
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
    <td>1</td > <td id="mon1"></td> <td></td>
    </tr>
    <td>2</td> <td id="mon2"></td> <td></td>
    </tr>
    <td>3</td> <td id="mon3"></td> <td></td>
    </tr>
    <td>4</td> <td id="mon4"></td> <td></td>
    </tr>
    <td>5</td> <td id="mon5"></td> <td></td>
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
    <td>1</td> <td id="tue1"></td> <td></td>
    </tr>
    <td>2</td> <td id="tue2"></td> <td></td>
    </tr>
    <td>3</td> <td id="tue3"></td> <td></td>
    </tr>
    <td>4</td> <td id="tue4"></td> <td></td>
    </tr>
    <td>5</td> <td id="tue5"></td> <td></td>
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
    <td>1</td> <td id="wed1"></td> <td></td>
    </tr>
    <td>2</td> <td id="wed2"></td> <td></td>
    </tr>
    <td>3</td> <td id="wed3"></td> <td></td>
    </tr>
    <td>4</td> <td id="wed4"></td> <td></td>
    </tr>
    <td>5</td> <td id="wed5"></td> <td></td>
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
    <td>1</td> <td id="thu1"></td> <td></td>
    </tr>
    <td>2</td> <td id="thu2"></td> <td></td>
    </tr>
    <td>3</td> <td id="thu3"></td> <td></td>
    </tr>
    <td>4</td> <td id="thu4"></td> <td></td>
    </tr>
    <td>5</td> <td id="thu5"></td> <td></td>
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
    <td>1</td> <td id="fri1"></td> <td></td>
    </tr>
    <td>2</td> <td id="fri2"></td> <td></td>
    </tr>
    <td>3</td> <td id="fri3"></td> <td></td>
    </tr>
    <td>4</td> <td id="fri4"></td> <td></td>
    </tr>
    <td>5</td> <td id="fri5"></td> <td></td>
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
    <td>1</td> <td id="sat1"></td> <td></td>
    </tr>
    <td>2</td> <td id="sat2"></td> <td></td>
    </tr>
    <td>3</td> <td id="sat3"></td> <td></td>
    </tr>
    <td>4</td> <td id="sat4"></td> <td></td>
    </tr>
    <td>5</td> <td id="sat5"></td> <td></td>
    </tr>
    </table>
  </p>
    </div>
  </div>
</div>
</td>
</tr>
</table>
<a href="ds.php">смотреть</a>
  
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
    $tuesday[$value] = $subject['subject'];
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



  if (isset($_POST['save'])){
    $time = "{";
    $days= "{";
    if ($_POST['Mon'] == 1) {
      $days = $days. "mon,";
      $time = $time . "{mon, ".$_POST['selectMon']. "},";}
    if ($_POST['Tue'] == 1) {
      $days = $days. "tue,";
      $time = $time . "{tue, ".$_POST['selectTue']. "},";}
    if ($_POST['Wed'] == 1) {
      $days = $days. "wed,";
      $time = $time . "{wed, ".$_POST['selectWed']. "},";}
    if ($_POST['Thu'] == 1) {
      $days = $days. "thu,";
      $time = $time . "{thu, ".$_POST['selectThu']. "},";}
    if ($_POST['Fri'] == 1) {
      $days = $days. "fri,";
      $time = $time . "{fri, ".$_POST['selectFri']. "},";}
    if ($_POST['Sat'] == 1) {
      $days = $days. "sat,";
      $time = $time . "{sat, ".$_POST['selectSat']. "},";}
    $days = substr($days,0,-1)."}";
    $time = substr($time,0,-1)."}";
    $query = "INSERT INTO subjectok values ('$_POST[subj]','$sched','', '$days', '$time')";
    echo $query;

    $result = pg_query($db,$query);
    
    unset($_POST['save']);
  }
  if (isset($_POST['del'])){
    

    $query = "delete from subjectok where subject = '$_POST[subj]'";
    echo $query;
    $result = pg_query($db,$query);
    
    unset($_POST['del']);
  }
  ?>

</body>
</html>