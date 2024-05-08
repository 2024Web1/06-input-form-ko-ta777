<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input.php</title>
</head>
<body>
    <h4>0J02004 片岡幸太</h4>
    <?php
    echo '<P>' . $_POST['name'] . 'さんの年齢は' . $_POST['age'] . '歳です。</p>';
    ?>
    <a href="'input.html">戻る</a>
</body>
</html>