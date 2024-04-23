<?php
session_start();
require_once 'lib/util.php';
// 入力値のチェックは省略
$id = $_POST['id'];
$pass = $_POST['pass'];
if ($pass === '1111') {
  $_SESSION['id'] = $id;
} else {
  $_SESSION['err'] = "IDまたはパスワードが違います";
  header('Location: index.php');
  exit;
}
?>
<?php require_once 'header.php';?>

  <p>ようこそ <?php echo h($id); ?>さん</p>
  <p><a href="main.php">メイン処理へ</a></p>

<?php require_once 'footer.php';

