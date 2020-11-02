<?php
	echo"<script> alert('hey')</script>";
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
      for ($i = 0; $i<sizeof($theDay); $i++){
        $timeArr[$i] = $theDay[$i];
      }
    }
  }
  return $timeArr;
}

function getSubjs (){
  $monday    = ["","","","","",""];
  $tuesday   = ["","","","","",""];
  $wednesday = ["","","","","",""];
  $thursday  = ["","","","","",""];
  $friday    = ["","","","","",""];
  $saturday  = ["","","","","",""];
  $days = ["mon", "tue", "wed", "thu", "fri", "sat"];

  foreach ($days as $day) {
    $query = "select * from subjectok where '".$day."' = any (days) and schedule='".$GLOBALS['sched']."'";
    $result = pg_query($GLOBALS['db'],$query);
    $resSubjs = pg_fetch_all($result);
    foreach ($resSubjs as $subject) {
      $tmp = findTime ($day, pg_array_parse($subject['time'])); //finding number of subject in the day
      foreach ($tmp as $value) {
        echo $value." |";
        switch ($day) {
          case "mon":
            $monday[$value] = $subject['subject'];
            break;
          case "tue":
            $tuesday[$value] = $subject['subject'];
            break;
          case "wed":
            $wednesday[$value] = $subject['subject'];
            break;
          case "thu":
            $thursday[$value] = $subject['subject'];
            break;
          case "fri":
            $friday[$value] = $subject['subject'];
            break;
          case "sat":
            $saturday[$value] = $subject['subject'];
            break;
          default:
            echo "<script>alert('SWITCH ERROR')</script>";
            break;
        }
      }
    }  
  }
    for($i = 0; $i<5; $i++){
        echo '<script> document.getElementById("mon'.$i.'").innerHTML =  "' . $monday[$i]    . '";' . ' </script>';
        echo '<script> document.getElementById("tue'.$i.'").innerHTML =  "' . $tuesday[$i]   . '";' . ' </script>';
        echo '<script> document.getElementById("wed'.$i.'").innerHTML =  "' . $wednesday[$i] . '";' . ' </script>';
        echo '<script> document.getElementById("thu'.$i.'").innerHTML =  "' . $thursday[$i]  . '";' . ' </script>';
        echo '<script> document.getElementById("fri'.$i.'").innerHTML =  "' . $friday[$i]    . '";' . ' </script>';
        echo '<script> document.getElementById("sat'.$i.'").innerHTML =  "' . $saturday[$i]  . '";' . ' </script>';
    }

      $GLOBALS["monday"] = $monday;
      $GLOBALS["tuesday"] = $tuesday;
      $GLOBALS["wednesday"] = $wednesday;
      $GLOBALS["thursday"] = $thursday;
      $GLOBALS["friday"] = $friday;
      $GLOBALS["saturday"] = $saturday;
  }


?>