<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo htmlspecialchars("私の名前は、{$_POST['name']}です。", ENT_QUOTES, 'UTF-8');
}
echo "<br />";
echo "<br />";
echo "<a href=" . "02_form.php" . ">戻る</a>";
