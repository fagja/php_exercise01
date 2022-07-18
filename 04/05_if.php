<?php

echo '$numの値を入力して下さい: ';
$num = trim(fgets(STDIN));
$number = trim(fgets(STDIN));
$numbers = trim(fgets(STDIN));



// ここに処理を記述
for ($i = 2; $i <= 10000; $i++) {
    if ($num < 2) {
        $msg = '素数ではありません';
    } elseif ($num % $i == 0 && $num != $i) {
        $msg = '素数ではありません';
    } else {
        $msg = '素数です';
    }
}






for ($a = 2; $a < 10000; $a++) {
    # code...
}

for ($b = 2; $b < 10000; $b++) {
    # code...
}

if ($number == $a * $b) {
    # code...
}





for ($i = 2; $i < $numbers; $i++) {
    if ($numbers < 2) {
        echo '素数ではありません';
    } elseif ($numbers % $i == 0) {
        echo '素数ではありません';
    } else {
        echo '素数です';
    }
}

echo $msg;

// $numが素数であれば 素数です と出力
// $numが素数でない時は 素数ではありません と出力(1も素数ではありません)
