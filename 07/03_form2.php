<?php

$score = '';
$err_msg = '';
$judge = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score = $_POST['score'];
    if (empty($score)) {
        $err_msg = '点数が入力されていません。';
    } elseif ($score >= 60) {
        $judge = '合格です';
    } else {
        $judge = '不合格です';
    }
}
if ($judge) {
    header('Location: 03_judge_ment.php?judge_ment=' . $judge);
    exit;
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
    <h2>点数を入力してください</h2>
    <ul>
        <?php if ($err_msg) : ?>
            <li><?= $err_msg ?></li>
        <?php endif; ?>
    </ul>
    <!-- //ここにコードを追記 -->
    <form action="" method="post">
        <input type="number" name="score">
        <input type="submit" value="送信">
    </form>
</body>

</html>
