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

if(isset($_POST["name"])){
  
    $name = $_POST["name"];
}
if(isset($_POST["tb"])){
  
    $tb1 = $_POST["tb"];
}
$filename =$name . ".xls"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
if ($tb1=="adresreb") $user_query = mysqli_query($link,"select * from adresreb");
if ($tb1=="adresrod") $user_query = mysqli_query($link,"select * from adresrod");
if ($tb1=="infrostryktyralagerya") $user_query = mysqli_query($link,"select * from infrostryktyralagerya");
if ($tb1=="oplata") $user_query = mysqli_query($link,"select * from oplata");
if ($tb1=="osninfolagere") $user_query = mysqli_query($link,"select * from osninfolagere");
if ($tb1=="passportgrazhnerf") $user_query = mysqli_query($link,"select * from passportgrazhnerf");
if ($tb1=="passportgrazhnerfreb") $user_query = mysqli_query($link,"select * from passportgrazhnerfreb");
if ($tb1=="passportgrazhrf") $user_query = mysqli_query($link,"select * from passportgrazhrf");
if ($tb1=="products") $user_query = mysqli_query($link,"select * from products");
if ($tb1=="passportgrazhrfreb") $user_query = mysqli_query($link,"select * from passportgrazhrfreb");
if ($tb1=="smeni") $user_query = mysqli_query($link,"select * from smeni");
if ($tb1=="svedeniaorebenke") $user_query = mysqli_query($link,"select * from svedeniaorebenke");
if ($tb1=="svedeniaorodit") $user_query = mysqli_query($link,"select * from svedeniaorodit");
if ($tb1=="svidorozhdnerf") $user_query = mysqli_query($link,"select * from svidorozhdnerf");
if ($tb1=="svidorozhdrf") $user_query = mysqli_query($link,"select * from svidorozhdrf");
if ($tb1=="users") $user_query = mysqli_query($link,"select * from users");
// Write data to file
$flag = false;
while ($row = mysqli_fetch_assoc($user_query)) {
    if (!$flag) {
        // display field/column names as first row
        echo implode("\t", array_keys($row)) . "\r\n";
        $flag = true;
    }
    echo implode("\t", array_values($row)) . "\r\n";
}


//Запрос на первую выгрузку:


if(isset($_POST["nazvSmeni"])){
  
    $nazvSmeni = $_POST["nazvSmeni"];
}
if(isset($_POST["dataNach"])){
  
    $dataNach = $_POST["dataNach"];
}

if(isset($_POST["dataConec"])){
  
    $dataConec = $_POST["dataConec"];
}

$filename2 =$name . "FIRST   .xls"; // File Name
header("Content-Disposition: attachment; filename=\"$filename2\"");
header("Content-Type: application/vnd.ms-excel");
$user_query = mysqli_query($link,"select * from Smeni where NazvCmeni ='$nazvSmini' and DataNachalo='$dataNach' and DataConec='$dataConec'");
$flag = false;
while ($row = mysqli_fetch_assoc($user_query)) {
    if (!$flag) {
        // display field/column names as first row
        echo implode("\t", array_keys($row)) . "\r\n";
        $flag = true;
    }
    echo implode("\t", array_values($row)) . "\r\n";
}
?>