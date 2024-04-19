<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div>
    <?php
    require_once('../lib/util.php');
    if (!cken($_POST)) {
      $err = "Encoding Error! The expected encoding is UTF-8";
      exit($err);  // アプリの終了
    }
    ?>
    <?php
    $isError = false;
    if (isset($_POST['name'])) {
      $name = trim($_POST['name']);
      if ($name === "") {
        $isError = true;
      }
    } else {
      $isError = true;
    }
    ?>
    <?php if ($isError): ?>
      <span class="error">名前を入力してください。</span>
      <form method="post" action="nameCheckForm.php">
        <input type="submit" value="戻る">
      </form>
    <?php else: ?>
      <span>
        こんにちは、<?php echo h($name); ?>さん。
      </span>
    <?php endif; ?>
  </div>
</body>
</html>