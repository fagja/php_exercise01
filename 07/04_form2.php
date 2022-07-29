<?php

$labels = ["氏名", '電話番号', $ask2 = 'メールアドレス', '購入するもの'];
$inputs = ['name', 'tel', 'email', 'purchase'];

for ($i = 0; $i <= 3; $i++) {
    ${'answer' . $i} = '';
    ${'brank'  . $i} = '';
    ${'ask'    . $i} = $labels[$i];
    ${'diff'   . $i} = strlen($ask2) - strlen(${'ask' . $i});
}

$brank2  = ' ';
$base_err = 'を入力して下さい';

$msgs     = [];
$err_msgs = [];

$items    = ['バッグ', '靴', '時計', 'ネックレス', 'ピアス'];

// コードを追記

for ($i = 0; $i <= 3; $i++) {
    for ($k = 0; $k < ${'diff' . $i}; $k++) {
        ${'brank' . $i} .= '&nbsp;';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    for ($i = 0; $i <= 3; $i++) {
        ${'answer' . $i} = $_POST[$inputs[$i]];
        if (empty(${'answer' . $i})) {
            $err_msgs[] = ${'ask' . $i} . $base_err;
        } else {
            $msgs[] = "{${'ask' .$i}}:{${'brank' .$i}}{${'answer' .$i}}";
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
            <?php for ($i = 0; $i <= 2; $i++) : ?>
                <label for=""><?= $labels[$i] ?></label><br>
                <input type="text" name=<?= $inputs[$i] ?> value=<?= ${'answer' . $i} ?>><br>
            <?php endfor; ?>

        </div>
        <h3>購入するものを選択してください</h3>
        <div class="select">
            <select name="purchase" id="">
                <?php foreach ($items as $item) : ?>
                    <option value=<?= $item ?>><?= $item ?></option>
                <?php endforeach; ?>
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
