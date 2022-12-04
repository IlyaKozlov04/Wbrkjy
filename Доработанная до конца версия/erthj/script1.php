<?php
  $host = 'localhost';  
  $user = 'root';   
  $pass = ''; 
  $db_name = 'sysbrone';   
  $link = mysqli_connect($host, $user, $pass, $db_name); 
  
  if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
  }
  if(isset($_POST['example_submit'])) { echo '<p>Данные успешно добавлены в таблицу.</p>'; }


  if (isset($_POST["Price"])) {
    $sql = mysqli_query($link, "INSERT INTO `svedeniaorodit` (`Status`, `Grazhdanstvo`,`FIO`,`Birthday`,`Document`,`SNILS`,`NumberTelephone`) VALUES ('{$_POST['Price']}', '{$_POST['selector']}','{$_POST['Name']}','{$_POST['DATA']}','{$_POST['selector1']}','{$_POST['text']}','{$_POST['text1']}')");
    if ($sql) {
      echo '<p>Данные успешно добавлены в таблицу.</p>';
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
  }
  
  
  
?>