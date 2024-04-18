<?php
require_once "Staff.php";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre>
    <?php
    $hana = new Staff(name:'花', age:21);
    $taro = new Staff(name:'太郎', age:35);
    $hana->hello();
    $taro->hello()
    ?>
  </pre>
</body>
</html>
