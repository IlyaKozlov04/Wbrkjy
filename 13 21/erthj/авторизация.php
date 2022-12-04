<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'sysbrone';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect($host, $user, $pass, $db_name);
if (!$link) {
echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
exit;
}
$login = "ad";
if(isset($_POST["login"])){
  
    $login = $_POST["login"];
}
if(isset($_POST["password"])){
  
    $password = $_POST["password"];
}
$user_query = mysqli_query($link,"select * from users where UserLogin='$login' and UserPassword='$password' and Role='Roditel'");
if (mysqli_num_rows($user_query) == 1) include "Кабинет-для-родителя.php";
$user_query = mysqli_query($link,"select * from users where UserLogin='$login' and UserPassword='$password' and Role='Organisacia'");
if (mysqli_num_rows($user_query) == 1) include "Кабинет-для-организации.php";
$user_query = mysqli_query($link,"select * from users where UserLogin='$login' and UserPassword='$password' and Role='Administrator'");
if (mysqli_num_rows($user_query) == 1) include "Кабинет-админа.php";


?>