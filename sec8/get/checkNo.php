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
      $no = $_GET['no'];
      $nolist = [3, 5, 7, 8, 9];
      if (in_array($no, $nolist)) {
        echo "{$no}はありました";
      } else {
        echo "{$no}は見つかりません";
      }
      ?>
      <hr>
      <a href="checkNoForm.php">もどる</a>
  </div>
</body>
</html>