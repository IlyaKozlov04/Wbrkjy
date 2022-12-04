<?php
   $host = 'localhost';  
   $user = 'root';   
   $pass = ''; 
   $db_name = 'sysbrone';   
   $link = mysqli_connect($host, $user, $pass, $db_name);

   if (isset($_POST["select201"])) {
    $sql = mysqli_query($link, "INSERT INTO `adresrodfact` (`Strana`, `Region` , `Rayon`, `NasselenPynkt`, `Ylica`, `Corpys`, `Kvartira`, `Indeks`) VALUES ('{$_POST['select201']}', '{$_POST['select101']}', '{$_POST['text111']}', '{$_POST['text221']}', '{$_POST['text331']}', '{$_POST['text441']}', '{$_POST['text551']}', '{$_POST['name2001']}')");
    if ($sql) {
      echo '<p>Данные успешно добавлены в таблицу.</p>';
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
  }
?>