<?php
$cities = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Скопин', 'Шацк']
];

foreach ($cities as $region => $cityList) {
    echo "$region: " . implode(', ', $cityList) . "<br>";
}
?>