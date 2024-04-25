<?php
require_once '../lib/util.php';
$gobackURL = "searchForm.html";

if (!cken($_POST)) {
  header("Location: {$gobackURL}");
  exit();
}
// $_POSTが存在しないか、空の場合
if (empty($_POST)) {
  header("Location: {$gobackURL}");
  exit();
} else if ((!isset($_POST['name']) || $_POST['name'] === '')) {
  header("Location: {$gobackURL}");
  exit();
}
// --------------------------------------------
$user = 'testuser';
$password = 'testuser';
$dbName = 'testdb';
$host = 'localhost:3306';
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/tablestyle.css">
</head>
<body>
  <div>
    <?php
    $name = $_POST['name'];
    try {
      $pdo = new PDO($dsn, $user, $password);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
      $sql = "SELECT * FROM member WHERE name LIKE '%{$name}%'";
      $stm = $pdo->prepare($sql);
//       $stm->bindValue(':name', "%{$name}%", PDO::PARAM_STR);
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);

      if (count($result) > 0) {
        echo "名前に「", h($name), "」が含まれているレコード";
        echo "<table>";
        echo "<thead><tr>";
        echo "<th>ID</th>";
        echo "<th>名前</th>";
        echo "<th>年齢</th>";
        echo "<th>性別</th>";
        echo "</tr></thead>";
        echo "<tbody>";
        foreach ($result as $row) {
          echo "<tr>";
          echo "<td>", h($row['id']), "</td>";
          echo "<td>", h($row['name']), "</td>";
          echo "<td>", h($row['age']), "</td>";
          echo "<td>", h($row['sex']), "</td>";
          echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
      } else {
        echo "名前に「", h($name), "」は見つかりませんでした。";
      }
    } catch (Exception $e) {
      echo '<span class="error">エラーがありました。</span>';
      echo $e->getMessage();
    }
    ?>
    <hr>
    <p><a href="<?php echo $gobackURL ?>">戻る</a></p>
  </div>
</body>
</html>