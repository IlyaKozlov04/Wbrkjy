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
if(isset($_POST["CmeniPoSesonam"])){
  
    $CmeniPoSesonam = $_POST["CmeniPoSesonam"];
}
if(isset($_POST["DataNachalo"])){
  
    $DataNachalo = $_POST["DataNachalo"];
}
if(isset($_POST["DataConec"])){
  
    $DataConec = $_POST["DataConec"];
}

if(isset($_POST["TipLagerya"])){
  
    $TipLagerya = $_POST["TipLagerya"];
}
echo "<table border='1'>
 <tr>
  <th>CmeniPoSesonam</th>
  <th>DataNachalo</th>
  <th>DataConec</th>
  <th>TipLagerya</th>
  <th>Price</th>
 </tr>";
 if ( $DataNachalo=="" ||$DataConec==""){$result_select=mysqli_query($link,"select osninfolagere.CmeniPoSesonam,smeni.DataNachalo,smeni.DataConec, osninfolagere.TipLagerya, smeni.Price from smeni join osninfolagere on smeni.ID_Lager=osninfolagere.ID_Lager where CmeniPoSesonam ='$CmeniPoSesonam' and TipLagerya='$TipLagerya'");}
 else{$result_select=mysqli_query($link,"select osninfolagere.CmeniPoSesonam,smeni.DataNachalo,smeni.DataConec, osninfolagere.TipLagerya, smeni.Price from smeni join osninfolagere on smeni.ID_Lager=osninfolagere.ID_Lager where CmeniPoSesonam ='$CmeniPoSesonam' and DataNachalo='$DataNachalo' and DataConec='$DataConec' and TipLagerya='$TipLagerya'");
 }
 
 while($row = mysqli_fetch_array($result_select)){

  $ID_Lager=$row['CmeniPoSesonam'];
  $Opisanie=$row['DataNachalo'];
  $TipLagerya=$row['DataConec'];
  $Adres=$row['TipLagerya'];
  $Price=$row['Price'];


  echo "<tr><td>$ID_Lager</td><td>$Opisanie</td><td>$TipLagerya</td><td>$Adres</td><td>$Price</td>";
  
  }

echo "</table>";
$hello = $Price;
require_once('Кабинет-для-родителя.php');


?>