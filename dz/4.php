<?php
function power($val, $pow) {
    if ($pow == 0) {
        return 1; // любое число в степени 0 равно 1
    } elseif ($pow < 0) {
        return 1 / power($val, -$pow); // обработка отрицательных степеней
    }
    return $val * power($val, $pow - 1);
}

// Пример использования
echo power(2, 3); // 8

?>