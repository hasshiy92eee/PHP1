<?php
$age = $_POST['age'];
$age = floor($age);
if ($age < 13) {
  $price = 0;
} else if ($age <= 15) {
  $price = 500;
} else if ($age <= 19) {
  $price = 1000;
} else {
  $price = 2000;
}
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
    <?php echo "{$age}歳なので{$price}円です。"; ?>
  </p>
  <p><a href="input_age.php">もどる</a></p>
</body>
</html>

