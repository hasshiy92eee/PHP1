<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    textarea {
      width: 400px;
      height: 200px;
    }
  </style>
</head>
<body>
  <h1>タブなどを入力</h1>
  <form action="htmlspecialchars.php" method="post">
    <textarea name="msg"></textarea>
    <input type="submit" value="送信">
  </form>
  <script src="input_tab.js"></script>
</body>
</html>