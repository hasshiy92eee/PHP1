<?php
  $sugaku = $_POST['sugaku'];
  $eigo = $_POST['eigo'];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p>
  <?php
  if ($sugaku >= 60) {
    if ($eigo >= 60) {
      echo "おめでとう。合格です";
    } else {
      echo "数学は合格だけどな。";
    } 
  } else {
    echo "残念、不合格です";
  }
  ?>
  </p>
  <p><a href="input_eisu.php">もどる</a></p>
</body>

</html>