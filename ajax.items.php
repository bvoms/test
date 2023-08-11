<?php
include 'db.php';
 
$articles = array(); // массив для результата выборки записей
 
// простая проверка переменной
if (isset($_POST['start']) && is_numeric($_POST['start'])){
 
    $start = $_POST['start']; // точка старта выборки
 
    // получаем 10 записей начиная с точки старта
    $res = mysqli_query($db, "SELECT * FROM `noros` ORDER BY `id` DESC LIMIT {$start}, 10");
    while ($row = mysqli_fetch_assoc($res)){
        $articles[] = $row;
    }
 
}
 
// Превращаем массив статей в json-строку для передачи через Ajax-запрос
echo json_encode($articles);
?>