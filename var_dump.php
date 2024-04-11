<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<pre>

    <body>
        <?php
        $msg = "おはよう";
        $colors = ["red", "blue", "green"];
        $now = new DateTime();
        $tokuten = 45;
        $isPass = ($tokuten > 80);
        $userName;

        // 変数の内容を出力
        var_dump($msg);
        var_dump($colors);
        var_dump($now);
        var_dump($tokuten);
        var_dump($isPass);
        var_dump($userName);
        ?>
</body>
</pre>

</html>