<?php
$title = "郵便番号の入力";
require_once '../common/header.php'; 
?>

<form action="zipCheck.php" method="post">
  <ul>
    <li><label>郵便番号：<input type="text" name="zip"></label></li>
    <li><input type="submit" value="送信する"</li>
  </ul>
</form>

<?php require_once '../common/footer.php';
