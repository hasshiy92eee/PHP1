<?php
class Staff {

  function __construct(public string $name, public int $age) {
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
    $hana = new Staff(name:'花', age:21);
    $taro = new Staff(name:'太郎', age:35);
    $hana->hello();
    $taro->hello()
    ?>
  </pre>
</body>
</html>