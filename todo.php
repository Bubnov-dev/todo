

<html>

<head>

<title></title>

</head>

<body>

<h2>insert or update</h2>

<form method="POST" >

<p>имя - <input type = "text" name = "name" ></input></p>

<p>пароль - <input type = "text" name = "password" ></input></p>

<p><input type = "submit" name = "insert_user" value = "add user"></p>
<p><input type = "submit" name = "delete_user" value = "delete user"></p>

<p>задача - <input type = "text" name = "task" ></input></p>

<p>предмет - <input type = "text" name = "qqqqtask_sbj" ></input></p>

<p>дедлайн - <input type = "text" name = "dead" ></input></p>

<p>описание - <input type = "text" name = "desc" ></input></p>

<p><input type = "submit" name = "insert_task" value = "insert_task"></p>
<p><input type = "submit" name = "delete_task" value = "delete task"></p>

<p>предмет - <input type = "text" name = "subj" ></input></p>

<p>расписание - <input type = "text" name = "sched" ></input></p>

<p>расписание 2- <input type = "text" name = "scheduleInput" ></input></p>

<p>ссылка на облако - <input type = "text" name = "cloud_link" ></input></p>

<p><input type = "submit" name = "insert_subj" value = "insert_subj"></p>
<p><input type = "submit" name = "delete_subj" value = "delete subj"></p>

<p>rasp - <input type = "text" name = "rasp" ></input></p>

<p>login - <input type = "text" name = "login" ></input></p>

<p><input type = "submit" name = "insert_rasp" value = "insert_rasp"></p>
<p><input type = "submit" name = "delete_rasp" value = "delete_rasp"></p>

<p><input type = "submit" name = "pizdec" value = "pizdec"></p>
<p><input type = "submit" name = "pizdec2" value = "pizdec2"></p>

</form>


</body>

</html>

<?php

$dbuser = "postgres";

$dbpass = "2001";

$host = "localhost";

$dbname = "todo";

$db = pg_connect("host = $host dbname = $dbname user = $dbuser password = $dbpass");

if(isset($_POST['pizdec'])){
	$query = "CREATE TABLE SANYA (id text NOT NULL);";
	$result = pg_query($db,$query);
	unset($_POST['pizdec']);
}

if(isset($_POST['pizdec2'])){
	$query = "insert into SANYA values ('$_POST[name]');";
	$result = pg_query($db,$query);
	unset($_POST['pizdec2']);
}

if(isset($_POST['insert_user'])){

$query = "INSERT INTO userok values ('$_POST[name]','$_POST[password]')";

$result = pg_query($db,$query);

unset($_POST['insert_user']);

}

if(isset($_POST['delete_user'])){

$query = "delete from user where name = $_POST[name]";

$result = pg_query($db,$query);

unset($_POST['delete_user']);

}

if(isset($_POST['insert_task'])){

$query = "INSERT INTO task values ('$_POST[task]','$_POST[qqqqtask_sbj]','$_POST[dead]','$_POST[desc]')";

$result = pg_query($db,$query);
echo("\n");
echo ($_POST[qqqqtask_sbj]);
echo ($query);

unset($_POST['insert_task']);

}


if(isset($_POST['delete_task'])){

$query = "delete from task where task = $_POST[task]";

$result = pg_query($db,$query);

unset($_POST['delete_task']);
}



if(isset($_POST['insert_subj'])){

$query = "INSERT INTO subjectok values ('$_POST[subj]','$_POST[sched]','$_POST[cloud_link]')";

$result = pg_query($db,$query);


unset($_POST['insert_subj']);

}

if(isset($_POST['delete_subj'])){

$query = "delete from task where task = $_POST[subj]";

$result = pg_query($db,$query);

unset($_POST['delete_subj']);

}


if(isset($_POST['insert_rasp'])){

$query = "INSERT INTO schedule values ('$_POST[rasp]','$_POST[login]')";

$result = pg_query($db,$query);

unset($_POST['insert_rasp']);

}

if(isset($_POST['delete_rasp'])){

$query = "delete from task where task = $_POST[rasp]";

$result = pg_query($db,$query);

unset($_POST['delete_rasp']);
}



/*

if(!empty($_POST['educ'])){

$query = "update job_seeker set education = '$_POST[educ]' where passport_number = $_POST[pass_num]";

$result = pg_query($db,$query);

}

if(!empty($_POST['spec'])){

$query = "update job_seeker set specialization = '$_POST[spec]' where passport_number = $_POST[pass_num]";

$result = pg_query($db,$query);

}

if(!empty($_POST['lsal'])){

$query = "update job_seeker set size_of_last_sal-ary = $_POST[lsal] where passport_number = $_POST[pass_num]";

$result = pg_query($db,$query);

}

if(!empty($_POST['exp'])){

$query = "update job_seeker set experi-ence_in_years = $_POST[exp] where passport_number = $_POST[pass_num]";

$result = pg_query($db,$query);

}

unset($_POST['update']);

}

if(isset($_POST['select'])){

$query = "select * from job_seeker where passport_num-ber = $_POST[pass]";

$result = pg_query($db,$query);

if (pg_num_rows($result)){

$row = pg_fetch_row($result);

echo "<br>";

foreach ($row as $value) {

echo "$value" . " | " ;

}

}

else {

echo "This id doesn't exist";

}

unset($_POST['select']);

}

if(isset($_POST['delete'])){

$query = "delete from job_seeker where passport_number = $_POST[pass]";

$result = pg_query($db,$query);

unset($_POST['delete']);

}*/

pg_close($db);

?>