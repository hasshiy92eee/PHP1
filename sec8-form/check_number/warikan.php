<?php
require_once('../common/header.php');
require_once('../lib/util.php');
cken_check($_POST);
$errors = [];
?>
<?php
if (isset($_POST['goukei'])) {
  $goukei = $_POST['goukei'];
  if (!ctype_digit($goukei)) {  // 整数ならtrue
    $errors[] = "合計金額を整数で入力してください";
  }
} else {
  $errors[] = "合計金額が未設定";
}
if (isset($_POST['ninzu'])) {
  $ninzu = $_POST['ninzu'];
  if (!ctype_digit($ninzu)) {
    $errors[] = "人数を整数で入力してください";
  } else if ($ninzu === 0) {
    $errors[] = "0人では割れません";
  }
} else {
  $errors[] = "人数が未設定";
}
?>
<?php
if (count($errors) > 0) {
  echo '<ol class="error">';
  foreach ($errors as $value) {
    echo "<li>{$value}</li>";
  }
  echo "</ol>";
?>
<form action="warikanForm.php" method="post">
  <ul>
    <li><input type="submit" value="もどる"></li>
  </ul>
</form>
<?php
} else {
  $amari = $goukei % $ninzu;
  $price = ($goukei - $amari) / $ninzu;
  $goukei_fmt = number_format($goukei);
  $price_fmt = number_format($price);
  echo h($goukei_fmt), "円を", h($ninzu), "人で割り勘します。<br>";
  echo "一人当たり", h($price_fmt), "円を支払えば、";
  echo "不足分は", h($amari), "円です。";
}
?>



