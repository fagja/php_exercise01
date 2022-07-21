<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = "私の名前は、{$_POST['name']}です。";
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?= htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') ?>
    </div>
    <p></p>
    <div>
        <a href="02_form.php">戻る</a>
    </div>
</body>

</html>
