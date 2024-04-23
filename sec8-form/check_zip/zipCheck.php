<?php 
require_once '../lib/util.php';

cken_check($_POST);

$errors = [];
if (isset($_POST['zip'])) {
  $zip = trim($_POST['zip']);
  $pattern = "/^[0-9]{3}-[0-9]{4}$/";
  if (!preg_match($pattern, $zip)) {
    $errors[] = "郵便番号を正しく入力してください";
  }
} else {
  $errors[] = "郵便番号を正しく入力してください";
}
?>
<!-- ここから画面出力 -->
<?php
$title = "フォーム入力チェック";
require_once '../common/header.php';
?>
<?php
if (count($errors) > 0) {
  print_error($errors);
} else {
  $zip = h($zip);
  echo "郵便番号は{$zip}です。";
}
?>
<?php moveBtn("zipCheckForm.php", "戻る") ?>
<?php require_once '../common/footer.php';
