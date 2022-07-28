<?php

$name = '';
$tel = '';
$email = '';
$item_key = '';
$msg = '';
$err_msgs = [];

$ask1 = '氏名';
$ask2 = '電話番号';
$ask3 = 'メールアドレス';
$ask4 = '購入するもの';

$base_err = 'を入力して下さい';

$items = ['バッグ', '靴', '時計', 'ネックレス', 'ピアス'];

// コードを追記
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $item_key = $_POST['purchase'];

    if (empty($name)) {
        $err_msgs[] = $ask1 . $base_err;
    }

    if (empty($tel)) {
        $err_msgs[] = $ask2 . $base_err;
    }

    if (empty($email)) {
        $err_msgs[] = $ask3 . $base_err;
    } else {
        $msg = "{$ask1}:{$name}";
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
    <title>04_form2</title>
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
            <input type="text" name="name" value=<?= $name ?>><br>
            <label for="tel">電話番号</label><br>
            <input type="text" name="tel" value=<?= $tel ?>><br>
            <label for="email">メールアドレス</label><br>
            <input type="text" name="email" value=<?= $email ?>><br>
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
    <?php if (!empty($msg)) : ?>
        <h3>以下の内容が送信されました。</h3>
        <?= $msg ?>
    <?php endif; ?>
    <!-- // コードを追記 -->

</body>

</html>
