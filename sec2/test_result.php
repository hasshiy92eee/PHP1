<?php
function total($num1, $num2, $num3) {
  return $num1 + $num2 + $num3;
}
// ３教科の得点
$kokugo = 67;
$sansu = 72;
$rika = 85;
// 合計点
$goukei = total($kokugo, $sansu, $rika);
// 平均点
$heikin = $goukei/3;
// 表示
echo "合計：", $goukei, "<br>";
echo "平均点：", $heikin;
