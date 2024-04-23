<?php
session_start();
require_once 'lib/util.php';
// $_SESSIONのチェック省略
$id = $_SESSION['id'];
?>
<?php require_once 'header.php';?>

    <p><?php echo h($id); ?>さん、ログイン中
        <a href="logout.php">ログアウト</a></p>
    <main>
      <h2>メイン処理</h2>
      <p>ここにメイン処理を書きます。</p>
    </main>
    
<?php require_once 'footer.php';

