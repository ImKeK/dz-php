<?php
function arithmeticOperation($num1, $num2, $operation) {
    switch ($operation) {
        case 'add':
            return $num1 + $num2;
        case 'subtract':
            return $num1 - $num2;
        case 'multiply':
            return $num1 * $num2;
        case 'divide':
            return $num2 != 0 ? $num1 / $num2 : 'Ошибка: деление на ноль';
        default:
            return 'Неизвестная операция';
    }
}
function mathOperation($arg1, $arg2, $operation) {
    return arithmeticOperation($arg1, $arg2, $operation);
}

// Пример использования
$result = mathOperation(10, 5, 'add'); // 15
echo "Результат: " . $result . "<br>";
?>