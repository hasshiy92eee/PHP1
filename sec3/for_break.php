<?php
$list = [20, -32, 50, -5, 40];
$count = count($list);
$sum = 0;
for ($i=0; $i<$count; $i++){
  $value = $list[$i];
  if ($value < 0) {
    $sum = "マイナス{$value}なので中断しました";
    break;
  } else {
    $sum += $value;
    echo '$sum:', $sum, " ";
  }
}
echo "合計：$sum";
// 合計：マイナス-32なので中断しました
