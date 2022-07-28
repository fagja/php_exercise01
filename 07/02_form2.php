<?php

$score = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score = $_POST['score'];
    if (empty($score)) {
        $err_msg = '点数が入力されていません。';
    }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>埋め込み</title>
</head>

<body>
    <!-- //ここにコードを追記 -->
    <?php if (empty($score)) : ?>
        <h2>点数を入力してください</h2>
        <ul>
            <?php if ($err_msg) : ?>
                <li><?= $err_msg ?></li>
            <?php endif; ?>
        </ul>
    <?php elseif ($score >= 60) : ?>
        <h2>合格です</h2>
    <?php elseif ($score < 60) : ?>
        <h2>不合格です</h2>
    <?php endif; ?>
    <!-- //ここにコードを追記 -->

    <form action="" method="post">
        <input type="number" name="score">
        <input type="submit" value="送信">
    </form>
</body>

</html>
<!-- 
点数が60以上の場合、 合格 と出力
点数が60未満の場合、 不合格 と出力 -->
