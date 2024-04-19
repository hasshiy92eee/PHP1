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
    $data = "<script>alert('Virus発見!')</script>";
    $data = rawurlencode($data);
    // echo $data, '<br>', PHP_EOL;
    $url = "checkData.php";
    echo "<a href={$url}?data={$data}>送信する</a>";
    ?>
  </div>
</body>
</html>