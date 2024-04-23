<?php
session_start();
require_once 'lib/util.php';
// セッションの破棄 p425
$_SESSION = [];
// （ぶらうざ）PHP_SESSIONIDが存在するならば
if (isset($_COOKIE[session_name()])) {
  // セッションIDがクッキーとして保存されている場所
  $params = session_get_cookie_params();
  setcookie(session_name(), '', time()-3600, $params['path']);
}
session_destroy();
?>
<?php require_once 'header.php'; ?>

  <p>ログアウトしました</p>
  <p><a href="/">ログイン</a></p>

<?php require_once 'footer.php';
