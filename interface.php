
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Расписание</title>
</head>
<body>
<h1>Предмет</h1>
<form method="POST">
<p><input type="text" name="predmet" list="PredmetName"/>
<datalist id="predmetName">
</datalist>
<select size="1" name="day">
<option selected disabled>День</option>
<option value="Pn" name="pn">Пн</option>
<option value="Vt" name="vt">Вт</option>
<option value="Sr" name="sr">Ср</option>
<option value="Chet" name="ch">Чт</option>
<option value="Pt" name="pt">Пт</option>
<option value="Sub" name="sub">Суб</option>
<option value="Vs" name="vs">Вс</option>
</select>

<p>ссылка на облако - <input type = "text" name = "cloud_link" ></input></p>
<input type="submit" value="Сохранить" name="save">
<input type="submit" value="Удалить"name = "del">
<input type="submit" value="Задания"></td><td>
</p>
<table border="1">
	<caption>Понедельник</caption>
	<tr><td width="200"> 
		<?php
	
$dbuser = "postgres";

$dbpass = "2001";

$host = "localhost";

$dbname = "postgres";

$db = pg_connect("host = $host dbname = $dbname user = $dbuser password = $dbpass port = 5432");

$sched = "itmo";

$query = "select subject from subjectok where day = 'Pn'";


		$result = pg_query($db,$query);
		if (pg_num_rows($result)){
			$row = pg_fetch_row($result);
			echo "<br>";
			foreach ($row as $value) {
				echo "$value" . " | " ;
			}
			}


 ?>
Русский язык</td><td><input type="submit" value="Задания"></td></tr>
</table>
<table border="1" >
	<caption>Вторник</caption>
	<tr><td width="200">
			<?php
	
$dbuser = "postgres";

$dbpass = "2001";

$host = "localhost";

$dbname = "postgres";

$db = pg_connect("host = $host dbname = $dbname user = $dbuser password = $dbpass port = 5432");

$sched = "itmo";

$query = "select subject from subjectok where day = 'Vt'";


		$result = pg_query($db,$query);
		if (pg_num_rows($result)){
			$row = pg_fetch_row($result);
			echo "<br>";
			foreach ($row as $value) {
				echo "$value" . " | " ;
			}
			}


 ?>Английски язык</td><td><input type="submit" value="Задания"></td></tr>
</table>
	<table border="1">
	<caption>Среда</caption>
	<tr><td width="200"><script src="test.php"></script>
				<?php
	
$dbuser = "postgres";

$dbpass = "2001";

$host = "localhost";

$dbname = "postgres";

$db = pg_connect("host = $host dbname = $dbname user = $dbuser password = $dbpass port = 5432");

$sched = "itmo";

$query = "select subject from subjectok where day = 'Sr'";


		$result = pg_query($db,$query);
		if (pg_num_rows($result)){
			$row = pg_fetch_row($result);
			echo "<br>";
			foreach ($row as $value) {
				echo "$value" . " | " ;
			}
			}


 ?>
	</td><td><input type="submit" value="Задания"></td></tr>
</table>
<table border="1">
	<caption>Четверг</caption>
	<tr><td width="200">
				<?php
	
$dbuser = "postgres";

$dbpass = "2001";

$host = "localhost";

$dbname = "postgres";

$db = pg_connect("host = $host dbname = $dbname user = $dbuser password = $dbpass port = 5432");

$sched = "itmo";

$query = "select subject from subjectok where day = 'Chet'";


		$result = pg_query($db,$query);
		if (pg_num_rows($result)){
			$row = pg_fetch_row($result);
			echo "<br>";
			foreach ($row as $value) {
				echo "$value" . " | " ;
			}
			}


 ?>
	</td><td><input type="submit" value="Задания"></td></tr>
</table>
<table border="1">
	<caption>Пятница</caption>
	<tr><td width="200"> 	<?php
	
$dbuser = "postgres";

$dbpass = "2001";

$host = "localhost";

$dbname = "postgres";

$db = pg_connect("host = $host dbname = $dbname user = $dbuser password = $dbpass port = 5432");

$sched = "itmo";

$query = "select subject from subjectok where day = 'Pt'";


		$result = pg_query($db,$query);
		if (pg_num_rows($result)){
			$row = pg_fetch_row($result);
			echo "<br>";
			foreach ($row as $value) {
				echo "$value" . " | " ;
			}
			}


 ?></td><td><input type="submit" value="Задания"></td></tr>
</table>
	<table border="1">
	<caption>Суббота</caption>
	<tr><td width="200">		<?php
	
$dbuser = "postgres";

$dbpass = "2001";

$host = "localhost";

$dbname = "postgres";

$db = pg_connect("host = $host dbname = $dbname user = $dbuser password = $dbpass port = 5432");

$sched = "itmo";

$query = "select subject from subjectok where day = 'Sub'";


		$result = pg_query($db,$query);
		if (pg_num_rows($result)){
			$row = pg_fetch_row($result);
			echo "<br>";
			foreach ($row as $value) {
				echo "$value" . " | " ;
			}
			}


 ?>Итория</td><td><input type="submit" value="Задания"></td></tr>
</table>
<table border="1">
	<caption>Воскресение</caption>
	<tr><td width="200">
				<?php
	
$dbuser = "postgres";

$dbpass = "2001";

$host = "localhost";

$dbname = "postgres";

$db = pg_connect("host = $host dbname = $dbname user = $dbuser password = $dbpass port = 5432");

$sched = "itmo";

$query = "select subject from subjectok where day = 'Vs'";


		$result = pg_query($db,$query);
		if (pg_num_rows($result)){
			$row = pg_fetch_row($result);
			echo "<br>";
			foreach ($row as $value) {
				echo "$value" . " | " ;
			}
			}


 ?>
	</td><td><input type="submit" value="Задания"></td></tr>
</table>
</form>
</body></html>
</body>
</html>


<?php
$pn = "qwettewry";
$dbuser = "postgres";

$dbpass = "2001";

$host = "localhost";

$dbname = "postgres";

$db = pg_connect("host = $host dbname = $dbname user = $dbuser password = $dbpass port = 5432");

$sched = "itmo";

//insert subject



if (isset($_POST['save'])){
	

	$query = "INSERT INTO subjectok values ('$_POST[predmet]','$sched','$_POST[cloud_link]', '$_POST[day]')";
	$result = pg_query($db,$query);
	
	unset($_POST['save']);
}
if (isset($_POST['del'])){
	

	$query = "delete from subjectok where subject = '$_POST[predmet]'";
	$result = pg_query($db,$query);
	
	unset($_POST['del']);
}
?>