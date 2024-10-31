<?php
function getCurrentTime() {
    $hours = date('G');
    $minutes = date('i');

    // Определяем склонения для часов
    if ($hours % 10 == 1 && $hours % 100 != 11) {
        $hourString = "$hours час";
    } elseif (in_array($hours % 10, [2, 3, 4]) && !(in_array($hours % 100, [12, 13, 14]))) {
        $hourString = "$hours часа";
    } else {
        $hourString = "$hours часов";
    }

    // Определяем склонения для минут
    if ($minutes % 10 == 1 && $minutes % 100 != 11) {
        $minuteString = "$minutes минута";
    } elseif (in_array($minutes % 10, [2, 3, 4]) && !(in_array($minutes % 100, [12, 13, 14]))) {
        $minuteString = "$minutes минуты";
    } else {
        $minuteString = "$minutes минут";
    }

    return "$hourString $minuteString";
}

// Пример использования
echo getCurrentTime(); // Например: "22 часа 15 минут"

?>