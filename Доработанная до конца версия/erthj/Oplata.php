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

//Запрос на первую выгрузку:
if(isset($_POST["name"])){
  
    $name = $_POST["name"];
}

echo "<table border='1'>
 <tr>
  <th>NomerCheta</th>
  <th>BIK</th>
  <th>PolnNaimBanka</th>
  <th>KorrespondChet</th>
  <th>INN</th>

 </tr>";
 $result_select=mysqli_query($link,"select NomerCheta,BIK,PolnNaimBanka, KorrespondChet,INN from oplata ");
 
 
 while($row = mysqli_fetch_array($result_select)){

  $ID_Lager=$row['NomerCheta'];
  $Opisanie=$row['BIK'];
  $TipLagerya=$row['PolnNaimBanka'];
  $KorrespondChet=$row['KorrespondChet'];
  $INN=$row['INN'];



  echo "<tr><td>$ID_Lager</td><td>$Opisanie</td><td>$TipLagerya</td><td>$KorrespondChet</td><td>$INN</td>";
  
  }

echo "</table>";




?>