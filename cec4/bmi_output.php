<html>

<head>

</head>

<body>

    <?php
    /**
     * BMIを判定して結果を表示する関数
     *
     *  $h 身長(cm)
     *  $w 体重(kg)
     */
    function judgement($h, $w)
    {
        $bmi = $w / (($h / 100) * ($h / 100));

        if ($bmi < 18.5) {
            $type = "<span style='color: blue; font-size: 34px;'>やせ型です(*'ω'*)</span>";
        } elseif ($bmi < 25) {
            $type = "<span style='color: yellow; font-size: 32px;'>普通体重です(*^^*)</span>";
        } else {
            $type = "<span style='color: red; font-size: 42px; margin: 0 auto;'>肥満（軽度）です( ﾟДﾟ)!痩せましょう。</span>";
        }

        return $type;
    }


    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $type = judgement($height, $weight);
    echo "<p>" . $type . "</p>";
    ?>

    <p>身長: <?php echo $height; ?> cmです</p>
    <p>体重: <?php echo $weight; ?> kgです</p>

    <button><a href="bmi_input.php">ホームに戻る</a></button>

</body>

</html>