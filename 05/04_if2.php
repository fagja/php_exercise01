<?php

echo '血液型を入力して下さい: ';
$blood_type = trim(fgets(STDIN));

// ここに処理を記述

echo '$hourの値を入力して下さい: ';
$hour = trim(fgets(STDIN));

switch ($blood_type) {
    case '6':
        echo 'おはようございます' . PHP_EOL;
        break;
    case '12':
        echo 'こんにちは' . PHP_EOL;
        break;
    case '18':
        echo 'こんばんは' . PHP_EOL;
        break;
    default:
        echo 'どうも' . PHP_EOL;
        break;
}
