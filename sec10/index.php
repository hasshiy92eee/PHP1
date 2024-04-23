<?php
session_start();
if (isset($_SESSION['err'])) {
  $err = $_SESSION['err'];
  $_SESSION['err'] = '';
} else {
  $err = '';
}
?>
<?php require_once 'header.php';?>

<div class="error"><?php echo $err; ?></div>
<form action="login.php" method="post">
  ID:<input type="text" name="id"><br>
  パスワード:<input type="password" name="pass"><br>
  <input type="submit" value="ログイン">
</form>

<?php require_once 'footer.php';
