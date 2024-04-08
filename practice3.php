<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>連想配列,for文</title>
</head>
<body>
    <?php
    // 連想配列の定義       
    $hasira = ['水柱' => ['冨岡義勇', '鱗滝左近次'],
               '蟲柱' => '胡蝶しのぶ',
               '炎柱' => '煉獄杏寿郎',
               '音柱' => '宇髄天元',
               '霜柱' => '時透無一郎',
               '恋柱' => '甘露寺蜜璃'
    ];
    // キーを使って値を出力
    $hasira['日の呼吸'] ='不明';
    echo $hasira['音柱'];
    echo '<br/>';
    echo '<br/>';

 // foreach文は、配列や連想配列の各要素を順番に取り出して処理するための構文です
 foreach ($hasira as $key => $value) {
    if (is_array($value)) {
        $valueString = implode(', ', $value);
        echo "柱: $key, 柱頭: $valueString<br>";
    } else {
        echo "柱: $key, 柱頭: $value<br>";
    }
}


   //for文の基本
   //for (初期化処理;継続条件;更新処理)
    for ($v = 0; $v < 3; $v++) {
        $count = $v + 1;
        echo $count . '回目の繰り返しです<br/>';
        echo '円舞<br/>',
             '碧羅の天<br/>',
             '烈日紅鏡<br/>',
             '灼骨炎陽<br/>',
             '陽華突<br/>',
             '日暈の龍・頭舞い<br/>',
             '斜陽転身<br/>',
             '飛輪陽炎<br/>';
        echo '<br/>';
    }

    //二重for文
    echo '<table border="1">';
    for ($i = 1; $i < 10; $i++) {
        echo '<tr>';
        for ($j = 1; $j < 10; $j++) {
            $x = $i * $j;
            echo "<td>{$i} * {$j} = {$x}</td>";
        }
        echo '</tr>';
    }
    echo '</table>';


    //break文とcontinue文
    //ループを制御するキーワードでbreakはループ中を中断するキーワード
    echo '</tr>';
    echo '</tr>';

    $arr = [12,45,22,67,5,-8,13];

    $sum = count($arr);

    $message = '含まれない';

    for ($a = 0; $a < $sum; $a++ ) {
        $value = $arr[$a];
        if($value < 0) {
            $message = '含まれます';
            break;
        }
    }

    echo $message;

    //continue文はループの処理中に処理を中断させて次のループに進めるときに使う
    echo '</tr>';

    $arr = [12,45,22,67,5,100,8,13];


    $sum =  0;

    for ($b = 0; $b < count($arr); $b++ ) {
        $value = $arr[$b];
        if($value % 2 === 1) {
            continue;
        }
        $sum += $value;
    }

    echo $sum;

    //while文

    echo '</tr>';

    $arr = [12,45,22,67,5,-8,13];

    $sum = count($arr);

    $message = '含まれない';

    $c = 0;

    while ($c < $sum) {
        $value = $arr[$c];
        if($value < 0) {
            $message = '含まれます';
            break;
        }
        $c++;
    }

    echo $message; 



?>


</body>
</html>

