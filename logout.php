<?php
	session_start();
	unset($_SESSION['auth']);
	unset($_SESSION['login']);
	unset($_SESSION['sched']);
	session_destroy();
	header("Location: start.php");


?> 