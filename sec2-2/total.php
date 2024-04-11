<?php
$total = 80 + 40;
$result = $total - 5;
echo "合計 $total 、最終結果 $result ";
echo "<br>";

$x = 10;
$y = 0;
// $a = intdiv($x, $y);
try {
  $a = $x / $y;
  echo $a;
} catch (DivisionByZeroError $e) {
  // echo $e->getMessage();
  echo "ゼロはあかん";
}
echo "<br>計算終了";
