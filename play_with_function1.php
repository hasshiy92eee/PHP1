<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>関数で遊ぶ</title>
</head>
<body>
    <h1>ボタンをクリックして背景色を変える</h1>

    <?php
    // 背景色を変えるボタンのHTMLを出力
    function setBgcolor() {
        echo '<button onclick="changeBg(\'red\')" style="font-size: 24px;">赤に変更</button>';
        echo '<button onclick="changeBg(\'blue\')" style="font-size: 24px;">青に変更</button>';
    }

    // 背景色を変更する関数
    function changeBg($color) {
        echo "<script>document.body.style.backgroundColor = '$color';</script>";
    }

    // ボタンを表示する
    setBgcolor();
    ?>
</body>
</html>
