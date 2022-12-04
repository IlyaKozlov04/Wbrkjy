<?php
   $host = 'localhost';  
   $user = 'root';   
   $pass = ''; 
   $db_name = 'sysbrone';   
   $link = mysqli_connect($host, $user, $pass, $db_name);

   if (isset($_POST["select20"])) {
    $sql = mysqli_query($link, "INSERT INTO `adresrod` (`Strana`, `Region` , `Rayon`, `NaselenPynkt`, `Ylica`, `Corpys`, `Kvartira`, `Indeks`) VALUES ('{$_POST['select20']}', '{$_POST['select10']}', '{$_POST['text11']}', '{$_POST['text22']}', '{$_POST['text33']}', '{$_POST['text44']}', '{$_POST['text55']}', '{$_POST['name200']}')");
    if ($sql) {
      echo '<p>Данные успешно добавлены в таблицу.</p>';
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
  }
?>