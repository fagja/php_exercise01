<?php

echo '$numの値を入力して下さい: ';
$num = trim(fgets(STDIN));

if ($num < 2) {
    $msg = '素数ではありません';
} else {
    for ($i = 2; $i <= $num; $i++) {
        if ($num % $i == 0 && $num != $i) {
            $msg = '素数ではありません';
            break;
        } else {
            $msg = '素数です';
        }
    }
}

echo "{$num}は{$msg}";

// $numが素数であれば 素数です と出力
// $numが素数でない時は 素数ではありません と出力(1も素数ではありません)
