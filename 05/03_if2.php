<?php

$foods = [
    '朝食' => 'パン',
    '昼食' => 'うどん',
    '夕食' => 'ライス'
];

// ここに処理を記述
echo '私は、' . PHP_EOL;

foreach ($foods as $when => $food) {
    echo "{$when}に{$food}" . PHP_EOL;
}

echo 'を食べます' . PHP_EOL;


// 私は、
// 朝食にパン
// 昼食にうどん
// 夕食にライス
// を食べます
