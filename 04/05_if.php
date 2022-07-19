<?php

echo '$numの値を入力して下さい: ';
$num = trim(fgets(STDIN));

// ここに処理を記述
for ($i = 2; $i < $num; $i++) {
    if ($num < 2) {
        echo '素数ではありません';
    } elseif ($num % $i == 0) {
        echo '素数ではありません';
    } else {
        echo '素数です';
    }
}


// $numが素数であれば 素数です と出力
// $numが素数でない時は 素数ではありません と出力(1も素数ではありません)
