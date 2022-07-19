<?php

$poket_money = 1000;
$fund_raising = 101;

// // ここに処理を記述
// <?php

// $poket_money = 1000;
// $fund_raising = 101;

// // ここに処理を記述

// echo "あなたの所持金は{$poket_money}円です｡" . PHP_EOL;
// $msg = null;

// while ($poket_money >= 0) {
//     echo $msg;
//     $poket_money -= $fund_raising ;
//     $msg = "{$fund_raising}円募金しました｡".PHP_EOL."残り残高は{$poket_money}円です｡".PHP_EOL ;
// }


// echo "あなたはこれ以上募金できません｡" . PHP_EOL;



$msg = "あなたの所持金は{$poket_money}円です｡" . PHP_EOL;

$j = 0;
do {
    echo $msg;
    $poket_money -= $fund_raising;
    $msg = "{$fund_raising}円募金しました｡" . PHP_EOL . "残り残高は{$poket_money}円です｡" . PHP_EOL;
} while ($poket_money >= 0);

echo "あなたはこれ以上募金できません｡" . PHP_EOL;
