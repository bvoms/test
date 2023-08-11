<?php
 
// параметры подключения к бд
$db_host = "localhost";
$db_name = "noros";
$db_user = "root";
$db_pass = "";
 
// соединение с бд
$db = mysqli_connect ($db_host, $db_user, $db_pass, $db_name) or die ("Невозможно подключиться к БД");
mysqli_query ($db, 'set character_set_results = "utf8"'); // задаем кодировку данных
 
?>