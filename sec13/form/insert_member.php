<?php
require_once '../lib/util.php';
$gobackURL = 'insertform.html';

if (!cken($_POST)) {
  header("Location: {$gobackURL}");
  exit;
}

$errors = [];
if (!isset($_POST['name']) || $_POST['name'] === '') {
  $errors[] = "名前が空です。";
}
if (!isset($_POST['age']) || !ctype_digit($_POST['age'])) {
  $errors[] = "年齢に数値を入れてください。";
}
$array_sex = ["男", "女"];
$sex = $_POST['sex'];
if (!isset($_POST['sex']) || !in_array($sex, $array_sex)) {
  $errors[] = "性別が男または女ではありません。";
}

if (count($errors) > 0) {
  echo '<ol class="error">';
  foreach ($errors as $value) {
    echo "<li>", $value, "</li>";
  }
  echo '</ol>';
  echo "<hr>";
  echo "<a href='{$gobackURL}'>戻る</a>";
  exit();
}
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
  $age = $_POST['age'];
  $sex = $_POST['sex'];
  try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO member (name, age, sex) " . 
            " VALUES (:name, :age, :sex)";
    $stm = $pdo->prepare($sql);
    $stm->bindValue(':name', $name, PDO::PARAM_STR);
    $stm->bindValue(':age', $age, PDO::PARAM_INT);
    $stm->bindValue(':sex', $sex, PDO::PARAM_STR);
    $result = $stm->execute();
    if ($result) {
      $sql = "SELECT * FROM member";
      $stm = $pdo->prepare($sql);
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);

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
      echo '<span class="error">データを追加できませんでした。</span>';
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

