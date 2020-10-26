<php
alert ("hello");
var sunday = <?php
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
alert ("ok");
document.getElementById("sun1").innerHTML = sunday;
?>
