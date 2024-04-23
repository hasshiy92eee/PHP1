<?php
require_once '../lib/util.php';
$title = "計算ページ";
require_once '../common/header.php';
?>
<?php
cken_check($_POST);
?>
<?php
$errors = [];
if (isset($_POST['mile'])) {
  $mile = trim($_POST['mile']);
  if (is_numeric($mile)) {
    $isNum = true;
  } else {
    $mile = '';
    $errors[] = '数値を入力してください';
  }
} else {
  $isNum =  false;
  $mile = "";
}
?>
<form method="post" action="">
  <ul>
    <li>
      <label>マイルを km に換算：
        <input type="text" name="mile" 
              value="<?php echo h($mile);?>">
      </label>
      <?php if (count($errors) > 0){
        print_error($errors);
      }
      ?>
    </li>
    <li><input type="submit" value="計算する"></li>
  </ul>
</form>
<?php
if ($isNum) {
  echo "<hr>";
  $kilometer = $mile * 1.609344;
  echo h($mile), "マイルは", h($kilometer), "km です。";
}
require_once '../common/footer.php';
