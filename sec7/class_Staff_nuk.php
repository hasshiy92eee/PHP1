<?php
class Staff {
  public ?string $name = null;
  public int $age;

  public function hello() {
    
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
    $hana = new Staff();
    $taro = new Staff();
    $hana->name = "花";
    $hana->age = 21;
    // $taro->name = "太郎";
    // $taro->age = 35;
    print_r($hana);
    print_r($taro);
    $hana->hello();
    $taro->hello()
    ?>
  </pre>
</body>
</html>