<?php

$num1     = $_GET['num1'];
$num2     = $_GET['num2'];
$operator = $_GET['operator'];
$answer = '';

switch ($operator) {
    case 'addition':
        $operator = '+';
        $answer = $num1 + $num2;
        break;
    case 'subtraction':
        $operator = '-';
        $answer = $num1 - $num2;
        break;
    case 'multiplication':
        $operator = '*';
        $answer = $num1 * $num2;
        break;
    case 'division':
        $operator = '/';
        $answer = $num1 / $num2;
        break;
    default:
        echo '正しい演算子を指定して下さい';
        break;
}

if (!empty($answer)) {
    echo "{$num1} {$operator} {$num2}" . ' = ' . $answer;
}
