<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if, for文を学習します</title>
</head>
<body>
<h1>PHP,JavaScriptは暗黙型変換、弱い型付けです。</h1>
    <?php
    if (true && false) {
        $x = 10 * 10;
        echo $x . '<br/>';
    }
    echo 'if文学習中です<br/>';

    // 比較演算子の修正と var_dump の使用
    var_dump(1 <= 2);
    echo '<br/>';
    var_dump(2 <= 1);
    echo '<br/>';
    var_dump(1 == 1);
    echo '<br/>';
    var_dump(1 != 2);
    echo '<br/>';
    var_dump(1 != 2);
    echo '<br/>';
    echo '<p style="color: red;">下は暗黙型変換の例(基本的には型を揃えないとバグの要因になるので注意)</p>';
    var_dump(1 <= 'a');
    echo '<br/>';
    var_dump(1 == '2');
    echo '<br/>';
    echo '<p style="color: red;">if文をもう少し詳しくやります<p/>';
    $y = '余事象';
    if (is_numeric($y)) {
        if ($y >= 0) {
            echo 'true';
        } else {
            echo 'false';
        }
    } else {
        echo '条件を全て満たせば網羅的、互いに競合するもので、一つだけ選択肢が成り立つことを排他的,<br/>
        網羅的、排他的、各条件の反対同士の関係を余事象の関係にあたる';
    }
    
    ?>
</body>
</html>
