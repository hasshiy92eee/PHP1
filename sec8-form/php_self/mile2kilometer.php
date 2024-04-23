<?php
require_once '../lib/util.php';
$title = "計算ページ";
require_once '../common/header.php';
?>
<?php
cken_check($_POST);
?>
<?php
if (isset($_POST['mile'])) {
  $isNum = is_numeric($_POST['mile']);
  if ($isNum) {
    $mile = $_POST['mile'];
    $error = "";
  } else {
    $mile = '';
    $error = '<span class="error">数値を入力してください</span>';
  }
} else {
  $isNum =  false;
  $mile = "";
  $error = "";
}
?>
<form method="post" action="">
  <ul>
    <li>
      <label>マイルを km に換算：
        <input type="text" name="mile" 
              value="<?php echo h($mile);?>">
      </label>
      <?php echo $error; ?>
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
