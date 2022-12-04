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
$user_query = mysqli_query($link,"select * from Smeni where NazvCmeni ='$nazvSmeni' and DataNachalo='$dataNach' and DataConec='$dataConec'");
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