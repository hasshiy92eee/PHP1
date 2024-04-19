<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
      <?php
        require_once('lib/util.php');
        $myCode = "<h2>テスト1</h2>";
        $myArray = [
          "a" => "<p>赤</p>",
          "b" => "<script>alert('hello')</script>"
        ];
        echo '$myCodeの値: ', h($myCode);
        echo '<br><br>';
        echo '$myArrayの値: <br>';
        foreach ($myArray as $k => $v) {
          echo h($k) . " : " . h($v) . "<br>";
        }
      ?>
  </div>
</body>
</html>