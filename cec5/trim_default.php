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
$msg = $_POST['msg'];
$result = trim(mb_convert_kana($msg, "s"));
echo "処理前：" . PHP_EOL;
echo "[{$msg}]" . PHP_EOL;
echo "処理後：" . PHP_EOL;
echo "[{$result}]" . PHP_EOL;
?>
  </pre>
<p><a href="input.php">modoru</a></p>
</body>
</html>
