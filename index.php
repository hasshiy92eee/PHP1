<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo '<h1>Hello World!</h1>';

    echo '<ul>
            <li>リンゴ<\li>
            <li>バナナ<\li>
         <\ul>'

    echo '<style>

            body {
                background-color: #333;
            }

            h1 {
                color: red;
                font-size: 42px;
            }
         </style>';


                $D = 'モンキー・D・ルフィ';
                echo "<span style='color: red;'>$D</span>";

                $DD = 'マーシャル・D・ティーチ';
                echo "<div style='color: red;'>$DD</div>";

                $MDT = $D . $DD ='モンキー・D・ドラゴン';
                echo "<div style='color: red;'>$MDT<div>";


         
    ?>
</body>
</html>
