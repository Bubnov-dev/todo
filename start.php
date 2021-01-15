<?php 

session_start();

  if ($_SESSION['auth']==1) {
    header("Location: show.php");
  }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <title>Авторизация</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/registr.css" type="text/css">
   <script src="js/registr.js"></script>
</head>
<body>
<div class="dws-wrapper">
   <div class="dws-form">
   <label class="tab active" title="Вкладка 1">Авторизоваться</label>
   <label class="tab" title="Вкладка 2">Зарегестрироваться</label>

   <div class="text-form">
   <form class="tab-form" method="POST">
      <div class="f-wrap">
      <div class="field">
                <input type="text" name="name" id="fio" placeholder="">
               <label for="fio">ФИО</label>
            </div>
         </div>
      <div class="f-wrap">
           <div class="field">
                <input class="password" type="password" name="  password" id="new-password" placeholder="">
               <label for="new-password">Пароль</label>
            </div>
          </div>
      <input type="submit" class="button" name="in" value="Войти">
      </form>
   </div>
   <div class="text-form form2">
   <form class="tab-form del" method="POST">
      <div class="f-wrap">
          <div class="field">
                <input type="text" name="name" id="fio" placeholder="">
               <label for="fio">ФИО</label>
            </div>
         </div>

      <div class="f-wrap">
           <div class="field">
                <input class="password" type="password" name="password" id="new-password" placeholder="">
               <label for="new-password">Пароль</label>
            </div>
          </div>
      
      <input type="submit" class="button" name="up" value="Зарегестрироваться">
   </form>
  <!-- <script type="text/javascript" src="js/show-password.js"></script>!-->

</div>
</div>
</div>
</body>
</html>


<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);


require("connect.php");



if(isset($_POST['up'])){
  
  
  
  
  
  $name = $_POST["name"];
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
  

  $query = "INSERT INTO userok values ('$name', '$password')";

  $result = pg_query($db,$query);


  unset($_POST['up']);

}

if(isset($_POST['in'])){
  


    $query = "select password from userok where login = '".$_POST['name']."'";

  $login = $_POST['name'];
  $password = $_POST["password"];

  $result = pg_query($db,$query);
  $pass = pg_fetch_row($result);


  if (password_verify($password, $pass[0]))
    $_SESSION['auth'] = 1;
    $_SESSION['login'] = $login;
    header ('Location: show.php');
    
  unset($_POST['in']);

}
pg_close($db);

?>