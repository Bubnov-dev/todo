<?php

  $dbuser = "";

  $dbpass = "";

  $host = "";

  $dbname = "";

  $db = pg_connect("host = $host dbname = $dbname user = $dbuser password = $dbpass port = 5432");

?>