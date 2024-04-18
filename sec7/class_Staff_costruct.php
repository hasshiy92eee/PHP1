<?php
class Staff {
  public string $name;
  public int $age;

  function __construct(string $name, int $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function hello() {
    if (is_null($this->name)) {
      echo "こんにちは！" . PHP_EOL;
    } else {
      echo "こんにちは、{$this->name}" . PHP_EOL;
    }
  }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre>
    <?php
    $hana = new Staff('花', 21);
    $taro = new Staff('太郎', 35);
    $hana->hello();
    $taro->hello()
    ?>
  </pre>
</body>
</html>