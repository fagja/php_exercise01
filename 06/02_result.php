<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo htmlspecialchars("私の名前は、{$_POST['name']}です。", ENT_QUOTES, 'UTF-8');
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
    <p></p>
    <p></p>
    <a href="02_form.php">戻る</a>
</body>

</html>
