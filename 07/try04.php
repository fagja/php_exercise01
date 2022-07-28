<?php

$answer1 = '';
$answer2 = '';
$answer3 = '';
$answer4 = '';

$ask1 = '氏名';
$ask2 = '電話番号';
$ask3 = 'メールアドレス';
$ask4 = '購入するもの';

$base_err = 'を入力して下さい';

$msgs = [];
$err_msgs = [];


$items = ['バッグ', '靴', '時計', 'ネックレス', 'ピアス'];

// コードを追記
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $answer1 = $_POST['name'];
    $answer2 = $_POST['tel'];
    $answer3 = $_POST['email'];
    $answer4 = $_POST['purchase'];
    for ($i = 1; $i <= 4; $i++) {
        $asks    = 'ask'    . $i;
        $answers = 'answer' . $i;
        if (empty($$answers)) {
            $err_msgs[] = $$asks . $base_err;
        } else {
            $msgs[] = "{$$asks}:{$$answers}";
        }
    }
}
// コードを追記

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>try04</title>
</head>

<body>
    <h3>個人情報を入力してください</h3>

    <!-- // コードを追記 -->
    <?php if (!empty($err_msgs)) : ?>
        <h2>エラーメッセージ</h2>
        <ul>
            <?php foreach ($err_msgs as $err_msg) : ?>
                <li><?= $err_msg ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <!-- // コードを追記 -->

    <form action="" method="post">

        <!-- // コードを追記 -->
        <div class="input">
            <label for="name">氏名</label><br>
            <input type="text" name="name" value=<?= $answer1 ?>><br>
            <label for="tel">電話番号</label><br>
            <input type="text" name="tel" value=<?= $answer2 ?>><br>
            <label for="email">メールアドレス</label><br>
            <input type="text" name="email" value=<?= $answer3 ?>><br>
        </div>
        <h3>購入するものを選択してください</h3>
        <div class="select">
            <select name="purchase" id="">
                <option value="バッグ">バッグ</option>
                <option value="靴">靴</option>
                <option value="時計">時計</option>
                <option value="ネックレス">ネックレス</option>
                <option value="ピアス">ピアス</option>
            </select>
        </div>
        <!-- // コードを追記 -->
        <br>
        <div class="submit">
            <input type="submit" value="送信">
        </div>
    </form>

    <!-- // コードを追記 -->
    <?php if (empty($err_msgs) && $msgs) : ?>
        <h3>以下の内容が送信されました。</h3>
        <?php foreach ($msgs as $msg) : ?>
            <?= $msg ?><br>
        <?php endforeach; ?>
    <?php endif; ?>
    <!-- // コードを追記 -->

</body>

</html>


<!-- $brank = round((strlen($info3) - strlen($info1)) / 2);
echo $brank; -->
