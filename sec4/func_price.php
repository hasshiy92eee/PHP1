<?php
function price($tanka, $kosu) {
  $souryou = 250;
  $ryoukin = $tanka * $kosu;
  if ($ryoukin < 5000) {
    $ryoukin += $souryou;
  }
  return $ryoukin;
}
$t = 2400;
$k = 2;
$kingaku1 = price($t, $k);

echo "金額1は {$kingaku1}円。";  // 金額1は 5050円。
