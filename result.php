<?php

$year = $_POST['year']; 
$month = $_POST['month']; 
$day = $_POST['day']; 

$dateString = $year . '-' . $month . '-' . $day;

// Преобразование строки даты во временную метку
$timestamp = strtotime($dateString);

// Получение дня недели по временной метке
$dayOfWeek = date("l", $timestamp);

echo "Вы родились в " . $dayOfWeek;
?>