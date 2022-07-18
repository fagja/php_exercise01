<?php

echo '$scoreの値を入力して下さい: ';
$score = trim(fgets(STDIN));

// ここに処理を記述
if ($score >= 60) {
    echo '合格です';
} elseif ($score >= 30) {
    echo '追試です';
} else {
    echo '不合格です';
}


// $scoreが60以上なら「合格です」と出力
// $scoreが30以上60未満なら「追試です」と出力
// $scoreが30未満なら「不合格です」と出力
