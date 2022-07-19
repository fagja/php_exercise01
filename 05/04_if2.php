<?php

echo '血液型を入力して下さい: ';
$blood_type = trim(fgets(STDIN));

// ここに処理を記述
switch ($blood_type) {
    case 'A':
        echo 'A型の方は几帳面だけど優しいらしいです！' . PHP_EOL;
        break;
    case 'B':
        echo 'B型の方は好奇心旺盛らしいです！' . PHP_EOL;
        break;
    case 'AB':
        echo 'AB型の方は先読み思考に優れた天才らしいです！' . PHP_EOL;
        break;
    case 'O':
        echo 'O型の方はおおらからしいです！' . PHP_EOL;
        break;
    default:
        echo '判定不能です！' . PHP_EOL;
        break;
}

// $blood_typeがAの場合、 A型の方は几帳面だけど優しいらしいです！ と出力
// $blood_typeがBの場合、 B型の方は好奇心旺盛らしいです！ と出力
// $blood_typeがABの場合、 AB型の方は先読み思考に優れた天才らしいです！ と出力
// $blood_typeがOの場合、 O型の方はおおらからしいです！ と出力
// $blood_typeが上記以外の場合、 判定不能です！ と出力
