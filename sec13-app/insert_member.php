<?php
require_once 'lib/util.php';
require_once 'lib/db_functions.php';
$gobackURL = 'insertform.php';

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
require_once 'common/header.php';
?>
<div class="main-content wrapper">
  <section>
    <h2>新規登録</h2>
    <?php
    $name = $_POST['name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $person = ['name' => $name, 'age' => $age, 'sex' => $sex];
    $result = create($person);

    if ($result) {
      echo '<p>データを登録しました。</p>';
    } else {
      echo '<span class="error">データを追加できませんでした。</span>';
    }
    ?>
    <hr>
    <p><a href="/">一覧へ</a></p>
  </section>
  <?php require_once 'common/aside.php'; ?>
</div><!-- /.main-content -->

<?php require_once 'common/footer.php';
